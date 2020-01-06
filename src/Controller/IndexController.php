<?php
/**
*контроллер работы с Ckfinder
 */

namespace Mf\Ckfinder\Controller;

use Laminas\Mvc\Controller\AbstractActionController;


class IndexController extends AbstractActionController
{



public function indexAction()
{
  include __DIR__."/../Ckfinder/connector.php";
  return $this->getResponse();
}






}
