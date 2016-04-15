<?php

/**
 * This is the model class for table "ent_visitschedule".
 *
 * The followings are the available columns in table 'ent_visitschedule':
 * @property string $id
 * @property integer $fk_propdetail
 * @property integer $fk_client
 * @property string $datetime
 * @property string $paymentcode
 * @property string $status
 *
 * The followings are the available model relations:
 * @property Propdetail $fkPropdetail
 * @property User $fkClient
 */
class Visitschedule extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'ent_visitschedule';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fk_propdetail, fk_client, datetime, paymentcode', 'required'),
			array('fk_propdetail, fk_client', 'numerical', 'integerOnly'=>true),
			array('paymentcode', 'length', 'max'=>20),
			array('status', 'length', 'max'=>9),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, fk_propdetail, fk_client, datetime, paymentcode, status', 'safe', 'on'=>'search'),
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
			'fkPropdetail' => array(self::BELONGS_TO, 'Propdetail', 'fk_propdetail'),
			'fkClient' => array(self::BELONGS_TO, 'User', 'fk_client'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'fk_propdetail' => 'Property ID',
			'fk_client' => 'Client ID',
			'datetime' => 'Date-Time',
			'paymentcode' => 'Payment Code',
			'status' => 'Transaction Status',
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

		$criteria->compare('id',$this->id,true);
		$criteria->compare('fk_propdetail',$this->fk_propdetail);
		$criteria->compare('fk_client',$this->fk_client);
		$criteria->compare('datetime',$this->datetime,true);
		$criteria->compare('paymentcode',$this->paymentcode,true);
		$criteria->compare('status',$this->status,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Visitschedule the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
	/**
		Function to get the property name displayed instead of the id
	**/
	public function getPropertyName()
	{
		$property=Propdetail::model()->findByAttributes(array('id'=>$this->fk_propdetail));
		return $property->name;
	}
	
	/**
		Function to get the client name displayed instead of the id
	**/
	public function getClientName()
	{
		$client=User::model()->findByAttributes(array('id'=>$this->fk_client));
		return $client->fullname;
	}
}
