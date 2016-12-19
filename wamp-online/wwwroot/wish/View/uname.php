<?php
$reg=include './Public/Data/Userdata.php';
    $u = $_POST['u'];
    foreach ($reg as $v) {
        if ($u == $v['username']) {
            echo 1;
            exit;
        }
    }
    echo 0;
?>