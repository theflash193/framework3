<?php

// src/grass/IntraBundle/Controller/BlogController.php

namespace grass\IntraBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class BlogController extends Controller
{
/*
	public function indexAction()
	{
		return $this->render('grassIntraBundle:Blog:index.html.twig', array('nom' => 'winzou'));
	}q
*/
	public function voirAction($id)
	{
		$article = array(
    		'id' => 1,
    		'titre' => 'Mon weekend a Phi Phi Island !',
    		'auteur' => 'winzou',
    		'contenu' => 'Ce weekend était trop bien. Blabla…',
    		'date' => new \Datetime()
  				);
		return $this->render('grassIntraBundle:Blog:voir.html.twig', array('article' => $article));
	}

	public function voirSlugAction($slug, $annee, $_format)
	{
		return new Response("On pourrait afficher l'article correspondant au slug '".$slug."', crée en ".$annee." et au format ".$_format.".");
	}

	public function indexAction($page)
	{
		if ($page < 1)
		{
			throw $this->createNotFoundException('Page inexistante (page = '.$page.')');
		}

		$articles = array(
    array(
      'titre'   => 'Mon weekend a Phi Phi Island !',
      'id'      => 1,
      'auteur'  => 'winzou',
      'contenu' => 'Ce weekend était trop bien. Blabla…',
      'date'    => new \Datetime()),
    array(
      'titre'   => 'Repetition du National Day de Singapour',
      'id'      => 2,
      'auteur' => 'winzou',
      'contenu' => 'Bientôt prêt pour le jour J. Blabla…',
      'date'    => new \Datetime()),
    array(
      'titre'   => 'Chiffre d\'affaire en hausse',
      'id'      => 3, 
      'auteur' => 'M@teo21',
      'contenu' => '+500% sur 1 an, fabuleux. Blabla…',
      'date'    => new \Datetime())
  );
    
		// On recuperera la liste des article ici !
		return $this->render('grassIntraBundle:Blog:index.html.twig', array('articles' => $articles));
	}

	public function ajouterAction($page)
	{
    
    /*$article = new Article();
    /*$article->setTitre('Mon dernier weekend');
    $article->setAuteur('Bibi');
    $Article->setContenu("C'etais vraiment super et on c'est bien amusé.");

    $em = $this->getDoctrine()->getManager();
    $em->persist($article);
    $em->flush();
    $article = new Article();*/
		if ($this->get('request')->getMethod() == 'POST')
		{
			// Ici , on s'occupera de la création du formulaire
			$this->get('session')->getFlashBag()->add('notice', 'Article bien enregistré');
			// Puis on redirige vers la page de visualisation de cet arcticle
			return $this->redirect($this->generateUrl('sdzblog_voir', array('id' => 5)));
		}
		$article = array(
      'id'      => 1,
      'titre'   => 'Mon weekend a Phi Phi Island !',
      'auteur'  => 'winzou',
      'contenu' => 'Ce weekend était trop bien. Blabla…',
      'date'    => new \Datetime()
    );
		// Si on est pas en POST on affiche le formulaire
		return $this->render('grassIntraBundle:Blog:ajouter.html.twig', array('article' => $article));
	}

	public function modifierAction($id)
	{
		// Ici , on récupérera l'article correspondant à $id
		// Ici , on s'occupera de la création et de la gestion du formulaire
		   $article = array(
      'id'      => 1,
      'titre'   => 'Mon weekend a Phi Phi Island !',
      'auteur'  => 'winzou',
      'contenu' => 'Ce weekend était trop bien. Blabla…',
      'date'    => new \Datetime()
    );
		return $this->render('grassIntraBundle:Blog:modifier.html.twig', array('article' => $article));
	}

	public function supprimerAction($id)
	{
		// Ici , on récupérera l'article correspondant à $id
		// Ici , on s'occupera de la supréssion de l'arcticle en question
		return $this->render('grassIntraBundle:Blog:modifier.html.twig');
	}

  	public function menuAction($nombre) // Ici, nouvel argument $nombre, on l'a transmis via le render() depuis la vue
  	{
    // On fixe en dur une liste ici, bien entendu par la suite on la récupérera depuis la BDD !
    // On pourra récupérer $nombre articles depuis la BDD,
    // avec $nombre un paramètre qu'on peut changer lorsqu'on appelle cette action
    	$liste = array(
      	array('id' => 2, 'titre' => 'Mon dernier weekend !'),
      	array('id' => 5, 'titre' => 'Sortie de Symfony2.1'),
      	array('id' => 9, 'titre' => 'Petit test')
    	);
    
    	return $this->render('grassIntraBundle:Blog:menu.html.twig', array(
      	'liste_articles' => $liste // C'est ici tout l'intérêt : le contrôleur passe les variables nécessaires au template !
    	));
  	}
}

?>