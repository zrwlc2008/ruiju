<?php
$pagetitle="产品页面";
include(WEB_TPL . 'header.php');
?>
<script src="js/base.js"></script>
<style>
#preview {
	margin: 20px auto;
	text-align: center;
	width: 500px;
}

.jqzoom {
	width: 350px;
	position: relative;
	margin:auto;
}

.zoomdiv {
	left: 859px;
	height: 400px;
	width: 400px;
}

.list-h li {
	float: left;
}

#spec-n5 {
	width: 350px;
	height: 56px;
	margin:auto;
	padding-top: 6px;
	overflow: hidden;
}

#spec-left {
	background: url(images/default/left.gif) no-repeat;
	width: 10px;
	height: 45px;
	float: left;
	cursor: pointer;
	margin-top: 5px;
	margin-left: 4px;
}

#spec-right {
	background: url(images/default/right.gif) no-repeat;
	width: 10px;
	height: 45px;
	float: left;;
	cursor: pointer;
	margin-top: 5px;
}

#spec-list {
	width: 310px;
	float: left;
	overflow: hidden;
	margin-left: 10px;
	display: inline;
}

#spec-list ul li {
	float: left;
	margin-right: 0px;
	display: inline;
	width: 62px;
}

#spec-list ul li img {
	padding: 2px;
	border: 1px solid #ccc;
	width: 50px;
	height: 50px;
}

/*jqzoom*/

.zoomdiv {
	z-index: 100;;
	position: absolute;;
	top: 1px;;
	left: 0px;;
	width: 400px;;
	height: 400px;;
	background: url(images/default/loading.gif) #fff no-repeat center center
		;;
	border: 1px solid #e4e4e4;;
	display: none;;
	text-align: center;;
	overflow: hidden;
}

.bigimg {
	width: 800px;;
	height: 800px;
}

.jqZoomPup {
	z-index: 10;;
	visibility: hidden;;
	position: absolute;;
	top: 0px;;
	left: 0px;;
	width: 50px;;
	height: 50px;;
	border: 1px solid #aaa;;
	background: #FEDE4F 50% top no-repeat;;
	opacity: 0.5;;
	-moz-opacity: 0.5;;
	-khtml-opacity: 0.5;;
	filter: alpha(Opacity = 50);;
	cursor: move;
}

#spec-list {
	position: relative;
	width: 310px;
	margin-right: 4px;
}

#spec-list div {
	margin-top: 0;;
	margin-left: 0px; *
	margin-left: 0;
}

#site_show .content img {
	border: 1px solid #CCCCCC;
}
</style>

<div class="site_container">

	<!-- 静态banner -->
	<div class="static_banner">
		<img src="images/static_banner.jpg" style="width:960px;">
	</div>

	<!--所在位置div -->
	<!--<?php include(WEB_TPL . 'library/ur_here.lib.php'); ?>-->


  <div id="site_content_area">

  	  <!-- 左边框架 开始
	<div id="site_left">
      <?php include(WEB_TPL . 'left_products.tpl.php'); ?>
    </div>
    左边框架 结束-->

    <!-- 右边框架 开始 -->
	<!--<div id="site_right"> -->

		<!-- 右边框架数据区域 开始 -->
      	<div class="site_section">

      	<!-- 数据区域title 开始 -->
        <div class="site_section_title">
		      <h3><?php echo $classinfo['title'];?></h3>
        </div>
		<!-- 数据区域title 结束 -->


		<!-- 产品详情 开始 -->
        <div id="site_show">
          <h1>
          	<font color="<?php echo $info['titlecolor'];?>"><?php echo $info['title'];?></font>
          </h1>

          <div class="content">

 				<?php
					if(!empty($photoList)) {
					?>

					<!--产品图片 -->
					<div id="preview">
						<div class="jqzoom" id="spec-n1">
						<?php
								foreach($photoList as $key=>$value){
						?>
							<IMG height="350" width="350" src="<?php echo $value['thumb'];?>"
							onClick="window.open('?c=products&a=photo&id=<?php echo $info['id'];?>')" style="cursor:pointer;margin-bottom:10px;">
						<?php
								}
						?>
						</div>
					</div>
					<!--产品图片 结束-->
					<?php
					}
					?>

			  <div style="clear:both; font-size:0px;"></div>
			  </div>
			  <!--产品内容 -->
	          <div class="content"><?php echo $info['content'];?></div>
	          <!--产品内容 结束-->
	          <div class="frominfo">
	            <?php
					if(!empty($info['fromlinkurl']) &&  !empty($info['fromtitle'])) {
						echo '来源：<a href="'.$info['fromlinkurl'].'" target="_blank">'.$info['fromtitle'].'</a>';
					}
					?>
	          </div>
	          <div class="clear"></div>
        </div>
        <!-- 产品详情 结束 -->
      </div>
      <!-- 右边框架数据区域 结束 -->
   <!-- </div>-->
    <!-- 右边框架 结束-->

    <div class="cleaner"></div>
  </div>
  <!-- End Of Content area -->
</div>
<!-- End Of Container -->
<?php
include(WEB_TPL . 'footer.php');
?>
