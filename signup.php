<?php
require_once "main.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (isset($_POST['signup'])) {
        $password = '';
        $user_name = $db->connect->real_escape_string($_POST['user_name']);
        $email = $db->connect->real_escape_string($_POST['email']);
        $password1 = $db->connect->real_escape_string($_POST['password1']);
        $password2 = $db->connect->real_escape_string($_POST['password2']);

        if ($password1 === $password2) {
            $password = password_hash($password1, PASSWORD_DEFAULT);
        } else { 
            echo '<script>alert("Passwords do not match. Please try again.")';
        }    
        $address_1 = $db->connect->real_escape_string($_POST['address_line1']);
        $address_2 = $db->connect->real_escape_string($_POST['address_line2']);
        $city = $db->connect->real_escape_string($_POST['city']);
        $state = $db->connect->real_escape_string($_POST['state']);
        $zip = $db->connect->real_escape_string($_POST['zip']);
        $u_id = mt_rand(1, 999999);

        if (!is_numeric($user_name)) {
            $user->add_data($u_id, $user_name, $password);
        } else {
            echo '<script>alert("Please enter a valid data... ")</script>';
        }

        $user->add_details($u_id, $email, $address_1, $address_2, $city, $state, $zip);
    }
}
?>

<?php

include './includers/head.php';
include './includers/header.php';
?>
<main id="signup_main">
    <div class="jumbotron jumbotron-fluid" style="background-color: white">
        <section id="signup" class="py-3 ">
            <div class="container border" style="background-color: #e3f2fd;">
                <h4 id="sign_up_title" class="fontSans fontSize-20 py-3 text-center" style="color: dodgerblue;">Sign Up</h4>
                <form method="post" class="fontRubik">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="user_name">User Name</label>
                            <input type="text" class="form-control" id="user_name" placeholder="Enter User Name" name="user_name" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="email@example.com" name="email" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="password1">Password</label>
                            <input type="password" class="form-control" id="password1" placeholder="Enter Password" name="password1" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="password2">Re-enter Password</label>
                            <input type="password" class="form-control" id="password2" placeholder="Re-enter Password" name="password2" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="address_line1">Address Line-1</label>
                        <input type="text" class="form-control" id="address_line1" placeholder="House Number/Name" name="address_line1" required>
                    </div>
                    <div class="form-group">
                        <label for="address_line2">Address Line-2</label>
                        <input type="text" class="form-control" id="address_line2" placeholder="1234 Main St" name="address_line2" required>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="city">City</label>
                            <input type="text" class="form-control" id="city" name="city" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="state">State</label>
                            <input type="text" class="form-control" id="state" name="state" required>
                        </div>
                        <div class="form-group col-md-2">
                            <label for="zip">Zip</label>
                            <input type="text" class="form-control" id="zip" name="zip" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck" required>
                            <label class="form-check-label" for="gridCheck">
                                By clicking here you agree our <a href="#">Terms&Conditions</a>
                            </label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success" name="signup" value="signup"><i class="fas fa-power-off text-light" aria-hidden="true"></i>&nbsp;Login</button>
                </form>
            </div>
        </section>
    </div>
</main>
<?php
    include './includers/footer.php';
?>