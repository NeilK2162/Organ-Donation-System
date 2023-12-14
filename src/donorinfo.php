<?php
include "config.php";

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con, "SELECT * FROM donor");

?>
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
        <link rel="icon" href="images/logoX.png" type="image/x-icon" >
        <link href="css/templatemo-topic-listing.css" rel="stylesheet">  
        
        <style>       
        img {
            height: 90px; /* Adjust the height as needed */
            width: auto; /* Maintain aspect ratio */
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
                                <a class="nav-link click-scroll" href="donorinfo.php">Donor Info</a>
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
    
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="orderby.php">Hospital Order</a>
                            </li>

                            
                        </ul>

                        <div class="d-none d-lg-block">
                            <a href="index.html" class="navbar-icon bi-person smoothscroll"></a>
                        </div>
                    </div>
                </div>
            </nav>
    </main>
    </body>
    </html>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Donor Information</title>
    <style>
        h1 {
            font-size: 30px;
            color: #fff;
            text-transform: uppercase;
            font-weight: 350;
            text-align: center;
            margin-bottom: 15px;
        }

        table {
            width: 80%;
            table-layout: fixed;
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
        

        body {
            background: -webkit-linear-gradient(left, #25c481, #25b7c4);
            background: linear-gradient(to right, #25c481, #25b7c4);
            font-family: 'Roboto', sans-serif;
        }

        section {
            margin: 50px;
        }

        /* for custom scrollbar for webkit browser*/
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

<body>
    <section>
        <h1>Donor Information</h1>
        <center>
            <table border='0'>
                <tr>
                    <th>Donor ID</th>
                    <th>Donor Name</th>
                    <th>Blood Group</th>
                    <th>Age</th>
                    <th>Gender</th>
                    <th>Disease</th>
                </tr>
                <?php
                while ($row = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['D_id'] . "</td>";
                    echo "<td>" . $row['D_name'] . "</td>";
                    echo "<td>" . $row['D_bloodgroup'] . "</td>";
                    echo "<td>" . $row['D_age'] . "</td>";
                    echo "<td>" . $row['D_gender'] . "</td>";
                    echo "<td>" . $row['Disease'] . "</td>";
                    echo "</tr>";
                }
                ?>
            </table>
        </center>
    </section>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="js/index.js"></script>
    <!-- JAVASCRIPT FILES -->
    <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/jquery.sticky.js"></script>
        <script src="js/click-scroll.js"></script>
        <script src="js/custom.js"></script>

</body>

</html>

<?php
mysqli_close($con);
?>
