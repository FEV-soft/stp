<?php


namespace App\ViewModel;


final class StpClient
{
    private int $id;
    private string $companyName;
    private string $companyType;
    private string $edrpou;
    private string $iban;
    private string $address;
    private string $phone;
    private string $email;
    private string $contactPersonFirstName;
    private string $contactPersonLastName;
    private string $contactPersonPhone;

    public function __construct (
        int $id,
        string $companyName,
        string $companyType,
        string $edrpou,
        string $iban,
        string $address,
        string $phone,
        string $email,
        string $contactPersonFirstName,
        string $contactPersonLastName,
        string $contactPersonPhone
    ){
        $this->id = $id;
        $this->companyName = $companyName;
        $this->companyType = $companyType;
        $this->edrpou = $edrpou;
        $this->iban = $iban;
        $this->address = $address;
        $this->phone = $phone;
        $this->email = $email;
        $this->contactPersonFirstName = $contactPersonFirstName;
        $this->contactPersonLastName = $contactPersonLastName;
        $this->contactPersonPhone = $contactPersonPhone;
    }

    public function getStpClientStringArray (): array
    {
        return $stpClientStringArray = [
            'id' => $this->id,
            'companyName' => $this->companyName,
            'companyType' => $this->companyType,
            'edrpou' => $this->edrpou,
            'iban' => $this->iban,
            'address' => $this->address,
            'phone' => $this->phone,
            'email' => $this->email,
            'contactPersonFirstName' => $this->contactPersonFirstName,
            'contactPersonLastName' => $this->contactPersonLastName,
            'contactPersonPhone' => $this->contactPersonPhone
        ];
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getCompanyName(): string
    {
        return $this->companyName;
    }

    public function getCompanyType(): string
    {
        return $this->companyType;
    }

    public function getEdrpou(): string
    {
        return $this->edrpou;
    }

    public function getIban(): string
    {
        return $this->iban;
    }

    public function getAddress(): string
    {
        return $this->address;
    }

    public function getPhone(): string
    {
        return $this->phone;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getContactPersonFirstName(): string
    {
        return $this->contactPersonFirstName;
    }

    public function getContactPersonLastName(): string
    {
        return $this->contactPersonLastName;
    }

    public function getContactPersonPhone(): string
    {
        return $this->contactPersonPhone;
    }

}