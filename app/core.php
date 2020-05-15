<?php
session_start();
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

include_once 'Config.php'; //CFG <-
include_once 'models/Navigator.php';
include_once 'models/DB.php';

include_once 'models/Guard.php';
include_once 'models/Seo.php';
include_once 'models/Router.php';
include_once 'models/Show.php';
include_once 'models/Auth.php';
include_once 'models/Reg.php';

include_once 'models/McStatusServer.php';
include_once 'models/ServerOnline.php';


include_once 'models/Inventar.php';
include_once 'models/Rcom.php';
include_once 'models/MailSmtp.php';
include_once 'models/MailGeneatorSys.php';
include_once 'models/MailGeneatorUrl.php';
include_once 'models/UrlBox.php';
include_once 'models/UrlContent.php';

?>
