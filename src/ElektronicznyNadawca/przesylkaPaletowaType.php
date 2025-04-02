<?php

namespace App\ElektronicznyNadawca;

class przesylkaPaletowaType extends przesylkaRejestrowanaType
{

    /**
     * @var adresType $miejsceOdbioru
     */
    protected $miejsceOdbioru = null;

    /**
     * @var adresType $miejsceDoreczenia
     */
    protected $miejsceDoreczenia = null;

    /**
     * @var paletaType $paleta
     */
    protected $paleta = null;

    /**
     * @var platnikType $platnik
     */
    protected $platnik = null;

    /**
     * @var pobranieType $pobranie
     */
    protected $pobranie = null;

    /**
     * @var subPrzesylkaPaletowaType[] $subPaleta
     */
    protected $subPaleta = null;

    /**
     * @var daneSentType[] $daneSent
     */
    protected $daneSent = null;

    /**
     * @var awizacjaType $awizacja
     */
    protected $awizacja = null;

    /**
     * @var string $zawartosc
     */
    protected $zawartosc = null;

    /**
     * @var masaType $masa
     */
    protected $masa = null;

    /**
     * @var date $dataZaladunku
     */
    protected $dataZaladunku = null;

    /**
     * @var date $dataDostawy
     */
    protected $dataDostawy = null;

    /**
     * @var wartoscType $wartosc
     */
    protected $wartosc = null;

    /**
     * @var int $iloscZwracanychPaletEUR
     */
    protected $iloscZwracanychPaletEUR = null;

    /**
     * @var string $zalaczonaFV
     */
    protected $zalaczonaFV = null;

    /**
     * @var string $zalaczonyWZ
     */
    protected $zalaczonyWZ = null;

    /**
     * @var string $zalaczoneInne
     */
    protected $zalaczoneInne = null;

    /**
     * @var string $zwracanaFV
     */
    protected $zwracanaFV = null;

    /**
     * @var string $zwracanyWZ
     */
    protected $zwracanyWZ = null;

    /**
     * @var string $zwracaneInne
     */
    protected $zwracaneInne = null;

    /**
     * @var string $powiadomienieNadawcy
     */
    protected $powiadomienieNadawcy = null;

    /**
     * @var eSposobPowiadomieniaType $powiadomienieOdbiorcy
     */
    protected $powiadomienieOdbiorcy = null;

    /**
     * @var boolean $dostawaWSobote
     */
    protected $dostawaWSobote = null;

    /**
     * @var boolean $przygotowanieDokumentowPrzewozowych
     */
    protected $przygotowanieDokumentowPrzewozowych = null;

    /**
     * @var boolean $dostawaSamochodemDedykowanym
     */
    protected $dostawaSamochodemDedykowanym = null;

    /**
     * @var boolean $zmianaDanychAdresowych
     */
    protected $zmianaDanychAdresowych = null;

    /**
     * @var boolean $ustalenieTerminuDostawy
     */
    protected $ustalenieTerminuDostawy = null;

    /**
     * @var boolean $samochodZWinda
     */
    protected $samochodZWinda = null;

    /**
     * @var boolean $zabranieOpakowania
     */
    protected $zabranieOpakowania = null;

    /**
     * @var boolean $wniesienie
     */
    protected $wniesienie = null;

    /**
     * @var boolean $awizoSMS
     */
    protected $awizoSMS = null;

