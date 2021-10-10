<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class Migration_Add_parents extends CI_Migration
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
              'email' => array(
                 'type' => 'TEXT',
                 'null' => true,
              ),
              'gender' => array(
                'type' => 'VARCHAR',
                'null' => true,
             ),
             'phone' => array(
                'type' => 'INT',
                'constraint' => 11,
                'null' => true,
                
             ),
             'address' => array(
                'type' => 'TEXT',
                'null' => true,
             ),
             'photo' => array(
                'type' => 'TEXT',
                'null' => true,
             ),
             'occupation' => array(
               'type' => 'VARCHAR',
               'null' => true,
            ),
           )
        );

        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('parents');
    }

    public function down()
    {
        $this->dbforge->drop_table('parents');
    }
}