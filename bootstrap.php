<?php
/* ********************************************************************************************
               ..oo800ooo..                    ..ooo008oo..
           .ox88888888'                          '888888888o.
        .o888888888"             .   .              "888888888o.
      .o8888888888~             /|   |\              ~8888888888o.
    .{88888888888.              8\___/8               .88888888888}.
   o8888888888888              .8888888.               8888888888888o
  888888888888888              888888888               888888888888888
 o888888888888888.             o8888888o              .888888888888888o
 88888888888888888.           o{8888888}o            .88888888888888888
^888888888888888888.         J88888888888L          .888888888888888888^
!88888888888888888888oo..oo88888888888888888oo..oo888888888888888888888!
{8888888888888888888888888888888888888888888888888888888888888888888888}
{88888 It's not who I am underneath but what I do that defines me 88888}
'8888888888888888888888888888888888888888888888888888888888888888888888'
 o88888888888888888888888888888888888888888888888888888888888888888888o
  88888888888888;'~`^Y8887^''o88888888888o''^Y8887^`~';888888888888888
  '88888888888'       `8'    `'888888888'     `8'       '888888888888'
   !8888888887         !       '8888888'       !         V888888888!
    ^o888888!                   '88888'                   !888888o^
      ^88888"                    88888                    "88888^
        'o888`                   ^888'                   '888o'
          ~888.                   888.                  .888~
            '8;.                  `8'                  .;8'
               '.                  !                  .`
 *********************************************************************************************/

session_start();
// Setup global paths
define('TITLE', 'xGhosts');
define('BASEPATH', dirname(__FILE__) . DIRECTORY_SEPARATOR);
define('APP', BASEPATH . 'app' . DIRECTORY_SEPARATOR);
define('CONFIGDIR', APP . 'config' . DIRECTORY_SEPARATOR);
define('LANGUAGES', APP . 'i18n' . DIRECTORY_SEPARATOR);
define('LIBRARIES', BASEPATH . 'lib' . DIRECTORY_SEPARATOR);
define('VENDOR', BASEPATH . 'vendor' . DIRECTORY_SEPARATOR);
define('VIEWS', APP . 'views' . DIRECTORY_SEPARATOR);

// Patches path
define('PATCHES', 'https://widget.live-ca.callofduty.com/img/patches/');
define('BASEEMBLEM', 'https://api.live-ca.ghosts.callofduty.com/emblems/clanEmblem?title=ghosts&imgtype=png&background=0&size=');
define('CLANEMBLEM', BASEEMBLEM . '45&clan_id=');
define('CLANEMBLEM_SMALL', BASEEMBLEM . '30&clan_id=');

/******************************************CUSTOMIZE***************************************/
// Default language
define('LOCALE', 'en'); // set this for default locale, available it, en for now

// Date format
define('DATE_FORMAT', 'd/m/Y'); // set it to m/d/Y for US format

// Set timezone check http://php.net/manual/en/timezones.php for supported timezone and
date_default_timezone_set('Europe/Rome'); // edit for different timezone
/******************************************************************************************/

// Set the include path for libs
set_include_path(
  LIBRARIES
  . PATH_SEPARATOR . VENDOR
);
// Autoload
require_once 'vendor/autoload.php';
// Translations
if ( !isset($_SESSION['xGhost']['locale']) || !$_SESSION['xGhost']['locale'] ) {
  $locale = LOCALE;
} else {
  $locale = $_SESSION['xGhost']['locale'];
}
$_SESSION['xGhost']['translate'] = require_once LANGUAGES.$locale.'.php';
// Misc
require_once 'functions.php';

// Preload xGhost class
require_once 'xKraty/xGhost.php';
?>
