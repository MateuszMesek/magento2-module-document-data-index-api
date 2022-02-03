<?php declare(strict_types=1);

namespace MateuszMesek\DocumentIndexerApi\Command;

use Traversable;

interface GetDocumentsByDimensionsAndEntityIdsInterface
{
    /**
     * @param \Magento\Framework\Indexer\Dimension[] $dimensions
     * @param \Traversable $entityIds
     * @return \Traversable
     */
    public function execute(array $dimensions, Traversable $entityIds): Traversable;
}
