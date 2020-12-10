<?php
    class User {

        public $db;

        public function __construct(DbConnect $db) {

            if (!isset($db->connect)) {
                return null;
            }

            $this->db = $db;
        }

        public function add_data(&$user_id, &$user_name, &$password) {

            if ($this->db->connect != null) {

                if (isset($user_id) && isset($user_name) && isset($password)) {

                    $query = "SELECT * FROM users WHERE user_name = '$user_name' LIMIT 1";
                    $result = $this->db->connect->query($query);

                    $user = mysqli_fetch_assoc($result);

                    if (isset($user) && ($user['user_name'] === $user_name)) {

                        echo '<script> alert ("User Name already exists.")</script>';

                    } else {
                        $sql = "INSERT INTO users (user_id, user_name, password) VALUES ('$user_id', '$user_name', '$password')";
                        $result = $this->db->connect->query($sql);

                        if ($result) header("location: login.php");
                    } 

                }
            }

        }

        public function add_details(&$user_id, &$email, &$address_1, &$address_2, &$city, &$state, &$zip) {

            if (isset($user_id) && isset($email) && isset($address_1) && isset($address_2) && isset($city) &&isset($state) && isset($zip)) {

                $sql = "INSERT INTO userdetails (user_id, email, address_1, address_2, city, state, zip) VALUES ('$user_id', '$email', '$address_1', '$address_2','$city', '$state', '$zip')";
                $result = $this->db->connect->query($sql);
                

                if ($result) header("location: login.php");

            } else {
                echo '<script> alert ("Something wrong. Please try again")</script>';;
            }

        }

        public function verifyLogin(&$user_name, &$password) {
            
            $sql = "SELECT * FROM users WHERE user_name = '$user_name' LIMIT 1";
            $result = $this->db->connect->query($sql);

            $user = mysqli_fetch_assoc($result);

            if (isset($user)) {

                if ($user_name !== $user['user_name'] ) {

                    echo '<script> alert ("User name is invalid.")</script>';

                } else {

                    if (password_verify($password, $user['password'])) {
                        
                        $_SESSION['user_name'] = $user_name;
                        $_SESSION['user_id'] = $user['user_id'];
                        $_SESSION['login'] = true;
                        header('location: index.php');

                    } else {
                        
                        echo '<script> alert ("Password is invalid.")</script>';
                    }
                }
                
            } else {

                echo '<script> alert ("User Nmae or Password is invalid! Not a member, Signup to proceed.")</script>';
            }

        }  
    }
?>