<?php

namespace AppBundle\Controller ;



use AppBundle\AppBundle;
use AppBundle\Entity\Sheet;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\BrowserKit\Request;
use Symfony\Component\HttpFoundation\Response;

class SheetController extends Controller
{



    public function getListSheetAction() {



        //$sheet =new Sheet();

        //$sheet->setNom("Rahali");
        //$sheet->setMail("rahali.dali@gmail.com");
        //$sheet->setPrenom("Dali");
        //$sheet->setTel("22780360");

        //$em->persist($sheet);
        //$em->flush();






        return $this->render('Sheet/sheet_list.html.twig');








     }
    public function getSheetAction($id) {
        //var_dump($request.$this->getParameter(id));


        $em = $this->getDoctrine()->getManager();

        $repository= $em->getRepository("AppBundle:Sheet");

        $personne=$repository->getPersonneByPrenon();

        //var_dump($personne);

        return $this->render('Sheet/sheet.html.twig', array("personne"=> $personne));
    }
}