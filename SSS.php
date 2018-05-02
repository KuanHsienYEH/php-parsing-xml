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
	
	
	
	
		/*
        if ($data->nodeType === XMLreader::ELEMENT 
            && $data->localName === 'ap')
        {
		
			 
				 
	}					 
			/*
			if ($data->getAttribute('name') == "52") {
                echo $data->getAttribute('name') . PHP_EOL;
				//get sys data
		
				
				}
			*/	
				
				/*
				 if ($data->nodeType === XMLreader::ELEMENT 
				 && $data->localName === 'sys'){
					if ($data->nodeType === XMLreader::ELEMENT 
					&& $data->localName === 'db'){
						if ($data->getAttribute('name') ) {
						echo $data->getAttribute('name') . PHP_EOL;
						}
					}
				}
				*/
				
				
				//echo $data->moveToAttribute("sys"). PHP_EOL;
				//echo "1";
				
				//get apini data
			
				
        
		
}
   print_r($arr);

/*
 while ($data->read()){
	if($data -> nodeType <=2){ 
          switch($data->name){
           //節點名稱是  則讀取資料並取出節點內的值	
		    case "service":
             $data->read();
             $arr[$j]['service'] = $data -> value;
             break;
			case "service_des":
             $data->read();
             $arr[$j]['service_des'] = $data -> value;
			 //當這個元素的最後一個節點被讀取之後，代表這一個元素內的同一筆資料被讀取完了，接著要讀取下一個，所以計數的$j必須在這裡+1
			 $j++;
             break;
		  }		 
	}	  
}
   print_r($arr);

*/





?>




