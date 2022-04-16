<?php declare(strict_types=1);

namespace MateuszMesek\DocumentDataIndexIndexerApi\Command;

use Traversable;

interface GetIndexNamesInterface
{
    /**
     * @return \Traversable
     */
    public function execute(): Traversable;
}
