<?php

/**
 * Generates Form routes
 *
 * @package     Nails
 * @subpackage  module-custom-forms
 * @category    Controller
 * @author      Nails Dev Team
 * @link
 */

namespace Nails\Routes\Forms;

use Nails\Factory;

class Routes
{
    /**
     * Returns an array of routes for this module
     * @return array
     */
    public function getRoutes()
    {
        $aRoutes = array();
        $aRoutes['forms/(.*)'] = 'forms/index/$1';
        return $aRoutes;
    }
}