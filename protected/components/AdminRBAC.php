<?php

/**
 * AdminRBAC.php
 * ---------------------------------
 * 
 * 
 * 作者： 李小雨<317608138@qq.com>
 * 开始日期：2014-03-05
 * 修改日期：2014-03-05
 * 功能：通过登录后获取用户的菜单和权限
 * 更新：菜单的生产
 */
class AdminRBAC {

    /**
     * 根据权限生成对应的菜单
     * @param type $c
     * @param type $f
     * @return type
     */
    public function getMenu() {
        $menu = new Menu();
        $a = $menu->findAll("1=1 order By pid DESC ,sort DESC");
        foreach ($a as $key => $value) {
            $b[] = $value->attributes;
        }
        $thisUrl = $this->getThisUrl();
        //return $thisUrl;
        $urlarr = $this->takeAllFaMenu();
        $tree = $this->getTree($b, 1);
        $html = $this->procHtml($tree, $thisUrl, $urlarr);
        return $html;
    }

    function getTree($data, $pId) {
        $tree = array();
        foreach ($data as $k => $v) {
            if ($v['pid'] == $pId) {         //父亲找到儿子
                $v['p'] = $this->getTree($data, $v['id']);
                $tree[] = $v;
                //unset($data[$k]);
            }
        }
        return $tree;
    }

    /**
     * 生成菜单
     * @param type $tree
     * @param type $pId
     * @return type
     * 
     * @example  样式  
     * <li class="start "><a href="index.html"><i class="fa fa-home"></i> <span class="title">Dashboard</span></a></li>
     */
    function procHtml($tree, $thisUrl, $urlarr) {
        $html = '';
        foreach ($tree as $t) {
            //第一级
            if ($t['p'] == null) {
                //var_dump($this->chkAccess($t['auth_item']));
                if ($this->chkAccess($t['auth_item'])) {
                    $html .= "<li class=\" {$this->eActive($t['url'], $urlarr)}\"><a href=\"{$this->makeUrl($t['url'])}\"    " . $t['other'] . "><i class=\"{$t['icon']}\"></i> <span class=\"title\">{$t['name']}</span><span class='{$this->eSelected($t['url'], $urlarr)} '></span></a></li>";
                }
            } else {
                //   var_dump($t['auth_item']);
                //    var_dump($this->chkAccess($t['auth_item']));
                //以下
                if ($this->chkAccess($t['auth_item'])) {
                    $ultpm = "<li class='{$this->eActive($t['url'], $urlarr)}'><a href=\"javascript:;\"><i class='{$t['icon']}'></i> ";
                    $sub = $this->getsubmenu($t['p'], $thisUrl, $urlarr);
                    $ultpm2 = "<span class='{$this->eSelected($t['url'], $urlarr)} '></span><span class='{$this->eOpenArrow($t['url'], $urlarr)} '></span>	</a>" . $sub . "</li>";
                    $html .= $ultpm . "<span class='title'>{$t['name']}</span>" . $ultpm2;
                }
            }
        }
        return $html;
    }

    /**
     * 生产html标签
     * @param type $tree
     * @return type
     * 
     * @example  
     */
    function getsubmenu($tree, $thisurl, $arrUrl) {
        $html = '';
        foreach ($tree as $t) {
            if (count($t['p']) == 0) {
                if ($this->chkAccess($t['auth_item'])) {
                    $html .= "<li class=\"{$this->eActive($t['url'], $arrUrl)}\"><a href=\"{$this->makeUrl($t['url'])}\"  ><i class=\"{$t['icon']}\"></i>" . $t['name'] . "</a></li>";
                }
            } else {
                if ($this->chkAccess($t['auth_item'])) {
                    $html .= "<li><a href=\"javascript:;\"><i class=\"{$t['icon']}\"></i> " . $t['name'] . "<span class=\"{$this->eActive($thisurl, $arrUrl)}\"></span></a>";
                    $html .=$this->getsubmenu($t['p'], $t['url'], $arrUrl);
                    $html = $html . "</li>";
                }
            }
        }
        return $html ? "<ul class='sub-menu'>" . $html . '</ul>' : $html;
    }

    /**
     * 创建url
     * @param type $param
     */
    private function makeUrl($param) {
        if ($param != "srbac") {
            return Yii::app()->urlManager->createUrl($param);
        } else {
            return 'javascript:void(0);';
        }
    }

    /*
     * 将现在的控制器下的菜单变成激活状态
     */

    private function eActive($thisurl, $arrurl) {
        if (in_array($thisurl, $arrurl)) {
            return " open active  arrow ";
        }
    }

    /**
     * 将菜单展开
     * @param type $thisurl
     * @param type $arrurl
     */
    private function eOpenArrow($thisurl, $arrurl) {
        if (in_array($thisurl, $arrurl)) {
            return " open active  arrow  ";
        } else {
            return "arrow";
        }
    }
    
    private function eSelected($thisurl, $arrurl){
         if (in_array($thisurl, $arrurl)) {
            return " selected ";
        } else {
            return "";
        }
    }

    /**
     * 通过最后一级找出所有的父菜单
     */
    function takeAllFaMenu() {
        $thisUrl = $this->getThisUrl();
        $menuModel = new Menu();
        $pmenu = $menuModel->find('url =  :url', array(':url' => $thisUrl))->attributes;
        $re = array();
        $re[] = $pmenu['url'];
        if ($pmenu) {
            $result = $this->takeFaMenu($pmenu);
            $re[] = $result['url'];
            if ($result['pid'] != 1) {
                $result2 = $this->takeFaMenu($result);
                $re[] = $result2['url'];
                if ($result2['pid'] != 1) {
                    $result3 = $this->takeFaMenu($result2);
                    $re[] = $result3['url'];
                    if ($result3['pid'] != 1) {
                        $result4 = $this->takeFaMenu($result3);
                        $re[] = $result4['url'];
                    }
                }
            }
        }

        return $re;
    }

    private function takeFaMenu($pmenu) {
        //$result=array(); 
        $menuModel = new Menu();
        $pnqmenu = $menuModel->find('id =  :id', array(':id' => $pmenu['pid']))->attributes;
        if ($pnqmenu) {
            return $pnqmenu;
        }
    }

    /**
     * 判断该角色是否拥有此权限
     * 
     */
    function chkAccess($a) {
        $user = Yii::app()->user;
        if ($user->checkAccess($a)) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * 返回对应的url
     */
    private function getThisUrl() {
        $pathInfo = Yii::app()->request->pathInfo;
        $url = explode(".", $pathInfo);
        $pathArr=  explode('/', $url[0]);
        $pathTrue=  implode('/', array($pathArr[0],$pathArr[1],$pathArr[2]?$pathArr[2]:'index'));
        return $pathTrue;
    }

}
