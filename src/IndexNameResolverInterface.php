<?php declare(strict_types=1);

namespace MateuszMesek\DocumentDataIndexIndexerApi;

interface IndexNameResolverInterface
{
    /**
     * @param \Magento\Framework\Indexer\Dimension[] $dimensions
     * @return string
     */
    public function resolve(array $dimensions): string;
}
