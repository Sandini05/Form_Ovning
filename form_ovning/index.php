<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <h1>PHP FORM</h1>
    <form action="#" method="POST" enctype="multipart/form-data" >

        <div class="input_box">
            <div class = "box">
                <label for="fname">First Name:</label>
                <input type="text" name="fname"><br>

                <label for="lname">Last Name:</label>
                <input type="text" name="lname"><br>

                <label for="bday">Birth Date:</label>
                <input type="text" name="bday"><br><br>

                <div class = "file_box">
                    <input type="file" name="fileup"><br><br>
                    <input type="submit" name="sub" value="SHOW">
                </div>
            </div>

        </div>
    </form>


    <?php
    if(isset($_POST['sub'])){

       echo "<div class= 'echo_align'>";
       echo $_POST['fname'] . " ";
       echo $_POST['lname'] . "<br>";
       echo $_POST['bday'] . "<br>";
       echo "</div>";

       $target_dir = "img/";
       $target_file = $target_dir . basename($_FILES['fileup']['name']);
       $uploadOk = 1;

       if($uploadOk == 0){
        echo "Error";
       }

       else{
            if(move_uploaded_file($_FILES['fileup']['tmp_name'], $target_file)){
                echo "<div class= 'img_align'>";
                echo '<img src= "' . $target_file . '">';
                echo "</div>";
            }
       }

    }
    ?>
</body>
</html>