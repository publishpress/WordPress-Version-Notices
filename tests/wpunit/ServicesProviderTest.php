<?php

class ServicesProviderTest extends \Codeception\TestCase\WPTestCase
{
    /**
     * @var \WpunitTester
     */
    protected $tester;

    protected $container;

    public function setUp(): void
    {
        // Before...
        parent::setUp();

        $container       = new Pimple\Container();
        $serviceProvider = new \PPProAds\ServicesProvider();
        $container->register($serviceProvider);

        $this->container = $container;
    }

    public function tearDown(): void
    {
        // Your tear down methods here.

        // Then...
        parent::tearDown();
    }

    public function test_module_top_banner_is_defined()
    {
        $this->assertArrayHasKey('module_top_banner', $this->container,
            'Module TopBanner is not found in the container');

        $this->assertIsObject($this->container['module_top_banner'], 'TopBanner module is not an object');
    }

    public function test_template_loader_is_defined()
    {
        $this->assertArrayHasKey('template_loader', $this->container,
            'Template Loader is not found in the container');

        $this->assertIsObject($this->container['template_loader'], 'Template Loader is not an object');
    }
}