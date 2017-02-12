<?php
$pagetitle="首页";
include('header.php');
?>
<!-- 首页主体 开始-->
<div class="site_container">

  <div id="site_content_area">
	<!-- 最大滚动slider 开始-->
	<?php
		$banner_width = 960 ;
		$banner_height = 480 ;
		include(WEB_TPL . 'library/banner_slider.lib.php');
	?>
	<!-- 最大滚动slider 结束-->

	<!-- 首页公司简介 开始 -->
	<div style="width:350px;float:left;">
	  <div class="site_section">
	    <div class="site_section_title">
	      <h3>公司简介</h3>
		  <div class="more">
		  	 <a href="./?c=articles&a=show&id=1&rootid=6&isIntro=1" style="font-size:14px;" target="_blank">了解更多>></a>
		  	 <!--<a href="http://localhost/ruiju/?c=articles&a=show&id=1&rootid=6&isIntro=1" style="font-size:14px;" target="_blank">了解更多>></a>-->
		  </div>
	    </div>
	    <div class="site_section_1" style="position:relative; ">
	    	<p style="font-size:14px;line-height:25px; text-indent:2em">
	    	瑞聚科技有限公司，是一家专业销售韩国进口美达路（Miralube）超强抗磨节能添加剂产品的高科技公司，成立于2010年。
	    	我们凭借雄厚的技术力量和完善的营销体系、管理体系，中国名牌企业联合发展推广委员会指定的节能绿色环保推广产品。
	    	</p>
	    </div>
	  </div>
	</div>
	<!-- 首页公司简介 结束 -->

	<!-- 首页关于美达路 开始 -->
	<div style="width:600px;float:right;">
	  <div class="site_section">
	    <div class="site_section_title">
	      <h3>关于美达路</h3>
	      <div class="more">
	      	 <a href="./?c=articles&a=list&classid=8&rootid=8" style="font-size:14px;" target="_blank">了解更多>></a>
		  	 <!--<a href="http://localhost/ruiju/?c=articles&a=list&classid=6" style="font-size:14px;" target="_blank">了解更多>></a>-->
		  </div>
	    </div>
	    <div id="site_list">
		<?php
		if ($gymldList) {
			foreach ($gymldList AS $key => $value) {
				$classInfo = $articles_class->GetInfo(array (
					'id',
					'title',
					'filename'
				), ' id = ' . $value['classid'] . '');
		?>
			<ul>
				<li class="list_title">
					<a href="./<?php echo makeLink('articles','show',array('id'=>$value['id'],'filename'=>$value['filename']));?>" target="_blank">
						<font color="<?php echo $value['titlecolor'];?>"><?php echo $value['title'];?></font>
					</a>
				</li>
			</ul>

		 <?php

				}
			} else {
		 ?>
			<li><b>暂无</b></li>
		 <?php
			}
		?>
	    </div>
	  </div>
	  </div>
	  <!-- 首页关于美达路 结束 -->

	  <div class="cleaner"></div>

	<!-- 首页视频演示 开始 -->
	<div style="width:350px;float:left;">
	  <div class="site_section">
	    <div class="site_section_title">
	      <h3>视频演示</h3>
		  <div class="more">
		  	 <a href="./?c=products&a=list&classid=27&rootid=27" style="font-size:14px;" target="_blank">了解更多>></a>
		  	 <!--<a href="http://localhost/ruiju/?c=articles&a=show&id=1&rootid=6&isIntro=1" style="font-size:14px;" target="_blank">了解更多>></a>-->
		  </div>
	    </div>
	    <div class="site_section_1" style="position:relative; ">
	    	<div style="padding:0; margin:0;">
	  			<!-- 播放器代码开始 -->
				<script type="text/javascript" src="./JZminiPlayer/swfobject.js"></script>
				<div id="CuPlayer" > <strong>您的浏览器不支持flash播放，请联系我们的工作人员</a></strong> </div>
				<script type="text/javascript">
				var so = new SWFObject("./JZminiPlayer/JZminiPlayer.swf","ply","330","240","9","#000000");
				so.addParam("allowfullscreen","true");
				so.addParam("allowscriptaccess","always");
				so.addParam("wmode","opaque");
				so.addParam("quality","high");
				so.addParam("salign","lt");
				so.addVariable("file","../images/video/1.flv");//视频地址
				so.addVariable("img","./images/video/1_flv_start.jpg");//视频图片
				so.addVariable("autoplay","false");//是否自动播放
				so.write("CuPlayer");
				</script>
				<!-- 播放器代码结束 -->
	  		</div>
	    </div>
	  </div>
	</div>
	<!-- 首页视频演示 结束 -->

	<!-- 首页行业咨询 开始 -->
	<div style="width:600px;float:right;">
	  <div class="site_section">
	    <div class="site_section_title">
	      <h3>行业资讯</h3>
	      <div class="more">

	      	 <a href="./?c=articles&a=list&classid=2&rootid=2" style="font-size:14px;" target="_blank">了解更多>></a>
		  	 <!--<a href="http://localhost/ruiju/?c=articles&a=list&classid=2&rootid=2" style="font-size:14px;" target="_blank">了解更多>></a>-->
		  </div>
	    </div>
	    <div id="site_list">
		<?php
		if ($hyzxList) {
			foreach ($hyzxList AS $key => $value) {
				$classInfo = $articles_class->GetInfo(array (
					'id',
					'title',
					'filename'
				), ' id = ' . $value['classid'] . '');
		?>
			<ul>
				<li class="list_title">
					<a href="./<?php echo makeLink('articles','show',array('id'=>$value['id'],'filename'=>$value['filename']));?>" target="_blank">
						<font color="<?php echo $value['titlecolor'];?>"><?php echo $value['title'];?></font>
					</a>
				</li>
			</ul>

		 <?php

				}
			} else {
		 ?>
			<li><b>暂无</b></li>
		 <?php
			}
		?>
	    </div>
	  </div>
	</div>
	<!-- 首页行业咨询 结束 -->

	<div class="cleaner"></div>

  	 <!-- 滚动产品展示 开始 -->
	  <div class="site_section">
	    <div class="site_section_title">
	      <h3>产品展示</h3>
	    </div>
	    <div class="site_section_1" style="position:relative; ">
	    	<div id="productListBox" style="margin:auto; ">
		      <ul class="productList">
		        <?php

		        //当前类型 +　其所有子类
				$products_class->SetProductSubClassString(1 , true);
				$subClassStr = $products_class->GetProductSubClassString();

				$data = $products->GetList(array('id','classid','title','addtime', 'titlecolor', 'thumb', 'filename'),'0','20',' classid IN ('. $subClassStr .') AND isplay = 1 ','addtime asc,id asc');
				include('library/productspiclist.lib.php');?>
		      </ul>
	      	</div>
	      	<div id="btnL" style="float:left; position:absolute; left:0px; top:100px ;">
	      			<a href="javascript:void(0)" id="scrollBtnL">
	      				<img src="images/arrow_go_left.png" alt="">
	      			</a>
	      	</div>
	      	<div id="btnR" style="float:right; position:absolute; right:0px; top:100px ;">
	      			<a href="javascript:void(0)" id="scrollBtnR">
	      				<img src="images/arrow_go_right.png" alt="">
	      			</a>
	        </div>
	    </div>
	  </div>
	  <!-- 滚动产品展示 结束 -->

	  <img src="images/miralube_part2.jpg" style="width:960px;height:700px;margin-bottom:10px;"/>
	  <img src="images/miralube_part1.jpg" style="width:960px;height:600px;margin-bottom:20px;"/>

    <!-- Add fancyBox main JS and CSS files -->
	<script type="text/javascript" src="js/fancybox/jquery.fancybox.js?v=2.1.5"></script>
	<script type="text/javascript" src="js/fancybox/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
	<link rel="stylesheet" type="text/css" href="js/fancybox/jquery.fancybox.css?v=2.1.5" media="screen" />

	  <!-- Add mousewheel plugin (this is optional) -->
	<script type="text/javascript" src="js/fancybox/jquery.mousewheel-3.0.6.pack.js"></script>

    <!-- Add Button helper (this is optional) -->
	<link rel="stylesheet" type="text/css" href="js/fancybox/helpers/jquery.fancybox-buttons.css?v=1.0.5" />

	<!-- Add Thumbnail helper (this is optional) -->
	<link rel="stylesheet" type="text/css" href="js/fancybox/helpers/jquery.fancybox-thumbs.css?v=1.0.7" />
	<script type="text/javascript" src="js/fancybox/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

	<!-- Add Media helper (this is optional) -->
	<script type="text/javascript" src="js/fancybox/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

	  <script type="text/javascript" src="js/scroll-pic.js"></script>
	  <script type="text/javascript">
		$(document).ready(function() {
			var scrollPic_01 = new ScrollPic();
			scrollPic_01.scrollContId = "productListBox"; // 内容容器ID
			scrollPic_01.arrLeftId = "scrollBtnL";// 左箭头ID
			scrollPic_01.arrRightId = "scrollBtnR"; // 右箭头ID
			scrollPic_01.frameWidth = 880;// 显示框宽度
			scrollPic_01.pageWidth = 222; // 翻页宽度
			scrollPic_01.speed = 20; // 移动速度(单位毫秒，越小越快)
			scrollPic_01.space = 5; // 每次移动像素(单位px，越大越快)
			scrollPic_01.autoPlay = true; // 自动播放
			scrollPic_01.autoPlayTime = 3; // 自动播放间隔时间(秒)
			scrollPic_01.initialize(); // 初始化

			//初始化fancybox
			$('.fancybox-buttons').fancybox({
				closeBtn  : false,
				helpers : {
					title : {
						type : 'inside'
					},
					buttons	: {}
				},
				afterLoad : function() {
					this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
				}
			});
		});
		</script>
  </div>
</div>
<!-- 首页主体 结束-->
<?php //include('library/index_articles_list_r2.lib.php');?>
<?php
include('footer.php');
?>
