<?php 































if (!defined('BASEPATH'))















    exit('No direct script access allowed');































class Exams extends Admin_Controller {























  public function __construct(){

    parent::__construct();

    $this->load->model('Studentinfo/Global_model');

    $this->load->library('session'); //load session Library

    $this->load->model("Subject_model"); //subject model

    $this->load->model("Class_model"); //Class model

    $this->load->model("Exam_model"); //Exam model

    $this->load->model("Term_model"); //Term model


  }

   /**







   * Manage Grades







  */







  public function managegrades(){


    $result['grades'] = $this->Global_model->get_records('grades');



    $this->load->view('layout/header');















    $this->load->view('exams/managegrades_view',$result);















    $this->load->view('layout/footer');















  } 















    /**







   * add new Grades







  */







  public function addgrades(){







      







    $this->load->view('layout/header');















    $this->load->view('exams/addgrades_view');















    $this->load->view('layout/footer');















  } 























  /**







   * edit Grades







  */







  public function editgrade(){















    $result['grades'] = $this->Global_model->get_record('grades',$this->uri->segment(3));







      







    $this->load->view('layout/header');















    $this->load->view('exams/editgrade_view',$result);















    $this->load->view('layout/footer');















  } 















  /*update Grade */















  public function updategrade()







  {







      $details = [







          'name' => $this->input->post('name'),







          'points' => $this->input->post('points'),







          'marks' => $this->input->post('marks'),







      ];















      $this->Global_model->update_record('grades',$details,$this->uri->segment(3));







  }























     /*create Grade */















     public function creategrade()















     {







         $details = [







             'name' => $this->input->post('name'),







             'points' => $this->input->post('points'),







             'marks' => $this->input->post('marks'),







         ];







 







         $this->db->insert('grades',$details);







 







     }















        /*delete Grade */















        public function deletegrade()















        {







            $this->Global_model->delete_record($this->uri->segment(3),'grades');







    







        }







  







  /**







   * set grade marks







  */







  public function setgrademarks(){







      







    $this->load->view('layout/header');















    $this->load->view('exams/setgrademarks_view');















    $this->load->view('layout/footer');















  } 















  /**







   * exam configuration







  */







  public function examconfiguration(){















    







    $this->db->select('*');







    $this->db->from('exams');







    $this->db->join('exammodes', 'exams.Exammodeid = exammodes.id');







    $this->db->join('class', 'class.classesID = exams.Classid');







    $this->db->join('terms', 'terms.id = exams.termid');


    $query = $this->db->get();


    $result['exams'] = $query->result();


      //print_r($query->result());







    $this->load->view('layout/header');















    $this->load->view('exams/examconfiguration_view',$result);















    $this->load->view('layout/footer');















  } 























    /**







   * Create exam







  */







  public function createexam(){















    $result['terms'] = $this->Global_model->get_records('terms');







    $result['exammodes'] = $this->Global_model->get_records('exammodes');







    $result['classes'] = $this->Global_model->get_records('class');







      







    $this->load->view('layout/header');















    $this->load->view('exams/createexam_view', $result);















    $this->load->view('layout/footer');















  } 







  







    /**







   * Add exam







  */







  public function addexam(){







            



    $details = [







      "name" => $this->input->post('examname'),







      "Classid" => $this->input->post('classid'),







      "status" => $this->input->post('status'),



      "Exammodeid" => $this->input->post('exammodeid'), 





      "termid" => $this->input->post('termid'), 



    ];







   if ($this->db->insert("exams", $details)) {



    $Exams = $this->db->order_by('Examid',"desc")

    

    ->limit(1)



    ->get('exams')



    ->row();



  

      $id = $Exams->Examid;

    



   $marks = [



    'Examid' => $id



       ];



   $studentsquery = $this->db->get_where('student',['Classid' => $details['Classid'] ]);

   $students = $studentsquery->result();



   $subjectsquery = $this->db->get('subjects');

   $subjects = $subjectsquery->result();

   

   foreach ($students as $student) {

   

     foreach ($subjects as $subject) {

      

       $marks[$subject->subject] = 0;

   

   

   }

   

   $marks['Studentid'] = $student->id;

   

   $this->db->insert("marks", $marks);

   

   }



   } 







  redirect('/exams/examconfiguration');



  





  }







  















   /*delete exam*/







   public function deleteexam()







   {



       

       $this -> db -> where('Examid', $this->uri->segment(3));

       $this -> db -> delete('exams');

       

       $this -> db -> where('Examid', $this->uri->segment(3));

       $this -> db -> delete('marks');

       

        redirect('/exams/examconfiguration');







   }







   /*update Grade */







   public function updateexam()







   {







    $details = [







      "name" => $this->input->post('examname'),







      "Classid" => $this->input->post('classid'),







      "status" => $this->input->post('status'),

      

      "Exammodeid" => $this->input->post('exammodeid'), 







      "termid" => $this->input->post('termid'), 







  ];















       //$this->Global_model->update_record('exams',$details,$this->uri->segment(3)); 

       //print_r($details);







       $this->db->where('Examid',$this->uri->segment(3));



       



       $this->db->update('exams', $details);







       redirect('/exams/examconfiguration');















   }







































  /**







   * Create exam







   */







   







