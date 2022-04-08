<?php declare(strict_types=1);

namespace MateuszMesek\DocumentDataIndexApi\Command;

use Traversable;

interface GetIndexNamesInterface
{
    /**
     * @return \Traversable
     */
    public function execute(): Traversable;
}
