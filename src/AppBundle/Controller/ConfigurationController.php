<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use AppBundle\Bot\BotAction;
use AppBundle\Bot\BotActionType;

class ConfigurationController extends Controller
{
    /**
     * @Route("/configure", name="configuration_page")
     */
    public function configureAction()
    {
        return $this->render('default/configuration.html.twig', []);
    }
}
