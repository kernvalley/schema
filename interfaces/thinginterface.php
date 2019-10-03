<?php
namespace KernValley\Schema\Interfaces;

use \PDO;

interface ThingInterface extends SchemaInterface
{
	public function getAlternateName():? string;

	public function setAlternateName(?string $val): void;

	public function getDescription():? string;

	public function setDescription(?string $val): void;

	public function getIdentifier():? string;

	public function setIdentifier(?string $val): void;

	public function getImage():? ImageObjectInterface;

	public function setImage(?ImageObjectInterface $val);

	public function getName():? string;

	public function setName(?string $val): void;

	public function getSameAs():? array;

	public function setSameAs(string... $val): void;

	public function getUrl():? string;

	public function setUrl(?string $val): void;
}
