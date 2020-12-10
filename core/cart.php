<?php
    class Cart {

        public $db;
        public $cart_obj = null;

        public function __construct(DbConnect $db) {

            if (!isset($db->connect)) {
                return null;
            }

            $this->db = $db; 
        }

        public function setCart(&$id) {

            if ($this->db->connect != null) {

                if (isset($id)) {
                    
                    $sql = "SELECT * FROM products WHERE id = {$id}";
                    $result = $this->db->connect->query($sql);
                    $product = mysqli_fetch_object($result);
                    $this->cart_obj = $product;
                    header("location: index.php");
                }
            }
        }

        public function getCart() {
            return $this->cart_obj;
        }

        public function add_to_table(&$item_id, &$quantity, &$price, &$user_id, &$order_id) {

            if ($this->db->connect != null) {

                if (isset($order_id) && isset($user_id) && isset($item_id) && isset($quantity) && isset($price)) {
                    
                    $cart = array('product_id' => $item_id, 'quantity' => $quantity, 'price' => $price, 'user_id' => $user_id, 'order_id' => $order_id);

                    $columns = implode(',', array_keys($cart));
                    $data = implode(',', $cart);

                    $query = sprintf("INSERT INTO orderdetails (%s) VALUES(%s)", $columns, $data);
                    
                    $result = $this->db->connect->query($query);

                    if ($result === false) {
                        throw new Exception(mysqli_error($this->db->connect));
                    }

                    if ($result) {
                        $_SESSION['order_id'] = $order_id;
                        header("location: order_summary.php");
                    }
                }
            }
        } 
        
    }

?>    