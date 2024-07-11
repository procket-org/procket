<?php

namespace App;

class Bootstrap
{
    /**
     * Initialize application options
     *
     * @return void
     */
    public function initAppOptions(): void
    {
        pocket()->setClassOptions(include CONFIG_PATH . '/app.php');
    }
}