<?php
    $ip = "";
    $isSubmit = isset($_POST['submit']);

    if ($isSubmit) {
        $ip = $_POST['ip'];
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <div class="container my-5">
        <div class="card container">
            <div class="row m-5">
                <div class="col">
                    <form action="index.php" method="POST">
                        <div class="row">
                            <div class="col-8">
                                <input type="text" name="ip" class="form-control" value="<?php echo $ip; ?>">
                            </div>
                            <div class="col-3">
                                <input class="btn btn-primary w-100" name="submit" type="submit">
                            </div>

                        </div>

                    </form>
                </div>


            </div>
        </div>

        <div class="card container mt-5 p-5 text-danger">
            <pre>
                <?php
                    if ($isSubmit) {
                        // Determine OS and execute the ping command.
                        if (stristr(php_uname('s'), 'Windows NT')) {
                            // Windows
                            passthru('ping  ' . $ip);
                        } else {
                            // *nix
                            passthru('ping  -c 4 ' . $ip);
                        }
                    }
                ?>
            </pre>
            
        </div>
    </div>
</body>

</html>
