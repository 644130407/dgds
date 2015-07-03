<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FileController
 *
 * @author 帆
 */

namespace Admin\Controller;

use Common\Controller\AuthController;

class FileController extends AuthController {

    //put your code here
    public function index() {
        
        $this->pic= M("pic")->select(); 
        $this->display();
    }
    
    public function del(){
         $id = (int) $_GET['id'];
        if (M('pic')->delete($id)) {
            $this->success('删除成功');
        } else {
            $this->error('删除失败');
        }
    }

    Public function upload() {
        //import('new \Org\Net\UploadFile() ');
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize = 3145728; // 设置附件上传大小
        $upload->exts = array('jpg', 'gif', 'png', 'jpeg'); // 设置附件上传类型
        $upload->rootPath = './Public/Uploads/'; // 设置附件上传目录
        
        $upload->imageClassPath = '@.ORG.Image'; //设置需要生成缩略图的文件后缀
        $info   =   $upload->uploadOne($_FILES['photo1']);
        if (!$info) {// 上传错误提示错误信息
            $this->error($upload->getError());
        } else {// 上传成功 获取上传文件信息
            //$info = $upload->getUploadFileInfo();
           //var_dump($info);
            //var_dump($info[0]['savepath']);die;
            $this->success('上传成功！');
        }
        $data['id'] = $_POST['id'];
        $data['image'] = $info['savename'];
        $data['create_time'] =time();
        $data['path']=$info['savepath'];

//        $data = array(
//            'image' => $info[0]['savepath'].$info[0]['savename'],
//            'time'=>time()
//        );
        
// 保存表单数据 包括附件数据
        $pic = M("pic"); 
        if($pic->save($data)){
            $this->success('上传成功！');
        }else{
            $this->fail('上传失败！');
        }
    }
    

}
