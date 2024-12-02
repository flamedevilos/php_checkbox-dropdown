<?php require "checkbox_To_Db_Script.php"; ?>

<form action="" method="post">
    <p>I. Multiple Checkbox send to the Database</p>
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
        <span>Please choose your favorite Brand from the list.</span>
        <ol>
            <li>
                <label for="Brands">Mobile Barnds</label><br>
                <input type="checkbox" name="mobiles[]" value="nokia" <?php if (isset($mobiles) && in_array("nokia", $mobiles)) {
                            echo 'checked="checked"';
                        }?>> Nokia<br>
                <input type="checkbox" name="mobiles[]" value="vivo" <?php if (isset($mobiles) && in_array("vivo", $mobiles)) {
                            echo 'checked="checked"';
                        }?>> Vivo<br>
                <input type="checkbox" name="mobiles[]" value="red_mi" <?php if (isset($mobiles) && in_array("red_mi", $mobiles)) {
                            echo 'checked="checked"';
                        }?>> Red MI<br>
                <input type="checkbox" name="mobiles[]" value="karbon" <?php if (isset($mobiles) && in_array("karbon", $mobiles)) {
                            echo 'checked="checked"';
                        }?>> Karbon<br>
                <input type="checkbox" name="mobiles[]" value="samsung" <?php if (isset($mobiles) && in_array("samsung", $mobiles)) {
                            echo 'checked="checked"';
                        }?>> Samsung<br>
                <input type="checkbox" name="mobiles[]" value="motorella" <?php if (isset($mobiles) && in_array("motorella", $mobiles)) {
                            echo 'checked="checked"';
                        }?>> Motorella<br>
                <input type="checkbox" name="mobiles[]" value="nothing" <?php if (isset($mobiles) && in_array("nothing", $mobiles)) {
                            echo 'checked="checked"';
                        }?>><span style='color: crimson;'>Nothing</span><br><br>
                <span style='color: crimson;'><?php if (isset($mobileError)) {
                            echo $mobileError;
                        }  ?>
                </span>
            </li>
            <li>
                <label for="Brands">Cars Barnds</label><br>
                <input type="checkbox" name="cars[]" value="bmw" <?php if (isset($cars) && in_array("bmw", $cars)) {
                            echo 'checked="checked"';
                        }?>>BMW</br>
                <input type="checkbox" name="cars[]" value="volvo" <?php if (isset($cars) && in_array("volvo", $cars)) {
                            echo 'checked="checked"';
                        }?>>Volvo</br>
                <input type="checkbox" name="cars[]" value="porche" <?php if (isset($cars) && in_array("porche", $cars)) {
                            echo 'checked="checked"';
                        }?>>Porche</br>
                <input type="checkbox" name="cars[]" value="audi" <?php if (isset($cars) && in_array("audi", $cars)) {
                            echo 'checked="checked"';
                        }?>>Audi</br>
                <input type="checkbox" name="cars[]" value="benz" <?php if (isset($cars) && in_array("benz", $cars)) {
                            echo 'checked="checked"';
                        }?>>Benz</br>
                <input type="checkbox" name="cars[]" value="fiat" <?php if (isset($cars) && in_array("fiat", $cars)) {
                            echo 'checked="checked"';
                        }?>>Fiat</br>
                <input type="checkbox" name="cars[]" value="nothing" <?php if (isset($cars) && in_array("nothing", $cars)) {
                            echo 'checked="checked"';
                        }?>><span style='color: crimson;'>Nothing</span><br><br>
                <span style='color: crimson;'><?php if (isset($carsError)) {
                            echo $carsError;
                        }  ?>
                </span>

            </li>
            <li>
                <label for="Brands">Fashion Barnds</label><br>
                <input type="checkbox" name="fashions[]" value="levis" <?php if (isset($fashions) && in_array("levis", $fashions)) {
                            echo 'checked="checked"';
                        }?>>Levis</br>
                <input type="checkbox" name="fashions[]" value="puma" <?php if (isset($fashions) && in_array("puma", $fashions)) {
                            echo 'checked="checked"';
                        }?>>Puma</br>
                <input type="checkbox" name="fashions[]" value="nike" <?php if (isset($fashions) && in_array("nike", $fashions)) {
                            echo 'checked="checked"';
                        }?>>Nike</br>
                <input type="checkbox" name="fashions[]" value="adidas" <?php if (isset($fashions) && in_array("adidas", $fashions)) {
                            echo 'checked="checked"';
                        }?>>Adidas</br>
                <input type="checkbox" name="fashions[]" value="newyork" <?php if (isset($fashions) && in_array("newyork", $fashions)) {
                            echo 'checked="checked"';
                        }?>>Newyork</br>
                <input type="checkbox" name="fashions[]" value="newBalance" <?php if (isset($fashions) && in_array("newbalance", $fashions)) {
                            echo 'checked="checked"';
                        }?>>New Balance</br>
                <input type="checkbox" name="fashions[]" value="nothing" <?php if (isset($fashions) && in_array("nothing", $fashions)) {
                            echo 'checked="checked"';
                        }?>><span style='color: crimson;'>Nothing</span><br><br>
                <span style='color: crimson;'><?php if (isset($fashionsError)) {
                            echo $fashionsError;
                        }  ?>
                </span>
            </li>
            <li>
                <label for="Brands">Computer Barnds</label><br>
                <input type="checkbox" name="computers[]" value="apple" <?php if (isset($computers) && in_array("apple", $computers)) {
                            echo 'checked="checked"';
                        }?>>Apple</br>
                <input type="checkbox" name="computers[]" value="acer" <?php if (isset($computers) && in_array("acer", $computers)) {
                            echo 'checked="checked"';
                        }?>>Acer</br>
                <input type="checkbox" name="computers[]" value="ibm" <?php if (isset($computers) && in_array("ibm", $computers)) {
                            echo 'checked="checked"';
                        }?>>IBM</br>
                <input type="checkbox" name="computers[]" value="lenovo" <?php if (isset($computers) && in_array("lenovo", $computers)) {
                            echo 'checked="checked"';
                        }?>>Lenovo</br>
                <input type="checkbox" name="computers[]" value="asus" <?php if (isset($computers) && in_array("asus", $computers)) {
                            echo 'checked="checked"';
                        }?>>Asus</br>
                <input type="checkbox" name="computers[]" value="Samsung" <?php if (isset($computers) && in_array("samsung", $computers)) {
                            echo 'checked="checked"';
                        }?>>Samsung</br>
                <input type="checkbox" name="computers[]" value="nothing" <?php if (isset($computers) && in_array("nothing", $computers)) {
                            echo 'checked="checked"';
                        }?>><span style='color: crimson;'>Nothing</span><br><br>
                <span style='color: crimson;'><?php if (isset($computersError)) {
                            echo $computersError;
                        }  ?>
                </span>
            </li>
            <li>
                <label for="Brands">Drink Barnds</label><br>
                <input type="checkbox" name="drinks[]" value="water" <?php if (isset($drinks) && in_array("water", $drinks)) {
                            echo 'checked="checked"';
                        }?>>Water</br>
                <input type="checkbox" name="drinks[]" value="oil" <?php if (isset($drinks) && in_array("oil", $drinks)) {
                            echo 'checked="checked"';
                        }?>>Oil</br>
                <input type="checkbox" name="drinks[]" value="tee" <?php if (isset($drinks) && in_array("tee", $drinks)) {
                            echo 'checked="checked"';
                        }?>>Tee</br>
                <input type="checkbox" name="drinks[]" value="juis" <?php if (isset($drinks) && in_array("juis", $drinks)) {
                            echo 'checked="checked"';
                        }?>>Juis</br>
                <input type="checkbox" name="drinks[]" value="alcoholic" <?php if (isset($drinks) && in_array("alcoholic", $drinks)) {
                            echo 'checked="checked"';
                        }?>>Alcoholic</br>
                <input type="checkbox" name="drinks[]" value="carbonated" <?php if (isset($drinks) && in_array("carbonated", $drinks)) {
                            echo 'checked="checked"';
                        }?>>Carbonated</br>
                <input type="checkbox" name="drinks[]" value="nothing" <?php if (isset($drinks) && in_array("nothing", $drinks)) {
                            echo 'checked="checked"';
                        }?>><span style='color: crimson;'>Nothing</span><br><br>
                <span style='color: crimson;'><?php if (isset($drinksError)) {
                            echo $drinksError;
                        }  ?>
                </span>
            </li>
        </ol>
        <button type="submit" name="submit">Save &rarr;</button>
    </div>

</form>