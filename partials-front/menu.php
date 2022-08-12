<?php include('config/constants.php'); ?>

<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phone buying Website</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- Navbar Section Starts Here -->
    <section class="navbar">
        <div class="container">
            <div class="logo">
                <a href="<?php echo SITEURL; ?>">
                    <img src="images/logo-DTV.png" class="img-responsive">
                </a>
            </div>

            <div class="menu">
                <ul>
                    <li>
                        <a href="<?php echo SITEURL; ?>">Home</a>
                    </li>
                    <li>
                        <a href="<?php echo SITEURL; ?>categories.php">Categories</a>
                    </li>
                    <li>
                        <a href="<?php echo SITEURL; ?>phones.php">Phones</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </div>

            <div class="search-bar">
                <form action="<?php echo SITEURL; ?>phone-search.php" method="POST">
                    <input type="search" name="search" placeholder="Search for Phone.." required>
                    <input type="submit" name="submit" value="Search" class="btn btn-primary">
                </form>
            </div>

            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Navbar Section Ends Here -->