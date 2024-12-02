<?php
    
    require "database.php";
    
    $mobiles = $cars = $fashions = $computers = $drinks = [];
    $mobileError = $carsError = $fashionsError = $computersError = $drinksError = "";

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $mobiles = $_POST['mobiles'];
        $cars = $_POST['cars'];
        $fashions = $_POST['fashions'];
        $computers = $_POST['computers'];
        $drinks = $_POST['drinks'];
                 
                      
        if (isset($_POST['submit'])) {
            
            if (empty($mobiles)) {
                $mobileError = "please choose your favorite Mobile!";                   
            } elseif ($mobiles) {
                echo $mobilestr = implode(', ', $mobiles);
            }
            if (empty($cars)) {
                $carsError = "Please choose your favorite Cars!";
            } elseif ($cars) {
                echo $carstr = implode(', ', $cars);
            }

            if (empty($fashions)) {
                $fashionsError = "Please choose your favorite fashions!";
            } elseif ($fashions) {
                echo $fashoinstr = implode(', ', $fashions);
            }
            
            if (empty($computers)) {
                $computersError = "Please choose your favorite PCs!";    
            } elseif ($computers) {
                echo $computerstr = implode(', ', $computers);
            } 

            if (empty($drinks)) {
                $drinksError = "Please choose your favorite Drinks!";
            } elseif ($drinks) {
                echo $drinkstr = implode(', ', $drinks);
            }
            
            if ($mobiles && $cars && $fashions && $computers && $drinks) {
                
                $sql = "INSERT INTO brands (mobiles, cars, fashions, computers, drinks)" . 
                "VALUES ('$mobilestr', '$carstr', '$fashoinstr', '$computerstr', '$drinkstr')";
                $result = $conn->query($sql);
            }          
            
            if (!$result) {                
                header("location: index.php?failed=Inseted failed!");
            } else {
                header("location: index.php?success=Inseted successfully");
                $mobiles = $cars = $fashions = $computers = $drinks = [];                
                              
            }
        }
    }

?>