  public function editexam(){















    $result['terms'] = $this->Global_model->get_records('terms');







    $result['exammodes'] = $this->Global_model->get_records('exammodes');







    $result['classes'] = $this->Global_model->get_records('class');











    



   /* $this->db->select('*');







    $this->db->from('exams');







    $this->db->join('exammodes', 'exams.Exammodeid = exammodes.id');







    $this->db->join('class', 'class.classesID = exams.Classid');







    $this->db->join('terms', 'terms.id = exams.termid');







    $examsquery = $this->db->get(); */















   $examsquery = $this->db->get_where('exams',['Examid' => $this->uri->segment(3)]);







   $result['exams'] = $examsquery->result();







      







    $this->load->view('layout/header');















    $this->load->view('exams/editexam_view',$result);















    $this->load->view('layout/footer');







    











    















  } 



























 



        /*Load */















        public function loadremarks()















        {







                $remarkcategoryid = $this->input->post('remarkcategoryid');







                $remarklanguage = $this->input->post('remarklanguage');















                $query = $this->db->get_where('remarks', ['remarkcategoryid' => $remarkcategoryid, 'remarklanguage' => $remarklanguage]);















                $result['data'] = $query->result();







                







                 $this->load->view('layout/header');







             







                 $this->load->view('exams/loadremarks_view',$result);







             







                 $this->load->view('layout/footer');























                







    







        }















        /*update remarks*/















        















        public function updateremarks()















        {































                 $details = [







                   'Kiswahiliremarks' => $this->input->post('1'), 







                   'Teacherremarks' => $this->input->post('Teacherremarks'),







                   'HeadTeacherremarks' => $this->input->post('HeadTeacherremarks'),







                   'Englishremarks' => $this->input->post('Englishremarks'),















                 ];















                 $this->Global_model->get_records_with_conditions('student',[







       







                  'id'=> $this->uri->segment(3),







                  'Gradeid'=> $this->input->post('Gradeid'),







                  ]







                );































                







          







    







        }















  /**







   * Set Remarks







   */







  public function setremarks(){















    















    $this->db->select('*');







    $this->db->from('grades');







    $this->db->join("remarks", "remarks.Gradeid = grades.id");







    $query = $this->db->get();















    $result['remarks'] = $query->result();















    $this->load->view('layout/header');















    $this->load->view('exams/setremarks_view',$result);















    $this->load->view('layout/footer');















  } 























  























  /**







   * add student marks







   */







  public function addstudentmarksadmin(){







      







    $this->load->view('layout/header');















    $this->load->view('exams/addstudentmarksadmin_view');















    $this->load->view('layout/footer');















  } 















    /**







   * add student marks







   */







  public function missingmarks(){







      







    $this->load->view('layout/header');















    $this->load->view('exams/missingmarks_view');















    $this->load->view('layout/footer');















  } 























  /**







   * add student marks







   */







  public function missingmarksreport(){







      







    $this->load->view('layout/header');















    $this->load->view('exams/missingmarksreport_view');















    $this->load->view('layout/footer');




  } 



  /**Compile End term exams results*/

    public function compileexam(){

      $this->load->helper('pdf_helper');

      $this->markscalculator(); //calculate student exam
  
      $this->position(); //set student exam position

      $result['classes'] = $this->Class_model->getClasses(); //All classes

      $result['streams'] = $this->Class_model->getStreams(); //All streams

      $result['exams'] = $this->Exam_model->getExamsClasses(); //All exams

      $result['terms'] = $this->Term_model->getTerms(); //All terms

  
      $this->load->view('layout/header');
  
      $this->load->view('exams/compileexamload_view',$result);
  
      $this->load->view('layout/footer');

  }

    /**Compile End term exams results*/

    public function compileendtermexamresults(){


      
      $result['classes'] = $this->Class_model->getClasses(); //All classes

      $result['streams'] = $this->Class_model->getStreams(); //All streams

      $result['exams'] = $this->Exam_model->getExamsClasses(); //All exams

      $result['terms'] = $this->Term_model->getTerms(); //All terms


        /*report details in session*/

      $termid = $this->input->post('termid');
    
      $classid = $this->input->post('classid');
    
  
    
      $endtermcompiledetails = [
  
        'termid' => $termid,
  
        'classid' => $classid,
        
      ];
    
      $meangradesquery = $this->db->get('setmeangrademarks'); 



      $result['meangrades'] = $meangradesquery->result(); //fetch all grades records
  
  
  
      //School settings
  
  
  
      $schoolsettingsquery = $this->db->get('schoolsettings');
  
      $result['schoolsettings'] = $schoolsettingsquery->result();
  
  
      $termsquery = $this->db->get('terms');
  
      $result['allterms'] = $termsquery->result();
  
      $examsquery = $this->db->get('exams');
  
      $result['allexams'] = $examsquery->result();
      
  
      $result['mode'] = $this->session->userdata('displaymode');
  
      $principalquery = $this->db->get_where('staff',['designation' => 1]);
  
      $result['principal'] = $principalquery->result();
    
      $this->session->set_userdata('endtermcompiledetails',$endtermcompiledetails);
 
      $studenttermexamresults = $this->Exam_model->getTermExamStudentMarks($this->session->endtermcompiledetails['termid'],$this->session->endtermcompiledetails['classid']);

      $result['studentexamdetailsarray'] = $studenttermexamresults['examstudentmarks'];
      $result['studenttermresults'] = $studenttermexamresults['studenttermresults'];
      $result['termexams'] = $studenttermexamresults['termexams'];

      $result['subjects'] = $this->Subject_model->getSubjectTeachers();
    

      //print_r($this->Exam_model->getTermExamStudentMarks($this->session->$endtermcompiledetails['termid'],$this->session->$endtermcompiledetails['classid']));
      //$result['studenttermexamresults'] = $this->Exam_model->getTermExamStudentMarks($this->session->$endtermcompiledetails['termid'],$this->session->$endtermcompiledetails['classid']);

      $this->load->view('layout/header');
  
      $this->load->view('exams/endtermcompiledresults_view',$result);
  
     $this->load->view('layout/footer');

  }







