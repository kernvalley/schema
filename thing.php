<?php
namespace KernValley\Schema;

use \KernValley\Schema\Interfaces\{ThingInterface, ImageObjectInterface};
use \KernValley\Schema\Traits\{ThingTrait};
use \KernValley\Schema\Abstracts\{Schema};
use \PDO;
use \PDOStatement;

/**
 * @see https://schema.org/Thing
 */
class Thing extends Schema implements ThingInterface
{
	use ThingTrait;

	protected const PROPS = [
		'name',
		'description',
		'identifier',
		'image',
		'url',
		'alternateName',
		'mainEntityOfPage',
		'sameAs',
	];

	protected function _getDeleteStatement(PDO $pdo):? PDOStatement
	{
		//
	}

	protected function _getInsertStamtement(PDO $pdo):? PDOStatement
	{
		//
	}

	protected function _getSelectStatement(PDO $pdo):? PDOStatement
	{
		//
	}

	protected function _getUpdateStatement(PDO $pdo):? PDOStatement
	{
		//
	}
}
