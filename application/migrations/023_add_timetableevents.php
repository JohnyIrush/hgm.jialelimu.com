<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class Migration_Add_timetableevents extends CI_Migration
{
    public function up()
    {
        $this->dbforge->add_field(
           array(
              'timetableeventid' => array(
                 'type' => 'INT',
                 'constraint' => 11,
                 'unsigned' => true,
                 'auto_increment' => true
              ),
              'timetableevent' => array(
                'type' => 'TEXT',
                'null' => true,
              )
              ,
              'timetableevent_classid' => array(
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'null' => true,
              )
              ,
              'dayendtime' => array(
                'type' => 'TEXT',
                'null' => true,
              )
           )
        );

        $this->dbforge->add_key('timetableeventid', TRUE);
        $this->dbforge->create_table('timetableevents');
    }

    public function down()
    {
        $this->dbforge->drop_table('timetableevents');
    }
}