  /**Correction sheet*/

    public function correctionsheet(){







      







    $this->load->view('layout/header');















    $this->load->view('exams/correctionsheet_view');















    $this->load->view('layout/footer');















  }







  







    /**Correction sheet report*/







  







  















    public function correctionsheetreport(){







      







    $this->load->view('layout/header');















    $this->load->view('exams/correctionsheetreport_view');















    $this->load->view('layout/footer');















  }







  







      /**Generate Exam report*/





    public function generateexamreport(){



      $result['terms'] = $this->Global_model->get_records('terms');

      $result['classes'] = $this->Global_model->get_records('class');



      $this->db->select('*');

      $this->db->from('exams');

      $this->db->join('class', 'class.classesID = exams.Classid');

      $query = $this->db->get();
      
     // print_r($result['classes']);



     $result['exams'] = $query->result();



     $this->load->view('layout/header');


     $this->load->view('exams/generateexamreport_view',$result);



      $this->load->view('layout/footer');



  }







   /**Exam Report*/





   public function examreport(){



    $this->load->helper('pdf_helper');

    

    $this->markscalculator();

    $this->position();

  

    $subjects = $this->db->get('subjects');

  

    $result['subjects'] = $this->Subject_model->getSubjectTeachers();

  

  /*report details in session*/

  $examid = $this->input->post('examid');

  $classid = $this->input->post('classid');



  if (isset($examid) && isset($classid)) {

    $reportdetails = [



      'examid' => $examid,

    

      'classid' => $classid,

  

    ];



    $this->session->set_userdata('reportdetails',$reportdetails);

  }



  

  //In Object format

  

    $this->db->select('*');

  

    $this->db->from('marks');

  

    $this->db->join('student','student.id = marks.Studentid');

  

    $studentexamdetailsquery = $this->db->get();

  

    $result['studentexamdetails'] = $studentexamdetailsquery->result();



    $streamid = $this->input->post('streamid'); 

  

    //In array format

  

    $this->db->select('*');

    $this->db->from('marks');

    $this->db->order_by("TMarks", "DESC");

    $this->db->join('student','student.id = marks.Studentid');

    $this->db->join('streams','streams.Streamid = student.Sectionid');

    $this->db->join('class','class.classesID = student.Classid');

    $this->db->join('class_teacher','class_teacher.class_id = student.Classid');

    $this->db->join('staff','staff.id = class_teacher.staff_id');



    //$this->db->join('exams','exams.Examid = marks.Examid');



    //$this->db->join('terms','terms.id = exams.termid');

    

    //$this->db->join('section','section.sectionID = student.Sectionid');

    

     if ( isset($streamid) && $streamid != 0 ) {



      $this->db->where(['Examid'=>$this->session->reportdetails['examid'],'Sectionid'=>$streamid]);

    }else{

      $this->db->where(['Examid'=>$this->session->reportdetails['examid']]);

    } 

  

    $studentexamdetailsarrayquery = $this->db->get();

  
    $result['studentexamdetailsarray'] = $studentexamdetailsarrayquery->result_array();

    $result['terms'] = $this->Global_model->get_records('terms');

    $result['classes'] = $this->Global_model->get_records('class');
    
    $result['sections'] = $this->Global_model->get_records('section');

    //$streamquery = $this->db->get_where('section',['classesID' => $this->session->reportdetails['classid']]);
    $streamquery = $this->db->get('streams');

    $result['streams'] = $streamquery->result();
    

    $this->db->select('*');

    $this->db->from('exams');

    $this->db->join('class', 'class.classesID = exams.Classid');

    $query = $this->db->get();

    $result['exams'] = $query->result();



    $displaymode = $this->input->post('mode');



    if (isset($displaymode) && $displaymode=='reportcard') {



      $this->session->set_userdata('displaymode',$displaymode);



    }elseif (isset($displaymode) && $displaymode=='meritlist') {

      $this->session->set_userdata('displaymode',$displaymode);

    }



    $meangradesquery = $this->db->get('setmeangrademarks'); 



    $result['meangrades'] = $meangradesquery->result(); //fetch all grades records



    //School settings



    $schoolsettingsquery = $this->db->get('schoolsettings');

    $result['schoolsettings'] = $schoolsettingsquery->result();


    $termsquery = $this->db->get('terms');

    $result['allterms'] = $termsquery->result();

    $examsquery = $this->db->get('exams');

    $result['allexams'] = $examsquery->result();
    

    $result['mode'] = $this->session->userdata('displaymode');

    $principalquery = $this->db->get_where('staff',['designation' => 1]);

    $result['principal'] = $principalquery->result();


    $this->load->view('layout/header');

    $this->load->view('exams/examreporter_view',$result);              

    $this->load->view('layout/footer');              

    }

  



