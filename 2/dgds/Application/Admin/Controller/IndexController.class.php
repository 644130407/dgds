<?php
/**
 * Description of IndexController
 * 后台管理员登录页面
 * 
 * 管理员登录功能函数
    public function index()
 * 用户注销函数
    public function logout()
 * @author YangYatong
 */

namespace Admin\Controller;

use Think\Controller;

class IndexController extends Controller {

    //用户注销函数
    public function logout() {
        session('[destroy]');
        $this->success('退出成功', U('Index/index'));
    }

    //管理员登录功能函数
    public function index() {
        if (!IS_POST) {
            $this->display('login');
        } else {

            $db = M('administrator');
            $user = $db->where(array('username' => I('username')))->find(); //查找当前用户名用户
            //var_dump($user);
            $str = $_POST['password'];
            $password = md5($str);
            if (!$user || $user['password'] != $password) {
                $this->error('账户或密码错误');
            }

            //数据库的更新
            $data = array(
                'id' => $user['id'],
                'time' => time(),
                'ip' => get_client_ip()
            );
            $db->save($data);
            //写入session
            $login = array(
                'uid' => $user['id'],
                'username' => $user['username'],
                'jurisdiction' => $user['jurisdiction'],
                'logintime' => date('Y-m-d H:i:s', $user['time']),
                'loginip' => $user['ip']
            );

            // redirect(__GROUP__); //跳转到后台页面
            session('username', $user['username']);
            session('auth', $login);
            $this->success('登录成功', U('Admin/index'));
        }
    }

}
