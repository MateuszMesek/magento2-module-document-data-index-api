<?php declare(strict_types=1);

namespace MateuszMesek\DocumentDataIndexIndexerApi\Model;

use Magento\Framework\Api\SearchCriteriaInterface;
use Traversable;

interface ReadHandlerInterface
{
    /**
     * @param \Magento\Framework\Indexer\Dimension[] $dimensions
     * @return bool
     */
    public function isAvailable(array $dimensions): bool;

    /**
     * @param \Magento\Framework\Indexer\Dimension[] $dimensions
     * @param \Magento\Framework\Api\SearchCriteriaInterface|null $searchCriteria
     * @return \Traversable
     */
    public function readIndex(array $dimensions, ?SearchCriteriaInterface $searchCriteria = null): Traversable;
}
