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
    header('location:products-table.php');
}

if (isset($_POST['update'])) {

    $pid = $_POST['pid'];
    $description = $_POST['description'];
    $brand = $_POST['brand'];
    $make = $_POST['make'];
    $ram = $_POST['ram'];
    $price = $_POST['price'];
    // $img = $_POST['img'];

    $update_product = $conn->prepare("UPDATE `products` SET description = ?, brand = ?, make = ?, ram = ?, price = ? WHERE id = ?");
    $update_product->execute([$description, $brand, $make, $ram, $price, $pid]);

    $message[] = 'product updated successfully!';
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

<body class="products-table">
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
                    <!-- <li class="nav-item"><a href="Laptop.php">Laptop</a></li> -->
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
                    <h3 class="breadcrumb-header">Venus Trading Co.</h3>
                    <!-- <ul class="breadcrumb-tree">
                        <li><a href="index.php">Home</a></li>
                        <li class="active">Laptop</li>
                    </ul> -->
                </div>

            </div>
        </div>

    </div>
    <!-- /BREADCRUMB -->
    <div class="tabular-products-container">
        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Database Id</th>
                    <th scope="col">Brand</th>
                    <th scope="col">Model</th>
                    <th scope="col">Description</th>
                    <th scope="col">Price</th>
                    <th scope="col">Image</th>
                    <th scope="col">Action</th>

                </tr>
            </thead>
            <tbody class="table-group-divider">
                <?php
                $sql_query = "SELECT * FROM products";
                $select_products = $conn->prepare($sql_query);
                $select_products->execute();
                if ($select_products->rowCount() > 0) {
                    while ($fetch_product = $select_products->fetch(PDO::FETCH_ASSOC)) {

                        ?>
                        <form method="POST" class="products-list-form">
                            <tr>
                                <th scope="row">
                                    <input type="hidden" name="pid" value="<?= $fetch_product['id']; ?>">
                                    <?= $fetch_product['id']; ?>
                                </th>

                                <td>
                                    <input type="text" size="4" name="brand" value="<?= $fetch_product['brand']; ?>">
                                </td>

                                <td>
                                    <input type="text" size="15" name="model" value="<?= $fetch_product['img']; ?>">
                                </td>

                                <td>
                                    <textarea name="description" class="list-ta" cols="80" rows="5"><?= $fetch_product['description']; ?></textarea>
                                </td>

                                <td contenteditable="true">
                                    <input type="text" size="6" name="price" value="<?= $fetch_product['price']; ?>">
                                </td>

                                <td>
                                    <img style="width:100%; height: 50%;" src="../img/<?= $fetch_product['img']; ?>.jpg" alt="">
                                </td>

                                <td>
                                    <button class="btn btn-primary"
                                        onclick="window.location.href='products-table.php?update=<?= $fetch_product['id']; ?>'; return confirm('Update This Product?');"
                                        name="update">
                                        Update
                                        <!-- <a style="text-decoration: none;" href="products-table.php?delete=<?= $fetch_product['id']; ?>" onclick="return confirm('Delete This Product?');">Delete</a> -->
                                    </button>
                                    <button class="btn btn-danger"
                                        onclick="window.location.href='products-table.php?delete=<?= $fetch_product['id']; ?>'; return confirm('Delete This Product?');"
                                        name="delete">
                                        Delete
                                        <!-- <a style="text-decoration: none;" href="products-table.php?delete=<?= $fetch_product['id']; ?>" onclick="return confirm('Delete This Product?');">Delete</a> -->
                                    </button>
                                </td>
                            </tr>
                        </form>
                        <?php


                    }
                }
                ?>

            </tbody>
        </table>
    </div>
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