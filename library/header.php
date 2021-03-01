<!--  I honor Parkland's core values by affirming that I have 
followed all academic integrity guidelines for this work.
Your name 
Your section -->
<?php



function getPost($name)

{
        if ( isset($_POST[$name]))
       {
        echo  htmlspecialchars($_POST[$name]);
       }
        echo "";
if ( $_POST["usr"] == "login" and $_POST["passwd"] == "passwd" )
{

 header("Location: landing.php");

}
}

function head(){


echo '<p>Matthew Bennett</p>';
echo '<p>CSC-155</p>';
echo '<img src="https://static.wikia.nocookie.net/minecraft/images/8/81/Dirt_server.png/revision/latest?cb=20210121213114" height="100" width="100">';



}



?>
