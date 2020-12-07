<!doctype html>
<html>
<body>

<form method="post" action="kontaktformular.php">

<textarea name="message"></textarea>

<input type="submit">

</form>



<?php

if($_POST["message"]) {

mail("mirja@mirjacastioni.com", "Here is the subject line",

$_POST["insert your message here"]. "From: an@email.address");

}

?>

</body>
</html>