  /* Exam report generation */



  public function examreportgenerator(){



    $this->load->helper('pdf_helper');



    $result['report'] = $this->input->post('report');

    $this->load->view('exams/examreport_view',$result);

  }







  /**generate value addition*/







 public function generatevalueaddition(){



    $this->load->view('layout/header');

    $this->load->view('exams/generatevalueaddition_view');

    $this->load->view('layout/footer');



  }







  







      /**value addition report*/







 public function valueadditionreport(){







     







    $this->load->view('layout/header');















    $this->load->view('exams/valueadditionreport_view');















    $this->load->view('layout/footer');















  }







  







  







  







/**subject stream analysis*/







 public function subjectstreamanalysis(){







     







    $this->load->view('layout/header');















    $this->load->view('exams/subjectstreamanalysis_view');















    $this->load->view('layout/footer');















  }







  







  







  /**subject stream analysis report */







 public function subjectstreamanalysisreport(){







     







    $this->load->view('layout/header');















    $this->load->view('exams/subjectstreamanalysisreport_view');















    $this->load->view('layout/footer');















  }







  







    /**report per subject */







 public function reportpersubject(){







     







    $this->load->view('layout/header');















    $this->load->view('exams/reportpersubject_view');















    $this->load->view('layout/footer');















  }







  







  







  







      /**generate report per subject */







 public function generatereportpersubject(){







     







    $this->load->view('layout/header');















    $this->load->view('exams/generatereportpersubject_view');















    $this->load->view('layout/footer');















  }







  







        /**term avarage per subject */







 public function termavaragepersubject(){







     







    $this->load->view('layout/header');















    $this->load->view('exams/termavaragepersubject_view');















    $this->load->view('layout/footer');















  }







  







  







    /**term avarage per subject report */







 public function termavaragepersubjectreport(){







     







    $this->load->view('layout/header');















    $this->load->view('exams/termavaragepersubjectreport_view');















    $this->load->view('layout/footer');















  }







  







  







  







      /**overal best students */







 public function overalbeststudents(){







     







    $this->load->view('layout/header');















    $this->load->view('exams/overalbeststudents_view');















    $this->load->view('layout/footer');















  }







  







  







    /**overal best students report */







 public function overalbeststudentsreport(){







     







    $this->load->view('layout/header');















    $this->load->view('exams/overalbeststudentsreport_view');















    $this->load->view('layout/footer');















  }







  







        /**overal best per subject */







 public function overalbestpersubject(){







     







    $this->load->view('layout/header');















    $this->load->view('exams/overalbestpersubjectreport_view');















    $this->load->view('layout/footer');















  }







  







  







    /**overal best per subject report*/







 public function overalbestpersubjectreport(){







     







    $this->load->view('layout/header');















     $this->load->view('exams/overalbestpersubject_view');















    $this->load->view('layout/footer');















  }







  







  







    /**teachers performance*/







 public function teachersperformance(){







     







    $this->load->view('layout/header');















     $this->load->view('exams/teachersperformance_view');















    $this->load->view('layout/footer');















  }







  







  







      /**teachers performance report*/







 public function teachersperformancereport(){







     







    $this->load->view('layout/header');















     $this->load->view('exams/teachersperformancereport_view');















    $this->load->view('layout/footer');















  }







  







  /*percentage of exam entries*/







  







   public function percentageofexamentries(){







     







    $this->load->view('layout/header');















     $this->load->view('exams/percentageofexamentries_view');















    $this->load->view('layout/footer');















  }







  







    /*percentage of exam entries report*/







  







   public function percentageofexamentriesreport(){







     







    $this->load->view('layout/header');















     $this->load->view('exams/percentageofexamentriesreport_view');















    $this->load->view('layout/footer');















  }







  







  







  







  







    /*sms results*/







  







   public function smsresults(){







     







    $this->load->view('layout/header');















     $this->load->view('exams/smsresults_view');















    $this->load->view('layout/footer');















  }







  







  /* Assignments */







  







 







   public function assignments(){







     







    $this->load->view('layout/header');















     $this->load->view('exams/assignments_view');















    $this->load->view('layout/footer');















  }







  







    /* Upload Assignments */







  







 







   public function uploadassignments(){







     







    $this->load->view('layout/header');















    $this->load->view('exams/uploadassignments_view');















    $this->load->view('layout/footer');















  }







  







  //set meangrade demarks







  







  public function meangrademarks(){















    $result['classes'] = $this->Global_model->get_records('classes');















    $result['grades']= $this->Global_model->get_records('grades');







    







    $this->load->view('layout/header');















    $this->load->view('exams/setmeangrademarks_view',$result);















    $this->load->view('layout/footer');







      







  }







  







                /*set grade marks*/







