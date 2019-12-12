<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class GameController extends AbstractController
{
    /**
     * @Route("/game", name="game")
     */
    public function index()
    {
        $item1 = random_int(1,9);
        $item2 = random_int(1,9);
        $build = $item1.''.$item2;

        $items = [];
        $a = 1;
        $d = 0;
        while ($a+10 <= 99) {
            $b = 10+$d;
            $c = 20 - $a;
            
            while ($b <= 19) {
                if(!in_array($a+$b, [20,30,40,50,60,70,80,90,100])){
                    $items[$a+$b] =$a+$b; 
                }
                $b++;
            }
            $a = $a+10;
            $d++;
        }
     
        //shuffle($items);

        return $this->render('game/index.html.twig', [
            'controller_name' => 'GameController',
            'item1'=>$item1,
            'item2'=>$item2,
            'items'=>$items,
            'build'=>$build,
        ]);
    }
}