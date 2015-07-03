<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UserlistController
 *
 * @author yangyatong
 */

namespace Admin\Controller;

use Common\Controller\AuthController;

class UserlistController extends AuthController {

    public function index() {

        $this->user = M('user')->where($_GET)->select();
        $this->display();
    }

    //删除用户方法
    public function delet() {
        $id = (int) $_GET['id'];
        if (M('user')->delete($id)) {
            $this->success('删除账号成功');
        } else {
            $this->error('删除账号失败');
        }
    }

    //查找用户方法
    public function search() {
        $date = $_POST['date'];
        //var_dump($_POST);
        $where['user'] = array('like', '%' . $date . '%');
        $condition['_logic'] = 'AND';
        //$where['b'] =array('notlike',array('%thinkphp%','%tp'),'AND');
        $this->user = M('user')->where($where)->select();
        $this->display('index');
    }

    //修改用户方法
    public function update() {
        $this->user = M('user')->where($_GET)->select();
        $this->display();
    }

    public function infoUpdate() {
        $db = M("User");
        $user = $db->where(array('id' => $_POST['id']))->find();
        $data=  array(
            'id'=>$_POST['id'],
            'password'=>  md5($_POST['password'])
            );
        
        if (M('user')->save($data)) {
           
            $this->success('修改成功');
        } else {
            $this->error('修改失败');
        }
    }

}
