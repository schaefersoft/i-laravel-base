<?php

namespace Schaefersoft\Base\Services;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Support\Facades\Schema;

class TypeScriptGeneratorService
{

    //todo: Add non models inside Custom
    //todo: Function for auto TAB in Typescript
    //todo: Add custom attributes like url for images

    public const TS_TYPE_NUMBER = ['integer', 'int'];
    public const TS_TYPE_STRING = ['string', 'datetime', 'date', 'timestamp'];
    public const TS_TYPE_BOOLEAN = ['bool', 'boolean'];

    public const TS_TYPE_RELATION_SINGLE = [HasOne::class, BelongsTo::class];
    public const TS_TYPE_RELATION_ARRAY = [HasMany::class, HasManyThrough::class, BelongsToMany::class];


    public string $outputPath;


    public function getOutputPath(): string
    {
        return $this->outputPath;
    }

    public function setOutputPath(string $outputPath): void
    {
        $this->outputPath = $outputPath;
    }


    /**
     * @throws \ReflectionException
     */
    public function generate(): void
    {
        $modelPath = app_path('Models') . '/*.php';
        $modelsList = collect(glob($modelPath))->map(fn ($file) => basename($file, '.php'))->toArray();


        foreach($modelsList as $modelName){
            $class = "App\\Models\\{$modelName}";

            /** @var Model $model */
            $model = new $class;

            //Model Information
            $columns = Schema::getColumnListing($model->getTable());
            $casts = $model->getCasts();
            $attributes = $model->getAttributes();
            $modelReflectionClass = new \ReflectionClass($class);


            //Start building
            $tsProps = [];

            foreach($columns as $column){
                if(array_key_exists($column, $casts)){
                    //todo: Check if string starts with instead of in_array
                    if(in_array($casts[$column], self::TS_TYPE_NUMBER)){
                        $tsProps[$column] = "number";
                    }
                    if(in_array($casts[$column], self::TS_TYPE_STRING)){
                        $tsProps[$column] = "string";
                    }
                    if(in_array($casts[$column], self::TS_TYPE_BOOLEAN)){
                        $tsProps[$column] = "boolean";
                    }
                } else {
                    $tsProps[$column] = "any";
                }
            }
        }
    }


    private function build(){

    }
}
