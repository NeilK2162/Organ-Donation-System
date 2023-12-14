<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Life After Death</title>

        <!-- CSS FILES -->        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="stylesheet" href="css/style.css">

        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Open+Sans&display=swap" rel="stylesheet">
                        
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <link href="css/bootstrap-icons.css" rel="stylesheet">

        <link href="css/templatemo-topic-listing.css" rel="stylesheet">  
        <link rel="icon" href="images/logoX.png" type="image/x-icon" >
        <style>       
        img {
            height: 90px; /* Adjust the height as needed */
            width: auto; /* Maintain aspect ratio */
        }
        .nav-item.active a {
        color: #001F3F; /* Change this to the desired dark blue shade */
    }
    </style>




<!--

TemplateMo 590 topic listing

https://templatemo.com/tm-590-topic-listing

-->
    </head>
    
    <body id="top">

        <main>

            <nav class="navbar navbar-expand-lg">
                <div class="container">
                   <a class="navbar-brand" href="index.html">
                        <img src="images/logo8.png" alt="Logo">
                    </a>
                    <div class="d-lg-none ms-auto me-4">
                        <a href="index.html" class="navbar-icon bi-person smoothscroll"></a>
                    </div>
    
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
    
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-lg-5 me-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="donorinfo.php" style="color: white;">Donor Info</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="receiverinfo.php">Receiver Info</a>
                            </li>
    
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="organinfo.php">Organ Info</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="hospitalreg.php">Hospital Reg</a>
                            </li>
    
                            <li class="nav-item <?php echo basename($_SERVER['PHP_SELF']) == 'orderby.php' ? 'active' : ''; ?>">
                                <a class="nav-link click-scroll" href="orderby.php">Hospital Order</a>
                            </li>

                            
                        </ul>

                        <div class="d-none d-lg-block">
                            <a href="index.html" class="navbar-icon bi-person smoothscroll"></a>
                        </div>
                    </div>
                </div>
            </nav>
            

            <section class="hero-section d-flex justify-content-center align-items-center" id="section_1">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-8 col-12 mx-auto">
                            <h1 class="text-white text-center">Search for Organ</h1>


                            <form action="searchINorderby.php" method="post" class="custom-form mt-4 pt-2 mb-lg-0 mb-5" role="search">
                                <div class="input-group input-group-lg">
                                    <span class="input-group-text bi-search" id="basic-addon1">
                                        
                                    </span>

                                    <input name="name" type="search" class="form-control" id="organname" placeholder="Kidney, Liver, Heart ..." aria-label="Search">

                                    <button type="submit" class="form-control" value="Submit"s>Search</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </section>
                            
          </main>

</body>
</html>

<?php
// $con=mysqli_connect("example.com","peter","abc123","my_db");
include "config.php";
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM organ");

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
<title>...</title>
<style type="text/css">


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
</head>
<body>
<br><br>
<div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form action="orderby1.php" method="POST" id="signup-form" class="regform">
                        <h2 class="form-title">REQUEST ORGANS</h2>
                        <div class="form-group">
                            <input type="text" class="form-input" name="ID" id="orgainid" placeholder="Organ Id" autocomplete="off" />
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="H_id" id="recid" placeholder="Hospital ID" autocomplete="off" />
                        </div>
                        <div class="form-group">
                            <input type="Text" class="form-input" name="O_name" id="recid" placeholder="Hospital name" autocomplete="off"/>
                        </div>

                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Submit"/>
                        </div>
                    </form>
                    
                </div>
    </div>
    </section>
    </div>
    
    
<!-- JAVASCRIPT FILES -->
<script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/jquery.sticky.js"></script>
        <script src="js/click-scroll.js"></script>
        <script src="js/custom.js"></script>


</body>
</html>