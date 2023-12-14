<?php

require_once("include/navbar1.php");

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Life After Death :: Organ Donation</title>
    <link rel="stylesheet" href="cssindex.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
      div{margin-bottom:10px}
      label
      {
      display: inline-block;
      width: 100px;
      text-align: left;
      }
    </style>
  </head>
  <body style="background-color: rgb(211, 214, 214); background-image:url(donate.png);; background-size:    cover;                      /* <------ */
  background-repeat:   no-repeat;
  background-position: center center; background-size: contain; height: 800px;">
    

<div class="form-center">
<form action="adminreg.php" method="post" class="regform">

  <b>
  <label for="A_id">A_id:</label>
  <input type="text" id="A_id" name="A_id"><br><br>

  <label for="A_name">A_name:</label>
  <input type="text" id="A_name" name="A_name"><br><br>


  <label for="A_email">A_email:</label>
  <input type="email" id="A_email" name="A_email"><br><br>

  <label for="A_pass">Address:</label>
  <input type="password" name="A_pass" id="A_pass"></input>

  <label for="A_mobile">Mobile:</label>
  <input type="text" id="A_mobile" name="A_mobile"><br><br>


<br>
<br>
</b>
  <input type="submit" value="Submit">
</form>
</div>























    
    
</body>
</html>
