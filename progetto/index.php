<!DOCTYPE html>
<html lang="en">
<head>
  <title>Books&Notes-Appunti e Libri</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link href="https://fonts.googleapis.com/css2?family=Lora" rel="stylesheet">
  <script src="https://kit.fontawesome.com/c1a2b59166.js" ></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<?php include 'menunavigation.php';?>
<div class="contain-fluid ">
  <div class="container-text-center">
    <h1 class="big-title">Il tuo compagno  potrebbe avere quello che ti serve. Chiediglielo!</h1>
  </div>
  <div class="container">

    <div class="jumbotron">

      <div class="row">
             <div class="col-sm-6">
               <label for="pwd">Cosa cerchi?</label>
               <input class="search-fields skills" type="text"  id="s1"name ="loca1" placeholder="libro , appunti">
             </div>
            <div class="col-sm-6">
              <label for="s2">Nome del:</label>
              <input class="search-fields location" type="text" id="s2"name ="loca2" placeholder="prof , autore">
            </div>

     </div>

       <button type="button" class="btn btn-customise">
         <span class="glyphicon glyphicon-search"></span> Search
       </button>

  </div>

    </div>

  </div>
<footer class="container-fluid text-center">
  <p>copyright&copy 2021-All Right Reserved</p>
</footer>
</div>
</body>
</html>
