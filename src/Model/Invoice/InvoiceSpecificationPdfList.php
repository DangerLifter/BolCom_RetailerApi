<?php

// this file is auto-generated by prolic/fpp
// don't edit this file manually

declare(strict_types=1);

namespace BolCom\RetailerApi\Model\Invoice;

final class InvoiceSpecificationPdfList
{
    private $pdfs;

    public function __construct(InvoiceSpecificationPdf ...$pdfs)
    {
        $this->pdfs = $pdfs;
    }

    public function pdfs(): array
    {
        return $this->pdfs;
    }

    public function withPdfs(array $pdfs): InvoiceSpecificationPdfList
    {
        return new self(...$pdfs);
    }
}
