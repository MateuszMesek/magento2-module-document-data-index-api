<?php declare(strict_types=1);

namespace MateuszMesek\DocumentIndexerApi\Command;

use Traversable;

interface GetEntityIdsByDimensionsInterface
{
    /**
     * @param \Magento\Framework\Indexer\Dimension[] $dimensions
     * @return Traversable
     */
    public function execute(array $dimensions): Traversable;
}
