 	<li class="topnav">
  		<span>
  			<a href="./" target="_self">首页</a>
  		</span>
	 </li>
 <?php

 		//文章类别
 		$data = $articles_class->GetList(array('id','title'),'','',' parentid = 0 ','orders ASC');

		if($data){
			//文章一级类别
			foreach($data AS $key=>$value){

				//针对公司简介做的特殊处理
				if($value['title']=="关于我们"){

					$companyInfo = $articles->GetInfo(array('id')," classid = " . $value['id']);

		?>
			<li class="topnav">
	      		<span>
	      			<a href="<? echo "?c=articles&a=show&id=" .$companyInfo['id'] . "&rootid=".$value['id'] . "&isIntro=1" ?>" target="_self">
	      				<?php echo cutstr($value['title'],16);?>
	      			</a>
	      		</span>

		<?
				}else{

		?>
	      	<li class="topnav">
	      		<span>
	      			<a href="<? echo "?c=articles&a=list&classid=".$value['id']."&rootid=".$value['id'] ?>" target="_self">
	      				<?php echo cutstr($value['title'],16);?>
	      			</a>
	      		</span>

	      	<?php
				}

	  			//查询文章二级子类
				$data1 = $articles_class->GetList(array('id','title'),'',''," parentid = '".$value['id']."' ",'orders ASC');
				if($data1){
					echo '<ul class="subnav">';
					foreach($data1 AS $key1=>$value1){
					?>
					<li>
						<a href="<? echo "?c=articles&a=list&classid=".$value1['id']."&rootid=".$value['id'] ?>" target="_self">
							<span><?php echo cutstr($value1['title'],16);?></span>
						</a>
					</li>
			<?php
					}
					echo '</ul>';
					//查询文章二级子类结束
				}
			?>
			</li>
		<?php
			}
			//文章一级类别结束
		}
		?>


		 <?php

			//产品类别
			$products_class=new Products_class();
			$data = $products_class->GetList(array('id','title'),'','',' parentid = 0 ','orders ASC');

			if($data){

				//产品一级类别
				foreach($data AS $key=>$value){
		?>
        	<li class="topnav">
	      		<span>
	      			<a href="<? echo "?c=products&a=list&classid=".$value['id']."&rootid=".$value['id'] ?>" target="_self"><?php echo cutstr($value['title'],16);?></a>
	      		</span>

		        <?php
		  			//查询产品二级子类
					$data1 = $products_class->GetList(array('id','title'),'',''," parentid = '".$value['id']."' ",'orders ASC');
					if($data1){
						echo '<ul class="subnav">';
						foreach($data1 AS $key1=>$value1){
				?>
						<li>
							<a href="<? echo "?c=products&a=list&classid=".$value1['id']."&rootid=".$value['id'] ?>" target="_self">
								<span><?php echo cutstr($value1['title'],16);?></span>
							</a>
						</li>
				<?php
						}
						echo '</ul>';
						//查询产品二级子类结束
					}
				?>
			</li>
		<?php
				}
				//产品一级类别结束
			}
		?>
<?php
unset($data,$key,$value);
unset($data1,$key1,$value1);
?>
<script type="text/javascript">
$().ready(function() {
	$("#site_menu ul.nav li.topnav").hover(function() {
		$(this).addClass("cur");
		$(this).find("ul.subnav").slideDown('fast');

	},function(){
		$(this).find("ul.subnav").hide();
		$(this).removeClass("cur");
	});
});
</script>