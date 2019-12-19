<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

/**
 * Class AdminAccountController
 * @package App\Controller\Admin
 * @Route("/compo-admin/account")
 */
class AdminAccountController extends AbstractController
{
    /**
     * @Route("/connexion", name="admin_connexion")
     * @return Response
     */
    public function adminConnec(AuthenticationUtils $utils)
    {
        $error = $utils->getLastAuthenticationError();
        $username = $utils->getLastUsername();

        return $this->render('admin/account/adminLogin.html.twig', [
            'hasError' => $error !== null,
            'username' => $username
        ]);
    }

    /**
     * @Route("/deconnexion", name="admin_deconnexion")
     */
    public function adminDeconnect()
    {

    }
}
