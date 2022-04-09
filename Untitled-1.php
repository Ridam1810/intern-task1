<?php
include "init.php";

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

    if(!empty($_SESSION['delete_user'])){
        // echo $_SESSION['delete_user'];
    }
    
    ?>




    <div class="container-fluid">
        <div class="container">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th class="col-1">ID</th>
                        <th class="col-1">Name</th>
                        <th class="col-1">Email</th>
                        <th class="col-1">Phone</th>
                        <th class="col-1">Address</th>
                        <th class="col-1">Problem type</th>
                        <th class="col-1">message</th>
                        <th class="col-1">picture</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = $source->Query("SELECT * FROM guest");
                    $details = $source->FetchAll();
                    $numrow = $source->CountRows();

                    if ($numrow > 0) {
                        foreach ($details as $row) :

                            echo "
                <tr>
                <td>" . $row->id . "</td>
                <td>" . $row->fullname . "</td>
                <td>" . $row->email . "</td>
                <td>" . $row->phone . "</td>
                <td>" . $row->address . "</td>
                <td>" . $row->ptype . "</td>
                <td>" . $row->message . "</td>
                <td>" . $row->file . "</td>


                



                <td>  
                 <a href='deleteguest.php?deleteuser=".$row->id."' class='.btn-sm btn-outline-danger mr-2'>Delete</a> </td>
                </tr>";

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



SMTP=smtp.gmail.com
smtp_port=587
sendmail_from = mail@gmail.com
sendmail_path = "\"C:\xampp\sendmail\sendmail.exe\" -t"