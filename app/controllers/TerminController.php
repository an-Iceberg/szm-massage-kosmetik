<?php
declare(strict_types=1);

class TerminController extends ControllerBase
{

  public function indexAction($kategorie = "", $behandlung = "")
  {
    $this->tag->setTitle('Termin Buchen');

    $this->assets->addCss('css/termin-index.css');

    $this->assets->addCss('css/remove-logo.css');

    $this->view->page = "termin";

    $this->view->behandlung = $behandlung;

    $this->view->kategorie = $kategorie;
  }

}
