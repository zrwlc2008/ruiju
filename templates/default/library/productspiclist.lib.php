<!-- 首页产品展示滚动条中的list -->
<?php
//产品列表调用示例
//$data = $products->GetList(array('id','classid','title','addtime', 'titlecolor'),'0','10',' isplay = 1 and ishot = 1 ','addtime desc,id desc');
?>
 <?php
		if($data){
			foreach($data AS $key=>$value){
		?>
      <li>
	  <?php
		if(empty($value['thumb'])) {
			$value['thumb'] = 'images/default/nopic.gif';
		}
	   ?>
		<dl>
			<dt>
				<!--产品图片-->
				<!--
				<a href="./<?php echo makeLink('products','show',array('id'=>$value['id'],'filename'=>$value['filename'],'rootid'=>'1'));?>" title="<?php echo $value['title'];?>">
					<img style="margin:0 auto;" src="<?php echo $value['thumb'];?>" />
				</a>-->

				<a class="fancybox-buttons" data-fancybox-group="button" href="<?php echo $value['thumb'];?>" title="<?php echo cutstr($value['title'],20);?>" >
					<img style="margin:0 auto;" src="<?php echo $value['thumb'];?>" />
				</a>

				<!--产品图片 end-->
			</dt>
			<dd>
				<!--产品名称 -->
				<!--
				<a href="./<?php echo makeLink('products','show',array('id'=>$value['id'],'filename'=>$value['filename'],'rootid'=>'1'));?>" title="<?php echo $value['title'];?>">
					<font color="<?php echo $value['titlecolor'];?>"><?php echo cutstr($value['title'],20);?></font>
				</a>-->
				<span style="color:<?php echo $value['titlecolor'];?>"><?php echo cutstr($value['title'],20);?></span>
				<!--产品名称 end-->
			</dd>
		</dl>
	  </li>
      <?php
			}
		}
		?>
<?php
unset($data,$key,$value);
?>
