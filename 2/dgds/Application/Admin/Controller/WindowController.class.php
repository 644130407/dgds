<?php

namespace Admin\Controller;

use Common\Controller\AuthController;

/**
 * Description of WindowController
 *
 * @author 帆
 */
class WindowController extends AuthController  {

    public function index() {
        $this->window = M('window')->select();
        $this->show();
    }
    
    public function del() {
        $id = (int) $_GET['id'];
        if (M('window')->delete($id)) {
            $this->success('删除成功');
        } else {
            $this->error('删除失败');
        }
    }
    public function add(){
        
        if(M('window')->add($_POST)){
            $this->success('success');    
        } else {
            $this->error('fail');
        }
    }
    
    

}
