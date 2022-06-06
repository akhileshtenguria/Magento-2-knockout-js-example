<?php

namespace Cloudways\Knockoutjs\Block;

class Account extends \Magento\Framework\View\Element\Template
{
    public function getWelcomeText()
    {
        return 'Hello World';
    }

      public function execute()
    {   
       die("tests"); 
       return 'Hello World222';
    }
}