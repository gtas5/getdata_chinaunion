<?php


echo "hello world\n";

$data = array ('id' => '256575jexowD22890858zjVGIp591198',
);

//转换成发包请求字符串
$data = http_build_query($data);

//设置发包协议数据
$opts = array (
	'http' => array (
		'method' => 'POST',
		'header'=> "Content-type: application/x-www-form-urlencoded",
		"Content-Length: " . strlen($data),
		'content' => $data
	)
);

//设置头文件信息
$context = stream_context_create($opts);

$html = file_get_contents('http://iservice.10010.com/e3/static/life/BusinessHallDto', false, $context);

echo $html;

?>