    public function setmeangrademarks(){















      $result= $this->Global_model->get_records('grades');















      foreach ($result as $grade) {







                      







        $details = [















            'Classid'  => $this->input->post('classid'),







            'Examid'  => $this->input->post('examid' ),







            'Gradeid'  => $this->input->post('gradeid' . strval($grade->id)),







            'Minmarks' => $this->input->post('minmarks' . strval($grade->id)),




            'Maxmarks' => $this->input->post('maxmarks' . strval($grade->id)),






        ];



        //setmeangrademarks

        $this->Global_model->insert_record('setmeangrademarks',$details);

        redirect('/exams/meangrademarks');






      } 





    }







    /*Set grade marks additionals*/







    







    







    







     







    public function loadgrademarks(){







        $subjects['subjects'] = $this->Global_model->get_records('subjects');







        $classes['classes'] = $this->Global_model->get_records('classes');







    }







    /*Set mean grade marks additionals*/







     







    public function loadmeanrademarks(){







        $classes['classes'] = $this->Global_model->get_records('classes');







            }







            







            







        /*subject allocation*/















        public function subjectallocation(){















            $result['details'] = $this->Global_model->get_records('student');















            $this->load->view('layout/header');







    







            $this->load->view('subjects/subject_allocation_view', $result);







        







            $this->load->view('layout/footer');







        }







            







            







        /*allocate subject*/















        public function allocatesubject(){















            $result['details'] = $this->Global_model->get_records('student');















            $this->load->view('layout/header');







    







            $this->load->view('subjects/allocate_subject_view', $result);







        







            $this->load->view('layout/footer');







        }







































    /**







   * add student marks







   */







  public function addstudentmarks(){















    $exammarksentrydetails = array( //Stores Details of Exam for student marks entry















      'term'  => $this->input->post('term'),







      'class'     => $this->input->post('class'),







      'stream' =>  $this->input->post('stream'),







      'exam' =>  $this->input->post('exam'),







      'subject' =>  $this->input->post('subject'),







      







     );











     $this->session->set_userdata('exammarksentrydetails',$exammarksentrydetails);















    $result['terms'] = $this->Global_model->get_records('terms');





      $this->db->select('*');

      $this->db->from('exams');

      $this->db->join('terms','terms.id = exams.termid');

      $this->db->join('class','class.classesID = exams.Classid');

      $examsquery = $this->db->get();



      $result['exams'] = $examsquery->result();






    $classesquery = $this->db->get('class');
    $result['classes'] = $classesquery->result();
    

    $streamsquery = $this->db->get('streams');
    $result['streams'] = $streamsquery->result();


    $result['subjects'] = $this->Global_model->get_records('subjects');











      







    $this->load->view('layout/header');















    $this->load->view('exams/addstudentmarks_view',$result);















    $this->load->view('layout/footer');















  } 























    /*Load students to add marks*/















    public function addstudentmarksloadstudents(){







      $exammarksentrydetails = array( //Stores Details of Exam for student marks entry











        'term'  => $this->input->post('term'),







        'class'     => $this->input->post('class'),







        'stream' =>  $this->input->post('stream'),







        'exam' =>  $this->input->post('exam'),







        'subject' =>  $this->input->post('subject'),







        







       );











       $this->session->set_userdata('exammarksentrydetails',$exammarksentrydetails);











      $result['students'] = $this->Global_model->get_records_with_conditions('student',[







       







      'Sectionid'=> $this->session->userdata['exammarksentrydetails']['class'],







      ]







    ); 











    $this->session->set_userdata('selectedclassdetails',$result['students']);











    //print_r($this->session->selectedclassdetails);











    







    $classesquery = $this->db->get_where('section',['Sectionid'=> $this->session->userdata['exammarksentrydetails']['class'] ]);







    $result['classes'] = $classesquery->result();







    $result['subjects'] = $this->Global_model->get_records('subjects');







    $examquery = $this->db->get_where('exams',['Examid' => $this->session->userdata['exammarksentrydetails']['exam']]);







    $result['exams'] = $examquery->result();



     







    $this->load->view('layout/header');







    $this->load->view('exams/addstudentmarks_loaded_view',$result);







    $this->load->view('layout/footer');



















  }



























      /*Add Student marks*/







    public function addmarks(){















          $terms['term'] =  $this->Global_model->get_record('terms',$this->session->exammarksentrydetails['term']);







          $exams['exam'] = $this->Global_model->get_record('exams',$this->session->exammarksentrydetails['exam']);







          $exammodes['exammode'] = $this->Global_model->get_record('exammodes',$this->session->exammarksentrydetails['exammode']);







          $subjectsids['allocatedsubjectsids'] = $this->Global_model->get_records_with_conditions('subjectallocation',['Studentid'=>1]);







      







          /*get allocated subjects from ids*/







          $allocatedsubjects['allocatedsubjects'] = []; //will be appendend by loop below







      







          /*foreach ($alocatedsubjectids as $allocatedsubjectid) {







                   $allocatedsubjects .= $this->Global_model->get_record('subjects',$alocatedsubjectid);







          }*/







      







          $subject['subject'] = $this->Global_model->get_record('subjects',$this->session->exammarksentrydetails['subject']); //The subject marks to be entered







      







          $students['studentdetails'] = $this->Global_model->get_record('student',$this->uri->segment(3)); //















          $this->load->view('layout/header');







    







          $this->load->view('exams/addmarks/add_marks_view',$term,$exam,$exammode,$allocatedsubjects, $subject, $students);







      







          $this->load->view('layout/footer');   















    }































