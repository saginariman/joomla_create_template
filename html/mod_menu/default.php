<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_menu
 *
 * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
?>
<ul class="tm-main-nav-ul">
<?php
foreach ($list as $i => &$item)
{
	$curent = FALSE;
	if($item->id == $active_id){
		$curent = TRUE;
	}
	echo '<li class="tm-nav-item">';
	if($curent){
		echo '<a href="'.$item->flink.'" class="tm-nav-item-link active">'.$item->title.'</a>';
	}else{
		echo '<a href="'.$item->flink.'" class="tm-nav-item-link">'.$item->title.'</a>';
	}
	echo '</li>';
}
?>
</ul>
