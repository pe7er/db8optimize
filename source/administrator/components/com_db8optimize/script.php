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

/**
 * Db8options script file.
 *
 * @package     A package name
 * @since       1.0
 */
class Com_Db8optimizeInstallerScript
{
	/**
	 * Constructor
	 * @since 1.0
	 *
	 * @param   JAdapterInstance  $adapter  The object responsible for running this script
	 */
	public function __construct(JAdapterInstance $adapter) {}

	/**
	 * Called before any type of action
	 * @since 1.0
	 *
	 * @param   string  $route  Which action is happening (install|uninstall|discover_install|update)
	 * @param   JAdapterInstance  $adapter  The object responsible for running this script
	 *
	 * @return  boolean  True on success
	 */
	public function preflight($route, JAdapterInstance $adapter) {}

	/**
	 * Called after any type of action
	 * @since 1.0
	 *
	 * @param   string  $route  Which action is happening (install|uninstall|discover_install|update)
	 * @param   JAdapterInstance  $adapter  The object responsible for running this script
	 *
	 * @return  boolean  True on success
	 */
	public function postflight($route, JAdapterInstance $adapter)
	{
		//echo '<p>' . JText::_('COM_DB8OPTIMIZE_DESCRIPTION') . '</p>';
	}

	/**
	 * Called on installation
	 * @since 1.0
	 *
	 * @param   JAdapterInstance  $adapter  The object responsible for running this script
	 *
	 * @return  boolean  True on success
	 */
	public function install(JAdapterInstance $adapter) {}

	/**
	 * Called on update
	 * @since 1.0
	 *
	 * @param   JAdapterInstance  $adapter  The object responsible for running this script
	 *
	 * @return  boolean  True on success
	 */
	public function update(JAdapterInstance $adapter) {}

	/**
	 * Called on uninstallation
	 * @since 1.0
	 *
	 * @param   JAdapterInstance  $adapter  The object responsible for running this script
	 */
	public function uninstall(JAdapterInstance $adapter) {}
}
