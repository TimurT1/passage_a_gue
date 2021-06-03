<?php

namespace App\Controller;

use App\Entity\TypeOuvrage;
use App\Form\TypeOuvrageType;
use App\Repository\TypeOuvrageRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/parametrage/typeOuvrage")
 */
class TypeOuvrageController extends AbstractController
{
    /**
     * @Route("/", name="type_ouvrage_index", methods={"GET"})
     */
    public function index(TypeOuvrageRepository $typeOuvrageRepository): Response
    {
        return $this->render('type_ouvrage/index.html.twig', [
            'type_ouvrages' => $typeOuvrageRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="type_ouvrage_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $typeOuvrage = new TypeOuvrage();
        $form = $this->createForm(TypeOuvrageType::class, $typeOuvrage);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($typeOuvrage);
            $entityManager->flush();

            return $this->redirectToRoute('type_ouvrage_index');
        }

        return $this->render('type_ouvrage/new.html.twig', [
            'type_ouvrage' => $typeOuvrage,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="type_ouvrage_show", methods={"GET"})
     */
    public function show(TypeOuvrage $typeOuvrage): Response
    {
        return $this->render('type_ouvrage/show.html.twig', [
            'type_ouvrage' => $typeOuvrage,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="type_ouvrage_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, TypeOuvrage $typeOuvrage): Response
    {
        $form = $this->createForm(TypeOuvrageType::class, $typeOuvrage);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('type_ouvrage_index');
        }

        return $this->render('type_ouvrage/edit.html.twig', [
            'type_ouvrage' => $typeOuvrage,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="type_ouvrage_delete", methods={"POST"})
     */
    public function delete(Request $request, TypeOuvrage $typeOuvrage): Response
    {
        if ($this->isCsrfTokenValid('delete'.$typeOuvrage->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($typeOuvrage);
            $entityManager->flush();
        }

        return $this->redirectToRoute('type_ouvrage_index');
    }
}
