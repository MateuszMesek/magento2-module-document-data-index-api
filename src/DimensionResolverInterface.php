<?php declare(strict_types=1);

namespace MateuszMesek\DocumentDataIndexIndexerApi;

interface DimensionResolverInterface
{
    /**
     * @param \Magento\Framework\Indexer\Dimension[] $dimensions
     * @return null|mixed
     */
    public function resolve(array $dimensions);
}
