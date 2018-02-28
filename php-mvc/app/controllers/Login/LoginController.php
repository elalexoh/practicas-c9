<?php
defined('BASEPATH') or exit('No se permite acceso directo');
require_once ROOT . '/php-mvc/app/models/Login/LoginModel.php';
/**
 * 
 */
class LoginController extends Controller
{
    private $model;
    public function __construct()
    {
        $this->model = new LoginModel();
    }
    
    public function signin($request_params){
        if ($this->verify($request_params)) {
            return $this->renderErrorMessage('El email y el password son obligatorios');
            $this->model->signin($request_params['email']);
            
            if (!$result->num_rows) {
                
                return $this->renderErrorMessage("El email {$request_params['email']} no fue encontrado :c");
                
                $client = result->fetch_object();
            }else if (!password_verify($request_params['password'], $client->password)) {
                return $this->renderErrorMessage('El password es Incorrecto :C');
            }
            }
        }
    }
    public function verify($request_params){
        return  empty($request_params['email']) or empty($request_params['password']);
    }
    
    public function renderErrorMessage($message){
        $params = array('error_message' => $message);
        $this->render(__CLASS__, $params);
    }
    
    public function exec(){
        $this->render(__CLASS__);
    }
}

?>