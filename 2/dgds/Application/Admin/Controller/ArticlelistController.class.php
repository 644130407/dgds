<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ArticlelistController
 *
 * @author 帆
 */

namespace Admin\Controller;

use Common\Controller\AuthController;

class ArticlelistController extends AuthController {

    public function index() {
        $db =  M('article'); // 实例化User对象
        $count = $db->where($_GET)->count(); // 查询满足要求的总记录数
        $Page = new \Think\Page($count, 10); // 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show = $Page->show(); // 分页显示输出
// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $db->where($_GET)->limit($Page->firstRow . ',' . $Page->listRows)->select();
        $this->assign('article', $list); // 赋值数据集
        $this->assign('page', $show); // 赋值分页输出
        //$this->article = M('article')->where($_GET)->select();
        $this->display();
    }

    //column文章
    public function cindex() {
        $db =  M('carticle'); // 实例化User对象
        $count = $db->where($_GET)->count(); // 查询满足要求的总记录数
        $Page = new \Think\Page($count, 10); // 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show = $Page->show(); // 分页显示输出
// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $db->where($_GET)->limit($Page->firstRow . ',' . $Page->listRows)->select();
        $this->assign('article', $list); // 赋值数据集
        $this->assign('page', $show); // 赋值分页输出
       // $this->article = M('carticle')->where($_GET)->select();
        $this->display();
    }

    //审核通过
    public function agree() {
        //$id = (int) $_GET['id'];
        $data = array(
            'id' => $_GET['id'],
            'state' => 1
        );
//        var_dump($data);
//        die;
        if (M('article')->save($data)) {
            $this->success('审核成功');
        } else {
            $this->error('审核失败');
        }
    }

    //column审核通过
    public function cagree() {
        //$id = (int) $_GET['id'];
        $data = array(
            'id' => $_GET['id'],
            'state' => 1
        );

        if (M('carticle')->save($data)) {
            $this->success('审核成功');
        } else {
            $this->error('审核失败');
        }
    }

//删除方法
    public function del() {
        $id = (int) $_GET['id'];
        if (M('article')->delete($id)) {
            $this->success('删除成功');
        } else {
            $this->error('删除失败');
        }
    }

//删除方法
    public function cdel() {
        $id = (int) $_GET['id'];
        if (M('carticle')->delete($id)) {
            $this->success('删除成功');
        } else {
            $this->error('删除失败');
        }
    }

    //显示详情
    public function showdetail() {
        $id = (int) $_GET['id'];

        $article = M('article')->select($id);

        $aupdown = M('aupdown')->where(array('aid' => $id))->select();
        //我也是醉了，由于多维数组半天前台忘记了，于是就直接写原生了

        $this->assign('article', $article);
        //$aupdown['aid']=$id;
        $this->assign('aupdown', $aupdown);
        //var_dump($article);
        //die;
        $this->display();
    }

    public function cshowdetail() {
        $id = (int) $_GET['id'];
        $this->article = M('carticle')->select($id);
       

        $this->display();
    }

    public function up() {
        $data = array(
            'id' => $_GET['id'],
            'up' => ($_GET['up'] + 1)
        );
        if (M('aupdown')->save($data)) {
            $this->success('點讚成功');
        } else {
            $this->error('點讚失败');
        }
    }

    public function down() {
        $data = array(
            'id' => $_GET['id'],
            'down' => ($_GET['down'] + 1)
        );
//        var_dump($data);
//        die;
        if (M('aupdown')->save($data)) {
            $this->success('踩成功');
        } else {
            $this->error('踩失败');
        }
    }

}
