<?php include "db.php"; ?>

<!DOCTYPE html>
<html>
<head>
<title>Add Customer</title>
</head>
<body>

<h2>Add Customer</h2>

<form method="post">
Name: <input type="text" name="name" required><br><br>
Email: <input type="email" name="email" required><br><br>
Phone: <input type="text" name="phone" required><br><br>
Address: <textarea name="address"></textarea><br><br>

<button type="submit" name="save">Save</button>
</form>

<?php
if (isset($_POST['save'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    $sql = "INSERT INTO customers (name, email, phone, address)
            VALUES ('$name', '$email', '$phone', '$address')";

    if (mysqli_query($conn, $sql)) {
        echo "Customer added successfully!";
        echo "<br><a href='index.php'>Back</a>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

</body>
</html>
