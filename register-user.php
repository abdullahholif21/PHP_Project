<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user_registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <form action="" method="post">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name" class="form-label">name</label>
                        <input type="text" class="form-control" name="name" id="name"><br>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="address" class="form-label" >address</label>
                        <input type="text" class="form-control" name="address" id="address"><br>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="tell" class="form-label">tell</label>
                        <input type="number" class="form-control" name="tell" id="tell"><br>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="email" class="form-label" >email</label>
                        <input type="text" class="form-control" name="email" id="email"><br>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="reg_date" class="form-label">reg_date</label>
                        <input type="date" class="form-control" name="reg_date" id="reg_date"><br>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="username" class="form-label" >username</label>
                        <input type="text" class="form-control" name="username" id="username"><br>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="Password" class="form-label">Password</label>
                        <input type="passowrd" class="form-control" name="Password" id="Password"><br>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                  
                    </div>
                </div>
            </div>
                <div class="row">
                    <div class="col-md-8"></div>
                    <div class="col-md-4">
                        <button type="submit" class="btn btn-primary w-100">Save</button>
                    </div>
                </div>
            <?php

            function clearitems($value)
            {
                $value = trim($value);
                $value = stripslashes($value);
                $value = htmlspecialchars($value);

                return $value;
            }

            if (isset($_POST["name"])) {
                if (!empty($_POST["name"])) {
                    $name = clearitems($_POST["name"]);
                } else {
                    echo "fadlan wxa buuxis magaca";
                }


                if (!empty($_POST["address"])) {
                    $address = clearitems($_POST["address"]);
                } else {
                    echo "fadlan wxa buuix - address";
                }


                if (!empty($_POST["tell"])) {

                    $tell = clearitems($_POST["tell"]);
                } else {
                    echo "fadlan wxa buuix - tell";
                }

                $email = clearitems($_POST["email"]);
                $reg_date = clearitems($_POST["reg_date"]);
                $Username = clearitems($_POST["username"]);
                $passsowrd = md5(clearitems($_POST["Password"]));

                include("conf/db.php");
                $sql = "insert into users(name,address,tell,email,
                 reg_date,username,PASSWORD)
        values ('$name','$address','$tell','$email',
               '$reg_date','$Username','$passsowrd')";
                if ($con->query($sql) == true) {
                } else {
                    echo "cilad " . $con->error;
                }
            }
            ?>
        </form>
    </div>

</body>

</html>