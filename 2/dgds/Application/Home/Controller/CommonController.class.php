<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CommonController
 *
 * @author Administrator
 */

namespace Home\Controller;

use Think\Controller;

class CommonController extends Controller {

    public function _initialize() {
        if (!session('uid')) {
            $this->error("请登录", U('Index/index'));
        } else {
            $this->uid = session('uid');
        }
    }

}
