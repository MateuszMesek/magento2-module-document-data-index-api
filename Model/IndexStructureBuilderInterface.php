<?php declare(strict_types=1);

namespace MateuszMesek\DocumentDataIndexIndexerApi\Model;

interface IndexStructureBuilderInterface
{
    /**
     * @param \Magento\Framework\Indexer\Dimension[] $dimensions
     * @return void
     */
    public function build(array $dimensions = []): void;
}
