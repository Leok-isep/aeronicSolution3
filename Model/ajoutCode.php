<?php


function generateRandomNumer(){
    $randomString = substr(MD5(time()),5);

    //Check newly generated Code exist in DB table or not.
    $query = "select * from icodes where col_name='".$randomString."'";
    $result = $db->exec($query);
    $resultCount=mysqli_num_rows($result);

    if($resultCount>0){
        //IF code is already exist then function will call it self until unique code has been generated and inserted in Db.
        generateRandomNumer();
    }else{
        //Unique generated code will be inserted in DB.
        echo '$randomString';
    }
}





?>