<?php
declare(strict_types=1);

class UebermichController extends ControllerBase
{

  public function indexAction()
  {
    $this->tag->setTitle('Über mich');

    $this->assets->addCss('css/remove-logo.css');

    $this->view->page = "uebermich";
  }

  public function bildergallerieAction()
  {
    $this->tag->setTitle('Bildergallerie');

    $this->assets->addCss('css/remove-logo.css');

    $this->view->page = "uebermich";
  }
}
