<link rel="icon" href="images/logoX.png" type="image/x-icon">

<?php
// $con=mysqli_connect("example.com","peter","abc123","my_db");
include "config.php";

$name = $_POST['name'];
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM organ where Name='$name'");

echo "<center><table border='1'>
<tr>
<th>Organ ID</th>
<th>Donor ID</th>
<th>Organ Name</th>

</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['ID'] . "</td>";
echo "<td>" . $row['D_id'] . "</td>";
echo "<td>" . $row['Name'] . "</td>";
echo "</tr>";
}
echo "</table><center>";

mysqli_close($con);
?>

<html>
<head>
<title>Life After Death</title>
<style type="text/css">
table {
margin: 15px;


}

th {
            padding: 20px 15px;
            text-align: left;
            font-weight: 500;
            font-size: 12px;
            color: #fff;
            text-transform: uppercase;
            background-color: rgba(255, 255, 255, 0.3);
        }

        td {
            padding: 15px;
            text-align: left;
            vertical-align: middle;
            font-weight: 300;
            font-size: 12px;
            color: #fff;
            border-bottom: solid 1px rgba(255, 255, 255, 0.1);
        }

table {
  width: 70%;
}

::-webkit-scrollbar {
            width: 6px;
        }

        ::-webkit-scrollbar-track {
            -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
        }

        ::-webkit-scrollbar-thumb {
            -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
        }

</style>
</head>

<!DOCTYPE html>
<html lang="en">
<head>
   
    <style>
      label
      {
      display: inline-block;
      width: 100px;
      text-align: left;
      }
    </style>
    <title></title>

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
<br><br>
<div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form action="selectorgan1.php" method="POST" id="signup-form" class="regform">
                        <h2 class="form-title">REQUEST ORGANS</h2>
                        <div class="form-group">
                            <input type="text" class="form-input" name="ID" id="organid" placeholder="Organ Id" autocomplete="off" />
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="R_id" id="recid" placeholder="Receiver ID" autocomplete="off" />
                        </div>
                        <div class="form-group">
                            <input type="Text" class="form-input" name="O_name" id="recid" placeholder="Organ name" autocomplete="off"/>
                        </div>

                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Submit"/>
                        </div>
                    </form>
                    
                </div>
    </div>
    </section>
    </div>
    
    <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/jquery.sticky.js"></script>
        <script src="js/click-scroll.js"></script>
        <script src="js/custom.js"></script>


</body>
</html>