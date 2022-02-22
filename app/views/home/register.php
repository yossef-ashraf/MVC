<?php require('header.php'); ?>

<form action="<?= PATH ?>/user/RegisterLogin" method="post">
<label for="name"> name:</label><br>
<input type="text" id="name" name="name" placeholder="name"><br>
<label for="email"> email:</label><br>
<input type="text" id="email" name="email" placeholder="email"><br>
<label for="pass">pass:</label><br>
<input type="text" id="pass" name="pass" placeholder="pass"><br><br>
<input type="submit" >
</form> 
<a href='<?= PATH ?>/user/login'>login</a>

<?php require('footer.php'); ?>