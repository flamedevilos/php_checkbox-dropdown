<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php_Checkbox & Dropdown</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h2>Checkbox & Dropdown</h2>
    </header>
    <main>
        <a href="index.php">Refresh</a>
        <h3># Checkbox #</h3>
        <?php include "checkbox_Form_To_DB.php"; ?>
        <?php include "db_To_Checkbox_Form.php"; ?>
        <h3># DropDown #</h3>
        <?php include "dropdownToDB.php"; ?>
    </main>
    <hr>
    <footer></footer>
</body>

</html>