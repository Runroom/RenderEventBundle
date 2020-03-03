<?php

namespace Runroom\RenderEventBundle\Tests\Unit;

use PHPUnit\Framework\TestCase;
use Runroom\RenderEventBundle\ViewModel\MetaInformationViewModel;
use Runroom\RenderEventBundle\ViewModel\PageViewModel;

class PageViewModelTest extends TestCase
{
    protected $viewModel;

    protected function setUp(): void
    {
        $this->viewModel = new PageViewModel();
    }

    /**
     * @test
     */
    public function itSetMetas()
    {
        $metaInformation = new MetaInformationViewModel();

        $this->viewModel->setMetas($metaInformation);

        $this->assertSame($metaInformation, $this->viewModel->getMetas());
    }

    /**
     * @test
     */
    public function itSetContent()
    {
        $this->viewModel->setContent('content');

        $this->assertSame('content', $this->viewModel->getContent());
    }

    /**
     * @test
     */
    public function itSetAlternateLinks()
    {
        $this->viewModel->setAlternateLinks(['alternate_links']);

        $this->assertSame(['alternate_links'], $this->viewModel->getAlternateLinks());
    }
}
