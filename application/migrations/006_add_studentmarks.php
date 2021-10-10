<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class Migration_Add_studentmarks extends CI_Migration
{
    public function up()
    {
        $this->dbforge->add_field(
           array(
              'id' => array(
                 'type' => 'INT',
                 'constraint' => 11,
                 'unsigned' => true,
                 'auto_increment' => true
              ),
              'Studentid' => array(
                'type' => 'INT',
                'constraint' => 11,
                'null' => true,
              ),
              'Classid' => array(
                'type' => 'INT',
                'constraint' => 11,
                'null' => true,
              ),
              'Streamid' => array(
                'type' => 'INT',
                'constraint' => 11,
                'null' => true,
             ),
             'Examid' => array(
                'type' => 'INT',
                'constraint' => 11,
                'null' => true,
                
             ),
             'ExamModeid' => array(
                'type' => 'INT',
                'constraint' => 11,
                'null' => true,
             ),
             'subjectid' => array(
                'type' => 'INT',
                'constraint' => 11,
                'null' => true,
             ),
             
           )
        );

        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('studentmarks');
    }

    public function down()
    {
        $this->dbforge->drop_table('studentmarks');
    }
}