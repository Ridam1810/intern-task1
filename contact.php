<?php
include "init.php";
error_reporting(E_ERROR | E_PARSE);
if (!isset($_SESSION['username'])) {
  header("Location: login.php");
}

?>


<html>

<head>
    <title>Home</title>
    <meta name="viewpost" content="width=device-width, initial-scale=1.0" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style/css_responsive.css">
</head>

<body>
    <!-- navbar -->
    <?php
    include 'splitfile/navbar.php';

    if (!empty($_SESSION['delete_user'])) {
        // echo $_SESSION['delete_user'];
    }

    ?>





    <div class="container-fluid">
        <div class="container">
<div style="border: 5px; padding: 5px; margin-top: 15px; margin-bottom:15px;"><center>
<form class="example" action="/action_page.php">
  <input type="text" placeholder="Search.." name="search" class="rounded" style="padding:5px; ">
  <button type="submit" style="padding:5px; color:red;">Search</button>
</form>      
</center></div>

            <table class="table table-hover">
                
                <thead>
                    <tr>
                        <th class="col-1">ID</th>
                        <th class="col-3">Designation</th>
                        <th class="col-3">name</th>
                        <th class="col-3">Email</th>
                        

                    </tr>
                </thead>
                <tbody>
                <?php
                    $query = $source->Query("SELECT * FROM `users` WHERE utype=0 ");
                    $details = $source->FetchAll();
                    $numrow = $source->CountRows();

                    if ($numrow > 0) {
                        foreach ($details as $row) :

                    ?>
                            <tr>
                                <td><?php echo $row->id; ?></td>
                                <td><?php echo "Admin"; ?></td>
                                <td><?php echo $row->name; ?></td>
                                <td><?php echo $row->email; ?></td>
                                




                                <?php echo "<td> 
                 <a href='message.php?id=" . $row->id . "' class='.btn-sm btn-outline-info mr-2'>Send Message</a>"."  "."<a href='delete.php?deleteuser=" . $row->id . "' class='.btn-sm btn-outline-danger mr-2'></a> </td>
                </tr>"; ?>

                             
                        <?php

                        endforeach;
                    }
                        ?>
                         <?php
                    $query = $source->Query("SELECT * FROM `users` WHERE utype=1");
                    $details = $source->FetchAll();
                    $numrow = $source->CountRows();

                    if ($numrow > 0) {
                        foreach ($details as $row) :

                    ?>
                            <tr>
                                <td><?php echo $row->id; ?></td>
                                <td><?php echo "Doctor"; ?></td>
                                <td><?php echo $row->name; ?></td>
                                <td><?php echo $row->email; ?></td>
                                




                                <?php echo "<td> 
                 <a href='message.php?id=" . $row->id . "' class='.btn-sm btn-outline-info mr-2'>Send Message</a>"."  "."<a href='delete.php?deleteuser=" . $row->id . "' class='.btn-sm btn-outline-danger mr-2'></a> </td>
                </tr>"; ?>

                             
                        <?php

                        endforeach;
                    }
                        ?>
                </tbody>
            </table>
        </div>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>












