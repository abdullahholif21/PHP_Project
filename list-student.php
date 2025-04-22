<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>
<body>
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
            include_once("./conf/db.php");
            $sql="select * from users order by id desc ";
            $result=$con->query($sql);
            if($result->num_rows>0){
                while($item=$result->fetch_assoc()){
            ?>
           
               <tr>
               <td><?php   echo $item["id"] ;  ?></td>
                <td><?php   echo $item["name"] ;  ?></td>
                <td><?php   echo $item["address"] ;  ?></td>
                <td><?php   echo $item["tell"] ;  ?></td>
                <td><?php   echo $item["email"] ;  ?></td>
                <td><?php   echo $item["reg_date"] ;  ?></td>
                <td><?php   echo $item["username"] ;  ?></td>
                <td> <a href="" class="btn btn-primary">edit</a>
                <a href="" class="btn btn-danger">delete</a> </td>
               </tr>

               <?php   }}?>
            </tbody>
        </table>
    </div>
</div>    
</body>
</html>