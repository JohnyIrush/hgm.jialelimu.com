<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class Migration_Add_timetablevenues extends CI_Migration
{
    public function up()
    {
        $this->dbforge->add_field(
           array(
              'timetablevenueid' => array(
                 'type' => 'INT',
                 'constraint' => 11,
                 'unsigned' => true,
                 'auto_increment' => true
              ),
              'timetablevenue' => array(
                'type' => 'TEXT',
                'null' => true,
              )
              ,
              'timetablevenue_classid' => array(
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'null' => true,
              )

           )
        );

        $this->dbforge->add_key('timetablevenueid', TRUE);
        $this->dbforge->create_table('timetablevenues');
    }

    public function down()
    {
        $this->dbforge->drop_table('timetablevenues');
    }
}