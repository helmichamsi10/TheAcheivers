<?php

namespace busBundle\Controller;

use busBundle\Entity\bus;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class busController extends Controller
{

    public function addBusAction(Request $request)
    {
        $data=$request->getContent();
        $bus=$this->get('jms_serializer')->deserialize($data,'busBundle\Entity\bus','json');
$em=$this->getDoctrine()->getManager();
$em->persist($bus);
$em->flush();
return new Response('bus ajouté avec succès');
}


    public function getAllBusAction()
    {
        $em=$this->getDoctrine()->getManager();
        $bus=$em->getRepository(bus::class)->findAll();
        $data=$this->get('jms_serializer')->serialize($bus,'json');
        $response=new Response($data);
        return $response;
    }


    public function deleteBusAction(Request $request)
    {
        $id=$request->get('id');
        $em=$this->getDoctrine()->getManager();
        $delete=$em->getRepository(bus::class)->find($id);
        $em->remove($delete);
        $em->flush();
        return new JsonResponse(["msg"=>"deleted with success"],200);
    }

}
