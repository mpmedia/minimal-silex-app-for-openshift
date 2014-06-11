<?php


use Silex\WebTestCase;

class AppTest extends WebTestCase
{

    /**
     * Creates the application.
     *
     * @return \Symfony\Component\HttpKernel\HttpKernel
     */
    public function createApplication()
    {
        $app = Bootstrap::getApplication();
        return $app;
    }

    /**
     * GET /
     */
    function testHome()
    {
        $client = $this->createClient();
        $crawler = $client->request('GET', '/');
        $this->assertTrue($client->getResponse()->isOk());
        $this->assertEquals("Hello OpenShift!", $client->getResponse()->getContent());
    }
}


