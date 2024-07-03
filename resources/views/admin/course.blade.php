<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BSIT Year List</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #265a7c;
        }
        .container {
            text-align: center;
            background-color: #1e4a66;
            border: 5px solid #36c4b2;
            padding: 20px;
            border-radius: 10px;
        }
        .container h1 {
            color: black;
            background-color: #36c4b2;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        .buttons {
            display: flex;
            justify-content: space-around;
        }
        .buttons div {
            background-color: #36c4b2;
            padding: 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .buttons div:hover {
            background-color: #2da798;
        }
        .buttons div a {
            text-decoration: none;
            color: black;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>BSIT YEAR LIST</h1>
        <div class="buttons">
            <div><a href="#">1ST YEAR</a></div>
            <div><a href="#">2ND YEAR</a></div>
            <div><a href="#">3RD YEAR</a></div>
            <div><a href="#">4TH YEAR</a></div>
        </div>
    </div>
</body>
</html>