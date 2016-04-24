<?php

namespace AppBundle\Controller;
use AppBundle\Entity\Product;
use AppBundle\Entity\Category;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
        ]);
    }
    
    
    /**
     * @Route("/createproduct", name="createproduct")
     */
    public function createproductAction(Request $request)
    {
    	$category = new Category();
    	$category->setName('Computer Peripherals');
    	
    	
    	$product = new Product();
    	$product->setName('Keyboard');
    	$product->setPrice(19.99);
    	$product->setDescription('Ergonomic and stylish!');
    	// relate this product to the category
    	$product->setCategory($category);
    	
    	
    	
    	$em = $this->getDoctrine()->getManager();
    	
    	// tells Doctrine you want to (eventually) save the Product (no queries yet)
    	$em->persist($category);
    	$em->persist($product);
    	
    	// actually executes the queries (i.e. the INSERT query)
    	$em->flush();
    	
    	return new Response(
		'Saved new product with id: '.$product->getId()
		.' and new category with id: '.$category->getId()
		);
    }
    

    /**
     * @Route("/updateProduct/{productId}", name="updateproduct")
     */
    public function updateProductAction($productId)
    {
    	$em = $this->getDoctrine()->getManager();
    	$product = $em->getRepository('AppBundle:Product')->find($productId);
    	if (!$product) {
    		throw $this->createNotFoundException('No product found for id '.$productId);
		}
		$product->setName('New product name!');
		$em->flush();
		return $this->redirectToRoute('homepage');
	}
    
	/**
	* @Route("/lucky/number")
	*/
	public function numberAction()
	{
		$number = rand(0, 100);
		return new Response(
		'<html><body>Lucky number: '.$number.'</body></html>');
	}
	
	
	/**
	 * @Route("/api/lucky/number")
	 */
	public function apiNumberAction()
	{
		$data = array('lucky_number' => rand(0, 100),);
		//return new Response(	json_encode($data),	200,	array('Content-Type' => 'application/json')	);
		//calls json_encode and sets the Content-Type header
		return new JsonResponse($data);
	}
	
	
	/**
	 * @Route("/lucky/number/{count}")
	 */
	public function numberActionCount($count)
	{
		$numbers = array();
		for ($i = 0; $i < $count; $i++) {
			$numbers[] = rand(0, 100);
		}
		$numbersList = implode(', ', $numbers);
		return new Response(
				'<html><body>Lucky numbers: '.$numbersList.'</body></html>'
				);
	}
	
	
	/**
	 * @Route("/lucky/numberTemplate/{count}")
	 */
	public function numberActionTemplate($count)
	{
		
		$numbers = array();
		for ($i = 0; $i < $count; $i++) {
			$numbers[] = rand(0, 100);
		}
		$numbersList = implode(', ', $numbers);
		
		
		// ...
		/*
		 $html = $this->container->get('templating')->render(
		 'lucky/number.html.twig',
		 array('luckyNumberList' => $numbersList)
		 );
		 return new Response($html);
		 */
		// render: a shortcut that does the same as above
		return $this->render(
				'lucky/number.html.twig',
				array('luckyNumberList' => $numbersList)
				);
	}

	/**
	 * @Route("/hello/{firstName}/{lastName}", name="hello2")
	 */
	public function helloApellidos($firstName, $lastName,$isCapullo=true)
	{
		
		throw $this->createNotFoundException('The product does not exist');
		
		
		return $this->redirectToRoute('homepage');
		
		$number = rand(0, 100);
		return new Response(
		'<html><body>Hola: '.($isCapullo?'Capullo ':'No Capullo ').$firstName.' '.$lastName.'</body></html>');
	}

	
	
	/**
	 * @Route("/phpinfo", name="phpinfo")
	 */
	public function phpinfoAction()
	{
	 
		return new Response(				phpinfo());
	}
}
