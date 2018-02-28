<?php

require_once ROOT . '/video6/app/models/Home/HomeModel.php';

class HomeController extends Controller
{
  /**
  * Home controller
  */
  public function __construct()
  {
    $this->model = new HomeModel();
  }
  public function getUser($id){
    $user = $this->model->getUser($id);
    $this->show($user);
  }
  //funcion para enseñar desde la base de datos
  public function show($param){
    $params = array('nombre' => $param['nom_usr']); 
    $this->render(__CLASS__, $params);
  }
  public function exec($param)
  {
    $this->show($param);
  }
}