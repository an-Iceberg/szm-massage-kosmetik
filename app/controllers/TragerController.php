<?php
declare(strict_types=1);

class TragerController extends ControllerBase
{

  public function indexAction()
  {
    $this->tag->setTitle('Trager');

    $this->assets->addCss('css/trager-index.css');

    $this->view->page = 1;
  }

}
