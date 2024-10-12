<?php
declare(strict_types=1);

class GutscheinController extends ControllerBase
{
  public function indexAction()
  {
    $this->tag->setTitle('Gutschein');

    $this->view->page = "gutschein";
  }
}
