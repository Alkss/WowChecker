<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 14/05/17
 * Time: 02:05
 */

namespace AppBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class MainController extends Controller
{

    /**
    *@Route("/")
     */

    public function showAction(){
     //   @Route::class;
        $templating = $this->container->get('templating');
       return $this->render('home-page.php');

    }
}