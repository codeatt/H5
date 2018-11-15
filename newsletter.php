<?php
if($_POST){
  $fileName = 'newsletter.json';
  if(file_exists($fileName)){
    $content = file_get_contents($fileName);
    $content = json_decode($content, true);

  } else {
    $content = [];
  }
  $data = $_POST;
  $data['data-hora'] = date("Y-m-d H:i:s");
  $data['ip'] = getIP();
  $content[] = $data;
  $content = json_encode($content);
  file_put_contents($fileName, $content);
}

function getIP()
{
    if (!empty($_SERVER['HTTP_CLIENT_IP']))
    { $ip=$_SERVER['HTTP_CLIENT_IP']; }
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
    { $ip=$_SERVER['HTTP_X_FORWARDED_FOR']; }
    else
    { $ip=$_SERVER['REMOTE_ADDR']; }
    return $ip;
}

?>
