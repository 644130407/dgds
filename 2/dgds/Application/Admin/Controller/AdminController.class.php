<?php

/**
 * Description of AdminController
 * 后台管理员控制主页
 * 
 * 搜索(仅搜索了上线文章)[应该放在Home，记得整合]
    public function seach()
 * @author 帆
 * 
 * 管理员信息页面
    public function admin_info()
 * 管理员信息修改页面
    public function admin_info_update()
 * 管理员信息修改函数
    public function adminInfoUpdate()
 * @author YangYatong
 */

namespace Admin\Controller;

use Common\Controller\AuthController;

class AdminController extends AuthController {

    //后台管理主页
    public function index(){
        //得到当然登录管理员的组别（权限）
       //var_dump($_SESSION);die;
        $uid=$_SESSION['auth']['uid'];
       // var_dump($uid);die;
        $gid=M('auth_group_access')->field('group_id')->where(array('uid'=>$uid))->select();
       //var_dump($gid);die;
        $gid['gid']=$gid['0']["group_id"];
        $this->assign($gid);
        //var_dump($gid);die;
        
        $this->show();
    }

    //搜索(仅搜索了上线文章)
    public function seach(){
        $date=$_POST['date'];
        //var_dump($_POST);
        
        $where['lable'] =array('like','%'.$date.'%');
        $where['state'] ='1';
        $condition['_logic'] = 'AND';
        //$where['b'] =array('notlike',array('%thinkphp%','%tp'),'AND');

        $this->article = M('article')->where($where)->select();
        $this->display('Articlelist/index');
    }
    
    //管理员信息页面
    public function admin_info() {
        $db = M("administrator");
        $user = $db->where(array('username' => session('auth.username')))->find(); //查找当前用户名用户
        $this->assign('user', $user);
        $this->display('admininfo');
    }

    //管理员信息修改页面
    public function admin_info_update() {
        $db = M("administrator");  
        $user = $db->where(array('id' =>$_SESSION['auth']['uid']))->find(); //查找当前用户名用户
        $this->assign('user', $user);
        $this->display('infoupdate');
    }

    //管理员信息修改函数
    public function adminInfoUpdate() {
        $db = M("administrator");
        $oldpassword = md5($_POST['oldpassword']);
        $user = $db->where(array('id' => $_POST['id']))->find();

        if ($oldpassword != $user['password']) {
            echo '密码失败';
        } else {
            
            $data=array(
                'id'=>$_POST['id'],
                'password'=>md5($_POST['password']),
                'realname'=>$_POST['realname'],
                'gender'=>$_POST['gender'],
                'department'=>$_POST['department'],
                'phone'=>$_POST['phone'],
                
            );
            if (M('administrator')->save($data)) {
                
                $this->success('修改成功');
            } else {
                $this->error('修改失败');
            }
        }
                $this->redirect("admin_info");
             
    }

}
