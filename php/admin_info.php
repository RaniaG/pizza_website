<?php

    $q="update info set phone= '".$_POST['phone']."', Address= '".$_POST['Address'].", Email= '".$_POST['Email']."' where ID=1";
    require("php/db_connect.php");
    $conn=db_connect();
    mysqli_query($conn,$q);
    header('Location: ../admin_info.html')
?>