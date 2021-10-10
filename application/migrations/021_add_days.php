<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class Migration_Add_days extends CI_Migration
{
    public function up()
    {
        $this->dbforge->add_field(
           array(
              'dayid' => array(
                 'type' => 'INT',
                 'constraint' => 11,
                 'unsigned' => true,
                 'auto_increment' => true
              ),
              'day' => array(
                'type' => 'TEXT',
                'null' => true,
              ),
              'Active' => array(
                'type' =>'VARCHAR',
                'constraint' => '100',
                'default' => 'yes',
              )
           )
        );

        $this->dbforge->add_key('dayid', TRUE);
        $this->dbforge->create_table('days');
    }

    public function down()
    {
        $this->dbforge->drop_table('days');
    }
}