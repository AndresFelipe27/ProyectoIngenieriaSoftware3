<?php

namespace Bufete\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Bufete\AplicacionBundle\Entity\ProcesoJudicial;

class DefaultController extends Controller
{
    public function indexAction($pagina)
    {
        
        if ($pagina=="home") {
            
            return $this->render('::index.html.twig', array());
        }else if($pagina=="quien"){          
            return $this->render('BufeteMainBundle:Default:quien.html.twig', array());
        }else if ($pagina=="asesorias") {
            return $this->render('::sidebarderecha.html.twig', array());
        }else if ($pagina=="noticias") {
            return $this->render('::sidebarderecha.html.twig', array());
        }else if ($pagina=="micaso"){
            return $this->render('BufeteMainBundle:Default:micaso.html.twig', array());
        }
        
        
        return $this->createNotFoundException("pagina no encontrada");
    }
    
    
    
    public function vercasoAction(Request $request)
    {
       
        $codigo=$request->request->get('codigo');
                
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BufeteAplicacionBundle:ProcesoJudicial')->findOneBycodigoConsulta($codigo);

        if (!$entity) {
            throw $this->createNotFoundException('no se encontro su caso');
        }

        

        return $this->render('BufeteMainBundle:Default:index.html.twig', array(
            'entity' => $entity ));
            
        
    }

}
