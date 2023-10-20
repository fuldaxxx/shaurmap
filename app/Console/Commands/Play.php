<?php

namespace App\Console\Commands;

use Facebook\WebDriver\Chrome\ChromeOptions;
use Facebook\WebDriver\Remote\DesiredCapabilities;
use Facebook\WebDriver\Remote\RemoteWebDriver;
use Illuminate\Console\Command;
use Illuminate\Support\Collection;
use Laravel\Dusk\Browser;
use Laravel\Dusk\Concerns\ProvidesBrowser;

class Play extends Command
{
    use ProvidesBrowser;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'play';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $name = 'tets';

        $filePath = sprintf('%s/%s.png', rtrim(__DIR__, '/'), $name);

        $directoryPath = dirname($filePath);

        if (! is_dir($directoryPath)) {
            mkdir($directoryPath, 0777, true);
        }

        dump($filePath);

        $b = $this->driver();

//        dd($b);
            $b->get('https://en.wikipedia.org/wiki/Selenium_(software)')
                ->takeScreenshot($filePath);
            $b->quit();
//        $this->browse(function (Browser $browser) {
//            dd(1);
//            $browser->visit('https://softmg.ru/bitrix/')
//                ->screenshot('softmg');
//        });
    }

    function getCallerName()
    {
        return 'play';
    }

    /**
     * Create the RemoteWebDriver instance.
     */
    protected function driver(): RemoteWebDriver
    {
//        return RemoteWebDriver::create('http://selenium:4444/', DesiredCapabilities::chrome());
        $options = (new ChromeOptions())->addArguments(
            [
                '--window-size=1920,1080',
                '--disable-gpu',
                '--headless=new',
            ]
        );


        return RemoteWebDriver::create(
            'http://selenium:4444/wd/hub',
            DesiredCapabilities::chrome()->setCapability(
                ChromeOptions::CAPABILITY, $options
            )
        );
    }

}
