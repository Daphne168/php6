<!-- 全部的球放進盒子裡，隨機挑出六個 -->
<?php
$min = 1;
$max = 42;
$total = 6;

// 用PHP二支函式即可做出樂透猜數字
$a_ball = range($min, $max);
$a_box = array_rand($a_ball, $total);


// 顯示
$str = '';
foreach($a_box as $one)
{
    $str .= '<img src="images/' . $a_ball[$one] . '.jpg" width="81" height="81" />';
}


// 排序
sort($a_box);
$str2 = '';
foreach($a_box as $one)
{
    $str2 .= '<img src="images/' . $a_ball[$one] . '.jpg" width="81" height="81" />';
}



$html = <<< HEREDOC
<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
<title>Test</title>
</head>

<body>
<p>我的樂透猜測</p>
<p>原始順序</p>
<p>{$str}</p>
<p>排序後</p>
<p>{$str2}</p>
</body>
</html>
HEREDOC;

echo $html;
?>