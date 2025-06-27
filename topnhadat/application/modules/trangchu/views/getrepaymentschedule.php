<? 
$EXT=explode('.',$name);
$app=end($EXT)=='pdf'?'pdf':'x-msdownload';//print_r($app);
$outputName='http://file3.batdongsan.com.vn/FileUpload/'.$name;
header('Content-Disposition: attachment; filename="'.$_SERVER['HTTP_HOST'].'_'.$name.'"');
header('Content-type: application/'.$app); 
echo (file_get_contents($outputName)); 