<?php

namespace WCSCoavBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use WCSCoavBundle\Entity\Reservation;
use WCSCoavBundle\Entity\Flight;
use WCSCoavBundle\Entity\PlaneModel;

class ListingController extends Controller
{
    /**
     * List one reservation with one flight and one planemodel with few ID
     *
     * @Route("/listing/{reservation_id}/flight/{flight_id}/planemodel/{planemodel_id}", name="listing_index", requirements={"reservation_id": "\d+"})
     * @Method("GET")
     * @ParamConverter("reservation", options={"mapping": {"reservation_id": "id"}})
     * @ParamConverter("flight", options={"mapping": {"flight_id": "id"}})
     * @ParamConverter("planemodel", options={"mapping": {"planemodel_id": "id"}})
     */
    public function indexAction(Reservation $reservation, Flight $flight, PlaneModel $planemodel)
    {
        return $this->render('listing/index.html.twig', [
            'reservation' => $reservation,
            'flight' => $flight,
            'planemodel' => $planemodel
        ]);
    }
}
