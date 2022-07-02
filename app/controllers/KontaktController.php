<?php
declare(strict_types=1);

class KontaktController extends ControllerBase
{

  public function indexAction()
  {
    $this->tag->setTitle('Kontakt');

    $this->view->page = "kontakt";
  }

}
