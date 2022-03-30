<html>
<head>
    <link href="bootstrap-5.1.3-dist/css/bootstrap.css" rel="stylesheet">
</head>
<body>

<?php
if(isset($_POST['password'])){
    $password = $_POST['password'];
    include "paginasecondaria.php";
}
else{
    include "paginainiziale.php";
}
      ?>

</body>
</html>
