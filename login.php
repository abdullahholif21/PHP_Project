<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EAU project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <div class="card">
            <?php  

            session_start();
            include_once("./conf/db.php") ;
            $Username="";
            $Password="";
            if(isset($_POST["username"])){
                $Username= $_POST["username"];
                $Password= $_POST["password"];
                $sql="select * from users where username='$Username' and  password='$Password'";
               
                $result=$con->query($sql);
                if ($result->num_rows>0){
                    $items=$result->fetch_assoc();
                    $_SESSION["username"]=$items["username"];
                    $_SESSION["name"]=$items["name"];
                    $_SESSION["tel"]=$items["tel"];
                    $_SESSION["role"]="Arday";
                    header("location:list-users.php");
                }else{
                    echo "<p class='text-danger'> Fadlan hubi username ama password </p>";
                }
            }
              ?>
            <div class="card-header">
                <div class="row">
                    <div class="col-md-10">Login</div>
                    <div class="col-md-2"></div>
                </div>
            </div>
            <div class="card-body">
                <form action="login.php" method="post">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="username" class="form-label">username</label>
                                <input type="text" class="form-control" name="username" id="username" class="form-control" placeholder="enter you username">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="password" class="form-label">password</label>
                                <input type="text" class="form-control" name="password" id="password" class="form-control" placeholder="enter you password">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                           <button type="submit" class="btn btn-primary w-100">Login</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>