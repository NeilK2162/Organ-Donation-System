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
                            <li class="nav-item <?php echo basename($_SERVER['PHP_SELF']) == 'hospitalreg.php' ? 'active' : ''; ?>">
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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
</head>
<body>

    

        
            <!-- <img src="images/hospital.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form action="hospitalreg1.php" method="POST" id="signup-form" class="regform">
                        <h2 class="form-title">Hospital Registration</h2>
                        <div class="form-group">
                            <input type="text" class="form-input" name="h_id" id="h_id" placeholder="Your Id" autocomplete="off" />
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="name" id="name" placeholder="Your Name" autocomplete="off" />
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" maxlength="10" minlength="10" name="phone" id="phone" placeholder="Your Phone" autocomplete="off"/>
                        </div>
                        
                        <div class="form-group">
                          <textarea class="form-input" name="addr" id="addr" placeholder="Your Address" autocomplete="off"></textarea>
                      </div>
                      <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Submit"/>
                        </div>
                       
                    </form>
                    
                </div>
            </div>
        

            <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/jquery.sticky.js"></script>
        <script src="js/click-scroll.js"></script>
        <script src="js/custom.js"></script>


    
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
