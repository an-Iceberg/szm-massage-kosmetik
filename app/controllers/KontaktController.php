<?php
declare(strict_types=1);

class KontaktController extends ControllerBase
{

  public function indexAction()
  {
    $this->tag->setTitle('Kontakt');

    $this->assets->addCss('css/remove-logo.css');

    $this->view->page = "kontakt";
  }

}
