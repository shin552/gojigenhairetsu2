<?php
$aks = array();


$aks['line1']['a1'] = 'あ';
$aks['line1']['a2'] = 'い';
$aks['line1']['a3'] = 'う';
$aks['line1']['a4'] = 'え';
$aks['line1']['a5'] = 'お';
 
$aks['line2']['k1'] = 'か';
$aks['line2']['k2'] = 'き';
$aks['line2']['k3'] = 'く';
$aks['line2']['k4'] = 'け';
$aks['line2']['k5'] = 'こ';
 
$aks['line3']['s1'] = 'さ';
$aks['line3']['s2'] = 'し';
$aks['line3']['s3'] = 'す';
$aks['line3']['s4'] = 'せ';
$aks['line3']['s5'] = 'そ';
 
echo $aks['line1']['a1'].'<br/>';
echo $aks['line1']['a2'].'<br/>';
echo $aks['line2']['k1'].'<br/>';
echo $aks['line2']['k2'].'<br/>';
echo $aks['line3']['s1'].'<br/>';
echo $aks['line3']['s2'].'<br/>';
 
foreach($aks as $array){
 echo "<br/>";
 foreach($array as $key => $value){
 echo "key:{$key}  value:{$value}<br/>";
 }
}
?>