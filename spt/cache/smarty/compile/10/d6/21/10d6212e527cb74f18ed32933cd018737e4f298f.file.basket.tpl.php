<?php /* Smarty version Smarty-3.1.19, created on 2014-09-29 00:10:46
         compiled from "E:\wamp\www\spt\spt\spt\modules\ffcart\views\templates\front\basket.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2657554231e3cbaefe6-52376713%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '10d6212e527cb74f18ed32933cd018737e4f298f' => 
    array (
      0 => 'E:\\wamp\\www\\spt\\spt\\spt\\modules\\ffcart\\views\\templates\\front\\basket.tpl',
      1 => 1411924228,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2657554231e3cbaefe6-52376713',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54231e3cdc3d79_91742481',
  'variables' => 
  array (
    'cart_data' => 0,
    'product_id' => 0,
    'cart' => 0,
    'suggestion_data' => 0,
    'product' => 0,
    'customer' => 0,
    'client_list' => 0,
    'client' => 0,
    'agent_selected_client_id' => 0,
    'link' => 0,
    'promotion_code' => 0,
    'promotion_code_error' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54231e3cdc3d79_91742481')) {function content_54231e3cdc3d79_91742481($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'E:\\wamp\\www\\spt\\spt\\spt\\tools\\smarty\\plugins\\function.html_options.php';
?><div class="div_step">
	<div class="step_content">
		<div class="line steping4">
			<span class="step step1 active">1</span>
			<span class="step step2 ">2</span>
			<span class="step step3 ">3</span>
			<span class="step step4 ">4</span>
			<span class="text_step text_step1"><?php echo smartyTranslate(array('s'=>'Giỏ hàng'),$_smarty_tpl);?>
</span>
			<span class="text_step text_step2"><?php echo smartyTranslate(array('s'=>'Hoá đơn và thanh toán'),$_smarty_tpl);?>
</span>
			<span class="text_step text_step3"><?php echo smartyTranslate(array('s'=>'Đặt hàng'),$_smarty_tpl);?>
</span>
			<span class="text_step text_step4"><?php echo smartyTranslate(array('s'=>'Cảm ơn'),$_smarty_tpl);?>
</span>
		</div>
	</div>
</div>
<div class="body body_news body_cart_fix">
	<div class="article">
		<div class="col_l left">
			<div class="box">
				<?php if (isset($_smarty_tpl->tpl_vars['cart_data']->value)) {?>
				<table cellpadding="0" cellspacing="0">
					<thead>
						<tr>
							<td><?php echo smartyTranslate(array('s'=>'Sản phẩm'),$_smarty_tpl);?>
</td>
							<td></td>
							<td><?php echo smartyTranslate(array('s'=>'Thời hạn'),$_smarty_tpl);?>
</td>
							<td><?php echo smartyTranslate(array('s'=>'Giá'),$_smarty_tpl);?>
</td>
							<td><?php echo smartyTranslate(array('s'=>'Thành tiền'),$_smarty_tpl);?>
</td>
						</tr>
					</thead>
					<tbody id="cart_content">
            			<?php  $_smarty_tpl->tpl_vars['cart'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cart']->_loop = false;
 $_smarty_tpl->tpl_vars['product_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['cart_data']->value["cart_data"]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cart']->key => $_smarty_tpl->tpl_vars['cart']->value) {
$_smarty_tpl->tpl_vars['cart']->_loop = true;
 $_smarty_tpl->tpl_vars['product_id']->value = $_smarty_tpl->tpl_vars['cart']->key;
?>
						<tr id="cart_item_<?php echo $_smarty_tpl->tpl_vars['product_id']->value;?>
">
							<td style="text-align:center;">
								<?php if (!empty($_smarty_tpl->tpl_vars['cart']->value['cover_image'])) {?>
								<img src="<?php echo $_smarty_tpl->tpl_vars['cart']->value['cover_image'];?>
" width="50px" height="50px" />
								<?php }?>
								<input type="hidden" name="product_id" value="<?php echo $_smarty_tpl->tpl_vars['product_id']->value;?>
" />
								<input type="hidden" name="type" value="<?php echo $_smarty_tpl->tpl_vars['cart']->value['type'];?>
" />
								<input type="hidden" name="reference" value="<?php echo $_smarty_tpl->tpl_vars['cart']->value['reference'];?>
" />
							</td>
							<td>
								<p>
									<?php echo $_smarty_tpl->tpl_vars['cart']->value['product_name'];?>

								</p>
								<?php if ($_smarty_tpl->tpl_vars['cart']->value["type"]=='domain') {?>
									<?php if ($_smarty_tpl->tpl_vars['cart']->value["reference"]=='.vn') {?>
									<p>
										*<?php echo smartyTranslate(array('s'=>'Cộng phí VNNIC .VN là '),$_smarty_tpl);?>
<?php echo @constant('_VNNIC_DOTVN_FEE_');?>

									</p>
									<?php } elseif ($_smarty_tpl->tpl_vars['cart']->value["reference"]=='.com.vn') {?>
									<p>
										*<?php echo smartyTranslate(array('s'=>'Cộng phí VNNIC .COM.VN là '),$_smarty_tpl);?>
<?php echo @constant('_VNNIC_DOTCOMDOTVN_FEE_');?>

									</p>
									<?php } else { ?>
									<p>
										*<?php echo smartyTranslate(array('s'=>'Cộng phí ICANN là '),$_smarty_tpl);?>
<?php echo @constant('_ICAN_FEE_');?>
/năm
									</p>
									<?php }?>
								<?php }?>
							</td>
							<td>
							<select id="domain_year_<?php echo $_smarty_tpl->tpl_vars['product_id']->value;?>
" onchange="return updateCart('<?php echo $_smarty_tpl->tpl_vars['product_id']->value;?>
')">
								<?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['cart']->value['term_ids'],'output'=>$_smarty_tpl->tpl_vars['cart']->value['term_names'],'selected'=>$_smarty_tpl->tpl_vars['cart']->value['quantity']),$_smarty_tpl);?>

							</select></td>
							<td>
								<p>
									<b>
										<input name="unit_price" value='<?php echo number_format($_smarty_tpl->tpl_vars['cart']->value['product_price'],0,'','');?>
' type="hidden" />
										VND<?php echo number_format($_smarty_tpl->tpl_vars['cart']->value['product_price'],0,",",".");?>

									</b>
								</p>
							</td>
							<td>
								<p>
									<b>
										VND<span class="sub_price"><?php echo number_format($_smarty_tpl->tpl_vars['cart']->value['product_subtotal'],0,",",".");?>
</span>
									</b>
								</p><span onclick="return removeCartItem('<?php echo $_smarty_tpl->tpl_vars['product_id']->value;?>
')" class="btn_remove">Remove</span>
							</td>
						</tr>
						<?php } ?>
					</tbody>
				</table>
				<?php }?>
				<?php if (!empty($_smarty_tpl->tpl_vars['suggestion_data']->value)) {?>
				<table class="table_2" cellpadding="0" cellspacing="0">
					<thead>
						<tr>
							<td><?php echo smartyTranslate(array('s'=>'Đề nghị'),$_smarty_tpl);?>
</td>
							<td></td>
							<td><?php echo smartyTranslate(array('s'=>'Thời hạn'),$_smarty_tpl);?>
</td>
							<td><?php echo smartyTranslate(array('s'=>'Giá'),$_smarty_tpl);?>
</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
						<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_smarty_tpl->tpl_vars['product_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['suggestion_data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
 $_smarty_tpl->tpl_vars['product_id']->value = $_smarty_tpl->tpl_vars['product']->key;
?>
						<tr id="cart_item_<?php echo $_smarty_tpl->tpl_vars['product_id']->value;?>
">
							<td style="text-align:center;">
								<?php if (!empty($_smarty_tpl->tpl_vars['cart']->value['cover_image'])) {?>
								<img src="<?php echo $_smarty_tpl->tpl_vars['cart']->value['cover_image'];?>
" width="50px" height="50px" />
								<?php }?>
								<input type="hidden" name="product_id" value="<?php echo $_smarty_tpl->tpl_vars['product_id']->value;?>
" />
								<input type="hidden" name="type" value="domain" />
								<input type="hidden" name="reference" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['reference'];?>
" />
							</td>
							<td>
								<p>
									<?php echo $_smarty_tpl->tpl_vars['product']->value["product_name"];?>

								</p>
								<?php if ($_smarty_tpl->tpl_vars['product']->value["reference"]=='.vn') {?>
								<p>
									*<?php echo smartyTranslate(array('s'=>'Cộng phí VNNIC .VN là '),$_smarty_tpl);?>
<?php echo @constant('_VNNIC_DOTVN_FEE_');?>

								</p>
								<?php } elseif ($_smarty_tpl->tpl_vars['product']->value["reference"]=='.com.vn') {?>
								<p>
									*<?php echo smartyTranslate(array('s'=>'Cộng phí VNNIC .COM.VN là '),$_smarty_tpl);?>
<?php echo @constant('_VNNIC_DOTCOMDOTVN_FEE_');?>

								</p>
								<?php } else { ?>
								<p>
									*<?php echo smartyTranslate(array('s'=>'Cộng phí ICANN là '),$_smarty_tpl);?>
<?php echo @constant('_ICAN_FEE_');?>
/năm
								</p>
								<?php }?>
							</td>
							<td id="cart_domain_year_<?php echo $_smarty_tpl->tpl_vars['product_id']->value;?>
" style="display:none;">
								<select id="domain_year_<?php echo $_smarty_tpl->tpl_vars['product_id']->value;?>
" onchange="return updateCart('<?php echo $_smarty_tpl->tpl_vars['product_id']->value;?>
')">
									<?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['product']->value['term_ids'],'output'=>$_smarty_tpl->tpl_vars['product']->value['term_names']),$_smarty_tpl);?>

								</select>
							</td>
							<td id="cart_suggestion_terms_<?php echo $_smarty_tpl->tpl_vars['product_id']->value;?>
">
								<select id="suggestion_terms_<?php echo $_smarty_tpl->tpl_vars['product_id']->value;?>
">
									<?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['product']->value['term_ids'],'output'=>$_smarty_tpl->tpl_vars['product']->value['term_names']),$_smarty_tpl);?>

								</select>
							</td>
							<td>
								<p>
									<b>
										<input name="unit_price" id="unit_price_<?php echo $_smarty_tpl->tpl_vars['product_id']->value;?>
" value="<?php echo number_format($_smarty_tpl->tpl_vars['product']->value['product_price'],0,'','');?>
" type="hidden" />
										VND<?php echo number_format($_smarty_tpl->tpl_vars['product']->value['product_price'],0,",",".");?>

									</b>
								</p>
							</td>
							<td id="cart_remove_<?php echo $_smarty_tpl->tpl_vars['product_id']->value;?>
" style="display: none;">
								<p>
									<b>
										VND<span class="sub_price"><?php echo number_format($_smarty_tpl->tpl_vars['product']->value['product_price'],0,",",".");?>
</span>
									</b>
								</p><span onclick="return removeCartItem('<?php echo $_smarty_tpl->tpl_vars['product_id']->value;?>
')" class="btn_remove">Remove</span>
							</td>
							<td id="cart_addtocart_<?php echo $_smarty_tpl->tpl_vars['product_id']->value;?>
">
								<a class="btn1"><span onclick="addToCart(<?php echo $_smarty_tpl->tpl_vars['product_id']->value;?>
)" class="btn_add">Add to cart</span></a>
							</td>
						</tr>
						<?php } ?>
					</tbody>
				</table>
				<?php }?>
			</div>
			<?php if ($_smarty_tpl->tpl_vars['customer']->value->id_default_group==@constant('__RESELLER_GROUP_ID__')) {?>
			<div class="div_tab" style="width: auto !important;">
                <div class="k-content child_panel child_panel3">
					<div class="box_setting">
						<div class="header">
							<h5><?php echo smartyTranslate(array('s'=>'Chọn khách hàng'),$_smarty_tpl);?>
</h5>
						</div>
						<div class="div_pop">
							<div class="div_form">
								<p class="form">
									<span class="textline"><?php echo smartyTranslate(array('s'=>'Danh sách khách hàng'),$_smarty_tpl);?>
</span>
									<select id="client_list" onchange="return updateClient()" class="xsm">
										<?php if (!empty($_smarty_tpl->tpl_vars['client_list']->value)) {?>
										<?php  $_smarty_tpl->tpl_vars['client'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['client']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['client_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['client']->key => $_smarty_tpl->tpl_vars['client']->value) {
$_smarty_tpl->tpl_vars['client']->_loop = true;
?>
										<option value="<?php echo $_smarty_tpl->tpl_vars['client']->value['id_customer'];?>
" <?php if ($_smarty_tpl->tpl_vars['agent_selected_client_id']->value==$_smarty_tpl->tpl_vars['client']->value['id_customer']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['client']->value['lastname'];?>
 <?php echo $_smarty_tpl->tpl_vars['client']->value['firstname'];?>
</option>
										<?php } ?>
										<?php }?>
									</select> <a class="txt_color1" href="<?php echo preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['link']->value->getModuleLink('account','main'));?>
"><?php echo smartyTranslate(array('s'=>'Add new client'),$_smarty_tpl);?>
</a>
								</p>
							</div>
						</div>
					</div>
				</div>
	    	</div>
	    	<?php }?>
			<div class="div_tab" style="width: auto !important;">
                <div class="k-content child_panel child_panel3">
					<div class="box_setting">
						<form id="frm_submit_promotion" action="<?php echo preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['link']->value->getModuleLink('ffcart','basket'));?>
" method="post">
							<div class="header">
								<h5><?php echo smartyTranslate(array('s'=>'Thông tin khuyến mãi'),$_smarty_tpl);?>
</h5>
							</div>
							<div class="div_pop">
								<div class="div_form">
									<p class="form">
										<span class="textline"><?php echo smartyTranslate(array('s'=>'Mã khuyến mãi'),$_smarty_tpl);?>
</span>
										<input type="text" id="promotion_code" name="promotion_code" <?php if (isset($_smarty_tpl->tpl_vars['promotion_code']->value)) {?>value="<?php echo $_smarty_tpl->tpl_vars['promotion_code']->value;?>
"<?php }?> class="xsm" />
										<?php if (isset($_smarty_tpl->tpl_vars['promotion_code_error']->value)) {?>
										<span class="notice error"><?php echo smartyTranslate(array('s'=>'Mã khuyến mãi chính xác!'),$_smarty_tpl);?>
</span>
										<?php } elseif (isset($_smarty_tpl->tpl_vars['promotion_code']->value)&&!empty($_smarty_tpl->tpl_vars['promotion_code']->value)) {?>
											<span class="notice error"><?php echo smartyTranslate(array('s'=>'Đã áp dụng mã khuyến mãi!'),$_smarty_tpl);?>
</span>
										<?php }?>
									</p>
								</div>
							</div>
							<div class="header">
								<input type="hidden" name="submitPayment" value="1" />
								<div class="div_form">
									<p class="form">
										<span class="textline"> </span>
										<span class="btn_gr" id="btn_submit_promotion"><?php echo smartyTranslate(array('s'=>'Áp dụng'),$_smarty_tpl);?>
</span>
										<span class="notice"></span>
									</p>
								</div>
							</div>
						</form>
					</div>
				</div>
	    	</div>
			<div style="margin-bottom: 50px"> </div>
		</div>
		<div class="col_r right">
			<div class="box">
				<p>
					<span class="left"><?php echo smartyTranslate(array('s'=>'Tổng cộng'),$_smarty_tpl);?>
:</span>
					<span class="right txt_color1 price_big">VND<span id="cart_total"><?php echo number_format($_smarty_tpl->tpl_vars['cart_data']->value['cart_total'],0,",",".");?>
</span></span>
				</p>
				<p>
					<span class="left"><?php echo smartyTranslate(array('s'=>'Thuế'),$_smarty_tpl);?>
(10%):</span>
					<span class="right"><strong>VND<span id="tax_fee"><?php echo number_format($_smarty_tpl->tpl_vars['cart_data']->value['cart_tax'],0,",",".");?>
</span></strong></span>
				</p>
				<p>
					<span class="left"><?php echo smartyTranslate(array('s'=>'Phí ICANN'),$_smarty_tpl);?>
:</span>
					<span class="right"><strong>VND<span id="ican_fee"><?php echo number_format($_smarty_tpl->tpl_vars['cart_data']->value['ican_fee'],0,",",".");?>
</span></strong></span>
				</p>
				<p>
					<span class="left"><?php echo smartyTranslate(array('s'=>'Phí VNNIC'),$_smarty_tpl);?>
:</span>
					<span class="right"><strong>VND<span id="vnnic_reg_fee"><?php echo number_format($_smarty_tpl->tpl_vars['cart_data']->value['vnnic_reg_fee'],0,",",".");?>
</span></strong></span>
				</p>
				<p class="line"> </p>
				<p>
					<span class="left"><?php echo smartyTranslate(array('s'=>'Tổng chi phí'),$_smarty_tpl);?>
 </span>
					<span class="right txt_color3">VND<span id="cart_grandtotal"><?php echo number_format($_smarty_tpl->tpl_vars['cart_data']->value['cart_grandtotal'],0,",",".");?>
</span></span>
				</p>
				<p>
					<a class="btn1" href="<?php echo addslashes($_smarty_tpl->tpl_vars['link']->value->getModuleLink('ffcart','accountreview',array(),true));?>
">
						<span class="btn"><?php echo smartyTranslate(array('s'=>'Xử lý thanh toán'),$_smarty_tpl);?>
 ></span>
					</a>
				</p>
			</div>
		</div>
	</div>
</div><?php }} ?>
