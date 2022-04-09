<?php


namespace App\MyControllers;


abstract class AbstractController
{
  abstract public function view();

  public function viewWrapper(string $title, string $content): bool|string
  {
    ob_start();
    require __DIR__ . '/../Templates/base.php';;
    return ob_get_clean();
  }

  public function viewTemplate(string $template, array $data = []): bool|string
  {
    $template_file = __DIR__ . '/../Templates/' . $template . '.base.php';
    if (!file_exists($template_file)) {
      $template_file = './Templates/not-found.html.php';
    }
    ob_start();
    require $template_file;
    return ob_get_clean();
  }
}