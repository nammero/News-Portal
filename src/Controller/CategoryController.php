<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CategoryController extends AbstractController
{
    public function category($name)
    {
        $description = '';

        switch ($name) {
            case 'World':
                $description = 'This category about news from the whole world';
                break;
            case 'Sport':
                $description = 'Every sport from around the world';
                break;
            case 'IT':
                $description = 'Information technology';
                break;
            case 'Science':
                $description = 'Scientific news';
                break;
        }

        return $this->render('category/index.html.twig', [
            'name' => $name,
            'description' => $description,
        ]);
    }
}
