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
        $dbname = "TRAVEL";
        $name = $_POST['name'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $contact = $_POST['phone'];
        $from = $_POST['start'];
        $to = $_POST['destination'];
        $date = $_POST['date'];
        $no_of_tickets = $_POST['num'];
        $requirements = $_POST['suggestion'];
        

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }

          $sql= "INSERT INTO Bookings (name, age, gender, email, phone, start, destination, date, number_of_tickets,suggestion) VALUES ('$name', $age, '$gender', '$email', '$contact', '$from', '$to', '$date', $no_of_tickets, '$requirements') ";
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
          <h1>Travel Bookings.</h1>
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
        <label for="address">From:</label>
        <br>
        <input name="start" placeholder="Enter the start location" ></textarea>
        <br>
        <label for="Destination">To:</label>
        <br>
        <input type="text" name="destination" placeholder="Enter a destination....">
        <br>
        <label for="Date">Date:</label>
        <input type="date" name="date">
        <br>
        <label for="option">No of Tickets:</label>
        <br>
        <input type="number" name="num" value="" placeholder="Please enter the no of tickets....">
        <br>
        <label for="option">Any Other Requests?</label>
        <br>
        <input type="text" name="suggestion" value="" placeholder="Please enter it here....">
        <br>
        <input id="button" type="submit" name="submit" value="Submit" >
        <br>
        <br>
        </form>
    </div>
  </body>
</html>
