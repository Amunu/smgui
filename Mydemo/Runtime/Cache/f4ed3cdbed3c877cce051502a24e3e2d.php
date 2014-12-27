<?php if (!defined('THINK_PATH')) exit();?><html>
    <head>
        <script src="/Mydemo/Public/dist/js/bootstrap.min.js"></script>
        <link href="/Mydemo/Public/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>

<body>
     <div class="row">
        <div class="col-md-3"></div>

        <div class="col-md-6">
            <h1>首页</h1>
            <div id="Nshow" style="">
                <p><a href="__APP__/User/user">(=ﾟωﾟ)ﾉ 勇敢地戳进来</a>---<a href="__APP__/User/loginout">ヘ(゜Д、゜)ノ要走了？！ </a></p>
            </div>
            <div id="Yshow" style="">
                <a  href="__APP__/User/login">(*´・ｖ・)快登陆吧</a>---<a href="__APP__/User/register">(゜▽゜;)还没有账号？！ </a>
            </div>
            <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="panel panel-default">
                    <div class="panel-body">
                        <div class="page-header">
                            <h1><?php echo ($vo["username"]); ?><small style="padding-left: 40px;"><?php echo (date("Y-m-d H:i:s",$vo["create_time"])); ?></small></h1>
                        </div>
                        <div style="padding-top: 20px;">
                            <?php echo (htmlentities($vo["content"])); ?>  <br/>
                        </div>
                    </div>
                </div><?php endforeach; endif; else: echo "" ;endif; ?>
        </div>

        <div class="col-md-3"></div>
    </div>


</body>
</html>

<script>
    if(<?php echo ($username == null ? "null" : "'1'"); ?> == null){
        document.getElementById('Nshow').style.display = "none";
        document.getElementById('Yshow').style.display = "";
    }else{
        document.getElementById('Nshow').style.display = "";
        document.getElementById('Yshow').style.display = "none";
    }
</script>