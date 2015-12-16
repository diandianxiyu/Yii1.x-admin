<?php

/**
 * This is the model class for table "{{department}}".
 *
 * The followings are the available columns in table '{{department}}':
 * @property integer $id
 * @property string $name
 * @property integer $pid
 */
class Department extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{department}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('pid', 'required'),
			array('pid,sort', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>200),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, pid', 'safe', 'on'=>'search'),
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
			'name' => '名称',
			'pid' => '上一级',
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
		$criteria->compare('name',$this->name,true);
		$criteria->compare('pid',$this->pid);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Department the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        /**
         * 获取所有的菜单
         * @param type $id
         * @return type
         */
        public function getAllDepartment(){
            $all= Department::model()->findAll();
           
           
            return CHtml::listData($all, 'id', 'name');
        }
        
         /**
         * 获取所有菜单的下拉列表
         * @return type
         */
        public function getAllDepart(){
            $all= self::model()->findAll("1=1 order By pid DESC, sort DESC");
            $wall = array();
        foreach ($all as $key => $value) {
            $wall[$value['id']]['id'] = $value['id'];
            $wall[$value['id']]['name'] = $value['name'];
            $wall[$value['id']]['pid'] = $value['pid'];
        }

        $tree = new tree($wall);
        $str = "\$id+\$spacer\$name,";
        $strs = trim($tree->get_tree(0, $str));
        $arr1 = explode(",", $strs);
        $result = array();
        foreach ($arr1 as $key => $value) {
            if ($value == "") {
                unset($arr1[$key]);
            }
            $arra[] = explode("+", $value);
        }
//去除重复
        foreach ($arra as $key => $value) {
            foreach ($value as $key1 => $value1) {
                if ($value1 == "") {
                    unset($arra[$key]);
                }
            }
        }
//整理数组
        $re = array();
        foreach ($arra as $key => $value) {
            $re[$value[0]] = $value[1];
        }
        return $re;
        }
        
        
}
