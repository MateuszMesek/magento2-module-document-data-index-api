<?php declare(strict_types=1);

namespace MateuszMesek\DocumentDataIndexIndexerApi\Model\Config;

interface IndexIdsResolverInterface
{
    /**
     * @param string $documentName
     * @return string|null
     */
    public function getIndexIdsResolver(string $documentName): ?string;
}
