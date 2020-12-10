<?php

    class Data {

        public $db = null;

        public function __construct(DbConnect $db) {

            if(!isset($db->connect)) {
                return null;
            }

            $this->db = $db;

        }
        
        public function getTableData($table = 'products', $column = 'featured', &$value = '0') {

            $sql = "SELECT * FROM $table WHERE $column = '{$value}' ";
            $result = $this->db->connect->query($sql);
            if (isset($result)){
                $dataArray = $this->util($result);

                return $dataArray;
            } 
            
        }

        public function getDetails($table = 'products', $column = 'id', &$value = 1) {

            $sql = "SELECT * FROM {$table} WHERE {$column} =  '$value' LIMIT 1";
            $result = $this->db->connect->query($sql);
            $details = mysqli_fetch_assoc($result);
            return $details;
            
        }

        public function getDistinct(&$column = "brand", $table = "products"){
            $sql = "SELECT DISTINCT {$column} FROM {$table}";
            $result = $this->db->connect->query($sql);

            $dataArray = $this->util($result);

            return $dataArray;
        }

        private function util($result) {

            $array = array();

            while ($data = mysqli_fetch_assoc($result)) {
                $array[] = $data;
            }

            return $array;
        }

    }
?>