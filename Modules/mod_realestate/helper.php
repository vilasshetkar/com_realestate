<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_articles_latest
 *
 * @copyright   Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;


JModelLegacy::addIncludePath(JPATH_SITE . '/components/com_realestate/models', 'RealEstateModel');

/**
 * Helper for mod_articles_latest
 *
 * @package     Joomla.Site
 * @subpackage  mod_articles_latest
 */
abstract class ModRealEstateHelper
{
	public static function getRealEstate(&$params)
	{
		// Get an instance of the generic articles model
		$model = JModelLegacy::getInstance('Default', 'RealEstateModel', array('ignore_request' => true));
		$items = $model->getMsg($id = null);


		return $items;
	}
}
