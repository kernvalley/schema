<?php
namespace KernValley\Schema;
use \KernValley\Schema\Interfaces\{RatingInterface};
use \KernValley\Schema\Traits\{RatingTrait};
class Rating extends Intangible implements RatingInterface
{
	use RatingTrait;

	protected const PROPS = [
		'author',
		'bestRating',
		'ratingValue',
		'reviewAspect',
		'worstRating',
	];
}
