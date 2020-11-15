<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>PHP DATABASE</title>
  </head>
  <body>
    <?php
    if(isset($_POST['submit'])){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "user-registration";
        $name = $_POST['name'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $contact = $_POST['phone'];
        $address = $_POST['add'];
        $year = $_POST['year'];
        $branch = $_POST['branch'];
        $subject = $_POST['sub'];

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }

          $sql= "INSERT INTO STUDENTS (name, age, gender, email, phone, year, branch, address, subject) VALUES ('$name', $age, '$gender', '$email', $contact, '$year', '$branch', '$address', '$subject') ";
          if ($conn->query($sql) === TRUE) {
          echo "New record created successfully";
          } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
          }

          $conn->close();

}


    ?>

  <form class="form" method="post">
    <div class="container">
      <div class="nav">
          <h1>Student Details Form.</h1>
      </div>
        
        <label for="input-1" >Name:</label>
        <br>
        <input type="text" name="name" placeholder="Please enter your name.." />
        <br>
        <label for="input-2">Age:</label>
        <br>
        <input type="number" name="age" placeholder="Please enter your age....."/>
        <br>
        <label for="gender">Gender:</label>
        <br>
        <select name="gender" class="" autofocus="autofocus" required="required">
          <option name="gender" value="male" >Male</option>
          <option name="gender" value="female">Female</option>
          <option name="gender" value="other">Other</option>
        </select>
        <br>
        <label for="email">Email:</label>
        <br>
        <input name="email" type="text" placeholder="Please enter your email...."  />
        <br>
        <label for="phone">Phone:</label>
        <br>
        <input type="number" name="phone" placeholder="Please enter your Phone number...">
        <br>
        <label for="address">Address:</label>
        <br>
        <textarea name="add" rows="8" cols="80"></textarea>
        <br>
        <label for="Year">Enter Your Year:</label>
        <br>
        <select class="year" name="year">
          <option name="year" value="FE">FE</option>
          <option name="year" value="SE">SE</option>
          <option name="year" value="TE">TE</option>
          <option name="year" value="BE">BE</option>
        </select>
        <br>
        <label for="Branch">Please Enter Your Branch:</label>
        <select class="branch" name="branch">
          <option name="branch" value="CS">Computer Science.</option>
          <option name="branch" value="CIVIL">Civil.</option>
          <option name="branch" value="MECH">Mechanical.</option>
          <option name="branch" value="ETRX">Etrx</option>
          <option name="branch" value="EXTC">Extc</option>
          <option name="branch" value="IT">IT</option>
          <option name="branch" value="br">other</option>
        </select>
        <br>
        <label for="option">Please Enter your Specialization Subject:</label>
        <br>
        <input type="text" name="sub" value="" placeholder="Please enter a subject....">
        <br>
        <input id="button" type="submit" name="submit" value="Submit" >
        <br>
        <br>
        </form>
    </div>
  </body>
</html>
