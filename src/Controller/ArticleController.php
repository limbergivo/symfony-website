<?php
/**
 * Created by PhpStorm.
 * User: ivo
 * Date: 2/19/19
 * Time: 9:16 AM
 */

namespace App\Controller;



use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    // annotation setup for page
    /**
     * @Route("/",  name="app_homepage")
     */

    public function  homepage(){
        return $this->render('article/homepage.html.twig');
    }

    /**
     * @Route("news/{slug}",name="article_show")
     */
    public  function  show($slug)
    {
        $comments = [
            'I ate a normal rock once. It did NOT taste like bacon!',
            'Woohoo! I\'m going on an all-asteroid diet!',
            'I like bacon too! Buy some from my site! bakinsomebacon.com',
        ];
        dump($slug, $this);

            return $this->render('article/show.html.twig', [
                'title' => ucwords((str_replace('--', ' ', $slug))),
                'slug' => $slug,
                'comment' => $comments,

            ]);

    }

    /**
    * @Route("/news/{slug}/heart", name="article_toggle_heart", methods={"POST"})
     */
    public function toggleArticleHeart($slug, LoggerInterface $logger){
            //TODO -  actually heart/unheart the article
        $logger->info('article is being hearted');
        return new JsonResponse(['hearts' => rand(5, 100)]);
    }

}