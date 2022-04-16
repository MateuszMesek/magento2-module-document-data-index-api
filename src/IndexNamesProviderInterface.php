<?php declare(strict_types=1);

namespace MateuszMesek\DocumentDataIndexIndexerApi;

use Traversable;

interface IndexNamesProviderInterface
{
    /**
     * @return \Traversable
     */
    public function getIndexNames(): Traversable;
}
