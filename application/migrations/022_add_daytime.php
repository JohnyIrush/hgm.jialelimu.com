<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class Migration_Add_daytime extends CI_Migration
{
    public function up()
    {
        $this->dbforge->add_field(
           array(
              'daytimeid' => array(
                 'type' => 'INT',
                 'constraint' => 11,
                 'unsigned' => true,
                 'auto_increment' => true
              ),
              'daytime' => array(
                'type' => 'TEXT',
                'null' => true,
              )
              ,
              'daystarttime' => array(
                'type' => 'TEXT',
                'null' => true,
              )
              ,
              'duration' => array(
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
              )
           )
        );

        $this->dbforge->add_key('daytimeid', TRUE);
        $this->dbforge->create_table('daytime');
    }

    public function down()
    {
        $this->dbforge->drop_table('daytime');
    }
}