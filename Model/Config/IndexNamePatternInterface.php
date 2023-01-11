<?php declare(strict_types=1);

namespace MateuszMesek\DocumentDataIndexIndexerApi\Model\Config;

interface IndexNamePatternInterface
{
    /**
     * @param string $documentName
     * @return string|null
     */
    public function getIndexNamePattern(string $documentName): ?string;
}
