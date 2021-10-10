<?php







if (!defined('BASEPATH')) {



    exit('No direct script access allowed');



} 







class Subject extends Admin_Controller



{



    public function __construct()



    {



        parent::__construct();







        $this->load->helper('url');



        //load model 



        $this->load->model("Global_model");

        //load library 



        $this->load->library('pagination'); 









    }

    

    /*Display subject categories*/



    public function subjectcategories()



    {

    



        $config['base_url'] = base_url().'subjects/subjectcategories';        



        $config['total_rows'] = 100;        



        $config['per_page'] = 5;        



        $config['uri_segment'] = 3;        



        $config['full_tag_open'] = '<ul class="pagination">';        



        $config['full_tag_close'] = '</ul>';        



        $config['first_link'] = 'First';        



        $config['last_link'] = 'Last';        



        $config['first_tag_open'] = '<li>';        



        $config['first_tag_close'] = '</li>';        



        $config['prev_link'] = '&laquo';        



        $config['prev_tag_open'] = '<li class="prev">';        



        $config['prev_tag_close'] = '</li>';        



        $config['next_link'] = '&raquo';        



        $config['next_tag_open'] = '<li>';        



        $config['next_tag_close'] = '</li>';        



        $config['last_tag_open'] = '<li>';        



        $config['last_tag_close'] = '</li>';        



        $config['cur_tag_open'] = '<li class="active"><a href="#">';        



        $config['cur_tag_close'] = '</a></li>';        



        $config['num_tag_open'] = '<li>';        



        $config['num_tag_close'] = '</li>';



        



        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;



        $this->pagination->initialize($config);        



        $data['links'] = $this->pagination->create_links();        



        $result['data'] = $this->Global_model->get_limited_records($config["per_page"], $page,'subjectcategories');



        $this->load->view('layout/header');



        $this->load->view('subjects/subject_categories_view',$result);

    

        $this->load->view('layout/footer');

                                  



     



    }





        /*Create subject category*/



        public function createsubjectcategory()



        {



            $details = [

                'category' => $this->input->post('category'),

                'description' => $this->input->post('description'),

            ];

    

            $this->db->insert('subjectcategories',$details);            

         

    

        }



        /*Render category edit form*/

        public function editsubjectcategory()



        {

            $subjectcategories['subjectcategories'] = $this->Global_model->get_records('subjectcategories');



            $result['data'] = $this->Global_model->get_record('subjects',$this->uri->segment(3));



            $this->load->view('layout/header');



            $this->load->view('subjects/edit_subject_categories_view',$result);

        

            $this->load->view('layout/footer');        

         

    

        }



        /*Render category edit form*/

        public function updatesubjectcategory()



        {

            $details = [

                'category' => $this->input->post('category'),

                'description' => $this->input->post('description'),

            ];



            $this->$this->Global_model->update_record($this->uri->segment(3),'subjectcategories',$details);



        }



        /*delete subject category*/

        public function deletesubjectcategory()



        {



            $this->$this->Global_model->delete_record($this->uri->segment(3),'subjectcategories');



        }



        /*Dislay subjects*/



        public function subjects()



        {

            $result['data'] = $this->Global_model->get_records('subjects'); //fetch subject categories from table



            /*joining subjects and categories to get category details*/



            $this->db->select('*');

            $this->db->from('subjectcategories');

            $this->db->select('subjectcategories.category');

            $this->db->join('subjects', 'subjectcategories.id = subjects.subjectcategoryid');

            $query = $this->db->get();



            $result['data'] = $query->result();



            //print_r($result);

    

            $this->load->view('layout/header');

    

            $this->load->view('subjects/subjects_view',$result);

        

            $this->load->view('layout/footer');

         

    

        }



        /*Render subject create form*/



        public function addsubject()



        {

            

            $this->load->view('layout/header');

    

            $this->load->view('subjects/add_subjects_view');

        

            $this->load->view('layout/footer');

         



        }



        /*Render subject edit form*/



        public function editsubject()



