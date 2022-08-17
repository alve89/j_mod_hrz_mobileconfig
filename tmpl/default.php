<?php

defined('_JEXEC') or die;

//ModHrzMobileconfigHelper::varDump(JPATH_SITE . DIRECTORY_SEPARATOR . 'modules' . DIRECTORY_SEPARATOR . $module->module . DIRECTORY_SEPARATOR . 'helper.php');

require_once(JPATH_SITE . DIRECTORY_SEPARATOR . 'modules' . DIRECTORY_SEPARATOR . $module->module . DIRECTORY_SEPARATOR . 'helper.php');


ModHrzMobileconfigHelper::varDump($params);
