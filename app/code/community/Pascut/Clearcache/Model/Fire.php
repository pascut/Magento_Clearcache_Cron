<?php
class Pascut_Clearcache_Model_Fire
{
    public function clearCache(){

     /**
     * Flush all magento cache
     */
     Mage::app()->cleanCache();
     Mage::app()->getCacheInstance()->flush();
     //  Mage::app()->getCacheInstance()->cleanType('block_html');
     Mage::Log(sprintf("Pascut Cron - Cleared Cache"),null);
    }
}
