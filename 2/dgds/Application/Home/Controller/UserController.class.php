<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UserController
 *
 * @author YangYatong
 */

namespace Home\Controller;

use Think\Controller;

class UserController extends CommonController {
    /* 打开用户信息页面 */

    public function user_info() {
        $db = M("user");
        $user = $db->where(array('username' => session('username')))->find(); //查找当前用户名用户
        $this->assign('user', $user);
        $this->display('userinfo');
    }

    /* 打开信息修改页面 */

    public function info_update() {
        $db = M("user");
        $user = $db->where(array('username' => session('username')))->find(); //查找当前用户名用户
        $this->assign('user', $user);
        $this->display('infoupdate');
    }

    /* 用户信息修改功能函数 */

    public function userUpdate() {
        $db = M("user");
        $username = session('username');
        $user = $db->where(array('username' => $username))->find(); //查找当前用户名用户

        $str = md5($_POST['password']);
        $data = array(
            'id' => $_SESSION['uid'],
            'password' => $str,
            'realname' => $_POST['realname'],
            'gender' => $_POST['gender'],
            'phone' => $_POST['phone'],
            'email' => $_POST['email'],
            'time' => time(),
            'ip' => get_client_ip(),
            'department' => $_POST['department']
        );

        $oldpassword = md5($_POST['oldpassword']);
        if ($oldpassword != $user['password']) {
            echo '验证码错误，信息修改失败(；′⌒`)';
        } else {
            if ($db->save($data)) {
                $this->success('信息修改成功');
            } else {
                $this->error('信息修改失败');
            }
        }
       $this->redirect('User/user_info');
//        $this->redirect("user_info");
    }
    //注册时用户名重复的检查
    public function checkUsername() {
        $data = D('user');
        $info = $data->where('username="' . $_GET['username'] . '"')->find();
        if ($info == null) {
            echo json_encode(0);
        } else {
            echo json_encode(1);
        }
    }

}
