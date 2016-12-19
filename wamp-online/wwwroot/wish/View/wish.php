<?php
//$data=include './Public/Data/Wishdata.php';
$this->data[] = [
    'username' => $_SESSION['username'],
    'wish' => $_POST['wish'],
];
$data1[]=[
    'username' => $_SESSION['username'],
    'wish' => $_POST['wish'],
    'numt' => mt_rand(50,500),
    'numl' => mt_rand(100,800),
];
echo json_encode($data1);
file_put_contents('./Public/Data/Wishdata.php','<?php return ' . var_export($this->data,true) . '?>');
?>

