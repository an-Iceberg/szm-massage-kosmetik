<?php
declare(strict_types=1);

class TerminController extends ControllerBase
{

  public function indexAction()
  {
    $this->tag->setTitle('Termin Buchen');

    $this->assets->addCss('css/termin-index.css');

    $this->view->page = 6;
  }

}
