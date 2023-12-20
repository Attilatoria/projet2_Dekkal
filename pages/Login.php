<?php
include "../models/header.php";
include_once "../controllers/Login.php";

headerss();

$connect = new login;
$conn = $connect->LoginUser();

?>
<form action="#" method="POST">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Username</label>
        <input type="text" class="form-control" id="username" name="username">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" id="pwd" name="pwd">
    </div>
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>