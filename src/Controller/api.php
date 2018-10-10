<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;


class api extends Controller
{
    /**
    * @Route("/api/insertUser")
    */
    public function insertUser()
    {

        $userNick = $_GET['user'];
        $pass = $_GET['pass'];

        $entityManager = $this->getDoctrine()->getManager();

        $user = new User();
        $user->setUserNick($userNick);
        $user->setPass($pass);

        // tell Doctrine you want to (eventually) save the Product (no queries yet)
        $entityManager->persist($user);

        // actually executes the queries (i.e. the INSERT query)
        $entityManager->flush();

        return new Response('Saved new product with id '.$user->getId());

    }

    /**
    * @Route("/api/getAllUsers")
    */
    public function getAllUsers()
    {
      $repository = $this->getDoctrine()->getRepository(User::class);
      $users = $repository->findAll();

      var_dump($users);die();

      return new Response('Saved new product with i');
    }
}
