<?php declare(strict_types=1);

namespace MateuszMesek\DocumentDataIndexApi;

use Traversable;

interface DataResolverInterface
{
    /**
     * @param \Magento\Framework\Indexer\Dimension[] $dimensions
     * @param \Traversable $entityIds
     * @return \Traversable
     */
    public function resolve(array $dimensions, Traversable $entityIds): Traversable;
}
