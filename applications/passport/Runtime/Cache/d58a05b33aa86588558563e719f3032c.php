<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<style type="text/css">
<!--
.errors { border:#FF0000 solid 1px;
}
-->
</style>
</head>

<body>
<form action="" method="post">
<div>
    <input name="name" type="text" value="<?php echo ($_POST['name']); ?>"/>
    <?php if($error['name']): ?><span class="errors" ><?php echo ($error['name']); ?></span><?php endif; ?>
</div>
<div>
    <input name="sid" type="text" value="<?php echo ($_POST['sid']); ?>"/>
    <?php if($error['sid']): ?><span class="errors" ><?php echo ($error['sid']); ?></span><?php endif; ?>
</div>
<div>
    <input name="pid" type="text" value="<?php echo ($_POST['pid']); ?>"/>
    <?php if($error['pid']): ?><span class="errors" ><?php echo ($error['pid']); ?></span><?php endif; ?>
    </div>
<div>
    <input name="verify" type="text"/>
    <?php if($error['verify']): ?><span class="errors" ><?php echo ($error['verify']); ?></span><?php endif; ?></div></div>
<div>
    <?php if($error['check']): ?><span class="errors" ><?php echo ($error['check']); ?></span><?php endif; ?>
</div>
<img src="/passport/common/verify" />
<input name="" type="submit" />
</form>
</body>
</html>