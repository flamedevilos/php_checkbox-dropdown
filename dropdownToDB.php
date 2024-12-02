<?php 
    require "database.php";

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $mobile = $_POST['mobiles'];
        $cars = $_POST['cars'];
        $fashions = $_POST['fashions'];
        $computers = $_POST['computers'];
        $drinks = $_POST['drinks'];

        if (isset($_POST['submit'])) {
            $sql = "INSERT INTO brands (mobiles, cars, fashions, computers, drinks) VALUE ('$mobile', '$cars', '$fashions', '$computers', '$drinks')";
            $result = $conn->query($sql);

            if ($result) {
                header("location: index.php?success= Insert successfully");
            } else {
                header("location: index.php?failed= Insert failed!");
            }
            
        }
    }
?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

    <p>I. Dropdown to the Database</p>
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
        <span>b. Dropdown with Checkbox to DB</span><br>
        <span style="color: blueviolet;">Please choose your favorite Brand from the list.</span><br><br>
        <select name="mobiles">
            <option selected disabled>Select Mobile</option>
            <option value="nokia">Nokia</option>
            <option value="apple">Apple</option>
            <option value="samsung">Samsung</option>
            <option value="sony">Sony</option>
            <option value="motorella">Motorella</option>
        </select>
        <select name="cars">
            <option selected disabled>Select Car</option>
            <option value="BMW">BMW</option>
            <option value="Audi">Audi</option>
            <option value="Skoda">Skoda</option>
            <option value="Benz">Benz</option>
            <option value="Renault">Renault</option>
        </select>
        <select name="fashions">
            <option selected disabled>Select Fashion</option>
            <option value="Celio">Celio</option>
            <option value="Adidas">Adidas</option>
            <option value="Nike">Nike</option>
            <option value="H&M">H&M</option>
            <option value="Puma">Puma</option>
        </select>
        <select name="computers">
            <option selected disabled>Select Mobile</option>
            <option value="HP">HP</option>
            <option value="apple">Apple</option>
            <option value="samsung">Samsung</option>
            <option value="sony">Sony</option>
            <option value="Acer">Acer</option>
        </select>
        <select name="drinks">
            <option selected disabled>Select Mobile</option>
            <option value="Volvic">Volvic</option>
            <option value="Pfana">Pfana</option>
            <option value="Coca">Coca</option>
            <option value="Shark">Shark</option>
            <option value="kaufland">kaufland</option>
        </select>


        <br><br>
        <button type="submit" name="submit">Save &rarr;</button>
    </div>
</form>