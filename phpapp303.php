<!-- Grade 
        mark >= 80 grade A
        mark >= 70 && mark <= 80 grade B 
        mark >= 60 && mark <= 70 grade C
        mark >= 50 && mark <= 60 grade D
        mark <= 50 grade F
--> 
<form method="POST" action="phpapp303.php">
    <label>Score: </label>
    <input type="text" name="mark">
    <input type="submit" value="OK">
</form>
<hr / >

<?php
    $mark = $_POST['mark'];
    $grade = "";
    if($mark >= 80 && $mark <= 100){
        //echo "A" ; 
        $grade = 'A' ;
    }

    else if($mark >= 70 && $mark < 80){
        //echo "B" ;
        $grade = 'B' ;
    }

    else if($mark >= 60 && $mark < 70){
       // echo "C" ;
       $grade = 'C' ;
    }
    
    else if($mark >= 50 && $mark < 60){
        //echo "D" ; 
        $grade = 'D' ;
    }

    else if($mark <50) {
        //echo "F" ;
        $grade = 'F' ;
    }
    else{
    }
    echo "Scroere = $mark , Grade is"," ", $grade  ;



?>