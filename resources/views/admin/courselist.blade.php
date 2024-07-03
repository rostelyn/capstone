<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student List</title>
    <style>
        body {
            margin: 0;
            padding: 0;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #fff;
            font-weight: bold;
            font-family: Arial, Helvetica, sans-serif;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }

        .nav {
            display: flex;
            justify-content: right;
            padding-right: 50px;
        }

        .nav ul {
            display: flex;
            margin: 0;
            padding: 0;
        }

        .nav li {
            list-style: none;
            position: relative;
            display: inline-block;
        }

        .nav li a {
            color: #000000;
            text-decoration: none;
            padding: 10px 15px;
            display: block;
        }

        .nav li a:hover {
            color: #1877F2;
        }

        .nav li::after {
            content: '';
            height: 3px;
            width: 0;
            background-color: #1877F2;
            position: absolute;
            bottom: 0;
            left: 15%;
            transition: 0.5s;
        }

        .nav li:hover::after {
            width: 70%;
        }

        .button {
            display: block;
            width: 250px;
            padding: 20px;
            margin: 20px auto;
            margin-top: 50px;
            text-align: center;
            background-color: #1abc9c;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 18px;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <div class="logo">Logo</div>
            <div class="nav">
                <ul>
                    <li><a href="#">Evaluation Form</a></li>
                    <li><a href="#">Faculty/Office</a></li>
                    <li><a href="#">Calendar</a></li>
                    <li><a href="#">Evaluation History</a></li>
                    <li><a href="#">Message</a></li>
                    <li><a href="#">Settings</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="content">
        <h2><center>COURSES/STRAND</center></h2>
        <a href="#" class="button">BSIT</a>
        <a href="#" class="button">ENGINEERING</a>
        <a href="#" class="button">HM</a>
        <a href="#" class="button">TESDA</a>
    </div>
</body>
</html>
