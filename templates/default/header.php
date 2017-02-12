<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>
<?php if(!empty($topTitle)) echo $topTitle ; else echo $pagetitle ;?>
<?php echo '-瑞聚科技有限公司-美达路中国总经销商' ; ?>
<?php //echo '-'.$sys['indextitle'].$pagetitle.'Powered by zcncms' ;?></title>
<meta name="keywords" content="<?php echo $sys['webkeywords']; ?>">
<meta name="description" content="<?php echo $sys['webdescription']; ?>">
<meta name="author" content="zcncms" />
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
<link href="css/style.css?v=1.1" rel="stylesheet" type="text/css" />
<link href="css/qq.css" rel="stylesheet" type="text/css" />
<link href="css/jui/ui.css" rel="stylesheet" type="text/css" />
<script language="javascript" src="js/jquery.min.js" type="text/javascript"></script>
<script language="javascript" src="js/jquery-ui.min.js" type="text/javascript"></script>
<script language="javascript" type="text/javascript">

function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>
</head>
<body>
<div class="site_container">
  <div id="site_header">
  	<div style="float:left;">
	    <div id="site_logo_area">
	      <a href="./" target="_self" title="网站首页">
	      	<img src="images/logo.png" style="width:60px;height:60px;"/>
	      	<img src="images/ruiju.png" style="width:160px;height:50px;"/>
	      	<img src="images/miralube_2.png" style="width:470px;height:50px;"/>
	      </a>
	    </div>
	    <div id="site_menu">
	      <ul class="nav">
	        <?php include('library/menus.lib.php');?>
	      </ul>
	    </div>
    </div>
    <div style="float:right;">
    	<div style="float:right;width:150px;height:150px;">
			<img src="images/2dcode.jpg" width="150" height="150"/>
    	</div>
    </div>
    <!--
    <div id="site_search">
      <form action="./" method="get">
        <input type="hidden" name="submit" value="1" />
        <input type="hidden" name="c" value="articles" />
        <input type="hidden" name="a" value="search" />
        <input type="text" value="请输入关键词" name="keyword" class="field"  title="keyword" onfocus="clearText(this)" onblur="clearText(this)" />
        <input type="submit"  value = "搜索" alt="搜索" class="button" title="搜索" />
      </form>
    </div>
    -->
	<div class="cleaner"></div>
  </div>
  <!-- end of header -->
</div>
<!-- End Of Container -->
