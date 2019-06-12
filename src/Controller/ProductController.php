<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Article;
use App\Form\FormArticleType;
// use Symfony\Flex\Response; 
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ProductController extends AbstractController
{
    /**
     * @Route("/add", name="addArticle")
     * 
     * @return Symfony\Component\Routing\Annotation\Route;
     */
    public function addArticle(Request $request){
        //Creer un nouveau article
        $article= new Article();

        //Recuperer le formulaire
        $form= $this->createForm(FormArticleType::class,$article);
        
        //Requete pour le traitement
        $form->handleRequest($request);

        //Si lee formulaire est soumis
        if($form->isSubmitted()){
            //Enregistrer dans la BD

            $em =$this->getDoctrine()->getManager();

            $em->persist($article);

            $em->flush();

            return new Response('Article ajoute avec succes');
        }
        
        //Generer le HTML
        $formView=$form->createView();
        
        //Rendre la vue
        return $this->render('sar/addArticle.html.twig',array(
            'form'=> $formView,
        )      
     );

    }
}
