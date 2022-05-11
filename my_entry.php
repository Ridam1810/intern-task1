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
                        
                        <th class="col-2">Your Name</th>
                        <th class="col-2">Your Email</th>
                        <th class="col-3">Problem facing</th>
                        <th class="col-3">Doctor's Response</th>
                        <th class="col-3">Given Tests</th>



                    </tr>
                </thead>
                <tbody>
                    <?php

                   
                        $query = $source->Query("Select * FROM guest where guestId=?", [$_SESSION['idno']]);
                        $details = $source->FetchAll();
                        $numrow = $source->CountRows();

                        if ($numrow > 0) {
                            foreach ($details as $row) :

                    ?>
                                <tr>
                                    <td><?php echo $row->name; ?></td>
                                    <td><?php echo $row->email; ?></td>
                                    <td><?php echo $row->message; ?></td>
                                    <td><?php if ( $row->response== "(Pending)") {
                                        echo " 
                                         <a href='pending_mes.php?deleteuser=" . $row->id . "' class='.btn-sm btn-outline-danger mr-2'>Pending</a> 
                                        ";
                                    }else {?>
                                    <?php echo $row->response; ?></td><?php } ?>
                                    </td>
                                    <td>
                                        <?php if ( $row->test_list== "(Pending)") {
                                        echo " <a href='pending_mes.php?deleteuser=" . $row->id . "' class='.btn-sm btn-outline-danger mr-2'>Pending</a> 
                                        ";
                                    }else{?>
                                    <?php echo $row->test_list; ?></td><?php } ?>
                                    </td>
                                   

                                    
                                    <?php if(is_null($row->test_result)){
                                        echo "<td> 
                                         <a href='result_upload.php?id=" . $row->id . "' class='.btn-sm btn-outline-danger mr-2'>Upload tests Results</a> </td>
                                        </tr>";}
                                    ?>
                                    <?php if(!is_null($row->m1)){
                                        echo "<td> 
                                         <a href='prescription.php?id=" . $row->id . "' class='.btn-sm btn-outline-danger mr-2'>View prescription</a> </td>
                                        </tr>";}
                                    ?>



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