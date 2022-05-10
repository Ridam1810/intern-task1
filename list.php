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
            <div style="border: 5px; padding: 5px; margin-top: 15px; margin-bottom:15px;">
                <center>
                    <form class="example" action=" " method="post">
                        <input type="text" placeholder="Search.." name="keyword" class="rounded" style="padding:5px; ">
                        <button type="submit" name="submit" value="submit" style="padding:5px; color:red;">Search</button>
                    </form>
                </center>
            </div>

            <table class="table table-hover">

                <thead>
                    <tr>
                        <th class="col-1">ID</th>
                        <th class="col-2">Name</th>
                        <th class="col-1">SurName</th>
                        <th class="col-1">Email</th>
                        <th class="col-1">Date</th>
                        <th class="col-1">Gender</th>
                        <th class="col-2">Address</th>
                        <th class="col-1">Speciality</th>
                        <th class="col-1">Picture</th>


                    </tr>
                </thead>
                <tbody>
                    <?php

                    if (!isset($_POST['submit'])) {
                        $query = $source->Query("SELECT * FROM `users` WHERE utype=1");
                        $details = $source->FetchAll();
                        $numrow = $source->CountRows();

                        if ($numrow > 0) {
                            foreach ($details as $row) :

                    ?>
                                <tr>
                                    <td><?php echo $row->id; ?></td>
                                    <td><?php echo $row->name; ?></td>
                                    <td><?php echo $row->surname; ?></td>
                                    <td><?php echo $row->email; ?></td>
                                    <td><?php echo $row->date; ?></td>
                                    <td><?php echo $row->gender; ?></td>
                                    <td><?php echo $row->address; ?></td>
                                    <td><?php echo $row->ptype; ?></td>
                                    <td><img src="Uploads/<?php echo $row->file; ?>" height=100px width=80px></td>




                                    <?php if ($_SESSION['utype'] == 0) {
                                        echo "<td> 
                 <a href='Edit.php?id=" . $row->id . "' class='.btn-sm btn-outline-info mr-2'>Edit</a>" . "  " . "<a href='delete.php?deleteuser=" . $row->id . "' class='.btn-sm btn-outline-danger mr-2'>Delete</a> </td>
                </tr>";
                                    } ?>



                                <?php

                            endforeach;
                        }
                    } else {
                        // require_once 'search_db.php';
                        $data = [
                            'keyword' => $_POST['keyword']

                        ];
                        // $query = $source->Query("SELECT * FROM `users` WHERE utype=1");
                        $keyword = $_POST['keyword'];
                        // $source->Query("SELECT * FROM `users` WHERE `name` LIKE ? and utype=1 or `surname` LIKE ? or `ptype` LIKE ? ",[$keyword,$keyword,$keyword]);
                        $source->Query("SELECT *  FROM `users` WHERE `surname` LIKE '%$keyword%' OR `name` LIKE '%$keyword%' OR `address` LIKE '%$keyword%' " );
                        // SELECT *  FROM `users` WHERE `surname` LIKE '%he%'
                        $details = $source->FetchAll();
                        $numrow = $source->CountRows();
                        

                        if ($numrow > 0) {
                            foreach ($details as $row) :

                                ?>
                                <tr>
                                    <td><?php echo $row->id; ?></td>
                                    <td><?php echo $row->name; ?></td>
                                    <td><?php echo $row->surname; ?></td>
                                    <td><?php echo $row->email; ?></td>
                                    <td><?php echo $row->date; ?></td>
                                    <td><?php echo $row->gender; ?></td>
                                    <td><?php echo $row->address; ?></td>
                                    <td><?php echo $row->ptype; ?></td>
                                    <td><img src="Uploads/<?php echo $row->file; ?>" height=250px width=200px></td>




                                    <?php if ($_SESSION['utype'] == 0) {
                                        echo "<td> 
                 <a href='Edit.php?id=" . $row->id . "' class='.btn-sm btn-outline-info mr-2'>Edit</a>" . "  " . "<a href='delete.php?deleteuser=" . $row->id . "' class='.btn-sm btn-outline-danger mr-2'>Delete</a> </td>
                </tr>";
                                    } ?>



                        <?php

                            endforeach;
                        }
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