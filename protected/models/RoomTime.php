<?php

/**
 * This is the model class for table "{{room_time}}".
 *
 * The followings are the available columns in table '{{room_time}}':
 * @property integer $id
 * @property integer $room_id
 * @property string $time
 * @property integer $movie_id
 *
 * The followings are the available model relations:
 * @property Movie $movie
 * @property Room $room
 */
class RoomTime extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return RoomTime the static model class
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
		return '{{room_time}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('room_id, movie_id', 'required'),
			array('room_id, movie_id', 'numerical', 'integerOnly'=>true),
			array('time', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, room_id, time, movie_id', 'safe', 'on'=>'search'),
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
			'movie' => array(self::BELONGS_TO, 'Movie', 'movie_id'),
			'room' => array(self::BELONGS_TO, 'Room', 'room_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'room_id' => 'Room',
			'time' => 'Time',
			'movie_id' => 'Movie',
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
		$criteria->compare('room_id',$this->room_id);
		$criteria->compare('time',$this->time,true);
		$criteria->compare('movie_id',$this->movie_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}