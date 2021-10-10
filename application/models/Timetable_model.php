<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Timetable_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->dbforge();
    }

    public function remove($id) {
        $this->db->where('id', $id);
        $this->db->delete('timetables');
    }

    public function add($data) {
        if (($data['id']) != 0) {
            $this->db->where('id', $data['id']);
            $this->db->update('timetables', $data);
        } else {
            $this->db->insert('timetables', $data);
            return $this->db->insert_id();
        }
    }

    public function get($data) {
        $query = $this->db->get_where('timetables', $data);
        return $query->result_array();
    }

    //Get School days of the week
    public function getTimetableDays() {

        $query = $this->db->get('days');
        return $query->result();
    }

   //Get School Active days of the week
    public function getTimetableActiveDays() {

        $query = $this->db->get_where('days',['Active'=>'yes']);
        return $query->result();
    }

    //Get School daytime of the days
    public function getTimetableDaytime() {

        $query = $this->db->get('daytime');
        return $query->result();
    }

    //Get School venues for lessons
    public function getTimetableVenues() {

        $query = $this->db->get('timetablevenues');
        return $query->result_array();
    }

    //Get School timetable events (subjects, practicals)
    public function getTimetableEvents() {

        $query = $this->db->get('timetableevents');
        return $query->result_array();
    }

    //Get School timetable event (subject, practical)
    public function getTimetableEvent($timetableeventid) {

        $query = $this->db->get_where('timetableevents',['timetableeventid' => $timetableeventid]);
        return $query->result_array();
    }

    //Get School venues for lessons ids ONLY!
    public function getTimetableVenueIDs() {

        $this->db->select('timetablevenueid');
        $this->db->from('timetablevenues');
        $query = $this->db->get();
        return $query->result_array();
    }

    //Get School timetable events (subjects, practicals) ids ONLY!
    public function getTimetableEventIDs() {

        $this->db->select('timetableeventid');
        $this->db->from('timetableevents');
        $query = $this->db->get();
        return $query->result_array();

    }

    //Create School timetable
    public function createTimeTable($schooltimetable) {

        $this->db->empty_table('timetable');

        $schtimetables = $this->getSchTimeTable();

       foreach ($schooltimetable as $timetable) {
            /*
            $existingtimetablerecords = $this->getNoRecords($this->getTableWithConditionsQuery('timetable',$timetable));

            if ($existingtimetablerecords > 0) {
                # code...
            }else{
    
            }
           */
            $this->db->insert('timetable',$timetable);
            # code...
        }

    }


    //Get School Timetable
    public function getSchTimeTable() {

        $this->db->select('*');
        $this->db->from('timetable');
        $this->db->join('timetablevenues','timetablevenues.timetablevenueid = timetable.timetable_venueid');
        $this->db->join('timetableevents','timetableevents.timetableeventid = timetable.timetable_eventid');
        $this->db->order_by('timetable_daytimeid', 'ASC');
        $query = $this->db->get();

        return $query->result();
    }

   //Get Sch timetable with conditions
    public function getTableWithConditions($timetable,$conditions) {

        $query = $this->db->get_where($timetable,$conditions);

        if ($query) {
            return $query->result();
        }else{
            return [];
        }
    }

   //Get Sch timetable with conditions
   public function getTableWithConditionsQuery($timetable,$conditions) {

    $query = $this->db->get_where($timetable,$conditions);

    if ($query) {
        return $query;
    }else{
        return false;
    }
}

   //Get number of records
   public function getNoRecords($table) {

    if (sizeof($table)) {

        $query = $table->num_rows();

        return $query->result_array();
    }else{
        return 0;
    }
}



public function getStreamTimetable($timetableparameters){

    $this->db->select('*');
    $this->db->from('timetable');
    $this->db->join('timetablevenues','timetablevenues.timetablevenueid = timetable.timetable_venueid');
    $this->db->join('timetableevents','timetableevents.timetableeventid = timetable.timetable_eventid');
    $this->db->order_by('timetable_daytimeid', 'ASC');
    $this->db->where($timetableparameters);
    $query = $this->db->get();
    
    return $query->result();
    
}


public function getTeachersTimetable($teacherid){

    $this->db->select('subject_id');
    $this->db->from('teacher_subjects');
    $this->db->where('teacher_id',$teacherid);
    $query = $this->db->get();

    $teachersubjects = $query->result();

    foreach ($teachersubjects as $teachersubject) {

        $this->db->select('*');
        $this->db->from('timetable');
        $this->db->join('timetablevenues','timetablevenues.timetablevenueid = timetable.timetable_venueid');
        $this->db->join('timetableevents','timetableevents.timetableeventid = timetable.timetable_eventid');
        $this->db->order_by('timetable_daytimeid', 'ASC');
        $this->db->where('timetable_eventid',$teachersubject->subject_id);
        $query = $this->db->get();
        
        return $query->result();
        
    }
}

}
