<?php

try {

    throw new Exception("Houve um erro", 500);

} catch(Exception $e){

    echo json_encode(array(
        "message"=>$e->getMessage(),
        "line"=>$e->getline(),
        "file"=>$e->getfile(),
        "code"=>$e->getcode()
    ));  

}