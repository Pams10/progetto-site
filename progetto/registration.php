<!DOCTYPE html>
<html lang="it">
<head>
    <title>Sign-up</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <link rel="stylesheet" href="css/signup.css">
      <?php include 'menunavigation.php';?>
</head>

<body>


  <header>
    <h1> Registration</h1>
  </header>
 <div class= "container">
  <form  method="post">
      <input type="text" id="nome" name="nome" placeholder="nome" required>
      <br />
      <br />
      <input type="text" id="cognome" name="cognome" placeholder="cognome" required>
      <br />
      <br />
      <input type="email" id="email" name="email" placeholder="Email" required>
      <br />
      <br />
      <input type="password" id="password" name="password" placeholder="Password" required>
      <br />
      <br />
      <input type="password" id="confirm" name="confirm" placeholder="Conferma Password"required>
      <br />
      <br />
      <input type="submit" name="submit" id="Submit" value="Registrarti" >
  </form>
</div>
  <?php

  if(isset($_POST['submit'])){
       extract($_POST);
       if(!empty($nome) && !empty($cognome) && !empty($email) && !empty($password) && !empty($confirm)){
              if($password==$confirm){
                $options = [
                  'cost'=> 12,
                ];
                $hashpass = password_hash($password,PASSWORD_BCRYPT,$options);

                include 'database.php';
                global $db;
                $c = $db-> prepare ("SELECT email FROM users WHERE email = :email");
                $c->execute([ 'email'=>$email]);
                $result=$c->rowCount();
                if($result==0){
                   $q=$db-> prepare ("INSERT INTO users(nome,cognome,email,password) VALUES(:nome,:cognome,:email ,:password)");
                   $q->execute([
                     'nome'=> $nome,
                     'cognome'=>  $cognome,
                     'email'=> $email ,
                     'password'=> $hashpass
                   ]);
                   echo "<h1>";
                     echo "Ciao ";
                     echo $nome." ". $cognome . " ";
                     echo " sei stato registrato con successo!";
                     echo "</h1>\n";
                }else{
                  echo "<b>";
                  echo "quest' email è già esitente!";
                  echo "</b>";
                }
              }
       }else{
         echo "tutti i campi non sono compilati!";
       }


   }
  ?>

</body>
</html>
