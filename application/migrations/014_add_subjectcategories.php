<?php

class Migration_Add_Subjectcategories extends CI_migration{
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
        $this->dbforge->create_table('subjectcategories');
    }

    public function down()
    {
        $this->dbforge->drop_table('subjectcategories');
    }

}