<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Product filter in php</title>

    <script src="../js/jquery-1.10.2.min.js"></script>
    <script src="../js/jquery-ui.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link href="../css/jquery-ui.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../css/admin-style.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
</head>

<?php

//fetch_data.php

include('../components/connect.php');

if (isset($_POST["action"])) {
    $query = "
  SELECT * FROM products WHERE id != '0'
 ";
    if (isset($_POST["minimum_price"], $_POST["maximum_price"]) && !empty($_POST["minimum_price"]) && !empty($_POST["maximum_price"])) {
        $query .= "
   AND price BETWEEN '" . $_POST["minimum_price"] . "' AND '" . $_POST["maximum_price"] . "'
  ";
    }
    if (isset($_POST["brand"])) {
        $brand_filter = implode("','", $_POST["brand"]);
        $query .= "
   AND brand IN('" . $brand_filter . "')
  ";
    }
    if (isset($_POST["ram"])) {
        $ram_filter = implode("','", $_POST["ram"]);
        $query .= "
   AND ram IN('" . $ram_filter . "')
  ";
    }
    if (isset($_POST["processor"])) {
        $processor_filter = implode("','", $_POST["processor"]);
        $query .= "
   AND processor IN('" . $processor_filter . "')
  ";
    }
    if (isset($_POST["graphics"])) {
        $graphics_filter = implode("','", $_POST["graphics"]);
        $query .= "
   AND graphics IN('" . $graphics_filter . "')
  ";
    }

    $statement = $conn->prepare($query);
    $statement->execute();
    $result = $statement->fetchAll();
    //  print_r ($result[0]);
    $total_row = $statement->rowCount();
    $output = '';
    $qty = 1;
    if ($total_row > 0) {
        foreach ($result as $row) {

            $output .= '
            <form action="" method="post" class="box">
            <input type="hidden" name="pid" value="'.$row['id'].'">
            <input type="hidden" name="name"
                value="'.$row['brand'].' '.$row['description'].'">
            <input type="hidden" name="price" value="'.$row['price'].'">
            <input type="hidden" name="image" value="'.$row['img'].'">
            <button class="laptop-series" name="laptop-series">
                '.$row['make'].'
            </button>
            <!-- <button class="brand-label" name="brand-label">HP</button> -->

            <img onclick="window.location.href=\'quick-view.php?pid='.$row['id'].'\'"
                src="../img/'.$row['img'].'.jpg" alt="">
            <a class="link brand" href="#">
                '.$row['brand'].'
            </a>
            <div class="name" onclick="window.location.href=\'quick-view.php?pid='.$row['id'].'\'">
                '.$row['brand'].'
                '.$row['make'].'
                '.$row['img'].'
                '.$row['description'].'
            </div>
            <div class="flex">
                <div class="price"><span>₹</span>'.$row['price'].'<span>/-</span>
                </div>
                <!-- <input type="number" name="qty" class="qty" min="1" max="99"
                onkeypress="if(this.value.length == 2) return false;" value="1"> -->
            </div>
            <button type="submit" class="buy-now-btn btn btn-primary" name="update-product">
                <a href="product-update.php?update='.$row['id'].'" target="_blank">Update</a>
            </button>
            <button class="add-to-cart-btn btn btn-danger" name="delete">
                <a href="admin-index.php?delete='.$row['id'].'" onclick="return confirm(\'delete this product?\');">Delete</a>
            </button>
        </form>
                ';


        }
    } else {
        $output = '<h3>No Data Found</h3>';
    }
    echo $output;
}

?>

<script>
    function getqty(brand, make, model, desc) {
        var qty = document.querySelector('.qty').value;
        const url = 'https://wa.me/9850145588?text=I%20am%20interested%20in%20buying%20' + brand + '%20'+ make + '%20'+ model + '%20' + desc + '%20(x ' + qty + ')';
  window.open(url, '_blank');
    }
</script>


<?php
/*
'
   <div class="col-sm-4 col-lg-3 col-md-3">
    <div style="border:1px solid #ccc; border-radius:5px; padding:16px; margin-bottom:16px; height:450px;">
    <img src="img/'. $row['img'] .'.jpg' .'" alt="" class="img-responsive" >
     <p class="prod-name" align="center"><strong><a href="#">'. $row['brand'] .' ' .$row['make'] .' ' .$row['img'] .' ' .$row['description'] .'</a></strong></p>
     <h4 style="text-align:center;" class="text-danger" >₹ '. $row['price'] .'/-</h4>
     <p>Camera : '. $row['brand'].' MP<br />
     Brand : '. $row['brand'] .' <br />
     RAM : '. $row['ram'] .' GB<br />
     Storage : '. $row['ram'] .' GB </p>
    </div>

   </div>

   ';








'
   <div class="col-sm-4 col-lg-3 col-md-3">
   <div style="border:1px solid #ccc; border-radius:5px; padding:16px; margin-bottom:16px; height:450px;">
    <img src="../img/'. $row['img'] .'.jpg' .'" alt="" class="img-responsive" >
    <p align="center"><strong><a href="#">'. $row['brand']; $row['make']; $row['description'] .'</a></strong></p>
    <h4 style="text-align:center;" class="text-danger" >'. $row['price'] .'</h4>
    <p>Camera : '. $row['brand'].' MP<br />
    Brand : '. $row['brand'] .' <br />
    RAM : '. $row['ram'] .' GB<br />
    Storage : '. $row['ram'] .' GB </p>
   </div>

  </div>
   ';





'<form action="" method="post" class="box">
                            <input type="hidden" name="pid" value="$row[\'id\']">
                            <input type="hidden" name="name"
                                value="$row[\'brand\'] $row[\'description\']">
                            <input type="hidden" name="price" value="$row[\'price\']">
                            <input type="hidden" name="image" value="$row[\'img\']">
                            <button class="laptop-series" name="laptop-series">
                                $row[\'make\']
                            </button>
                            <!-- <button class="brand-label" name="brand-label">HP</button> -->

                            <img onclick="window.location.href="quick-view.php?pid=$row[\'id\']""
                                src="../img/$row[\'img\'].jpg" alt="">
                            <a class="link brand" href="#">
                                $row[\'brand\']
                            </a>
                            <div class="name" onclick="window.location.href="quick-view.php?pid=$row[\'id\']"">
                                $row[\'brand\']
                                $row[\'make\']
                                $row[\'img\']
                                $row[\'description\']
                            </div>
                            <div class="flex">
                                <div class="price"><span>₹</span>
                                    $row[\'price\']<span>/-</span>
                                </div>
                                <input type="number" name="qty" class="qty" min="1" max="99"
                                    onkeypress="if(this.value.length == 2) return false;" value="1">
                            </div>
                            <button type="submit" class="buy-now-btn btn btn-primary" name="buy-now">
                                <a href="https://wa.me/9850145588?text=I"m%20interested%20in%20buying%20$row[\'brand\']%20$row[\'description\']"
                                    target="_blank">Buy
                                    Now</a>
                            </button>
                            <button type="submit" class="add-to-cart-btn btn btn-success" name="buy-now">
                                <a href="" target="_blank">Add To Cart</a>
                            </button>
                        </form>
   ';

*/

?>