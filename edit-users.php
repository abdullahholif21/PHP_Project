<?php   
include_once("./include/head.php");
include_once("./include/navbar.php");
include_once("./include/sidebar.php");
?>

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      
    </div><!-- End Page Title -->

    <section class="section dashboard">
    <div class="card p-3">
        <?php 
        // session_start();
        if(!isset($_SESSION["username"])){
         header("location:login.php");
        }
      
           
        include_once("./conf/db.php");
        include_once("./conf/functions.php");

        if(isset($_GET["id"])){
            $id=$_GET["id"];
        $sql="select * from users where id=$id";
        $result=$con->query($sql);
        if ($result->num_rows>0){
                 $items=$result->fetch_assoc();
                 $name = clearitems($items["name"]);
                 $address=$items["address"];
                 $tell = $items["tell"];
                 $email = clearitems($items["email"]);
                 $reg_date = clearitems($items["reg_date"]);
                 $Username = clearitems($items["username"]);
                
        }

        }
        
        if (isset($_POST["name"])){
            if (!empty($_POST["name"])) {
                $name = clearitems($_POST["name"]);
            } else {
                echo "fadlan wxa buuxis magaca";
            }
            $id = clearitems($_POST["id"]);

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
            $Username = clearitems($_POST["Username"]);
           
   $sql="
update users set name='$name',address='$address',tell='$tell'
,email='$email',username='$Username' where id=$id";
if($con->query($sql)==true){
    header("location:list-users.php");
}       else{
    echo "cilad aya dhacady";
}


}
        
        ?>
        <div class="card-header">
            <div class="row">

            <div class="col-md-10">
                <h4 class="card-title">Edit users</h4>
            </div>
            <div class="col-md-2">
                 <a class="btn btn-primary w-100" href="list-users.php"> back</a> 
                </div>
            </div>
        </div>
        <div class="card-body">
            <form action="" method="post">

                <div class="row">
                    <div class="col-md-6">

                        <div class="form-group">
                            <input type="hidden" value="<?php  echo $id   ?>" name="id">
                            <label for="name">name</label>
                            <input type="text"  value="<?php  echo $name   ?>"  name="name" id="name" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">

                        <div class="form-group">
                            <label for="address">address</label>
                            <input type="text" value="<?php  echo $address   ?>"  name="address" id="address" class="form-control">
                        </div>
                    </div>


                </div>
                <div class="row">
                    <div class="col-md-6">

                        <div class="form-group">
                            <label for="tell">tell</label>
                            <input type="number"  value="<?php  echo $tell   ?>" name="tell" id="tell" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">

                        <div class="form-group">
                            <label for="email">email</label>
                            <input type="email" name="email"  value="<?php  echo $email  ?>" id="email" class="form-control">
                        </div>
                    </div>


                </div>
                <div class="row">
                    <div class="col-md-6">

                        <div class="form-group">
                            <label for="reg_date">reg_date</label>
                            <input type="date" value="<?php  echo $reg_date  ?>"  name="reg_date" id="reg_date" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3">

                        <div class="form-group">
                            <label for="Username">username</label>
                            <input type="text" value="<?php  echo $Username   ?>" name="Username" id="Username" class="form-control">
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6"></div>
                        <div class="col-md-3">
                            <button type="reset" class="btn btn-primary  w-100">reset</button>
                        </div>
                        <div class="col-md-3">
                            <button type="submit" class="btn btn-primary  w-100">Edit</button>
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </div>

    </section>

  </main><!-- End #main -->




<?php   include_once("./include/footer.php");    ?>
  