<?php

namespace Admin\Controller;

use Common\Controller\AuthController;

/**
 * Description of ColumnController
 *
 * @author 帆
 */
class ColumnController extends AuthController {

    public function index() {
        $this->column = M('column')->select();
        $this->display();
    }
    public function change(){
        $this->column = M('column')->where($_GET)->select();
        $this->display();
    }
    public function changeit(){
        
        if(M('column')->save($_POST)){
            $this->success('success');    
        } else {
            $this->error('fail');
        }
    }

}
