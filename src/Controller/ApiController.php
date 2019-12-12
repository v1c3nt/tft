<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\Routing\Annotation\Route;

class ApiController extends AbstractController
{
    /**
     * @Route("/api", name="api")
     */
    public function index()
    {
        return $this->render('api/index.html.twig', [
            'controller_name' => 'ApiController',
        ]);
    }

    /**
     * @Route("/api/items", name="api_items")
     */
    public function getItems()
    {
        //RGAPI-56366ab0-307a-40d4-b6ec-02d9caa54c95
        $client = HttpClient::create();

        $response = $client->request(
            'GET',
            'http://ddragon.leagueoflegends.com/cdn/9.24.1/data/fr_FR/item.json',
            ['headers' => ['X-Riot-Token' => 'RGAPI-483079d9-0b7c-42ee-8d97-fd376811dc26']]
        );
        $contentType = $response->getHeaders()['content-type'][0];
        $content = $response->getContent();
        $content = $response->toArray();


        dump($content);
        exit;
    }
}
