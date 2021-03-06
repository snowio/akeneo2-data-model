<?php
declare(strict_types=1);
namespace SnowIO\Akeneo2DataModel;

final class LocalizedString
{
    public static function of(string $value, string $locale): self
    {
        $localizedString = new self;
        $localizedString->value = $value;
        $localizedString->locale = $locale;
        return $localizedString;
    }

    public function getValue(): string
    {
        return $this->value;
    }

    public function getLocale(): string
    {
        return $this->locale;
    }

    public function equals($object): bool
    {
        return $object instanceof LocalizedString
            && $this->value === $object->value
            && $this->locale === $object->locale;
    }

    private $value;
    private $locale;

    private function __construct()
    {

    }
}