    //Get Student allocated subjects exam marks















    public function allocatedsubjectexammarks(){











      $result['subjects'] = $this->Global_model->get_records('subjects');







      $this->session->set_userdata('currentstudentexamentry',$this->uri->segment(3)); //store current student id whose marks is entered 











      /*$this->db->select('*');



      $this->db->from('student');



      $this->db->join('marks','marks.Studentid = ' . $this->uri->segment(3),'"student.Sectionid ="' . $this->uri->segment(3) );



      $this->db->join('section','section.sectionID = student.Sectionid');



      $marksquery = $this->db->get();  */



  







      $studentmarksquery = $this->db->get_where('marks',['Studentid' => $this->uri->segment(3),'Examid' => $this->session->userdata['exammarksentrydetails']['exam']]);

      $result['studentmarks'] = $studentmarksquery->result_array();


      $studentquery = $this->db->get_where('student',['id' => $this->uri->segment(3)]);



      $result['students'] = $studentquery->result();



      







      $this->db->select('*');



      $this->db->from('exams');



      $this->db->join('terms', 'terms.id = exams.termid');



      $this->db->join('exammodes', 'exammodes.id = exams.Exammodeid');



      $this->db->where(['Examid' => $this->session->userdata['exammarksentrydetails']['exam']] );



      $examdetailsquery = $this->db->get();






      $this->load->view('layout/header');







    







      $this->load->view('exams/addmarks/enter_marks_view',$result);







  







      $this->load->view('layout/footer'); 







      















    }















    







    //Create marks

    public function createmarks(){


      /*take marks entered for the student depending on subject allocated*/

      $marks = [


        'Studentid' => $this->uri->segment(3),


        'Examid' => $this->session->exammarksentrydetails['exam']


   ];

   $allsubjects = $this->Global_model->get_records('subjects');


  foreach ($allsubjects as $subject) {

    if ($this->input->post('exammode') == 1) { //full paper a number of papers

      $fullpaper = 0;

      if ($subject->paperno == 2) {

        for ($i=1; $i <= $subject->paperno + 1 ; $i++) { 

          $fullpaper = $fullpaper + (int)$this->input->post($student->id . $subject->id . $i);

          $marks['Studentid'] = $student->id;

        }

        $marks[$subject->subject] = ($fullpaper/2);

      }elseif ($subject->paperno == 3) {

        $paperonetwo =0;

       // for ($i=1; $i <= $subject->paperno; $i++) { 

          $paperonetwo = (int)$this->input->post($student->id . $subject->id . 1) + (int)$this->input->post($student->id . $subject->id . 2);

          $marks['Studentid'] = $student->id;
          
          //$papercounter = $i;

        //}

        $marks[$subject->subject] =  (int)$this->input->post($student->id . $subject->id . 3) +  (($paperonetwo * 60 )/200);
      }

    }else{ //single paper mode only one paper

      //print_r('In else');

      $marks[$subject->subject] = $this->input->post($subject->id);


    }

  }


  $existingrecords = $this->db->get_where('marks',['Examid' => $marks['Examid'],'Studentid' => $marks['Studentid']]);

  if ( $existingrecords->num_rows() > 0 ) 
  {

     $this->db->where(['Examid' => $marks['Examid'],'Studentid' => $marks['Studentid']]);

     $this->db->update('marks',$marks);
     $this->allocatedsubjectexammarks();


  } else {
    
     $this->db->insert('marks',$marks);
     $this->allocatedsubjectexammarks();
          


  }

        $subjectquery = $this->db->get_where('subjects',['id' => $this->session->exammarksentrydetails['subject'] ]);



        $studentquery = $this->db->get_where('student',['id' => $this->session->currentstudentexamentry]);

        $result['studentdetails'] = $studentquery->result();



        $result['subjects'] = $subjectquery->result();



        $classesquery = $this->db->get_where('section',['Sectionid'=> $this->session->userdata['exammarksentrydetails']['class'] ]);


        $result['classes'] = $classesquery->result();

        $result['subjects'] = $this->Global_model->get_records('subjects');


        $examquery = $this->db->get_where('exams',['Examid' => $this->session->userdata['exammarksentrydetails']['exam']]);


        $result['exams'] = $examquery->result();




    }







    /*Load stream students with slected subjected*/


    public function addstudentmarkspersubjectloadstudents(){


      $exammarksentrydetails = array( //Stores Details of Exam for student marks entry


        'term'  => $this->input->post('term'),


        'class'     => $this->input->post('class'),


        'stream' =>  $this->input->post('stream'),


        'exam' =>  $this->input->post('exam'),


        'subject' =>  $this->input->post('subject'),



       );




      $this->session->set_userdata('exammarksentrydetails',$exammarksentrydetails);

    /*Join student details with marks where section id is selected*/


    $this->db->select('*');

    $this->db->from('student');

    $this->db->join('marks', 'marks.Studentid = student.id');

    $this->db->where(['Sectionid' => $this->session->userdata['exammarksentrydetails']['stream'], 'Classid' => $this->session->userdata['exammarksentrydetails']['class'],'Examid' => $this->session->userdata['exammarksentrydetails']['exam']]);


    $studentsquery = $this->db->get();

    $result['students'] = $studentsquery->result_array();

    $this->session->set_userdata('selectedclassdetails',$result['students']);


    $classesquery = $this->db->get_where('class',['classesID'=> $this->session->userdata['exammarksentrydetails']['class'] ]);


    $result['classes'] = $classesquery->result();



    $subjectquery = $this->db->get_where('subjects',['id'=>$this->session->userdata['exammarksentrydetails']['subject']]);



    $result['subjects'] = $subjectquery->result();



    $examquery = $this->db->get_where('exams',['Examid' => $this->session->userdata['exammarksentrydetails']['exam']]);


    $result['exams'] = $examquery->result();


    $streamsquery = $this->db->get('streams');
    $result['streams'] = $streamsquery->result();


    $this->load->view('layout/header');
    $this->load->view('exams/addmarks/addmarkspersubject_view',$result);
    $this->load->view('layout/footer');



  }







    







