<?php
$conn = mysqli_connect(
  "xeovii.cafe24.com",
  "xeovii",
  "admin0207*",
  "xeovii");

$sql = "SELECT * FROM post WHERE id={$_GET['id']}";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result)

?>
<html>
    <head>
      <link rel="stylesheet" href="css/read.css">
      <title>포크립트</title>  
    </head>
    <body>
        <div class="header">
            <div id="avatar" onClick="location.href='/'">
                <img id="img_avatar" src="https://avatars.githubusercontent.com/u/80041815?s=400&u=7536910e26005e5660d410b795a059abadd0d8b1&v=4"/>
            </div>
        </div>
        <div class="title">
            <div id="main"><?php
            echo $row['title'];
            ?></div>
        </div>
        <div class="main">
            <div class="profile_hr"><span class="profile_hr_title">TOC</span><hr></div>
            <div class="api">
                <div class="post">
                    <div class="post_desc"><?php
            echo $row['description'];
            ?></div>
                </div>
            </div>
            
            <div class="profile">
                
            </div>
        </div>
    </body>
</html>
