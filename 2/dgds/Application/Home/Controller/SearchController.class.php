<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SearchController
 *
 * @author YangYatong
 */

namespace Home\Controller;

use Think\Controller;

class SearchController extends Controller {
    /* 打开查询页面 */

    public function index() {
        $this->display();
    }

    /* 搜索函数 */

    public function search() {
        $User = M("User"); // 实例化User对象
        $map['realname|username'] = $_POST['find'];
        // 把查询条件传入查询方法
        $data = $User->where($map)->select();
        $this->assign('data', $data);
        var_dump($data);
    }

    public function asearch() {
        if($_POST['search']){
            
        
        $date = $_POST['search'] ;
        //var_dump($_POST);
        $db = M('article');
        $where['lable'] = array('like', '%' . $date . '%');
        $where['state'] = '1';
        $condition['_logic'] = 'AND';
        $count = $db->where($where)->count(); // 查询满足要求的总记录数
        if($count > 0){
                    $Page = new \Think\Page($count, 25); // 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show = $Page->show(); // 分页显示输出
// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $db->where($where)->limit($Page->firstRow . ',' . $Page->listRows)->select();
        $i=0;
        for($i=0;$i<=$count;$i++){
        $list[$i]['lable'] = preg_replace("/($date)/i", "<font color=red>\\1</font>", $list[$i]['lable']);
        }
        //var_dump($list);die;
        $this->assign('article', $list); // 赋值数据集
        $this->assign('page', $show); // 赋值分页输出
        // $this->article = M('article')->where($where)->select();
//        var_dump($list);
        }

        
        }
        $this->display('asearch');
    }

}
