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
$document->addStyleSheet(JURI::root() . 'media/com_db8optimize/css/style.css');
JLoader::register('Db8optimizeHelper', JPATH_COMPONENT . '/helpers/db8optimize.php');

$items = Array(
	Array(
		'icon' => 'accessibility',
		'title' => 'Nu Html Checker',
		'url'   => 'https://validator.w3.org/nu/?doc='
	),
	Array(
		'icon' => 'accessibility',
		'title' => 'Web Accessibility Evaluation',
		'url'   => 'http://wave.webaim.org/report#/'
	),

	Array(
		'icon' => 'accessibility',
		'title' => 'etre Accessibility Check',
		'url'   => 'http://www.etre.com/tools/accessibilitycheck/?check='
	),


    );

/*
	Array(
		'title' => 'Accessibility Valet',
		'url'   => 'http://valet.webthing.com/access/url.html?url='
	),
	Array(
		'title' => 'AChecker',
		'url'   => 'http://achecker.ca/checker/?uri='
	),
	Array(
		'title' => 'Multi-Analysis of Guidelines',
		'url'   => 'http://giove.isti.cnr.it:8080/MauveWeb/?uri='
	),
	Array(
		'title' => 'OCAWA',
		'url'   => 'http://www.ocawa.com/fr/Accueil.htm?url='
	),
	Array(
		'title' => 'Test de Accesibilidad',
		'url'   => 'http://www.tawdis.net/?url='
	),

 */
?>
<div id="j-sidebar-container" class="span2">
	<?php echo $this->sidebar; ?>
</div>
<div id="j-main-container" class="span10">

    <div class="span10">
        <h1>
            <span class="icon-accessibility"></span>&nbsp;
	    <?php echo JText::_('COM_DB8OPTIMIZE_MENU_ACCESSIBILITY'); ?>
        </h1>
        <p>
	        <?php echo JText::_('COM_DB8OPTIMIZE_ACCESSIBILITY_DESC'); ?>
        </p>

        <br>

        <h2><?php echo JText::_('COM_DB8OPTIMIZE_CHECK_WEBSITE'); ?></h2>

        <?php Db8optimizeHelper::renderPage($items); ?>
    </div>

    <div class="span10"><?php echo JText::_('COM_DB8OPTIMIZE_DASHBOARD_COPYRIGHT'); ?></div>
</div>