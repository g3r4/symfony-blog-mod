<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class JsonPostsControllerTest extends WebTestCase
{
    public function testPostsjsonshow()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/postsJsonShow');
    }

}
