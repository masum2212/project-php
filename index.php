<?php
if(isset($_POST['submit'])){
    $opening= $_POST['opening'];
    echo $opening;
    $max_value = $_POST['max-value'];
    echo $max_value;
    $min_value = $_POST['min-value'];
    echo $min_value;
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./bootstrap/bootstrap.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>


    <div class="container mt-5">
        <form action="" method="post">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th scope="col">TG</th>
                        <th scope="col">Opening</th>
                        <th scope="col">Max</th>
                        <th scope="col">Min</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    for ($i = 0; $i < 5; $i++) {
                    ?>
                        <tr>
                            <td>001</td>
                            <td>
                                <div class="col-3 input-effect">
                                    <input class="effect-19 input" type="number" placeholder="Enter Value" name="opening">
                                    <label></label>
                                    <span class="focus-border">
                                        <i></i>
                                    </span>
                                </div>
                            </td>
                            <td>
                                <div class="col-3 input-effect">
                                    <input class="effect-19 input" type="number" placeholder="Enter Value" name="max-value">
                                    <label></label>
                                    <span class="focus-border">
                                        <i></i>
                                    </span>
                                </div>
                            </td>
                            <td>
                                <div class="col-3 input-effect">
                                    <input class="effect-19 input" type="number" placeholder="Enter Value" name="min-value">
                                    <label></label>
                                    <span class="focus-border">
                                        <i></i>
                                    </span>
                                </div>
                            </td>
                            <td>
                                <div class='col-3'>
                                <button class="btn btn-raised shadow my-button w-xs indigo button" name="sumit">Submit</button>
                                <button class="btn btn-raised shadow my-button w-xs purple button">Edit</button>
                                </div>
                            </td>
                        </tr>
                    <?php
                    }

                    ?>

                </tbody>
            </table>
        </form>
    </div>





    

    <script src="./bootstrap/bootstrap.js"></script>
</body>

</html>