<?php declare(strict_types=1);

namespace MateuszMesek\DocumentIndexerApi;

interface DimensionResolverInterface
{
    /**
     * @param \Magento\Framework\Indexer\Dimension[] $dimensions
     * @return null|mixed
     */
    public function resolve(array $dimensions);
}
