<?php

namespace App\Http\Ussd;

use Sparors\Ussd\State;

class MaintenanceMode extends State
{
	protected $action = self::PROMPT; # show prompt and terminate process

    protected function beforeRendering(): void
    {
        $this->menu->text('Service is unavailable');
    }

    protected function afterRendering(string $argument): void
    {
        //
    }
}