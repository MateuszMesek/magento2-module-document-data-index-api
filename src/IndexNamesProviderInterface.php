<?php declare(strict_types=1);

namespace MateuszMesek\DocumentDataIndexerApi;

use Traversable;

interface IndexNamesProviderInterface
{
    /**
     * @return \Traversable
     */
    public function getIndexNames(): Traversable;
}
