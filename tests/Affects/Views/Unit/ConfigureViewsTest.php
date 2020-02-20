<?php

namespace Tenancy\Tests\Affects\Views\Feature;

use Illuminate\Contracts\View\Factory;
use Tenancy\Affects\Views\Events\ConfigureViews;
use Tenancy\Affects\Views\Provider;
use Tenancy\Tests\Affects\AffectsEventUnitTestCase;

class ConfigureViewsTest extends AffectsEventUnitTestCase
{
    protected $additionalProviders = [Provider::class];

    protected $event = ConfigureViews::class;

    protected $eventContains = [
        'view' => Factory::class
    ];
}
