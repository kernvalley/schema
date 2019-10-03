<?php
namespace KernValley\Schema\Traits;

use \KernValley\Schema\Interfaces\{ThingInterface, ImageObjectInterface, SchemaInterface};

use \PDO;
use \PDOStatement;
use \Throwable;
use \InvalidArgumentException;

trait SchemaTrait
{
	final public function jsonSerialize(): array
	{
		$props = static::getProps();
		$data = [
			'@context' => static::CONTEXT,
			'@type'    => $this->getType(),
		];

		foreach($props as $prop) {
			$val = $this->get($prop);

			if (isset($val)) {
				$data[$prop] = $val;
			}
		}

		return $data;
	}

	final public function __toString(): string
	{
		return json_encode($this);
	}

	final public function __debugInfo(): array
	{
		return array_reduce(static::getProps(), function(array $data, string $key): array
		{
			$data[$key] = $this->get($key);
			return $data;
		}, []);
	}

	final public function __get(string $name)
	{
		$method = 'get' . ucfirst($name);
		if (method_exists($this, $method)) {
			return call_user_func([$this, $method]);
		}
	}

	final public function __set(string $name, $val): void
	{
		$method = 'set' . ucfirst($name);
		if (method_exists($this, $method)) {
			call_user_func([$this, $method], $val);
		}
	}

	final public function __call(string $name, array $vals): SchemaInterface
	{
		$method = 'set' . ucfirst($name);
		if (method_exists($this, $method)) {
			call_user_func_array([$this, $method], $vals);
			return $this;
		} else {
			throw new InvalidArgumentException(sprintf('Undefined property: "%s"', $name));
		}
	}

	final protected static function _hasParentProps(): bool
	{
			$parent = @get_parent_class(static::class);
			return $parent !== '' and method_exists($parent, 'getProps');
	}

	final static public function getProps():? array
	{
		$parent = static::_getParentProps();
		$props = defined(static::class . '::' . 'PROPS') ? static::PROPS : [];
		return array_merge($props, $parent);
	}

	final public static function generateUuid(): string
	{
		return sprintf('%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
			mt_rand(0, 0xffff), mt_rand(0, 0xffff),
			mt_rand(0, 0xffff),
			mt_rand(0, 0x0fff) | 0x4000,
			mt_rand(0, 0x3fff) | 0x8000,
			mt_rand(0, 0xffff), mt_rand(0, 0xffff), mt_rand(0, 0xffff)
		);
	}

	final public function get(string $name)
	{
		$method = 'get' . ucfirst($name);
		if (method_exists($this, $method)) {
			return \call_user_func([$this, $method]);
		} else {
			return null;
		}
	}

	final public static function getType(): string
	{
		$parts = explode('\\', static::class);
		return end($parts);
	}

	final public static function getSchemaUrl(): string
	{
		return sprintf('%s/%s', rtrim(static::CONTEXT, '/'), static::getType());
	}

	final public function setDataFromArray(array $data): bool
	{
		foreach ($data as $prop => $value) {
			if (is_array($value)) {
				//
			} else {
				$this->{$prop} = $value;
			}
		}
		return true;
	}

	final public function save(?PDO $pdo = null): bool
	{
		if ($this->getIdentifier() === null) {
			$this->setIdentifier(static::generateUuid());
		}
		if (is_null($pdo)) {
			return false;
		} else {
			return false;
		}
	}

	final public static function createFromArray(array $data):? ThingInterface
	{
		$obj = static::create();
		$obj->setDataFromArray($data);
		return $obj;
	}

	final public static function create(): ThingInterface
	{
		$class = static::class;
		return new $class;
	}

	final protected static function _getParentProps(): array
	{
		if (static::_hasParentProps()) {
			return call_user_func([get_parent_class(static::class), 'getProps']) ?? [];
		} else {
			return [];
		}
	}
}
