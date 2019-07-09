<?php
    $conn = mysqli_connect("localhost", "root", "eiaclr", "opentutorials");
    $filtered = array(
        'title' => mysqli_real_escape_string($conn, $_POST['title']),
        'description' => mysqli_real_escape_string($conn, $_POST['description']),
        'author_id' => mysqli_real_escape_string($conn, $_POST['author_id'])
    );
    $sql = "
        INSERT INTO topic(title, description, created, author_id)
        VALUES(
            '{$filtered['title']}', 
            '{$filtered['description']}', 
            NOW(), 
            {$filtered['author_id']}
        );
    ";
    $result = mysqli_query($conn, $sql);
    if($result === false){
        echo mysqli_error($conn);
    }else{
        echo '게시완료. <a href="index.php">돌아가기</a>';
    }
?>