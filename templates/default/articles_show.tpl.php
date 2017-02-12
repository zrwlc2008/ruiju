<?php
$pagetitle="文章页面";
include('header.php');
?>

<div class="site_container">
		<!-- 静态banner -->
		<div class="static_banner">
			<img src="images/static_banner.jpg" style="width:960px;">
		</div>

	  <!--所在位置div -->
  	  <!--<?php include(WEB_TPL . 'library/ur_here.lib.php'); ?>-->

	  <div id="site_content_area">

          <!-- 数据区域 开始-->
	      <div class="site_section">
	      	<!--数据区域title 开始-->
	        <div class="site_section_title">
		          <h3>
		          	<?php echo $classinfo['title'];?>
		          </h3>
	        </div>
	        <!--数据区域title 结束-->

	        <!--文章内容 开始-->
	        <div id="site_show">
	          <?
	          	//如果不是公司简介才显示,$isIntro变量从menus.lib.php的链接中传来
	          	 if(empty($isIntro)){
	          ?>
	          <h1><font color="<?php echo $info['titlecolor'];?>"><?php echo $info['title'];?></font></h1>
	          <div class="time">发布时间：<?php echo date('Y-m-d H:i',$info['addtime'])?> 作者：<?php echo $info['author'];?> 浏览：<?php echo $info['clicks'];?></div>
	          <?
	          	 }
	          ?>

	           <!--文章内容-->
	          <div class="content"><?php echo $info['content'];?></div>

	           <?
	           	 //如果不是公司简介才显示,$isIntro变量从menus.lib.php的链接中传来
	          	 if(empty($isIntro)){
	           ?>
	          <div class="content_url"> <span>欢迎转载本文网址：</span><?php echo 'http://' . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]?>  </div>
	          <div class="frominfo">
	            <?php
					if(!empty($info['fromlinkurl']) &&  !empty($info['fromtitle'])) {
						echo '来源：<a href="'.$info['fromlinkurl'].'" target="_blank">'.$info['fromtitle'].'</a>';
					}
					?>
	          </div>
	           <?
	          	  }else{
	          	  //显示公司各种证书
	          ?>
				<div>
					<a href="images/zhengshu/zhengshu1.jpg" target="_blank" title="点击查看大图">
						<img src="images/zhengshu/zhengshu1.jpg" style="width:260px;height:200px;margin-right:20px;">
					</a>
					<a href="images/zhengshu/zhengshu2.jpg" target="_blank" title="点击查看大图">
						<img src="images/zhengshu/zhengshu2.jpg" style="width:260px;height:200px;margin-right:20px;">
					</a>
					<a href="images/zhengshu/zhengshu3.jpg" target="_blank" title="点击查看大图">
						<img src="images/zhengshu/zhengshu3.jpg" style="width:260px;height:200px;">
					</a>
				</div>
				<div>
					<a href="images/zhengshu/yyzz.jpg" target="_blank" title="点击查看大图">
						<img src="images/zhengshu/yyzz.jpg" style="width:300px;height:400px;margin-right:20px;">
					</a>
				</div>
	          <?
	          	  }
	           ?>
	          <div class="clear"></div>
	     	</div>
	     	<!--文章内容 结束-->
      </div>
      <!-- 数据区域 结束-->

    <div class="cleaner"></div>
  </div>
  <!-- End Of Content area -->
</div>
<!-- End Of Container -->
<?php
include('footer.php');
?>
