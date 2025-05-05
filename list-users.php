<?php   
include_once("./include/head.php");
include_once("./include/navbar.php");
include_once("./include/sidebar.php");
?>
  <main id="main" class="main">

<div class="pagetitle">
  <h1>Dashboard</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item active">Dashboard</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section dashboard">
<div class="container">
        <a href="register-user.php" class="btn btn-primary"> Regiser user</a>
        <div class="row">
            <table class="table table-hover table-bordered table-sm ">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>name</th>
                        <th>address</th>
                        <th>tell</th>
                        <th>Email</th>
                        <th>Reg_date</th>
                        <th>Username</th>
                        <th>actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                //  session_destroy();
                
                //  session_destroy();
                //  unset($_SESSION["username"]);
                 if(!isset($_SESSION["username"])){
                    header("location:login.php");
                }  

                    include_once("./conf/db.php");
                    $sql = "select * from users order by id desc ";
                    $result = $con->query($sql);
                    if ($result->num_rows > 0) {
                        while ($item = $result->fetch_assoc()) {
                    ?>

                            <tr>
                                <td><?php echo $item["id"];  ?></td>
                                <td><?php echo $item["name"];  ?></td>
                                <td><?php echo $item["address"];  ?></td>
                                <td><?php echo $item["tell"];  ?></td>
                                <td><?php echo $item["email"];  ?></td>
                                <td><?php echo $item["reg_date"];  ?></td>
                                <td><?php echo $item["username"];  ?></td>
                                <td>
                                    <a href="edit-users.php?id=<?php echo $item["id"];  ?>" class="btn btn-primary">edit</a>
                                    <a href="remove-users.php?id=<?php echo $item["id"];  ?>" class="btn btn-danger">delete</a>
                                </td>
                            </tr>

                    <?php   }
                    } ?>
                </tbody>
            </table>
        </div>
    </div>
</section>

</main><!-- End #main -->

    

    <?php   include_once("./include/footer.php");    ?>