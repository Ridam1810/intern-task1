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
                <!-- <center>
                    <form class="example" action=" " method="post">
                        <input type="text" placeholder="Search.." name="keyword" class="rounded" style="padding:5px; ">
                        <button type="submit" name="submit" value="submit" style="padding:5px; color:red;">Search</button>
                    </form>
                </center> -->
            </div>

            <table class="table table-hover">

                <thead>
                    <tr>
                        
                        <th class="col-1">Prescription</th>
                      



                    </tr>
                </thead>
                <tbody>
                    <?php

                   
                        $query = $source->Query("Select * FROM guest where id=?", [$_GET['id']]);
                        $details = $source->FetchAll();
                        $numrow = $source->CountRows();

                        if ($numrow > 0) {
                            foreach ($details as $row) :

                    ?>
                                <tr>
                                    <td><?php echo $row->prescription; ?></td>
                                    <!--  -->
                                



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