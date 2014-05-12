<?php

class m140512_184827_create_category_table extends CDbMigration
{
	public function up()
	{
	    $this->createTable('tbl_category', array(
						 'id' => 'pk',
						 'name' => 'string NOT NULL'
						 ));	    

	}

	public function down()
	{
	    $this->dropTable('tbl_category');
	}

}