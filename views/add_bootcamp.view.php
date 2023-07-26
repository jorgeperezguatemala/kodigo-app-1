<?php require('templates/Header.php'); ?>
<h1>Adding a new Bootcamp</h1>
<form action="<?php $_SERVER ['PHP_SELF']?>" method="post">
<input type="text" name ="title" placeholder ="type the title here">
<input type="text" name ="description" placeholder ="type the description here">
<input type="date" name ="start_bootcamp" placeholder ="type here de date to start the bootcamp">
<input type="date" name ="end_bootcamp" placeholder ="type end date to the bootcamp">
<input type="number" name ="modules" placeholder ="modules">

<button type="submit"> ADD NEW BOOTCAMP</button>

</form>
<?php require('templates/Footer.php'); ?>