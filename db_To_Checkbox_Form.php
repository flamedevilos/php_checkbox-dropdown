<?php
    require "database.php";

    $sql = "SELECT * FROM foods";
    $result = $conn->query($sql); 
    
    $food = [];
?>

<form action="" method="get">
    <p>II. Fetch from the Database Multiple Checkbox </p>
    <div class="multi-choise">
        <!-- Inserted msg -->
        <?php if (isset($_GET['success'])) {            
            echo "<span style='color:green'>" . $_GET['success'] . "</span>";
        }?>
        <!-- Alert 'no record' -->
        <?php if (isset($_GET['failed'])) {            
            echo "<span style='color:red'>" . $_GET['failed'] . "</span>";
        }?>
        <br>
        <span>Please choose your favorite Food from the list.</span>
        <ol>
            <li>
                <label for="Food">Salted Food</label><br>
                <?php   
                    if ($result->num_rows > 0) {                        
                        foreach($result as $salted) { 
                ?>
                <input type="checkbox" name="food[]" value="<?= $salted['id'] ?>"
                    <?php if (in_array('id', $salted)) { echo "checked"; }?> />
                <?= $salted['salted_name'] ?> <br>
                <?php
                        }
                    } else {
                        echo "No Record! " . $conn->error;
                    }                    
                ?>
            </li>
            <!-- Output from salted food -->
            <li>
                <label for="Food">Sweet Food</label><br>
                <?php   
                    if ($result->num_rows > 0) {                        
                        foreach($result as $value) { 
                ?>
                <input type="checkbox" name="food[]" value="<?= $value['id'] ?>"
                    <?php if (in_array('food', $value)) { echo 'checked="checked"'; }?> />
                <?= $value['sweet_name'] ?> <br>
                <?php
                        }
                    } else {
                        echo "No Record! " . $conn->error;
                    }
                ?>
            </li>
            <li>
                <label for="Food">Salted Food</label><br>
                <?php   
                    if ($result->num_rows > 0) {                        
                        foreach($result as $value) { 
                ?>
                <input type="checkbox" name="food[]" value="<?= $value['id'] ?>"
                    <?php if (in_array('food', $value)) { echo 'checked="checked"'; }?> />
                <?= $value['drink_name'] ?> <br>
                <?php
                        }
                    } else {
                        echo "No Record! " . $conn->error;
                    }
                ?>
            </li>
            <li>
                <label for="Food">Salted Food</label><br>
                <?php   
                    if ($result->num_rows > 0) {                        
                        foreach($result as $value) { 
                ?>
                <input type="checkbox" name="food[]" value="<?= $value['id'] ?>"
                    <?php if (in_array('food', $value)) { echo 'checked="checked"'; }?> />
                <?= $value['extra_name'] ?> <br>
                <?php
                        }
                    } else {
                        echo "No Record! " . $conn->error;
                    }
                ?>
            </li>
        </ol>
        <br>
        <button type="submit" name="submit">Save &rarr;</button>
    </div>

</form>