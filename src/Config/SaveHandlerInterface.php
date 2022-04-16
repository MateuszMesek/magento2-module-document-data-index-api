<?php declare(strict_types=1);

namespace MateuszMesek\DocumentDataIndexIndexerApi\Config;

interface SaveHandlerInterface
{
    /**
     * @param string $documentName
     * @return string|null
     */
    public function getSaveHandler(string $documentName): ?string;
}
