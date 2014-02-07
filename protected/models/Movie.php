<?php

/**
 * This is the model class for table "{{movie}}".
 *
 * The followings are the available columns in table '{{movie}}':
 * @property integer $id
 * @property string $name
 * @property string $name_english
 * @property string $description
 * @property string $release_date
 * @property string $length
 * @property integer $genre_id
 * @property integer $is_premiere
 * @property string $image
 * @property string $image_thumbnail
 * @property string $image_thumbnail2x
 * @property string $trailer_link
 * @property double $raiting
 * @property string $restriction
 * @property string $create_time
 * @property integer $create_user
 * @property string $update_time
 * @property integer $update_user
 * @property integer $is_in_theaters
 * @property integer $is_coming_soon
 *
 * The followings are the available model relations:
 * @property Genre $genre
 * @property MovieComment[] $movieComments
 * @property MovieVote[] $movieVotes
 * @property RoomTime[] $roomTimes
 */
class Movie extends CActiveRecord
{
     public $image;
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Movie the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{movie}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, name_english, description, length, genre_id, is_premiere, trailer_link, raiting, restriction, is_in_theaters, is_coming_soon', 'required'),
			array('image, image_thumbnail, image_thumbnail2x', 'required', 'on'=>'insert'),
			
                        array('genre_id, is_premiere, create_user, update_user', 'numerical', 'integerOnly'=>true),
			array('raiting', 'numerical'),
			array('name, name_english, length', 'length', 'max'=>100),
			array('description, image, image_thumbnail, image_thumbnail2x, trailer_link', 'length', 'max'=>500),
			/*array('image', 'file', 'types'=>'jpg, gif, png'),*/
                        array('restriction', 'length', 'max'=>50),
			array('release_date, create_time, update_time, image, raiting', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, name_english, description, release_date, length, genre_id, is_premiere, image, image_thumbnail, image_thumbnail2x, trailer_link, raiting, restriction, create_time, create_user, update_time, update_user', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'genre' => array(self::BELONGS_TO, 'Genre', 'genre_id'),
			'movieComments' => array(self::HAS_MANY, 'MovieComment', 'movie_id'),
			'movieVotes' => array(self::HAS_MANY, 'MovieVote', 'movie_id'),
			'roomTimes' => array(self::HAS_MANY, 'RoomTime', 'movie_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => 'Nombre',
			'name_english' => 'Nombre en Ingles',
			'description' => 'Sinopsis',
			'release_date' => 'Fecha de lanzamiento',
			'length' => 'Duracion(Min)',
			'genre_id' => 'Genero',
			'is_premiere' => 'Es estreno',
			'image' => 'Imagen',
			'image_thumbnail' => 'Imagen minuatura',
			'image_thumbnail2x' => 'Imagen miniatura2x',
			'trailer_link' => 'Link del trailer',
			'raiting' => 'Raiting',
			'restriction' => 'Restricciones',
			'create_time' => 'Fecha Creado',
			'create_user' => 'Creado por',
			'update_time' => 'Fecha Actualizado',
			'update_user' => 'Actualizado por',
                        'is_in_theaters' => 'En cartelera',
                        'is_coming_soon' => 'Proximamente',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('name_english',$this->name_english,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('release_date',$this->release_date,true);
		$criteria->compare('length',$this->length,true);
		$criteria->compare('genre_id',$this->genre_id);
		$criteria->compare('is_premiere',$this->is_premiere);
		$criteria->compare('image',$this->image,true);
		$criteria->compare('image_thumbnail',$this->image_thumbnail,true);
		$criteria->compare('image_thumbnail2x',$this->image_thumbnail2x,true);
		$criteria->compare('trailer_link',$this->trailer_link,true);
		$criteria->compare('raiting',$this->raiting);
		$criteria->compare('restriction',$this->restriction,true);
		$criteria->compare('create_time',$this->create_time,true);
		$criteria->compare('create_user',$this->create_user);
		$criteria->compare('update_time',$this->update_time,true);
		$criteria->compare('update_user',$this->update_user);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        
        public function beforeSave(){
            if(parent::beforeSave())
            {
                if($this->isNewRecord){
                    $this->create_time = Yii::app()->Date->now();
                    $this->create_user = Yii::app()->user->name;
                    
                }else{
                    $this->update_time = Yii::app()->Date->now();
                    $this->update_user = Yii::app()->user->name;
                }
                return true;
            }else
                return false;
            
        }
        
}