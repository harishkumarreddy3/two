<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }
        button {
            padding: 10px 20px;
            background-color: dodgerblue;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .error {
            color: red;
        }
    </style>
</head>
<body>
    <h1>User Registration Form</h1>
    <form action="preg.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <span class="error"><?php echo isset($errors['name']) ? $errors['name'] : ''; ?></span>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <span class="error"><?php echo isset($errors['email']) ? $errors['email'] : ''; ?></span>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <span class="error"><?php echo isset($errors['password']) ? $errors['password'] : ''; ?></span>

        <button type="submit">Register</button>
    </form>
</body>
</html>
