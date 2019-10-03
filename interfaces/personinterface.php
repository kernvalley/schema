<?php
namespace KernValley\Schema\Interfaces;

use \DateTimeInterface;

interface PersonInterface extends ThingInterface
{
	public function getAdditionalName():? string;

	public function setAdditionalName(?string $val): void;

	public function getAddressName():? PostalAddressInterface;

	public function setAddressName(?PostalAddressInterface $val): void;

	public function getBirthDate():? DateTimeInterface;

	public function setBirthDate(?DateTimeInterface $val): void;

	public function getEmail():? string;

	public function setEmail(?string $val): void;

	public function getFaxNumber():? string;

	public function setFaxNumber(?string $val): void;

	public function getGender():? GenderInterface;

	public function setGender(?GenderInterface $val): void;

	public function getGivenName():? string;

	public function setGivenName(?string $val): void;

	public function getHomeAddress():? PlaceInterface;

	public function setHomeAddress(?PlaceInterface $val): void;

	public function getHonorificPrefix():? string;

	public function setHonorificSuffix(?string $val): void;

	public function getJobTitle():? string;

	public function setJobTitle(?string $val): void;

	public function getTelephone():? string;

	public function setTelephone(?string $val): void;

	public function getWorkLocation():? PlaceInterface;

	public function setWorkLocation(?PlaceInterface $val): void;

	public function getWorksFor():? OrganizationInterface;

	public function setWorksFor(?OrganizationInterface $val): void;
}
