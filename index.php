    <?php include('partials-front/menu.php'); ?>

    <div class="banner">

    </div>

    <?php 
        if(isset($_SESSION['order']))
        {
            echo $_SESSION['order'];
            unset($_SESSION['order']);
        }
    ?>

    <!-- CAtegories Section Starts Here -->
    <section class="categories">
        <div class="container">
            <h2 class="text-center">Phones by Category</h2>

            <?php 

                $sql = "SELECT * FROM tbl_category WHERE active='Yes' AND featured='Yes' LIMIT 3";

                $res = mysqli_query($conn, $sql);

                $count = mysqli_num_rows($res);

                if($count>0)
                {

                    while($row=mysqli_fetch_assoc($res))
                    {
                        $id = $row['id'];
                        $title = $row['title'];
                        $image_name = $row['image_name'];
                        ?>
                        
                        <a href="<?php echo SITEURL; ?>category-phones.php?category_id=<?php echo $id; ?>">
                            <div class="box-3 float-container">
                                <?php 

                                    if($image_name == "")
                                    {
                                        echo "<div class='error'>Image not Available</div>";
                                    }
                                    else
                                    {
                                        ?>
                                        <img src="<?php echo SITEURL; ?>images/category/<?php echo $image_name; ?>" class="img-responsive img-curve">
                                        <?php
                                    }
                                ?>
                                

                                <h3 class="float-text"><?php echo $title; ?></h3>
                            </div>
                        </a>

                        <?php
                    }
                }
                else
                {
                    echo "<div class='error'>Category not Added.</div>";
                }
            ?>

            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Categories Section Ends Here -->



    <!-- Phone Section Starts Here -->
    <section class="phone-menu">
        <div class="container">
            <h2 class="text-center">Phone Menu</h2>

            <?php 
            
            $sql2 = "SELECT * FROM tbl_phone WHERE active='Yes' AND featured='Yes' LIMIT 6";

            $res2 = mysqli_query($conn, $sql2);

            $count2 = mysqli_num_rows($res2);

            if($count2>0)
            {
                while($row=mysqli_fetch_assoc($res2))
                {
                    $id = $row['id'];
                    $title = $row['title'];
                    $price = $row['price'];
                    $description = $row['description'];
                    $image_name = $row['image_name'];
                    ?>

                    <div class="phone-menu-box">
                        <div class="phone-menu-img">
                            <?php 

                                if($image_name=="")
                                {
                                    echo "<div class='error'>Image not available.</div>";
                                }
                                else
                                {
                                    ?>
                                    <img src="<?php echo SITEURL; ?>images/phone/<?php echo $image_name; ?>" class="img-responsive img-curve">
                                    <?php
                                }
                            ?>
                            
                        </div>

                        <div class="phone-menu-desc">
                            <h4><?php echo $title; ?></h4>
                            <p class="phone-price">$<?php echo $price; ?></p>
                            <p class="phone-detail">
                                <?php echo $description; ?>
                            </p>
                            <br>

                            <a href="<?php echo SITEURL; ?>order.php?phone_id=<?php echo $id; ?>" class="btn btn-primary">Buy Now</a>
                        </div>
                    </div>

                    <?php
                }
            }
            else
            {
                echo "<div class='error'>Phone not available.</div>";
            }
            
            ?>

            

 

            <div class="clearfix"></div>

            

        </div>

        <p class="text-center">
            <a href="#">See All Phones</a>
        </p>
    </section>
    <!-- Phone Section Ends Here -->

    
    <?php include('partials-front/footer.php'); ?>