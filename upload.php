<?php
if(isset($_POST["submit"])){
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false){
        $image = $_FILES['image']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image));

        $name=$_POST["name"];

        $dbHost     = 'localhost:3306';
        $dbUsername = 'root';
        $dbPassword = 'sankeeth72';
        $dbName     = 'test';
        
        $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
        
        if($db->connect_error){
            die("Connection failed: " . $db->connect_error);
        }
        
       
      
        $insert = $db->query("INSERT into images (image,name) VALUES ('$imgContent','$name')");
        if($insert){
            
            echo "File uploaded successfully.";
        }else{
            echo "File upload failed, please try again.";
        } 
    }else{
        echo "Please select an image file to upload.";
    }    
}
?>
<!--<html>
<p><img src="view.php?image=<?php print $s;?>" height="100" width="100" /></p>
</html>-->