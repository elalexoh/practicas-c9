<?php  
defined('BASEPATH') or exit('No se permite acceso directo');
/**
 * Clase encargada de la base de Datos
 */
class Model{
    protected $db;
    
    public function __construct()
    {
        // $mysqli = new mysqli("localhost", "Deeply", "Deeply", "Frederick",$port);
        $this->db = new Mysqli(HOST, USER, PASSWORD, DB_NAME, PUERTO);
        
    }
}

