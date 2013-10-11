<?php
/**
* This file is part of the Agora Pro distribution. 
* Detailed copyright and licensing information can be found
* in the gpl-3.0.txt file which should be included in the distribution.
*  
* @version		4.12 2013-07-16 Hanjo Hingsen
* @copyright	2013 Hanjo Hingsen
* @license		GPLv3 Open Source
* @link			http://www.treu-zu-kaarst.de
* @since		File available since initial release
*/

// no direct access
defined('_JEXEC') or die('Restricted access');

$lang = JFactory::getLanguage();
?>
<style type="text/css" media="all">
div.jschuetzepanel div.icon16 {
	background-color: white;
}

div.jschuetzepanel div.icon {
	text-align: center;
	margin-right: 5px;
	float: left;
	margin-bottom: 5px;
}

div.jschuetzepanel div.icon a {
	display: block;
	float: left;
	border: 1px solid #f0f0f0;
	height: 97px;
	width: 108px;
	color: #666;
	vertical-align: middle;
	text-decoration: none;
}

div.jschuetzepanel div.icon a:hover {
	border-left: 1px solid #eee;
	border-top: 1px solid #eee;
	border-right: 1px solid #ccc;
	border-bottom: 1px solid #ccc;
	background: #f9f9f9;
	color: #0B55C4;
}

div.jschuetzepanel img {
	padding: 10px 0;
	margin: 0 auto;
}

div.jschuetzepanel span {
	display: block;
	text-align: center;
}
#jschuetzeoadmin_img {
	width:48px;
	height:48px;
}
</style>
<?php if(version_compare(JVERSION, '3.0.0', 'ge')) :?>
<div class="row-fluid">
	<div class="span12">
		<a href="<?php echo JRoute::_('index.php?option=com_jschuetze&task=mitglieder'); ?>">
			<i class="icon-list-view"></i>
			<span><?php echo JText::_('mod_jschuetze_admin_MANAGER'); ?></span>
		</a>
	</div>
</div>
<?php elseif(version_compare(JVERSION, '2.5.0', 'ge')) :?>
<div class="icon-wrapper" id="jschuetzeadminicon">
	<div class="icon">
		<a href="<?php echo JRoute::_('index.php?option=com_jschuetze&task=dashboard'); ?>">
			<img id="jschuetzeoadmin_img" src="modules/mod_jschuetze_admin/jschuetze_48.png" title="<?php echo JText::_('MOD_JSCHUETZE_ADMIN_MANAGER'); ?>" alt="<?php echo JText::_('MOD_JSCHUETZE_ADMIN_MANAGER'); ?>" />
			<span><?php echo JText::_('MOD_JSCHUETZE_ADMIN_MANAGER'); ?></span>
		</a>
	</div>
</div>
<script lang="text/javascript">
	var jschuetzeAdminIcon = $('jschuetzeadminicon');
	try {
		var jschuetzeAdminIconParent = $('jschuetzeadminicon').getParent().getParent();
		if(jschuetzeAdminIconParent.get('class') == 'panel') {
			jschuetzeAdminIconParent.setStyle('display','none');
		}
		var iconspanel = $$('.cpanel')[0];
		iconspanel.grab(jschuetzeAdminIcon);
	} catch(e) {	
	}
</script>
<?php else: ?>
<div class="jschuetzepanel">
	<div style="float:<?php echo ($lang->isRTL()) ? 'right' : 'left'; ?>;">
		<div class="icon">
			<a href="<?php echo JRoute::_('index.php?option=com_jschuetze&task=dashboard'); ?>">
				<img id="jschuetzeoadmin_img" src="modules/mod_jschuetze_admin/jschuetze_48.png" title="<?php echo JText::_('MOD_JSCHUETZE_ADMIN_MANAGER'); ?>" alt="<?php echo JText::_('MOD_JSCHUETZE_ADMIN_MANAGER'); ?>" />
				<span><?php echo JText::_('MOD_JSCHUETZE_ADMIN_MANAGER'); ?></span>
			</a>
		</div>
	</div>
</div>
<?php endif; ?>
