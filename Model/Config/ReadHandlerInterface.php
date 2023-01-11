<?php declare(strict_types=1);

namespace MateuszMesek\DocumentDataIndexIndexerApi\Model\Config;

interface ReadHandlerInterface
{
    /**
     * @param string $documentName
     * @return string|null
     */
    public function getReadHandler(string $documentName): ?string;
}
