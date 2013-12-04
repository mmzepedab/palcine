<?php

class m131204_130254_add_fields_to_movie_table extends CDbMigration
{
	public function up()
	{   
            $this->addColumn('pal_movie','is_coming_soon','int(1) DEFAULT NULL');
            $this->addColumn('pal_movie','is_in_theaters','int(1) DEFAULT NULL');
	}

	public function down()
	{
		$this->dropColumn('pal_movie','is_coming_soon');
                $this->dropColumn('pal_movie','is_in_theaters');
		//echo "m130608_174906_add_department_id_column_to_question_table does not support migration down.\n";
		//return false;
	}

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}