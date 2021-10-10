<?php 



if (!defined('BASEPATH'))



    exit('No direct script access allowed');



class Student extends Admin_Controller {



  public function __construct(){

      

    parent::__construct();

    $this->load->model('Studentinfo/Global_model');

    $this->load->library('session'); //load session Library

    $this->load->model('Studentinfo/Studentinfo_model');

    $this->load->helper('url');

    $this->load->library('upload');

  } 

  

      /**

     * Student Details

    */

    public function studentdetails()
    {

        $classid = 0;
        $streamid = 0;

        $classid = $this->input->post('classid');
        $streamid = $this->input->post('streamid');


        $result['data'] = [];

        if ($classid >= 1 && $streamid >= 1) {

          $studentquery =  $this->db->get_where('student',['Sectionid' => $this->input->post('streamid'), 'Classid' => $this->input->post('classid')  ]);

          $result['data'] = $studentquery->result();

        } 


        $classesquery = $this->db->get('class');

        $result['classes'] = $classesquery->result();

        $streamquery = $this->db->get('streams');

        $result['streams'] = $streamquery->result();

        $hostelquery = $this->db->get('hostels');
        $result['hostels'] = $hostelquery->result();

        //echo 'Classid: ' . $classid . ' ' . 'Streamid: ' . $streamid;

        $result['classid'] = $classid;

        $this->load->view('layout/header');

        $this->load->view('student/Studentinfo/details_view',$result);

        $this->load->view('layout/footer');



    }

        //Add New Student

        public function addstudent(){

          /*Upload profile picture*/

          $config['upload_path'] = './backend/images/student/';
          $config['allowed_types'] = 'gif|jpg|png';
          $config['max_size'] = '100';
          $config['max_width'] = '1024';
          $config['max_height'] = '768';

          $this->load->library('upload', $config);
          $this->upload->do_upload();


          $profileImageName = time() . '-' . $_FILES["profileImage"]["name"];

          $profileImageName ='default.png';

          /*

            $profileImageName = time() . '-' . $_FILES["profileImage"]["name"];
            // For image upload
            $target_dir =  "backend/images/student";
            $target_file = $target_dir . basename($profileImageName);
            
            move_uploaded_file($_FILES["profileImage"]["tmp_name"], $target_file);

            */

          /*Upload profile picture*/

         //print_r($this->upload->data());


    
          
          $details = [
  
              "AdmNo" => $this->input->post("AdmNo"),
  
              "Sectionid" => $this->input->post("streamid"),

              "hostelid" => $this->input->post("hostelid"),

              "Classid" => $this->input->post("classid"),
  
              "Name" => $this->input->post("name"),
  
              "EntryMarks" => $this->input->post("EntryMarks"),
  
              "FormerSchool" => $this->input->post("FormerSchool"),
  
              "Parentphone" => $this->input->post("Parentphone"),
  
              "Gender" => $this->input->post("Gender"),
  
              "Boarderorday" => $this->input->post("Boarderorday"),
  
              "dob" => $this->input->post("dob"),
  
              "photo" => $profileImageName,
  
              "address" => $this->input->post("address")
  
          ];
  
          
  
          //print_r($details);
          $this->db->insert("student", $details);

           redirect(base_url() . 'student/details');
  
  
      }





  /*generate classlist pdf*/

  

  public function printclasslist(){

    $this->load->helper('pdf_helper');

    //$result['report'] = $this->input->post('classlistpdf');
    $result['report'] = 'Test';

    $this->load->view('exams/examreport_view',$result);

    

  }

    /* Edit Student information*/



    public function editstudentinfo(){

      $studentquery = $this->db->get_where('student',['id' => $this->uri->segment(3)]);

      $result['data'] = $studentquery->result();

      $classesquery = $this->db->get('class');

      $result['classes'] = $classesquery->result();

      $streamquery = $this->db->get('streams');

      $result['streams'] = $streamquery->result();

      $hostelquery = $this->db->get('hostels');
      $result['hostels'] = $hostelquery->result();


      $this->load->view('layout/header');



      $this->load->view('student/Studentinfo/edit_view', $result);



      $this->load->view('layout/footer');







}



