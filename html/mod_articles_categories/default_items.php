<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_articles_categories
 *
 * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

foreach ($list as $item) : ?>
	<li>
		<a href="<?= JRoute::_(ContentHelperRoute::getCategoryRoute($item->id));?>"><?=$item->title;?></a>
		<?php if($params->get('show_children') && count($item->getChildren()) ):?>
			<ul>
				<?php
				$temp=$list;
				$list = $item->getChildren();
				require JModuleHelper::getLayoutPath('mod_articles_categories', $params->get('layout', 'default') . '_items');
				$list = $temp;
				?>
			</ul>
		<?php endif;?>
	</li>
<?php endforeach; ?>
