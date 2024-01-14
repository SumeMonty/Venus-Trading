<?php

include '../components/connect.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if (!isset($admin_id)) {
    header('location:admin_login.php');
}


if (isset($_POST['update'])) {

    $pid = $_POST['pid'];
    $description = $_POST['description'];
    $brand = $_POST['brand'];
    $make = $_POST['make'];
    $ram = $_POST['ram'];
    $price = $_POST['price'];
    $img = $_POST['img'];

    $update_product = $conn->prepare("UPDATE `products` SET description = ?, brand = ?, make = ?, ram = ?, price = ?, img = ? WHERE id = ?");
    $update_product->execute([$description, $brand, $make, $ram, $price, $img, $pid]);

    $message[] = 'product updated successfully!';

    // $old_image_01 = $_POST['old_image_01'];
    // $image_01 = $_FILES['image_01']['name'];
    // $image_01 = filter_var($image_01, FILTER_SANITIZE_STRING);
    // $image_size_01 = $_FILES['image_01']['size'];
    // $image_tmp_name_01 = $_FILES['image_01']['tmp_name'];
    // $image_folder_01 = '../img/' . $image_01;

    // if (!empty($image_01)) {
    //     if ($image_size_01 > 2000000) {
    //         $message[] = 'image size is too large!';
    //     } else {
    //         $update_image_01 = $conn->prepare("UPDATE `products` SET image_01 = ? WHERE id = ?");
    //         $update_image_01->execute([$image_01, $pid]);
    //         move_uploaded_file($image_tmp_name_01, $image_folder_01);
    //         unlink('../img/' . $old_image_01);
    //         $message[] = 'image 01 updated successfully!';
    //     }
    // }
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

    <section class="update-product">

<h1 class="heading">update product</h1>

<?php
   $update_id = $_GET['update'];
   $select_products = $conn->prepare("SELECT * FROM `products` WHERE id = ?");
   $select_products->execute([$update_id]);
   if($select_products->rowCount() > 0){
      while($fetch_product = $select_products->fetch(PDO::FETCH_ASSOC)){ 
?>
<form action="" method="post" enctype="multipart/form-data">
   <input type="hidden" name="pid" value="<?= $fetch_product['id']; ?>">
   <input type="hidden" name="old_image_01" value="<?= $fetch_product['img']; ?>">
   <div class="image-container">
      <div class="main-image">
         <img src="../img/<?= $fetch_product['img']; ?>.jpg" alt="">
      </div>

   </div>
   <span>update Brand</span>
   <input type="text" name="brand" required class="box" maxlength="100" placeholder="enter product name" value="<?= $fetch_product['brand']; ?>">
   <span>update Make</span>
   <input type="text" name="make" required class="box" maxlength="100" placeholder="enter product name" value="<?= $fetch_product['make']; ?>">
   <span>update Ram</span>
   <input type="text" name="ram" required class="box" maxlength="100" placeholder="enter product name" value="<?= $fetch_product['ram']; ?>">
   <span>update Description</span>
   <textarea name="description" class="box" required cols="30" rows="10"><?= $fetch_product['description']; ?></textarea>
   <span>update Price</span>
   <input type="number" name="price" required class="box" min="0" max="9999999999" placeholder="enter product price" onkeypress="if(this.value.length == 10) return false;" value="<?= $fetch_product['price']; ?>">
   <span>update Image</span>
   <input type="text" name="img" value="<?= $fetch_product['img']; ?>" class="box">
   <div class="flex-btn">
      <input type="submit" name="update" class="btn" value="update">
      <a href="admin-index.php" class="option-btn">go back</a>
   </div>
</form>

<?php
      }
   }else{
      echo '<p class="empty">no product found!</p>';
   }
?>

</section>


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