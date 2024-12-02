<?php
    $brands_tb = "CREATE TABLE IF NOT EXISTS brands (
                        id INT PRIMARY KEY AUTO_INCREMENT,
                        mobiles VARCHAR (50),   
                        cars VARCHAR (50),
                        fashions VARCHAR (50),
                        computers VARCHAR (50),
                        drinks VARCHAR (50),                     
                        created_at DATETIME DEFAULT CURRENT_TIMESTAMP
                    )";
    if ($conn->query($brands_tb) === FALSE) {            
        echo "Creating Brands table failed! Check server_connection or DB";
    }

    $food_tb = "CREATE TABLE IF NOT EXISTS foods (
                    id INT PRIMARY KEY auto_increment,
                    salted_name VARCHAR (100) DEFAULT ' ',
                    sweet_name VARCHAR (100) DEFAULT ' ',
                    drink_name VARCHAR (100) DEFAULT ' ',
                    extra_name VARCHAR (100) DEFAULT ' ',
                    created_at DATETIME DEFAULT CURRENT_TIMESTAMP        
            )";
    $result = $conn->query($food_tb);    
    if (!$result) {            
    echo "Creating Foods table failed! Check server_connection or DB";
    }

    $insertFood = "INSERT INTO foods (salted_name, sweet_name, drink_name, extra_name)
                    VALUES 	('Pizza', 'Cookies', 'Water', 'Ice Creme'), 
                            ('Spagetti', 'Chocolade', 'Tee', 'Meat'), 
                            ('Hamburger', 'Sponge Cake', 'Juis', 'Candies'), 
                            ('Döner', 'Mouse Cacke', 'Carbonated','Schwingum'), 
                            ('See Salad', 'Creme', 'Alcohol', 'Vegets'), 
                            ('Couscous', 'Croissant', 'Yaoguhrt', 'Milk'), 
                            ('Gouda', 'Pain au Chocolat', 'Caffe', 'Medicine'), 
                            ('Other', 'Other', 'Other', 'Other')";

    if ($conn->query($insertFood) === FALSE) {            
        echo "Inserting Foods Values failed! Check server_connection or DB";
        }
   
?>