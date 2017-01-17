
<?php
// define variables and set to empty values
$nameErr = $emailErr = "";
$name = $email  = $comment = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Nome richiesto";
  } else {
    $name = test_input($_POST["name"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
		  $nameErr = "Solo lettere e spazi permessi"; 
		}
  }

  if (empty($_POST["email"])) {
    $emailErr = "email richiesta";
  } else {
    $email = test_input($_POST["email"]);
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	  $emailErr = "formato email non corretto"; 
	}
  }

  if (empty($_POST["comments"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comments"]);
  }

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


/*if(!empty($_POST["email"]) && !empty($_POST["comments"]) && !empty($_POST["name"])){
	$msg = $comment . '\r\n' . $email . '\r\n' . $name;
	mail('cosymo.pe@gmail.com','casa-maddalena',$msg);	
}*/
$msg ="Messaggio: " . $comment . "\r\n" . "Email: " . $email . "\r\n". "Nome: " . $name;
mail('cosymo.pe@gmail.com','casa-maddalena',$msg);
mail('grazia.persia@hotmail.com','casa-maddalena',$msg);
?>
