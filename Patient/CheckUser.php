<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "clinic";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    $sql = "select * from user where Username = '".$_POST['username']."'";
    echo "HELLO";
    echo "
        <script>
            console.log('Hello');
        </script>
    ";

    $result=mysqli_query($conn,$sql);

    if(mysqli_num_rows($result) != 0){
        echo "<script> 
                    alert(document.getElementById('usernamecheck'));
                    document.getElementById('usernamecheck').value = 'already taken';
              </script>";
    }
?>