<?php include "db.php"; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Customer List</title>
</head>
<body>
<h2>Customer List</h2>
<a href="add.php">Add Customer</a><br><br>

<table border="1" cellpadding="8">
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Address</th>
    <th>Actions</th>
</tr>

<?php
$sql = "SELECT * FROM customers";
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
        <td>".$row['id']."</td>
        <td>".$row['name']."</td>
        <td>".$row['email']."</td>
        <td>".$row['phone']."</td>
        <td>".$row['address']."</td>
        <td>
            <a href='edit.php?id=".$row['id']."'>Edit</a> |
            <a href='delete.php?id=".$row['id']."'>Delete</a>
        </td>
    </tr>";
}
?>
</table>

</body>
</html>
