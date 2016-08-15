<?php

namespace Space48\NewRelic\Observer;
use Magento\Framework\Event\ObserverInterface;

class DisableNewRelic implements ObserverInterface
{
    /**
     * Disables New Relic if the extension is loaded
     *
     * @param \Magento\Framework\Event\Observer $observer // Observer
     *
     * @return \Space48\NewRelic\Observer\DisableNewRelic;
     */
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        if (extension_loaded('newrelic')) {
            newrelic_disable_autorum();
        }
        return $this;
    }
}
