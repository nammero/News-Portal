<?php

namespace App\Controller;

use App\Category\Service\CategoriesLogic;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CategoryController extends AbstractController
{
    public function category($name)
    {
        $description = CategoriesLogic::getDescriptionByName($name);

        return $this->render('category/index.html.twig', [
            'name' => $name,
            'description' => $description,
        ]);
    }
}
