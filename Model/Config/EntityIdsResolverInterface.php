<?php declare(strict_types=1);

namespace MateuszMesek\DocumentDataIndexIndexerApi\Model\Config;

interface EntityIdsResolverInterface
{
    /**
     * @param string $documentName
     * @return string|null
     */
    public function getEntityIdsResolver(string $documentName): ?string;
}
