<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class Migration_Add_remarks extends CI_Migration
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
              'Gradeid' => array(
                'type' => 'INT',
                'constraint' => 11,
                 'null' => true,
              ),
             'Kiswahiliremarks' => array(
                'type' => 'TEXT',
                'null' => true,
             ),
             'Teacherremarks' => array(
                'type' => 'TEXT',
                'null' => true,
             ),
             'HeadTeacherremarks' => array(
                'type' => 'TEXT',
                'null' => true,
             ),
           )
        );

        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('remarks');
    }

    public function down()
    {
        $this->dbforge->drop_table('remarks');
    }
}