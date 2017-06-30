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
		'icon' => 'mobile',
		'title' => 'Google Mobile-Friendly Test',
		'url'   => 'https://search.google.com/search-console/mobile-friendly?url='
	),
	Array(
		'icon' => 'mobile',
		'title' => 'Bing Mobile Friendliness Test',
		'url'   => 'https://www.bing.com/webmaster/tools/mobile-friendliness?url='
	),
	/*Array(
		'icon' => 'mobile',
		'title' => 'Pingdom',
		'url'   => 'https://tools.pingdom.com/?url='
	),*/
	Array(
		'icon' => 'mobile',
		'title' => 'WebPagetest',
		'url'   => 'http://www.webpagetest.org/?url='
	),
);
/*
	Array(
		'title' => 'Think with Google',
		'url'   => 'https://testmysite.thinkwithgoogle.com/'
	),
	Array(
		'title' => 'Mobile Friendly Test Tool',
		'url'   => 'http://smallseotools.com/mobile-friendly-test/'
	),
	Array(
		'title' => 'MobiReady',
		'url'   => 'https://ready.mobi/'
	),
	Array(
		'title' => 'RankWatch',
		'url'   => 'https://www.rankwatch.com/tools/mobile-friendly-check.html'
	),

 */
?>
<div id="j-sidebar-container" class="span2">
	<?php echo $this->sidebar; ?>
</div>
<div id="j-main-container" class="span10">

    <div class="span10">
        <h1><span class="icon-mobile"></span>&nbsp;
            <?php echo JText::_('COM_DB8OPTIMIZE_MENU_MOBILE'); ?>
        </h1>
        <p>
	        <?php echo JText::_('COM_DB8OPTIMIZE_MOBILE_DESC'); ?>
        </p>

        <br>

        <h2><?php echo JText::_('COM_DB8OPTIMIZE_CHECK_WEBSITE'); ?></h2>

        <?php Db8optimizeHelper::renderPage($items); ?>
    </div>

    <div class="span10"><?php echo JText::_('COM_DB8OPTIMIZE_DASHBOARD_COPYRIGHT'); ?></div>
</div>