<?php 
header('Content-type:text/html;charset=utf-8');
function p($var){
	echo '<pre style="padding:5px;border:1px solid #ccc;background: #ddd">';
	print_r($var);
	echo '</pre>';
}

function message($msg,$url){
	$str = <<<str
<script>
alert('{$msg}');
location.href='{$url}';
</script>
str;
	echo $str;
}

/**
 * 重置数组
 * @return array
 */
function resetArr(){
	$v = current($_FILES);
	$temp = [];
	//如果是多文件上传
	if(is_array($v['type'])){
		foreach ( $v['type'] as $k => $type ) {
			$temp[] = [
				'name' => $v['name'][$k],
				'type'=> $type,
				'tmp_name'=> $v['tmp_name'][$k],
				'error'=> $v['error'][$k],
				'size'=> $v['size'][$k],
			];
		}
	}else{//否则是单文件上传
		$temp[] = $v;
	}

	return $temp;
}

function up(){
	//重置数组
	$arr = resetArr();
	foreach ( $arr as $v ) {
		if(is_uploaded_file($v['tmp_name'])){
			//上传目录
			$path = './Upload/' . date('ymd');
			is_dir($path) || mkdir($path,0777,true);
			//类型
			$type = strrchr($v['name'],'.');
			//文件名
			$fileName = time() . mt_rand(0,99999) . $type;
			//完整的目标路径
			$dest = $path . '/' . $fileName;
			//移动上传文件
			move_uploaded_file($v['tmp_name'],$dest);
		}
	}
}


//设置时区
date_default_timezone_set('PRC');

//定义是否是POST提交的常量
define('IS_POST',($_SERVER['REQUEST_METHOD'] == 'POST') ? true : false);








 ?>