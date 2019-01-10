<?php
namespace Demo\Controller;
use Symfony\Component\HttpFoundation\Response;

class DemoController
{
    public function index()
    {
        return new Response('demo');
    }
}
