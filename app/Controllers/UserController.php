<?php
require_once '../app/Models/User.php';

class UserController
{
    /**
     * Display a listing of the Users.
     */
    public function index()
    {
        $users = User::getAll();
        require_once '../app/Views/user/users.php';
    }

    public function show($id)
    {
        $user = User::getOne($id);
        require_once '../app/Views/user/profile.php';
    }
}//End of the class

?>