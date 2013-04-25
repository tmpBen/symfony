<?php
// src/Sdz/BlogBundle/Controller/BlogController.php
 
namespace Sdz\BlogBundle\Controller;
 
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Httpfoundation\Response;
use Sdz\BlogBundle\Entity\Article;
use Sdz\BlogBundle\Entity\Image;
use Sdz\BlogBundle\Entity\ArticleCompetence;

class BlogController extends Controller
{
  public function indexAction($page)
  {
  	$this->testAction() ; 
 
    // Les articles :
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
  
  
  
  	// On récupère le service
  $antispam = $this->container->get('sdz_blog.antispam');
  // Je pars du principe que $text contient le texte d'un message quelconque
  $text="ben@gmail.com ben@gmail.com ben@gmail.com ben@gmail.com";
  if ($antispam->isSpam($text)) {
  	throw new \Exception('Votre message a été détecté comme spam !');
   }
  
  					// Le message n'est pas un spam, on continue l'action…
  
  
     
  // Puis modifiez la ligne du render comme ceci, pour prendre en compte nos articles :
  return $this->render('SdzBlogBundle:Blog:index.html.twig', array(
    'articles' => $articles
  ));
  	
}
   
   
public function voirAction($id)
{
	// On récupère l'EntityManager
	$em = $this->getDoctrine()
	->getManager();

	// On récupère l'entité correspondant à l'id $id
	$article = $em->getRepository('SdzBlogBundle:Article')
	->find($id);

	if ($article === null) {
		throw $this->createNotFoundException('Article[id='.$id.'] inexistant.');
	}

	// On récupère les articleCompetence pour l'article $article
	$liste_articleCompetence = $em->getRepository('SdzBlogBundle:ArticleCompetence')
	->findByArticle($article->getId());

	// Puis modifiez la ligne du render comme ceci, pour prendre en compte les articleCompetence :
	return $this->render('SdzBlogBundle:Blog:voir.html.twig', array(
			'article'          => $article,
			'liste_articleCompetence'  => $liste_articleCompetence,
			// … et évidemment les autres variables que vous pouvez avoir
	));
}

   
	public function ajouterAction()
	{
		
		
		// On récupére l'EntityManager
		$em = $this->getDoctrine()
		->getManager();
		
		// Création de l'entité Article
		$article = new Article();
		$article->setTitre('Mon dernier weekend');
		$article->setContenu("C'était vraiment super et on s'est bien amusé.");
		$article->setAuteur('winzou');
		
		// Dans ce cas, on doit créer effectivement l'article en bdd pour lui assigner un id
		// On doit faire cela pour pouvoir enregistrer les ArticleCompetence par la suite
		$em->persist($article);
		$em->flush(); // Maintenant, $article a un id défini
		
		// Les compétences existent déjà, on les récupère depuis la bdd
		$liste_competences = $em->getRepository('SdzBlogBundle:Competence')
		->findAll(); // Pour l'exemple, notre Article contient toutes les Competences
		
		// Pour chaque compétence
		foreach($liste_competences as $i => $competence)
		{
			// On crée une nouvelle « relation entre 1 article et 1 compétence »
			$articleCompetence[$i] = new ArticleCompetence;
		
			// On la lie à l'article, qui est ici toujours le même
			$articleCompetence[$i]->setArticle($article);
			// On la lie à la compétence, qui change ici dans la boucle foreach
			$articleCompetence[$i]->setCompetence($competence);
		
			// Arbitrairement, on dit que chaque compétence est requise au niveau 'Expert'
			$articleCompetence[$i]->setNiveau('Expert');
		
			// Et bien sûr, on persiste cette entité de relation, propriétaire des deux autres relations
			$em->persist($articleCompetence[$i]);
		}
		
		// On déclenche l'enregistrement
		$em->flush();
		
		
		$article = new Article();
		$article->setTitre('Mon dernier weekend');
		$article->setContenu("C'était vraiment super et on s'est bien amusé.");
		$article->setAuteur('winzou');
		
		// Création de l'entité Image
		$image = new Image();
		$image->setUrl('http://uploads.siteduzero.com/icones/478001_479000/478657.png');
		$image->setAlt('Logo Symfony2');
		
		// On lie l'image à l'article
		$article->setImage($image);
		
		// On récupère l'EntityManager
		$em = $this->getDoctrine()->getManager();
		
		// Étape 1 : on persiste les entités
		$em->persist($article);
		
		// Étape 1 bis : si on n'avait pas défini le cascade={"persist"}, on devrait persister à la main l'entité $image
		// $em->persist($image);
		
		// Étape 2 : on déclenche l'enregistrement
		$em->flush();
		
		
		
		// Création de l'entité
		$article = new Article();
		$article->setTitre('Mon dernier weekend');
		$article->setAuteur('Bibi');
		$article->setContenu("C'était vraiment super et on s'est bien amusé.");
		// On peut ne pas définir ni la date ni la publication,
		// car ces attributs sont définis automatiquement dans le constructeur
	
		// On récupère l'EntityManager
		$em = $this->getDoctrine()->getManager();
	
		// Étape 1 : On « persiste » l'entité
		$em->persist($article);
	
		// Étape 2 : On « flush » tout ce qui a été persisté avant
		$em->flush();
		 
		// Reste de la méthode qu'on avait déjà écrit
		if ($this->getRequest()->getMethod() == 'POST') {
			$this->get('session')->getFlashBag()->add('info', 'Article bien enregistré');
			return $this->redirect( $this->generateUrl('sdzblog_voir', array('id' => $article->getId())) );
		}
	
		return $this->render('SdzBlogBundle:Blog:ajouter.html.twig',array(
    'article' => $article));
	}
 
