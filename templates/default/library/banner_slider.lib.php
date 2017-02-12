<!--  滚动banner 开始 -->
    <link rel="stylesheet" href="js/banner_slider/bjqs.css">
    <link rel="stylesheet" href="js/banner_slider/demo.css">
	<script src="js/banner_slider/jquery-1.7.1.min.js"></script>
	<script src="js/banner_slider/bjqs-1.3.min.js"></script>
	<script type="text/javascript">
        jQuery(document).ready(function($) {

          $('#banner-fade').bjqs({
            height      : <? echo $banner_height ; ?> ,
            width       : <? echo $banner_width ; ?> ,
            nexttext : '',
			prevtext : '',
			automatic : false,
            responsive  : true
          });
		  $('ol.bjqs-markers li a').html("");
        });
    </script>

  <div id="banner-fade">

    <!-- start Basic Jquery Slider -->
    <ul class="bjqs">
      	<?
			$data = $adflash -> GetList(array(),'','','','orders asc,id desc');
			if($data){
				foreach($data as $key=>$value){
					echo "<li><img src=". $value['thumb'] . "></li>" ;
				}
			}
		?>
    </ul>
    <!-- end Basic jQuery Slider -->

  </div>
 <!--  滚动banner 结束 -->