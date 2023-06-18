<?php

namespace App\Controller;

use App\Repository\ContactRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Knp\Component\Pager\PaginatorInterface;

#[Route('/admin', name: 'admin_')]
class AdminController extends AbstractController
{
    #[Route('/', name: '_index', methods: ['GET'])]
    public function index(ContactRepository $messageRepository, PaginatorInterface $paginator, Request $request): Response
    {
        $query = $messageRepository->createQueryBuilder('m')->getQuery();

        $pagination = $paginator->paginate(
            $query, /* query NOT result */
            $request->query->getInt('page', 1), /*page number*/
            10 /*limit per page*/
        );

        // parameters to template
        return $this->render('admin/index.html.twig', ['pagination' => $pagination]);
    }
}