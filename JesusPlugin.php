<?php
/**
 * Jesus
 *
 * Provide functionalities for Enfant Jesus project
 *
 * @copyright Copyright 2011-2012 Roy Rosenzweig Center for History and New Media
 * @license http://www.gnu.org/licenses/gpl-3.0.txt GNU GPLv3
 * @package JesusPlugin
 */

define('JESUS_PLUGIN_DIR', dirname(__FILE__));

require_once JESUS_PLUGIN_DIR . '/helpers/Jesus.php';

/**
 * The Participate plugin.
 * @package Omeka\Plugins\Participate
 */
class JesusPlugin extends Omeka_Plugin_AbstractPlugin
{

    /**
     * @var array Hooks for the plugin.
     */
    protected $_hooks = array(
    );


    /**
     * @var array Filters for the plugin.
     */
    protected $_filters = array(
        
    );


    public static function getMapping()
    {
        return parse_ini_file(JESUS_PLUGIN_DIR.'/mapping.ini', true);
    }

        




}




