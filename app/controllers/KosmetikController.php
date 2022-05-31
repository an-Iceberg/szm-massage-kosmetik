<?php
declare(strict_types=1);

class KosmetikController extends ControllerBase
{

  public function indexAction()
  {
    $this->tag->setTitle('Kosmetik');

    $this->assets->addCss('css/kosmetik-index.css');

    $this->view->page = 3;
  }

}
