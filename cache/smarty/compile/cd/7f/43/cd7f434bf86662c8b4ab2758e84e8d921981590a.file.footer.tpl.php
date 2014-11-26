<?php /* Smarty version Smarty-3.1.14, created on 2014-11-25 19:45:35
         compiled from "D:\wamp\www\prestashop\themes\montheme\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:80125474ce4f449ce7-98412905%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cd7f434bf86662c8b4ab2758e84e8d921981590a' => 
    array (
      0 => 'D:\\wamp\\www\\prestashop\\themes\\montheme\\footer.tpl',
      1 => 1416941023,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '80125474ce4f449ce7-98412905',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content_only' => 0,
    'page_name' => 0,
    'HOOK_RIGHT_COLUMN' => 0,
    'HOOK_FOOTER' => 0,
    'PS_ALLOW_MOBILE_DEVICE' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5474ce4f49fc06_24410458',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5474ce4f49fc06_24410458')) {function content_5474ce4f49fc06_24410458($_smarty_tpl) {?>

		<?php if (!$_smarty_tpl->tpl_vars['content_only']->value){?>
				</div>

<!-- Right -->
				<div id="right_column" class="column grid_2 omega">
                    <?php if ($_smarty_tpl->tpl_vars['page_name']->value!='index'){?><?php echo $_smarty_tpl->tpl_vars['HOOK_RIGHT_COLUMN']->value;?>
<?php }?>
				</div>
			</div>

<!-- Footer -->
			<div id="footer" class="grid_9 alpha omega clearfix">
				<?php echo $_smarty_tpl->tpl_vars['HOOK_FOOTER']->value;?>

				<?php if ($_smarty_tpl->tpl_vars['PS_ALLOW_MOBILE_DEVICE']->value){?>
					<p class="center clearBoth"><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('index',true);?>
?mobile_theme_ok"><?php echo smartyTranslate(array('s'=>'Browse the mobile site'),$_smarty_tpl);?>
</a></p>
				<?php }?>
			</div>
		</div>
	<?php }?>
	</body>
</html>
<?php }} ?>