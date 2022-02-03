<?php declare(strict_types=1);

namespace MateuszMesek\DocumentIndexerApi;

interface IndexNameResolverInterface
{
    /**
     * @param \Magento\Framework\Indexer\Dimension[] $dimensions
     * @return string
     */
    public function resolve(array $dimensions): string;
}
