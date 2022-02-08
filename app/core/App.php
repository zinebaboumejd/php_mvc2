<?php
class App{

  protected $controller='home';  
  protected $method='index';
 protected $params=[];
    public function __construct(){
       // echo 'ok';
      // $this->parseUrl();
     // print_r($this->parseUrl());
     $url=$this->parseUrl();
     print_r($url);
    if(file_exists('../app/controllers/'.$url[0].'.php' )){
         $this->controller=$url[0];
         unset($url[0]);
     }
      require_once '../app/controllers/'.$this->controller.'.php';
     // echo $this->controller;
     $this->controller= new $this->controller;
     var_dump($this->controller);
 }
    public function parseUrl(){
        if(isset($_GET['url'])){
            echo $_GET['url'];
          return $url=explode('/',filter_var(rtrim($_GET['url'],'/'),FILTER_SANITIZE_URL));
        }
    }
}
?>