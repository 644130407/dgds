<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Home\Controller;

use Think\Controller;

/**
 * Description of Articlelist
 *
 * @author 帆
 */
class ArticlelistController extends Controller {

    public function index() {

        if ($_GET['type'] == 31) {
            if ($_SESSION['state'] != 1) {
                $this->redirect('Index/index');
            }
        }
        $db = M('article'); // 实例化User对象
        $_GET['state'] = 1;
        $count = $db->where($_GET)->count(); // 查询满足要求的总记录数
        $Page = new \Think\Page($count, 25); // 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show = $Page->show(); // 分页显示输出
// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $db->where($_GET)->limit($Page->firstRow . ',' . $Page->listRows)->select();
        $this->assign('article', $list); // 赋值数据集
        $this->assign('page', $show); // 赋值分页输出
        //$this->article = M('article')->where($_GET)->select();
        $this->alist = $db->where(array('state' => 1))->limit(7)->select();
//        var_dump($alist);
        $this->display();
    }

    public function cindex() {
        $db = M('carticle'); // 实例化User对象
        $_GET['state'] = 1;
        $count = $db->where($_GET)->count(); // 查询满足要求的总记录数
        $Page = new \Think\Page($count, 7); // 实例化分页类 传入总记录数和每页显示的记录数(7)
        $show = $Page->show(); // 分页显示输出
// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $db->where($_GET)->limit($Page->firstRow . ',' . $Page->listRows)->select();
        $this->assign('article', $list); // 赋值数据集
        $this->assign('page', $show); // 赋值分页输出
        //$this->article = M('article')->where($_GET)->select();
        $this->ctype = M('ctype')->where(array("cid" => $_GET['column']))->select();

//        var_dump($alist);
        $this->display('new');
    }

    public function alist() {
        $type = $_GET['type'];
        $db = M('article');
        //边列表
        $this->alist = $db->where(array('state' => 1))->limit(7)->select();
        if ($type == 1) {
            $map['type'] = array(array('gt', 0), array('lt', 4));
            $map['state'] = 1;


            $count = $db->where($map)->count(); // 查询满足要求的总记录数
            $Page = new \Think\Page($count, 25); // 实例化分页类 传入总记录数和每页显示的记录数(25)
            $show = $Page->show(); // 分页显示输出
// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
            $list = $db->where($map)->limit($Page->firstRow . ',' . $Page->listRows)->select();
            $this->assign('article', $list); // 赋值数据集
            $this->assign('page', $show); // 赋值分页输出
            //$this->article = $db->where($map)->select();
            $this->alist = $db->where(array('state' => 1))->limit(7)->select();
            $this->display('index');
        } else if ($type == 2) {
            $map1['type'] = array(array('gt', 3), array('lt', 20));
            $map1['state'] = 1;
            $count = $db->where($map1)->count(); // 查询满足要求的总记录数
            $Page = new \Think\Page($count, 25); // 实例化分页类 传入总记录数和每页显示的记录数(25)
            $show = $Page->show(); // 分页显示输出
// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
            $list = $db->where($map1)->limit($Page->firstRow . ',' . $Page->listRows)->select();
            $this->assign('article', $list); // 赋值数据集
            $this->assign('page', $show); // 赋值分页输出
            //$this->article = $db->where($map1)->select();
            $this->alist = $db->where(array('state' => 1))->limit(7)->select();
            $this->display('index');
        } else if ($type == 3) {
            $map2['type'] = array(array('gt', 19), array('lt', 22));
            $map2['state'] = 1;
            $count = $db->where($map2)->count(); // 查询满足要求的总记录数
            $Page = new \Think\Page($count, 25); // 实例化分页类 传入总记录数和每页显示的记录数(25)
            $show = $Page->show(); // 分页显示输出
// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
            $list = $db->where($map2)->limit($Page->firstRow . ',' . $Page->listRows)->select();
            $this->assign('article', $list); // 赋值数据集
            $this->assign('page', $show); // 赋值分页输出
            // $this->article = $db->where($map2)->select();
            $this->alist = $db->where(array('state' => 1))->limit(7)->select();
            $this->display('index');
        } else if ($type == 4) {
            $map3['type'] = array(array('gt', 21), array('lt', 23));
            $map3['state'] = 1;
            $count = $db->where($map3)->count(); // 查询满足要求的总记录数
            $Page = new \Think\Page($count, 25); // 实例化分页类 传入总记录数和每页显示的记录数(25)
            $show = $Page->show(); // 分页显示输出
// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
            $list = $db->where($map3)->limit($Page->firstRow . ',' . $Page->listRows)->select();
            $this->assign('article', $list); // 赋值数据集
            $this->assign('page', $show); // 赋值分页输出
            //$this->article = $db->where($map3)->select();
            $this->alist = $db->where(array('state' => 1))->limit(7)->select();
            $this->display('index');
        } else if ($type == 5) {
            $map4['type'] = array(array('gt', 23), array('lt', 28));
            $map4['state'] = 1;
            $count = $db->where($map4)->count(); // 查询满足要求的总记录数
            $Page = new \Think\Page($count, 25); // 实例化分页类 传入总记录数和每页显示的记录数(25)
            $show = $Page->show(); // 分页显示输出
// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
            $list = $db->where($map4)->limit($Page->firstRow . ',' . $Page->listRows)->select();
            $this->assign('article', $list); // 赋值数据集
            $this->assign('page', $show); // 赋值分页输出
            //$this->article = $db->where($map4)->select();
            $this->alist = $db->where(array('state' => 1))->limit(7)->select();
            $this->display('index');
        } else if ($type == 6) {
            if ($_GET['type'] == 6) {
                if ($_SESSION['state'] != 1) {
                    $this->redirect('Index/index');
                }
            }
            $map5['type'] = array(array('gt', 27), array('lt', 32));

            $map5['state'] = 1;
            $count = $db->where($map5)->count(); // 查询满足要求的总记录数
            $Page = new \Think\Page($count, 25); // 实例化分页类 传入总记录数和每页显示的记录数(25)
            $show = $Page->show(); // 分页显示输出
// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
            $list = $db->where($map5)->limit($Page->firstRow . ',' . $Page->listRows)->select();
            $this->assign('article', $list); // 赋值数据集
            $this->assign('page', $show); // 赋值分页输出
            //$this->article = $db->where($map5)->select();
            $this->alist = $db->where(array('state' => 1))->limit(7)->select();
            $this->display('index');
        } else if ($type == 7) {
            $map0['state'] = 1;
            $count = $db->where($map0)->count(); // 查询满足要求的总记录数
            $Page = new \Think\Page($count, 25); // 实例化分页类 传入总记录数和每页显示的记录数(25)
            $show = $Page->show(); // 分页显示输出
// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
            $list = $db->where($map0)->limit($Page->firstRow . ',' . $Page->listRows)->select();
            $this->assign('article', $list); // 赋值数据集
            $this->assign('page', $show); // 赋值分页输出
            //$this->article = $db->where($map0)->select();

            $this->alist = $db->where(array('state' => 1))->limit(7)->select();

            $this->display('index');
        }
    }

}
