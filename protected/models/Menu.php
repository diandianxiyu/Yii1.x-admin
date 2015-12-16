<?php

/**
 * This is the model class for table "{{menu}}".
 *
 * The followings are the available columns in table '{{menu}}':
 * @property integer $id
 * @property string $name
 * @property integer $pid
 * @property string $reamrk
 * @property integer $sort
 * @property string $url
 * @property string $auth_item
 *  @property string $icon
 * @property string $other
 */
class Menu extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{menu}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	 public function rules()
    {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('name', 'required'),
            array('pid, sort', 'numerical', 'integerOnly'=>true),
            array('name, icon', 'length', 'max'=>60),
            array('reamrk', 'length', 'max'=>420),
            array('url, auth_item', 'length', 'max'=>150),
            array('other', 'length', 'max'=>9000),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, name, pid, reamrk, sort, url, auth_item, icon, other', 'safe', 'on'=>'search'),
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
                                    'children' => array(self::HAS_MANY, 'pid', 'Menu'),
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
			'pid' => '父级菜单',
			'reamrk' => '备注',
			'sort' => '排序',
			'url' => '地址',
			'auth_item' => '认证名称',
                                            'icon' => '图标',
                                            'other' => '其他样式',
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
		$criteria->compare('reamrk',$this->reamrk,true);
		$criteria->compare('sort',$this->sort);
		$criteria->compare('url',$this->url,true);
		$criteria->compare('auth_item',$this->auth_item,true);
                            $criteria->compare('icon',$this->icon,true);
                                $criteria->compare('other',$this->other,true);
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Menu the static model class
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
        public function getAllMenu(){
            $all= Menu::model()->findAll();
           
           
            return CHtml::listData($all, 'id', 'name');
        }
        
        
        /**
         * 获取所有菜单的下拉列表
         * @return type
         */
        public function getAllAuthItem(){
            $all= self::model()->findAll("1=1 order By pid DESC ,sort DESC");
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
