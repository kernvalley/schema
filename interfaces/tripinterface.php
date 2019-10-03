<?php
namespace KernValley\Schema\Interfaces;
use \DateTimeInterface;

interface TripInterface extends IntangibleInterface
{
	public function getArrivalTime():? DateTimeInterface;

	public function setArrivalTime(?DateTimeInterface $val): void;

	public function getDepartureTime():? DateTimeInterface;

	public function setDepartureTime(?DateTimeInterface $val): void;

	public function getOffers():? array;

	public function setOffers(OfferInterface ...$val): void;

	public function setPartOfTrip(?TripInterface $val): void;

	public function getProvider():? OrganizationInterface;

	public function setProvider(?OrganizationInterface $val): void;

	public function getSubTrip():? array;
}
