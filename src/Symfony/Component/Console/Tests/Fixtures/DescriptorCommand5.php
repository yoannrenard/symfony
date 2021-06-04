<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Console\Tests\Fixtures;

use Symfony\Component\Console\Command\Command;

class DescriptorCommand5 extends Command
{
    protected function configure()
    {
        $this
            ->setName('descriptor:command5')
            ->setAliases(['alias3', 'alias4'])
            ->setDescription('Command 5 description')
            ->setDeprecated()
        ;
    }
}
