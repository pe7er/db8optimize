<?php
/**
 * @package    db8optimize
 *
 * @author     Peter Martin <joomla@db8.nl>
 * @copyright  Copyright 2017 Peter Martin. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 * @link       https://db8.eu
 */

defined('_JEXEC') or die;

/**
 * Db8optimize helper.
 *
 * @package     A package name
 * @since       1.0
 */
class Db8optimizeHelper
{
	/**
	 * Render submenu.
	 *
	 * @param   string  $vName  The name of the current view.
	 *
	 * @return  void.
	 *
	 * @since   1.0
	 */
	public function addSubmenu($vName)
	{
		JHtmlSidebar::addEntry(
			JText::_('COM_DB8OPTIMIZE_MENU_DASHBOARD'),
			'index.php?option=com_db8optimize&view=dashboard',
			$vName == 'dashboard');

		JHtmlSidebar::addEntry(
			JText::_('COM_DB8OPTIMIZE_MENU_PERFORMANCE'),
			'index.php?option=com_db8optimize&view=performance',
			$vName == 'performance');

		JHtmlSidebar::addEntry(
			JText::_('COM_DB8OPTIMIZE_MENU_SEO'),
			'index.php?option=com_db8optimize&view=seo',
			$vName == 'seo');

		JHtmlSidebar::addEntry(
			JText::_('COM_DB8OPTIMIZE_MENU_USABILITY'),
			'index.php?option=com_db8optimize&view=usability',
			$vName == 'usability');

		JHtmlSidebar::addEntry(
			JText::_('COM_DB8OPTIMIZE_MENU_SECURITY'),
			'index.php?option=com_db8optimize&view=security',
			$vName == 'security');
		JHtmlSidebar::addEntry(
			JText::_('COM_DB8OPTIMIZE_MENU_ACCESSIBILITY'),
			'index.php?option=com_db8optimize&view=accessibility"',
			$vName == 'accessibility"');
		JHtmlSidebar::addEntry(
			JText::_('COM_DB8OPTIMIZE_MENU_MOBILE'),
			'index.php?option=com_db8optimize&view=mobile',
			$vName == 'mobile');
	}

	/**
	 * Render submenu.
	 *
	 * @param   Array  $items  An Array with content to display.
	 *
	 * @return  void.
	 *
	 * @since   1.0
	 */
	static public function renderPage($items)
	{
		$site = JURI::root();
		$domain = parse_url($site, PHP_URL_HOST);

		foreach ($items as $item):?>
	<div class="icon">
		<a href="<?php echo $item['url'];?><?php
			if( (isset($item['remove_scheme'])) && ($item['remove_scheme'] == true))
			{
				echo $domain;
			}
			else
			{
				echo $site;
			}?>" target="_blank">
            <span class="icon-large icon-<?php echo $item['icon'];?>"></span>
			<h3><?php echo $item['title'];?></h3>
		</a>
	</div>
        <?php endforeach;

		return;
	}
}
