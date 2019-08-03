<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="shortcut icon" href="assets/images/images.jpg" type="image/x-icon" sizes="16x16">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/template.css">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <style type="text/css" media="screen">
        @media screen and (max-width: 650px) {
            .colum {
                width: 100%;
                display: block;
            }
        }

    </style>

</head>
<?php include("header.php"); ?>

<?php
    
    $db_name='management';
    $db_host='localhost';
    $db_user='root';
    $db_pass='';

    $con=mysqli_connect($db_host,$db_user,$db_pass,$db_name);
    if(!$con){
        echo "Database Connection Error!";
    }
    else{
        // echo "data base connection success";
    }

    if(!empty($_POST)){
        $name = $_POST['name'];
        $institute = $_POST['institute'];
        $semester = $_POST['semester'];
        $phone = $_POST['phone'];
        $gender = $_POST['gender'];
        $sub = $_POST['sub'];
        $fname = $_POST['fname'];
        $email = $_POST['email'];
        $file = $_FILES['file'];
        $fileName = 'file-'.time().'-'.rand(100000,1000000000).'.'.pathinfo($file['name'],PATHINFO_EXTENSION);

    $insert = "INSERT INTO student(name,institute ,semester,phone,gender,email,sub,fname,file) 
                        VALUES('$name','$institute','$semester','$phone','$gender', '$email','$sub','$fname','$fileName')";
    
        if(!empty($name)){
            if(mysqli_query($con, $insert)){
                move_uploaded_file($file['tmp_name'],'dashboard/uploads/'.$fileName);
                echo "<script>";
                echo "window.location.replace('veiwfile.php')";
                echo "</script>";
                echo "<script> alert('registration success'); </script>";
            }
        }
    }

?>

<body>

    <div id="contact" class="container-fluid">
        <div class="cont" style="margin-left: 0%; width:100%; height: auto; background-color: #dfe4ea;border: 2px #c7ecee; margin-bottom: 20px;  float: left;  box-shadow: 0px 0px 12px 1px black;">

            <h3 style="color: #b33939; text-align: center;  "><br><br></h3><br>

            <form action="file.php" enctype="multipart/form-data" method="post" style="text-align: justify; margin-left: 10%; margin-bottom: 10%;margin-right: 10%;">
                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">Name:</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="name" name="name" required placeholder="Enter Your Name..." style="background-color: #f1f2f6; border: 0px;">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="insti" class="col-sm-2 col-form-label">Institute:</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="insti" name="institute" required placeholder="Enter Your College Name ..." style="background-color: #f1f2f6; border: 0px;">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="semester" class="col-sm-2 col-form-label">Semester:</label>
                    <div class="col-sm-6">
                        <select class="form-control" id="semester" name="semester" style="background-color: #f1f2f6; border: 0px;">
                            <option value="1st semester">1st semester</option>
                            <option value="2nd semester">2nd semester</option>
                            <option value="3rd semester">3rd semester</option>
                            <option value="4th semester">4th semester</option>
                            <option value="5th semester">5th semester</option>
                            <option value="6th semester">6th semester</option>
                            <option value="7th semester">7th semester</option>
                            <option value="8th semester">8th semester</option>
                        </select>
                    </div>
                </div>
                 <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label">Subject:</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="sub" name="sub" required placeholder="Enter Your Subject Name ..." style="background-color: #f1f2f6; border: 0px;">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="fname" class="col-sm-2 col-form-label">File Name:</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="sub" name="fname" required placeholder="Enter Your File Name ..." style="background-color: #f1f2f6; border: 0px;">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="phn" class="col-sm-2 col-form-label">Phone Number:</label>
                    <div class="col-sm-6">
                        <input type="number" class="form-control" id="phn" name="phone" required placeholder="Enter Your phone number ..." style="background-color: #f1f2f6; border: 0px;">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="gender" class="col-sm-2 col-form-label">Gender:</label>
                    <div class="col-sm-6">
                        <select class="form-control" name="gender" id="gender" style="background-color: #f1f2f6; border: 0px;">
                            <option value="Male">Male</option>
                            <option value="Male">Female</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label">Email:</label>
                    <div class="col-sm-6">
                        <input type="email" class="form-control" id="email" name="email" required placeholder="Enter Your Email Address ..." style="background-color: #f1f2f6; border: 0px;">
                    </div>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlFile1"></label>
                    <input type="file" name="file" class="form-control-file" id="exampleFormControlFile1">
                </div>
                <div class="form-group row">
                    <div class="col-2"></div>
                    <div class="col-sm-6">
                        <button class="btn btn-primary btn-lg" type="submit" name="pgsave">Submit</button>
                    </div>
                </div>
            </form>

        </div>
    </div>

    <?php include("footer.php"); ?>

    <script src="js/jquery-3.1.1.min.js">

    </script>
    <script src="js/bootstrap.min.js">

    </script>

    <script src="js/slide.js"></script>


</body>

</html>