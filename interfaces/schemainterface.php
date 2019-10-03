<?php
namespace KernValley\Schema\Interfaces;
use \PDO;
use \JSONSerializable;

interface SchemaInterface extends JSONSerializable
{
	public function save(?PDO $pdo = null): bool;

	public static function create(): ThingInterface;

	public static function createFromArray(array $data):? ThingInterface;

	public static function generateUuid(): string;
}
