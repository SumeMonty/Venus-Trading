<?php

include '../components/connect.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
   header('location:admin-login.php');
}


if (isset($_POST['add_product'])) {
    // var_dump($_POST);
    $description = $_POST['description'];
    $brand = $_POST['brand'];
    $price = $_POST['price'];
    $ram = $_POST['ram'];
    $make = $_POST['make'];
    $image = $_POST['fotu'];

    // $image = $_FILES['img']['name'];
    // $image = filter_var($image, FILTER_SANITIZE_STRING);
    // $image_size = $_FILES['image']['size'];
    // $image_tmp_name = $_FILES['image']['tmp_name'];
    // $image_folder = '../img/'.$image;

    $select_products = $conn->prepare("SELECT * FROM `products` WHERE description = ?");
    $select_products->execute([$description]);

    if ($select_products->rowCount() > 0) {
        $message[] = 'product name already exist!';
    } else {

        $insert_products = $conn->prepare("INSERT INTO `products`(description, brand, price, img, ram, make) VALUES(?,?,?,?,?,?)");
        $insert_products->execute([$description, $brand, $price, $image, $ram, $make]);

    }

}
;

if (isset($_GET['delete'])) {

    $delete_id = $_GET['delete'];
    // $delete_product_image = $conn->prepare("SELECT * FROM `products` WHERE id = ?");
    // $delete_product_image->execute([$delete_id]);
    // $fetch_delete_image = $delete_product_image->fetch(PDO::FETCH_ASSOC);
    // unlink('../img/' . $fetch_delete_image['img']);
    $delete_product = $conn->prepare("DELETE FROM `products` WHERE id = ?");
    $delete_product->execute([$delete_id]);
    // $delete_cart = $conn->prepare("DELETE FROM `cart` WHERE pid = ?");
    // $delete_cart->execute([$delete_id]);
    // $delete_wishlist = $conn->prepare("DELETE FROM `wishlist` WHERE pid = ?");
    // $delete_wishlist->execute([$delete_id]);
    header('location:admin-index.php');
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Venus Trading</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

    <!-- Bootstrap -->
    <!-- <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" /> -->
    <link type="text/css" rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" />

    <!-- Slick -->
    <link type="text/css" rel="stylesheet" href="css/slick.css" />
    <link type="text/css" rel="stylesheet" href="css/slick-theme.css" />

    <!-- nouislider -->
    <link type="text/css" rel="stylesheet" href="css/nouislider.min.css" />

    <!-- Font Awesome Icon -->
    <!-- <link rel="stylesheet" href="css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="../css/admin-style.css" />
    <link type="text/css" rel="stylesheet" href="../css/style.css" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
           <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
           <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
         <![endif]-->

</head>

<body>
    <!-- HEADER -->
    <?php
    include 'admin-header.php';
    ?>
    <!-- /HEADER -->

    <!-- NAVIGATION -->
    <nav id="navigation">
        <!-- container -->
        <div class="container laptop-container">
            <!-- responsive-nav -->
            <div id="responsive-nav">
                <!-- NAV -->
                <ul class="main-nav nav nav-pills navigator">
                    <li class="nav-item active"><a href="">Home</a></li>
                    <li class="nav-item"><a href="products-table.php">Table</a></li>
                    <!-- <li class="nav-item"><a href="contact.php">Contact</a></li> -->
                </ul>
                <!-- /NAV -->
            </div>
            <!-- /responsive-nav -->
            <!-- responsive-nav -->
            <div id="responsive-nav-brand">
                <!-- NAV -->
                <form method="POST">

                    <input type="submit" value="asus" id="asus-btn" name="asus-btn" style="display:none;">
                    <label for="asus-btn" style="cursor: pointer;">
                        <img src="../img/asus_logo.png" width="75px" alt="">
                    </label>
                    <input type="submit" value="hp" id="hp-btn" name="hp-btn" style="display:none;">
                    <label for="hp-btn" style="cursor: pointer;">
                        <img src="../img/hp_logo.png" width="75px" alt="">
                    </label>
                    <input type="submit" value="acer" id="acer-btn" name="acer-btn" style="display:none;">
                    <label for="acer-btn" style="cursor: pointer;">
                        <img src="../img/acer_logo.png" width="70px" alt="">
                    </label>
                    <input type="submit" value="dell" id="dell-btn" name="dell-btn" style="display:none;">
                    <label for="dell-btn" style="cursor: pointer;">
                        <img src="../img/dell_logo.png" width="50px" style="margin-left: 10px;" alt="">
                    </label>
                </form>

                <!-- /NAV -->
                <!-- </div> -->
                <!-- /responsive-nav -->
            </div>
        </div>
        <!-- /container -->
    </nav>
    <!-- /NAVIGATION -->


    <!-- BREADCRUMB -->
    <div id="breadcrumb" class="lap-breadcrumb" class="section">

        <div class="container">

            <div class="row">
                <div class="col-md-12">
                <h3 class="breadcrumb-header"><span>V</span>enus <span>T</span>rading <span>C</span>o. <span>Hello <?php $retrieve_user = $conn->prepare("SELECT name FROM admins WHERE id = ?"); $retrieve_user->execute([$_SESSION['admin_id']]); $username = $retrieve_user->fetchAll(); echo($username[0][0]); ?> 👋</span></h3>
                    <!-- <ul class="breadcrumb-tree">
                        <li><a href="index.php">Home</a></li>
                        <li class="active">Laptop</li>
                    </ul> -->
                </div>

            </div>
        </div>

    </div>
    <!-- /BREADCRUMB -->
    <?php

include 'testadminindex.php';

?>
    <!-- FOOTER -->
    <?php
    include '../components/footer.php'
        ?>
    <!-- /FOOTER -->

    <!-- jQuery Plugins -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- <script src="js/bootstrap.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/nouislider.min.js"></script>
    <script src="js/jquery.zoom.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>