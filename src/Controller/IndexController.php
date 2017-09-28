<?php
/**
контроллер работы со статичными страницами

 */

namespace Ckfinder\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;


class IndexController extends AbstractActionController
{



public function indexAction()
{
	include __DIR__."/../Ckfinder/connector.php";
  return $this->getResponse();
}






}
