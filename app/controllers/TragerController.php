<?php
declare(strict_types=1);

class TragerController extends ControllerBase
{

  public function indexAction()
  {
    $this->tag->setTitle('Trager');

    $this->view->page = "trager";
  }

}
