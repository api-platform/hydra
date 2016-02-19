<?php

/*
 * This file is part of the API Platform Builder package.
 *
 * (c) Kévin Dunglas <dunglas@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace ApiPlatform\Builder\Hydra;

/**
 * Hydra's ApiDocumentation builder.
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
interface ApiDocumentationBuilderInterface
{
    /**
     * Gets the Hydra API documentation.
     *
     * @return array
     */
    public function getApiDocumentation();
}
