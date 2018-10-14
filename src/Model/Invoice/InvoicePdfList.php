<?php

// this file is auto-generated by prolic/fpp
// don't edit this file manually

declare(strict_types=1);

namespace BolCom\RetailerApi\Model\Invoice;

final class InvoicePdfList
{
    private $pdfs;

    public function __construct(InvoicePdf ...$pdfs)
    {
        $this->pdfs = $pdfs;
    }

    public function pdfs(): array
    {
        return $this->pdfs;
    }

    public function withPdfs(array $pdfs): InvoicePdfList
    {
        return new self(...$pdfs);
    }
}
