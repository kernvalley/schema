<?php
namespace KernValley\Schema\Interfaces;

interface ReviewInterface extends CreativeWorkInterface
{
	public function getItemReviewed():? ThingInterface;

	public function setItemReviewed(?ThingInterface $val): void;

	public function getReviewAspect():? string;

	public function setReviewAspect(?string $val): void;

	public function getReviewBody():? string;

	public function setReviewBody(?string $val): void;
}
