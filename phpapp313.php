<?php
    $employee = array(
    "Name" => "Alex",
    "Email" => "Alex@gmail.com",
    "Age"=> 21, 
    "Gender"=> "male" 
);

foreach($employee as $key => $element) {
    echo $key, ":", $element;
}

?>