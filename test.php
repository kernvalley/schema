<?php
namespace KernValley\Schema;

use \KernValley\Schema\{Thing, Intangible, Rating};
use \Error;

function autoloader(string $class): void
{
	$path = str_replace([
		strtolower(__NAMESPACE__) . '\\',
		'\\',
	], [
		null,
		DIRECTORY_SEPARATOR,
	], strtolower($class));

	$exts = explode(',', spl_autoload_extensions());
	$include = explode(PATH_SEPARATOR, get_include_path());
	$found = false;

	foreach ($exts as $ext) {
		foreach($include as $dir) {
			$dir = rtrim($dir, DIRECTORY_SEPARATOR) . DIRECTORY_SEPARATOR;

			if (file_exists("{$dir}{$path}{$ext}")) {
				require "{$dir}{$path}{$ext}";
				$found = true;
				break;
			}

		}
	}

	if (! $found) {
		throw new Error(sprintf('Class \'%s\' not found', $class));
	}
}

// set_include_path(dirname(__DIR__, 2));
// spl_autoload_register('spl_autoload');
// require './rating.php';
set_include_path(__DIR__);
spl_autoload_extensions('.php');
spl_autoload_register(__NAMESPACE__ . '\\autoloader');

// new Thing();
$thing = Rating::createFromArray(['alternateName' => 'altername name']);
$thing->name = 'foo';
$thing->description('Description')
	->url('https://example.com')
	->sameAs('https://facebook.com', 'https://twitter.com');
// $thing->setDescription('Description');
// $thing->setUrl('https://kernvalley.us');
$thing->setRatingValue(4);

header('Content-Type: ' . Thing::CONTENT_TYPE);
echo $thing;
