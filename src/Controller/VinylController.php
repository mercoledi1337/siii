<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use function Symfony\Component\String\u;

class VinylController
{
    #[Route('/')]
    public function homage(): Response
    {
        return new Response('Title: PB and JAMS');
    }

    #[Route('/browse/{slug}')]
    public function browse(string $slug = null): Response
    {
        if($slug) {
            $title = 'genre: '. u(str_replace('-', ' ', $slug))->title(true);

        }else {
            $title = 'All';
        }
        return new Response($title);
    }
}