<?php
class UserAction extends Action{

    public function register(){
        if(session('name') == null) $this->display();
        else{
            $this->assign("jumpUrl","__APP__/Index/index");
            $this->error('您已经登录！');
        }
    }

    public function insert(){
        $User  =  D('User');
        if($User ->create()) {
            $result =   $User->add();
            if($result) {
                session('name',$_POST['username']);
                $this->assign("jumpUrl","__APP__/Index/index");
                $this->success('注册成功！');
            }else{
                $this->assign("jumpUrl","__APP__/User/register");
                $this->error('注册失败！');
            }
        }else{
            $this->error($User->getError());
        }

    }


    //update
    public function edit($id=0){
        $User   =   M('User');
        $this->vo    =   $User->find($id);
        if(session('name') == null) {
            $this->assign("jumpUrl","__APP__/User/login");
            $this->error('您还未登录！');
        }else{
            $result = $User->find($id);
            if($result['username'] != session('name')){
                $this->assign("jumpUrl","__APP__/Index/index");
                $this->error('修改账号不符!');
            }else $this->display();
        }
    }
    public function update(){
        $User = D('User');
        $result = $User->where('id=' . $_POST['id'])->find();
        $oldPassword =md5($_POST['oldPassword']);

        if($User->create()) {
            if($result['password'] == $oldPassword){
                $data['password'] = md5($_POST['password']);
                $result =   $User->where('id=' . $_POST['id'])->save($data);
                echo($_POST['id']);
                if($result) {
                    session('name',null);
                    $this->assign("jumpUrl","__APP__/User/login");
                    $this->success('操作成功，请重新登录！');
                }else{
                    $this->error('新旧密码一致！');
                }
            }else{
                $this->error('密码错误！');
            }
        }else{
            $this->error($User->getError());
        }

    }

        public function login(){
            if(session('name') == null) $this->display();
            else{
                $this->assign("jumpUrl","__APP__/Index/index");
                $this->error('您已经登录！');
            }
        }
        public function checklogin(){
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        $User = D("User");
        $user_info = $User->where("username ='$username'")->find();
        if($User->create()){
            if(!empty($user_info)){
                if($user_info['password'] == $password){
                    session('name',$username);
                    $this->assign("jumpUrl","__APP__/Index/index");
                    $this->success('登陆成功！');
                }else{
                    $this->assign("jumpUrl","__APP__/User/login");
                    $this->error('密码出错，请重新输入！');
                }
            }else{
                $this->assign("jumpUrl","__APP__/User/login");
                $this->error('用户名不存在！');
            }
        }else{
            $this->error($User->getError());
        }

    }

    public function loginout(){
        if(session('name') == null){
            $this->assign("jumpUrl","__APP__/User/login");
            $this->error('您还未登录！');
        }
        session('name',null);
        $this->assign("jumpUrl","__APP__/Index/index");
        $this->success('您已经成功退出！');
    }


    public function user(){
        if(session('name') == null){
            $this->assign("jumpUrl","__APP__/User/login");
            $this->error('您还未登录,请先登录');
        }else{
            $User = M('User');
            $username = session('name');
            $user_info = $User->where("username = '$username'" )->find();
            $this->assign('id',$user_info['id']);
            $this->assign("session",session('name'));
            $this->assign("content",session('content'));

            $Chat = M('Chat');
            $this->data =  $Chat->where("username = '$username'" )->order('create_time desc')->select();
            $this->display();
        }
    }

    public function save(){
        $Chat = D('Chat');
       if(strlen($_POST['content']) > 500)
       {
           echo('这里共有');
           echo(strlen($_POST['content']));
           echo('个字呢！щ(゜ロ゜щ)');
           session('content',$_POST['content']);
           $this->error("超过字数限制");
       }

        $data['username'] = session('name');
        $data['content'] = $_POST['content'];
        $data['create_time'] = time();

        $result =   $Chat->add($data);
        if($result) {
            $this->assign("jumpUrl","__APP__/User/user");
            $this->assign("jumpUrl","__APP__/User/user");
            $this->success('发表成功！');
        }else{
            $this->assign("jumpUrl","__APP__/User/user");
            $this->error('发表失败！');
        }
    }

    public function delete(){
        $Chat = D('Chat');
        $data['id'] = $_GET['id'];
        $result = $Chat->delete($data['id']);
        if($result){
            $this->assign("jumpUrl","__APP__/User/user");
            $this->success("删除成功！");
        }else{
            $this->assign("jumpUrl","__APP__/User/user");
            $this->error('删除失败！');
        }
    }
}