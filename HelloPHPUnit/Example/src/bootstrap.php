<?php
/**
 * source : http://jes.st/2011/phpunit-bootstrap-and-autoloading-classes/
 */
include_once('AutoLoader.php');
// Register the directory to your include files
AutoLoader::registerDirectory('src');
AutoLoader::registerDirectory('src/Example');
AutoLoader::registerDirectory('src/Example/Mystery');
