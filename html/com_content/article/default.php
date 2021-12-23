<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_content
 *
 * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

JHtml::addIncludePath(JPATH_COMPONENT . '/helpers');

// Create shortcuts to some parameters.
$params  = $this->item->params;
$images  = json_decode($this->item->images);
?>
<?php if($params->get('show_title')):?>
<header>
		<h2 class="tm-blue-text tm-welcome-title tm-margin-b-45"><?=$this->item->title?></h2>
</header>
<?php endif;?>
<?= $this->item->afterDisplayTitle;?>
<?= $this->item->beforeDisplayContent;?>

<?php if(isset($images->image_fulltext) && !empty($images->image_fulltext)):?>
<img src="<?= $images->image_fulltext;?>" />
<?php endif;?>
<p>
	<?= $this->item->text;?>
</p>