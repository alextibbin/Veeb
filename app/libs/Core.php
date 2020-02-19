<?php


class Core
{
  protected $currentController = 'Pages';
  protected $currentMethod = 'index';
  protected $params = array();

  public function __construct()
  {
      $url = $this->getUrl();
    // Set up controller
      echo '<pre>';
      print_r($url);
      echo '</pre>';

      if(file_exists('../app/controllers/Pages'.ucwords($url[0]).'.php')){
          $this->currentController = '../app/controllers/Pages'.ucwords($url[0]);
          unset($url[0]);
      }


  }

    // get url from link and prepare for use
    public function getUrl(){
        if(isset($_GET['url'])){
            $url = rtrim($_GET['url'],  '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }
}