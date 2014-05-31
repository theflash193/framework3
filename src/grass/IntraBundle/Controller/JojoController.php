<?php

// src/grass/IntraBundle/Controller/BlogController.php

namespace grass\IntraBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class JojoController extends Controller
{
	public function testAction()
	{
		return $this->render('grassIntraBundle:Jojo:test.html.twig');
	}
}

?>