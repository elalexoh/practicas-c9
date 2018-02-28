<?php
    class HomeModel extends Model
    {
        public function __construct()
        {
            parent::__construct();
        }
    
        public function getUser($id){
            return $this->db->query("SELECT * FROM `db_usr` WHERE `id_usr` = $id")->fetch_array(MYSQLI_ASSOC);
        }
    }