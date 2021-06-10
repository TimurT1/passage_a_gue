<?php

namespace App\Controller;

use App\Form\EmailType;
use Symfony\Component\Mime\Email;
use App\Entity\Email as EntityEmail;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Validator\Constraints\Length;

class AutresElementsController extends AbstractController
{
    /**
     * @Route("/", name="accueil")
     */
    public function index(): Response
    {
        return $this->render('autres_elements/index.html.twig');
    }

    /**
     *@Route("/{_locale}/parametrage", name="parametrage")     
     */
    public function parametrage()
    {
        return $this->render('autres_elements/parametrage.html.twig');
    }

    /**
     * @Route("/{_locale}/portail", name="portail")
     */
    public function portail(): Response
    {
        return $this->render('autres_elements/portail.html.twig');
    }

    /**
     * @Route("/{_locale}/mention", name="mention")
     */
    public function mention(): Response
    {
        return $this->render('autres_elements/mention.html.twig');
    }

    /**
     * @Route("/{_locale}/contact", name="contact")
     */
    public function contact(Request $request, MailerInterface $mailer, TranslatorInterface $translator): Response
    {
        $monEmail = new EntityEmail();
        $form = $this->createForm(EmailType::class, $monEmail);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){
            $message = '
                <p>Nouveau message reçu du site pagué :</p>
                <div>
                    <ul>
                        <li>
                            nom : '.$form->get('nomEnvoyeur')->getData().'
                        </li>
                        <li>
                            prénom : '.$form->get('prenomEnvoyeur')->getData().'
                        </li>
                        <li>
                            email : '.$form->get('monEmail')->getData().'
                        </li>
                    </ul>
                </div>
                <div>
                    <h1>objet : '.$form->get('nomMessage')->getData().'</h1>
                    <p>'.$form->get('message')->getData().'</p>
                    <a href=mailto:"'.$form->get('monEmail')->getData().'">Répondre</a>
                </div>';
            $email = (new Email())
            ->from('projetPassageAGue@gmail.com')
            ->to('projetPassageAGue@gmail.com')
            ->cc($form->get('monEmail')->getData())
            //->bcc('bcc@example.com')
            //->replyTo('fabien@example.com')
            ->priority(Email::PRIORITY_HIGH)
            ->subject('Nouveau message')
            ->text('Test de message')
            ->html($message);
        
            $mailer->send($email);
            $success = $translator->trans('Message envoyé avec succès');
            $this->addFlash('message', $success);
            return $this->redirectToRoute('accueil');
        }
        
        return $this->render('autres_elements/contact.html.twig', [
            'email' => $monEmail,
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/{locale}", name="change_locale")
     */
    public function changeLocale($locale, Request $request)
    {
            //On stocke la langue demandée dans la session
            $request->getSession()->set('_locale', $locale);

            //On revient en arrière
            $referer = $request->headers->get('referer');
            $nomDuSite = 'https://127.0.0.1:8000/';
            if($referer == $nomDuSite){
                return $this->redirect($referer);
            }
            else if(   strlen($referer) == (0)   ){
                return $this->redirect($nomDuSite);
            }
            //$this->addFlash('message', $referer); DEBUG
            $referer = $nomDuSite.$locale.substr($referer, strlen($nomDuSite)+2 );
            //$this->addFlash('message', $referer); DEBUG
            return $this->redirect($referer);
    }
}