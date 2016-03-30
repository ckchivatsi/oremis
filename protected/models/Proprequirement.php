<?php

/**
 * This is the model class for table "ent_proprequirement".
 *
 * The followings are the available columns in table 'ent_proprequirement':
 * @property integer $id
 * @property string $category
 * @property integer $fk_proptype
 * @property string $location
 * @property string $description
 * @property integer $fk_client
 * @property string $budget
 * @property string $dateposted
 * @property string $status
 *
 * The followings are the available model relations:
 * @property User $fkClient
 * @property Proptype $fkProptype
 */
class Proprequirement extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'ent_proprequirement';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('category, fk_proptype, location, description, fk_client, budget, dateposted', 'required'),
			array('fk_proptype, fk_client', 'numerical', 'integerOnly'=>true),
			array('category', 'length', 'max'=>4),
			array('location', 'length', 'max'=>50),
			array('budget', 'length', 'max'=>20),
			array('status', 'length', 'max'=>7),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, category, fk_proptype, location, description, fk_client, budget, dateposted, status', 'safe', 'on'=>'search'),
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
			'fkClient' => array(self::BELONGS_TO, 'User', 'fk_client'),
			'fkProptype' => array(self::BELONGS_TO, 'Proptype', 'fk_proptype'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'category' => 'Category',
			'fk_proptype' => 'Fk Proptype',
			'location' => 'Location',
			'description' => 'Description',
			'fk_client' => 'Fk Client',
			'budget' => 'Budget',
			'dateposted' => 'Dateposted',
			'status' => 'Status',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('category',$this->category,true);
		$criteria->compare('fk_proptype',$this->fk_proptype);
		$criteria->compare('location',$this->location,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('fk_client',$this->fk_client);
		$criteria->compare('budget',$this->budget,true);
		$criteria->compare('dateposted',$this->dateposted,true);
		$criteria->compare('status',$this->status,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Proprequirement the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
