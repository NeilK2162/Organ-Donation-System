<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Life After Death</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="icon" href="images/logoX.png" type="image/x-icon" >
    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form action="organreg.php" method="POST" id="signup-form" class="regform">
                        <h2 class="form-title"> Organ</h2>
                        <div class="form-group">
                            <input type="text" class="form-input" name="o_id" id="o_id" placeholder="Organ Id" autocomplete="off" />
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="d_id" id="d_id" placeholder="Donor Id" autocomplete="off" />
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="name" id="name" placeholder="Organ Name" autocomplete="off"/>
                        </div>

                        
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Submit"/>
                        </div>
                    </form>
                    
                </div>
            </div>
        </section>

    </div>

    
</body>
</html>