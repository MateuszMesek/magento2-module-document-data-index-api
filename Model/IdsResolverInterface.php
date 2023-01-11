<?php declare(strict_types=1);

namespace MateuszMesek\DocumentDataIndexIndexerApi\Model;

use Traversable;

interface IdsResolverInterface
{
    /**
     * @param \Magento\Framework\Indexer\Dimension[] $dimensions
     * @return \Traversable
     */
    public function resolve(array $dimensions): Traversable;
}
