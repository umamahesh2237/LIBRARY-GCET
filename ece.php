<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Category: Electronics and Communication Engineering</title>
    <link href="style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
            color:black;
        }
        th {
            background-color:#B3E0FF; 
        }
        tr:nth-child(even) {
            background-color: #FFFFFF; 
        }
        tr:nth-child(odd) {
            background-color:  #E6F7FF;
        }
        </style>
</head>

<body>
    <div class="sideMenu" id="side-menu">
        <a class="closebtn" href="javascript:void(0)" onclick="closeNav()">×</a>
        <div class="main-menu">
            <a href="cat1.html"><i class="fa-solid fa-book"></i>Category Wise Books</a>
            <a href="AboutGCET.html"><i class="fa-solid fa-circle-info"></i>About GCET Library</a>
            <a href="AboutProject.html"><i class="fa-solid fa-users"></i>About this Project</a>
            <a href="ContactGCET.html"><i class="fa-solid fa-user"></i>Contact Library Department</a>

        </div>
    </div>
    <div id="content-area">
        <span onclick="openNav()" style="font-size:30px;cursor:pointer">☰ </span>
        <button class="logout-btn btn btn-primary"><i class="fa-solid fa-power-off"></i>&nbsp;&nbsp;Logout</button>
    </div>
    <div id="navbar">	
    <nav class="navbar navbar-expand-lg navbar-light ">
                <a class="navbar-brand" href="BookSearch.php">GCET Library</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                      <a class="nav-link" href="cat1.html">HOME<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="cse.php">CSE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="ece.php">ECE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="eee.php">EEE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="ce.php">CE</a>
                    </li>
                    <li class="nav-item">
                          <a class="nav-link" href="me.php">ME</a>
                    </li>
                    <li class="nav-item">
                          <a class="nav-link" href="mba.php">MBA</a>
                    </li>
                  </ul>
                </div>
              </nav>
    </div><br>
    <div>
	<h1 align="center">Category: Electronics and Communication Engineering</h1>
    <div>
    <table>
        <tr>
            <th>BOOK ID</th>
            <th>BOOK NAME</th>
            <th>AUTHOR</th>
        </tr>
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "library";
        $tableName = "ece";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Fetch data from the table
        $sql = "SELECT * FROM $tableName";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            // Output data of each row
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["bookid"] . "</td>";
                echo "<td>" . $row["bookname"] . "</td>";
                echo "<td>" . $row["author"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "0 results";
        }

        // Close connection
        $conn->close();
        ?>
    </table>
    <footer class="bg-light d-flex flex-wrap p-1 justify-content-between footer">
        <div>
            <p>Follow:</p>
            <ul class="items">
                <li><a href="https://twitter.com/GCTCPORTAL">
                        <h3><i class="fa-brands fa-twitter"></i></h3>
                    </a></li>
                <li><a href="https://www.facebook.com/groups/gctcportal">
                        <h3><i class="fa-brands fa-facebook"></i></h3>
                    </a></li>
                <li><a href="https://www.instagram.com/gctcportal">
                        <h3><i class="fa-brands fa-instagram"></i></h3>
                    </a></li>
            </ul>
        </div>
    </footer>


    <script>
        function openNav() {
            document.getElementById("side-menu").style.width = "300px";
            document.getElementById("content-area").style.marginLeft = "300px";
        }

        function closeNav() {
            document.getElementById("side-menu").style.width = "0";
            document.getElementById("content-area").style.marginLeft = "0";
        }
    </script>
</body>

</html>