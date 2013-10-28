<?php

/**
 * This is the model class for table "{{theater}}".
 *
 * The followings are the available columns in table '{{theater}}':
 * @property integer $id
 * @property integer $franchise_id
 * @property string $name
 * @property string $address
 * @property string $latitude
 * @property string $longitude
 * @property string $price
 * @property string $price_3d
 * @property integer $is_tuesday_half_price
 * @property string $country_id
 * @property string $city_id
 * @property string $create_time
 * @property integer $create_user
 * @property string $update_time
 * @property integer $update_user
 *
 * The followings are the available model relations:
 * @property Room[] $rooms
 * @property Franchise $franchise
 */
class Theater extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Theater the static model class
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
		return '{{theater}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('franchise_id, name, address, latitude, longitude, price, price_3d, is_tuesday_half_price, country_id, city_id', 'required'),
			array('franchise_id, is_tuesday_half_price, create_user, update_user', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>100),
			array('address', 'length', 'max'=>500),
			array('latitude, longitude, price, price_3d', 'length', 'max'=>50),
			array('country_id', 'length', 'max'=>2),
			array('city_id', 'length', 'max'=>5),
			array('create_time, update_time', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, franchise_id, name, address, latitude, longitude, price, price_3d, is_tuesday_half_price, country_id, city_id, create_time, create_user, update_time, update_user', 'safe', 'on'=>'search'),
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
			'rooms' => array(self::HAS_MANY, 'Room', 'theater_id'),
			'franchise' => array(self::BELONGS_TO, 'Franchise', 'franchise_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'franchise_id' => 'Franquicia',
			'name' => 'Nombre',
			'address' => 'Direccion',
			'latitude' => 'Latitud',
			'longitude' => 'Longitud',
			'price' => 'Precio',
			'price_3d' => 'Precio 3d',
			'is_tuesday_half_price' => 'Martes mitad de precio?',
			'country_id' => 'Pais',
			'city_id' => 'Ciudad',
			'create_time' => 'Fecha Creado',
			'create_user' => 'Creado por',
			'update_time' => 'Fecha Actualizado',
			'update_user' => 'Actualizado por',
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
		$criteria->compare('franchise_id',$this->franchise_id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('latitude',$this->latitude,true);
		$criteria->compare('longitude',$this->longitude,true);
		$criteria->compare('price',$this->price,true);
		$criteria->compare('price_3d',$this->price_3d,true);
		$criteria->compare('is_tuesday_half_price',$this->is_tuesday_half_price);
		$criteria->compare('country_id',$this->country_id,true);
		$criteria->compare('city_id',$this->city_id,true);
		$criteria->compare('create_time',$this->create_time,true);
		$criteria->compare('create_user',$this->create_user);
		$criteria->compare('update_time',$this->update_time,true);
		$criteria->compare('update_user',$this->update_user);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        
        public function view_franchise_theaters($id)
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

//		$criteria=new CDbCriteria;
//
//		$criteria->compare('idSolicitud',$id);
		
                return new CActiveDataProvider($this, array(
                            'criteria'=>array(
                            'condition'=>'franchise_id='.$id,
                            ),
		));
	}
}