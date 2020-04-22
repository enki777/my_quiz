<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function homepage(){
        return new Response('Quel beau controller !');
    }

    /**
     * @Route("quizz/questions/{noam}")
     */
    public function show($noam){

        $reponses = [
            'ceci est la premiere reponse',
            'ceci est la deuxieme reponse',
            'ceci est la toisieme reponse',

        ];

        dump($this);

        return $this->render('question/show.html.twig', [
            'question' => ucwords(str_replace('-', ' ', $noam)),
            'reponses' => $reponses,
        ]);
//        return new Response(sprintf(
//            'Page pour afficher le questionnaire "%s" !',
//            $noam
//        ));
    }
}