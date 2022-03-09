<?php
include "init.php";


$query = $source->Query("Select * FROM user where id=?", [$_GET['id']]);
$profile = $source->singleRow();

if (isset($_POST['update'])) {
    $chk = '';

    $data = [
        'name' => $_POST['full_name'],
        'email' => $_POST['email'],
        'address' => $_POST['address'],
        'gender' => $_POST['gender'],
        'tech' => $_POST['tech'],
    ];

    if(!empty($data['tech'])){
        foreach ($data['tech'] as $chk1) {
            $chk .= $chk1 . ",";
        }
    }
    
    if ($source->Query(
        "UPDATE user SET name=?,email=?,gender=?,address=?,tech=? where id=?",
        [$data['name'], $data['email'], $data['gender'], $data['address'], $chk,$_GET['id']]
    )) {
        header("location:list.php");
    }
}
?>


<html>

<head>
    <title>Home</title>
    <meta name="viewpost" content="width=device-width, initial-scale=1.0" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <!-- navbar -->
    <?php
    include 'splitfile/navbar.php';


    ?>


    <div class="container-fluid">
        <div class="container">
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="login">
                    <h1>Edit Profile</h1>
                    <div class="inputall">
                        <div class="input">
                            <h4>Full Name</h4> <input type="text" name="full_name" value="<?php echo $profile->name; ?>">
                        </div>
                        <div class="input">
                            <h4>Email</h4> <input type="email" name="email"  value="<?php echo $profile->email; ?>">
                        </div>
                        <div class="input">
                            <h4>Address</h4> <input type="text" name="address"  value="<?php echo $profile->address; ?>">
                        </div>
                        <div class="gender">
                            <input type="radio" name="gender" value="<?php echo $profile->gender; ?>" checked> Male <input type="radio" name="gender" value="<?php echo $profile->gender; ?>" checked> Female
                        </div>

                        <tr>
                            <td colspan="2">Select techlgy: </td>
                        </tr>
                        <tr>
                            <td>PHP</td>
                            <td><input type="checkbox" name="tech[]" value="PHP"></td>
                        </tr>
                        <tr>
                            <td>.Net</td>
                            <td><input type="checkbox" name="tech[]" value=".Net"></td>
                        </tr>
                        <tr>
                            <td>Java</td>
                            <td><input type="checkbox" name="tech[]" value="Java"></td>
                        </tr>
                        <tr>
                            <td>Javascript</td>
                            <td><input type="checkbox" name="tech[]" value="javascript"></td>
                        </tr>
                        <div class="signupbtn">
                            <input type="submit" name="update" value="Update" class="btn btn-outline-primary">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>