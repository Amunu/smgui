<?php
class UserModel extends Model{
    protected $_validate = array(
        array('username','require','必须填写用户名',0),
        array('password','require','必须填写密码',0),
        array('username','','帐号名称已经存在！',0,'unique','add'),
        array('againPassword','password','两次密码不一致',0,'confirm'),
        array('password','checkPwd','密码格式不正确',0,'function'),
    );
    protected $_auto = array (
        array('password','md5',1,'function') ,
     );
}
