<?php 
# Include script to make a database connection
include("connect.php");
# Check if input fileds are empty
if(empty($_POST['message'])){
    # If the fields are empty, display a message to the user
# Process the form data if the input fields are not empty
}else{

    date_default_timezone_set('America/New_York');
    $d = date('m/d/Y h:i:s a', time());
    $date = $d;
    $message = $_POST['message'];
    # Insert into the database
    $query = "INSERT INTO messages(date,message) VALUES ('$date','$message')";
    if (mysqli_query($conn, $query)) {
       
    } else {
         echo "Error entering message:" . $conn->error;
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dan's Gaming Community</title>
   <link rel="stylesheet" type="text/css" href="style/server_style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
</head>
<body>
  <div class="card">
    <div class="header">
      <div class="image">
        <img src="https://normanawsproject.s3.amazonaws.com/serverpic.png" id="backimg" alt=""/>
      </div>
        <h2>Dan's Web Server 1</h2>
    </div>
    <script src="script/serverinfo.js">
    </script>
    <div id="rest">Loading ...</div>
  </div>
  <br><br>
  
 <div class="counterstrike">
<a href="https://tsarvar.com/servers/counter-strike-source/34.231.17.167:27015" data-tsarvarServerId="284737">Server Norman CSS Server</a>
<script type="text/javascript" charset="utf-8" src="https://widget.tsarvar.com/load.js"></script>
<script type="text/javascript">
    (function(k){(window[k]||(window[k]=[])).push({
        element:'*[data-tsarvarServerId="284737"]',
        serverId:284737,
        serverIp:'34.231.17.167',
        serverPort:27015,
        blackMode:true
    });})('TsarvarWidgetQueue');
</script>
</div>


  <br><br>
  <div class="messageboard">
     <h1> Enter your message: </h1>
     <form method="post" action="index.php">
        <input type="text" name="message"><br/>
        <br/>
        <input type="submit" name="save" value="submit" >
     </form>
     <h1> Message Board</h1>
<?php
# Read from the database and display in the table
$query2 = "SELECT * FROM messages";
$result = $conn->query($query2);
if ($result->num_rows > 0) {
    // Output data of each row
    echo "<table id='tsa' border='1' id='example' class='table table-striped responsive-utilities table-hover'>
              <thead>
                <tr>
                <th>Date</th>
                <th>Message</th>
                </tr>
              </thead>
              ";
    while($row = $result->fetch_assoc()) {
       echo "<tr",">",
            "<td>", $row["date"],"</td>",
            "<td>", $row["message"],"</td>",
            "</tr>";
    }
    echo  "</table>";
}else {
 echo "No Messages!";
}
?>
 </div>



</body>
</html>








