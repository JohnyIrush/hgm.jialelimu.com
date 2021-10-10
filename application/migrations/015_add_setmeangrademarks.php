<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class Migration_Add_Setmeangrademarks extends CI_Migration
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
              'Examid' => array(
                 'type' => 'VARCHAR',
                 'constraint' => '100',
                 'null' => true,
              ),
              'Classid' => array(
                'type' => 'INT',
                'constraint' => 11,
                'null' => true,
              ),
              'Gradeid' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => true,
             ),
              'Maxmarks' => array(
                 'type' => 'INT',
                 'constraint' => 11,
                 'null' => true,
              )
              ,
              'Minmarks' => array(
                 'type' => 'INT',
                 'constraint' => 11,
                 'null' => true,
              )
           )
        );

        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('setmeangrademarks');
    }

    public function down()
    {
        $this->dbforge->drop_table('setmeangrademarks');
    }
}