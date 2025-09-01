<?php include 'db.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Expense Tracker</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>Expense Tracker</h1>

  <form action="add_expense.php" method="POST">
    <input type="text" name="title" placeholder="Expense Title" required>
    <input type="number" step="0.01" name="amount" placeholder="Amount" required>
    <button type="submit">Add Expense</button>
  </form>

  <h2>Expenses</h2>
  <table>
    <tr>
      <th>Title</th>
      <th>Amount</th>
      <th>Date</th>
      <th>Action</th>
    </tr>
    <?php
    $result = $conn->query("SELECT * FROM expenses ORDER BY created_at DESC");
    while ($row = $result->fetch_assoc()) {
      echo "<tr>
        <td>{$row['title']}</td>
        <td>{$row['amount']}</td>
        <td>{$row['created_at']}</td>
        <td><button class='delete-btn' data-id='{$row['id']}'>Delete</button></td>
      </tr>";
    }
    ?>
  </table>

  <script src="script.js"></script>
</body>
</html>