    /**
     * @param guidType $guid
     * @param guidType $pakietGuid
     * @param guidType $opakowanieGuid
     * @param opisType $opis
     * @param date $planowanaDataNadania
     * @param numerNadaniaType $numerNadania
     * @param sygnaturaType $sygnatura
     * @param terminType $terminSprawy
     * @param rodzajType $rodzaj
     * @param boolean $weryfikacjaPlatnosci
     * @param paletaType $paleta
     * @param string $zawartosc
     * @param masaType $masa
     * @param date $dataZaladunku
     * @param date $dataDostawy
     * @param wartoscType $wartosc
     * @param int $iloscZwracanychPaletEUR
     * @param string $zalaczonaFV
     * @param string $zalaczonyWZ
     * @param string $zalaczoneInne
     * @param string $zwracanaFV
     * @param string $zwracanyWZ
     * @param string $zwracaneInne
     * @param string $powiadomienieNadawcy
     * @param eSposobPowiadomieniaType $powiadomienieOdbiorcy
     * @param boolean $dostawaWSobote
     * @param boolean $przygotowanieDokumentowPrzewozowych
     * @param boolean $dostawaSamochodemDedykowanym
     * @param boolean $zmianaDanychAdresowych
     * @param boolean $ustalenieTerminuDostawy
     * @param boolean $samochodZWinda
     * @param boolean $zabranieOpakowania
     * @param boolean $wniesienie
     * @param boolean $awizoSMS
     */
    public function __construct($guid, $pakietGuid, $opakowanieGuid, $opis, $planowanaDataNadania, $numerNadania, $sygnatura, $terminSprawy, $rodzaj, $weryfikacjaPlatnosci, $paleta, $zawartosc, $masa, $dataZaladunku, $dataDostawy, $wartosc, $iloscZwracanychPaletEUR, $zalaczonaFV, $zalaczonyWZ, $zalaczoneInne, $zwracanaFV, $zwracanyWZ, $zwracaneInne, $powiadomienieNadawcy, $powiadomienieOdbiorcy, $dostawaWSobote, $przygotowanieDokumentowPrzewozowych, $dostawaSamochodemDedykowanym, $zmianaDanychAdresowych, $ustalenieTerminuDostawy, $samochodZWinda, $zabranieOpakowania, $wniesienie, $awizoSMS)
    {
      parent::__construct($guid, $pakietGuid, $opakowanieGuid, $opis, $planowanaDataNadania, $numerNadania, $sygnatura, $terminSprawy, $rodzaj, $weryfikacjaPlatnosci);
      $this->paleta = $paleta;
      $this->zawartosc = $zawartosc;
      $this->masa = $masa;
      $this->dataZaladunku = $dataZaladunku;
      $this->dataDostawy = $dataDostawy;
      $this->wartosc = $wartosc;
      $this->iloscZwracanychPaletEUR = $iloscZwracanychPaletEUR;
      $this->zalaczonaFV = $zalaczonaFV;
      $this->zalaczonyWZ = $zalaczonyWZ;
      $this->zalaczoneInne = $zalaczoneInne;
      $this->zwracanaFV = $zwracanaFV;
      $this->zwracanyWZ = $zwracanyWZ;
      $this->zwracaneInne = $zwracaneInne;
      $this->powiadomienieNadawcy = $powiadomienieNadawcy;
      $this->powiadomienieOdbiorcy = $powiadomienieOdbiorcy;
      $this->dostawaWSobote = $dostawaWSobote;
      $this->przygotowanieDokumentowPrzewozowych = $przygotowanieDokumentowPrzewozowych;
      $this->dostawaSamochodemDedykowanym = $dostawaSamochodemDedykowanym;
      $this->zmianaDanychAdresowych = $zmianaDanychAdresowych;
      $this->ustalenieTerminuDostawy = $ustalenieTerminuDostawy;
      $this->samochodZWinda = $samochodZWinda;
      $this->zabranieOpakowania = $zabranieOpakowania;
      $this->wniesienie = $wniesienie;
      $this->awizoSMS = $awizoSMS;
    }

    /**
     * @return adresType
     */
    public function getMiejsceOdbioru()
    {
      return $this->miejsceOdbioru;
    }

    /**
     * @param adresType $miejsceOdbioru
     * @return \App\ElektronicznyNadawca\przesylkaPaletowaType
     */
    public function setMiejsceOdbioru($miejsceOdbioru)
    {
      $this->miejsceOdbioru = $miejsceOdbioru;
      return $this;
    }

