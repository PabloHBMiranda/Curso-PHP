<?php
//    $xml = simplexml_load_file('arquivo.xml');
//    echo $xml->informacoes->item->title;
//
//    $test_array = array(
//        'bla' => 'blub',
//        'foo' => 'bar',
//        'another_array' => array(
//            'statck' => 'overflow',
//        ),
//    );
//    $xml = new SimpleXMLElement('<root/>');
//    array_walk_recursive($test_array, array($xml, 'addChild'));
//    print $xml->asXML();


$json = '{"a":1,"b":2,"c":3,"d":4,"e":5}';

var_dump(json_decode($json));
var_dump(json_decode($json, true));


?>
