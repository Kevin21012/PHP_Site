<!--  I honor Parkland's core values by affirming that I have 
followed all academic integrity guidelines for this work.
Your name 
Your section -->
<?php



function getPost($name)

{        
        error_reporting(E_ALL ^ E_NOTICE);
        if ( isset($_POST[$name]))
       {
        echo  htmlspecialchars($_POST[$name]);
       }
        echo "";
if ( $_POST["usr"] == "login" and $_POST["passwd"] == "passwd" )
{
 error_reporting(E_ALL ^ E_NOTICE);
 header("Location: landing.php");

}
}

function head(){


echo '<p>Matthew M Bennett</p>';
echo '<p>CSC-155</p>';
echo '<img src="GrassNew.png"  height="100" width="100">';



}



?>
