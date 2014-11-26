<?php /*%%SmartyHeaderCode:120695474ce4cd32842-81162188%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b962e22921ab3ff7e9d22122ace20b8ff5afec67' => 
    array (
      0 => 'D:\\wamp\\www\\prestashop\\themes\\montheme\\modules\\blocksupplier\\blocksupplier.tpl',
      1 => 1390208062,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '120695474ce4cd32842-81162188',
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5474d79c72f2f4_27310032',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5474d79c72f2f4_27310032')) {function content_5474d79c72f2f4_27310032($_smarty_tpl) {?>
<!-- Block suppliers module -->
<div id="suppliers_block_left" class="block blocksupplier">
	<p class="title_block"><a href="http://127.0.0.1/prestashop/index.php?controller=supplier" title="Fournisseurs">Fournisseurs</a></p>
	<div class="block_content">
		<ul class="bullet">
					<li class="first_item">
			<a href="http://127.0.0.1/prestashop/index.php?id_supplier=1&amp;controller=supplier" title="En savoir plus sur AppleStore">AppleStore</a>
		</li>
							<li class="last_item">
			<a href="http://127.0.0.1/prestashop/index.php?id_supplier=2&amp;controller=supplier" title="En savoir plus sur Shure Online Store">Shure Online Store</a>
		</li>
				</ul>
				<form action="/prestashop/index.php" method="get">
			<p>
				<select id="supplier_list" onchange="autoUrl('supplier_list', '');">
					<option value="0">Tous les fournisseurs</option>
									<option value="http://127.0.0.1/prestashop/index.php?id_supplier=1&amp;controller=supplier">AppleStore</option>
									<option value="http://127.0.0.1/prestashop/index.php?id_supplier=2&amp;controller=supplier">Shure Online Store</option>
								</select>
			</p>
		</form>
		</div>
</div>
<!-- /Block suppliers module -->
<?php }} ?>