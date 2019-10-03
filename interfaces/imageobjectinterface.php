<?php
namespace KernValley\Schema\Interfaces;

interface ImageObjectInterface extends MediaObjectInterface
{
	public function getCaption():? string;

	public function setCaption(?string $val): void;

	public function getExifData():? PropertyValueInterface;

	public function setExifData(? PropertyValueInterface $val): void;

	public function getRepresentativeOfPage(): bool;

	public function setRepresentativeOfPage(bool $val): void;

	public function getThumbnail():? ImageObjectInterface;

	public function setThumbnail(?ImageObjectInterface $val): void;
}
