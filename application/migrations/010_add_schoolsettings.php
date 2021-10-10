<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class Migration_Add_schoolsettings extends CI_Migration
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
              'username' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
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
             'logo' => array(
                'type' => 'TEXT',
                'null' => true,
             ),
             'Smsid' => array(
                'type' => 'INT',
                'constraint' => 11,
                'null' => true,
             ),
             'Watermark' => array(
                'type' => 'INT',
                'constraint' => 11,
                'null' => true,
             ),
           )
        );

        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('schoolsettings');
    }

    public function down()
    {
        $this->dbforge->drop_table('schoolsettings');
    }
}