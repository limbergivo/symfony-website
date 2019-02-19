<?php
/**
 * Created by PhpStorm.
 * User: ivo
 * Date: 2/19/19
 * Time: 9:16 AM
 */

namespace App\Controller;



use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController
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
        return new Response(sprintf(
            'Future page to show the article: %s',
            $slug
        ));
    }

}