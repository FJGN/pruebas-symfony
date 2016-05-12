<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
/**
 * Description of LuckyController
 *
 * @author PcCom
 */
class LuckyController extends Controller{

    /**
     * @Route("/lucky/number")
     */
    public function numberAction() {
        $number = rand(0, 100);

        return new Response('<html><body>Lucky number: ' . $number . '</body></html>');
    }

    /**
     * @Route("/api/lucky/number")
     */
    public function apiNumberAction() {
        $data = array(
            'lucky_number' => rand(0, 100),
        );
        return new JsonResponse($data);
    }
    
    /**
     * @Route("/lucky/number/{count}")
     */
    public function numberCountAction($count) {
        $numbers = array();
        for($i = 0; $i<$count; $i++){
            $numbers[]=rand(0,100);
        }
        $numbersList = implode(', ', $numbers);
        return $this->render('lucky/number.html.twig', array('luckyNumberList'=>$numbersList));
    }
    
    /**
     * @Route("/nombre/{nombre}/{color}")
     */
    public function nombreAction($nombre, $color){
        return $this->render('pruebas/nombreColor.html.twig', array('nombre'=>$nombre, 'color'=>$color));
    }
}
