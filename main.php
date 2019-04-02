<?php
$data = new XMLreader();
$data->open('global.xml');
$arr = array();  
$j=0;
//$arr1=array();


while ($data->read())
{
	switch($data->name){
		case $data->nodeType === XMLreader::ELEMENT 
            && $data->localName === 'ap':
			//echo $data->getAttribute('name') . PHP_EOL;
			$arr['ap number'][$j] = $data->getAttribute('name');
			
		break;
		case "service":
			if($data -> nodeType <=2){
				$data->read();
				//echo $data -> value . PHP_EOL;
				$arr['ap name'][$j] = $data -> value;	
			}
		break;
		case "service_des":
			if($data -> nodeType <=2){
				$data->read();
				//echo $data -> value . PHP_EOL;
				$arr['serve'][$j] = $data -> value;
			}
		break;
		case $data->nodeType === XMLreader::ELEMENT 
            && $data->localName === 'db':
			//echo $data->getAttribute('name') . PHP_EOL;
			$arr['db'][$j] = $data->getAttribute('name');
			$j++;
		break;
	}	
}
   print_r($arr);
?>




