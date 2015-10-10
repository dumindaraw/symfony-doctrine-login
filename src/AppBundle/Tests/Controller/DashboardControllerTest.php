<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

/**
 * Description of DashboardControllerTest
 *
 * @author duminda
 */
class DashboardControllerTest extends WebTestCase{
    
    public function testAccessLoggedUserData() {
        
        $client = static::createClient();

        $crawler = $client->request('GET', '/');
     
        $form = $crawler->selectButton('Login')->form();

        $client->submit($form, array(
            'login[userName]' => 'Duminda',
            'login[password]' => '1234',
        ));
        
        $crawler2 = $client->request('GET', '/dashboard');
        $this->assertTrue($crawler2->filter('html:contains("No 23")')->count() > 0);
        
    }
}
