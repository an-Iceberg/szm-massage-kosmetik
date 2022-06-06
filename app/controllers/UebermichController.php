<?php
declare(strict_types=1);

class UebermichController extends ControllerBase
{

  public function indexAction()
  {
    $this->tag->setTitle('Über mich');

    $this->view->page = 4;
  }

  public function bildergallerieAction()
  {
    $this->tag->setTitle('Bildergallerie');

    $this->view->page = 4;
  }
}
