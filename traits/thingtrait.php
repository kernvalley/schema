<?php
namespace KernValley\Schema\Traits;

use \KernValley\Schema\Interfaces\{ThingInterface, ImageObjectInterface};
use \KernValley\Schema\Traits\{SchemaTrait};

trait ThingTrait
{
	private $_alternate_name = null;

	private $_description    = null;

	private $_identifier     = null;

	private $_image          = null;

	private $_name           = null;

	private $_same_as        = null;

	private $_url            = null;

	final public function getAlternateName():? string
	{
		return $this->_alternate_name;
	}

	final public function setAlternateName(?string $val): void
	{
		$this->_alternate_name = $val;
	}

	final public function getDescription():? string
	{
		return $this->_description;
	}

	final public function setDescription(?string $val): void
	{
		$this->_description = $val;
	}

	final public function getIdentifier():? string
	{
		return $this->_identifier;
	}

	final public function setIdentifier(?string $val): void
	{
		$this->_identifier = $val;
	}

	final public function getImage():? ImageObjectInterface
	{
		return $this->_image;
	}

	final public function setImage(?ImageObjectInterface $val): void
	{
		$this->_image = $val;
	}

	final public function getName():? string
	{
		return $this->_name;
	}

	final public function setName(?string $val): void
	{
		$this->_name = $val;
	}

	final public function getSameAs():? array
	{
		return $this->_same_as;
	}

	final public function setSameAs(string... $val): void
	{
		$this->_same_as = $val;
	}

	final public function getUrl():? string
	{
		return $this->_url;
	}

	final public function setUrl(?string $val): void
	{
		$this->_url = $val;
	}
}
