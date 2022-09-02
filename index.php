<?php
if (isset($_COOKIE['prefix'])) {
    if(isset($_POST['submit'])){
    $project = $_COOKIE['prefix'] . $_POST['folder_name'];
    if (!file_exists($project)) {
        $stack = $project . "/stack";
        $page = $project . "/page";
        $assets = $project . "/assets";
    
    # code...
    mkdir($project);
    mkdir($stack);
    mkdir($page);
    mkdir($assets);
    
   
/* Store the path of source file */
$filePath = 'needed/mail.stk';
$filePathenc = 'needed/enc.php';
$filePathconf = 'needed/config.cnc';
$filePathaccess = 'needed/.htaccess';
$filePathrouter = 'needed/router.php';
$filePathroute = 'needed/routes.php';
$filePathind = 'needed/index.stk';
$filePath404 = 'needed/404.stk';
/* Store the path of destination file */
$destinationFilePathstack = $stack . "/mail.stk";
$destinationFilePathenc = $stack . "/enc.php";
$destinationFilePathconf = $stack . "/config.cnc";
$destinationFilePathaccess = $project."/.htacces";
$destinationFilePathrouter = $project."/router.php";
$destinationFilePathroute = $project."/routes.php";
$destinationFilePathind = $page."/index.stk";
$destinationFilePath404 = $page."/404.stk";
/* Copy File from images to copyImages folder */
if( !copy($filePath, $destinationFilePathstack) ) {  
    echo "File can't be copied!";  
}  
else {  
    echo "File has been copied!";  
} 
if (!copy($filePathenc, $destinationFilePathenc)) {
    echo "File can't be copied!";  
}else {
   echo "File has been copied!"; 
}
if (!copy($filePathconf, $destinationFilePathconf) ) {
    echo "File can't be copied!";  
}else {
   echo "File has been copied!"; 
}
 if (!copy($filePathaccess, $destinationFilePathaccess) ) {
    echo "File can't be copied!";  
}else {
   echo "File has been copied!"; 
} 
if (!copy($filePathrouter, $destinationFilePathrouter) ) {
    echo "File can't be copied!";  
}else {
   echo "File has been copied!"; 
} 
if (!copy($filePathroute, $destinationFilePathroute) ) {
    echo "File can't be copied!";  
}else {
   echo "File has been copied!"; 
}
if (!copy($filePathind, $destinationFilePathind) ) {
    echo "File can't be copied!";  
}else {
   echo "File has been copied!"; 
} 
if (!copy($filePath404, $destinationFilePath404) ) {
    echo "File can't be copied!";  
}else {
   echo "File has been copied!"; 
}
    }else {
        echo 'error';
    }
    }
}else{
    		echo '<script>
 window.location="new.php"
		</script>';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
      <link rel="stylesheet" href="plug/bootstrap.min.css">
</head>
<body>
    <br>
   <div class="row">
<div class="col-md-4"></div>
<div class="col-md-4" style="border-radius: 25px;  border:1px solid lavender; padding:20px;background-color:white;">
  <form action="" method="post">
      <label for="project" class="form-label">Folder Name</label>
       <input type="text" name="folder_name"class="form-control" id="Project" placeholder="file location">
<button class="btn btn-primary" name="submit"style="float:right"type="submit">Get Started</button>

  </form>
  </div>
</div>
  <div class="col-md-4"></div>
 <nav class="nav flex-column">
  <a class="nav-link active" aria-current="page" href="#">Active</a>
  <a class="nav-link" href="#">Link</a>
  <a class="nav-link" href="#">Link</a>
  <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
</nav>
</body>
</html>