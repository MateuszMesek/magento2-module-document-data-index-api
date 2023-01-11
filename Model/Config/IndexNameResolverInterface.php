<?php declare(strict_types=1);

namespace MateuszMesek\DocumentDataIndexIndexerApi\Model\Config;

interface IndexNameResolverInterface
{
    /**
     * @param string $documentName
     * @return string|null
     */
    public function getIndexNameResolver(string $documentName): ?string;
}
