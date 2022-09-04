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

            $sql = "DELETE FROM st_info WHERE ST_ID=$sid;";
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