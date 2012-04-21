<?php
namespace Facebuki\LoginPageBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LoginPageController extends Controller
{
	public function indexAction()
    {
		return $this->render('FacebukiLoginPageBundle:LoginPage:index.html.php');
    }
}