<!doctype html>
<html lang="en">
  <head>
    <title>Hello, world!</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  </head>
  <body>
    <h1>Hello, world!</h1>
    
    <?php
    // A simple web site in Cloud9 that runs through Apache
    // Press the 'Run' button on the top to start the web server,
    // then click the URL that is emitted to the Output tab of the console
    
    echo '<h3>Hello world from Cloud9!</h3>';
    
    $myVariable = 102;
    $myVariable1 = "hello";
    $myVariable2 = false;
    $myVariable3 = array("Volvo", "BMW", "Toyota");
    $myVariable4 = [ "key1" => "val1", "key2" => "val2"];
    
    //echo $myVariable4["foo"];
    //echo $myVariable3[0];
    //print_r($myVariable4);
    
    echo "<ul>";
    for ($i = 0; $i < count($myVariable3); $i++) {
         echo "<li>" . $myVariable3[$i]."</li>";
    }
    echo "</ul>";
    
    echo "<ul>";
    foreach ($myVariable4 as $hello => $second ) {
        echo "<li>".$hello."=".$second ."</li>";
    }
    echo "</ul>";
    
    if ($myVariable2 == false) {
        echo "<div class='btn btn-warning'>I AM BOOTS</div>";
    }else{
        echo "<h4>BYE</h4>";
    }
    
    $favcolor = "red";
        switch ($favcolor) {
        case "red":
        echo "Your favorite color is red!";
        break;
        case "blue":
        echo "Your favorite color is blue!";
        break;
        case "green":
        echo "Your favorite color is green!";
        break;
        default:
        echo "Your favorite color is neither red, blue, nor green!";
        }
    
    
    ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>


