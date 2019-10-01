# [KernValley.us](https://kernvalley.us) Schema
[![Actions Status](https://github.com/kernvalley/schema/workflows/PHP%20Lint/badge.svg)](https://github.com/kernvalley/schema/actions)
- - -
> A `PHP` & `MySQL` implementation of [structured data](https://schema.org)

## See
- [Person](https://schema.org/Person)
- [Event](https://schema.org/Event)
- [LocalBusiness](https://schema.org/LocalBusiness)
- [Trip](https://schema.org/Trip)
- [ImageObject](https://schema.org/ImageObject)

```php
<?php
use \KernValley\Schema\{Person, ImageObject, PostalAddress};
$person = new Person();
$image = new ImageObject();
$address = new PostalAddress();

$image->setUrl('https://example.com/image/jpg');
$image->setHeight(480);
$image->setWidth(640);
$image->setEncodingFormat(ImageObject::JEPG);

$address->setStreetAddress('123 Some St.');
$address->setAddressLocality('City');
$address->setAddressRegion('CA');
$address->setPostalCode(90210);
$address->setAddressCountry(PostalAddress::USA);

$person->setGivenName('First');
$person->setFamilyName('Last');
$person->setImage($image);
$person->setAddress($address);

header('Content-Type: ' . Person::CONTENT_TYPE);
echo json_encode($person);
```

