<?php


 namespace watchshop\base;


 class View{
    public $route;
    public $controller;
    public $model;
    public $view;
    public $prefix;
    public $layout;
    public $data = [];
    public $meta = [];

     public function __construct($route, $layout='', $view='', $meta){
         $this->route = $route;
         $this->controller = $route['controller'];
         $this->view = $view;
         $this->prefix = $route['prefix'];
         $this->model = $route['controller'];
         $this->meta = $meta;
         if ($layout === false){
             $this->layout = false;
         }else{
             $this->layout = $layout ?: LAYOUT;
         }
     }

     public function render($data){
      $viewFile = APP . "/views/{$this->prefix}{$this->controller}/{$this->view}.php";
      if (is_file($viewFile)){
          ob_start();
          require_once $viewFile;
          $content = ob_get_clean();
      }else{
          throw new \Exception("View not found {$viewFile}", 500);
      }
      if (false !== $this->layout){
          echo  $layoutFile = APP . "/views/layoutes/{$this->layout}.php";
          if (is_file($layoutFile)){
              require_once $layoutFile;
          }else{
              throw new \Exception("Layout not found {$this->layout}");
          }
      }
     }
}