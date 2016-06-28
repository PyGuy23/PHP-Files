<?php

/*
date_default_timezone_set('America/New_York');
header('Content-type: application/json');

class Fruit implements JsonSerializable {
    public
        $street = 'Apple Seed',
        $captured = null;
        
        $data = array('louis', 'Independence Blvd', 'captured');

    public function __construct() {
        $this->captured = new DateTime();
    }

    public function jsonSerialize() {
        return [
            'street' => $this->street,
            'captured' => $this->captured->format(DateTime::ISO8601)
        ];
    }
}
echo json_encode(new Fruit());

/*/


$str_data = file_get_contents("results.json");
$data = json_decode($str_data,true);
 
echo "data so far: ".$data["case_id"]["pursuit"][0]."\n";
 
// Modify the value, and write the structure to a file "data_out.json"
//
$data["case_id"]["pursuit"][0] = "in progress";
 
$fh = fopen("results.json", 'w')
      or die("Error opening output file");
fwrite($fh, json_encode($data,JSON_UNESCAPED_UNICODE));
fclose($fh);
?>