<?php 
  require_once('../private/initialize.php');
  if(!isset($page_title)) { $page_title = 'Home'; }
  include_once('../private/shared/salamander-header.php');
/* ------------------------------------------------------------------
Your code here.

<?php ?>
Write 3 lines of code

1.)
* Use require_once and reference the initialize.php as in the tutorial. 
* Use a relative path. 

2.)  
* Create a variable for page title. Make its value "Home"  
* Reference the salamander-header.php page to see the variable name 
spelling and capitalization

3.) 
* Use include_once to reference the salamander-header.php file
* User relative address
------------------------------------------------------------------ */

?>
<h1>Welcome to SAS</h1>
<p>The Southern Appalachian Mountains Region is often hailed as the Salamander Capital of the World. In fact, the Smithsonian Conservation Biology Institute proclaims that the Appalachian region is home to more salamander species than anywhere else in the world, making it a true hotspot for salamander biodiversity.</p> 
<p><a href="https://www.savethesalamanders.com/appalachian-salamanders/">Source</a></p>
<?php include(SHARED_PATH . '/salamander-footer.php'); ?>
