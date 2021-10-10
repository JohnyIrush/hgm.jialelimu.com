<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class Migration_Add_terms extends CI_Migration
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
                 'type' => 'VARCHAR',
                 'constraint' => '100',
                 'null' => true,
              ),
              'Classid' => array(
                'type' => 'INT',
                'constraint' => 11,
                'null' => true,
             ),
             'from' => array(
                'type' => 'DATETIME',
                'null' => true,
             ),
             'to' => array(
                'type' => 'DATETIME',
                'null' => true,
             ),
             'year' => array(
                'type' => 'TEXT',
                'null' => true,
             ),
           )
        );

        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('terms');
    }

    public function down()
    {
        $this->dbforge->drop_table('terms');
    }
}