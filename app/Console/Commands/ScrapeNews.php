<?php

namespace App\Console\Commands;

use App\Exceptions\ScrapeCommandError;
use Illuminate\Console\Command;

use App\Services\Scraper\WebScraper;
use App\Services\Scraper\WordPress;
use App\Sources;

class ScrapeNews extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'scrape:news {--days-ago=30}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Searches and scrapes news items for a given source';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $sources = Sources::where('active', 1)->get();
        foreach ($sources as $source) {
            $wordpressApiUrl = $source->wordpress_api_url;
            $sourceId = $source->id;
            try {
                $daysAgo = \intval($this->option('days-ago'));
                if ($daysAgo < 0)
                    throw new ScrapeCommandError('days-ago param can not be lower than zero.');

                $scraper = new WordPress($wordpressApiUrl, $sourceId);

                $handler = new WebScraper($scraper, $daysAgo);


                $handler->run();
            } catch (ScrapeCommandError $e) {
                echo "ERROR: {$e->getMessage()}\n";
            }
        }
    }
}
