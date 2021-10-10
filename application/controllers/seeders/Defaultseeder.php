<?php 



if (!defined('BASEPATH'))

    exit('No direct script access allowed');



class Defaultseeder extends Admin_Controller {


  public function __construct(){

    parent::__construct();

    $this->load->model('Studentinfo/Global_model');


  }


  public function gradesseeder(){

    //$this->dbforge->drop_table('table_name',TRUE); //drop table 

      /*Default Grading points and marks*/

      $grades = [
        [
            'name' => 'A',
            'points' => 12,
            'marks' => 80,
        ],
        [
            'name' => 'A-',
            'points' => 11,
            'marks' => 75,
        ],
        [
            'name' => 'B+',
            'points' => 10,
            'marks' => 70,
        ],
        [
            'name' => 'B',
            'points' => 9,
            'marks' => 65,
        ],
        [
            'name' => 'B-',
            'points' => 8,
            'marks' => 60,
        ],
        [
            'name' => 'C+',
            'points' => 7,
            'marks' => 55,
        ],
        [
            'name' => 'C',
            'points' => 6,
            'marks' => 50,
        ],
        [
            'name' => 'C-',
            'points' => 5,
            'marks' => 45,
        ],
        [
            'name' => 'D+',
            'points' => 4,
            'marks' => 40,
        ],
        [
            'name' => 'D',
            'points' => 3,
            'marks' => 35,
        ],
        [
            'name' => 'D-',
            'points' => 2,
            'marks' => 30,
        ],
        [
            'name' => 'E',
            'points' => 1,
            'marks' => 29,
    
        ]
    
      ];

      if ($this->Global_model->record_count('grades')<1) { //check if table is already seeded

           $this->Global_model->insert_multiple_records('grades',$grades);
   
           echo 'grades seeded successfully!';

      }else{

        echo 'grades already seeded!';

      }



    


  }

  


}