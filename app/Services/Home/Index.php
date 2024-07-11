<?php

namespace App\Services\Home;

use Pocket\Framework\ServiceInterface;

class Index implements ServiceInterface
{
    /**
     * Page index
     *
     * @param string $name
     * @return string
     */
    public function index(string $name = 'world'): string
    {
        return render('index.twig', compact('name'));
    }
}