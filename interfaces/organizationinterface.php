<?php
namespace KernValley\Schema\Interfaces;

interface OrganizationInterface extends ThingInterface
{
	public function getAddress():? PostalAddressInterface;

	public function setAddress(?PostalAddressInterface $val): void;

	public function getAggregateRating():? AggregateRatingInterface;

	public function setAggregateRating(?AggregateRatingInterface $val): void;
}
