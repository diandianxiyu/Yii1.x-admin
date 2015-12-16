<?php

/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class Controller extends CController {

    /**
     * @var string the default layout for the controller view. Defaults to '//layouts/column1',
     * meaning using a single column layout. See 'protected/views/layouts/column1.php'.
     */
    public $layout = '//layouts/column1';

    /**
     * @var array context menu items. This property will be assigned to {@link CMenu::items}.
     */
    public $menu = array();

    /**
     * @var array the breadcrumbs of the current page. The value of this property will
     * be assigned to {@link CBreadcrumbs::links}. Please refer to {@link CBreadcrumbs::links}
     * for more details on how to specify this property.
     */
    public $breadcrumbs = array();
    protected $_ysession;
    public $_cmsName = "biubiu后台管理系统";
    public $_author = "点点细雨";
    
    

    //初始化

    public function init() {
        
        $this->_ysession = new CHttpSession();
        $this->_ysession->open();
    }

    /**
     * 设置session
     *
     * @param data 数据,可以是数组
     */
    protected function _sessionSet($name, $value = '', $expire = 0, $path = '') {
        $this->_ysession[$name] = $value;
    }

    /**
     * 获取session
     */
    protected function _sessionGet($name, $once = false) {
        $data = $this->_ysession[$name];
        if ($once)
            $this->_ysession->remove($name);
        return $data;
    }

    /**
     * 清除session
     */
    protected function _sessionRemove($name) {
        $this->_ysession->remove($name);
    }

}
