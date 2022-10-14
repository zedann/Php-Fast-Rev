<?php

// require_once "DB.php";
// $db = new DB();
// echo "<pre>";
// // $data = $db->select("users","*")->where("name","=","ZEDAN")->andWhere("email","=","z@z.com")->getAll();
// // print_r($data);
// $user = [
// "name"=>"marco",
// "email"=>"ma@m.c",
// ];
// if($db->insert('users',$user)->execute()){
//     echo "تم اضافة البيانات بنجاح";
// }

// require_once "Export/Export.php";
// require_once "Export/abstractExport.php";
// require_once "Export/pdf.php";
// require_once "Export/word.php";
// require_once "Export/excel.php";


// $export = new Export("mdata string",new pdf());
// $export->generate();

// class welcome {
//     public static function hi(){
        
//     }
//     public function bye(){
//         echo self::hi(); // this => normal fun // self => static fun or const
//         echo "<br>bye" ;
//     }
// }
// $w = new welcome;
// $w::hi();
// // welcome::hi();
// require "traits/trait.php";

// require "MagicMethods/car.php";
// // $car = new car;
// // // $car->stop('mohamed');
// // // $car->name = "ahmed";
// // echo $car->name;

// //override/overloading

// // $car = new car;
// // $car->move();
// $car = new car;
// $car->alo("10");


//***autoload */

spl_autoload_register(function($classname){
    require_once "$classname.php";
});
$car = new car;
$car->move();












  

