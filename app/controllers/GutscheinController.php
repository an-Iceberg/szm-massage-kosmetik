<?php
declare(strict_types=1);

class GutscheinController extends ControllerBase
{

  public function indexAction()
  {
    $this->tag->setTitle('Gutschein');

    $this->assets->addCss('css/remove-logo.css');

    $this->view->page = "gutschein";
  }

}
