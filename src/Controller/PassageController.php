<?php

namespace App\Controller;

use App\Entity\Procedure;
use App\Entity\Equipement;
use App\Entity\PassageAGue;
use App\Form\PassageAGueType;
use App\Repository\PassageAGueRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * @Route("/passage")
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
    public function creation(Request $request): Response
    {
        $passageAGue = new PassageAGue();


/////////////////////////////////////////////////////
       /* $equipement1 = new Equipement();
        $equipement1->setNomEquipement('equipement1');
        $passageAGue->getEquipements()->add($equipement1);  
        $equipement2 = new Equipement();
        $equipement2->setNomEquipement('equipement2');
        $passageAGue->getEquipements()->add($equipement2);         
       */
////////////////////////////////////////////////////

/////////////////////////////////////////////////////
       /* $procedure1 = new Procedure();
        $procedure1->setNomProcedure('procedure1');
        $passageAGue->getProcedures()->add($procedure1);  
        $procedure2 = new Procedure();
        $procedure2->setNomProcedure('procedure2');
        $passageAGue->getProcedures()->add($procedure2);         
       */
////////////////////////////////////////////////////

        $form = $this->createForm(PassageAGueType::class, $passageAGue);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            //$passageAGue->setGpsX($this->verificationCoordonees($passageAGue->getGpsX(), 180));
           // $passageAGue->setGpsY($this->verificationCoordonees($passageAGue->getGpsY(), 90));
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($passageAGue);
            $entityManager->flush();

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

    public function edit(Request $request, PassageAGue $passageAGue): Response
    {
        $form = $this->createForm(PassageAGueType::class, $passageAGue);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
           // $passageAGue->setGpsX($this->verificationCoordonees($passageAGue->getGpsX(), 180));
            //$passageAGue->setGpsY($this->verificationCoordonees($passageAGue->getGpsY(), 90));
            $this->getDoctrine()->getManager()->flush();

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
    public function delete(Request $request, PassageAGue $passageAGue): Response
    {
        if ($this->isCsrfTokenValid('delete'.$passageAGue->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($passageAGue);
            $entityManager->flush();
        }

        return $this->redirectToRoute('passage_a_gue_index');
    }


    public function verificationCoordonees($gps,$borne){
        while($gps>$borne || $gps<(-1)*$borne){
            if($gps>$borne){
                $gps-=$borne;
            }
            else{
                $gps+=$borne;
            }
        }
        return $gps;
    }
}