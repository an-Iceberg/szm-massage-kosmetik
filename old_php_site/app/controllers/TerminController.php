<?php
declare(strict_types=1);

class TerminController extends ControllerBase
{
  public function indexAction($behandlung = "")
  {
    $this->tag->setTitle('Termin Buchen');

    $this->view->page = "termin";

    $this->view->behandlung = $behandlung;

    $example = new KundenTermine();
    $example->id = 200;
    $example->vorname = "Murk";
    $example->nachname = "Ark";
    $example->email = "s@example.com";
    $example->telefon = "+44 98 786 25 19";
    $example->termin = "2023-11-19 16:30:00";
    $example->behandlung = [2, 5, 7];

    $this->view->example = $example;
  }

  public function dankeAction()
  {
    $this->tag->setTitle('Dankeschön');
  }
}
