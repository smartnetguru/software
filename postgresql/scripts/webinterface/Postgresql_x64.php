<?php

/**
 * WPИ-XM Server Stack
 * Copyright © 2010 - 2016 Jens A. Koch <jakoch@web.de>
 * http://wpn-xm.org/
 *
 * This source file is subject to the terms of the MIT license.
 * For full copyright and license information, view the bundled LICENSE file.
 */

namespace WPNXM\Webinterface\Software;

/**
 * WPN-XM Webinterface - Class for PostgreSQL x64
 */
class Postgresql_x64 extends SoftwareBase
{
    public $name = 'PostgreSQL x64';

    public $registryName = 'postgresql-x64';

    public $installationFolder = /* WPNXM_ROOT . */ '\bin\postgresql';

    public $files = [
        '\bin\postgresql\postgresql-x64.exe',
    ];

    public function __invoke()
    {
        echo __CLASS__ . ' invoked';
    }
}