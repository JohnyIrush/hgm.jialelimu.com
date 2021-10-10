<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Term_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }


    //fetch all terms

    public function getTerms()
    {
        $termquery = $this->db->get('terms');

        return $termquery->result();
    }
    
}