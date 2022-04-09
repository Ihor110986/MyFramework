<?php


namespace App\MyControllers;


class NotFoundController extends AbstractController
{

  public function view()
  {
    $content = $this->viewTemplate('not-found');
    $title = 'Page Not Found';
    return $this->viewWrapper($title, $content);
  }
}