<?php

namespace Home\Controller;

use Think\Controller;

class IndexController extends Controller {

    public function index() {
        /* 打开主页页面 */
        $this->role = M('rolewin')->select();
        $db = M('article');
        $map0['state']=1;
        $map['type'] = array(array('gt', 0), array('lt', 4));
        $map['state']=1;
        $map1['type'] = array(array('gt', 3), array('lt', 20));
        $map1['state']=1;
        $map2['type'] = array(array('gt', 19), array('lt', 22));
        $map2['state']=1;
        $map3['type'] = array(array('gt', 21), array('lt', 23));
        $map3['state']=1;
        $map4['type'] = array(array('gt', 23), array('lt', 28));
        $map4['state']=1;
        $map5['type'] = array(array('gt', 27), array('lt', 32));
        $map5['state']=1;
        $this->article = $db->limit(5)->where($map0)->select();
        $this->zgdt = $db->limit(5)->where($map)->select();
        $this->ksfc = $db->limit(5)->where($map1)->select();
        $this->xxpx = $db->limit(5)->where($map2)->select();
        $this->lzjs = $db->limit(5)->where($map3)->select();
        $this->dtgz = $db->limit(5)->where($map4)->select();
        $this->shyd = $db->limit(5)->where($map5)->select();
        $this->window= M('window')->select();
        $this->column=M('column')->select();
        $this->pic= M("pic")->select(); 
        $this->picnew= M("picnews")->select();
        $this->videonew= M("videonews")->select();
        $this->display();
    }

    public function login() {
        $this->display();
    }

    public function detil() {
        $this->alist= M('article')->limit(7)->select();
        $this->article = M('article')->where($_GET)->select();
        $this->display();
    }

    public function cdetil() {
        $this->alist= M('article')->limit(7)->select();
        $this->article = M('carticle')->where($_GET)->select();
        $this->display('detil');
    }
    /* 打开注册页面 */

    public function register() {
        $this->display('register');
    }

    /* 用户登录功能函数 */

    public function userLogin() {
        if (!IS_POST)
            halt('页面不存在');
        $db = M('user');
        $user = $db->where(array('username' => I('username')))->find(); //查找当前用户名用户
        //var_dump($user);
        $str = $_POST['password'];
        $password = md5($str);
        if (!$user || $user['password'] != $password) {
            $this->error('账户或密码错误');
        }
        /* 数据库的更新 */
        $data = array(
            'id' => $user['id'],
            'time' => time(),
            'ip' => get_client_ip()
        );
        $db->save($data);
        /* 写入session */
        session('uid', $user['id']);
        //状态量
        session('state', 1);
        session('username', $user['username']);
        session('logintime', date('Y-m-d H:i:s', $user['time']));
        session('loginip', $user['ip']);

        // redirect(__GROUP__); //跳转到后台页面
//        $this->assign('user', $user);
//        $this->display('User:userinfo');
        $this->redirect('User/user_info');
    }

    /* 用户注册功能函数 */

    public function userCreate() {

        $db = M("user");
        $str = $_POST['password'];
        $password = md5($str);
        $data = array(
            'username' => $_POST['username'],
            'password' => $password,
            'realname' => $_POST['realname'],
            'gender' => $_POST['gender'],
            'phone' => $_POST['phone'],
            'email' => $_POST['email'],
            'time' => time(),
            'ip' => get_client_ip(),
            'department' => $_POST['department']
        );
        // $_dump($data);
        $db->add($data);

        $this->redirect('User/user_info');
        /* 检查ip
         * 133.1.60.17~133.1.60.254?
         * 133.1.60.18~133.1.60.254? */
    }

    /* 生成验证码 */

    public function getVerify() {
        //实例化传入参数
        $config = array(
            'fontSize' => 20, // 验证码字体大小
            'length' => 4, // 验证码位数
            'useNoise' => false, // 关闭验证码杂点
            'imageW' => 150, //验证码宽度 设置为0为自动计算
            'imageH' => 40,
            'useCurve' => FALSE, //关闭验证码干扰曲线
        );
        $Verify = new \Think\Verify($config);
        $Verify->entry();
    }

    /* 检测输入的验证码是否正确，$code为用户输入的验证码字符串 */

    function checkVerify($code) {
        $verify = new \Think\verify();
        return $verify->check($code);
    }

    public function userCancel() {
      session(null); // 清空当前的session
        
        if (!session('uid')) {
            $this->error("注销成功，正在返回登录页面",U('/Index/Index'));
        }
    }
    
    /*
     * author: 马斌
     */
    public function header(){
        $this->display();
    }
    public function footer(){
        $this->display();
    }

}
