<?php

namespace Schaefersoft\Base\Commands;

use Schaefersoft\Base\Services\TypeScriptGeneratorService;
use Illuminate\Console\Command;

class BaseTypeScriptGeneratorCommand extends Command
{
    protected $signature = 'base:type-script-generator';

    protected $description = 'Create Model Type Script Interfaces';

    public function handle(TypeScriptGeneratorService $typeScriptGeneratorService): void
    {
        $typeScriptGeneratorService->generate();
    }
}
