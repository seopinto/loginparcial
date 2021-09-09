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
        


        public function _construct(){ // O usar Public function __construct(){
            $this->id_user = '1';
            $this->name = 'vacio';
            $this->lastname = 'vacio';
            $this->document = 'vacio';
            $this->type_document = 'vacio';
            $this->email = 'vacio';
            $this->contrasena = 'vacio';
            $this->rol='vacio';
            
    
        }

        public function getId(){
            return $this->id_user;
        }

        public function setId($pId){
            $this->id_user = $pId;
        }
    }
?>