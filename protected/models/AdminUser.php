<?php

/**
 * This is the model class for table "{{admin_user}}".
 *
 * The followings are the available columns in table '{{admin_user}}':
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property string $realname
 * @property string $avatar
 * @property integer $regtime
 * @property integer $department
 * @property string $email
 * @property string $mobile
 * @property integer $disable
 */
class AdminUser extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return '{{admin_user}}';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('username, password', 'required'),
            array('username', 'unique'),
            array('regtime, department, disable', 'numerical', 'integerOnly' => true),
            array('username', 'length', 'max' => 48),
            array('password', 'length', 'max' => 64),
            array('realname', 'length', 'max' => 60),
            array('avatar', 'file', 'types' => 'jpg, gif, png,jpeg', 'allowEmpty'=>TRUE),
            array('email', 'email', 'message'=>'必须为电子邮箱'),
            array('mobile', 'length', 'max' => 60),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, username, password, realname, avatar, regtime, department, email, mobile, disable', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'departmentName'=>array(self::BELONGS_TO,'department','id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'username' => '用户名',
            'password' => '密码',
            'realname' => '姓名',
            'avatar' => '头像',
            'regtime' => '注册时间',
            'department' => '所属部门',
            'email' => '电子邮箱',
            'mobile' => '手机号',
            'disable' => '是否禁用账户',
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
    public function search() {
        // @todo Please modify the following code to remove attributes that should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('username', $this->username, true);
        $criteria->compare('password', $this->password, true);
        $criteria->compare('realname', $this->realname, true);
        $criteria->compare('avatar', $this->avatar, true);
        $criteria->compare('regtime', $this->regtime);
        $criteria->compare('department', $this->department);
        $criteria->compare('email', $this->email, true);
        $criteria->compare('mobile', $this->mobile, true);
        $criteria->compare('disable', $this->disable);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return AdminUser the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * 验证密码
     * @param type $password
     * @return type
     */
    public function validatePassword($password) {
        return $this->encrypt($password) === $this->password;
    }

    /**
     * 加密密码
     * @param type $password
     * @return type
     */
    public function encrypt($password) {
        return md5($password);
    }

    protected function beforeSave() {
        if (parent::beforeSave()) {
            //加密密码
            if ($this->isNewRecord) {
                $this->password = $this->encrypt($this->password);
                $this->regtime = time();
            }
            return TRUE;
        } else {
            return FALSE;
        }
    }

}
