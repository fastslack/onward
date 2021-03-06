<?php
/**
 * @version		$Id $
 * @package		Onward
 * @copyright	Copyright (C) 2005 - 2011 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;

JHtml::_('behavior.tooltip');

?>

<form action="<?php echo JRoute::_('index.php?option=com_onward'); ?>" method="post" id="adminForm">
	<table class="adminlist">
		<thead>
			<tr>
				<th width="1%">

				</th>
				<th>
					<?php echo JText::_('COM_ONWARD_SITE_NAME'); ?>
				</th>
				<th>
					<?php echo JText::_('COM_ONWARD_LOCATION'); ?>
				</th>
				<th width="5%">
					<?php echo JText::_('COM_ONWARD_VERSION'); ?>
				</th>
			</tr>
		</thead>
		<tbody>
		<?php
		$n = count($this->items);
		foreach ($this->items as $i => $item) :
			$item->import_link = JRoute::_('index.php?option=com_onward&task=site.edit&id='. $item->id);
			?>
			<tr class="row<?php echo $i % 2; ?>">
				<td class="center">
					<?php  ?>
				</td>
				<td>
					<a href="<?php echo $item->import_link; ?>" alt="Import <?php echo $this->escape($item->name); ?>"><?php echo $this->escape($item->name); ?></a>
				</td>
				<td>
					<?php echo $item->location; ?>
				</td>
				<td>
					<?php echo $item->version; ?>
				</td>
			</tr>
		<?php endforeach; ?>
		</tbody>
	</table>

	<div>
		<input type="hidden" name="task" value="" />
		<?php echo JHtml::_('form.token'); ?>
	</div>
</form>
