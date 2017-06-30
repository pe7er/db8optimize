<?php
/**
 * @package    db8optimize
 *
 * @author     Peter Martin <joomla@db8.eu>
 * @copyright  Copyright 2016-2017 by Peter Martin
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 * @link       https://db8.eu
 */

defined('_JEXEC') or die;

$document = JFactory::getDocument();
$document->addStyleSheet('components/com_db8optimize/assets/style.css');
JLoader::register('Db8optimizeHelper', JPATH_COMPONENT . '/helpers/db8optimize.php');

$items = Array(
	Array(
		'icon' => 'rocket',
		'title' => 'Google PageSpeed Insights',
		'url'   => 'https://developers.google.com/speed/pagespeed/insights/?url='
	),
	Array(
		'icon' => 'rocket',
		'title' => 'GTMetrix',
		'url'   => 'https://gtmetrix.com?url='
	),
	Array(
		'icon' => 'rocket',
		'title' => 'Yellow Lab Tools',
		'url'   => 'http://yellowlab.tools/?url='
	),
/*	Array(
		'icon' => 'rocket',
		'title' => 'Pingdom',
		'url'   => 'https://tools.pingdom.com/?url='
	),*/
	Array(
		'icon' => 'rocket',
		'title' => 'WebPagetest',
		'url'   => 'http://www.webpagetest.org/?url='
	),
);

?>
<div id="j-sidebar-container" class="span2">
	<?php echo $this->sidebar; ?>
</div>
<div id="j-main-container" class="span10">

    <div class="span10">
        <h1>
            <span class="icon-rocket"></span>&nbsp;
            <?php echo JText::_('COM_DB8OPTIMIZE_MENU_PERFORMANCE'); ?>
        </h1>
        <p>
	        <?php echo JText::_('COM_DB8OPTIMIZE_PERFORMANCE_DESC'); ?>
        </p>

        <br>

        <h2>
            <?php echo JText::_('COM_DB8OPTIMIZE_CHECK_WEBSITE'); ?>
        </h2>

        <?php Db8optimizeHelper::renderPage($items); ?>

    </div>

    <div class="span10"><?php echo JText::_('COM_DB8OPTIMIZE_DASHBOARD_COPYRIGHT'); ?></div>
</div>