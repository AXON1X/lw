<?php
class Buyer
{
    public function __construct(
        string $family,
        string $name,
        string $patronymic,
        string $adres,
        int $card,
        int $bank
    ) {
        $this->family = $family;
        $this->name = $name;
        $this->patronymic = $patronymic;
        $this->adres = $adres;
        $this->card = $card;
        $this->bank = $bank;
    }

    public function setFamily($family)
    {
        $this->family = $family;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setPatronymic($patronymic)
    {
        $this->patronymic = $patronymic;
    }

    public function setAdres($adres)
    {
        $this->adres = $adres;
    }

    public function setCard($card)
    {
        $this->card = $card;
    }

    public function setBank($bank)
    {
        $this->bank = $bank;
    }

    public function getFamily()
    {
        return "{$this->family}";
    }

    public function getName()
    {
        return "{$this->name}";
    }

    public function getPatronymic()
    {
        return "{$this->patronymic}";
    }

    public function getAdres()
    {
        return "{$this->adres}";
    }

    public function getCard()
    {
        return "{$this->card}";
    }

    public function getBank()
    {
        return "{$this->bank}";
    }

    public function showData(): void
    {
        print "ФИО: {$this->family} {$this->name} {$this->patronymic} \n 
        Адрес : {$this->adres} \n Номер кредитки : {$this->card} \n 
        Номер счёта : {$this->bank}";
    }
}