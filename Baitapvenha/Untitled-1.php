<?php
class Product {
    public $id;
    public $name;
    public $price;
    public $amount;
    public $company;
    public $year;

    public function __construct($id, $name, $price, $amount, $company, $year) {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->amount = $amount;
        $this->company = $company;
        $this->year = $year;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Quản lý sản phẩm</title>
</head>
<body>
    <h1>Quản lý sản phẩm</h1>
    <form method="post">
        <label for="id">ID:</label>
        <input type="text" name="id" required><br>

        <label for="name">Tên sản phẩm:</label>
        <input type="text" name="name" required><br>

        <label for="price">Giá:</label>
        <input type="number" name="price" required><br>

        <label for="amount">Số lượng:</label>
        <input type="number" name="amount" required><br>

        <label for="company">Nhà sản xuất:</label>
        <input type="text" name="company" required><br>

        <label for="year">Năm sản xuất:</label>
        <input type="number" name="year" required><br>

        <input type="submit" value="Thêm sản phẩm">
    </form>
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $name = $_POST["name"];
    $price = $_POST["price"];
    $amount = $_POST["amount"];
    $company = $_POST["company"];
    $year = $_POST["year"];

    // Tạo đối tượng Product
    $product = new Product($id, $name, $price, $amount, $company, $year);

    // Lưu vào mảng (hoặc cơ sở dữ liệu)
    $products[] = $product;

    // Hiển thị danh sách sản phẩm
    echo "<h2>Danh sách sản phẩm:</h2>";
    foreach ($products as $p) {
        echo "ID: " . $p->id . ", Tên: " . $p->name . ", Giá: $" . $p->price . "<br>";
    }
}
?>
</body>
</html>
