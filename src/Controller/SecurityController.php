<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SecurityController extends AbstractController
{
    /**
     * @Route("/security", name="security")
     */
    public function index(Request $request, EntityManagerInterface $manager,SessionInterface $session): Response
    {
	$vs=$session->get('userid');

            if($vs == 0){
                return $this->render('mon/index.html.twig', [
                    'controller_name' => 'page de Login',
                ]);
            }
            else{
                $utilisateur = $manager ->getRepository(utilisateurs::class)->findOneBy(array('id' => $vs));
        return $this->render('security/index.html.twig', [
            'controller_name' => 'SecurityController',
        ]);
    }
}


   /**
    * @Route("/security", name="security")
    */

    public function login(Request $request, EntityManagerInterface $manager,SessionInterface $session): Response
    {
        
        return $this->redirectToRoute('Mon_formulaire_DS');
            'controller_name' => 'SecurityController',

        }
    }

