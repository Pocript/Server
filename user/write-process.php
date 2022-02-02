<?php
    $conn=mysqli_connect("xeovii.cafe24.com","xeovii","admin0207*","xeovii");
    
    $sql = "
  INSERT INTO post
    (title, description, created)
    VALUES(
        '{$_POST['title']}',
        '{$_POST['description']}',
        NOW()
    )
";
$result = mysqli_query($conn, $sql);
if($result === false){
  echo mysqli_error($conn);
  error_log(mysqli_error($conn));
} else {
  echo '성공했습니다. <a href="/">돌아가기</a>';
}
?>