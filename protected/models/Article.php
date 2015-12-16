<?php

/**
 * This is the model class for table "{{article}}".
 *
 * The followings are the available columns in table '{{article}}':
 * @property integer $id
 * @property string $atitle
 * @property integer $pub_time
 * @property integer $edit_time
 * @property string $atext
 * @property string $aauthor
 * @property integer $sort
 */
class Article extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{article}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('pub_time, edit_time, sort', 'numerical', 'integerOnly'=>true),
			array('atitle', 'length', 'max'=>255),
			array('aauthor', 'length', 'max'=>200),
			array('atext', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, atitle, pub_time, edit_time, atext, aauthor, sort', 'safe', 'on'=>'search'),
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
			'atitle' => '标题',
			'pub_time' => '发布时间',
			'edit_time' => '修改时间',
			'atext' => '文章内容',
			'aauthor' => '作者',
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
		$criteria->compare('atitle',$this->atitle,true);
		$criteria->compare('pub_time',$this->pub_time);
		$criteria->compare('edit_time',$this->edit_time);
		$criteria->compare('atext',$this->atext,true);
		$criteria->compare('aauthor',$this->aauthor,true);
		$criteria->compare('sort',$this->sort);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Article the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        
        /**
         * 重写了父类的写入前的操作
         * @return boolean
         */
         protected function beforeSave() {
        if (parent::beforeSave()) {
            /**
            if ($this->isNewRecord) {
                $this->password = $this->encrypt($this->password);
                $this->regtime = time();
            }
             * 
             */
            $this->edit_time=  time();
         //   $this->pub_time=  strtotime(str_replace('-', '', $this->pub_time));
            return TRUE;
        } else {
            return FALSE;
        }
    }
}
