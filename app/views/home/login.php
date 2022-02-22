<?php require('header.php'); ?>

<form action="<?= PATH ?>/user/PostLogin" method="post">
<label for="email">email:</label><br>
<input type="text" id="email" name="email" placeholder="email"><br>
<label for="pass">pass:</label><br>
<input type="text" id="pass" name="pass" placeholder="pass"><br><br>
<input type="submit" >
</form> 
<a href='<?= PATH ?>/user/register'>register</a>

<?php require('footer.php'); ?>