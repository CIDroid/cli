<?php
namespace CIDroid\CLI;
use CLIFramework\Application;

class Console extends Application
{
    public function init()
    {
        parent::init();
        $this->command('compile');
    }

}

