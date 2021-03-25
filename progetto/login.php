<!DOCTYPE html>
<html lang="it">
<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
       
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">



</head>

<body>
<?php include 'menunavigation.php';?>
  <header>
    <h1> Login</h1>
  </header>


     <form method="post" >
         <input type="email" id="email" name="email" placeholder="Email" required>
         <br><br>
         <input type="password" id="password" name="password" placeholder="Password" required>
         <br><br>
         <input type="submit" name="submit" id="Submit" value="Login" >
     </form>

<?php
  if(isset($_POST['submit'])){
      extract($_POST);
      if(!empty($email) && !empty($password)){

        include 'database.php';
        global $db;
          echo" verificazione.... " ;
        $q = $db-> prepare ("SELECT * FROM users WHERE email = :email");
        $q->execute([ 'email'=> $email]);
        $result = $q->fetch();

        if($result == true){
            $hashpassword = $result['password'];

             if( password_verify($password,$hashpassword)){
                 echo" successo " ;
             } else{
                 echo "password non corretta";
             }

        }else{
          echo" utente " .$email ."non esiste";
        }

      }else{
        echo"compilare tutti i campi";
      }

  }

?>
</body>
</html>
