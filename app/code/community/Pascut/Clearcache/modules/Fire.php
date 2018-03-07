<?php
class Pascut_Clearcache_Model_Fire
{
    public function clearCache(){

     /**
     * Flush all magento cache
     */
     Mage::app()->cleanCache();
     //if not working try: Mage::app()->getCacheInstance()->flush();
    }
}
