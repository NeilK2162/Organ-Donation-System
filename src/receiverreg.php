<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Life After Death</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
    <link href="css/templatemo-topic-listing.css" rel="stylesheet">   
    <link rel="icon" href="images/logoX.png" type="image/x-icon" >

    <style>
        .back-button {
            position: fixed;
            top: 25px;
            left: 25px;
            width: 80px;
            background-color: white;
            border: none;
            padding: 10px;
            border-radius: 75%;
            cursor: pointer;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .back-button::before {
            content: '\276E'; /* Unicode arrow left character */
            font-size: 40px;
            font-weight: bold;
            color: black;
        }
    </style>
</head>
<body>
<a href="index.html">
    <button action="index.html" class="back-button" onclick="index.html"></button></a>
    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form action="receiver1.php" method="POST" id="signup-form" class="regform">
                        <h2 class="form-title">Receiver Registration</h2>
                        <div class="form-group">
                            <input type="text" class="form-input" name="r_id" id="r_id" maxlength="12" minlength="12" placeholder="Aadhaar Id" autocomplete="off" />
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="name" id="name" placeholder="Your Name" autocomplete="off" />
                        </div>
                        <div class="form-group">
                            <input type="Text" class="form-input" name="blood group" id="blood group" placeholder="Your Blood Group" autocomplete="off"/>
                        </div>
                        <div class="form-group">
                            <input type="Text" class="form-input" name="age" id="age" placeholder="Your Age" autocomplete="off"/>
                        </div>
                        <div class="form-group">
                            <input type="Text" class="form-input" name="gender" id="gender" placeholder="Your Gender" autocomplete="off"/>
                        </div>
                        <div class="form-group">
                          <input type="text" class="form-input" name="disease" id="disease" placeholder="Any Diseases?" autocomplete="off"/>
                      </div>
                        
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="btn custom-btn mt-2 mt-lg-3" value="Submit"/>
                        </div>
                    </form>
                    
                </div>
            </div>
        </section>

    </div>

    
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>