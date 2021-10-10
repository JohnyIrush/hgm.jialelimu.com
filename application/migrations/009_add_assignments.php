<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class Migration_Add_assignments extends CI_Migration
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
              'Classid' => array(
                'type' => 'INT',
                'constraint' => 11,
                'null' => true,
              ),
              'Termid' => array(
                'type' => 'INT',
                'constraint' => 11,
                'null' => true,
             ),
             'Subjectid' => array(
                'type' => 'INT',
                'constraint' => 11,
                'null' => true,
                
             ),
             'assignment' => array(
                'type' => 'TEXT',
                'null' => true,
             ),
           )
        );

        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('assignments');
    }

    public function down()
    {
        $this->dbforge->drop_table('assignments');
    }
}