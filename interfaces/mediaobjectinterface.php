<?php
namespace KernValley\Schema\Interfaces;

use \DateTimeInterface;

interface MediaObjectInterface extends CreativeWorkInterface
{
	public function getAssociatedArticle():? NewsArticleInterface;

	public function setAssociatedArticle(?NewsArticleInterface $val): void;

	public function getBitrate():? string;

	public function setBitrate(?string $val): void;

	public function getContentSize():? string;

	public function setContentSize(?string $val): void;

	public function getDuration():? DurationInterface;

	public function setDuration(?DurationInterface $val): void;

	public function getEmbedUrl():? string;

	public function setEmbedUrl(?string $val): void;

	public function getEncodesCreativeWork():? CreativeWorkInterface;

	public function setEncodesCreativeWork(?CreativeWorkInterface $val): void;

	public function getEncodingFormat(): void;

	public function setEncodingFormat(?string $val): void;

	public function getEndTime():? string;

	public function setEndTime(string $val): void;

	public function getHeight():? IntangibleInterface;

	public function setHeight(?IntangibleInterface $val): void;

	public function getProductionCompany():? OrganizationInterface;

	public function setProductionCompany(?OrganizationInterface $val): void;

	public function getRequiresSubscription(): bool;

	public function setRequiresSubscription(bool $val): void;

	public function getStartTime():? DateTimeInterface;

	public function setStartTime(DateTimeInterface $val): void;

	public function getUploadDate():? DateTimeInterface;

	public function setUploadDate(?DateTimeInterface $val): void;

	public function getWidth():? IntangibleInterface;

	public function setWidth(?IntangibleInterface $val): void;
}
