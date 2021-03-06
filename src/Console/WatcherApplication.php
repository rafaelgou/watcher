<?php

namespace Stunt\Watcher\Console;

use Symfony\Component\Console\Application;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputDefinition;

class WatcherApplication extends Application
{
    /**
     * @inheritDoc
     */
    public function __construct($version)
    {
        parent::__construct('watcher', $version);
    }

    /**
     * @inheritDoc
     */
    protected function getCommandName(InputInterface $input)
    {
        return 'watcher';
    }

    /**
     * @inheritDoc
     */
    protected function getDefaultCommands()
    {
        $defaultCommands = parent::getDefaultCommands();
        $defaultCommands[] = new WatcherCommand;

        return $defaultCommands;
    }

    /**
     * @inheritDoc
     */
    public function getDefinition()
    {
        return new InputDefinition([
            new InputOption('--help', '-h', InputOption::VALUE_NONE, 'Display this help message.'),
            new InputOption('--version', '-V', InputOption::VALUE_NONE, 'Display this behat version.'),
        ]);
    }
}
