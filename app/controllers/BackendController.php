<?php
declare(strict_types=1);

class BackendController extends ControllerBase
{
  public function indexAction()
  {
    $this->tag->setTitle('Backend');

    $this->view->page = "backend";

    $this->assets->addJs("js/alpine.js");
  }
}
