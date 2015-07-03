<?php

namespace Admin\Controller;

use Common\Controller\AuthController;

/**
 * Description of TypeController
 *
 * @author 帆
 */
class TypeController extends AuthController {

    public function index() {
        $this->type = M('type')->select();
        $this->show();
    }

    //增加分类
    public function add() {

        if (M('type')->add($_POST)) {
            $this->success('success');
        } else {
            $this->error('添加失败');
        }
    }
//删除分类，先不考虑多对多问题
    public function del() {
        $id = (int) $_GET['id'];
        if (M('type')->delete($id)) {
            $this->success('删除成功');
        } else {
            $this->error('删除失败');
        }
    }
    
    //修改
     public function change() {
         $id = (int) $_GET['id'];
         
     }

}
