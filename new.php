<?php
if (isset($_COOKIE['prefix'])) {
    		echo '<script>
 window.location="index.php"
		</script>';
}else{
if(isset($_POST['sub'])){
$project = $_POST['file'];

setcookie("prefix",$project);
echo 'succes';
		echo '<script>
 window.location="index.php"
		</script>';
        
}else{
    echo 'error';
}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>stack setup installer</title>
  <link rel="stylesheet" href="plug/bootstrap.min.css">

</head>
<body>
    <div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Well done!</h4>
  <p>Aww yeah, you successfully read this important alert message. Thanks for using stack get started with the tools in this installer please use at own risk.</p>
  <hr>
  <p class="mb-0">Whenever you need to, install plugins through here.</p>

</div>
<div class="row">
<div class="col-md-4"></div>
<div class="col-md-4" style="border-radius: 25px;  border:1px solid lavender; padding:20px;background-color:white;">
  <form action="" method="post">
      <label for="project" class="form-label">Project Directories</label>
       <input type="text" name="file"class="form-control" value="../"id="Project" placeholder="file location">
<button class="btn btn-primary" name="sub"style="float:right"type="submit">Get Started</button>

  </form>
  </div>
</div>
  <div class="col-md-4"></div>
</body>
</html>