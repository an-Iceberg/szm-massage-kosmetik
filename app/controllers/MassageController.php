<?php
declare(strict_types=1);

class MassageController extends ControllerBase
{

  public function indexAction()
  {
    $this->tag->setTitle('Massage');

    $this->view->page = 2;
  }

}
