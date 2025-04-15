<?php include 'partials/header.php'; ?>

<h2>Register</h2>
<form action="index.php?page=register" method="POST">
    <label>Name:</label><br>
    <input type="text" name="nama" required><br>

    <label>Email:</label><br>
    <input type="email" name="email" required><br>

    <label>Phone:</label><br>
    <input type="text" name="phone" required><br>

    <label>Password:</label><br>
    <input type="password" name="password" required><br>

    <button type="submit">Register</button>
</form>

<?php include 'partials/footer.php'; ?>