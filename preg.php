<?php
$errors = [];

// Validate form inputs
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate name
    if (empty($_POST['name'])) {
        $errors['name'] = 'Name is required';
    }

    // Validate email
    if (empty($_POST['email'])) {
        $errors['email'] = 'Email is required';
    } elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'Invalid email format';
    }

    // Validate password
    if (empty($_POST['password'])) {
        $errors['password'] = 'Password is required';
    } elseif (strlen($_POST['password']) < 6) {
        $errors['password'] = 'Password must be at least 6 characters';
        echo "password must be atleast 6 characters";
    }

    // If no errors, process the registration (e.g., save to database)
    if (empty($errors)) {
        // Process registration here (e.g., save to database)
        // For demonstration, let's just display a success message
        echo '<h2>Registration Successful!</h2>';
        echo '<p>Thank you, ' . $_POST['name'] . ', for registering.</p>';
    }
}
?>
