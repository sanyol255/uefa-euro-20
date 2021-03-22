<?php
/**
 * Index action for schedule page
 *
 * @author      Oleksandr Kovalchuk <oleksandr.kovalchuk@smile-ukraine.com
 * @copyright   2021 Smile
 */
declare(strict_types=1);

namespace UefaEuro\InitialEvents\Controller\Index;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\View\Result\Page;

/**
 * Class for Schedule page
 */
class Index implements HttpGetActionInterface
{
    /** @var PageFactory */
    protected PageFactory $pageFactory;

    /**
     * Index constructor
     *
     * @param PageFactory $pageFactory
     */
    public function __construct(PageFactory $pageFactory)
    {
        $this->pageFactory = $pageFactory;
    }

    /**
     * Rendering Uefa Euro schedule page
     *
     * @return Page
     */
    public function execute() : Page
    {
        return $this->pageFactory->create();
    }
}
