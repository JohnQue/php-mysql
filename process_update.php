<?php
    $conn = mysqli_connect("localhost", "root", "eiaclr", "opentutorials");
    settype($_POST['id'], 'integer');
    $filtered = array(
        'id' => mysqli_real_escape_string($conn, $_POST['id']),
        'title' => mysqli_real_escape_string($conn, $_POST['title']),
        'description' => mysqli_real_escape_string($conn, $_POST['description'])
    );
    $sql = "
        UPDATE topic SET 
        title = '{$filtered['title']}', 
        description = '{$filtered['description']}'
        WHERE id = '{$filtered['id']}';
    ";
    $result = mysqli_multi_query($conn, $sql);
    if($result === false){
        echo mysqli_error($conn);
    }else{
        echo '수정완료. <a href="index.php">돌아가기</a>';
    }
?>