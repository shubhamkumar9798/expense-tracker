<!-- index.php -->

<?php

include "db.php";
// inserting expense into database

if (isset($_POST['submit'])) {

    $title = $_POST['title'];
    $amount = $_POST['amount'];
    $category = $_POST['category'];

    $sql = "INSERT INTO expenses(title, amount, category)
            VALUES('$title', '$amount', '$category')";

    mysqli_query($conn, $sql);
}

// getting all expenses

$getData = "SELECT * FROM expenses ORDER BY id DESC";
$result = mysqli_query($conn, $getData);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Expense Tracker</title>

    <style>

        body{
            font-family: Arial;
            background-color: #f2f2f2;
            padding: 20px;
        }

        .container{
            width: 500px;
            margin: auto;
            background: white;
            padding: 20px;
        }

        input, select{
            width: 100%;
            padding: 10px;
            margin-top: 10px;
        }

        button{
            margin-top: 10px;
            padding: 10px;
            width: 100%;
            background-color: black;
            color: white;
            border: none;
        }

        table{
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }

        table, th, td{
            border: 1px solid black;
        }

        th, td{
            padding: 10px;
            text-align: center;
        }

    </style>

</head>
<body>

<div class="container">

    <h2>Expense Tracker</h2>

    <!-- expense form -->

    <form method="POST">

        <input type="text" name="title" placeholder="Enter expense title" required>

        <input type="number" name="amount" placeholder="Enter amount" required>

        <select name="category" required>

            <option value="">Select Category</option>
            <option value="Food">Food</option>
            <option value="Travel">Travel</option>
            <option value="Shopping">Shopping</option>
            <option value="Bills">Bills</option>

        </select>

        <button type="submit" name="submit">Add Expense</button>

    </form>

    <!-- showing all expenses -->

    <table>

        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Amount</th>
            <th>Category</th>
        </tr>

        <?php

        // fetching rows one by one

        while($row = mysqli_fetch_assoc($result)) {

        ?>

        <tr>

            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['title']; ?></td>
            <td><?php echo $row['amount']; ?></td>
            <td><?php echo $row['category']; ?></td>

        </tr>

        <?php
        }
        ?>

    </table>

</div>

</body>
</html>