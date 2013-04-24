<?php

App::uses('Component', 'Controller');

/**
 *
 * @author Jonathon
 *
 */
class MultithemeComponent extends Component
{
    public function initialize(Controller $controller)
    {
        if (isset($controller->params['client']) && $controller->name != 'CakeError') {
            $controller->layout = 'client';
            $controller->Auth->loginRedirect = array(
                            'client' => true,
                            'controller' => 'settings',
                            'action' => 'client_dashboard'
                        );
        }

        if (Configure::read('Site.theme') && !isset($controller->params['client'])) {
            $controller->theme = Configure::read('Site.theme');
        } elseif (Configure::read('Site.admin_theme') && isset($controller->params['client'])) {
            $controller->theme = Configure::read('Site.admin_theme');
        }
    }
}
