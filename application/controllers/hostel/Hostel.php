<?php 

if (!defined('BASEPATH'))

exit('No direct script access allowed');

class Hostel extends Admin_Controller {


    public function __construct(){
        parent::__construct();
        $this->load->library('session'); //load session Library


  }

  public function hostels(){ //display hostels for management

    $hostelquery = $this->db->get('hostels');
    $result['hostels'] = $hostelquery->result();

    $this->load->view('layout/header');
    $this->load->view('hostel/index_view',$result);
    $this->load->view('layout/footer');

  }

  public function edit(){

    $hostelquery = $this->db->get_where('hostels',['Hostelid' => $this->uri->segment(3) ]);
    $result['hostels'] = $hostelquery->result();

    $this->load->view('layout/header');
    $this->load->view('hostel/edit_view',$result);
    $this->load->view('layout/footer');

  }

  public function create(){

        $hostel = [
          'hostelname' => $this->input->post('hostelname'),
        ];

        $this->db->insert('hostels',$hostel);

        redirect('/hostel/hostels');

  }

  public function update(){

    $hostel = [
      'hostelname' => $this->input->post('hostelname'),
    ];

    $this->db->where('Hostelid',$this->uri->segment(3));
    $this->db->update('hostels',$hostel);

    redirect('/hostel/hostels');

  }

  public function delete(){

        $this->db->where('Hostelid',$this->uri->segment(3));
        $this->db->delete('hostels');
        redirect('/hostel/hostels');
  }

}


