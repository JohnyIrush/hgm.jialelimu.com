<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class Migration_Add_grades extends CI_Migration
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
              'name' => array(
                'type' => 'TEXT',
                'constraint' => '100',
                'null' => true,
             ),
              'points' => array(
                'type' => 'INT',
                'constraint' => 11,
                'null' => true,
             ),
             'marks' => array(
                'type' => 'INT',
                'constraint' => 11,
                'null' => true,
                
             ),
           )
        );

        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('grades');
    }

    public function down()
    {
        $this->dbforge->drop_table('grades');
    }
}