    /**
     * @return adresType
     */
    public function getMiejsceDoreczenia()
    {
      return $this->miejsceDoreczenia;
    }

    /**
     * @param adresType $miejsceDoreczenia
     * @return \App\ElektronicznyNadawca\przesylkaPaletowaType
     */
    public function setMiejsceDoreczenia($miejsceDoreczenia)
    {
      $this->miejsceDoreczenia = $miejsceDoreczenia;
      return $this;
    }

    /**
     * @return paletaType
     */
    public function getPaleta()
    {
      return $this->paleta;
    }

    /**
     * @param paletaType $paleta
     * @return \App\ElektronicznyNadawca\przesylkaPaletowaType
     */
    public function setPaleta($paleta)
    {
      $this->paleta = $paleta;
      return $this;
    }

    /**
     * @return platnikType
     */
    public function getPlatnik()
    {
      return $this->platnik;
    }

    /**
     * @param platnikType $platnik
     * @return \App\ElektronicznyNadawca\przesylkaPaletowaType
     */
    public function setPlatnik($platnik)
    {
      $this->platnik = $platnik;
      return $this;
    }

    /**
     * @return pobranieType
     */
    public function getPobranie()
    {
      return $this->pobranie;
    }

    /**
     * @param pobranieType $pobranie
     * @return \App\ElektronicznyNadawca\przesylkaPaletowaType
     */
    public function setPobranie($pobranie)
    {
      $this->pobranie = $pobranie;
      return $this;
    }

    /**
     * @return subPrzesylkaPaletowaType[]
     */
    public function getSubPaleta()
    {
      return $this->subPaleta;
    }

    /**
     * @param subPrzesylkaPaletowaType[] $subPaleta
     * @return \App\ElektronicznyNadawca\przesylkaPaletowaType
     */
    public function setSubPaleta(array $subPaleta = null)
    {
      $this->subPaleta = $subPaleta;
      return $this;
    }

    /**
     * @return daneSentType[]
     */
    public function getDaneSent()
    {
      return $this->daneSent;
    }

    /**
     * @param daneSentType[] $daneSent
     * @return \App\ElektronicznyNadawca\przesylkaPaletowaType
     */
    public function setDaneSent(array $daneSent = null)
    {
      $this->daneSent = $daneSent;
      return $this;
    }

    /**
     * @return awizacjaType
     */
    public function getAwizacja()
    {
      return $this->awizacja;
    }

    /**
     * @param awizacjaType $awizacja
     * @return \App\ElektronicznyNadawca\przesylkaPaletowaType
     */
    public function setAwizacja($awizacja)
    {
      $this->awizacja = $awizacja;
      return $this;
    }

    /**
     * @return string
     */
    public function getZawartosc()
    {
      return $this->zawartosc;
    }

    /**
     * @param string $zawartosc
     * @return \App\ElektronicznyNadawca\przesylkaPaletowaType
     */
    public function setZawartosc($zawartosc)
    {
      $this->zawartosc = $zawartosc;
      return $this;
    }

    /**
     * @return masaType
     */
    public function getMasa()
    {
      return $this->masa;
    }

    /**
     * @param masaType $masa
     * @return \App\ElektronicznyNadawca\przesylkaPaletowaType
     */
    public function setMasa($masa)
    {
      $this->masa = $masa;
      return $this;
    }

    /**
     * @return date
     */
    public function getDataZaladunku()
    {
      return $this->dataZaladunku;
    }

    /**
     * @param date $dataZaladunku
     * @return \App\ElektronicznyNadawca\przesylkaPaletowaType
     */
    public function setDataZaladunku($dataZaladunku)
    {
      $this->dataZaladunku = $dataZaladunku;
      return $this;
    }

    /**
     * @return date
     */
    public function getDataDostawy()
    {
      return $this->dataDostawy;
    }

    /**
     * @param date $dataDostawy
     * @return \App\ElektronicznyNadawca\przesylkaPaletowaType
     */
    public function setDataDostawy($dataDostawy)
    {
      $this->dataDostawy = $dataDostawy;
      return $this;
    }

