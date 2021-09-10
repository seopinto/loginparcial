<?php
    class usuario{

        private $id_user = null;
        private $name = null;
        private $lastname = null;
        private $document = null;
        private $type_document = null;
        private $email = null;
        private $password = null;
        private $id_rol = null;
        private $ubication = null;
        


        public function __construct($ID){
            include ('config/config.php');

            $sql = 'SELECT * FROM users WHERE id_user = "'.$ID.'"';
            $res = $mysql->query($sql);

            while($row = $res->fetch_row()){
                $this->id_user = $row[0];
                $this->name = $row[1];
            }
        }

        public function getId(){
            return $this->id_user;
        }

        public function getName(){
            return $this->name;
        }

        public function setId($pId){
            $this->id_user = $pId;
        }
    }
?>