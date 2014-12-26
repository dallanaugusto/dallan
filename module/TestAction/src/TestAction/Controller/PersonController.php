<?php

namespace TestAction\Controller;

use TestAction\Model\PersonDao;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class PersonController extends AbstractActionController
{

    public function indexAction()
    {
        return new ViewModel(array(
            'people' => PersonDao::getAll(),
        ));
    }

    public function deleteAction()
    {
        return new ViewModel();
    }

    public function editAction()
    {
        return new ViewModel();
    }

    public function getAction()
    {
        return new ViewModel();
    }

    public function newAction()
    {
        return new ViewModel();
    }

    public function viewAction()
    {
        return new ViewModel();
    }


}

