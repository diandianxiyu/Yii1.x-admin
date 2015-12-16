<?php

/**
 * This is the model class for table "{{slide}}".
 *
 * The followings are the available columns in table '{{slide}}':
 * @property integer $id
 * @property string $pic_path
 * @property string $text
 * @property integer $sort
 */
class Slide extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{slide}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('sort', 'numerical', 'integerOnly'=>true),
			array('pic_path, text', 'length', 'max'=>255),
                    array('pic_path', 'file', 'types' => 'jpg,png,jpeg', 'allowEmpty'=>TRUE),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, pic_path, text, sort', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'pic_path' => '图片路径',
			'text' => '文字说明',
			'sort' => '排序',
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
		$criteria->compare('pic_path',$this->pic_path,true);
		$criteria->compare('text',$this->text,true);
		$criteria->compare('sort',$this->sort);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Slide the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
