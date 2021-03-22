<?php
/**
 * Link to UEFA Euro schedule in top menu
 *
 * @author    Oleksandr Kovalchuk <oleksandr.kovalchuk@smile-ukraine.com>
 * @copyright 2021 Smile
 */
declare(strict_types=1);

namespace UefaEuro\InitialEvents\Block;

use Magento\Framework\View\Element\Template\Context;
use Magento\Framework\View\Element\Html\Link as HtmlLink;
use Magento\Framework\Escaper;

class TopLink extends HtmlLink
{
    protected Escaper $escaper;

    /**
     * TopLink constructor
     *
     * @param Context $context
     * @param Escaper $escaper
     */
    public function __construct(Context $context, Escaper $escaper)
    {
        parent::__construct($context);
        $this->escaper = $escaper;
    }

    /**
     * Render schedule link
     *
     * @return string
     */
    protected function _toHtml() : string
    {
        if (false != $this->getTemplate()) {
            return parent::_toHtml();
        }
        return '<li><a ' . $this->getLinkAttributes() . ' >' . $this->escaper->escapeHtml(__($this->getLabel())) . '</a></li>';
    }
}
