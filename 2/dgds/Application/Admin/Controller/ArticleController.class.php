<?php

namespace Admin\Controller;

use Common\Controller\AuthController;

/**
 * Description of ArticleController
 *
 * @author 帆
 */
class ArticleController extends AuthController {

    public function index() {
        $this->type = M('type')->select();
        $this->column = M('column')->select();
        $this->display();
    }

    public function column() {
        $this->ctype = M('ctype')->select();
        $this->column = M('column')->select();
        $this->display();
    }

    //文章修改
    public function articlechange() {
        $this->type = M('type')->select();
        $article = M('article')->where($_GET)->select();
        $type = M('type')->where(array('id' => $article[0]['type']))->select();
        $article['0']['tname'] = $type[0]['tname'];
        $this->assign('article', $article);
        $this->display();
    }

    //column 文章修改
    public function carticlechange() {
        $this->ctype = M('ctype')->select();
        $this->column = M('column')->select();
        $article = M('carticle')->where($_GET)->select();
        //专栏文章类型查找
        $type = M('column')->where(array('id' => $article[0]['column']))->select();
        $article['0']['cname'] = $type[0]['column'];
        //专栏文章小类型查找
        $type = M('ctype')->where(array('id' => $article[0]['ctype']))->select();
        $article['0']['tname'] = $type[0]['tname'];
        //var_dump($article);die;
        $this->assign('article', $article);
        $this->display();
    }

    //column 文章修改
    public function cchange() {
        
        if (M('carticle')->save($_POST)) {
            $this->success('success');
        } else {
            $this->error('fail');
        }
    }

    public function change() {
        if (M('article')->save($_POST)) {
            $this->success('success');
        } else {
            $this->error('fail');
        }
    }

    //专栏文章发布6.25改
    public function carticleadd() {
        $data = array(
            'lable' => $_POST['title'],
            'writer' => $_SESSION['username'],
            'state' => 0,
            'content' => $_POST['content'],
            'ctype' => $_POST['ctype'],
            'time' => $_POST['time'],
            'column' => $_POST['column']
        );

//        var_dump($data);die;
        $db = M('carticle');
        if ($db->add($data)) {
            $this->success('success');
        } else {
            $this->error('添加失败');
        }
        $article = $db->where($data)->select();

        $aupdown = array(
            'aid' => $article[0]['id'],
            'up' => 0,
            'down' => 0,
        );

        $db2 = M('aupdown');
        if ($db2->add($aupdown)) {
            $this->success('评论success');
        } else {
            $this->error('评论添加失败');
        }
    }

    //新闻发布
    public function articleadd() {
        $data = array(
            'lable' => $_POST['title'],
            'content' => $_POST['content'],
            'type' => $_POST['type'],
            'time' => $_POST['time'],
            'writer' => $_SESSION['username'],
            'state' => 0,
        );
        $db = M('article');
        if ($db->add($data)) {
            $this->success('success');
        } else {
            $this->error('添加失败');
        }
        $article = $db->where($data)->select();
        //var_dump($article);
        //die;
        $aupdown = array(
            'aid' => $article[0]['id'],
            'up' => 0,
            'down' => 0,
        );
//        var_dump($aupdown);die;
        $db2 = M('aupdown');
        if ($db2->add($aupdown)) {
            $this->success('success');
        } else {
            $this->error('添加失败');
        }
    }

}
