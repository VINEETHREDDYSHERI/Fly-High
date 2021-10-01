
<?php
define('img', 'images/');
$name = $_POST['name'];

$fileloc = $_FILES["file1"]["tmp_name"];

$filename = $_FILES['file1']['name'];
$target = img . $filename;
move_uploaded_file($fileloc, $target);
echo "$name<br>";
if ($_FILES['file1']['name'] == NULL) {
    echo 'the file name is null';
} else {

    echo 'the image uploaded is ';
    echo '' . $target;
    echo '<img src="' . 'images/' . $filename . '" alt="logo"/>';
}
echo $filename;

?>


