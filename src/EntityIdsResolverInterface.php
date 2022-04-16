<?php declare(strict_types=1);

namespace MateuszMesek\DocumentDataIndexIndexerApi;

use Traversable;

interface EntityIdsResolverInterface
{
    /**
     * @param \Magento\Framework\Indexer\Dimension[] $dimensions
     * @return \Traversable
     */
    public function resolve(array $dimensions): Traversable;
}
