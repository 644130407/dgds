<?php
namespace Admin\Controller;

use Common\Controller\AuthController;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of RolewinController
 *
 * @author 帆
 */
class RolewinController extends AuthController {
    //put your code here
     public function index() {
        $this->role = M('rolewin')->select();
        $this->show();
    }
    
    public function del() {
        $id = (int) $_GET['id'];
        if (M('rolewin')->delete($id)) {
            $this->success('删除成功');
        } else {
            $this->error('删除失败');
        }
    }
    
    public function add(){
        
        if(M('rolewin')->add($_POST)){
            $this->success('success');    
        } else {
            $this->error('fail');
        }
    }
}
