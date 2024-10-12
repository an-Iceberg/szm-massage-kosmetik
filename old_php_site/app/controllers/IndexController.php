<?php
declare(strict_types=1);

class IndexController extends ControllerBase
{
  public function indexAction()
  {
    $this->tag->setTitle('Home');

    $this->view->page = "home";
  }
}
