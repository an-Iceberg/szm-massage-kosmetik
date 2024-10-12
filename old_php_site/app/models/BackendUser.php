<?php

class BackendUser extends \Phalcon\Mvc\Model
{
  /**
   *
   * @var integer
   */
  public $id;

  /**
   *
   * @var string
   */
  public $authorization_token;

  /**
   *
   * @var string
   */
  public $name;

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
    $this->setSchema("szm_database");
    $this->setSource("backend_user");
  }

  /**
   * Allows to query a set of records that match the specified conditions
   *
   * @param mixed $parameters
   * @return BackendUser[]|BackendUser|\Phalcon\Mvc\Model\ResultSetInterface
   */
  public static function find($parameters = null): \Phalcon\Mvc\Model\ResultsetInterface
  {
    return parent::find($parameters);
  }

  /**
   * Allows to query the first record that match the specified conditions
   *
   * @param mixed $parameters
   * @return BackendUser|\Phalcon\Mvc\Model\ResultInterface|\Phalcon\Mvc\ModelInterface|null
   */
  public static function findFirst($parameters = null): ?\Phalcon\Mvc\ModelInterface
  {
    return parent::findFirst($parameters);
  }
}
