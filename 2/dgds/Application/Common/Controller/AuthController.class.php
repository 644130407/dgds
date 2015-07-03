<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Common\Controller;

use Think\Controller;
use Think\Auth;

class AuthController extends Controller {

    protected function _initialize() {
        $sess_auth=  session('auth');
        if (!$sess_auth) {
            $this->error('非法访问，请登录',U('Index/index'));
        }
        //超级管理员权限
        if($sess_auth['uid']==1){
            return true;
        }
        //其他权限
        $auth = new Auth();
        if (!$auth->check(MODULE_NAME.'/'.CONTROLLER_NAME.'/'.ACTION_NAME,$sess_auth['uid'])) {
            $this->error('没有权限');
        }
    }

}
