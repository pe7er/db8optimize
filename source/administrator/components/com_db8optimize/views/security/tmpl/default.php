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
		'icon' => 'shield',
		'title' => 'Scan my server',
		'url'   => 'https://www.scanmyserver.com/?domain='
	),
	Array(
		'icon' => 'shield',
		'title' => 'SUCURI',
		'url'   => 'https://sitecheck.sucuri.net/?scan='
	),
	Array(
		'icon' => 'shield',
		'title' => 'SSL Server Test',
		'url'   => 'https://www.ssllabs.com/ssltest/?d='
	),
	Array(
		'icon' => 'shield',
		'title' => 'Security Headers',
		'url'   => 'https://securityheaders.io/?hide=on&followRedirects=on&q='
	),


	Array(
		'icon' => 'shield',
		'title' => 'mxtoolbox Open Ports',
		'url'   => 'https://mxtoolbox.com/SuperTool.aspx?run=networktools&action=scan%3a',
        'remove_scheme' => true
	),
	Array(
		'icon' => 'shield',
		'title' => 'mxtoolbox SPF records',
		'url'   => 'https://mxtoolbox.com/SuperTool.aspx?run=toolpage&action=spf%3a',
        'remove_scheme' => true
	),
	Array(
		'icon' => 'shield',
		'title' => 'mxtoolbox Blacklist',
		'url'   => 'https://mxtoolbox.com/SuperTool.aspx?run=toolpage&action=blacklist%3a',
		'remove_scheme' => true
	),

    Array(
		'icon' => 'shield',
		'title' => 'mxtoolbox Domain Health',
		'url'   => 'https://mxtoolbox.com/domain/'
	),


    );
/*
	Array(
		'title' => 'Quttera Scan Website',
		'url'   => 'https://www.quttera.com/?url_submit='
	),
	Array(
		'title' => 'Web Inspector',
		'url'   => 'https://app.webinspector.com/?url='
	),
	Array(
		'title' => 'ASafaWeb',
		'url'   => 'https://asafaweb.com/?ScanUrl='
	),

 */
?>
<div id="j-sidebar-container" class="span2">
	<?php echo $this->sidebar; ?>
</div>
<div id="j-main-container" class="span10">

    <div class="span10">
        <h1><span class="icon-shield"></span>&nbsp;
	        <?php echo JText::_('COM_DB8OPTIMIZE_MENU_SECURITY'); ?>
        </h1>
        <p>
	        <?php echo JText::_('COM_DB8OPTIMIZE_SECURITY_DESC'); ?>
        </p>

        <br>

        <h2><?php echo JText::_('COM_DB8OPTIMIZE_CHECK_WEBSITE'); ?></h2>

        <?php Db8optimizeHelper::renderPage($items); ?>
    </div>

    <div class="span10"><?php echo JText::_('COM_DB8OPTIMIZE_DASHBOARD_COPYRIGHT'); ?></div>
</div>