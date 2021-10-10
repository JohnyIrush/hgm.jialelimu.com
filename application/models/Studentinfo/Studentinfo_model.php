<?php



if (!defined('BASEPATH'))

    exit('No direct script access allowed');



class Studentinfo_model extends CI_Model {



    public function __construct() {

        parent::__construct();

    }
  
    //get student details from student table
    public function get_studends($limit, $start){
        
        $this->db->limit($limit, $start);
        $query = $this->db->get('student');
        
        return $query->result();
    }

    public function record_count() {
        return $this->db->count_all("student");
    }

    //get Student detaisl
    public function get_student_details($id){
        
        $query = $this->db->get_where('student', array('id' => $id));

        return $query->result();

    }

    //Update Student details
    public function update_student_details($data, $id){
        
        extract($data);
        $this->db->where('id', $id);
        $this->db->update('student', $data);
        return true;

    }

    //Delete Student Record
    public function delete_student_record($id){
        
        $this->db->where('id', $id);
        $this->db->delete('student');


    }

 

}

