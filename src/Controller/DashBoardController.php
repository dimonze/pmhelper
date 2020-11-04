<?php

namespace App\Controller;

use http\Client\Response;

class DashBoardController
{
    public function number(): Response
    {
        $number = random_int(0, 100);

        return new Response(
            '<html><body>Lucky number: ' . $number . '</body></html>'
        );
    }
}