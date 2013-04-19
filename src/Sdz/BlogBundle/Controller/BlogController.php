<?php
// src/Sdz/BlogBundle/Controller/BlogController.php
 
namespace Sdz\BlogBundle\Controller;
 
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Httpfoundation\Response;
use Sdz\BlogBundle\Entity\Article;
 
class BlogController extends Controller
{
  public function indexAction($page)
  {
 
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
	  // On récupère le repository
	  $repository = $this->getDoctrine()
	                     ->getManager()
	                     ->getRepository('SdzBlogBundle:Article');
	 
	  // On récupère l'entité correspondant à l'id $id
	  $article = $repository->find($id);
	 
	  // $article est donc une instance de Sdz\BlogBundle\Entity\Article
	 
	  // Ou null si aucun article n'a été trouvé avec l'id $id
	  if($article === null)
	  {
	    throw $this->createNotFoundException('Article[id='.$id.'] inexistant.');
	  }
	     
	  return $this->render('SdzBlogBundle:Blog:voir.html.twig', array(
	    'article' => $article
	  ));
	}
   
	public function ajouterAction()
	{
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
 
  public function supprimerAction($id)
  {
    // Ici, on récupérera l'article correspondant à $id
 
    // Ici, on gérera la suppression de l'article en question
 
    return $this->render('SdzBlogBundle:Blog:supprimer.html.twig');
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

  
  public function modifierAction($id)
  {
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

}



