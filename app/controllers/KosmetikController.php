<?php
declare(strict_types=1);

class KosmetikController extends ControllerBase
{

  public function indexAction()
  {
    $this->tag->setTitle('Kosmetik');

    $this->view->page = 'kosmetik';

    $this->view->page = 3;
  }

}
