<?php
namespace KernValley\Schema\Abstracts;

use \KernValley\Schema\Interfaces\{ThingInterface, ImageObjectInterface};
use \KernValley\Schema\Traits\{SchemaTrait};
use \PDO;
use \PDOStatement;

abstract class Schema implements ThingInterface
{
	use SchemaTrait;
	private const PROPS = [];

	const CONTEXT      = 'https://schema.org';

	const TYPE         = 'Thing';

	const CONTENT_TYPE = 'application/ld+json';


	abstract protected function _getDeleteStatement(PDO $pdo):? PDOStatement;

	abstract protected function _getInsertStamtement(PDO $pdo):? PDOStatement;

	abstract protected function _getSelectStatement(PDO $pdo):? PDOStatement;

	abstract protected function _getUpdateStatement(PDO $pdo):? PDOStatement;
}
