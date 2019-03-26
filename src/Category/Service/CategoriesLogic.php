<?php

namespace App\Category\Service;

class CategoriesLogic
{
    public static function getDescriptionByName($name)
    {
        switch ($name) {
            case 'World':
                return 'This category about news from the whole world';
            case 'Sport':
                return 'Every sport from around the world';
            case 'IT':
                return 'Information technology';
            case 'Science':
                return 'Scientific news';
        }
    }
}