        {

            $result['subjects'] = $this->Global_model->get_record('subjects',$this->uri->segment(3));

            $result['subjectcategories'] = $this->Global_model->get_records('subjectcategories');



            $this->load->view('layout/header');

    

            $this->load->view('subjects/edit_subject_view', $result);

        

            $this->load->view('layout/footer');

         

    

        }



        /*Create subject*/



        public function createsubject()



        {



            $details = [

                'category' => $this->input->post('category'),

                'subject' => $this->input->post('subject'),

                'description' => $this->input->post('description'),

                'code' => $this->input->post('code'),

            ];

    

           $this->db->insert('subjects',$details);   

           $errMess = $this->db->_error_message();

           print_r($errMess);

                    

         

    

        }





        /*update subject details*/

        public function updatesubject()



        {

            $details = [

                'category' => $this->input->post('category'),

                'subject' => $this->input->post('subject'),

                'description' => $this->input->post('description'),

                'code' => $this->input->post('code'),

            ];



            $this->Global_model->update_record('subjects',$details,$this->uri->segment(3));



        }



        /*delete subject */

        public function deletesubject()



        {



            $this->Global_model->delete_record($this->uri->segment(3),'subjects');



        }        





        /*subject allocation*/



        public function subjectallocation(){



            $result['details'] = $this->Global_model->get_records('student');



            $this->load->view('layout/header');

    

            $this->load->view('subjects/subject_allocation_view', $result);

        

            $this->load->view('layout/footer');

        }





     /*allocate subject*/



        public function allocatedsubject(){



            





            $result['details'] = $this->Global_model->get_record('student',$this->uri->segment(3));

    

            $this->db->select('*');

            $this->db->from('subjectallocation');

            $this->db->join("subjects", "subjects.id = subjectallocation.Subjectid", '"subjectallocation.Studentid =' . $this->uri->segment(3) . ' "');

            $query = $this->db->get();







            $result['allacatedsubjects'] = $query->result();



            //print_r($result);





            



            $this->load->view('layout/header');

    

            $this->load->view('subjects/allocated_subjects_view', $result);

        

            $this->load->view('layout/footer');

        }



        /*allocated subject*/



        public function allocatesubject(){



            $result['student'] = $this->Global_model->get_record('student',$this->uri->segment(3));


        

            $result['subjects'] = $this->Global_model->get_records('subjects'); //fetch subject categories from table



            $this->load->view('layout/header');

    

            $this->load->view('subjects/allocate_subject_view', $result);

        

            $this->load->view('layout/footer');

        }



        /*allocated subject*/



        public function allocateselectedsubject(){



            $result = $this->Global_model->get_records('subjects'); //fetch subject categories from table



            /*Loop through subjects and allocate where id same as selected subjects*/

            



            foreach ($result as $subject) {




                if ($subject->id == $this->input->post($subject->id)) {

                    

                    $newallocatedsubjects = [



                        'Studentid' => $this->input->post('studentid'),

                        'Subjectid' => $subject->id,



                    ];



                    $allocatedsubjects = $this->Global_model->get_records('subjectallocation');


                    if ($this->Global_model->record_count('subjectallocation')>0) {

                        foreach ($allocatedsubjects as $allocatedsubject) {



                            if ($allocatedsubject->Subjectid == $newallocatedsubjects['Subjectid'] && $newallocatedsubject['Studentid'] == $allocatedsubject->Studentid ){

                               

                                $recordexist = true;

                            }



                        }





                    }else{

                        $this->db->insert('subjectallocation', $newallocatedsubjects);

                    }



                    if ( isset($recordexist) && $recordexist ) {


                        # code...

                    }else{

                        
                        $this->db->insert('subjectallocation', $newallocatedsubjects);



                    }

                



                    

                }



                $result['student'] = $this->Global_model->get_record('student',$this->uri->segment(3));



                $updatesubjectallocationstatus = [

                      'Subjectstatus'  => 'Allocated'

                ];

    

                $this->Global_model->update_record('student',$updatesubjectallocationstatus,$this->uri->segment(3));



            }

            $updatesubjectallocationstatus = [

                'Subjectstatus'  => 'Allocated'

          ];



          $this->Global_model->update_record('student',$updatesubjectallocationstatus,$this->uri->segment(3));

        }







        



    

}