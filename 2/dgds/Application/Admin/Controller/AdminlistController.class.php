<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AdminlistController
 *
 * @author yangyatong
 */

namespace Admin\Controller;

use Common\Controller\AuthController;

class AdminlistController extends AuthController {

    public function index() {

        //$this->user = M('administrator')->where($_GET)->select();
        $User = M('administrator'); // 实例化User对象
        $count = $User->count(); // 查询满足要求的总记录数
        $Page = new \Think\Page($count, 24); // 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show = $Page->show(); // 分页显示输出
// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $User->limit($Page->firstRow . ',' . $Page->listRows)->select();
        $this->assign('user', $list); // 赋值数据集
        $this->assign('page', $show); // 赋值分页输出
        $this->display();
    }

    //删除用户方法
    public function delet() {
        $id = (int) $_GET['id'];
        if (M('administrator')->delete($id)) {
            $this->success('删除账号成功');
        } else {
            $this->error('删除账号失败');
        }
    }

    //查找用户方法
    public function seach() {
        $date = $_POST['date'];
        //var_dump($_POST);
        $where['user'] = array('like', '%' . $date . '%');
        $condition['_logic'] = 'AND';
        //$where['b'] =array('notlike',array('%thinkphp%','%tp'),'AND');
        $this->user = M('administrator')->where($where)->select();
        $this->display('index');
    }

    //修改用户方法
    public function update() {
        $this->user = M('administrator')->where($_GET)->select();
        $this->display();
    }

    public function infoUpdate() {
        $db = M("administrator");
        $oldpassword = md5($_POST['oldpassword']);
        $user = $db->where(array('id' => $_POST['id']))->find();


        $data = array(
            'id' => $_POST['id'],
            'password' => md5($_POST['password']),
        );
//        var_dump($user);
//        var_dump($oldpassword);
//        var_dump(md5($_POST['password']));
//        var_dump($_POST);
//        die();

        if (M('administrator')->save($data)) {


            $this->success('修改成功');
        } else {
            $this->error('修改失败');
        }
        $this->redirect("Adminlist/index");
    }

}
