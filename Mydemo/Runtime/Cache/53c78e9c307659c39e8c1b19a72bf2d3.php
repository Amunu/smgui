<?php if (!defined('THINK_PATH')) exit();?><html>
    <head>
        <script src="/Mydemo/Public/dist/js/bootstrap.min.js"></script>
        <link href="/Mydemo/Public/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>

<div class="row">
    <div class="col-md-3"></div>

    <div class="col-md-6">
        <h1> <?php echo ($session); ?>..ԅ(¯ㅂ¯ԅ)欢迎ヽ｀、ヽ｀</h1>
        <p>---<a href="__APP__/Index/index">首页</a>---<a href="edit/id/<?php echo ($id); ?>">修改密码</a>---</p>
        <form method="post" action="__URL__/save">
            <b>输入您要发送的内容：</b> （最多可输入500个字）<br/>
            <textarea name="content" rows="10" cols="70" value="<?php echo ($content); ?>" class="form-control"></textarea><br/>
            <button type="submit" class="btn btn-primary btn-lg btn-block">提交</button>
        </form>
        <div style="padding-top: 40px;">
            <h2>ヾ(｡･ω･｡) 心路历程</h2>
            <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="panel panel-default">
                    <div class="panel-body">
                        <div class="page-header">
                            <h1><?php echo ($vo["username"]); ?><small style="padding-left: 40px;"><?php echo (date("Y-m-d H:i:s",$vo["create_time"])); ?></small></h1>
                        </div>
                        <div style="padding-top: 20px;">
                            <?php echo (htmlentities($vo["content"])); ?>  <br/>
                            <p><a href="__APP__/User/delete?id=<?php echo ($vo["id"]); ?>" onclick="delete_content()">删除-ヾ(。￣□￣)ﾂ</a></p>
                        </div>
                    </div>
                </div><?php endforeach; endif; else: echo "" ;endif; ?>
        </div>

    </div>

    <div class="col-md-3"></div>
</div>
</html>

<script>
  function delete_content(){
      alert("确定要删除我吗？！！｡：ﾟ(｡ﾉω＼｡)ﾟ･｡ ");
  }
</script>