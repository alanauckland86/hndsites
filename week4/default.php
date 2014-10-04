<?php 
    // set page title 
	$pageName =pathinfo( __FILE__);
    $pageTitle= $pageName['filename'];

    // set page <h1> </h1>
	$pageHeading = "Bookshop";
?>

<?php include 'header.php';?>

<?php include 'footer.php'; ?>