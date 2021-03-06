<?php
$pagetitle = "文章列表";
include ('header.php');
?>
	<div class="site_container">

		<!-- 静态banner -->
		<div class="static_banner">
			<img src="images/static_banner.jpg" style="width:960px;">
		</div>

		<!--所在位置div -->
		<!--<?php include(WEB_TPL . 'library/ur_here.lib.php'); ?>-->

		<div id="site_content_area">

			<!-- 左侧框架 开始
			 <div id="site_left">

				<?php include('left_articles.tpl.php');?>

            </div>
            左侧框架 结束-->

			<!-- 右侧框架 开始-->
        	<!--<div id="site_right">-->

        		<!-- 右侧框架数据区域 开始-->
            	<div class="site_section">

            		<!--数据区域title 开始-->
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
			        <!--数据区域title 结束-->

					<!-- 文章列表 开始-->
			        <div id="site_list">
	            		<?php

						if ($List) {
							foreach ($List AS $key => $value) {
								$classInfo = $articles_class->GetInfo(array (
									'id',
									'title',
									'filename'
								), ' id = ' . $value['classid'] . '');
						?>
							<ul>
								<li class="list_title">
									<a href="./<?php echo makeLink('articles','show',array('id'=>$value['id'],'rootid'=>$rootid,'filename'=>$value['filename']));?>" target="_blank">
										<font color="<?php echo $value['titlecolor'];?>"><?php echo $value['title'];?></font>
										<span>日期：<font class="sp"><?php echo date("Y-m-d H:i",intval($value['addtime']));?></font></span>
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

	          			<div class="clear"></div>

						<!-- 分页div -->
			  			<div class="pagination">
						<?php echo $showpage; ?>
			  			</div>

			  			<div class="clear"></div>
	        		</div>
	        		<!-- 文章列表 结束-->

	      		</div>
	      		<!-- 右侧框架数据区域 结束-->
	      <!--</div>-->
	      <!-- 右侧框架 结束-->

          <div class="cleaner"></div>

  	  </div>
      <!-- End Of Content area -->
</div>
<!-- End Of Container -->
<?php
include ('footer.php');
?>