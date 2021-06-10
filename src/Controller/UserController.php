<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use App\Repository\UserRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

/**
 * @Route("/{_locale}/parametrage/utilisateurs")
 */
class UserController extends AbstractController
{
    /**
     * @Route("/", name="user_index", methods={"GET"})
     */
    public function index(UserRepository $userRepository): Response
    {
        return $this->render('user/index.html.twig', [
            'users' => $userRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="user_new", methods={"GET","POST"})
     */
    public function new(Request $request, TranslatorInterface $translator, UserPasswordEncoderInterface $encoder): Response
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $role = array();
            $role[0] = $user->getRoles()[0];
            $user->setRoles($role);
            $entityManager = $this->getDoctrine()->getManager();
            $hash = $encoder->encodePassword($user, $user->getPassword());
            $user->setPassword($hash); 
            $entityManager->persist($user);
            $entityManager->flush();

            $success = $translator->trans('Création effectuée avec succès');
            $this->addFlash('message', $success);
            return $this->redirectToRoute('user_index');
        }

        return $this->render('user/new.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
            'editMode' => 3,
        ]);
    }

    /**
     * @Route("/{id}", name="user_show", methods={"GET"})
     */
    public function show(User $user): Response
    {
        return $this->render('user/show.html.twig', [
            'user' => $user,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="user_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, User $user, TranslatorInterface $translator): Response
    {
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);
        $userPass = $user->getPassword();
        if ($form->isSubmitted() && $form->isValid()) {
            $role = array();        // Verification des rôles
            $role[0] = $user->getRoles()[0];    //On prend un seul rôle car on a déjà notre hierarchie de faite
            $user->setRoles($role);

            if($user->getPassword() == null ){ //Vérification du mot de passe
                $user->setPassword($userPass);
            }
            $this->getDoctrine()->getManager()->flush();
            $success = $translator->trans('Modification effectuée avec succès');
            $this->addFlash('message', $success);
            return $this->redirectToRoute('user_index');
        }

        return $this->render('user/edit.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
            'editMode' => 0,
        ]);
    }

    /**
     * @Route("/{id}/edit/mot_de_passe", name="user_edit_password", methods={"GET","POST"})
     */
    public function editMotDePasse(Request $request, User $user, TranslatorInterface $translator, UserPasswordEncoderInterface $encoder): Response
    {
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);
        $user->setEmail($user->getEmail());
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $hash = $encoder->encodePassword($user, $user->getPassword());
            $user->setPassword($hash); 
            $entityManager->persist($user);
            $entityManager->flush();
            $success = $translator->trans('Modification effectuée avec succès');
            $this->addFlash('message', $success);
            return $this->redirectToRoute('user_index');
        }

        return $this->render('user/editPassword.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
            'editMode' => 1,
        ]);
    }

    /**
     * @Route("/{id}", name="user_delete", methods={"POST"})
     */
    public function delete(Request $request, User $user, TranslatorInterface $translator): Response
    {
        if ($this->isCsrfTokenValid('delete'.$user->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($user);
            $entityManager->flush();
        }

        $success = $translator->trans('Suppression effectuée avec succès');
        $this->addFlash('message', $success);
        return $this->redirectToRoute('user_index');
    }
}