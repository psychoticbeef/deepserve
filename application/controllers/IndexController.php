<?php

class IndexController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
			$this->_helper->viewRenderer->setNoRender(true);
			echo 'kek';
        // action body
    }


}

