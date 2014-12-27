<?php
class IndexAction extends Action {
    public function index(){
        $Chat = M('Chat');
        $this->data =  $Chat->order('create_time desc')->select();
        $this->assign('username',session('name'));
        $this->display();
    }
}
