<html>
<head>
    <title>Homepage</title>
    <link rel="stylesheet" href="../css.css">

    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <script src="../js/bootstrap.min.js"></script>


</head>
<body class="container-fluid">
<?php
session_start();
ob_start();

if (!(isset($_SESSION['admin']))){
    header("location:../index.php");
}
else {
  echo "<form name='mkdir' method='post' action='../adm-action/mkdir.php'>
        <div class='form-group'>
        <label for='Directory Nname'>Directory Name:</label>
        <input type='text' name='directory_name' class='form-control'/></div><br>
        <input type='submit' value='create directory' class='btn btn-success'/>
        </form>";
}

?>
</body>
</html>