  // Suppression des catégories d'un article :
  public function supprimerAction($id)
  {
    // On récupère l'EntityManager
    $em = $this->getDoctrine()
               ->getManager();
 
    // On récupère l'entité correspondant à l'id $id
    $article = $em->getRepository('SdzBlogBundle:Article')
                  ->find($id);
 
    if ($article === null) {
      throw $this->createNotFoundException('Article[id='.$id.'] inexistant.');
    }
     
    // On récupère toutes les catégories :
    $liste_categories = $em->getRepository('SdzBlogBundle:Categorie')
                           ->findAll();
     
    // On enlève toutes ces catégories de l'article
    foreach($liste_categories as $categorie)
    {
      // On fait appel à la méthode removeCategorie() dont on a parlé plus haut
      // Attention ici, $categorie est bien une instance de Categorie, et pas seulement un id
      $article->removeCategorie($categorie);
    }
 
    // On n'a pas modifié les catégories : inutile de les persister
     
    // On a modifié la relation Article - Categorie
    // Il faudrait persister l'entité propriétaire pour persister la relation
    // Or l'article a été récupéré depuis Doctrine, inutile de le persister
   
    // On déclenche la modification
    $em->flush();
 
    return new Response('OK');
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
     
    return $this->render('SdzBlogBundle:Blog:menu.html.twig', array(
      'liste_articles' => $liste // C'est ici tout l'intérêt : le contrôleur passe les variables nécessaires au template !
    ));
  }


  public function testrequeteAction ()
  {
	$results = $this->getDoctrine()
    	             ->getManager()
        	          ->getRepository('SdzBlogBundle:Article')
            	      ->getTest();
	
	return $this->render('SdzBlogBundle:Blog:test.html.twig', array(
			'results' => $results 
	));
  }
  
  
  public function modifierAction($id)
  {
  	
  	
  	// On récupère l'EntityManager
  	$em = $this->getDoctrine()
  	->getManager();
  	
  	// On récupère l'entité correspondant à l'id $id
  	$article = $em->getRepository('SdzBlogBundle:Article')
  	->find($id);
  	
  	if ($article === null) {
  		throw $this->createNotFoundException('Article[id='.$id.'] inexistant.');
  	}
  	
  	// On récupère toutes les catégories :
  	$liste_categories = $em->getRepository('SdzBlogBundle:Categorie')
  	->findAll();
  	
  	// On boucle sur les catégories pour les lier à l'article
  	foreach($liste_categories as $categorie)
  	{
  		$article->addCategorie($categorie);
  	}
  	
  	// Inutile de persister l'article, on l'a récupéré avec Doctrine
  	
  	// Étape 2 : On déclenche l'enregistrement
  	$em->flush();
  	
  	return new Response('OK');
  	
  	// Ici, on récupérera l'article correspondant à $id
  
  	// Ici, on s'occupera de la création et de la gestion du formulaire
  
  	$article = array(
  			'id'      => 1,
  			'titre'   => 'Mon weekend a Phi Phi Island !',
  			'auteur'  => 'winzou',
  			'contenu' => 'Ce weekend était trop bien. Blabla…',
  			'date'    => new \Datetime()
  	);
  	 
  	// Puis modifiez la ligne du render comme ceci, pour prendre en compte l'article :
  	return $this->render('SdzBlogBundle:Blog:modifier.html.twig', array(
  			'article' => $article
  	));
  }

  
  public function testAction()
  {
  	$article = new Article();
  	$article->setTitre("L'histoire d'un bon weekend !");
  	$article->setAuteur('ben');
  	$article->setContenu('content') ;
  
  	$em = $this->getDoctrine()->getManager();
  	$em->persist($article);
  	$em->flush(); // C'est à ce moment qu'est généré le slug
  
  	return new Response('Slug généré : '.$article->getSlug()); // Affiche « Slug généré : l-histoire-d-un-bon-weekend »
  }
}



