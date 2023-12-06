<?php
include "../models/header.php";
include_once "../models/RegisterFunction.php";
require_once "../models/CRUD.php";

$Connect = new Crud;
$conn = $Connect->__construct();
headerss();


$register = new register;
$nuv = $register->newUser();



?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<div class="container-form-register">
    <form class="row g-3" action="#" method="POST">
        <div class="col-md-2">
            <label for="validationDefault01" class="form-label">First name</label>
            <input type="text" class="form-control" id="fname" name="fname" required>
        </div>
        <div class="col-md-2">
            <label for="validationDefault01" class="form-label">Last name</label>
            <input type="text" class="form-control" id="lname" name="lname" required>
        </div>
        <div class="col-md-3">
            <label for="validationDefault02" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="col-md-2">
            <label for="validationDefault02" class="form-label">password</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <div class="col-md-3">
            <label for="validationDefaultUsername" class="form-label">Username</label>
            <div class="input-group">
                <input type="text" class="form-control" id="username" name="username" aria-describedby="inputGroupPrepend2" required>
            </div>
        </div>
        <div class="col-md-2">
            <label for="validationDefault03" class="form-label">Street name</label>
            <input type="text" class="form-control" id="strname" name="strname" required>
        </div>
        <div class="col-md-2">
            <label for="validationDefault03" class="form-label">Street number</label>
            <input type="text" class="form-control" id="strnumber" name="strnumber" required>
        </div>
        <div class="col-md-2">
            <label for="validationDefault03" class="form-label">City</label>
            <input type="text" class="form-control" id="city" name="city" required>
        </div>
        <div class="col-md-2">
            <label for="validationDefault03" class="form-label">Country</label>
            <input type="text" class="form-control" id="country" name="country" required>
        </div>
        <div class="col-md-2">
            <label for="validationDefault04" class="form-label">State</label>
            <select class="form-select" id="state" name="state" required>
                <option value="">Choose...</option>
                <option value="AB">Alberta</option>
                <option value="BC">British Columbia</option>
                <option value="MN">Manitoba</option>
                <option value="NF">NewFoundLand</option>
                <option value="QC">Quebec</option>
                <option value="ON">Ontario</option>
                <option value="YK">Yukon</option>
                <option value="SK">Saskatchowan</option>
            </select>
        </div>
        <div class="col-md-2">
            <label for="validationDefault05" class="form-label">Zip</label>
            <input type="text" class="form-control" id="zip" name="zip" required>
        </div>

        <div class="col-12">
            <button class="btn btn-primary" type="submit" name="submit" onclick=<?php $nuv ?>>Submit form</button>
        </div>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>