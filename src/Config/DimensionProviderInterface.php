<?php declare(strict_types=1);

namespace MateuszMesek\DocumentDataIndexIndexerApi\Config;

interface DimensionProviderInterface
{
    /**
     * @param string $documentName
     * @return string|null
     */
    public function getDimensionProvider(string $documentName): ?string;
}