  /* Edit Student information*/



  public function updatestudentinfo(){


      $details = [

        "AdmNo" => $this->input->post("AdmNo"),
  
        "Sectionid" => $this->input->post("streamid"),

        "hostelid" => $this->input->post("hostelid"),

        "Classid" => $this->input->post("classid"),

        "Name" => $this->input->post("name"),

        "EntryMarks" => $this->input->post("EntryMarks"),

        "FormerSchool" => $this->input->post("FormerSchool"),

        "Parentphone" => $this->input->post("Parentphone"),

        "Gender" => $this->input->post("Gender"),

        "Boarderorday" => $this->input->post("Boarderorday"),

        "dob" => $this->input->post("dob"),

        "photo" => $this->input->post("photo"),

        "address" => $this->input->post("address")

      ];

      
      $this->db->where('id',$this->input->post("id"));
      $this->db->update('student',$details);
      
      /*
      $student = $this->db->order_by('id',"desc")

    

      ->limit(1)
  
  
  
      ->get('student')
  
  
      ->row();
      
      print_r($student); */

      redirect(base_url() .'student/details');

}









/*Display student profile*/



 public function showstudentinfo(){



      $result['data'] = $this->Studentinfo_model->get_student_details($this->uri->segment(3));

      $classesquery = $this->db->get('section');

      $result['classes'] = $classesquery->result();

      foreach ($result['data'] as $student) {
         $parentid =  $student->Parentid;
      }
     
      if ($parentid != null && $parentid != 0 ) {

        $this->db->where('id',$parentid);
        $parentsquery = $this->db->get('parents');
        $result['parents'] = $parentsquery->result();

      }

      //print_r($result['parents']);
      $this->load->view('layout/header');



      $this->load->view('student/Studentinfo/show_view',$result);



      $this->load->view('layout/footer');





}



  /*Display student profile*/



