<?php

namespace Arseno25\LaravelAiAssistant;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Arseno25\LaravelAiAssistant\Commands\LaravelAiAssistantCommand;

class LaravelAiAssistantServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-ai-assistant')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel_ai_assistant_table')
            ->hasCommand(LaravelAiAssistantCommand::class);
    }
}
