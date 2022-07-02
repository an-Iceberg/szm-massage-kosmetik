<?php
declare(strict_types=1);

use Phalcon\Http\Request;

class TerminController extends ControllerBase
{

  public function indexAction($kategorie = "", $behandlung = "")
  {
    $this->tag->setTitle('Termin Buchen');

    $this->view->page = "termin";

    if ($this->request->isPost())
    {
      $this->view->termin = [
        'datum' => $this->request->getPost('datum'),
        'bereich' => $this->request->getPost('bereich'),
        'behandlung' => $this->request->getPost('behandlung'),
        'vorname' => $this->request->getPost('vorname'),
        'nachname' => $this->request->getPost('nachname'),
        'email' => $this->request->getPost('email'),
        'telefon' => $this->request->getPost('telefon')
      ];
    }
    elseif ($this->request->isGet())
    {
      // Find an entry in the DB
      $termin = Termine::findFirst();

      $this->view->behandlung = $behandlung;
      $this->view->kategorie = $kategorie;

      // Pass the entry to the view
      $this->view->termin = [
        'id' => $termin->id,
        'datum' => $termin->datum,
        'bereich' => $termin->bereich,
        'behandlung' => $termin->behandlung,
        'vorname' => $termin->vorname,
        'nachname' => $termin->nachname,
        'email' => $termin->email,
        'telefon' => $termin->telefon
      ];
    }
  }

  public function dankeAction()
  {
    $this->tag->setTitle('Dankeschön');
  }

}
