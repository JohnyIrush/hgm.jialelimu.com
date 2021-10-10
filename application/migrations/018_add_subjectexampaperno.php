<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class Migration_Add_subjectexampaperno extends CI_Migration
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
              'Subjectid' => array(
                'type' => 'INT',
                'constraint' => 11,
                'null' => true,
              ),
              'Number' => array(
                'type' => 'INT',
                'constraint' => 5,
                'null' => true,
              ),
              'Name' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => true,
             )
           )
        );

        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('subjectexampaperno');
    }

    public function down()
    {
        $this->dbforge->drop_table('subjectexampaperno');
    }
}