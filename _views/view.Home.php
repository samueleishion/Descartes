<?
$headers = true; 
HTMLhead($view); 
HTMLnav($view); 
?>
<section id="home"></section>
<? 
require_once('view.Project.php');  
require_once('view.About.php'); 
require_once('view.Contact.php');
HTMLfoot($view); 
?>