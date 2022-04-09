<?php


namespace App\MyControllers;

use App\MyModels\Posts;


class TodoController extends AbstractController
{

  public function view(): bool|string
  {
    $vars = [];
    $em = getEntityManager();
    $taskRepository = $em->getRepository(Posts::class);
    //    $vars['tasks'] = $taskRepository->findAll();
    $vars['tasks'] = $taskRepository->findBy($vars, ['id' => 'DESC']);
    $content = $this->viewTemplate('tasks', $vars);
    $title = 'Tasks List';
    return $this->viewWrapper($title, $content);
  }
}