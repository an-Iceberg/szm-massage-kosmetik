<?php

class Login extends \Phalcon\Mvc\Model
{

  /**
   *
   * @var string
   */
  public $user;

  /**
   *
   * @var string
   */
  public $password;

  /**
   * Initialize method for model.
   */
  public function initialize()
  {
    $this->setSource("login");
  }

  /**
   * Allows to query a set of records that match the specified conditions
   *
   * @param mixed $parameters
   * @return Login[]|Login|\Phalcon\Mvc\Model\ResultSetInterface
   */
  public static function find($parameters = null): \Phalcon\Mvc\Model\ResultsetInterface
  {
    return parent::find($parameters);
  }

  /**
   * Allows to query the first record that match the specified conditions
   *
   * @param mixed $parameters
   * @return Login|\Phalcon\Mvc\Model\ResultInterface|\Phalcon\Mvc\ModelInterface|null
   */
  public static function findFirst($parameters = null): ?\Phalcon\Mvc\ModelInterface
  {
    return parent::findFirst($parameters);
  }

}
