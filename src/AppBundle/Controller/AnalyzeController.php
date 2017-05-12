<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use AppBundle\Entity\Person;
use AppBundle\Entity\Shiporder;
use AppBundle\Entity\Item;

class AnalyzeController extends Controller
{
	
	/**
	* 
	*  @ApiDoc(
    *  description="List of shiporders and items",
    *  output="Render default/analyze.html.twig")
    * 
	* @Route("/analyze", name="analyze")
	*/
	public function getShipordersAction() {
		$entityManager = $this->getDoctrine()->getManager();
		$entity = $entityManager
					->getRepository('AppBundle:Item')
					->createQueryBuilder('i')
					->join('i.orderid', 's')
					->join('s.orderperson', 'p')
					->getQuery()
					->getResult();
		
		return $this->render('default/analyze.html.twig', array("shiporders" => $entity));
	}
	
}