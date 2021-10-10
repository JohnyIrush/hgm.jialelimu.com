<?php

class Migration_Add_remarkscategory extends CI_migration{
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
              'category' => array(
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => true,
              ),
              'type' => array(
               'type' => 'VARCHAR',
               'constraint' => 100,
               'null' => true,
          )
           )
        );

        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('remarkscategory');
    }

    public function down()
    {
        $this->dbforge->drop_table('remarkscategory');
    }

}