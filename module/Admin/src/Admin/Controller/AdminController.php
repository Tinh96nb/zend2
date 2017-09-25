<?php
namespace Admin\Controller;
use Zend\View\Model\ViewModel;
use Zend\Mvc\Controller\AbstractActionController;
class AdminController extends AbstractActionController
{
    public function indexAction() {
    	$this->layout('layout/admin');
    }

    public function index2Action() {
         $this->layout('layout/admin');
    }
}
