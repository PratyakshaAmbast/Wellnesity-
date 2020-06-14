<?php

try {

  $db = new mysqli("localhost", "root", "", "visitorss");
  
} catch (Exception $exc) {

  echo $exc->getTraceAsString();
  
}

if(isset($_POST['name']) && isset($_POST['emailid']) && isset($_POST['mob_no']) && isset($_POST['gender']) && isset($_POST['recommend']) && isset($_POST['comment']) ){

  $vname = $_POST['name'];
  $vemail = $_POST['emailid'];
  $vmobno = $_POST['mob_no'];
  $vgender = $_POST['gender'];
  $vrecommend = $_POST['recommend'];
  $vcomment = $_POST['comment'];

  $is_insert = $db->query("INSERT INTO `vinfoss`(`Vname`, `vemail`, `vmobno`, `vgender`, `vrecommend`, `vcomment`)
VALUES ('$vname','$vemail','$vmobno','$vgender','$vrecommend','$vcomment')");

  if($is_insert ==TRUE){
    echo"<h2>Thanks for Visiting our website</h2>";
    header('location:main.php');
    exit();
  }

}


?>

<html>
<head>
  <title>Contact Form</title>
  <link rel="stylesheet" href="css/style1.css">
</head>
<body>
  <header>
  <div class="logo">
        <a href="main.php"><img src="images/logopogo.png"></a>
      </div>
    </header>


  <h3>Please Fill the Contact Form</h3>
  <p>Please provide correct data so that we can contact you ASAP!</p>
 <form action = "<?php $_PHP_SELF ?>" method = "POST">
                <br><hr><br>
                <div class="form-group">
                Name:
                <input type = "text" name = "name" placeholder="First Last Name">
                <br><br>
              </div>

              <div class="form-group">
                Email ID:
                <input type = "email" name = "emailid" placeholder="Eg: abcd@gmail.com">
                <br><br>
              </div>

              <div class="form-group">
                Mobile No.:
                <input type = "text" name = "mob_no" placeholder="+91">
                <br><br>
              </div>

              <div class="form-group">
                Gender:<br>
                <input type ="radio" name = "gender">Male<br>
                <input type="radio" name= "gender">Female<br>
                <input type="radio" name= "gender">Other<br>
                <br><br>
              </div>

              <div class="form-group">
                Would You Recommend Our Website To Others?<br>
                <input type="checkbox" name="recommend" value="Yes"> Yes<br>
                <input type="checkbox" name="recommend" value="No">No<br>
                <input type="checkbox" name="recommend" value="Maybe">Maybe<br>
                <br><br>
              </div>

              <div class="form-group">
                Comment:
                <textarea name = "comment" type = "textarea"></textarea>
                <br><br>
              </div>

             <br>
             <h4><i> Note: Once you submit your data, you will be redirected to our main page.</i></h4>
             <br><br><br><br>
                <input type = "Submit" name = "insert" value = "Submit My Data" class="button">
                 <input type = "Reset" name = "reset" value = "Reset" class="button1">

            


                             <br>
                <hr>
                </form>

</body>
</html>