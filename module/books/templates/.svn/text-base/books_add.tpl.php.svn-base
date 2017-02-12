<?php
$pagetitle="留言页面";
include(WEB_TPL . 'header.php');
?>
<script type="text/javascript" src="js/jquery.validate.js"></script>
<script type="text/javascript" src="js/MyFormValidation.js"></script>

<script type="text/javascript">
	function refreshImg(){
		var img = document.getElementById("img_code");
		img.src = 'http://localhost/test/img_code.php?'+ Math.random();
	}
</script>

<div class="site_container">
  <?php include(WEB_TPL . 'library/ur_here.lib.php');?>
  <div id="site_content_area">
    <div id="site_left">
      <div class="site_section">
        <div class="site_section_title">
          <h3><?php echo $pagetitle;?></h3>
        </div>
        <div id="site_show">
          <form action="" id="form1" method="post" name="form1">
                <table width="100%">

					<tr>
                        <td width="136">
                            <div align="right">
                                <span>*</span>收货人姓名:</div>
                        </td>
                        <td width="482">
                             <input type="text" name="niname" id="niname" size="30" />
                        </td>
                    </tr>
					<tr>
                        <td width="136">
                            <div align="right">
                                <span></span>收货地址:</div>
                        </td>
                        <td width="482">
                             <input type="text" name="addr" id="addr" size="30" />
                        </td>
                    </tr>
					<tr>
                        <td width="136">
                            <div align="right">
                                <span></span>联系电话:</div>
                        </td>
                        <td width="482">
                             <input type="text" name="mobile" id="mobile" size="30" />
                        </td>
                    </tr>
                    <tr>
                		<td width="136">
                			<div align="right">
                                <span></span>产品:</div>
                		</td>
                		<td width="482">
                			<?php
                			$product = new Products();
							$product_data = $product->GetList(array('id','title','price'),'','','','addtime desc');
							?>

							<select name="product_id" style="margin-left:2px ; padding:2px ; height:25px ; width:300px ;">

							<?php
							if($product_data){
								foreach($product_data AS $product_key=>$product_value){
							?>
						  		<option value="<? echo $product_value['id'] ?>">
						  			<? echo $product_value['title'] . " " . $product_value['price'] . "元" ; ?>
						  		</option>
						   <?php
								}
							}
							?>

							</select>

							<?php
							unset($product_data,$product_key,$product_value);

							?>
                		</td>
                	</tr>
                	<tr>
                        <td width="136">
                            <div align="right">
                                <span></span>付款方式:</div>
                        </td>
                        <td width="482">
                             <input type="radio" name="pay_type" value="1"/>货到付款&nbsp;&nbsp;<input type="radio" name="pay_type" value="2"/>支付宝
                        </td>
                    </tr>
                    <tr>
                        <td width="136">
                            <div align="right">
                                <span></span>验证码:</div>
                        </td>
                        <td width="482" valign="center">

                       	 	<input type="text" name="img_code" style="float:left ;"/>
                            <img src="http://localhost/test/img_code.php" id="img_code" onclick="refreshImg()" style="float:left ; cursor:pointer;" alt="点击换一个"/>
                        	&nbsp;&nbsp;<a href="javascript:void(0)" onclick="refreshImg()" style="text-decoration:underline ;">看不清</a>

                        </td>
                    </tr>
                    <tr>
                        <td height="17" colspan="2" valign="top">
                            <div align="center">
                                <input type="submit" name="submit" value="提交订单" size="20" />
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="reset" value="重填" size="20" />

                                <!-- 留言类别 -->
								<input type="hidden" name="classid" value="<?php echo $classid;?>" size="20" />
                            </div>
                        </td>
                    </tr>
                </table>
                </form>
          <div class="clear"></div>
        </div>
      </div>

    </div>
    <!-- End Of left-->
    <div id="site_right">
		<div class="site_section">
				  <div class="site_section_title">
					<h3>最新留言</h3>
				  </div>
				  <div class="site_section_1">
					<ul class="theIndexList">
							<?php
							$data = $books->GetList(array('id','title','addtime','niname'),'0','8',' isplay = 1 ','addtime desc,id desc');
							?>
							<?php
							if($data){
								foreach($data AS $key=>$value){
							?>
						  <li><font ><?php echo cutstr($value['title'],20);?></font><br />by：<?php echo $value['niname'];?></li>
						  <?php
								}
							}
							?>
							<?php
							unset($data,$key,$value);
							?>
					</ul>
					<div class="clear"></div>
				  </div>
				</div>
    </div>
    <!-- End Of right-->
    <div class="cleaner"></div>
  </div>
  <!-- End Of Content area -->
</div>
<!-- End Of Container -->
<?php
include(WEB_TPL . 'footer.php');
?>
