<?php

namespace ZFBrasil\Proxposer\Api\Repository\V1\InputFilter;

use Zend\InputFilter\InputFilter;

class Repository extends InputFilter
{
    public function init()
    {
        $this->add([
            'name' => 'type'
        ]);

        $this->add([
            'name' => 'path'
        ]);
    }
} 