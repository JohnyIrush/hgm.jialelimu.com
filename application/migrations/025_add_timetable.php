<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class Migration_Add_timetable extends CI_Migration
{
    public function up()
    {
        $this->dbforge->add_field(
           array(
              'timetableid' => array(
                 'type' => 'INT',
                 'constraint' => 11,
                 'unsigned' => true,
                 'auto_increment' => true
              ),
              'timetable_dayid' => array(
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'null' => true,
              ),
              'timetable_streamid' => array(
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'null' => true,
              ),
              'timetable_classid' => array(
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'null' => true,
              ),
              'timetable_daytimeid' => array(
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'null' => true,
              )
              ,
              'timetable_venueid' => array(
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'null' => true,
              )
              ,
              'timetable_eventid' => array(
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'null' => true,
              )
              ,
              'timetable_eventstarttime' => array(
                'type' => 'TEXT',
                'null' => true,
              )
              ,
              'timetable_eventendtime' => array(
                'type' => 'TEXT',
                'null' => true,
              )
           )
        );

        $this->dbforge->add_key('timetableid', TRUE);
        $this->dbforge->create_table('timetable');
    }

    public function down()
    {
        $this->dbforge->drop_table('timetable');
    }
}