    /*create  marks per subject for all students*/







    public function createmarkspersubject(){


      /*take marks entered for the student depending on subject allocated*/

      $marks = [

           'Examid' => $this->session->exammarksentrydetails['exam']

      ];


      $subjectquery = $this->db->get_where('subjects',['id'=>$this->session->userdata['exammarksentrydetails']['subject']]);

      $subjects = $subjectquery->result(); //subject whose marks is to be entered

      $studentsquery = $this->db->get_where('student',['Classid'=> $this->session->userdata['exammarksentrydetails']['class'] ]);

      $students = $studentsquery->result(); //selected stream students

      foreach ($students as $student) {

       // print_r('In students');
        foreach ($subjects as $subject) {
          //print_r('In subjects');

          if ($this->input->post('exammode') == 1) { //full paper a number of papers

            $fullpaper = 0;

            if ($subject->paperno == 2) {

              for ($i=1; $i <= $subject->paperno + 1 ; $i++) { 

                $fullpaper = $fullpaper + (int)$this->input->post($student->id . $subject->id . $i);
  
                $marks['Studentid'] = $student->id;
  
              }
  
              $marks[$subject->subject] = ($fullpaper/2);

            }elseif ($subject->paperno == 3) {

              $paperonetwo =0;

             // for ($i=1; $i <= $subject->paperno; $i++) { 

                $paperonetwo = (int)$this->input->post($student->id . $subject->id . 1) + (int)$this->input->post($student->id . $subject->id . 2);
  
                $marks['Studentid'] = $student->id;
                
                //$papercounter = $i;

              //}

              $marks[$subject->subject] =  (int)$this->input->post($student->id . $subject->id . 3) +  (($paperonetwo * 60 )/200);
            }

          }else{ //single paper mode only one paper

            //print_r('In else');

            $marks[$subject->subject] = $this->input->post($student->id . $subject->id);

            $marks['Studentid'] = $student->id;

           $checker = 'Studentid: ' . $student->id . ' Subject Marks:  '  . $this->input->post($student->id . $subject->id);


          }

        }


        $existingrecords = $this->db->get_where('marks',['Examid' => $marks['Examid'],'Studentid' => $student->id]);

        if ( $existingrecords->num_rows() > 0 ) 
        {

            //print_r($marks);

           $this->db->where(['Examid' => $marks['Examid'],'Studentid' => $student->id]);

           $this->db->update('marks',$marks);

        } else {

            //print_r($marks);
           $this->db->insert('marks',$marks);

        }

      }


    /*save changes to session for page refresh*/


    /*Join student details with marks where section id is selected*/

    $this->db->select('*');

    $this->db->from('student');

    $this->db->join('marks', 'marks.Studentid = student.id');

    $this->db->where(['Classid' => $this->session->userdata['exammarksentrydetails']['class']]);

    $studentsquery = $this->db->get();

    $result['students'] = $studentsquery->result_array();

    $this->session->set_userdata('selectedclassdetails',$result['students']);

        $subjectquery = $this->db->get_where('subjects',['id' => $this->session->exammarksentrydetails['subject'] ]);

        $studentquery = $this->db->get_where('student',['id' => $this->session->currentstudentexamentry]);

        $result['subjects'] = $subjectquery->result();

        $result['studentdetails'] = $studentquery->result();

        $classesquery = $this->db->get_where('class',['classesID'=> $this->session->userdata['exammarksentrydetails']['class'] ]);

        $result['classes'] = $classesquery->result();

        $subjectquery = $this->db->get_where('subjects',['id'=>$this->session->userdata['exammarksentrydetails']['subject']]);

        $result['subjects'] = $subjectquery->result();

        $examquery = $this->db->get_where('exams',['Examid' => $this->session->userdata['exammarksentrydetails']['exam']]);

        $result['exams'] = $examquery->result();

        $streamsquery = $this->db->get('streams');
        $result['streams'] = $streamsquery->result();


        $this->load->view('layout/header');

        $this->load->view('exams/addmarks/addmarkspersubject_view',$result);

        $this->load->view('layout/footer');


    }















    /*Update Student marks*/







    public function updatemarks(){















      $markdetails = [















        'Subjectid' => $this->input->post('subjectid'),







        'Studentid' => $this->input->post('Studentid'),







        'Examid' => $this->input->post('Examid'),







        'marks' => $this->input->post('marks'),







        'Termid' => $this->input->post('Termid'),







        'Subjectid' => $this->input->post('subjectid'),







      ];















      $this->db->insert('marks', $markdetails);



      



      







    }











