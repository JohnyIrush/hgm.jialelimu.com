<?php



if (!defined('BASEPATH'))

    exit('No direct script access allowed');



class Global_model extends CI_Model {



    public function __construct() {

        parent::__construct();

    }
  
    //get limited records -> pagination
    public function get_limited_records($limit, $start, $tablename){
        
        $this->db->limit($limit, $start);
        $query = $this->db->get($tablename);
        
        return $query->result();
    }

    //get number of records with no conditions
    public function record_count($tablename) {
        return $this->db->count_all($tablename);
    }

    //Create new record

    public function insert_record($tablename, $record){

        $this->db->insert($tablename, $record);
    } 

    //get a single record of specific id condition
    public function get_record($tablename,$id){
        
        $query = $this->db->get_where($tablename, array('id' => $id));

        return $query->result();

    }
    
        //fetch table records
    public function get_records($tablename){
        
        
        $query = $this->db->get($tablename);
        
        return $query->result();

    }

    //Update Student details
    public function update_record($tablename,$data, $id){
        
        extract($data);
        $this->db->where('id', $id);
        $this->db->update($tablename, $data);
        return true;

    }

    //Delete Student Record
    public function delete_record($id, $tablename){
        
        $this->db->where('id', $id);
        $this->db->delete($tablename);


    }

    //get number of records with conditions
    public function count_records($tablename,$conditions) {
        
        $this->db->get($tablename);
        
        $this->db->where($tconditions);
        
        $this->db->count_all($tablename);
        
        return $query->results();
    }


    //get records of specific meeting conditions
    public function get_records_with_conditions($tablename,$conditions){
        
        $query = $this->db->get_where($tablename, $conditions);

        return $query->result();

    }

   //Insert multiple records
    public function insert_multiple_records($tablename,$records){
        
       $this->db->insert_batch($tablename, $records);

    }

    



    


 

}

