<?php
namespace KernValley\Schema\Interfaces;

interface RatingInterface extends IntangibleInterface
{
	public function getAuthor():? PersonInterface;

	public function setAuthor(?PersonInterface $val): void;

	public function getBestRating():? int;

	public function setBestRating(?int $val): void;

	public function getRatingValue():? int;

	public function setRatingValue(?int $val): void;

	public function getReviewAspect():? string;

	public function setReviewAspect(?string $val): void;

	public function getWorstRating():? int;

	public function setWorstRatng(?int $val): void;
}
