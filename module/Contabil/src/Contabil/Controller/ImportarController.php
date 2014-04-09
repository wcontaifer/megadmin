<?php

namespace Contabil\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class ImportarController extends AbstractActionController
{

    public function indexAction()
    {
        return new ViewModel();
    }


}

