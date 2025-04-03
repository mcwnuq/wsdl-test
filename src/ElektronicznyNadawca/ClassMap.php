<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca;

/**
 * Class which returns the class map definition
 */
class ClassMap
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     * @return string[]
     */
    final public static function get(): array
    {
        return [
            'addShipment' => 'App\\ElektronicznyNadawca\\StructType\\AddShipment',
            'addShipmentResponse' => 'App\\ElektronicznyNadawca\\StructType\\AddShipmentResponse',
            'przesylkaType' => 'App\\ElektronicznyNadawca\\StructType\\PrzesylkaType',
            'changePassword' => 'App\\ElektronicznyNadawca\\StructType\\ChangePassword',
            'changePasswordResponse' => 'App\\ElektronicznyNadawca\\StructType\\ChangePasswordResponse',
            'paczkaPocztowaType' => 'App\\ElektronicznyNadawca\\StructType\\PaczkaPocztowaType',
            'przesylkaPobraniowaType' => 'App\\ElektronicznyNadawca\\StructType\\PrzesylkaPobraniowaType',
            'przesylkaNaWarunkachSzczegolnychType' => 'App\\ElektronicznyNadawca\\StructType\\PrzesylkaNaWarunkachSzczegolnychType',
            'przesylkaPoleconaKrajowaType' => 'App\\ElektronicznyNadawca\\StructType\\PrzesylkaPoleconaKrajowaType',
            'przesylkaHandlowaType' => 'App\\ElektronicznyNadawca\\StructType\\PrzesylkaHandlowaType',
            'przesylkaListowaZadeklarowanaWartoscType' => 'App\\ElektronicznyNadawca\\StructType\\PrzesylkaListowaZadeklarowanaWartoscType',
            'przesylkaFullType' => 'App\\ElektronicznyNadawca\\StructType\\PrzesylkaFullType',
            'errorType' => 'App\\ElektronicznyNadawca\\StructType\\ErrorType',
            'adresType' => 'App\\ElektronicznyNadawca\\StructType\\AdresType',
            'sendEnvelope' => 'App\\ElektronicznyNadawca\\StructType\\SendEnvelope',
            'sendEnvelopeResponseType' => 'App\\ElektronicznyNadawca\\StructType\\SendEnvelopeResponseType',
            'getUrzedyNadania' => 'App\\ElektronicznyNadawca\\StructType\\GetUrzedyNadania',
            'getUrzedyNadaniaResponse' => 'App\\ElektronicznyNadawca\\StructType\\GetUrzedyNadaniaResponse',
            'clearEnvelope' => 'App\\ElektronicznyNadawca\\StructType\\ClearEnvelope',
            'clearEnvelopeResponse' => 'App\\ElektronicznyNadawca\\StructType\\ClearEnvelopeResponse',
            'urzadNadaniaFullType' => 'App\\ElektronicznyNadawca\\StructType\\UrzadNadaniaFullType',
            'urzadWydaniaEPrzesylkiType' => 'App\\ElektronicznyNadawca\\StructType\\UrzadWydaniaEPrzesylkiType',
            'pobranieType' => 'App\\ElektronicznyNadawca\\StructType\\PobranieType',
            'przesylkaPoleconaZagranicznaType' => 'App\\ElektronicznyNadawca\\StructType\\PrzesylkaPoleconaZagranicznaType',
            'przesylkaZadeklarowanaWartoscZagranicznaType' => 'App\\ElektronicznyNadawca\\StructType\\PrzesylkaZadeklarowanaWartoscZagranicznaType',
            'getUrzedyWydajaceEPrzesylki' => 'App\\ElektronicznyNadawca\\StructType\\GetUrzedyWydajaceEPrzesylki',
            'getUrzedyWydajaceEPrzesylkiResponse' => 'App\\ElektronicznyNadawca\\StructType\\GetUrzedyWydajaceEPrzesylkiResponse',
            'uploadIWDContent' => 'App\\ElektronicznyNadawca\\StructType\\UploadIWDContent',
            'getEnvelopeStatus' => 'App\\ElektronicznyNadawca\\StructType\\GetEnvelopeStatus',
            'getEnvelopeStatusResponse' => 'App\\ElektronicznyNadawca\\StructType\\GetEnvelopeStatusResponse',
            'downloadIWDContent' => 'App\\ElektronicznyNadawca\\StructType\\DownloadIWDContent',
            'downloadIWDContentResponse' => 'App\\ElektronicznyNadawca\\StructType\\DownloadIWDContentResponse',
            'przesylkaShortType' => 'App\\ElektronicznyNadawca\\StructType\\PrzesylkaShortType',
            'addShipmentResponseItemType' => 'App\\ElektronicznyNadawca\\StructType\\AddShipmentResponseItemType',
            'getKarty' => 'App\\ElektronicznyNadawca\\StructType\\GetKarty',
            'getKartyResponse' => 'App\\ElektronicznyNadawca\\StructType\\GetKartyResponse',
            'getPasswordExpiredDate' => 'App\\ElektronicznyNadawca\\StructType\\GetPasswordExpiredDate',
            'getPasswordExpiredDateResponse' => 'App\\ElektronicznyNadawca\\StructType\\GetPasswordExpiredDateResponse',
            'setAktywnaKarta' => 'App\\ElektronicznyNadawca\\StructType\\SetAktywnaKarta',
            'setAktywnaKartaResponse' => 'App\\ElektronicznyNadawca\\StructType\\SetAktywnaKartaResponse',
            'getEnvelopeContentFull' => 'App\\ElektronicznyNadawca\\StructType\\GetEnvelopeContentFull',
            'getEnvelopeContentFullResponse' => 'App\\ElektronicznyNadawca\\StructType\\GetEnvelopeContentFullResponse',
            'getEnvelopeContentShort' => 'App\\ElektronicznyNadawca\\StructType\\GetEnvelopeContentShort',
            'getEnvelopeContentShortResponse' => 'App\\ElektronicznyNadawca\\StructType\\GetEnvelopeContentShortResponse',
            'hello' => 'App\\ElektronicznyNadawca\\StructType\\Hello',
            'helloResponse' => 'App\\ElektronicznyNadawca\\StructType\\HelloResponse',
            'kartaType' => 'App\\ElektronicznyNadawca\\StructType\\KartaType',
            'getAddressLabel' => 'App\\ElektronicznyNadawca\\StructType\\GetAddressLabel',
            'getAddressLabelResponse' => 'App\\ElektronicznyNadawca\\StructType\\GetAddressLabelResponse',
            'addressLabelContent' => 'App\\ElektronicznyNadawca\\StructType\\AddressLabelContent',
            'getOutboxBook' => 'App\\ElektronicznyNadawca\\StructType\\GetOutboxBook',
            'getOutboxBookResponse' => 'App\\ElektronicznyNadawca\\StructType\\GetOutboxBookResponse',
            'getFirmowaPocztaBook' => 'App\\ElektronicznyNadawca\\StructType\\GetFirmowaPocztaBook',
            'getFirmowaPocztaBookResponse' => 'App\\ElektronicznyNadawca\\StructType\\GetFirmowaPocztaBookResponse',
            'getEnvelopeList' => 'App\\ElektronicznyNadawca\\StructType\\GetEnvelopeList',
            'getEnvelopeListResponse' => 'App\\ElektronicznyNadawca\\StructType\\GetEnvelopeListResponse',
            'envelopeInfoType' => 'App\\ElektronicznyNadawca\\StructType\\EnvelopeInfoType',
            'przesylkaZagranicznaType' => 'App\\ElektronicznyNadawca\\StructType\\PrzesylkaZagranicznaType',
            'przesylkaRejestrowanaType' => 'App\\ElektronicznyNadawca\\StructType\\PrzesylkaRejestrowanaType',
            'przesylkaNieRejestrowanaType' => 'App\\ElektronicznyNadawca\\StructType\\PrzesylkaNieRejestrowanaType',
            'przesylkaBiznesowaType' => 'App\\ElektronicznyNadawca\\StructType\\PrzesylkaBiznesowaType',
            'subPrzesylkaBiznesowaType' => 'App\\ElektronicznyNadawca\\StructType\\SubPrzesylkaBiznesowaType',
            'subPrzesylkaBiznesowaPlusType' => 'App\\ElektronicznyNadawca\\StructType\\SubPrzesylkaBiznesowaPlusType',
            'getAddresLabelByGuid' => 'App\\ElektronicznyNadawca\\StructType\\GetAddresLabelByGuid',
            'getAddresLabelByGuidResponse' => 'App\\ElektronicznyNadawca\\StructType\\GetAddresLabelByGuidResponse',
            'przesylkaBiznesowaPlusType' => 'App\\ElektronicznyNadawca\\StructType\\PrzesylkaBiznesowaPlusType',
            'pakietType' => 'App\\ElektronicznyNadawca\\StructType\\PakietType',
            'opakowanieType' => 'App\\ElektronicznyNadawca\\StructType\\OpakowanieType',
            'getPlacowkiPocztowe' => 'App\\ElektronicznyNadawca\\StructType\\GetPlacowkiPocztowe',
            'getPlacowkiPocztoweResponse' => 'App\\ElektronicznyNadawca\\StructType\\GetPlacowkiPocztoweResponse',
            'getGuid' => 'App\\ElektronicznyNadawca\\StructType\\GetGuid',
            'getGuidResponse' => 'App\\ElektronicznyNadawca\\StructType\\GetGuidResponse',
            'kierunekType' => 'App\\ElektronicznyNadawca\\StructType\\KierunekType',
            'getKierunki' => 'App\\ElektronicznyNadawca\\StructType\\GetKierunki',
            'getKierunkiResponse' => 'App\\ElektronicznyNadawca\\StructType\\GetKierunkiResponse',
            'getKierunkiInfo' => 'App\\ElektronicznyNadawca\\StructType\\GetKierunkiInfo',
            'getKierunkiInfoResponse' => 'App\\ElektronicznyNadawca\\StructType\\GetKierunkiInfoResponse',
            'uslugiType' => 'App\\ElektronicznyNadawca\\StructType\\UslugiType',
            'deliveryPathType' => 'App\\ElektronicznyNadawca\\StructType\\DeliveryPathType',
            'placowkaPocztowaType' => 'App\\ElektronicznyNadawca\\StructType\\PlacowkaPocztowaType',
            'godzinyPracyType' => 'App\\ElektronicznyNadawca\\StructType\\GodzinyPracyType',
            'godzinyPracyOdDoType' => 'App\\ElektronicznyNadawca\\StructType\\GodzinyPracyOdDoType',
            'punktWydaniaPrzesylkiBiznesowejPlus' => 'App\\ElektronicznyNadawca\\StructType\\PunktWydaniaPrzesylkiBiznesowejPlus',
            'getEnvelopeBufor' => 'App\\ElektronicznyNadawca\\StructType\\GetEnvelopeBufor',
            'getEnvelopeBuforResponse' => 'App\\ElektronicznyNadawca\\StructType\\GetEnvelopeBuforResponse',
            'clearEnvelopeByGuids' => 'App\\ElektronicznyNadawca\\StructType\\ClearEnvelopeByGuids',
            'clearEnvelopeByGuidsResponse' => 'App\\ElektronicznyNadawca\\StructType\\ClearEnvelopeByGuidsResponse',
            'zwrotDokumentowType' => 'App\\ElektronicznyNadawca\\StructType\\ZwrotDokumentowType',
            'odbiorPrzesylkiOdNadawcyType' => 'App\\ElektronicznyNadawca\\StructType\\OdbiorPrzesylkiOdNadawcyType',
            'potwierdzenieDoreczeniaType' => 'App\\ElektronicznyNadawca\\StructType\\PotwierdzenieDoreczeniaType',
            'rodzajListType' => 'App\\ElektronicznyNadawca\\StructType\\RodzajListType',
            'potwierdzenieOdbioruType' => 'App\\ElektronicznyNadawca\\StructType\\PotwierdzenieOdbioruType',
            'doreczenieType' => 'App\\ElektronicznyNadawca\\StructType\\DoreczenieType',
            'doreczenieUslugaPocztowaType' => 'App\\ElektronicznyNadawca\\StructType\\DoreczenieUslugaPocztowaType',
            'doreczenieUslugaKurierskaType' => 'App\\ElektronicznyNadawca\\StructType\\DoreczenieUslugaKurierskaType',
            'paczkaZagranicznaType' => 'App\\ElektronicznyNadawca\\StructType\\PaczkaZagranicznaType',
            'paczkaZagranicznaPremiumType' => 'App\\ElektronicznyNadawca\\StructType\\PaczkaZagranicznaPremiumType',
            'setEnvelopeBuforDataNadania' => 'App\\ElektronicznyNadawca\\StructType\\SetEnvelopeBuforDataNadania',
            'setEnvelopeBuforDataNadaniaResponse' => 'App\\ElektronicznyNadawca\\StructType\\SetEnvelopeBuforDataNadaniaResponse',
            'lokalizacjaGeograficznaType' => 'App\\ElektronicznyNadawca\\StructType\\LokalizacjaGeograficznaType',
            'wspolrzednaGeograficznaType' => 'App\\ElektronicznyNadawca\\StructType\\WspolrzednaGeograficznaType',
            'zwrotType' => 'App\\ElektronicznyNadawca\\StructType\\ZwrotType',
            'listZwyklyType' => 'App\\ElektronicznyNadawca\\StructType\\ListZwyklyType',
            'listZwyklyFirmowyType' => 'App\\ElektronicznyNadawca\\StructType\\ListZwyklyFirmowyType',
            'reklamowaType' => 'App\\ElektronicznyNadawca\\StructType\\ReklamowaType',
            'getEPOStatus' => 'App\\ElektronicznyNadawca\\StructType\\GetEPOStatus',
            'getEPOStatusResponse' => 'App\\ElektronicznyNadawca\\StructType\\GetEPOStatusResponse',
            'EPOType' => 'App\\ElektronicznyNadawca\\StructType\\EPOType',
            'EPOSimpleType' => 'App\\ElektronicznyNadawca\\StructType\\EPOSimpleType',
            'EPOExtendedType' => 'App\\ElektronicznyNadawca\\StructType\\EPOExtendedType',
            'przesylkaEPOType' => 'App\\ElektronicznyNadawca\\StructType\\PrzesylkaEPOType',
            'przesylkaFirmowaPoleconaType' => 'App\\ElektronicznyNadawca\\StructType\\PrzesylkaFirmowaPoleconaType',
            'przesylkaNierejestrowanaZNumeremType' => 'App\\ElektronicznyNadawca\\StructType\\PrzesylkaNierejestrowanaZNumeremType',
            'EPOInfoType' => 'App\\ElektronicznyNadawca\\StructType\\EPOInfoType',
            'awizoPrzesylkiType' => 'App\\ElektronicznyNadawca\\StructType\\AwizoPrzesylkiType',
            'doreczeniePrzesylkiType' => 'App\\ElektronicznyNadawca\\StructType\\DoreczeniePrzesylkiType',
            'zwrotPrzesylkiType' => 'App\\ElektronicznyNadawca\\StructType\\ZwrotPrzesylkiType',
            'getAddresLabelCompact' => 'App\\ElektronicznyNadawca\\StructType\\GetAddresLabelCompact',
            'getAddresLabelCompactResponse' => 'App\\ElektronicznyNadawca\\StructType\\GetAddresLabelCompactResponse',
            'getAddresLabelByGuidCompact' => 'App\\ElektronicznyNadawca\\StructType\\GetAddresLabelByGuidCompact',
            'getAddresLabelByGuidCompactResponse' => 'App\\ElektronicznyNadawca\\StructType\\GetAddresLabelByGuidCompactResponse',
            'ubezpieczenieType' => 'App\\ElektronicznyNadawca\\StructType\\UbezpieczenieType',
            'EMSType' => 'App\\ElektronicznyNadawca\\StructType\\EMSType',
            'getEnvelopeBuforList' => 'App\\ElektronicznyNadawca\\StructType\\GetEnvelopeBuforList',
            'getEnvelopeBuforListResponse' => 'App\\ElektronicznyNadawca\\StructType\\GetEnvelopeBuforListResponse',
            'buforType' => 'App\\ElektronicznyNadawca\\StructType\\BuforType',
            'createEnvelopeBufor' => 'App\\ElektronicznyNadawca\\StructType\\CreateEnvelopeBufor',
            'createEnvelopeBuforResponse' => 'App\\ElektronicznyNadawca\\StructType\\CreateEnvelopeBuforResponse',
            'moveShipments' => 'App\\ElektronicznyNadawca\\StructType\\MoveShipments',
            'moveShipmentsResponse' => 'App\\ElektronicznyNadawca\\StructType\\MoveShipmentsResponse',
            'updateEnvelopeBufor' => 'App\\ElektronicznyNadawca\\StructType\\UpdateEnvelopeBufor',
            'updateEnvelopeBuforResponse' => 'App\\ElektronicznyNadawca\\StructType\\UpdateEnvelopeBuforResponse',
            'getUbezpieczeniaInfo' => 'App\\ElektronicznyNadawca\\StructType\\GetUbezpieczeniaInfo',
            'getUbezpieczeniaInfoResponse' => 'App\\ElektronicznyNadawca\\StructType\\GetUbezpieczeniaInfoResponse',
            'ubezpieczeniaInfoType' => 'App\\ElektronicznyNadawca\\StructType\\UbezpieczeniaInfoType',
            'isMiejscowa' => 'App\\ElektronicznyNadawca\\StructType\\IsMiejscowa',
            'isMiejscowaResponse' => 'App\\ElektronicznyNadawca\\StructType\\IsMiejscowaResponse',
            'trasaRequestType' => 'App\\ElektronicznyNadawca\\StructType\\TrasaRequestType',
            'trasaResponseType' => 'App\\ElektronicznyNadawca\\StructType\\TrasaResponseType',
            'deklaracjaCelnaType' => 'App\\ElektronicznyNadawca\\StructType\\DeklaracjaCelnaType',
            'szczegolyDeklaracjiCelnejType' => 'App\\ElektronicznyNadawca\\StructType\\SzczegolyDeklaracjiCelnejType',
            'przesylkaPaletowaType' => 'App\\ElektronicznyNadawca\\StructType\\PrzesylkaPaletowaType',
            'paletaType' => 'App\\ElektronicznyNadawca\\StructType\\PaletaType',
            'platnikType' => 'App\\ElektronicznyNadawca\\StructType\\PlatnikType',
            'subPrzesylkaPaletowaType' => 'App\\ElektronicznyNadawca\\StructType\\SubPrzesylkaPaletowaType',
            'getBlankietPobraniaByGuids' => 'App\\ElektronicznyNadawca\\StructType\\GetBlankietPobraniaByGuids',
            'getBlankietPobraniaByGuidsResponse' => 'App\\ElektronicznyNadawca\\StructType\\GetBlankietPobraniaByGuidsResponse',
            'updateAccount' => 'App\\ElektronicznyNadawca\\StructType\\UpdateAccount',
            'updateAccountResponse' => 'App\\ElektronicznyNadawca\\StructType\\UpdateAccountResponse',
            'accountType' => 'App\\ElektronicznyNadawca\\StructType\\AccountType',
            'getAccountList' => 'App\\ElektronicznyNadawca\\StructType\\GetAccountList',
            'getAccountListResponse' => 'App\\ElektronicznyNadawca\\StructType\\GetAccountListResponse',
            'profilType' => 'App\\ElektronicznyNadawca\\StructType\\ProfilType',
            'getProfilList' => 'App\\ElektronicznyNadawca\\StructType\\GetProfilList',
            'getProfilListResponse' => 'App\\ElektronicznyNadawca\\StructType\\GetProfilListResponse',
            'updateProfil' => 'App\\ElektronicznyNadawca\\StructType\\UpdateProfil',
            'updateProfilResponse' => 'App\\ElektronicznyNadawca\\StructType\\UpdateProfilResponse',
            'uslugaPaczkowaType' => 'App\\ElektronicznyNadawca\\StructType\\UslugaPaczkowaType',
            'subUslugaPaczkowaType' => 'App\\ElektronicznyNadawca\\StructType\\SubUslugaPaczkowaType',
            'uslugaKurierskaType' => 'App\\ElektronicznyNadawca\\StructType\\UslugaKurierskaType',
            'subUslugaKurierskaType' => 'App\\ElektronicznyNadawca\\StructType\\SubUslugaKurierskaType',
            'createAccount' => 'App\\ElektronicznyNadawca\\StructType\\CreateAccount',
            'createAccountResponse' => 'App\\ElektronicznyNadawca\\StructType\\CreateAccountResponse',
            'createProfil' => 'App\\ElektronicznyNadawca\\StructType\\CreateProfil',
            'createProfilResponse' => 'App\\ElektronicznyNadawca\\StructType\\CreateProfilResponse',
            'potwierdzenieOdbioruPaczkowaType' => 'App\\ElektronicznyNadawca\\StructType\\PotwierdzenieOdbioruPaczkowaType',
            'zwrotDokumentowKurierskaType' => 'App\\ElektronicznyNadawca\\StructType\\ZwrotDokumentowKurierskaType',
            'potwierdzenieOdbioruKurierskaType' => 'App\\ElektronicznyNadawca\\StructType\\PotwierdzenieOdbioruKurierskaType',
            'addReklamacje' => 'App\\ElektronicznyNadawca\\StructType\\AddReklamacje',
            'addReklamacjeResponse' => 'App\\ElektronicznyNadawca\\StructType\\AddReklamacjeResponse',
            'getReklamacje' => 'App\\ElektronicznyNadawca\\StructType\\GetReklamacje',
            'getReklamacjeResponse' => 'App\\ElektronicznyNadawca\\StructType\\GetReklamacjeResponse',
            'getZapowiedziFaktur' => 'App\\ElektronicznyNadawca\\StructType\\GetZapowiedziFaktur',
            'getZapowiedziFakturResponse' => 'App\\ElektronicznyNadawca\\StructType\\GetZapowiedziFakturResponse',
            'addOdwolanieDoReklamacji' => 'App\\ElektronicznyNadawca\\StructType\\AddOdwolanieDoReklamacji',
            'addOdwolanieDoReklamacjiResponse' => 'App\\ElektronicznyNadawca\\StructType\\AddOdwolanieDoReklamacjiResponse',
            'addRozbieznoscDoZapowiedziFaktur' => 'App\\ElektronicznyNadawca\\StructType\\AddRozbieznoscDoZapowiedziFaktur',
            'addRozbieznoscDoZapowiedziFakturResponse' => 'App\\ElektronicznyNadawca\\StructType\\AddRozbieznoscDoZapowiedziFakturResponse',
            'reklamowanaPrzesylkaType' => 'App\\ElektronicznyNadawca\\StructType\\ReklamowanaPrzesylkaType',
            'powodReklamacjiType' => 'App\\ElektronicznyNadawca\\StructType\\PowodReklamacjiType',
            'reklamacjaRozpatrzonaType' => 'App\\ElektronicznyNadawca\\StructType\\ReklamacjaRozpatrzonaType',
            'getListaPowodowReklamacji' => 'App\\ElektronicznyNadawca\\StructType\\GetListaPowodowReklamacji',
            'getListaPowodowReklamacjiResponse' => 'App\\ElektronicznyNadawca\\StructType\\GetListaPowodowReklamacjiResponse',
            'powodSzczegolowyType' => 'App\\ElektronicznyNadawca\\StructType\\PowodSzczegolowyType',
            'kategoriePowodowReklamacjiType' => 'App\\ElektronicznyNadawca\\StructType\\KategoriePowodowReklamacjiType',
            'listBiznesowyType' => 'App\\ElektronicznyNadawca\\StructType\\ListBiznesowyType',
            'zamowKuriera' => 'App\\ElektronicznyNadawca\\StructType\\ZamowKuriera',
            'zamowKurieraResponse' => 'App\\ElektronicznyNadawca\\StructType\\ZamowKurieraResponse',
            'getEZDOList' => 'App\\ElektronicznyNadawca\\StructType\\GetEZDOList',
            'getEZDOListResponse' => 'App\\ElektronicznyNadawca\\StructType\\GetEZDOListResponse',
            'getEZDO' => 'App\\ElektronicznyNadawca\\StructType\\GetEZDO',
            'getEZDOResponse' => 'App\\ElektronicznyNadawca\\StructType\\GetEZDOResponse',
            'EZDOPakietType' => 'App\\ElektronicznyNadawca\\StructType\\EZDOPakietType',
            'EZDOPrzesylkaType' => 'App\\ElektronicznyNadawca\\StructType\\EZDOPrzesylkaType',
            'wplataCKPType' => 'App\\ElektronicznyNadawca\\StructType\\WplataCKPType',
            'getWplatyCKP' => 'App\\ElektronicznyNadawca\\StructType\\GetWplatyCKP',
            'getWplatyCKPResponse' => 'App\\ElektronicznyNadawca\\StructType\\GetWplatyCKPResponse',
            'globalExpresType' => 'App\\ElektronicznyNadawca\\StructType\\GlobalExpresType',
            'cancelReklamacja' => 'App\\ElektronicznyNadawca\\StructType\\CancelReklamacja',
            'cancelReklamacjaResponse' => 'App\\ElektronicznyNadawca\\StructType\\CancelReklamacjaResponse',
            'zalacznikDoReklamacjiType' => 'App\\ElektronicznyNadawca\\StructType\\ZalacznikDoReklamacjiType',
            'addZalacznikDoReklamacji' => 'App\\ElektronicznyNadawca\\StructType\\AddZalacznikDoReklamacji',
            'addZalacznikDoReklamacjiResponse' => 'App\\ElektronicznyNadawca\\StructType\\AddZalacznikDoReklamacjiResponse',
            'updateShopEZwroty' => 'App\\ElektronicznyNadawca\\StructType\\UpdateShopEZwroty',
            'updateShopEZwrotyResponse' => 'App\\ElektronicznyNadawca\\StructType\\UpdateShopEZwrotyResponse',
            'shopEZwrotyType' => 'App\\ElektronicznyNadawca\\StructType\\ShopEZwrotyType',
            'getListaZgodEZwrotow' => 'App\\ElektronicznyNadawca\\StructType\\GetListaZgodEZwrotow',
            'getListaZgodEZwrotowResponse' => 'App\\ElektronicznyNadawca\\StructType\\GetListaZgodEZwrotowResponse',
            'oczekujeNaZgodeEZwrotType' => 'App\\ElektronicznyNadawca\\StructType\\OczekujeNaZgodeEZwrotType',
            'setStatusZgodyNaEZwrot' => 'App\\ElektronicznyNadawca\\StructType\\SetStatusZgodyNaEZwrot',
            'setStatusZgodyNaEZwrotResponse' => 'App\\ElektronicznyNadawca\\StructType\\SetStatusZgodyNaEZwrotResponse',
            'statusZgodyEZwrotType' => 'App\\ElektronicznyNadawca\\StructType\\StatusZgodyEZwrotType',
            'przesylkaEZwrotPocztexType' => 'App\\ElektronicznyNadawca\\StructType\\PrzesylkaEZwrotPocztexType',
            'przesylkaEZwrotPaczkaType' => 'App\\ElektronicznyNadawca\\StructType\\PrzesylkaEZwrotPaczkaType',
            'wyslijLinkaOStatusieEZwrotu' => 'App\\ElektronicznyNadawca\\StructType\\WyslijLinkaOStatusieEZwrotu',
            'wyslijLinkaOStatusieEZwrotuResponse' => 'App\\ElektronicznyNadawca\\StructType\\WyslijLinkaOStatusieEZwrotuResponse',
            'isObszarMiasto' => 'App\\ElektronicznyNadawca\\StructType\\IsObszarMiasto',
            'isObszarMiastoResponse' => 'App\\ElektronicznyNadawca\\StructType\\IsObszarMiastoResponse',
            'obszarAdresowyType' => 'App\\ElektronicznyNadawca\\StructType\\ObszarAdresowyType',
            'obszarAdresowyResponseType' => 'App\\ElektronicznyNadawca\\StructType\\ObszarAdresowyResponseType',
            'reklamacjaInfoType' => 'App\\ElektronicznyNadawca\\StructType\\ReklamacjaInfoType',
            'setJednostkaOrganizacyjna' => 'App\\ElektronicznyNadawca\\StructType\\SetJednostkaOrganizacyjna',
            'setJednostkaOrganizacyjnaResponse' => 'App\\ElektronicznyNadawca\\StructType\\SetJednostkaOrganizacyjnaResponse',
            'jednostkaOrganizacyjnaType' => 'App\\ElektronicznyNadawca\\StructType\\JednostkaOrganizacyjnaType',
            'getJednostkaOrganizacyjna' => 'App\\ElektronicznyNadawca\\StructType\\GetJednostkaOrganizacyjna',
            'getJednostkaOrganizacyjnaResponse' => 'App\\ElektronicznyNadawca\\StructType\\GetJednostkaOrganizacyjnaResponse',
            'daneSentType' => 'App\\ElektronicznyNadawca\\StructType\\DaneSentType',
            'awizacjaType' => 'App\\ElektronicznyNadawca\\StructType\\AwizacjaType',
            'przesylkaNierejestrowanaKrajowaType' => 'App\\ElektronicznyNadawca\\StructType\\PrzesylkaNierejestrowanaKrajowaType',
            'listWartosciowyKrajowyType' => 'App\\ElektronicznyNadawca\\StructType\\ListWartosciowyKrajowyType',
            'relatedToAllegroType' => 'App\\ElektronicznyNadawca\\StructType\\RelatedToAllegroType',
            'getPrintForParcel' => 'App\\ElektronicznyNadawca\\StructType\\GetPrintForParcel',
            'getPrintForParcelResponse' => 'App\\ElektronicznyNadawca\\StructType\\GetPrintForParcelResponse',
            'PrintType' => 'App\\ElektronicznyNadawca\\StructType\\PrintType',
            'PrintResultType' => 'App\\ElektronicznyNadawca\\StructType\\PrintResultType',
            'deklaracjaCelna2Type' => 'App\\ElektronicznyNadawca\\StructType\\DeklaracjaCelna2Type',
            'DokumentyTowarzyszaceType' => 'App\\ElektronicznyNadawca\\StructType\\DokumentyTowarzyszaceType',
            'SzczegolyZawartosciPrzesylkiZagranicznejType' => 'App\\ElektronicznyNadawca\\StructType\\SzczegolyZawartosciPrzesylkiZagranicznejType',
            'dataZlozeniaType' => 'App\\ElektronicznyNadawca\\StructType\\DataZlozeniaType',
            'potwierdzenieOdbioruBiznesowaType' => 'App\\ElektronicznyNadawca\\StructType\\PotwierdzenieOdbioruBiznesowaType',
            'doreczenieBiznesowaType' => 'App\\ElektronicznyNadawca\\StructType\\DoreczenieBiznesowaType',
            'zwrotDokumentowBiznesowaType' => 'App\\ElektronicznyNadawca\\StructType\\ZwrotDokumentowBiznesowaType',
            'sposobDoreczeniaType' => 'App\\ElektronicznyNadawca\\StructType\\SposobDoreczeniaType',
            'adresKorespondencyjny' => 'App\\ElektronicznyNadawca\\StructType\\AdresKorespondencyjny',
            'produktyInKartaType' => 'App\\ElektronicznyNadawca\\StructType\\ProduktyInKartaType',
            'produktInKartaType' => 'App\\ElektronicznyNadawca\\StructType\\ProduktInKartaType',
            'eZwrotKartaType' => 'App\\ElektronicznyNadawca\\StructType\\EZwrotKartaType',
            'createShopEZwroty' => 'App\\ElektronicznyNadawca\\StructType\\CreateShopEZwroty',
            'createShopEZwrotyResponse' => 'App\\ElektronicznyNadawca\\StructType\\CreateShopEZwrotyResponse',
            'deleteShopEZwroty' => 'App\\ElektronicznyNadawca\\StructType\\DeleteShopEZwroty',
            'deleteShopEZwrotyResponse' => 'App\\ElektronicznyNadawca\\StructType\\DeleteShopEZwrotyResponse',
            'getShopEZwrotyList' => 'App\\ElektronicznyNadawca\\StructType\\GetShopEZwrotyList',
            'getShopEZwrotyListResponse' => 'App\\ElektronicznyNadawca\\StructType\\GetShopEZwrotyListResponse',
            'shopEZwrotyInfoType' => 'App\\ElektronicznyNadawca\\StructType\\ShopEZwrotyInfoType',
            'oplacaOdbiorcaType' => 'App\\ElektronicznyNadawca\\StructType\\OplacaOdbiorcaType',
            'oplacaOdbiorcaKartaType' => 'App\\ElektronicznyNadawca\\StructType\\OplacaOdbiorcaKartaType',
            'getLibrariesForLegalDeposits' => 'App\\ElektronicznyNadawca\\StructType\\GetLibrariesForLegalDeposits',
            'getLibrariesForLegalDepositsResponse' => 'App\\ElektronicznyNadawca\\StructType\\GetLibrariesForLegalDepositsResponse',
            'LibraryForLegalDepositType' => 'App\\ElektronicznyNadawca\\StructType\\LibraryForLegalDepositType',
            'CustomsDeclarationType' => 'App\\ElektronicznyNadawca\\StructType\\CustomsDeclarationType',
            'AccompanyingDocumentsType' => 'App\\ElektronicznyNadawca\\StructType\\AccompanyingDocumentsType',
            'ShipmentContentsDetailsType' => 'App\\ElektronicznyNadawca\\StructType\\ShipmentContentsDetailsType',
            'AddressType' => 'App\\ElektronicznyNadawca\\StructType\\AddressType',
            'orderEasyReturnSolutionLabel' => 'App\\ElektronicznyNadawca\\StructType\\OrderEasyReturnSolutionLabel',
            'orderEasyReturnSolutionLabelResponse' => 'App\\ElektronicznyNadawca\\StructType\\OrderEasyReturnSolutionLabelResponse',
            'DeliveryMethodType' => 'App\\ElektronicznyNadawca\\StructType\\DeliveryMethodType',
            'EmailDeliveryMethodType' => 'App\\ElektronicznyNadawca\\StructType\\EmailDeliveryMethodType',
            'pocztex2021Type' => 'App\\ElektronicznyNadawca\\StructType\\Pocztex2021Type',
            'subPocztex2021Type' => 'App\\ElektronicznyNadawca\\StructType\\SubPocztex2021Type',
            'pocztex2021KurierType' => 'App\\ElektronicznyNadawca\\StructType\\Pocztex2021KurierType',
            'pocztex2021NaDzisType' => 'App\\ElektronicznyNadawca\\StructType\\Pocztex2021NaDzisType',
            'subPocztex2021KurierType' => 'App\\ElektronicznyNadawca\\StructType\\SubPocztex2021KurierType',
            'subPocztex2021NaDzisType' => 'App\\ElektronicznyNadawca\\StructType\\SubPocztex2021NaDzisType',
            'punktOdbioruType' => 'App\\ElektronicznyNadawca\\StructType\\PunktOdbioruType',
            'potwierdzenieOdbioruPocztex2021Type' => 'App\\ElektronicznyNadawca\\StructType\\PotwierdzenieOdbioruPocztex2021Type',
            'zawartoscPocztex2021Type' => 'App\\ElektronicznyNadawca\\StructType\\ZawartoscPocztex2021Type',
            'potwierdzenieEDoreczeniaType' => 'App\\ElektronicznyNadawca\\StructType\\PotwierdzenieEDoreczeniaType',
            'punktNadaniaType' => 'App\\ElektronicznyNadawca\\StructType\\PunktNadaniaType',
            'przesylkaEZwrotPocztex2021Type' => 'App\\ElektronicznyNadawca\\StructType\\PrzesylkaEZwrotPocztex2021Type',
            'marketingowaZbiorczoType' => 'App\\ElektronicznyNadawca\\StructType\\MarketingowaZbiorczoType',
            'marketingowaZAdresemType' => 'App\\ElektronicznyNadawca\\StructType\\MarketingowaZAdresemType',
            'getPlacowkaPocztowa' => 'App\\ElektronicznyNadawca\\StructType\\GetPlacowkaPocztowa',
            'getPlacowkaPocztowaResponse' => 'App\\ElektronicznyNadawca\\StructType\\GetPlacowkaPocztowaResponse',
            'przesylkaProceduralnaType' => 'App\\ElektronicznyNadawca\\StructType\\PrzesylkaProceduralnaType',
            'getParcelContentList' => 'App\\ElektronicznyNadawca\\StructType\\GetParcelContentList',
            'getParcelContentListResponse' => 'App\\ElektronicznyNadawca\\StructType\\GetParcelContentListResponse',
            'createParcelContent' => 'App\\ElektronicznyNadawca\\StructType\\CreateParcelContent',
            'createParcelContentResponse' => 'App\\ElektronicznyNadawca\\StructType\\CreateParcelContentResponse',
            'updateParcelContent' => 'App\\ElektronicznyNadawca\\StructType\\UpdateParcelContent',
            'updateParcelContentResponse' => 'App\\ElektronicznyNadawca\\StructType\\UpdateParcelContentResponse',
            'deleteParcelContent' => 'App\\ElektronicznyNadawca\\StructType\\DeleteParcelContent',
            'deleteParcelContentResponse' => 'App\\ElektronicznyNadawca\\StructType\\DeleteParcelContentResponse',
            'parcelContentType' => 'App\\ElektronicznyNadawca\\StructType\\ParcelContentType',
            'createReturnDocumentsProfile' => 'App\\ElektronicznyNadawca\\StructType\\CreateReturnDocumentsProfile',
            'createReturnDocumentsProfileResponse' => 'App\\ElektronicznyNadawca\\StructType\\CreateReturnDocumentsProfileResponse',
            'updateReturnDocumentsProfile' => 'App\\ElektronicznyNadawca\\StructType\\UpdateReturnDocumentsProfile',
            'updateReturnDocumentsProfileResponse' => 'App\\ElektronicznyNadawca\\StructType\\UpdateReturnDocumentsProfileResponse',
            'deleteReturnDocumentsProfile' => 'App\\ElektronicznyNadawca\\StructType\\DeleteReturnDocumentsProfile',
            'deleteReturnDocumentsProfileResponse' => 'App\\ElektronicznyNadawca\\StructType\\DeleteReturnDocumentsProfileResponse',
            'getReturnDocumentsProfileList' => 'App\\ElektronicznyNadawca\\StructType\\GetReturnDocumentsProfileList',
            'getReturnDocumentsProfileListResponse' => 'App\\ElektronicznyNadawca\\StructType\\GetReturnDocumentsProfileListResponse',
            'returnDocumentProfileType' => 'App\\ElektronicznyNadawca\\StructType\\ReturnDocumentProfileType',
            'additionalActivityType' => 'App\\ElektronicznyNadawca\\StructType\\AdditionalActivityType',
            'createChecklistTemplate' => 'App\\ElektronicznyNadawca\\StructType\\CreateChecklistTemplate',
            'createChecklistTemplateResponse' => 'App\\ElektronicznyNadawca\\StructType\\CreateChecklistTemplateResponse',
            'updateChecklistTemplate' => 'App\\ElektronicznyNadawca\\StructType\\UpdateChecklistTemplate',
            'updateChecklistTemplateResponse' => 'App\\ElektronicznyNadawca\\StructType\\UpdateChecklistTemplateResponse',
            'deleteChecklistTemplate' => 'App\\ElektronicznyNadawca\\StructType\\DeleteChecklistTemplate',
            'deleteChecklistTemplateResponse' => 'App\\ElektronicznyNadawca\\StructType\\DeleteChecklistTemplateResponse',
            'getChecklistTemplateList' => 'App\\ElektronicznyNadawca\\StructType\\GetChecklistTemplateList',
            'getChecklistTemplateListResponse' => 'App\\ElektronicznyNadawca\\StructType\\GetChecklistTemplateListResponse',
            'checklistTemplateType' => 'App\\ElektronicznyNadawca\\StructType\\ChecklistTemplateType',
            'getAdditionalActivitiesList' => 'App\\ElektronicznyNadawca\\StructType\\GetAdditionalActivitiesList',
            'getAdditionalActivitiesListResponse' => 'App\\ElektronicznyNadawca\\StructType\\GetAdditionalActivitiesListResponse',
        ];
    }
}
