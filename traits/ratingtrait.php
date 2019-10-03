<?php
namespace KernValley\Schema\Traits;
use \KernValley\Schema\Interfaces\{PersonInterface};
trait RatingTrait
{
	private $_author = null;

	private $_best_rating = 5;

	private $_rating_value = null;

	private $_review_aspect = null;

	private $_worst_rating = 0;

	public function getAuthor():? PersonInterface
	{
		return $this->_author;
	}

	public function setAuthor(?PersonInterface $val): void
	{
		$this->_author = $val;
	}

	public function getBestRating():? int
	{
		return $this->_best_rating;
	}

	public function setBestRating(?int $val): void
	{
		$this->_best_rating = $val;
	}

	public function getRatingValue():? int
	{
		return $this->_rating_value;
	}

	public function setRatingValue(?int $val): void
	{
		$this->_rating_value = $val;
	}

	public function getReviewAspect():? string
	{
		return $this->_review_aspect;
	}

	public function setReviewAspect(?string $val): void
	{
		$this->_review_aspect = $val;
	}

	public function getWorstRating():? int
	{
		return $this->_worst_rating;
	}

	public function setWorstRatng(?int $val): void
	{
		$this->_worst_Rating = $val;
	}
}
