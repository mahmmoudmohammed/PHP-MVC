<?php
require_once 'Database.php';

class User
{

    /**
     * Connect to DB then return the Users.
     * @return array
     */
    public static function getAll()
    {
        $pdo = Database::getConnection();
        $stmt = $pdo->prepare("SELECT * FROM users");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * Connect to DB then return the specific User.
     * @param mixed $id
     * @return array
     */
    public static function getOne($id)
    {
        $pdo = Database::getConnection();
        $stmt = $pdo->prepare("SELECT * FROM users WHERE id = $id;");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }



}//End of the class

?>