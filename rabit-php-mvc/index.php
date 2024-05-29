<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        h1 {
            text-align: center;
            margin-top: 20px;
        }
        ul {
            list-style: none;
            align-items: center;
        }
        li {
            margin-bottom: 30px;

        }
        a {
            text-decoration: none;
            color: #000000;
            font-size: 1.2em;
            border: 2px solid #000000;
            padding: 10px 10px;
            border-radius: 5px;
            transition: background-color 0.3s, color 0.3s;

        }
        a:hover {
            background-color: #000000;
            color: white;
        }
    </style>
</head>
<body>
<h1>Welcome to My Site</h1>
<ul>
    <li><a href="/rabit-php-mvc/users">Users</a></li>
    <li><a href="/rabit-php-mvc/ads">Advertisements</a></li>
</ul>
</body>
</html>
