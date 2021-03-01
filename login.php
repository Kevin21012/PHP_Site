<!--  I honor Pairkland's core values by affirming that I have 
followed all academic integrity guidelines for this work.
Your name 
Your section -->
<html>
<head>
<title>Login to the Website</title>
<?php
include 'library/header.php';
echo getPost($name);
echo head();
error_reporting(E_ALL ^ E_NOTICE);

?>
<body>
<h3>This is not a real login,use your real password and I'll steal your gold username=login password=passwd</h3>
<form method='POST'>
Username: <input type='text' name='usr' value='<?php echo getPost("usr");?>'> <br>
Password: <input type='password' name='passwd' value='<?php echo getPost("passwd");?>'> <br>
<input type='submit' name='submit'>
</form>
<?php
include 'library/footer.php';
echo footer();

?>
</body>
</html>
