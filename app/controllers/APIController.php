<?php
declare(strict_types=1);

class APIController extends ControllerBase
{
  public function getbookingsAction($date = '')
  {
    if ($this->request->isGet())
    {
      // Redirects a potential visitor to the homepage
      $this->response->redirect('/');

      return;
    }

    // TODO: retrieve all bookings from the databse using the date given
  }
}
