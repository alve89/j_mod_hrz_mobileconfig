<?php
// No direct access to this file
defined('_JEXEC') or die;

/**
 * Script file of mod_tvo_aktuelle_ergebnisse module
 */
class mod_hrz_mobileConfigInstallerScript {
	/**
	 * Method to install the extension
	 * $parent is the class calling this method
	 *
	 * @return void
	 */
	function install($parent) {
		// echo '<p>The module has been installed.</p>';
	}

	/**
	 * Method to uninstall the extension
	 * $parent is the class calling this method
	 *
	 * @return void
	 */
	function uninstall($parent) {
		// echo '<p>The module has been uninstalled.</p>';
	}

	/**
	 * Method to update the extension
	 * $parent is the class calling this method
	 *
	 * @return void
	 */
	function update($parent) {
		//echo '<p>The module has been updated to version' . $parent->get('manifest')->version . '.</p>';
	}

	/**
	 * Method to run before an install/update/uninstall method
	 * $parent is the class calling this method
	 * $type is the type of change (install, update or discover_install)
	 *
	 * @return void
	 */
	function preflight($type, $parent) {
	}

	/**
	 * Method to run after an install/update/uninstall method
	 * $parent is the class calling this method
	 * $type is the type of change (install, update or discover_install)
	 *
	 * @return void
	 */
	function postflight($type, $parent) {
		// echo '<p>Anything here happens after the installation/update/uninstallation of the module.</p>';
		$db = JFactory::getDbo();
		$prefix = $db->getPrefix();
		$availableTables = $db->setQuery('SHOW TABLES')->loadColumn();
		$errorsRaised = false;

		if(!array_search($prefix.'hrz_mobileconfig', $availableTables) ) {
			$application = JFactory::getApplication();
			$application->enqueueMessage(JText::_('MOD_HRZ_MOBILECONFIG_TABLE_MOBILECONFIG_NOT_FOUND'), 'warning');
			$errorsRaised = true;
		}

		if($errorsRaised) {
			$application = JFactory::getApplication();
			$application->enqueueMessage(JText::_('MOD_HRZ_MOBILECONFIG_TABLES_MISSING'), 'error');
		}
	}
}
