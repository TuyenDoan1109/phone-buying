
    <?php include('partials-front/menu.php'); ?>

    <!-- Phone Section Starts Here -->
    <section class="phone-search text-center">
        <div class="container">
            <?php 

                $search = mysqli_real_escape_string($conn, $_POST['search']);
            
            ?>

            <h2>Your Search: <a href="#" class="text-white">"<?php echo $search; ?>"</a></h2>

        </div>
    </section>
    <!-- Phone Section Ends Here -->



    <!-- Phone Section Starts Here -->
    <section class="phone-menu">
        <div class="container">
            <h3 class="text-center">What we found: </h3>

            <?php 

                $sql = "SELECT * FROM tbl_phone WHERE title LIKE '%$search%' OR description LIKE '%$search%'";
                $res = mysqli_query($conn, $sql);
                $count = mysqli_num_rows($res);

                if($count>0)
                {
                    while($row=mysqli_fetch_assoc($res))
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
                                        echo "<div class='error'>Image not Available.</div>";
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
                    echo "<div class='error'>Phone not found.</div>";
                }
            
            ?>

            

            <div class="clearfix"></div>

            

        </div>

    </section>
    <!-- Phone Section Ends Here -->

    <?php include('partials-front/footer.php'); ?>