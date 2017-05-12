<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use AppBundle\Entity\Person;
use AppBundle\Entity\Shiporder;
use AppBundle\Entity\Item;

class UploadController extends Controller
{
	
    /**
    *  @ApiDoc(
    *  description="Reads and loads the file information to the database",
    *  input="Symfony\Component\HttpFoundation\Request",
    *  output="Render default/analyze.html.twig")
    * 
	* @Route("/upload", name="upload")
	*/
	public function uploadAction(Request $request)
	{
		$form = $this->createFormBuilder()->getForm();
		$file = $request->files->get('form')['file'];
		
		$response = new Response();
		$response->setContent('Vish! An error has ocurred...');
		
		if ($file->guessExtension() == 'xml') {
			$xml = simplexml_load_string(file_get_contents($file));
			$em = $this->getDoctrine()->getManager();
			
			if ($xml->person != "") {
				foreach($xml as $p) {
					$person = new Person();
					$person->setPersonid($p->personid);
					$person->setPersonname($p->personname);
					$person->setPhone1($p->phones->phone[0]);
					$person->setPhone2($p->phones->phone[1]);
				
					try {
						$em->persist($person);
					}
					catch (\Exceptin $e) {
						$em->rollback();
					}
				}
			} elseif ($xml->shiporder != "") {
				foreach($xml as $s) {
					$orderperson = $this->getDoctrine()->getRepository('AppBundle:Person')->find($s->orderperson);
					
					$shiporder = new Shiporder();
					$shiporder->setOrderid($s->orderid);
					$shiporder->setOrderperson($orderperson);
					$shiporder->setShiptoname($s->shipto->name);
					$shiporder->setShiptoaddress($s->shipto->address);
					$shiporder->setShiptocity($s->shipto->city);
					$shiporder->setShiptocountry($s->shipto->country);
					
					try {
						$em->persist($shiporder);
						$em->flush();
					}
					catch (\Exceptin $e) {
						$em->rollback();
					}
					
					foreach ($s->items as $i) {
						$order = $this->getDoctrine()->getRepository('AppBundle:Shiporder')->find($s->orderid);
						
						$item = new Item();
						$item->setOrderid($order);
						$item->setTitle($i->item->title);
						$item->setNote($i->item->note);
						$item->setPrice($i->item->price);
						$item->setQuantity($i->item->quantity);
						
						try {
							$em->persist($item);
						}
						catch (\Exceptin $e) {
							$em->rollback();
						}
					}
					
				}
			}
			
			$em->flush();
			
			$response->setContent('Done!');
		}
		
		return $response;
	}
    
}