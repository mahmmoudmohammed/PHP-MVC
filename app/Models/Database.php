<?php

require_once '../app/config.php';
class Database {

    /**
     * Connect to DB
     * @return PDO|null
     */
    public static function getConnection()
    {
        $connection = null;
        try {
            $connection =  new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASS);
            $connection ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "<p>Database connection failed:<bold> " . $e->getMessage()."</bold> </p>";
        }
		return $connection;
    }


}//end of the class
