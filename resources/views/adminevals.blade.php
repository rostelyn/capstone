<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evaluation System</title>
    <!-- <title>@yield('title')</title> -->
</head>
<body>
    <Style>
        body {
            font-family: "Lato", sans-serif;
        }


        .sidenav {
            width: 150px; /* Adjust as needed */
            position: fixed;
            top: 0;
            left: 0;
            bottom: 0;
            /* background-color: #f8f9fa; Adjust background color as needed */
            background-color: #156082; /* Background color of navigation links */
            overflow-y: auto;
            /* transition: width 0.3s ease; */
            transition: width 0.5s ease;
            padding-top: 50px;
            width: 0;

            /* height: 100%; */
            z-index: 1;
            /* overflow-x: hidden; */
        }

        .sidenav a {
            padding: 10px 15px;
            display: block;
            color: #333; /* Adjust link color as needed */
            text-decoration: none;


            font-size: 18px;
            transition: 0.5s;
        }

        .sidenav a:hover {
            background-color: violet; /* Adjust hover background color as needed */
        }

        .sidenav .closebtn {
            position: absolute;
            top: 0;
            right: 25px;
            font-size: 18px;
            margin-left: 50px;
        }

        @media screen and (max-height: 450px) {
            .sidenav {padding-top: 15px;}
            .sidenav a {font-size: 18px;}
        }
        h1 {
            text-align: center;
        }
    </Style>
    
    <header>
        <nav>
            <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <img src="logo.png" alt="" width="42" height="42" style="vertical-align:middle"> 
                    <a>Dashboard</a>
                    <a>Evaluate</a>
                    <a>Schedule</a>
                    <a>Calendar</a>
                    <a>Settings</a>

            </div>    
        </nav>
        <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
    </header>
    
    <tbody>
        <h1>Admin Dashboard</h1>
    </tbody>

    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "150px";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>