    /**
     * @return wartoscType
     */
    public function getWartosc()
    {
      return $this->wartosc;
    }

    /**
     * @param wartoscType $wartosc
     * @return \App\ElektronicznyNadawca\przesylkaPaletowaType
     */
    public function setWartosc($wartosc)
    {
      $this->wartosc = $wartosc;
      return $this;
    }

    /**
     * @return int
     */
    public function getIloscZwracanychPaletEUR()
    {
      return $this->iloscZwracanychPaletEUR;
    }

    /**
     * @param int $iloscZwracanychPaletEUR
     * @return \App\ElektronicznyNadawca\przesylkaPaletowaType
     */
    public function setIloscZwracanychPaletEUR($iloscZwracanychPaletEUR)
    {
      $this->iloscZwracanychPaletEUR = $iloscZwracanychPaletEUR;
      return $this;
    }

    /**
     * @return string
     */
    public function getZalaczonaFV()
    {
      return $this->zalaczonaFV;
    }

    /**
     * @param string $zalaczonaFV
     * @return \App\ElektronicznyNadawca\przesylkaPaletowaType
     */
    public function setZalaczonaFV($zalaczonaFV)
    {
      $this->zalaczonaFV = $zalaczonaFV;
      return $this;
    }

    /**
     * @return string
     */
    public function getZalaczonyWZ()
    {
      return $this->zalaczonyWZ;
    }

    /**
     * @param string $zalaczonyWZ
     * @return \App\ElektronicznyNadawca\przesylkaPaletowaType
     */
    public function setZalaczonyWZ($zalaczonyWZ)
    {
      $this->zalaczonyWZ = $zalaczonyWZ;
      return $this;
    }

    /**
     * @return string
     */
    public function getZalaczoneInne()
    {
      return $this->zalaczoneInne;
    }

    /**
     * @param string $zalaczoneInne
     * @return \App\ElektronicznyNadawca\przesylkaPaletowaType
     */
    public function setZalaczoneInne($zalaczoneInne)
    {
      $this->zalaczoneInne = $zalaczoneInne;
      return $this;
    }

    /**
     * @return string
     */
    public function getZwracanaFV()
    {
      return $this->zwracanaFV;
    }

    /**
     * @param string $zwracanaFV
     * @return \App\ElektronicznyNadawca\przesylkaPaletowaType
     */
    public function setZwracanaFV($zwracanaFV)
    {
      $this->zwracanaFV = $zwracanaFV;
      return $this;
    }

    /**
     * @return string
     */
    public function getZwracanyWZ()
    {
      return $this->zwracanyWZ;
    }

    /**
     * @param string $zwracanyWZ
     * @return \App\ElektronicznyNadawca\przesylkaPaletowaType
     */
    public function setZwracanyWZ($zwracanyWZ)
    {
      $this->zwracanyWZ = $zwracanyWZ;
      return $this;
    }

    /**
     * @return string
     */
    public function getZwracaneInne()
    {
      return $this->zwracaneInne;
    }

    /**
     * @param string $zwracaneInne
     * @return \App\ElektronicznyNadawca\przesylkaPaletowaType
     */
    public function setZwracaneInne($zwracaneInne)
    {
      $this->zwracaneInne = $zwracaneInne;
      return $this;
    }

    /**
     * @return string
     */
    public function getPowiadomienieNadawcy()
    {
      return $this->powiadomienieNadawcy;
    }

    /**
     * @param string $powiadomienieNadawcy
     * @return \App\ElektronicznyNadawca\przesylkaPaletowaType
     */
    public function setPowiadomienieNadawcy($powiadomienieNadawcy)
    {
      $this->powiadomienieNadawcy = $powiadomienieNadawcy;
      return $this;
    }

    /**
     * @return eSposobPowiadomieniaType
     */
    public function getPowiadomienieOdbiorcy()
    {
      return $this->powiadomienieOdbiorcy;
    }

