<?php

namespace App\Controller;

use App\Entity\TypeEquipement;
use App\Form\TypeEquipementType;
use App\Repository\TypeEquipementRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/parametrage/typeEquipement")
 */
class TypeEquipementController extends AbstractController
{
    /**
     * @Route("/", name="type_equipement_index", methods={"GET"})
     */
    public function indexTypeEquipement(TypeEquipementRepository $typeEquipementRepository): Response
    {
        return $this->render('type_equipement/index.html.twig', [
            'type_equipements' => $typeEquipementRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="type_equipement_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $typeEquipement = new TypeEquipement();
        $form = $this->createForm(TypeEquipementType::class, $typeEquipement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($typeEquipement);
            $entityManager->flush();

            return $this->redirectToRoute('type_equipement_index');
        }

        return $this->render('type_equipement/new.html.twig', [
            'type_equipement' => $typeEquipement,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="type_equipement_show", methods={"GET"})
     */
    public function show(TypeEquipement $typeEquipement): Response
    {
        return $this->render('type_equipement/show.html.twig', [
            'type_equipement' => $typeEquipement,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="type_equipement_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, TypeEquipement $typeEquipement): Response
    {
        $form = $this->createForm(TypeEquipementType::class, $typeEquipement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('type_equipement_index');
        }

        return $this->render('type_equipement/edit.html.twig', [
            'type_equipement' => $typeEquipement,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="type_equipement_delete", methods={"POST"})
     */
    public function delete(Request $request, TypeEquipement $typeEquipement): Response
    {
        if ($this->isCsrfTokenValid('delete'.$typeEquipement->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($typeEquipement);
            $entityManager->flush();
        }

        return $this->redirectToRoute('type_equipement_index');
    }
}
