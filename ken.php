<?php

$reader = new XMLReader(); 
$reader->open("global.xml", 'UTF-8'); 
$nodeName = ''; 
$dataList = array(); 
$data = array(); 

$doc = new DOMDocument;

while ($reader->read()){ 
    if($reader->nodeType == XMLReader::ELEMENT){ 
        $nodeName = $reader->name; 
        //echo "nodeName=" . $nodeName . PHP_EOL;
        if($nodeName=='sys'){ 
            
            $nodeName = $reader->name; 
            //echo "nodeName=" . $nodeName . PHP_EOL;
            $node = simplexml_import_dom($doc->importNode($reader->expand(), true));
            //var_dump($node);
            //echo 'nodename=' . $node->nodeName . PHP_EOL;
            //echo "count:" . count($node->db) . PHP_EOL;
            //var_dump($node);
            $odbc = "";
            foreach ($node->db AS $item) {
                //var_dump($item); 
                if ($odbc == "") {
                    $odbc = $item['name'] ;
                } else {
                    $odbc = $odbc . "," . $item['name'];
                }
                echo "item=" . $item['name'] . PHP_EOL;
                echo "===========================" . PHP_EOL;
            }

            echo "odbc=" . $odbc . PHP_EOL;

        } 
        /*elseif($nodeName=='person'){ 
            $data = array( 
                'username'=>$reader->getAttribute('username'), 
                'age'=>$reader->getAttribute('age'), 
            ); 
        } */
    }  
} 
$reader->close(); 