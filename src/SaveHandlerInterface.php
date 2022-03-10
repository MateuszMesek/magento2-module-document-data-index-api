<?php declare(strict_types=1);

namespace MateuszMesek\DocumentDataIndexerApi;

use Traversable;

interface SaveHandlerInterface
{
    /**
     * @param \Magento\Framework\Indexer\Dimension[] $dimensions
     * @return bool
     */
    public function isAvailable(array $dimensions = []): bool;

    /**
     * @param \Magento\Framework\Indexer\Dimension[] $dimensions
     * @param \Traversable $documents
     * @return void
     */
    public function saveIndex(array $dimensions, Traversable $documents): void;

    /**
     * @param \Magento\Framework\Indexer\Dimension[] $dimensions
     * @param \Traversable $documents
     * @return void
     */
    public function deleteIndex(array $dimensions, Traversable $documents): void;
}
