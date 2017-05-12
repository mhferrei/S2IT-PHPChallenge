<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    public function testAnalyze()
    {
		$client = static::createClient();
		
		$crawler = $client->request('GET', '/analyze');
		
		$this->assertEquals(200, $client->getResponse->getStatusCode());
		$this->assertContains('Analyze information', $crawler->filter('.panel-heading')->text());
	}
    
}
