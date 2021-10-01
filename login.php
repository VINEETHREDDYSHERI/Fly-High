 <?php
    $x = $_POST["emailid"];
    $y = $_POST["pwd"];
    $conn = mysqli_connect("localhost", "root", "sankeeth72", "test");
    if (!$conn) {
        die("Connection failed due to " . mysqli_connect_error());
    }
    $sql1 = "select * from test.account where emailid='$x' ";
    $result =  mysqli_query($conn, $sql1);
    $a =  mysqli_fetch_array($result);
    if ($x == "admin" && $y == "admin") {
        if (isset($_POST["remember"])) {
            setcookie("emailid", $x, time() + 60 * 60, "/");
            setcookie("pwd", $y, time() + 60 * 60, "/");
        }
        session_start();
        $_SESSION["username"] = $x;
        $_SESSION["pwd"] = $y;
        header("Location:admin.php");
    } else if ($a["password"] == $y) {
        if (isset($_POST["remember"])) {
            setcookie("emailid", $x, time() + 60 * 60, "/");
            setcookie("pwd", $y, time() + 60 * 60, "/");
        }
        session_start();
        $_SESSION["emailid"] = $x;
        $_SESSION["username"] = $a["username"];
        $_SESSION["pwd"] = $y;
        header("Location:user.php");
    } else {
        echo "<p style='text-align:center;color:red;font-size:14px;font-weight:bold'>Wrong Passowrd or Username<br>Please TRy Again</p>";
        include 'login1.php';
    }
    mysqli_close($conn);