  public function deletestudentinfo(){


    
   $this->db->where('id',$this->uri->segment(3));
   $this->db->delete('student');

   redirect(base_url() .'student/details');



}

/*Manage parents*/



public function manageparents(){



  /*pagination for parents */
  
  $config["base_url"] = base_url() . "/parents/manageparents";
  $config["total_rows"] = $this->db->count_all('parents');
  $config["per_page"] = 10;
  $config["uri_segment"] = 3;
  /*
    start 
    add boostrap class and styles
  */
  $config['full_tag_open'] = '<ul class="pagination">';        
  $config['full_tag_close'] = '</ul>';        
  $config['first_link'] = 'First';        
  $config['last_link'] = 'Last';        
  $config['first_tag_open'] = '<li class="page-item"><span class="page-link">';        
  $config['first_tag_close'] = '</span></li>';        
  $config['prev_link'] = '&laquo';        
  $config['prev_tag_open'] = '<li class="page-item"><span class="page-link">';        
  $config['prev_tag_close'] = '</span></li>';        
  $config['next_link'] = '&raquo';        
  $config['next_tag_open'] = '<li class="page-item"><span class="page-link">';        
  $config['next_tag_close'] = '</span></li>';        
  $config['last_tag_open'] = '<li class="page-item"><span class="page-link">';        
  $config['last_tag_close'] = '</span></li>';        
  $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';        
  $config['cur_tag_close'] = '</a></li>';        
  $config['num_tag_open'] = '<li class="page-item"><span class="page-link">';        
  $config['num_tag_close'] = '</span></li>';
  /*
    end 
    add boostrap class and styles
  */

  $this->pagination->initialize($config);

  $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

  $result["links"] = $this->pagination->create_links();

  $this->db->limit($config["per_page"], $page);

  $parentsquery = $this->db->get('parents');

  $result['parents'] = $parentsquery->result();    

  $this->load->view('layout/header');

  $this->load->view('student/Manageparents/manageparents_view',$result);

  $this->load->view('layout/footer');

}



/*add parents*/



public function addparents(){



$this->load->view('layout/header');



$this->load->view('student/Manageparents/addparents_view');



$this->load->view('layout/footer');



}



/*edit parents*/



public function editparents(){



$result['data'] = $this->Global_model->get_record('parents',$this->uri->segment(3));



$this->load->view('layout/header');



$this->load->view('student/Manageparents/editparents_view', $result);



$this->load->view('layout/footer');



}


/*enrollment by age*/



public function enrollmentbyage(){

    

  /*Display No students enrolled  with ages*/

  

  $streams = $this->Global_model->get_records('streams'); //fetch streams



   $ages = []; //age details to be appended by loop



   $agelimit = 13; //display no below 13 years upto 18 years and above



  foreach ($streams as $stream) { //loop through streams



      for ($i=$agelimit; $i <=18 ; $i++) {  //

/*

          $ages .= [

              'agelimit' => $agelimit,

              'stream' => $stream->name,

              'classid' => $stream->Classid,

              'male' => $this->Global_model->count_records('student',['Streamid'=>$stream->id,'Gender'=>'Male', 'dob <=',  date_sub(getDate(strtotime(date("Y/m/d"))),date_interval_create_from_date_string(strval($agelimit) . 'years'))]),

              'female' => $this->Global_model->count_records('student',['Streamid'=>$stream->id,'Gender'=>'Female', 'dob <=',  date_sub(getDate(strtotime(date("Y/m/d"))),date_interval_create_from_date_string( strval($agelimit) . 'years'))]),

       ];  

  */

  

          

      }

  }



  $this->load->view('layout/header');



  $this->load->view('student/Enrollment/enrollmentbyage_view',$ages);



  $this->load->view('layout/footer');



}





/*enrollment by gender*/



public function enrollmentbygender(){

  $streamsquery = $this->db->get('section');
  $streams = $streamsquery->result_array();

  $studentquery = $this->db->get('student');
  $students = $studentquery->result();

  //foreach ($students as $student) {
        
    foreach ($streams as $stream) {
      
      $streamstudentsfemalesquery = $this->db->get_where('student',['sectionID' => $stream['sectionID'], 'Gender' => 'Female' ]);
      $streamstudentsfemales = $streamstudentsfemalesquery->num_rows();

      $streamstudentsmalesquery = $this->db->get_where('student',['sectionID' => $stream['sectionID'], 'Gender' => 'Male' ]);
      $streamstudentsmales = $streamstudentsmalesquery->num_rows();

      //print_r($streamstudentsfemales);

      //$streams['female'] = $streamstudentsfemales;
     // $streams['male'] = $streamstudentsmales;

      $this->db->where('sectionID',$stream['sectionID']);
      $this->db->update('section',['female' =>$streamstudentsfemales,'male' => $streamstudentsmales]);

    }
    $result['genders'] = $streams;
 // }
  
  $this->load->view('layout/header');

  $this->load->view('student/Enrollment/enrollmentbygender_view', $result);

  $this->load->view('layout/footer');

}


/*Promote or demote students*/

public function promotedemote(){

  $classesquery = $this->db->get('class');

  $result['classes'] = $classesquery->result();

  $this->load->view('layout/header');

  $this->load->view('student/promotedemote/promote_demote_view',$result);

  $this->load->view('layout/footer');

}



/*Promote or demote students*/

public function promotedemotestudents(){

$currentclassid = $this->input->post('currentclassid');
$newclassid = $this->input->post('newclassid');

$this->db->where(['Classid'=> $currentclassid]);
$this->db->update('student',['Classid' => $newclassid]);

redirect(base_url() .'students/promotedemote');



}



}

