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
?>

<div id="j-sidebar-container" class="span2">
	<?php echo $this->sidebar; ?>
</div>
<div id="j-main-container" class="span10">

    <div class="span10">
    <h1>
        <span class="icon-DB8-logo rmargin">
            <span class="path1"></span><span class="path2"></span><span class="path3"></span>
        </span>
        <?php echo JText::_('COM_DB8OPTIMIZE_DASHBOARD_OPTIMIZESITE'); ?></h1>
        <p>
		    <?php echo JText::_('COM_DB8OPTIMIZE_DASHBOARD_DESC'); ?>
        </p>
        <br>
    </div>

    <div class="span10">
        <h2><?php echo JText::_('COM_DB8OPTIMIZE_DASHBOARD_CHOOSE'); ?></h2>
    </div>

    <div class="span10">

        <div class="icon">
            <a href="index.php?option=com_db8optimize&view=performance">
                <span class="icon-large icon-rocket"></span>
                <h3><span><?php echo JText::_('COM_DB8OPTIMIZE_MENU_PERFORMANCE');?></span></h3>
            </a>
        </div>

        <div class="icon">
            <a href="index.php?option=com_db8optimize&view=seo">
                <span class="icon-large icon-binoculars"></span>
                <h3><span><?php echo JText::_('COM_DB8OPTIMIZE_MENU_SEO');?></span></h3>
            </a>
        </div>

        <div class="icon">
            <a href="index.php?option=com_db8optimize&view=usability">
                <span class="icon-large icon-smile"></span>
                <h3><span><?php echo JText::_('COM_DB8OPTIMIZE_MENU_USABILITY');?></span></h3>
            </a>
        </div>

    </div>

    <div class="span10">

        <div class="icon">
            <a href="index.php?option=com_db8optimize&view=security">
                <span class="icon-large icon-shield"></span>
                <h3><span><?php echo JText::_('COM_DB8OPTIMIZE_MENU_SECURITY');?></span></h3>
            </a>
        </div>

        <div class="icon">
            <a href="index.php?option=com_db8optimize&view=accessibiliy">
                <span class="icon-large icon-accessibility"></span>
                <h3><span><?php echo JText::_('COM_DB8OPTIMIZE_MENU_ACCESSIBILITY');?></span></h3>
            </a>
        </div>

        <div class="icon">
            <a href="index.php?option=com_db8optimize&view=mobile">
                <span class="icon-large icon-mobile"></span>
                <h3><span><?php echo JText::_('COM_DB8OPTIMIZE_MENU_MOBILE');?></span></h3>
            </a>
        </div>

    </div>

    <div class="span10"><?php echo JText::_('COM_DB8OPTIMIZE_DASHBOARD_COPYRIGHT'); ?></div>