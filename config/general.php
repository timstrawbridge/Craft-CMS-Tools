<?php

/**
*   general config files
*   add these items to the GeneralConfig array  
*/

return GeneralConfig::create()
    ->cpTrigger('admin')            
    ->defaultTokenDuration(604800)          // one week
    ->previewTokenDuration(604800)          // one week
;

 