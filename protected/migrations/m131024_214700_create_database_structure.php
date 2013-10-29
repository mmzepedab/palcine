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
			), 'ENGINE=MyISAM');
                
                
                
                $this->createTable('pal_country',
			array(
				'id'=>'VARCHAR(2)',
				'name'=>'VARCHAR(255) NOT NULL',
				'dial_code'=>'VARCHAR(2) NOT NULL',
			), 'ENGINE=MyISAM');
                $this->createIndex('country_pk', 'pal_country', 'id', true);
                
                $this->createTable('pal_city',
			array(
				'id'=>'VARCHAR(5) ',
				'name'=>'VARCHAR(255) NOT NULL',
				'country_id'=>'VARCHAR(2)',
			), 'ENGINE=MyISAM');
                $this->createIndex('city_pk', 'pal_city', 'id, country_id', true);
                $this->addForeignKey('fk_city_country', 'pal_city', 'country_id', 'pal_country', 'id','CASCADE','CASCADE');

                
                $this->createTable('pal_franchise',
			array(
				'id'=>'pk',
				'name'=>'VARCHAR(100) NOT NULL',
				'description'=>'VARCHAR(500) NOT NULL',
			), 'ENGINE=MyISAM');
                
                $this->createTable('pal_genre',
			array(
				'id'=>'pk',
				'name'=>'VARCHAR(100) NOT NULL',
			), 'ENGINE=MyISAM');
                
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
			), 'ENGINE=MyISAM');
                $this->addForeignKey('fk_movie_genre', 'pal_movie', 'genre_id', 'pal_genre', 'id','CASCADE','CASCADE');
                
                $this->createTable('pal_user',
			array(
				'id'=>'pk',
                                'username'=>'VARCHAR(50) NOT NULL',
                                'password'=>'VARCHAR(500) NOT NULL',
                                'temp_password'=>'VARCHAR(500) NOT NULL',
				'first_name'=>'VARCHAR(100) NOT NULL',
                                'last_name'=>'VARCHAR(100) NOT NULL',
                                'email'=>'VARCHAR(100) NOT NULL',
                                'bbpin'=>'VARCHAR(50) NOT NULL',
                                'phone_number'=>'VARCHAR(50) NOT NULL',
                                'create_time'=>'datetime DEFAULT NULL',
				'create_user'=>'INT (11) DEFAULT NULL',
                                'update_time'=>'datetime DEFAULT NULL',
				'update_user'=>'INT (11) DEFAULT NULL',
                                'last_login'=>'datetime DEFAULT NULL',
                                'is_validated'=>'INT (1) NOT NULL',
                                'validation_code'=>'VARCHAR(100) NOT NULL',
                                'is_active'=>'INT (1) NOT NULL',
                                'platform'=>'VARCHAR(50) NOT NULL',
                                'country_id'=>'VARCHAR(2) NOT NULL',
                                'city_id'=>'VARCHAR(5) NOT NULL',
			), 'ENGINE=MyISAM');
                
                $this->createTable('pal_movie_comment',
			array(
				'id'=>'pk',
                                'movie_id'=>'INT(11) NOT NULL',
                                'user_id'=>'INT(11) NOT NULL',                                
                                'create_time'=>'datetime DEFAULT NULL',
				'comment'=>'VARCHAR(500) NOT NULL',
			), 'ENGINE=MyISAM');
                $this->addForeignKey('fk_movie_comment', 'pal_movie_comment', 'movie_id', 'pal_movie', 'id','CASCADE','CASCADE');
                $this->addForeignKey('fk_movie_comment_user', 'pal_movie_comment', 'user_id', 'pal_user', 'id','CASCADE','CASCADE');

                
                $this->createTable('pal_movie_vote',
			array(
				'id'=>'pk',
                                'movie_id'=>'INT(11) NOT NULL',
                                'user_id'=>'INT(11) NOT NULL',
				'vote'=>'INT(1) NOT NULL',
                                'create_time'=>'datetime DEFAULT NULL',
                                'UNIQUE KEY `movie_id` (`movie_id`)',
                                'UNIQUE KEY `user_id` (`user_id`)',
			), 'ENGINE=MyISAM');
                $this->addForeignKey('fk_movie_vote', 'pal_movie_vote', 'movie_id', 'pal_movie', 'id','CASCADE','CASCADE');
                $this->addForeignKey('fk_movie_vote_user', 'pal_movie_vote', 'user_id', 'pal_user', 'id','CASCADE','CASCADE');

                
                $this->createTable('pal_new',
			array(
				'id'=>'pk',
				'title'=>'VARCHAR(100) NOT NULL',
				'description'=>'VARCHAR(500) NOT NULL',
                                'create_time'=>'datetime DEFAULT NULL',
				'is_published'=>'INT (1)',
				'url'=>'VARCHAR(500) NOT NULL',
				'image_thumbnail'=>'VARCHAR(500) NOT NULL',
				'image_thumbnail2x'=>'VARCHAR(500) NOT NULL',
				'create_user'=>'INT (11) DEFAULT NULL',
                                'update_time'=>'datetime DEFAULT NULL',
				'update_user'=>'INT (11) DEFAULT NULL',
			), 'ENGINE=MyISAM');
                
                $this->createTable('pal_page',
			array(
				'id'=>'pk',
				'name'=>'VARCHAR(100) NOT NULL',
                                'page'=>'VARCHAR(100) NOT NULL',
                                'alias'=>'VARCHAR(100) NOT NULL',
			), 'ENGINE=MyISAM');
                
                $this->createTable('pal_theater',
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
			), 'ENGINE=MyISAM');
                $this->addForeignKey('fk_theater_franchise', 'pal_theater', 'franchise_id', 'pal_franchise', 'id','CASCADE','CASCADE');

                
                $this->createTable('pal_room',
			array(
				'id'=>'pk',
				'name'=>'VARCHAR(100) NOT NULL',
                                'theater_id'=>'INT(11) NOT NULL',
                                'is_3d'=>'INT(1) NOT NULL',
			), 'ENGINE=MyISAM');
                $this->addForeignKey('fk_room_theater', 'pal_room', 'theater_id', 'pal_theater', 'id','CASCADE','CASCADE');

                
                 $this->createTable('pal_room_time',
			array(
				'id'=>'pk',
                                'room_id'=>'INT(11) NOT NULL',
                                'time'=>'time DEFAULT NULL',
                                'movie_id'=>'INT(11) NOT NULL',
                                /*'UNIQUE KEY (`room_id`, `movie_id`)'*/
			), 'ENGINE=MyISAM');
                 $this->addForeignKey('fk_room_time', 'pal_room_time', 'room_id', 'pal_room', 'id','CASCADE','CASCADE');
                 $this->addForeignKey('fk_room_movie', 'pal_room_time', 'movie_id', 'pal_movie', 'id','CASCADE','CASCADE');

                 
                 
                 
                 
                 
                 
	}

	public function down()
	{
                
                $this->dropIndex('city_pk', 'pal_city');
                $this->dropIndex('country_pk', 'pal_country');
            
		
                $this->dropForeignKey('fk_movie_genre', 'pal_movie');
                $this->dropForeignKey('fk_movie_comment', 'pal_movie_comment');
                $this->dropForeignKey('fk_movie_comment_user', 'pal_movie_comment');
                $this->dropForeignKey('fk_movie_vote', 'pal_movie_vote'); 
                $this->dropForeignKey('fk_movie_vote_user', 'pal_movie_vote');
                $this->dropForeignKey('fk_room_theater', 'pal_room');
                $this->dropForeignKey('fk_room_time', 'pal_room_time');
                $this->dropForeignKey('fk_room_movie', 'pal_room_time');        
                        
                $this->dropTable('pal_banner');
                $this->dropTable('pal_city');
                $this->dropTable('pal_country');
                $this->dropTable('pal_franchise');
                $this->dropTable('pal_genre');
                $this->dropTable('pal_movie');
                $this->dropTable('pal_movie_comment');
                $this->dropTable('pal_movie_vote');
                $this->dropTable('pal_new');
                $this->dropTable('pal_page');
                $this->dropTable('pal_room');
                $this->dropTable('pal_room_time');
                $this->dropTable('pal_theater');
                $this->dropTable('pal_user');
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