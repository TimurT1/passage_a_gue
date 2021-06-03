<?php

namespace App\Controller;

use App\Entity\User;

use App\Form\LoginFormType;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class SecurityController extends AbstractController
{

    /**
     * @Route("/inscription", name="app_registration")
     */
    public function registration(Request $request, EntityManagerInterface $manager, UserPasswordEncoderInterface $encoder){
        $user = new User();
        $form = $this->createForm(LoginFormType::class, $user);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            if($user->getPhotoUtilisateur() == null){
                $user->setPhotoUtilisateur("ma super photo");
            }
            $user->setRoles(["ROLE_ADMIN"]);
            $hash = $encoder->encodePassword($user, $user->getPassword());
            $user->setPassword($hash); 
            $manager->persist($user);
            $manager->flush();
            return $this->redirectToRoute("app_login");
        }

        return $this->render('security/registration.html.twig', [
            'form'=> $form->createView()
        ]);
    }
    

    /**
     * @Route("/login", name="app_login")
     */
    public function login(AuthenticationUtils $authenticationUtils): Response
    {

        if ($this->getUser()) {
            return $this->redirectToRoute('accueil');
        }


        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', ['last_username' => $lastUsername, 'error' => $error]);
    }

    /**
     * @Route("/logout", name="app_logout")
     */
    public function logout()
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }

    /**
     *@Route("/profil", name="profil")     
     */
    public function profil(Request $request, EntityManagerInterface $manager, UserPasswordEncoderInterface $encoder)
    {
        $user = $this->getUser();
        $form = $this->createForm(LoginFormType::class, $user);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $hash = $encoder->encodePassword($user, $user->getPassword());
            $user->setPassword($hash); 
            $manager->persist($user);
            $manager->flush();
            return $this->redirectToRoute("app_logout");
        }
        return $this->render('security/profil.html.twig', [
            'form'=> $form->createView(),
            'user'=> $this->getUser()
        ]);
    }

}


//Timur test remeber me 



