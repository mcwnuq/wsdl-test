<?php

namespace App\ElektronicznyNadawca;

class adresKorespondencyjny extends adresType
{

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @param nazwaType $nazwa
     * @param nazwa2Type $nazwa2
     * @param ulicaType $ulica
     * @param numerDomuType $numerDomu
     * @param numerLokaluType $numerLokalu
     * @param miejscowoscType $miejscowosc
     * @param kodPocztowyType $kodPocztowy
     * @param krajType $kraj
     * @param telefonType $telefon
     * @param emailType $email
     * @param mobileType $mobile
     * @param string $osobaKontaktowa
     * @param string $nip
     * @param int $id
     */
    public function __construct($nazwa, $nazwa2, $ulica, $numerDomu, $numerLokalu, $miejscowosc, $kodPocztowy, $kraj, $telefon, $email, $mobile, $osobaKontaktowa, $nip, $id)
    {
      parent::__construct($nazwa, $nazwa2, $ulica, $numerDomu, $numerLokalu, $miejscowosc, $kodPocztowy, $kraj, $telefon, $email, $mobile, $osobaKontaktowa, $nip);
      $this->id = $id;
    }

    /**
     * @return int
     */
    public function getId()
    {
      return $this->id;
    }

    /**
     * @param int $id
     * @return \App\ElektronicznyNadawca\adresKorespondencyjny
     */
    public function setId($id)
    {
      $this->id = $id;
      return $this;
    }

}
