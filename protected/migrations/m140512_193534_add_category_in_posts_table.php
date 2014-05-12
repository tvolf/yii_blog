<?php

class m140512_193534_add_category_in_posts_table extends CDbMigration
{
	public function up()
	{
	    $this->addColumn('tbl_post', 'category_id', 'INT(11)');	    
	}

	public function down()
	{
	    $this->dropColumn('tbl_post', 'category_id');	    
	}

}