<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Post;
use Symfony\Component\HttpFoundation\JsonResponse;

class JsonPostsController extends Controller
{
    /**
     * @Route("/json")
     */
    public function postsJsonShowAction()
    {

      $json_posts = $this->getDoctrine()->getRepository(Post::class)->findAll();
      return new JsonResponse(array('data' => $json_posts));

      /*return $this->render('AppBundle:JsonPosts:posts_json_show.html.twig', array(
          // ...
      ));*/
    }

}
