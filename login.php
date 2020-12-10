<?php 
    require_once 'main.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        if (isset($_POST['login'])) {

            if (isset($_POST['user_name'])) {
                $user_name = $db->connect->real_escape_string($_POST['user_name']);
            }
                
            if (isset($_POST['password'])) {   
                $password = $db->connect->real_escape_string($_POST['password']);
            }
            
            $user->verifyLogin($user_name, $password);
        }

    }


?>

<?php

    include './includers/head.php';
    include './includers/header.php';
?>
<main id="login_main">
    <div class="jumbotron jumbotron-fluid" style="background-color: white">
        <section id="login" class="py-3 ">
            <div class="container border" style="background-color: #e3f2fd;">
                <h4 id="login_in_title" class="fontSans fontSize-20 py-3 text-center" style="color: dodgerblue;">Login</h4>
                <form action="#" method="post" class="fontRubik">
                    <div class="form-group">
                        <label for="user_name"><i class="fas fa-user text-info" aria-hidden="true"></i>User Name</label>
                        <input type="text" class="form-control" id="user_name" placeholder="Enter User Name" name="user_name" required>
                    </div>
                    <div class="form-group">
                        <label for="password"><i class="fas fa-eye text-info" aria-hidden="true"></i> Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Enter Password" name="password" required>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" value="" checked>&nbsp;Remember me</label>
                    </div>
                    <div class="pt-3 pb-5"><button type="submit" class="btn btn-default btn-success btn-block"><i class="fas fa-power-off text-light" aria-hidden="true"></i><input type="hidden" name="login" value="login">&nbsp;Login</button> <br>
                    <p class="float-right ">Not a member? <a href="signup.php">Sign Up</a></p>
                    <p class="float-left ">Forgot <a href="#">Password?</a></p> 
                    </div>
                </form>  
            </div>
        </section>
    </div>
</main>
<?php
    include './includers/footer.php';
?>