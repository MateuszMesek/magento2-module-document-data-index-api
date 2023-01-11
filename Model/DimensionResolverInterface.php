<?php declare(strict_types=1);

namespace MateuszMesek\DocumentDataIndexIndexerApi\Model;

interface DimensionResolverInterface
{
    /**
     * @param \Magento\Framework\Indexer\Dimension[] $dimensions
     * @return mixed
     */
    public function resolve(array $dimensions): mixed;
}
