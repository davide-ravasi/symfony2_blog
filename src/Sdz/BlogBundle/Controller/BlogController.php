<?php

    namespace Sdz\BlogBundle\Controller;

    use Symfony\Bundle\FrameworkBundle\Controller\Controller;
    use Symfony\Component\HttpFoundation\Response;

    class BlogController extends Controller
    {
        public function IndexAction()
        {
            return new Response("Hello World !");
        }
    }