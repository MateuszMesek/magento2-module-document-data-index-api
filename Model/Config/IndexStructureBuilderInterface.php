<?php declare(strict_types=1);

namespace MateuszMesek\DocumentDataIndexIndexerApi\Model\Config;

interface IndexStructureBuilderInterface
{
    /**
     * @param string $documentName
     * @return string|null
     */
    public function getIndexStructureBuilder(string $documentName): ?string;
}
