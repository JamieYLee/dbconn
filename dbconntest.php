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

            echo "<table border=\"1\" width=\"100%\" bgcolor=\"#FFFFE1\">";
            echo "<tr><td>ST_ID</td><td>Name</td><td>Dept</td><td>Age</td></tr>";

            $q = mysqli_query($conn, "SELECT * FROM st_info;");

            for($c=0;$c<mysqli_num_rows($q);$c++){
                echo "<tr>";
                $f = mysqli_fetch_array($q);
                echo "<td>$f[0]</td><td>$f[1]</td><td>$f[2]</td><td>$f[3]</td>";
                echo "</tr>";
            }
            echo "</table>";

            mysqli_close($conn);
        ?>
    </body>
</html>