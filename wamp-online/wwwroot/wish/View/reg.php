<?php
$data=include './Public/Data/Userdata.php';
$data[] = [
    'username' => $_POST['username'],
    'password' => md5($_POST['password'])
];
file_put_contents('./Public/Data/Userdata.php','<?php return ' . var_export($data,true) . '?>');
echo '注册成功';
?>