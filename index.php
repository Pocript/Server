<?php
$conn = mysqli_connect(
  "xeovii.cafe24.com",
  "xeovii",
  "admin0207*",
  "xeovii");

$sql = "SELECT * FROM post";
$result = mysqli_query($conn, $sql);

?>

<html>
    <head>
      <link rel="stylesheet" href="style.css">
      <title>포크립트</title>  
    </head>
    <body>
        <div class="header">
            <div id="avatar" onClick="location.href='/user/login.html'">
                <img id="img_avatar" src="https://avatars.githubusercontent.com/u/80041815?s=400&u=7536910e26005e5660d410b795a059abadd0d8b1&v=4"/>
            </div>
        </div>
        <div class="title">
            <div id="main">POCRIPT</div>
            <div id="sub">포크립트</div>
        </div>
        <div class="main">
            <div class="api_hr"><span class="api_hr_title">Api</span><hr></div>
            <div class="profile_hr"><span class="profile_hr_title">Profile</span><hr></div>
            <div class="api">
                
                    <?php
                    while($row = mysqli_fetch_array($result)) {
                      
                      echo '<div class="post" onclick=location.href="/posts/read.php?id='.$row['id'].'">';
                      echo $id;
                      echo '<div class="post_title">'.$row['title'].'</div>';
                      echo '<div class="post_desc">'.strip_tags($row['description']).'</div>';
                      echo '</div>';
                      
                      }
                    ?>
            
            </div>
            
            <div class="profile">
                <div id="profile_avatar">
                <img id="profile_img_avatar" src="https://avatars.githubusercontent.com/u/80041815?s=400&u=7536910e26005e5660d410b795a059abadd0d8b1&v=4"/>
                </div>
                <div class="profile_card">
                <div id="profile_name">
                    Simi
                </div>
                <div id="profile_desc">
                    더 나은 개발
                </div>
                <div id="organization">
                <svg class="octicon octicon-organization" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M1.5 14.25c0 .138.112.25.25.25H4v-1.25a.75.75 0 01.75-.75h2.5a.75.75 0 01.75.75v1.25h2.25a.25.25 0 00.25-.25V1.75a.25.25 0 00-.25-.25h-8.5a.25.25 0 00-.25.25v12.5zM1.75 16A1.75 1.75 0 010 14.25V1.75C0 .784.784 0 1.75 0h8.5C11.216 0 12 .784 12 1.75v12.5c0 .085-.006.168-.018.25h2.268a.25.25 0 00.25-.25V8.285a.25.25 0 00-.111-.208l-1.055-.703a.75.75 0 11.832-1.248l1.055.703c.487.325.779.871.779 1.456v5.965A1.75 1.75 0 0114.25 16h-3.5a.75.75 0 01-.197-.026c-.099.017-.2.026-.303.026h-3a.75.75 0 01-.75-.75V14h-1v1.25a.75.75 0 01-.75.75h-3zM3 3.75A.75.75 0 013.75 3h.5a.75.75 0 010 1.5h-.5A.75.75 0 013 3.75zM3.75 6a.75.75 0 000 1.5h.5a.75.75 0 000-1.5h-.5zM3 9.75A.75.75 0 013.75 9h.5a.75.75 0 010 1.5h-.5A.75.75 0 013 9.75zM7.75 9a.75.75 0 000 1.5h.5a.75.75 0 000-1.5h-.5zM7 6.75A.75.75 0 017.75 6h.5a.75.75 0 010 1.5h-.5A.75.75 0 017 6.75zM7.75 3a.75.75 0 000 1.5h.5a.75.75 0 000-1.5h-.5z"></path></svg>
                Pocript
                </div>
                <div id="mail">
                <svg class="octicon octicon-mail" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M1.75 2A1.75 1.75 0 000 3.75v.736a.75.75 0 000 .027v7.737C0 13.216.784 14 1.75 14h12.5A1.75 1.75 0 0016 12.25v-8.5A1.75 1.75 0 0014.25 2H1.75zM14.5 4.07v-.32a.25.25 0 00-.25-.25H1.75a.25.25 0 00-.25.25v.32L8 7.88l6.5-3.81zm-13 1.74v6.441c0 .138.112.25.25.25h12.5a.25.25 0 00.25-.25V5.809L8.38 9.397a.75.75 0 01-.76 0L1.5 5.809z"></path></svg>
                hyseo0208@gmail.com
                </div>
                </div>
            </div>
        </div>
    </body>
</html>
