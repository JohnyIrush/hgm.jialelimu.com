<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Exam_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model("Subject_model"); //subject model
    }


    //fetch all exams

    public function getExams()
    {
        $examquery = $this->db->get('exams');

        return $examquery->result();

    }

    //fetch exams and respective classes

        //fetch all exams

        public function getExamsClasses()
        {
    
            $this->db->select('*');
    
            $this->db->from('exams');
      
            $this->db->join('class', 'class.classesID = exams.Classid');
      
            $examquery = $this->db->get();

            return $examquery->result();
    
        }

    //fetch exams of respective term

    public function getTermExams($termid,$classid)
    {
  
        $examquery = $this->db->get_where('exams',['termid' => $termid,'Classid' => $classid ]);

        return $examquery->result();

    }
    //fetch selected student exams marks and respective terms

        public function getTermExamStudentMarks($termid, $classid)
        {
    

            $termexams = $this->getTermExams($termid, $classid);

            
            $alltermexams = [];

            $studenttermexams = [];

                foreach ($termexams as $termexam) {

                    $examstudentmarks = $this->getexamStudentMarks($termexam->Examid);

                  foreach ($examstudentmarks as $examstudentmark) {

                    $this->db->select('*');
    
                    $this->db->from('marks');

                    $this->db->order_by("TMarks", "DESC");
              
                    $this->db->join('student', 'student.id = marks.Studentid');
        
                    $this->db->join('exams', 'exams.Examid = marks.Examid');
        
                    $this->db->where(['marks.Examid' => $termexam->Examid, 'marks.Studentid' => $examstudentmark['Studentid']]);
              
                    $examquery = $this->db->get();
        
                    $alltermexams[$termexam->name] = $examquery->result_array();


                    
                    $studenttermexams[$examstudentmark['Name'] . $examstudentmark['AdmNo']] =  $alltermexams;
    
                    
                }
                
            }



            return ['studenttermresults' => $studenttermexams, 'examstudentmarks' => $examstudentmarks, 'termexams' => $termexams];
    
        }

    public function getexamStudentMarks($examid){

        $this->db->select('*');

        $this->db->from('marks');
    
        $this->db->order_by("TMarks", "DESC");
    
        $this->db->join('student','student.id = marks.Studentid');
    
        $this->db->join('streams','streams.Streamid = student.Sectionid');
    
        $this->db->join('class','class.classesID = student.Classid');
    
        $this->db->join('class_teacher','class_teacher.class_id = student.Classid');
    
        $this->db->join('staff','staff.id = class_teacher.staff_id');
    
         if ( isset($streamid) && $streamid != 0 ) {
    
    
    
          $this->db->where(['Examid'=>$this->session->reportdetails['examid'],'Sectionid'=>$streamid]);
    
        }else{
    
          $this->db->where(['Examid'=>$examid]);
    
        } 
    
        $studentexamdetailsarrayquery = $this->db->get();

        return $studentexamdetailsarrayquery->result_array();
    }

    public function calculateTermAverage($studenttermexammarks,$examstudentmarks){

        $studenttermexamsavarage = [];

        foreach ($examstudentmarks as $examstudentmark) {

            foreach ($studenttermexammarks[$examstudentmark['Name'] . $examstudentmark['AdmNo']] as $studenttermexams) {

                $termsubjectmarktotal = 0;

                $termsubjectmarks = [];

                $termexamno = sizeof($studenttermexams);

                $subjects = $this->Subject_model->getSubjects();

                foreach ($subjects as $subject) {

                  foreach ($studenttermexams as $studenttermexam) {

                    foreach ($subjects as $subject) {
                        
                        $termsubjectmarks[$studenttermexam->name .$subject->subject] = $studenttermexam[$subject->subject];
                    }

                    foreach ($termsubjectmarks as $termsubjectmark) {
                        
                        //$termsubjectmarktotal += $termsubjectmark[$studenttermexam->name . $subject->subject];
    
                    }

                    $studenttermexam[$subject->subject] = ($termsubjectmarktotal/$termexamno);

                    array_push($studenttermexamsavarage, $studenttermexam );
            }
        }
        }

    }

    return $studenttermexamsavarage;
    
}

}