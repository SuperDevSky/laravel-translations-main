<?php

namespace Outhebox\LaravelTranslations\Console\Commands;

use Illuminate\Console\Command;
use Outhebox\LaravelTranslations\TranslationsManager;

class ExportTranslationsCommand extends Command
{
    protected $signature = 'translations:export';

    protected $description = 'Export all translations to the language directory';

    public function __construct(public  TranslationsManager $manager)
    {
        parent::__construct();
    }

    public function handle()
    {
        $this->info('Exporting translations...'.PHP_EOL);

        $this->manager->export();

        $this->info('Translations exported successfully!'.PHP_EOL);
    }
}
