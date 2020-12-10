<?Php
    class DbConnect {
        protected $host = 'localhost';
        protected $user = 'root';
        protected $password = '';
        protected $database = 'ecom';

        public $connect = null;

        public function __construct() {
            $this->connect = mysqli_connect($this->host,
            $this->user, $this->password, $this->database);

            if($this->connect->connect_error) {
                echo "Connection Failure". $this->connect->connect_error;
            }
        }

        public function __destruct() {
            $this->close_connection();    
        }

        private function close_connection() {
            if($this->connect != null) {
                $this->connect->close();
                $this->connect = null;
            }
        }
            
    }

?>