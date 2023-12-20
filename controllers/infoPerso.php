<?php 
include '../models/CRUD.php';

class info extends Crud
{
    
    public function getInfoUser()
    {
       $info = new Crud();
       $inf = $this -> getById('user', 1);

       return $inf;
    }

    public function deleteUser()
    {
        $del = new Crud();
       // $deleteUser = $this -> delete('user', $userId);
    }
}
?>
