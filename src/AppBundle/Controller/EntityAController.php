<?php

namespace AppBundle\Controller;

use AppBundle\Datatables\EntityADatatable;

use Sg\DatatablesBundle\Datatable\DatatableInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class EntityAController
 *
 * @Route("entity")
 *
 * @package AppBundle\Controller
 */
class EntityAController extends Controller
{
    /**
     * Lists entitiesA.
     *
     * @param Request $request
     *
     * @Route("/", name="entity_index")
     * @Method("GET")
     *
     * @return Response
     */
    public function indexAction(Request $request)
    {
        $isAjax = $request->isXmlHttpRequest();

        /** @var DatatableInterface $datatable */
        $datatable = $this->get('sg_datatables.factory')->create(EntityADatatable::class);

        if ($isAjax) {
            return $this
                ->get('sg_datatables.response')
                ->setDatatable($datatable)
                ->getResponse();
        }

        return $this->render('entity/index.html.twig', array(
            'datatable' => $datatable,
        ));
    }
}
