<?php include('includes/header.php'); ?>
<?php include('includes/db.php'); ?>
<link rel="stylesheet" href="assets/css/styles.css" />
<h2>Contact Us</h2>
<form action="" method="POST">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>
    <br>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
    <br>
    <label for="message">Message:</label>
    <textarea id="message" name="message" rows="5" required></textarea>
    <br>
    <input type="submit" name="submit" value="Send Message">
</form>
<?php include('includes/footer.php'); ?>