<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sylius\Bundle\FlowBundle\Process;

use Sylius\Bundle\FlowBundle\Process\Builder\ProcessBuilderInterface;
use Sylius\Bundle\FlowBundle\Process\Step\StepInterface;

/**
 * Interface for setup object.
 *
 * @author Paweł Jędrzejewski <pjedrzejewski@diweb.pl>
 */
interface ProcessInterface
{
    /**
     * Builds the whole process.
     * Assigns proper steps.
     *
     * @param ProcessBuilderInterface $builder
     */
    function build(ProcessBuilderInterface $builder, array $options);
}