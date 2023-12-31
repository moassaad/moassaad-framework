<?php
namespace MVC\View;
use \MVC\View\Template\SystemManagement\Template as Template;
use \MVC\View\Template\SystemManagement\Assets as Assets;

include_once "./../Config/core.php";

/**
 * Test Template
 */
$Assets = new Assets();
$Template = new Template();
include_once $Template->getStartHTML();
include_once $Template->getHead();
include_once $Template->getStartBody();
?>

<h1>moassaad-framework</h1>
<p>Contact Me: mohammadassadgo@gmail.com</p>

<?php
include_once $Template->getEndBody();
include_once $Template->getEndHTML();
?>
