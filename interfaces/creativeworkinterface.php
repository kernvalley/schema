<?php
namespace KernValley\Schema\Interfaces;

use \DateTimeInterface;

interface CreativeWorkInterface extends ThingInterface
{
	public function getAbout():? ThingInterface;

	public function setAbout(?ThingInterface $val): void;

	public function getAggregateRating():? AggregateRatingInterface;

	public function setAggregateRating(?AggrigateRatingInterface $val): void;

	public function getAlternativeHeadline():? string;

	public function setAlternativeHeadline(?string $val): void;

	public function getAssociatedMedia():? MediaObjectInterface;

	public function setAssociatedMedia(?MediaObjectInterface $val): void;

	public function getAudience():? AudienceInterface;

	public function setAudience(?AudienceInterface $val): void;

	public function getAudio():? AudioObjectInterface;

	public function setAudio(?AudioObjectInterface $val): void;

	public function getAuthor():? PersonInterface;

	public function setAuthor(?PersonInterface $val): void;

	public function getAward():? array;

	public function setAward(string ...$val): void;

	public function getCitation():? array;

	public function setCitation(CreativeWorkInterface ...$val): void;

	public function getComment():? array;

	public function setComment(CommentInterface ...$val): void;

	public function getCommentCount(): int;

	public function getContentLocation():? PlaceInterface;

	public function setContentLocation(?PlaceInterface $val): void;

	public function getCopyrightHolder():? PersonInterface;

	public function setCopyrightHolder(?PersonInterface $val): void;

	public function getCopyrightYear():? int;

	public function setCopyrightYear(?int $val): void;

	public function getCreator():? PersonInterface;

	public function setCreator(?PersonInterface $val): void;

	public function getDateCreated():? DateTimeInterface;

	public function setDateCreated(?DateTimeInterface $val): void;

	public function getDateModified():? DateTimeInterface;

	public function setDateModified(?DateTimeInterface $val): void;

	public function getDatePublished():? DateTimeInterface;

	public function setDatePublished(?DateTimeInterface $val): void;

	public function getDiscussionUrl():? string;

	public function setDiscussionUrl(?string $val): void;

	public function getEditor():? PersonInterface;

	public function setEditor(?PersonInterface $val): void;

	public function getEncoding():? MediaObjectInterface;

	public function setEncoding(?MediaObjectInterface $val): void;

	public function getEncodingFormat():? string;

	public function setEncodingFormat(?string $val): void;

	public function getExampleOfWork():? CreativeWorkInterface;

	public function setExampleOfWork(?CreativeWorkInterface $val): void;

	public function getExpires():? DateTimeInterface;

	public function setExpires(?DateTimeInterface $val): void;

	public function getGenre():? string;

	public function setGenre(?string $val): void;

	public function getHeadline():? string;

	public function setHeadline(?string $val): void;

	public function getInLanguage():? LanguageInterface;

	public function setInLanguage(?LanguageInterface $val): void;

	public function getIsAccessibleForFree(): bool;

	public function setIsAccessibleForFree(bool $val): void;

	public function getIsFamilyFriendly(): bool;

	public function setIsFamilyFriendly(bool $val): void;

	public function getKeywords():? string;

	public function setKeywords(string $val): void;

	public function getLicense():? string;

	public function setLicense(?string $val): void;

	public function getLocationCreated():?PlaceInterface;

	public function setLocationCreated(?PlaceInterface $val): void;

	public function getMainEntity():? ThingInterface;

	public function setMainEntity(?ThingInterface $val): void;

	public function getMaterial():? array;

	public function setMaterial(ProductInterface ...$val): void;

	public function getOffers():? array;

	public function setOffers(OfferInterface ...$val): void;

	public function getPosition():? int;

	public function setPosition(int $val): void;

	public function getProducer():? PersonInterface;

	public function setProducer(?PersonInterface $val): void;

	public function getProvider():? OrganizationInterface;

	public function setProvider(?OrganizationInterface $val): void;

	public function getPublication():? PublicationEventInterface;

	public function setPublication(PublicationEventInterface $val): void;

	public function getPublisher():? OrganizationInterface;

	public function setPublisher(?OrganizationInterface $val): void;

	public function getRecordedAt():? EventInterface;

	public function setRecordedAt(?EventInterface $val): void;

	public function getReleasedEvent():? PublicationEventInterface;

	public function setReleasedEvent(?PublicationEventInterface $val): void;

	public function getReview():? array;

	public function setReview(ReviewInterface ...$val): void;

	public function getSponsor():? array;

	public function setSponsor(OrganizationInterface ...$val): void;

	public function getText():? string;

	public function setText(?string $val): void;

	public function getThumbnailUrl():? string;

	public function setThumbnailUrl(?string $val): void;

	public function getTimeRequied():? DurationInterface;

	public function setTimeRequired(?DurationInterface $val): void;

	public function getTranslator():? PersonInterface;

	public function setTranslator(?PersonInterface $val): void;

	public function getTypicalAgeRange():? string;

	public function setTypicalAgeRange(string $val): void;

	public function getVersion():? string;

	public function setVersion(?string $val): void;

	public function getVideo():? VideoInterface;

	public function setVideo(VideoInterface $val): void;
}
