<?php
include 'db.php';

if (isset($_POST['save'])) {
    $name  = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $age   = $_POST['age'];
    $city  = $_POST['city'];

    $sql = "INSERT INTO users (name, email, phone, age, city) VALUES (?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "sssss", $name, $email, $phone, $age, $city);
    mysqli_stmt_execute($stmt);

    header("Location: VIEW.php?action=success&msg=Record+Added");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New User - CRUD System</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
        .container {
            background: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.2);
            width: 100%;
            max-width: 450px;
        }
        h1 { color: #333; margin-bottom: 30px; text-align: center; font-size: 28px; }
        .form-group { margin-bottom: 20px; }
        label { display: block; margin-bottom: 8px; color: #555; font-weight: 600; }
        input {
            width: 100%;
            padding: 12px 15px;
            border: 2px solid #e0e0e0;
            border-radius: 8px;
            font-size: 16px;
            transition: all 0.3s ease;
        }
        input:focus { outline: none; border-color: #667eea; box-shadow: 0 0 0 3px rgba(102,126,234,0.1); }
        input::placeholder { color: #aaa; }
        button {
            width: 100%;
            padding: 14px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 18px;
            font-weight: 600;
            cursor: pointer;
            transition: transform 0.2s ease;
            margin-top: 10px;
        }
        button:hover { transform: translateY(-2px); box-shadow: 0 5px 20px rgba(102,126,234,0.4); }
        .back-link {
            display: block;
            text-align: center;
            margin-top: 20px;
            color: #667eea;
            text-decoration: none;
            font-weight: 600;
        }
        .back-link:hover { text-decoration: underline; }
    </style>
</head>
<body>
    <div class="container">
        <h1>➕ Add New User</h1>
        <form method="POST">
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" placeholder="Enter your name" required>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" placeholder="Enter your email" required>
            </div>
            <div class="form-group">
                <label>Phone</label>
                <input type="text" name="phone" placeholder="Enter your phone number" required>
            </div>
            <div class="form-group">
                <label>Age</label>
                <input type="number" name="age" placeholder="Enter your age" required>
            </div>
            <div class="form-group">
                <label>City</label>
                <input type="text" name="city" placeholder="Enter your city" required>
            </div>
            <button type="submit" name="save">💾 Save User</button>
        </form>
        <a href="VIEW.php" class="back-link">← Back to User List</a>
    </div>
</body>
</html>