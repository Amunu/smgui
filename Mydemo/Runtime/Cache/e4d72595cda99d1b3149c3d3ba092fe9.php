<?php if (!defined('THINK_PATH')) exit();?><html>
    <head>
        <script src="/Mydemo/Public/dist/js/bootstrap.min.js"></script>
        <link href="/Mydemo/Public/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>

<div class="row">
    <div class="col-md-3"></div>

    <div class="col-md-6">
        <div style="padding-top: 90px;">
            <h2>修改密码</h2>
        </div>
        <FORM method="post" action="__URL__/update">
            旧密码:<INPUT type="password" name="oldPassword" class="form-control"><br/>
            新密码：<INPUT type="password" name="password" class="form-control"><br/>
            再输一次新密码:<INPUT type="password"name="againPassword" class="form-control"><br/>
            <INPUT type="hidden" name="id" value="<?php echo ($vo["id"]); ?>">
            <button type="submit" class="btn btn-primary btn-lg btn-block">提交</button>
            <a href="__APP__/User/user" class="btn btn-default btn-lg btn-block" role="button">取消</a>
            <button type="button" class="btn btn-default btn-lg btn-block" onclick="jump()">取消</button>
        </FORM>
    </div>

    <div class="col-md-3"></div>
</div>
</html>

<script>
    function jump(){

    }
</script>