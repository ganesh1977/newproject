<?php
    $d = '{"1561":{"title":"Mr. Gasket Fuel Pressure Gauge - 0-15 PSI - 1-1/2 Inch Diameter","image":"//images.holley.com/x220/0f46a2cae4fc364b6c370b6e5a8b24509470fbc4.jpg","partId":"1561","orderId":["550-1620","550-511-5PX-SBC","1561"],"orderIdsLength":3},"9710":{"title":"Mr. Gasket Adjustable Fuel Pressure Regulator 1-6 Psi","image":"//images.holley.com/x220/22973f2d657b75541755f86bfd05a7035cf5cbc9.jpg","partId":"9710","orderId":["550-1620","550-511-5PX-SBC","1561","9710"],"orderIdsLength":4},"550-1620":{"title":"Holley EFI Terminator X Max GM Gen V LT Direct Injection Kit - Early","image":"//images.holley.com/x220/623840c3a982d7c5cf53c07f1e0910d68c796922.jpg","partId":"550-1620","orderId":["550-1620"],"orderIdsLength":1},"550-511-5PX-SBC":{"title":"Sniper 2 EFI Bundle with HyperSpark Ignition System","image":"//images.holley.com/x220/389abe957c4dd9c877f5e6cb0506d9e7bf3d72d6.jpg","partId":"550-511-5PX-SBC","orderId":["550-1620","550-511-5PX-SBC"],"orderIdsLength":2}}';
    $jsonConvertToArray = json_decode($d,true);
    
    print_r($jsonConvertToArray);
    ksort($jsonConvertToArray);
    print_r($jsonConvertToArray);

    /*foreach($jsonConvertToArray as $key=>$dataSort)
    {
        print_r($dataSort);
    }*/

