<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class Migration_Add_subjects extends CI_Migration
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
              'subjectcategoryid' => array(
               'type' => 'INT',
               'constraint' => 11,
               'null' => true,
               ),
              'code' => array(
                 'type' => 'INT',
                 'constraint' => 11,
                 'null' => true,
              ),
              'subject' => array(
                 'type' => 'TEXT',
                 'null' => true,
              ),
             'description' => array(
                'type' => 'TEXT',
                'null' => true,
             ),
           )
        );

        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('subjects');
    }

    public function down()
    {
        $this->dbforge->drop_table('subjects');
    }
}