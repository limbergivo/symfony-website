<?php
/**
 * Created by PhpStorm.
 * User: ivo
 * Date: 2/19/19
 * Time: 9:16 AM
 */

namespace App\Controller;



use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    // annotation setup for page
    /**
     * @Route("/")
     */
    public function  homepage(){
        return new Response('OMG DID I JUST DO THAT!');
    }

    /**
     * @Route("news/{slug}")
     */
    public  function  show($slug)
    {
        $comments = [
            'I ate a normal rock once. It did NOT taste like bacon!',
            'Woohoo! I\'m going on an all-asteroid diet!',
            'I like bacon too! Buy some from my site! bakinsomebacon.com',
        ];

            return $this->render('article/show.html.twig', [
                'title' => ucwords((str_replace('--', ' ', $slug))),
                'comment' => $comments,
            ]);
    }

}