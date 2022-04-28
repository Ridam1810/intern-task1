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

    if (!empty($_SESSION['delete_user'])) {
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
                        <th class="col-1">Action</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = $source->Query("SELECT * FROM guest");
                    $details = $source->FetchAll();
                    $numrow = $source->CountRows();

                    if ($numrow > 0) {
                        foreach ($details as $row) :

                    ?>
                            <tr>
                                <td><?php echo $row->id; ?></td>
                                <td><?php echo $row->fullname; ?></td>
                                <td><?php echo $row->email; ?></td>
                                <td><?php echo $row->phone; ?></td>
                                <td><?php echo $row->address; ?></td>
                                <td><?php echo $row->ptype; ?></td>
                                <td><?php echo $row->message; ?></td>
                                <td><img src="Uploads/<?php echo $row->file; ?>" height=100px width=80px></td>






                                <?php echo "<td> 
                 <a href='response.php?id=" . $row->id . "' class='.btn-sm btn-outline-info mr-2'>Response</a>"."  "."<a href='deleteguest.php?deleteuser=" . $row->id . "' class='.btn-sm btn-outline-danger mr-2'>Delete</a> </td>
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