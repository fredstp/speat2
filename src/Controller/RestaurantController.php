<?php

namespace App\Controller;

use App\Entity\Restaurant;
use App\Form\RestaurantType;
use App\Controller\RestaurantController;
use App\Repository\RestaurantRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class RestaurantController extends AbstractController
{
    /**
     * @Route("/restaurant", name="restaurant")
     */
    public function index(RestaurantRepository $restaurantRepository)
    {
        $restaurants= $restaurantRepository->findAll();
      
        return $this->render('restaurant/index.html.twig', [
            'restaurants' => $restaurants
        ]);
    }
    


    /**
     * @Route("", name=":create",methods={"HEAD","GET","POST"})
     
     * Route("/restaurant", name="create")
     */
    public function create(Request $request)
    {
        $restaurants = new Restaurant;
        $form = $this->createForm(RestaurantType::class, $restaurants);
        $form->handleRequest ($request);

        if ( $form->isSubmitted())
        {
            
            $em = $this->getDoctrine()->getManager();

            $em->persist($restaurants);

            $em->flush();

            return $this->redirectToRoute("restaurant:index");
        }
        
        $form = $form->createView();

        return $this->render('restaurant/create.html.twig', ['form'=> $form ]);
    }

}
