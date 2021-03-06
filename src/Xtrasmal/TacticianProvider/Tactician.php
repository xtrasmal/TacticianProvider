<?php namespace Xtrasmal\TacticianProvider;

use Illuminate\Config\Repository;
use Illuminate\Filesystem\Filesystem;

class Tactician
{
    /**
     * @var \Illuminate\Config\Repository
     */
    protected $config;

    /**
     * @var \Illuminate\Filesystem\Filesystem
     */
    protected $files;

    /**
     * Constructor method.
     *
     * @param \Illuminate\Config\Repository $config
     * @param \Illuminate\Filesystem\Filesystem $files
     */
    public function __construct(Repository $config, Filesystem $files)
    {

        $this->config = $config;
        $this->files  = $files;

    }

    /**
     * Register all commandbuses and such from the config.
     *
     * @return mixed
     */
    public function register()
    {
        // Get the buses and loop through them
        // for each bus do app::make or something
        $buses = $this->config->get('buses');


    }

}