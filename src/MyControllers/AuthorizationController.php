<?php


namespace App\MyControllers;


class AuthorizationController extends AbstractController
{

  public function view()
  {
    $content = $this->viewTemplate('Authorization');
    $title = 'Authorization';
    return $this->viewWrapper($title, $content);
  }
}