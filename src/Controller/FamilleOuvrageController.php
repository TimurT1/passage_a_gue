<?php

namespace App\Controller;

use App\Entity\FamilleOuvrage;
use App\Form\FamilleOuvrageType;
use App\Repository\FamilleOuvrageRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * @Route("/{_locale}/parametrage/familleOuvrage")
 */
class FamilleOuvrageController extends AbstractController
{
    /**
     * @Route("/", name="famille_ouvrage_index", methods={"GET"})
     */
    public function index(FamilleOuvrageRepository $familleOuvrageRepository): Response
    {
        return $this->render('famille_ouvrage/index.html.twig', [
            'famille_ouvrages' => $familleOuvrageRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="famille_ouvrage_new", methods={"GET","POST"})
     */
    public function new(Request $request, TranslatorInterface $translator): Response
    {
        $familleOuvrage = new FamilleOuvrage();
        $form = $this->createForm(FamilleOuvrageType::class, $familleOuvrage);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($familleOuvrage);
            $entityManager->flush();

            $success = $translator->trans('Création effectuée avec succès');
            $this->addFlash('message', $success);
            return $this->redirectToRoute('famille_ouvrage_index');
        }

        return $this->render('famille_ouvrage/new.html.twig', [
            'famille_ouvrage' => $familleOuvrage,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="famille_ouvrage_show", methods={"GET"})
     */
    public function show(FamilleOuvrage $familleOuvrage): Response
    {
        return $this->render('famille_ouvrage/show.html.twig', [
            'famille_ouvrage' => $familleOuvrage,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="famille_ouvrage_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, FamilleOuvrage $familleOuvrage, TranslatorInterface $translator): Response
    {
        $form = $this->createForm(FamilleOuvrageType::class, $familleOuvrage);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            $success = $translator->trans('Modification effectuée avec succès');
            $this->addFlash('message', $success);
            return $this->redirectToRoute('famille_ouvrage_index');
        }

        return $this->render('famille_ouvrage/edit.html.twig', [
            'famille_ouvrage' => $familleOuvrage,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="famille_ouvrage_delete", methods={"POST"})
     */
    public function delete(Request $request, FamilleOuvrage $familleOuvrage, TranslatorInterface $translator): Response
    {
        if ($this->isCsrfTokenValid('delete'.$familleOuvrage->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($familleOuvrage);
            $entityManager->flush();
        }
        $success = $translator->trans('Suppression effectuée avec succès');
        $this->addFlash('message', $success);
        return $this->redirectToRoute('famille_ouvrage_index');
    }
}
