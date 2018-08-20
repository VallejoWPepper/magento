<?php
     
    namespace Pepper\Test\Model;
 
    class Cart
    {
        public function aroundAddProduct(
            \Magento\Checkout\Model\Cart $subject,
            \Closure $proceed,
            $productInfo,
            $requestInfo = null
        ) {
            $requestInfo['qty'] = 2; // setting quantity to 2
            $result = $proceed($productInfo, $requestInfo);
            // change result here
            return $result;
        }
    }
