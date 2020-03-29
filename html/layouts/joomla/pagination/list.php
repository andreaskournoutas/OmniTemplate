<?php
/**
 * @package     Joomla.Site
 * @subpackage  Layout
 *
 * @copyright   Copyright (C) 2005 - 2020 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('JPATH_BASE') or die;

$list = $displayData['list'];
?>
<aside>
	<nav>
		<ul class="pagination justify-content-center">
			<li class="page-item pagination-start"><?php echo $list['start']['data']; ?></li>
			<li class="page-item pagination-prev"><?php echo $list['previous']['data']; ?></li>
			<?php foreach ($list['pages'] as $page) : ?>
				<?php echo '<li class="page-item">' . $page['data'] . '</li>'; ?>
			<?php endforeach; ?>
			<li class="page-item pagination-next"><?php echo $list['next']['data']; ?></li>
			<li class="page-item pagination-end"><?php echo $list['end']['data']; ?></li>
		</ul>
	</nav>
</aside>