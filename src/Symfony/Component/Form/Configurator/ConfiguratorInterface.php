<?php

namespace Symfony\Component\Form\Configurator;

/*
 * This file is part of the Symfony framework.
 *
 * (c) Fabien Potencier <fabien.potencier@symfony-project.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

interface ConfiguratorInterface
{
    public function initialize($object);

    public function getClass($fieldName);

    public function getOptions($fieldName);

    public function isRequired($fieldName);
}