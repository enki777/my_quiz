<?php


namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController
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
        return new Response(sprintf(
            'Page pour afficher le questionnaire "%s" !',
            $noam 
        ));
    }
}