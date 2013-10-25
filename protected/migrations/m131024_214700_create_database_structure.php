<?php

class m131024_214700_create_database_structure extends CDbMigration
{
	public function up()
	{
		
                
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
                
                $this->createTable('pal_franchise',
			array(
				'id'=>'pk',
				'name'=>'VARCHAR(100) NOT NULL',
				'description'=>'VARCHAR(500) NOT NULL',
			), 'ENGINE=InnoDB');
                
                $this->createTable('pal_genre',
			array(
				'id'=>'pk',
				'name'=>'VARCHAR(100) NOT NULL',
			), 'ENGINE=InnoDB');
                
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
				'create_user'=>'INT (11) DEFAULT NULL',
                                'update_time'=>'datetime DEFAULT NULL',
				'update_user'=>'INT (11) DEFAULT NULL',
			), 'ENGINE=InnoDB');
                
                $this->createTable('pal_movie_comment',
			array(
				'id'=>'pk',
                                'movie_id'=>'INT(11) NOT NULL',
                                'user_id'=>'INT(11) NOT NULL',
				'comment'=>'VARCHAR(500) NOT NULL',
                                'create_time'=>'datetime DEFAULT NULL',
			), 'ENGINE=InnoDB');
                
                $this->createTable('pal_movie_vote',
			array(
				'id'=>'pk',
                                'movie_id'=>'INT(11) NOT NULL',
                                'user_id'=>'INT(11) NOT NULL',
				'vote'=>'INT(1) NOT NULL',
                                'create_time'=>'datetime DEFAULT NULL',
                                'UNIQUE KEY `movie_id` (`movie_id`)',
                                'UNIQUE KEY `user_id` (`user_id`)',
			), 'ENGINE=InnoDB');
                
                $this->createTable('pal_new',
			array(
				'id'=>'pk',
				'title'=>'VARCHAR(100) NOT NULL',
				'description'=>'VARCHAR(500) NOT NULL',
				'is_published'=>'INT (1)',
				'url'=>'VARCHAR(500) NOT NULL',
				'image_thumbnail'=>'VARCHAR(500) NOT NULL',
				'image_thumbnail2x'=>'VARCHAR(500) NOT NULL',
                                'create_time'=>'datetime DEFAULT NULL',
				'create_user'=>'INT (11) DEFAULT NULL',
                                'update_time'=>'datetime DEFAULT NULL',
				'update_user'=>'INT (11) DEFAULT NULL',
			), 'ENGINE=InnoDB');
                
                $this->createTable('pal_page',
			array(
				'id'=>'pk',
				'name'=>'VARCHAR(100) NOT NULL',
                                'page'=>'VARCHAR(100) NOT NULL',
                                'alias'=>'VARCHAR(100) NOT NULL',
			), 'ENGINE=InnoDB');
                
                $this->createTable('pal_room',
			array(
				'id'=>'pk',
				'name'=>'VARCHAR(100) NOT NULL',
                                'theater_id'=>'INT(11) NOT NULL',
                                'is_3d'=>'INT(1) NOT NULL',
			), 'ENGINE=InnoDB');
                
                 $this->createTable('pal_room_time',
			array(
				'id'=>'pk',
                                'room_id'=>'INT(11) NOT NULL',
                                'time'=>'time DEFAULT NULL',
                                'movie_id'=>'INT(11) NOT NULL',
                                'UNIQUE KEY (`room_id`, `movie_id`)'
			), 'ENGINE=InnoDB');
                 
                 $this->createTable('pal_movie',
			array(
				'id'=>'pk',
                                'franchise_id'=>'INT(11) NOT NULL',
				'name'=>'VARCHAR(100) NOT NULL',
				'address'=>'VARCHAR(500) NOT NULL',
				'latitude'=>'VARCHAR(50) NOT NULL',
                                'longitude'=>'VARCHAR(50) NOT NULL',
				'price'=>'VARCHAR(50) NOT NULL',
                                'price_3d'=>'VARCHAR(50) NOT NULL',
				'is_tuesday_half_price'=>'INT(1) NOT NULL',
				'country_id'=>'VARCHAR(2) NOT NULL',
                                'city_id'=>'VARCHAR(5) NOT NULL',
                                'create_time'=>'datetime DEFAULT NULL',
				'create_user'=>'INT (11) DEFAULT NULL',
                                'update_time'=>'datetime DEFAULT NULL',
				'update_user'=>'INT (11) DEFAULT NULL',
			), 'ENGINE=InnoDB');
	}

	public function down()
	{
		$this->dropTable('pal_movie');
                $this->dropTable('pal_banner');
                $this->dropTable('pal_city');
                $this->dropTable('pal_country');
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