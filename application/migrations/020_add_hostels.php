<?php

class Migration_Add_hostels extends CI_migration{
    public function up()
    {
        $this->dbforge->add_field(
           array(
              'Hostelid' => array(
                 'type' => 'INT',
                 'constraint' => 11,
                 'unsigned' => true,
                 'auto_increment' => true
              ),
              'hostelname' => array(
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => true,
              )
           )
        );

        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('hostels');
    }

    public function down()
    {
        $this->dbforge->drop_table('hostels');
    }

}