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
		'icon' => 'binoculars',
		'title' => 'SEO Profiler Backlinkdata',
		'url'   => 'http://www.openlinkprofiler.org?url='
	),
    Array(
	    'icon' => 'binoculars',
		'title' => 'Google Structured Data',
		'url'   => 'https://search.google.com/structured-data/testing-tool/u/0/#url='
	),
    Array(
	    'icon' => 'binoculars',
		'title' => 'Nu Html Checker',
		'url'   => 'https://validator.w3.org/nu/?doc='
	),
	Array(
		'icon' => 'binoculars',
		'title' => 'Copyscape',
		'url'   => 'http://www.copyscape.com/?q='
	),
);
?>
<div id="j-sidebar-container" class="span2">
	<?php echo $this->sidebar; ?>
</div>
<div id="j-main-container" class="span10">

    <div class="span10">
    <h1><span class="icon-binoculars"></span>&nbsp;
	    <?php echo JText::_('COM_DB8OPTIMIZE_MENU_SEO'); ?>
    </h1>
        <p>
	        <?php echo JText::_('COM_DB8OPTIMIZE_SEO_DESC'); ?>
        </p>

        <br>

        <h2><?php echo JText::_('COM_DB8OPTIMIZE_CHECK_WEBSITE'); ?></h2>
        <p>
	        <?php Db8optimizeHelper::renderPage($items); ?>
        </p>
    </div>

    <div class="span10"><?php echo JText::_('COM_DB8OPTIMIZE_DASHBOARD_COPYRIGHT'); ?></div>
</div>