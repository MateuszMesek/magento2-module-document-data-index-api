<?php declare(strict_types=1);

namespace MateuszMesek\DocumentDataIndexApi;

use Traversable;

interface IndexNamesProviderInterface
{
    /**
     * @return \Traversable
     */
    public function getIndexNames(): Traversable;
}
