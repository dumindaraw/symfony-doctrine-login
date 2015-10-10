<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase {
    
    private $loggedIn;

    public function testSuccessfulLogin() {

        $client = static::createClient();

        $crawler = $client->request('GET', '/');
     
        $form = $crawler->selectButton('Login')->form();

        $client->submit($form, array(
            'login[userName]' => 'Duminda',
            'login[password]' => '1234',
        ));

        $this->assertTrue(
                $this->loggedIn = $client->getResponse()->isRedirect('/dashboard')
        );
    }
    
    public function testFailedLogin() {

        $client = static::createClient();

        $crawler = $client->request('GET', '/');
     
        $form = $crawler->selectButton('Login')->form();

        $client->submit($form, array(
            'login[userName]' => 'saml',
            'login[password]' => '444f',
        ));
        
        $this->assertContains('Login', $client->getResponse()->getContent());
        
    }
    

}
