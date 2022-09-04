<html>
    <head>
        <title>Connect to MariaDB Server</title>
    </head>
    <body>
        <?php
            include 'menu.php';

            $dbhost = '127.0.0.1';
            $dbuser = 'user';
            $dbpass = 'password';
            $dbname = 'name';
            $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

            if(!$conn){
                die('Could not connect: '.mysqli_error());
            }

            $sid = $_POST["sid"];
            $name = $_POST["name"];
            $dept = $_POST["dept"];
            $age = $_POST["age"];
            $sql = "INSERT INTO st_info(ST_ID, NAME, DEPT, AGE) VALUES($sid, '$name', '$dept', $age);";
            $q = mysqli_query($conn, $sql);

            mysqli_close($conn);

            echo "
                <script>
                    location.href = 'dbconntest.php';
                </script>
            ";
        ?>
    </body>
</html>