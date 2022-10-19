<?php require_once('../../private/initialize.php'); 



$id = $_GET['id']??'1';

$page_title = 'Salamander Details';
include(SHARED_PATH . '/salamander-header.php'); 

?>

<h2>Salamander Details</h2>

<p>Page ID: <?php echo h($id) ?></p>
<!------------------------------------------------------------------ 
1.
Display <p>Page ID: ... </p>
Replace the ... with PHP short tags and use h function found in the
functions folder. It is a shortcut the author created to represent 
the PHP functions htmlentities. Pass the $id to the h function.

this is so i can commit for final commit

Hint: h()

------------------------------------------------------------------>
<p><a href="<?php echo url_for('salamanders/index.php'); ?>" >&laquo; Back to Salamander List</a></p>

<?php include(SHARED_PATH . '/salamander-footer.php'); ?>
