<?php
//产品中心
$pagetitle="产品列表";
include(WEB_TPL . 'header.php');
?>

<div class="site_container">

<!-- 静态banner -->
<?
	if($classid != 26 ){
?>
	<div class="static_banner">
		<img src="images/static_banner.jpg" style="width:960px;">
	</div>
<?  }
    else{
?>
	<div class="static_banner">
		<img src="images/contact_us.jpg" style="width:960px;">
	</div>
<?
    }
?>



<!--所在位置div -->
<!--<?php include(WEB_TPL . 'library/ur_here.lib.php'); ?>-->

<div id="site_content_area">

	<!-- 左边框架 开始
	<div id="site_left">
      <?php include(WEB_TPL . 'left_products.tpl.php'); ?>
    </div>
    左边框架 结束-->

    <!-- 右边框架 开始 -->
	<!-- <div id="site_right"> -->
		<!-- 右边框架数据区域 开始 -->
	  	<div class="site_section">

	  		<!-- 数据区域title 开始 -->
	        <div class="site_section_title">
	          	<h3>
	          		<?php
	          			if(isset($info) && !empty($classid)){
	          				echo $info['title'];
	          			} else {
	          				echo $pagetitle;
	          			}
	          		?>
	          	</h3>
	        </div>
	        <!-- 数据区域title 结束 -->

			<!-- 产品列表 开始 -->
	        <div id="site_list">
	            <?php
					if($List){
						foreach($List AS $key=>$value){
							$classInfo = $products_class->GetInfo(array('id','title','filename'),' id = '.$value['classid'].'');

							if(empty($value['thumb'])) {
								$value['thumb'] = 'images/default/nopic.gif';
							}
				?>
				<div style="width:30%; float:left ; text-align:center; margin-bttom:10px; padding:5px;">
	        		<div style="border:#CCCCCC 1px solid; text-align:center; padding:10px; background:#FFFFFF;">
	          			<div style="padding:0; margin:0;">
				  			<a href="./<?php echo makeLink('products','show',array('id'=>$value['id'],'filename'=>$value['filename'],'rootid'=>$rootid));?>">
				  				<img src="<?php echo $value['thumb'];?>" width="100%" height="230" alt="<?php echo $value['title'];?>" border="0" />
				  			</a>
				  		</div>
			          	<div style="margin:10px 0 0 0 ; text-align:center; height:18px; overflow:hidden; font-size:14px; ">
				          	<a style="color:#000" href="./<?php echo makeLink('products','show',array('id'=>$value['id'],'filename'=>$value['filename'],'rootid'=>$rootid));?>" title="<?php echo $value['title'];?>">
				          		<font color="<?php echo $value['titlecolor'];?>"><?php echo $value['title'];?></font>
				          	</a>
				        </div>
			        </div>
			    </div>
			 	<?php
					 	}
				 	}
				 	else if($info['title'] == '视频演示' || $info['id'] == 27 ){
				?>
				<div style="width:402px;text-align:center; margin:auto;margin-bottom:10px;">
	        		<div style="border:#CCCCCC 1px solid; text-align:center; padding:10px; background:#FFFFFF;">
	          			<div style="padding:0; margin:0;">
				  			<!-- 播放器代码开始 -->
							<script type="text/javascript" src="./JZminiPlayer/swfobject.js"></script>
							<div id="CuPlayer" > <strong>您的浏览器不支持flash播放，请联系我们的工作人员</a></strong> </div>
							<script type="text/javascript">
							var so = new SWFObject("./JZminiPlayer/JZminiPlayer.swf","ply","380","240","9","#000000");
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
			          	<div style="margin:10px 0 0 0 ; text-align:center; height:18px; overflow:hidden; font-size:14px;color:#000">
				          	美达路抗磨耐磨试验
				        </div>
			        </div>
			    </div>
			    <div id="site_show">
			        <div class="content">
			        <br>
			        <br>
			        <p><span style="font-family:宋体;font-size:15.0000pt;">美达路抗磨耐磨试验说明：</span></p>
			        <br>
			        <p><span style="font-family:'Times New Roman';font-size:15.0000pt;">1、&nbsp;</span><span style="font-family:宋体;font-size:15.0000pt;">三种不同品牌润滑油未加美达路超强抗磨添加剂测试</span></p>
			        <br>
			        <p><span style="font-family:'Times New Roman';font-size:15.0000pt;">2、&nbsp;</span><span style="font-family:宋体;font-size:15.0000pt;">某运输公司报废润滑油未加美达路超强抗磨添加剂测试</span></p>
			        <br>
			        <p><span style="font-family:'Times New Roman';font-size:15.0000pt;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A、&nbsp;</span><span style="font-family:宋体;font-size:15.0000pt;">韩国高科技美达路产品展示</span></p>
			        <br>
			        <p><span style="font-family:'Times New Roman';font-size:15.0000pt;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;B、&nbsp;</span><span style="font-family:宋体;font-size:15.0000pt;">三种品牌润滑油展示、废机油展示</span></p>
			        <br>
			        <p><span style="font-family:'Times New Roman';font-size:15.0000pt;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C、&nbsp;</span><span style="font-family:宋体;font-size:15.0000pt;">三种品牌润滑油极压磨损测试</span></p>
			        <p><span style="font-family:'Times New Roman';font-size:15.0000pt;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1<span style="font-family:宋体;">号品牌润滑油：</span>&nbsp;&nbsp;<span style="font-family:宋体;font-size:15.0000pt;">市场价：188元/升</span>&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-family:宋体;font-size:15.0000pt;">极压力：5块/156kg</span></span></p>
			        <p><span style="font-family:'Times New Roman';font-size:15.0000pt;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2<span style="font-family:宋体;">号品牌润滑油：</span>&nbsp;&nbsp;<span style="font-family:宋体;font-size:15.0000pt;">市场价：468元/4升</span>&nbsp;&nbsp;<span style="font-family:宋体;font-size:15.0000pt;">极压力：4块/125kg</span></span></p>
			        <p><span style="font-family:'Times New Roman';font-size:15.0000pt;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3<span style="font-family:宋体;">号品牌润滑油：</span>&nbsp;&nbsp;<span style="font-family:宋体;font-size:15.0000pt;">市场价：689元/5升</span>&nbsp;&nbsp;<span style="font-family:宋体;font-size:15.0000pt;">极压力：5块/156kg</span></span></p>
			        <p><span style="font-family:'Times New Roman';font-size:15.0000pt;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-family:宋体;font-size:15.0000pt;">废机油：</span>&nbsp;&nbsp;<span style="font-family:宋体;font-size:15.0000pt;">市场价：0</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-family:宋体;font-size:15.0000pt;">极压力：93.75kg</span></span></p>
			        <br>
			        <p><span style="font-family:'Times New Roman';font-size:15.0000pt;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;D、&nbsp;</span><span style="font-family:宋体;font-size:15.0000pt;">加入美达路超强抗磨节能添加剂极压磨损测试</span></p>
			        <p><span style="font-family:'Times New Roman';font-size:15.0000pt;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1<span style="font-family:宋体;">号品牌润滑油：</span>&nbsp;<span style="font-family:宋体;font-size:15.0000pt;">极压力：16块/500kg</span></span></p>
			        <p><span style="font-family:'Times New Roman';font-size:15.0000pt;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2<span style="font-family:宋体;">号品牌润滑油：</span>&nbsp;<span style="font-family:宋体;font-size:15.0000pt;">极压力：16块/500kg</span></span></p>
			        <p><span style="font-family:'Times New Roman';font-size:15.0000pt;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3<span style="font-family:宋体;">号品牌润滑油：</span>&nbsp;<span style="font-family:宋体;font-size:15.0000pt;">极压力：16块/500kg</span></span></p>
			        <p><span style="font-family:'Times New Roman';font-size:15.0000pt;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-family:宋体;font-size:15.0000pt;">废机油：</span>&nbsp;<span style="font-family:宋体;font-size:15.0000pt;">极压力：16块/500kg</span></span></p>
			        <p><span style="font-family:'Times New Roman';font-size:15.0000pt;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-family:宋体;font-size:15.0000pt;">无机油：</span>&nbsp;<span style="font-family:宋体;font-size:15.0000pt;">极压力：16块/500kg</span></span></p>
					<br>
			        <p><span style="font-family:'Times New Roman';font-size:15.0000pt;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;测试结果表明，任何润滑油添加了美达路超强抗磨节能剂，都能提高机械设备和发动机的抗磨程度、延长设备使用寿命、减少维修率。</span></p></div>
				</div>
				<?
				 	}
				 	else if($info['title'] == '联系我们' || $info['id'] == 26){
				?>

					<p style="font-size:14px;font-family:'宋体';">公司地址：广西柳州市柳北区白沙路12号利华嘉园2栋1-5、1-6号门面</p>
					<br>
					<p style="font-size:14px;font-family:'宋体';">市场部电话：0772-3867729</p>
					<br>
					<p style="font-size:14px;font-family:'宋体';">客服部电话：0772-3867759</p>
					<br>
					<p style="font-size:14px;font-family:'宋体';">公司QQ号：3320906316</p>
				<?
				 	}
				 	else {
			 	?>
					<div><b>暂无</b></div>

				 <?php
					 }
				 ?>

	          		<div class="clear"></div>

					<?
						if($info['title'] != '联系我们' && $info['title'] != '视频演示' && $info['id'] != 26 && $info['id'] != 27){
					?>
					<!-- 分页div -->
				  	<div class="pagination">
						<?php echo $showpage; ?>
				  	</div>
					<?
						}
					?>
				  	<div class="clear"></div>

	        	</div>
				<!-- 产品列表 结束 -->

	      	</div>
			<!-- 右边框架数据区域 结束 -->

	    <!--</div>-->
	    <!-- 右边框架 结束 -->

    	<div class="cleaner"></div>
  </div>
  <!-- End Of Content area -->
</div>
<!-- End Of Container -->
<?php
include(WEB_TPL . 'footer.php');
?>
