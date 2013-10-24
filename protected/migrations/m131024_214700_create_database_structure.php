<?php

class m131024_214700_create_database_structure extends CDbMigration
{
	public function up()
	{
		$this->createTable('pal_movie',
			array(
				'id'=>'pk',
				'name'=>'VARCHAR(100) NOT NULL',
				'name_english'=>'VARCHAR(100) NOT NULL',
				'description'=>'VARCHAR(500) NOT NULL',
				'release_date'=>'datetime DEFAULT NULL',
				'length'=>'VARCHAR(100) NOT NULL',
                                'genre_id'=>'INT(11) NOT NULL',
				'is_premiere'=>'INT(1) NOT NULL',
				'image'=>'VARCHAR(500) NOT NULL',
				'image_thumbnail'=>'VARCHAR(500) NOT NULL',
				'image_thumbnail2x'=>'VARCHAR(500) NOT NULL',
                                'trailer_link'=>'VARCHAR(500) NOT NULL',
				'raiting'=>'FLOAT(10,2) NOT NULL',
				'restriction'=>'VARCHAR(50) NOT NULL',
                                'create_time'=>'datetime DEFAULT NULL',
				'create_user'=>'string DEFAULT NULL',
                                'update_time'=>'datetime DEFAULT NULL',
				'update_user'=>'string DEFAULT NULL',
			), 'ENGINE=InnoDB');
                
                $this->createTable('pal_banner',
			array(
				'id'=>'pk',
				'organization'=>'VARCHAR(100) NOT NULL',
				'image'=>'VARCHAR(500) NOT NULL',
				'banner_link'=>'VARCHAR(500) NOT NULL',
				'banner_page'=>'VARCHAR(50) NOT NULL',
                                'probability'=>'INT(1) NOT NULL',
			), 'ENGINE=InnoDB');
                
                $this->createTable('pal_city',
			array(
				'id'=>'VARCHAR(5) ',
				'name'=>'VARCHAR(255) NOT NULL',
				'country_id'=>'VARCHAR(2) NOT NULL',
			), 'ENGINE=InnoDB');
                
                $this->createTable('pal_country',
			array(
				'id'=>'pk',
				'name'=>'VARCHAR(255) NOT NULL',
				'dial_code'=>'VARCHAR(2) NOT NULL',
			), 'ENGINE=InnoDB');
	}

	public function down()
	{
		$this->dropTable('pal_movie');
                $this->dropTable('pal_banner');
                $this->dropTable('pal_city');
		//echo "m130604_174032_create_question_table does not support migration down.\n";
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