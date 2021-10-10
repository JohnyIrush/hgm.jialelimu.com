<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class Migration_Add_marks extends CI_Migration
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
                 'type' => 'VARCHAR',
                 'constraint' => '100',
                 'null' => true,
              ),
              'Subjectid' => array(
                'type' => 'INT',
                'constraint' => 11,
                'null' => true,
              ),
              'Examid' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => true,
             ),
              'marks' => array(
                 'type' => 'INT',
                 'constraint' => 11,
                 'null' => true,
              )
           )
        );

        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('marks');
    }

    public function down()
    {
        $this->dbforge->drop_table('marks');
    }
}