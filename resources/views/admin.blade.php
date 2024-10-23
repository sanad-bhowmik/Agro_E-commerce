<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
        }
        .sidebar {
            width: 200px;
            background-color: #2c3e50;
            color: white;
            padding: 20px;
            height: 100vh;
        }
        .sidebar h2 {
            color: #ecf0f1;
        }
        .sidebar a {
            display: block;
            color: #ecf0f1;
            padding: 10px;
            text-decoration: none;
            margin: 10px 0;
            border-radius: 5px;
            transition: background 0.3s;
        }
        .sidebar a:hover {
            background-color: #34495e;
        }
        .content {
            flex-grow: 1;
            padding: 20px;
            background-color: #ecf0f1;
        }
        .header {
            background-color: #2980b9;
            color: white;
            padding: 15px;
            text-align: center;
        }
    </style>
</head>
<body>

    <div class="sidebar">
        <h2>Admin Dashboard</h2>
        <a href="#">Add Product</a>
        <a href="#">View Products</a>
    </div>

    <div class="content">
        <div class="header">
            <h1>Welcome to the Admin Dashboard</h1>
        </div>
        <div>
            <h2>Dashboard Content</h2>
            <p>Select an option from the sidebar to manage products.</p>
        </div>
    </div>

</body>
</html>
