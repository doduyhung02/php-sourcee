<!DOCTYPE html>
<html>
<head>
    <title>Product Information</title>
    <style>
        form {
            margin: 20px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 300px;
        }
        label {
            display: block;
            margin-bottom: 10px;
        }
        input[type="text"] {
            width: 100%;
            padding: 5px;
            margin-bottom: 10px;
        }
        input[type="input"] {
            padding: 10px 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="input"]:hover {
            background-color: #45a049;
        }
        h2 {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <h2>Product Information</h2>
    <form method="post" action="">
        <label for="id">ID:</label>
        <input type="text" name="id" id="id"><br><br>
        <label for="name">Name:</label>
        <input type="text" name="name" id="name"><br><br>
        <label for="company">Company:</label>
        <input type="text" name="company" id="company"><br><br>
        <label for="color">Color:</label>
        <input type="text" name="color" id="color"><br><br>
        <label for="amount">Amount:</label>
        <input type="text" name="amount" id="amount"><br><br>
        <label for="price">Price:</label>
        <input type="text" name="price" id="price"><br><br>
        <input type="input" value="Input">
    </form>
    <?php
    require_once "coreClass.php";
    $id = $name = $company = $color = $amount = $price = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = test_input($_POST['id']);
        $name = test_input($_POST['name']);
        $company = test_input($_POST['company']);
        $color = test_input($_POST['color']);
        $amount = test_input($_POST['amount']);
        $price = test_input($_POST['price']);

        // Create a Product object
        $product = new Product($id, $name, $company, $color, $amount, $price);
        echo $product->toString();

        function test_input($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;   
        }
    }
    ?>
</body>
</html>