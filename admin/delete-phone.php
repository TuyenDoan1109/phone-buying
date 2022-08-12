<?php 

    include('../config/constants.php');

    if(isset($_GET['id']) && isset($_GET['image_name']))
    {

        $id = $_GET['id'];
        $image_name = $_GET['image_name'];

        if($image_name != "")
        {

            $path = "../images/phone/".$image_name;

            $remove = unlink($path);

            if($remove==false)
            {
                $_SESSION['upload'] = "<div class='error'>Failed to Remove Image File.</div>";
                header('location:'.SITEURL.'admin/manage-phone.php');
                die();
            }

        }

        $sql = "DELETE FROM tbl_phone WHERE id=$id";
        $res = mysqli_query($conn, $sql);

        if($res==true)
        {
            $_SESSION['delete'] = "<div class='success'>Phone Deleted Successfully.</div>";
            header('location:'.SITEURL.'admin/manage-phone.php');
        }
        else
        {
            $_SESSION['delete'] = "<div class='error'>Failed to Delete Phone!</div>";
            header('location:'.SITEURL.'admin/manage-phone.php');
        }

        

    }
    else
    {
        $_SESSION['unauthorize'] = "<div class='error'>Unauthorized Access.</div>";
        header('location:'.SITEURL.'admin/manage-phone.php');
    }

?>