<?php

namespace App\Controller;

use App\Entity\PassageAGue;
use App\Form\PassageAGueType;
use App\Repository\PassageAGueRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * @Route("/{_locale}/passage")
 */
class PassageController extends AbstractController
{
    /**
     * @Route("/", name="passage_a_gue_index", methods={"GET"})
     */
    public function index(PassageAGueRepository $passageAGueRepository): Response
    {
        return $this->render('passage/index.html.twig', [
            'passage_a_gues' => $passageAGueRepository->findAll(),
        ]);
    }

    /**
     *@Route("/recherche", name="recherche")     
     */
    public function recherche()
    {
        return $this->render('passage/recherche.html.twig');
    }

    /**
    *@Route("/creation", name="creation", methods={"GET","POST"})
    */
    public function creation(Request $request, TranslatorInterface $translator): Response
    {
        $passageAGue = new PassageAGue();
        $form = $this->createForm(PassageAGueType::class, $passageAGue);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($passageAGue);
            $entityManager->flush();

            $success = $translator->trans('Création effectuée avec succès');
            $this->addFlash('message', $success);
            return $this->redirectToRoute('passage_a_gue_index');
        }

        return $this->render('passage/new.html.twig', [
            'passage_a_gue' => $passageAGue,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="passage_a_gue_show", methods={"GET"})
     */
    public function show(PassageAGue $passageAGue): Response
    {
        return $this->render('passage/show.html.twig', [
            'passage_a_gue' => $passageAGue,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="passage_a_gue_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, PassageAGue $passageAGue, TranslatorInterface $translator): Response
    {
        $form = $this->createForm(PassageAGueType::class, $passageAGue);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            $success = $translator->trans('Modification effectuée avec succès');
            $this->addFlash('message', $success);
            return $this->redirectToRoute('passage_a_gue_index');
        }

        return $this->render('passage/edit.html.twig', [
            'passage_a_gue' => $passageAGue,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="passage_a_gue_delete", methods={"POST"})
     */
    public function delete(Request $request, PassageAGue $passageAGue, TranslatorInterface $translator): Response
    {
        if ($this->isCsrfTokenValid('delete'.$passageAGue->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($passageAGue);
            $entityManager->flush();
        }

        $success = $translator->trans('suppression effectuée avec succès');
        $this->addFlash('message', $success);
        return $this->redirectToRoute('passage_a_gue_index');
    }

    /**
     * @Route("/{id}/archive", name="passage_a_gue_archive", methods={"POST"})
     */
    public function archive(Request $request, PassageAGue $passageAGue, TranslatorInterface $translator): Response
    {
        
        if ($this->isCsrfTokenValid('archive'.$passageAGue->getId(), $request->request->get('token'))) {
            $passageAGue->setBoolArchive(true);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($passageAGue);
            $entityManager->flush();
        }

        $success = $translator->trans('Archivage effectuée avec succès');
        $this->addFlash('message', $success);
        return $this->redirectToRoute('passage_a_gue_index');
    }
}