  /*Exam results Calculator*/



  



  public function markscalculator(){







    $marksquery = $this->db->get('marks'); 



    $marks = $marksquery->result_array(); //fetch all marks records







    $subjectsquery = $this->db->get('subjects'); 



    $subjects = $subjectsquery->result(); //fetch all subjects records







    $meangradesquery = $this->db->get('setmeangrademarks'); 



    $meangrades = $meangradesquery->result(); //fetch all grades records



    



    //print_r($meangrades);







    foreach ($marks as $mark) { //looping through all marks records







        $TMarks = 0; //Total marks
        $TPoints = 0; //Total points

        foreach ($subjects as $subject) { //looping through all marks records



            if ($mark[$subject->subject]>0) { //check if subject is taken by student and add marks to TMarks (subject is taken if it is greater than 0)


                $TMarks += $mark[$subject->subject];




                foreach ($meangrades as $meangrade) { //loop through all meangrades set


                  if ($mark[$subject->subject] >= $meangrade->Minmarks && $mark[$subject->subject] <= $meangrade->Maxmarks) { //assign mean grade with mean score
  
  
                      $gradesquery = $this->db->get_where('grades',['id' => $meangrade->Gradeid]); 
  
  
  
                      $grades = $gradesquery->result(); //Get the Grade for mean score
  
  
  
                      //print_r($grades);
  
  
  
  
                      foreach ($grades as $grade) { 
  
  
  
                          $MGR = $grade->grade;
  
                          
  
                          $TPoints += $grade->points;
  
  
                      }
                  }
  
              }







            }



            $examquery =$this->db->get_where('exams', ['Examid' => $this->session->reportdetails['examid'] ] );
            $examdetails = $examquery->result();

            foreach ($examdetails as $examdetail) {
              if ($examdetail->Classid == 1 || $examdetail->Classid == 2) {

                $MScore = number_format((float)($TMarks/11), 2, '.', ''); //calculate meanscore
 
             }else{
 
               $MScore = number_format((float)($TMarks/8), 2, '.', ''); //calculate meanscore
 
             }
            }


            foreach ($meangrades as $meangrade) { //loop through all meangrades set


                if ($TPoints >= $meangrade->Minmarks && $TPoints <= $meangrade->Maxmarks) { //assign mean grade with mean score



                    



                    $gradesquery = $this->db->get_where('grades',['id' => $meangrade->Gradeid]); 



                    $grades = $gradesquery->result(); //Get the Grade for mean score



                    //print_r($grades);




                    foreach ($grades as $grade) { 



                        $MGR = $grade->grade;

                        

                        //$TPoints = $grade->points;







                    }



                }



            }















        }







       



        $this->db->where('Markid',$mark['Markid']);



        $this->db->update('marks',['TMarks' => $TMarks,'MScore' => $MScore, 'MGR' => $MGR, 'TPoints ' => $TPoints ]); //update Tmarks Mscore & Mgr







    }

    





  }





/*Process form position*/

public function position(){

  $examsquery = $this->db->get('exams');
  $exams = $examsquery->result();

    foreach ($exams as $exam) {
    
      /*Calculate Form position*/
      $this->db->select('*');
      $this->db->from('marks');
      $this->db->order_by("TMarks", "DESC");
      $this->db->where(['Examid' => $exam->Examid]);
      $exammarksquery = $this->db->get(); 
    
      $exammarks = $exammarksquery->result();
    
      $exammarkstotalrank = $exammarksquery->num_rows();
    
        //for ($i=1; $i <= $exammarkstotalrank ; $i++) { 
           $totalrank = $exammarkstotalrank;
          foreach ($exammarks as $exammark) {

            
            $this->db->where('Markid', $exammark->Markid);
            $this->db->update('marks',['FRP' => (($totalrank + 1) - ($exammarkstotalrank--)), 'Totalformrank' => $totalrank ]);
    
        }
     // }

      
      /*Calculate stream position*/
  
      $sectionsquery =  $this->db->get('section');
      $sections = $sectionsquery->result();

      foreach ($sections as $section) {
        $this->db->select('*');
        $this->db->from('marks');
        $this->db->join('student', 'student.id = marks.Studentid');
        $this->db->order_by("TMarks", "DESC");
        $this->db->where(['Examid' => $exam->Examid,'Sectionid' => $section->sectionID]);
        $streamexammarksquery = $this->db->get(); 
      
        $streamexammarks = $streamexammarksquery->result();
      
        $streamexammarkstotalrank = $streamexammarksquery->num_rows();

        $streamtotalrank = $streamexammarkstotalrank;
        foreach ($streamexammarks as $streamexammark) {
    
          //for ($i=1; $i <= $streamexammarkstotalrank; $i++) { 
            
            $this->db->where('Markid', $streamexammark->Markid);
            $this->db->update('marks',['CLP' => (($streamtotalrank + 1) - ($streamexammarkstotalrank--)), 'Totalclassrank' => $streamtotalrank  ]);
      
         // }
        }
      }

    
    }

    //print_r($exammarkstotalrank);
    //print_r('Stream');
    //print_r($streamexammarkstotalrank);
    
    
          
      }





















}