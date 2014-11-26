<?php /*%%SmartyHeaderCode:62875474ce4c9d3308-26357943%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5aa3e419334aa616e29ee542efaed57ca00cdb63' => 
    array (
      0 => 'D:\\wamp\\www\\prestashop\\themes\\montheme\\modules\\blockcategories\\blockcategories.tpl',
      1 => 1390208062,
      2 => 'file',
    ),
    '5290b6602675a3a559c4aad6c5268ddeec4bcaa7' => 
    array (
      0 => 'D:\\wamp\\www\\prestashop\\themes\\montheme\\modules\\blockcategories\\category-tree-branch.tpl',
      1 => 1390208062,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '62875474ce4c9d3308-26357943',
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_547503f367a1c1_53622978',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547503f367a1c1_53622978')) {function content_547503f367a1c1_53622978($_smarty_tpl) {?>
<!-- Block categories module -->
<div id="categories_block_left" class="block">
	<p class="title_block">Catégories</p>
	<div class="block_content">
		<ul class="tree dhtml">
									
<li >
	<a href="http://127.0.0.1/prestashop/index.php?id_category=3&amp;controller=category" class="selected"		title="Il est temps, pour le meilleur lecteur de musique, de remonter sur sc&egrave;ne pour un rappel. Avec le nouvel iPod, le monde est votre sc&egrave;ne.">iPods</a>
	</li>

												
<li >
	<a href="http://127.0.0.1/prestashop/index.php?id_category=4&amp;controller=category" 		title="Tous les accessoires &agrave; la mode pour votre iPod">Accessoires</a>
	</li>

												
<li class="last">
	<a href="http://127.0.0.1/prestashop/index.php?id_category=5&amp;controller=category" 		title="Le tout dernier processeur Intel, un disque dur plus spacieux, de la m&eacute;moire &agrave; profusion et d&#039;autres nouveaut&eacute;s. Le tout, dans &agrave; peine 2,59 cm qui vous lib&egrave;rent de toute entrave. Les nouveaux portables Mac r&eacute;unissent les performances, la puissance et la connectivit&eacute; d&#039;un ordinateur de bureau. Sans la partie bureau.">Portables</a>
	</li>

							</ul>
		
		<script type="text/javascript">
		// <![CDATA[
			// we hide the tree only if JavaScript is activated
			$('div#categories_block_left ul.dhtml').hide();
		// ]]>
		</script>
	</div>
</div>
<!-- /Block categories module -->
<?php }} ?>