    /**
     * @param eSposobPowiadomieniaType $powiadomienieOdbiorcy
     * @return \App\ElektronicznyNadawca\przesylkaPaletowaType
     */
    public function setPowiadomienieOdbiorcy($powiadomienieOdbiorcy)
    {
      $this->powiadomienieOdbiorcy = $powiadomienieOdbiorcy;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDostawaWSobote()
    {
      return $this->dostawaWSobote;
    }

    /**
     * @param boolean $dostawaWSobote
     * @return \App\ElektronicznyNadawca\przesylkaPaletowaType
     */
    public function setDostawaWSobote($dostawaWSobote)
    {
      $this->dostawaWSobote = $dostawaWSobote;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPrzygotowanieDokumentowPrzewozowych()
    {
      return $this->przygotowanieDokumentowPrzewozowych;
    }

    /**
     * @param boolean $przygotowanieDokumentowPrzewozowych
     * @return \App\ElektronicznyNadawca\przesylkaPaletowaType
     */
    public function setPrzygotowanieDokumentowPrzewozowych($przygotowanieDokumentowPrzewozowych)
    {
      $this->przygotowanieDokumentowPrzewozowych = $przygotowanieDokumentowPrzewozowych;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDostawaSamochodemDedykowanym()
    {
      return $this->dostawaSamochodemDedykowanym;
    }

    /**
     * @param boolean $dostawaSamochodemDedykowanym
     * @return \App\ElektronicznyNadawca\przesylkaPaletowaType
     */
    public function setDostawaSamochodemDedykowanym($dostawaSamochodemDedykowanym)
    {
      $this->dostawaSamochodemDedykowanym = $dostawaSamochodemDedykowanym;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getZmianaDanychAdresowych()
    {
      return $this->zmianaDanychAdresowych;
    }

    /**
     * @param boolean $zmianaDanychAdresowych
     * @return \App\ElektronicznyNadawca\przesylkaPaletowaType
     */
    public function setZmianaDanychAdresowych($zmianaDanychAdresowych)
    {
      $this->zmianaDanychAdresowych = $zmianaDanychAdresowych;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getUstalenieTerminuDostawy()
    {
      return $this->ustalenieTerminuDostawy;
    }

    /**
     * @param boolean $ustalenieTerminuDostawy
     * @return \App\ElektronicznyNadawca\przesylkaPaletowaType
     */
    public function setUstalenieTerminuDostawy($ustalenieTerminuDostawy)
    {
      $this->ustalenieTerminuDostawy = $ustalenieTerminuDostawy;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSamochodZWinda()
    {
      return $this->samochodZWinda;
    }

    /**
     * @param boolean $samochodZWinda
     * @return \App\ElektronicznyNadawca\przesylkaPaletowaType
     */
    public function setSamochodZWinda($samochodZWinda)
    {
      $this->samochodZWinda = $samochodZWinda;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getZabranieOpakowania()
    {
      return $this->zabranieOpakowania;
    }

    /**
     * @param boolean $zabranieOpakowania
     * @return \App\ElektronicznyNadawca\przesylkaPaletowaType
     */
    public function setZabranieOpakowania($zabranieOpakowania)
    {
      $this->zabranieOpakowania = $zabranieOpakowania;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getWniesienie()
    {
      return $this->wniesienie;
    }

    /**
     * @param boolean $wniesienie
     * @return \App\ElektronicznyNadawca\przesylkaPaletowaType
     */
    public function setWniesienie($wniesienie)
    {
      $this->wniesienie = $wniesienie;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAwizoSMS()
    {
      return $this->awizoSMS;
    }

    /**
     * @param boolean $awizoSMS
     * @return \App\ElektronicznyNadawca\przesylkaPaletowaType
     */
    public function setAwizoSMS($awizoSMS)
    {
      $this->awizoSMS = $awizoSMS;
      return $this;
    }

}
