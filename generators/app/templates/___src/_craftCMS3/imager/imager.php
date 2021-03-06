<?php

/**
 * Imager by André Elvan
 *
 * @author      André Elvan <http://vaersaagod.no>
 * @package     Imager
 * @copyright   Copyright (c) 2016, André Elvan
 * @license     http://opensource.org/licenses/mit-license.php MIT License
 * @link        https://github.com/aelvan/Imager-Craft
 */


/**
 * Configuration file for Imager
 *
 * Override this by placing a file named 'imager.php' inside your config folder and override variables as needed.
 * Multi-environment settings work in this file the same way as in general.php or db.php
 */

return array(
    // All environments
    '*' => [
        'imagerSystemPath' => getenv('BASEPATH') . 'uploads/imager/',
        'imagerUrl' => '/uploads/imager/',
        'interlace' => true, // false, true ('line'), 'none', 'line', 'plane', 'partition'x
        'instanceReuseEnabled' => false,
        'allowUpscale' => false,
        'hashFilename' => false,
        'cacheDuration' => 48384000,
        'jpegQuality' => 82,
        'pngCompressionLevel' => 2,
        'webpQuality' => 82,
    ],

    // Live (production) environment
    'live' => array(
        'cwebpPath' => '/usr/bin/cwebp',
        'useCwebp' => false
    ),

    // Staging (pre-production) environment
    'staging' => array(
        'cwebpPath' => '/usr/bin/cwebp',
        'useCwebp' => false
    ),

    // Local (development) environment
    'local' => array(
        'cwebpPath' => '/usr/local/bin/cwebp',
        'useCwebp' => false
    ),

);
