<?php declare(strict_types=1);

namespace MateuszMesek\DocumentDataIndexApi;

interface IndexNameResolverInterface
{
    /**
     * @param \Magento\Framework\Indexer\Dimension[] $dimensions
     * @return string
     */
    public function resolve(array $dimensions): string;
}
