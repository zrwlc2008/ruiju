<?php
//right

$rootClassInfo = $articles_class->GetInfo(array('id','title'),' id = '.$rootid);

?>


<div class="site_section">
  <div class="site_section_title">
    <h3><?php echo $rootClassInfo['title'] ?></h3>
  </div>
  <div class="site_section_1">
    <ul class="theIndexList">
		<?php

			//文章类别
			$data = $articles_class->GetList(array('id','title'),'','',' parentid = '.$rootid,'orders ASC');

			if($data){

				//文章一级类别
				foreach($data AS $key=>$value){
		?>
        	<li>
	      		<span>
	      			<a href="<? echo "?c=articles&a=list&classid=".$value['id']."&rootid=".$rootid ?>" target="_self"><?php echo cutstr($value['title'],16);?></a>
	      		</span>
				 <?php
		  			//查询产品二级子类
					$data1 = $products_class->GetList(array('id','title'),'',''," parentid = '".$value['id']."' ",'orders ASC');
					if($data1){
						echo '<ul>';
						foreach($data1 AS $key1=>$value1){
				?>
						<li>
							<a href="<? echo "?c=articles&a=list&classid=".$value1['id']."&rootid=".$rootid ?>" target="_self">
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
    </ul>
    <div class="clear"></div>
  </div>
</div>
