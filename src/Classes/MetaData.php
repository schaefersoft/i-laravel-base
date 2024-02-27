<?php

namespace Schaefersoft\Base\Classes;

class MetaData
{
    /**
     * @var string|null
     */
    public ?string $title = null;

    /**
     * @var string|null
     */
    public ?string $description = null;

    /**
     * @var string[]|null
     */
    public ?array $keywords = null;

    /**
     * The total url path to the file
     *
     * @var string|null
     */
    public ?string $image = null;


    /**
     * @return MetaData
     */
    public static function createFromEmpty(): MetaData
    {
        return new self;
    }

    /**
     * @param MetaData $toMerge
     * @return $this
     */
    public function merge(MetaData $toMerge): MetaData
    {
        $array = (array) $toMerge;

        foreach($array as $property => $value){
            if($value !== null){
                $this->{$property} = $value;
            }
        }

        return $this;
    }
}
