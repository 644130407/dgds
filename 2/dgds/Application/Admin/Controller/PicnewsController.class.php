<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Admin\Controller;

use Common\Controller\AuthController;

/**
 * Description of PicnewsController
 *
 * @author 帆
 */
//前台图片新闻的上传类
class PicnewsController extends AuthController {

    public function index() {
        $this->pic = M("picnews")->select();
        $this->display();
    }

//    public function change() {
//        $id = (int) $_GET['id'];
//        if (M('pic')->delete($id)) {
//            $this->success('修改成功');
//        } else {
//            $this->error('修改失败');
//        }
//    }

    Public function upload() {

        $upload = new \Think\Upload(); // 实例化上传类
        $upload->maxSize = 3145728; // 设置附件上传大小
        $upload->exts = array('jpg', 'gif', 'png', 'jpeg'); // 设置附件上传类型
        $upload->rootPath = './Public/Uploads/'; // 设置附件上传目录

        $upload->imageClassPath = '@.ORG.Image'; //设置需要生成缩略图的文件后缀
        $info = $upload->uploadOne($_FILES['photo1']);
        if (!$info) {// 上传错误提示错误信息
            $this->error($upload->getError());
        } else {// 上传成功 获取上传文件信息
            $this->success('上传成功！');
        }
        $data['id'] = $_POST['id'];
        $data['name'] = $info['savename'];
        $data['create_time'] = time();
        $data['path'] = $info['savepath'];
        $data['link'] = $_POST['link'];
        $data['lable'] = $_POST['lable'];

        $pic = M("picnews");
        if ($pic->save($data)) {
            $this->success('上传成功！');
        } else {
            $this->fail('上传失败！');
        }
    }

}
