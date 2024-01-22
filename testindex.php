<?php

//index.php

include('components/connect.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Product filter in php</title>

    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="css/jquery-ui.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Page Content -->
    <div class="user-interface">
        <div class="row">
            <br />
            <br />
            <div class="col-md-3">
                <div class="list-group">
                    <h3>Price</h3>
                    <input type="hidden" id="hidden_minimum_price" value="20000" />
                    <input type="hidden" id="hidden_maximum_price" value="65000" />
                    <p id="price_show">20000 - 65000</p>
                    <div id="price_range"></div>
                </div>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h1 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Brand
                            </button>
                        </h1>
                        <div id="collapseOne" class="accordion-collapse collapse show"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">

                                <div class="list-group">
                                    <!-- <h3>Brand</h3> -->
                                    <div style="height: 180px; overflow-y: auto; overflow-x: hidden;">
                                        <?php

                                        $query = "SELECT DISTINCT(brand) FROM products WHERE id != '0' ORDER BY id DESC";
                                        $statement = $conn->prepare($query);
                                        $statement->execute();
                                        $result = $statement->fetchAll();
                                        foreach ($result as $row) {
                                            ?>
                                            <div class="list-group-item checkbox">
                                                <label><input type="checkbox" class="common_selector brand"
                                                        value="<?php echo $row['brand']; ?>">
                                                    <?php echo $row['brand']; ?>
                                                </label>
                                            </div>
                                            <?php
                                        }

                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h1 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                Ram
                            </button>
                        </h1>
                        <div id="collapseTwo" class="accordion-collapse collapse show"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">

                                <div class="list-group">

                                    <?php

                                    $query = "
                    SELECT DISTINCT(ram) FROM products WHERE id != '0' ORDER BY ram DESC
                    ";
                                    $statement = $conn->prepare($query);
                                    $statement->execute();
                                    $result = $statement->fetchAll();
                                    foreach ($result as $row) {
                                        ?>
                                        <div class="list-group-item checkbox">
                                            <label><input type="checkbox" class="common_selector ram"
                                                    value="<?php echo $row['ram']; ?>">
                                                <?php echo $row['ram']; ?> GB
                                            </label>
                                        </div>
                                        <?php
                                    }

                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>




                </div>

            </div>
            <div class="col-md-9">
                <br />
                <div class="row filter_data">

                </div>
            </div>

        </div>
    </div>
    <style>
        #loading {
            text-align: center;
            background: url('loader.gif') no-repeat center;
            height: 150px;
        }
    </style>

    <script>
        $(document).ready(function () {

            filter_data();

            function filter_data() {
                $('.filter_data').html('<div id="loading" style="" ></div>');
                var action = 'fetch_data';
                var minimum_price = $('#hidden_minimum_price').val();
                var maximum_price = $('#hidden_maximum_price').val();
                var brand = get_filter('brand');
                var ram = get_filter('ram');
                var storage = get_filter('storage');
                $.ajax({
                    url: "fetch_data.php",
                    method: "POST",
                    data: { action: action, minimum_price: minimum_price, maximum_price: maximum_price, brand: brand, ram: ram, storage: storage },
                    success: function (data) {
                        $('.filter_data').html(data);
                    }
                });
            }

            function get_filter(class_name) {
                var filter = [];
                $('.' + class_name + ':checked').each(function () {
                    filter.push($(this).val());
                });
                return filter;
            }

            $('.common_selector').click(function () {
                filter_data();
            });

            $('#price_range').slider({
                range: true,
                min: 20000,
                max: 65000,
                values: [20000, 65000],
                step: 500,
                stop: function (event, ui) {
                    $('#price_show').html(ui.values[0] + ' - ' + ui.values[1]);
                    $('#hidden_minimum_price').val(ui.values[0]);
                    $('#hidden_maximum_price').val(ui.values[1]);
                    filter_data();
                }
            });

        });
    </script>

</body>

</html>