<?php /* Smarty version Smarty-3.1.18, created on 2016-03-12 05:14:18
         compiled from ".\..\content\themes\default\else_view.html" */ ?>
<?php /*%%SmartyHeaderCode:103356e30b2d03ace0-40519159%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5440a5dc01d96520428dc1891375f1aa09ee9685' => 
    array (
      0 => '.\\..\\content\\themes\\default\\else_view.html',
      1 => 1457730855,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '103356e30b2d03ace0-40519159',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_56e30b2d0c74f6_54811140',
  'variables' => 
  array (
    'filename' => 0,
    'tit' => 0,
    'head' => 0,
    'zzurl' => 0,
    'isVisitor' => 0,
    'userinfo' => 0,
    'key' => 0,
    'share' => 0,
    'fileurl' => 0,
    'jscode' => 0,
    'filetype' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e30b2d0c74f6_54811140')) {function content_56e30b2d0c74f6_54811140($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head> 
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
  <title>文件上传成功 <?php echo $_smarty_tpl->tpl_vars['filename']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['tit']->value;?>
</title> 
  <link rel="stylesheet" href="./../content/themes/default/bootstrap/css/bootstrap.css" /> 
  <link rel="stylesheet" href="./../content/themes/default/bootstrap/css/style_v.css" /> 
      <link rel="stylesheet" href="./../content/themes/default/bootstrap/css/iosOverlay.css" /> 
 </head> 
 <body>
   <?php echo $_smarty_tpl->tpl_vars['head']->value;?>
 
  <script type="text/javascript" src="./../content/themes/default/bootstrap/js/bootstrap.min.js"></script> 
  <script type="text/javascript" src="./../content/themes/default/js/ZeroClipboard.js"></script> 
    <script type="text/javascript" src="./../content/themes/default/js/iosOverlay.js"></script>
        <script type="text/javascript" src="./../content/themes/default/js/else.js"></script>
  <style type="text/css">
 body {
	background-image: url(./../content/themes/default/images/bg.png);
	background-repeat: repeat-x;
	background-color: #9cd9f2;
	margin-top:36px;
font-family: '微软雅黑';
}
.xiaoguo{box-shadow: 0px 0px 30px #888888;}
body, dl, dt, dd, ul, ol, li, h1, h2, h3, h4, h5, h6, pre, form, fieldset, textarea, p, blockquote, th, td { padding: 0; margin: 0; }
</style> 
<div>
<?php echo $_smarty_tpl->getSubTemplate ("head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('head'=>$_smarty_tpl->tpl_vars['head']->value,'zzurl'=>$_smarty_tpl->tpl_vars['zzurl']->value,'isvisitor'=>$_smarty_tpl->tpl_vars['isVisitor']->value,'userinfo'=>$_smarty_tpl->tpl_vars['userinfo']->value), 0);?>

    <br /> 
   <br /> 


   <div class="modal fade bs-example-modal-lg" tabindex="-1" id="share" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true"> 
    <div class="modal-dialog modal-lg"> 
     <div class="modal-content"> 
      <div class="modal-header"> 
       <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button> 
       <h4 class="modal-title" id="mySmallModalLabel">请选择一种分享方式</h4> 
      </div> 
      <div class="modal-body"> 
       <div style="display:none;" id="showresult"> 
        <h4><span style="color: #1087e1; font-size:50px;vertical-align:middle;" class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span><strong style="color:#2e89d2;"> 公开分享链接创建成功</strong></h4>
        <br /> 
        <div class="form-inline"> 


         <input type="text" style="width:470px;" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['zzurl']->value;?>
" id="fxurl" /> 
         <button type="button" data-clipboard-target="fxurl" id="fzfx"onclick="fzcg();" class="btn btn-primary"> 复制链接 </button>
        </div> 
        <br />
       </div> 
       <div style="display:none;" id="showresult-lock"> 
        <h4><span style="color: #1087e1; font-size:50px;vertical-align:middle;" class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span><strong style="color:#2e89d2;"> 私密分享链接创建成功</strong></h4>
        <br /> 
        <div class="form-inline"> 
          <div class="form-group">
          	 <label class="sr-only" for="fxurl">Password</label>
        	<div class="input-group">


        		<div class="input-group-addon">访问链接：</div>
         		<input type="text" style="width:230px;" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['zzurl']->value;?>
" id="fxurl-lock" /> 
         			<div class="input-group-addon">访问密码：</div>
         		<input type="text" style="width:140px;" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['zzurl']->value;?>
" id="pwd-lock" /> 
         	</div>
         	</div>
<div align="center">
         <button type="button" style="position:relative; top:5px;" data-clipboard-text="11" onclick="fzcg();"id="fzfx-lock" class="btn btn-primary"> 复制链接及密码 </button></div>
        </div> 



        <br />
       </div> 
      </div> 
      <div style="display:none;position:relative; top:-26px;" id="enter"> 
       <button type="button" onclick="getback();" class="btn btn-link"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>返回重选</button>
       <div align="center">
        <form id="bd" class="form-inline" method="post"> 
         <table width="500">
          <tbody>
           <tr>
            <td width="191"> <label for="fname">给你分享的文件起个名字：</label></td>
            <td width="244"> 
             <div class="form-group"> 
              <div class="input-group"> 
               <input id="fname" name="fname" class="form-control" type="text" /> 

              </div>
             </div></td>
            <td width="65"> &nbsp;<a id="send" onclick="send();" class="btn btn-success">创建</a></td>
           </tr>
          </tbody>
         </table>
         <br /> 
         <input style="display:none;" id="ftype" name="ftype" value="" type="text" /> 
         <input style="display:none;" id="fkey" name="fkey" value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" type="text" /> 
        </form> 
       </div>
      </div> 
      <div align="center" id="creat"> 
       <button type="button" onclick="creatopen();" title="创建后通过分享链接，人人都可以下载、查看文件" style="width:300px;" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> 创建公开分享链接</button>
       <br />
       <br /> 
      </div> 
     </div> 
    </div> 
    <!-- /.modal-content --> 
   </div> 
   <!-- /.modal-dialog --> 
  </div> 
  <!-- /.modal --> 
	<div class="container">	  

		  <div id="p" class="col-md-9"> <div class="zhu" align="center">
		  		  <div class="preview">
  <div class="else_c">
  	<div class="else_f">
  		<div class="f_text">

  		</div>
  	</div>
  </div></div>
   <br /> 
   <br /> 
   	<div class="fct" align="center">
   <div class="btn-group" role="group" aria-label="..."> 
    <button type="button" onclick="show_fileurl();" data-toggle="tooltip" data-placement="top" title="获取图文件的外链URL" id="url" class="btn btn-primary"><span class="glyphicon glyphicon-paperclip" aria-hidden="true"></span> 获取外链地址</button> 
   </div> 
   <div class="btn-group" role="group" aria-label="..."> 
     <?php if ($_smarty_tpl->tpl_vars['share']->value=="true") {?>
    <button type="button" title="创建私密或公开分享链接以便分享文件给好友" id="share" onclick="showshare();" data-toggle="tooltip" data-placement="top" class="btn btn-default"><span class="glyphicon glyphicon-gift" aria-hidden="true"></span> 分享</button> 
        <?php } else { ?>
    <?php }?>
    <button type="button" title="获取二维码以便在手机上快速查看文件" id="qr" data-container="body" data-toggle="popover" data-placement="bottom" data-content="&lt;img width=&quot;239&quot;src=&quot;http://qr.liantu.com/api.php?text=<?php echo $_smarty_tpl->tpl_vars['fileurl']->value;?>
&quot;/&gt;" class="btn btn-default"><span class="glyphicon glyphicon-qrcode" aria-hidden="true"></span> 二维码</button> 
    <button type="button" title="删除、管理文件" id="qr" data-toggle="tooltip" data-placement="top" onclick="guanli();" class="btn btn-default"><span class="glyphicon glyphicon-tasks" aria-hidden="true"></span> 管理</button> 
    <button data-toggle="tooltip" data-placement="top" type="button" title="查看文件大小、名称等信息" id="xq"onclick="xiangqing();" class="btn btn-default"><span class="glyphicon glyphicon-tags
    " aria-hidden="true"></span> 详情</button> 
   </div> 
   <br /> 
   <br /> 
   <div class="bb" id="fileurl"> 
    <table width="571" border="0" style="margin-bottom:10px"> 
     <tbody> 
      <tr> 
       <td width="114"><label for="yuantu">原文件外链地址：</label></td> 
       <td width="353"><input type="text" id="yuantu" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['fileurl']->value;?>
" /></td> 
       <td width="90"><input type="button" name="fuzhi" id="fuzhi" class="btn btn-primary" onclick="fzcg();"value="复制" data-clipboard-target="yuantu" /> </td> 
      </tr> 
     </tbody> 
    </table> 
   </div> 

   <div class="bb" style="display:none;" id="guanli"> 
    <button id="s1"onclick="delete_share();" class="btn btn-default"><span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span> 取消所有分享</button> 
    <button id="s2"onclick="delete_confirm();" class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span> 删除文件</button>
   </div> 
      <div class="bb" style="display:none;" id="xiangqing"> 
   <table class="table table-bordered xq">
<tr>
	<td width="97">上传者：</td>
	<td width="233"style="word-break: normal;" id="file_hash"></td>
<td  width="110">上传时间：</td>
<td  width="122" id="put_time"></td>
</tr>
<tr>
	<td>mimetype：</td>
	<td id="m_type"></td>
<td>大小(字节)：</td>
<td id="file_size"></td>
</tr>
</table>
   </div> 
   <br /> 
   <br /> 
   <table width="460" border="0"> 
    <tbody> 
     <tr> 
      <td> 

        <div class="alert alert-success" role="alert">
            &nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-lock" aria-hidden="true"></span> 本页面为私有页面，请不要将本页地址或文件密钥泄露给他人 
        </div> 
</td> 
     </tr> 
    </tbody> 
   </table> 
</div></div></div>

<div class="col-md-3">
	  <?php echo $_smarty_tpl->getSubTemplate ("side.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tit'=>$_smarty_tpl->tpl_vars['tit']->value,'zzurl'=>$_smarty_tpl->tpl_vars['zzurl']->value), 0);?>



</div>

		 </div>
		 <br></br> <br></br>
  <?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('jscode'=>$_smarty_tpl->tpl_vars['jscode']->value,'tit'=>$_smarty_tpl->tpl_vars['tit']->value,'zzurl'=>$_smarty_tpl->tpl_vars['zzurl']->value), 0);?>

  <script language="JavaScript">  
 var clip = new ZeroClipboard( document.getElementById("fuzhi"), {

} );





var clip2 = new ZeroClipboard( document.getElementById("fzfx"), {

} );


var clip3 = new ZeroClipboard( document.getElementById("fzfx-lock"), {

} );


var lx="<?php echo $_smarty_tpl->tpl_vars['filetype']->value;?>
";
lx=lx.toUpperCase();
$(".f_text").html(lx);
function fzcg(){
	iosOverlay({
		text: "复制成功",
		duration: 2e3,
		icon: "./../content/themes/default/images/check.png"
	});
}

function xiangqing(){ 

	 $("#guanli").hide();
    $("#fileurl").hide();
      $("#filecode").hide();
          	    $("#xiangqing").show();
    if(load=="0"){ 

$.get("../includes/getinfo.php?key=<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
",function(data,status){
var xqq=data.split(".");
$("#file_hash").html(xqq[1]);
$("#file_size").html(xqq[0]);
$("#m_type").html(xqq[2]);
$("#put_time").html(xqq[3]);
  });


    				}
load="1";

}

function delete_confirm() 
{
   var returnVal = window.confirm("删除文件不可恢复，并且所有分享都将取消，确定删除吗？", "确认删除");
if(!returnVal) {
    
}else{ 
$("#s2").attr("disabled",true);
$.post("../includes/delete_file.php",{key: "<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"},
	function(data){
   	var pe=data.split(".");
   	if(pe[0]=="ok"){ 
alert(pe[1]);
window.location="<?php echo $_smarty_tpl->tpl_vars['zzurl']->value;?>
"
   	}else{ 
alert(pe[1]);
$("#s2").attr("disabled",false);
   	}

	});
}
}
function delete_share(){ 

   var returnVal1 = window.confirm("确定要取消该文件的所有分享？", "确认取消");
if(!returnVal1) {
    
}else{ 
$("#s1").attr("disabled",true);
$.post("../includes/delete_share.php",{key: "<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"},
	function(data){
   	var pe1=data.split(".");
   	if(pe1[0]=="ok"){ 
alert(pe1[1]);
$("#s1").attr("disabled",false);
   	}else{ 
alert(pe1[1]);
$("#s1").attr("disabled",false);
   	}

	});
}
}
function send(){
$("#send").attr("disabled",true);
$.post("../includes/create_share.php", $("#bd").serialize(),
	function(data){
   	var ge=data.split(".");
   	var ftype=ge[0];
   	var result=ge[1];
   	   	var code=ge[2];
   	if (result=="ok"){ 
if(ftype=="open"){
$('#fxurl').val("<?php echo $_smarty_tpl->tpl_vars['zzurl']->value;?>
"+ge[3]+"."+ge[4]);
$("#enter").hide();
$("#showresult").show();


}else{ 
var pwd=ge[3];
$('#fxurl-lock').val("<?php echo $_smarty_tpl->tpl_vars['zzurl']->value;?>
"+ge[4]+"."+ge[5]);
$('#pwd-lock').val(pwd);
$("#enter").hide();
$("#fzfx-lock").attr("data-clipboard-text","链接：<?php echo $_smarty_tpl->tpl_vars['zzurl']->value;?>
"+ge[4]+"."+ge[5]+"  密码："+pwd);
$("#showresult-lock").show();
}
   	}else{ 
alert(code);
$("#send").attr("disabled",false);
   	}
 });}
</script>  
 </body>
</html><?php }} ?>
