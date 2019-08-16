<?php
declare(strict_types=1);

namespace App\Usecase;

use DataSourceGateway;

class CreateSeminarTemplate
{
    /**
     * @var DataSourceGateway
     */
    private $dataSource;
    /**
     * @var TemplateFormatter
     */
    private $formatter;

    public function __construct(
        DataSourceGateway $dataSource,
        TemplateFormatter $formatter
    ) {
        $this->dataSource = $dataSource;
        $this->formatter = $formatter;
    }

    public function create(): CreateSeminarTemplateResult
    {
        // 情報を取得する
        $data = $this->dataSource->get();
        // 成型する
        $formatted = $this->formatter->format($data);
        // 返却する
        return new CreateSeminarTemplateResult($formatted);
    }
}