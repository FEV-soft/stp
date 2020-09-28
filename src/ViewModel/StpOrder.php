<?php


namespace App\ViewModel;


final class StpOrder
{
    private int $id;
    private int $companyId;
    private string $statusInProgress;
    private string $statusInProgressMesh;
    private string $statusInProgressForm;
    private string $statusInProgressPack;
    private string $statusInvoiceSent;
    private string $statusDocumentsDone;
    private string $statusDocumentsReturn;
    private string $statusShippingSent;
    private string $statusShippingReceive;
    private string $statusOrderClose;

    public function __construct(
        int $id, int $companyId,
        string $statusInProgress,
        string $statusInProgressMesh,
        string $statusInProgressForm,
        string $statusInProgressPack,
        string $statusInvoiceSent,
        string $statusDocumentsDone,
        string $statusDocumentsReturn,
        string $statusShippingSent,
        string $statusShippingReceive,
        string $statusOrderClose
    )
    {
        $this->id = $id;
        $this->companyId = $companyId;
        $this->statusInProgress = $statusInProgress;
        $this->statusInProgressMesh = $statusInProgressMesh;
        $this->statusInProgressForm = $statusInProgressForm;
        $this->statusInProgressPack = $statusInProgressPack;
        $this->statusInvoiceSent = $statusInvoiceSent;
        $this->statusDocumentsDone = $statusDocumentsDone;
        $this->statusDocumentsReturn = $statusDocumentsReturn;
        $this->statusShippingSent = $statusShippingSent;
        $this->statusShippingReceive = $statusShippingReceive;
        $this->statusOrderClose = $statusOrderClose;
    }

    public function getStpOrderStringArray (): array
    {
        return $stpOrderStringArray = [
            'id' => $this->id,
            'companyId' => $this->companyId,
            'statusInProgress' => $this->statusInProgress,
            'statusInProgressMesh' => $this->statusInProgressMesh,
            'statusInProgressForm' => $this->statusInProgressForm,
            'statusInProgressPack' => $this->statusInProgressPack,
            'statusInvoiceSent' => $this->statusInvoiceSent,
            'statusDocumentsDone' => $this->statusDocumentsDone,
            'statusDocumentsReturn' => $this->statusDocumentsReturn,
            'statusShippingSent' => $this->statusShippingSent,
            'statusShippingReceive' => $this->statusShippingReceive,
            'statusOrderClose' => $this->statusOrderClose
        ];
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getCompanyId(): int
    {
        return $this->companyId;
    }

    public function getStatusInProgress(): string
    {
        return $this->statusInProgress;
    }

    public function getStatusInProgressMesh(): string
    {
        return $this->statusInProgressMesh;
    }

    public function getStatusInProgressForm(): string
    {
        return $this->statusInProgressForm;
    }

    public function getStatusInProgressPack(): string
    {
        return $this->statusInProgressPack;
    }

    public function getStatusInvoiceSent(): string
    {
        return $this->statusInvoiceSent;
    }

    public function getStatusDocumentsDone(): string
    {
        return $this->statusDocumentsDone;
    }

    public function getStatusDocumentsReturn(): string
    {
        return $this->statusDocumentsReturn;
    }

    public function getStatusShippingSent(): string
    {
        return $this->statusShippingSent;
    }

    public function getStatusShippingReceive(): string
    {
        return $this->statusShippingReceive;
    }

    public function getStatusOrderClose(): string
    {
        return $this->statusOrderClose;
    }

}