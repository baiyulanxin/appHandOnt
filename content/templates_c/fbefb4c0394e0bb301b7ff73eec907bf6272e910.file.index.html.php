<?php /* Smarty version Smarty-3.1.18, created on 2016-03-12 04:42:30
         compiled from "content\themes\default\index.html" */ ?>
<?php /*%%SmartyHeaderCode:1719956e309cdb4dcf1-68607108%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fbefb4c0394e0bb301b7ff73eec907bf6272e910' => 
    array (
      0 => 'content\\themes\\default\\index.html',
      1 => 1457728947,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1719956e309cdb4dcf1-68607108',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_56e309cdbb9c64_97243284',
  'variables' => 
  array (
    'tit' => 0,
    'kw' => 0,
    'des' => 0,
    'head' => 0,
    'notice' => 0,
    'isVisitor' => 0,
    'userinfo' => 0,
    'jscode' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e309cdbb9c64_97243284')) {function content_56e309cdbb9c64_97243284($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
 <head> 
  <meta charset="UTF-8" /> 
  <title><?php echo $_smarty_tpl->tpl_vars['tit']->value;?>
</title> 
  <meta name="renderer" content="webkit" /> 
     <meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['kw']->value;?>
">
        <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['des']->value;?>
">
  <link href="favicon.ico" rel="shortcut icon" /> 
  <link rel="stylesheet" href="content/themes/default/bootstrap/css/bootstrap.css" /> 
  <link rel="stylesheet" href="content/themes/default/bootstrap/css/style.css" />
 </head>
 <body onLoad="danru();" id="sd_index" class="sdin">
   <?php echo $_smarty_tpl->tpl_vars['head']->value;?>
 
  <script type="text/javascript" src="content/themes/default/bootstrap/js/bootstrap.min.js"></script> 
  <script type="text/javascript" src="content/themes/default/theme.js"></script> 
  <script type="text/javascript" src="content/themes/default/js/plax.min.js"></script> 
  <style>
body {

	background-color: #F0F0F0;
  font-family:"微软雅黑";
}
</style> 
  <!--[if lt IE 9]>
      <script src="js/Respond-1.4.2/respond.min.js"></script>
    <![endif]--> 
    <?php if ($_smarty_tpl->tpl_vars['notice']->value=='') {?>  
    <?php } else { ?>
    <div class="alert alert-warning alert-dismissible navbar-fixed-bottom" style="margin-bottom: 0px;"role="alert">
  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
 <?php echo $_smarty_tpl->tpl_vars['notice']->value;?>

</div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['isVisitor']->value=="true") {?> 
<div class="top-button"align="right" >
      <a  style=""class="btn btn-p-outline" href="views/login.php"><span class="glyphicon glyphicon-user" aria-hidden="true"> 操作员登陆</a>

</div>
<?php } else { ?>
<div class="top-button"align="right" >
      <a  style=""class="btn btn-p-outline" href="views/userIndex.php"><span class="glyphicon glyphicon-user" aria-hidden="true"> <?php echo $_smarty_tpl->tpl_vars['userinfo']->value['username'];?>
</a>

</div>
<?php }?>
  <div id="wrapper" class="clearfix"> 

   <div id="parallax_wrapper"> 

    <div id="content"> 
     <div align="center"> 
      <p> </p> 
      <p><br /> </p>
      <div style="height:128px;"> 
       <div align="center" style="display:none;" name="logo" id="logo">
        <img src="content/themes/default/images/logo.png" width="366" height="128" />
       </div> 
      </div> 
      <br /> 
      <div align="center">
       <div class="xuxian xiaoguo" id="laru"> 
        <br />
        <br />
        <div id="uu"> 
         <button class="btn btn-primary btn-lg " id="pickfiles"> <i class="glyphicon glyphicon-plus"></i> 
          <sapn>
           选择文件
          </sapn> </button>
        </div> 
        <br /> 
        <div id="shuo">
         <h3 style="font-family: '微软雅黑';">或</h3>
         <h5 style="font-family: '微软雅黑';">将文件拖拽到此</h5> 
        </div>
        <div id="kongge" style="display:none;">
         <br />
        </div> 
        <div id="container">
         <div id="ss"></div>
         <table style="display:none"> 
          <tbody id="fsUploadProgress"> 
          </tbody> 
         </table> 
         <div class="ss"></div> 
         <div id="cuowu1" style="display:none;">
          <br />
          <div id="errinfo" class="alert alert-danger" style="width:450px;" align="center" role="alert"></div>
         </div> 
         <div id="gc"> 
          <div id="su" style="display:none;">
           <br />
           <div id"susu"="" class="alert alert-success" style="width:450px;" align="center" role="alert">
            处理中，请稍后...
           </div>
          </div>
         </div>
         <div id="cuowu" style="display:none;">
          <br />
          <div class="alert alert-danger" style="width:450px;" align="center" role="alert">
           上传失败，请稍后再试或联系站长
          </div>
         </div> 
        </div>
        <br />
        <br /> 
       </div> 
      </div> 
     </div> 
    </div> 
   </div>
  </div>  
  <!--parallax--> 
  <span class="scene scene_1"></span> 
  <span class="scene scene_2"></span> 
  <span class="scene scene_3"></span>   <?php echo $_smarty_tpl->tpl_vars['jscode']->value;?>
   
 </body>
</html><?php }} ?>
