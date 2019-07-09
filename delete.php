<?php
    $conn = mysqli_connect("localhost", "root", "eiaclr", "opentutorials");
    settype($_POST['id'], 'integer');
    $filtered = array(
        'id' => mysqli_real_escape_string($conn, $_POST['id']),
    );
    $sql = "
        DELETE FROM topic 
        WHERE id = '{$filtered['id']}';
    ";
    $result = mysqli_multi_query($conn, $sql);
    if($result === false){
        echo mysqli_error($conn);
    }else{
        echo '삭제완료. <a href="index.php">돌아가기</a>';
    }
?>