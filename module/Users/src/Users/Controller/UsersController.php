<?php
namespace Users\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Users\Model\Users;
use Users\Form\UsersForm;

class UsersController extends AbstractActionController
{
    public function indexAction() {
        return new ViewModel(array(
        'users' => $this->getUsersTable()->fetchAll(), //lấy method getAll() từ Model\UsersTable
        ));
    	/*disable layout
	    	$ViewModel = new ViewModel();
	    	$ViewModel->setTerminal(true);
	    	return $ViewModel;
    	*/
	    /*disable view
	    	return false;
    	*/
    }
    public function getUsersTable(){
        $this->usersTable=null;
        if (!$this->usersTable) {
            $sm = $this->getServiceLocator();
            $this->usersTable = $sm->get('Users\Model\UsersTable');
         }
         return $this->usersTable;
    }


    public function addAction(){
        $form = new UsersForm();
        $form->get('submit')->setValue('Add');

        $request = $this->getRequest();
        if ($request->isPost()) {
            $users = new users();
            $form->setInputFilter($users->getInputFilter());
            $form->setData($request->getPost());

            if ($form->isValid()) {
                $users->exchangeArray($form->getData());
                $this->getusersTable()->saveusers($users);
                //return $this->redirect()->toRoute('users');
            }
        }
        $views['form'] = $form;
        return $views;
    }
    public function editAction(){
    	
    }
    public function deleteAction(){
    	
    }
}
