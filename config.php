

    <?php

    /* Database credentials. running MySQL

    server with default setting (user 'root' with 'root' password) */

    define('DB_SERVER', 'localhost');

    define('DB_USERNAME', 'root');

    define('DB_PASSWORD', 'root');

    define('DB_NAME', 'W-Schedule');

     

    /*connect to MySQL database */

    try{

        $pdo = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);

        //  PDO error

        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch(PDOException $e){

        die("ERROR: Could not connect. " . $e->getMessage());

    }

    ?>

