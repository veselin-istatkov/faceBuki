<?php
namespace Facebuki\LoginPageBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class RecoveryController extends Controller
{
	public function identifyYourAccountAction()
    {
		return $this->render('FacebukiLoginPageBundle:LoginPage:identify_your_account.html.php');
    }
	
	public function passwordResetCodeAction()
	{
		return $this->render('FacebukiLoginPageBundle:LoginPage:passwordResetCode.html.php');
	}
}