<?php

namespace App\ElektronicznyNadawca;

class ElektronicznyNadawca extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'addShipment' => 'App\\ElektronicznyNadawca\\addShipment',
      'addShipmentResponse' => 'App\\ElektronicznyNadawca\\addShipmentResponse',
      'przesylkaType' => 'App\\ElektronicznyNadawca\\przesylkaType',
      'changePassword' => 'App\\ElektronicznyNadawca\\changePassword',
      'changePasswordResponse' => 'App\\ElektronicznyNadawca\\changePasswordResponse',
      'paczkaPocztowaType' => 'App\\ElektronicznyNadawca\\paczkaPocztowaType',
      'przesylkaPobraniowaType' => 'App\\ElektronicznyNadawca\\przesylkaPobraniowaType',
      'przesylkaNaWarunkachSzczegolnychType' => 'App\\ElektronicznyNadawca\\przesylkaNaWarunkachSzczegolnychType',
      'przesylkaPoleconaKrajowaType' => 'App\\ElektronicznyNadawca\\przesylkaPoleconaKrajowaType',
      'przesylkaHandlowaType' => 'App\\ElektronicznyNadawca\\przesylkaHandlowaType',
      'przesylkaListowaZadeklarowanaWartoscType' => 'App\\ElektronicznyNadawca\\przesylkaListowaZadeklarowanaWartoscType',
      'przesylkaFullType' => 'App\\ElektronicznyNadawca\\przesylkaFullType',
      'errorType' => 'App\\ElektronicznyNadawca\\errorType',
      'adresType' => 'App\\ElektronicznyNadawca\\adresType',
      'sendEnvelope' => 'App\\ElektronicznyNadawca\\sendEnvelope',
      'sendEnvelopeResponseType' => 'App\\ElektronicznyNadawca\\sendEnvelopeResponseType',
      'getUrzedyNadania' => 'App\\ElektronicznyNadawca\\getUrzedyNadania',
      'getUrzedyNadaniaResponse' => 'App\\ElektronicznyNadawca\\getUrzedyNadaniaResponse',
      'clearEnvelope' => 'App\\ElektronicznyNadawca\\clearEnvelope',
      'clearEnvelopeResponse' => 'App\\ElektronicznyNadawca\\clearEnvelopeResponse',
      'urzadNadaniaFullType' => 'App\\ElektronicznyNadawca\\urzadNadaniaFullType',
      'urzadWydaniaEPrzesylkiType' => 'App\\ElektronicznyNadawca\\urzadWydaniaEPrzesylkiType',
      'pobranieType' => 'App\\ElektronicznyNadawca\\pobranieType',
      'przesylkaPoleconaZagranicznaType' => 'App\\ElektronicznyNadawca\\przesylkaPoleconaZagranicznaType',
      'przesylkaZadeklarowanaWartoscZagranicznaType' => 'App\\ElektronicznyNadawca\\przesylkaZadeklarowanaWartoscZagranicznaType',
      'getUrzedyWydajaceEPrzesylki' => 'App\\ElektronicznyNadawca\\getUrzedyWydajaceEPrzesylki',
      'getUrzedyWydajaceEPrzesylkiResponse' => 'App\\ElektronicznyNadawca\\getUrzedyWydajaceEPrzesylkiResponse',
      'uploadIWDContent' => 'App\\ElektronicznyNadawca\\uploadIWDContent',
      'getEnvelopeStatus' => 'App\\ElektronicznyNadawca\\getEnvelopeStatus',
      'getEnvelopeStatusResponse' => 'App\\ElektronicznyNadawca\\getEnvelopeStatusResponse',
      'downloadIWDContent' => 'App\\ElektronicznyNadawca\\downloadIWDContent',
      'downloadIWDContentResponse' => 'App\\ElektronicznyNadawca\\downloadIWDContentResponse',
      'przesylkaShortType' => 'App\\ElektronicznyNadawca\\przesylkaShortType',
      'addShipmentResponseItemType' => 'App\\ElektronicznyNadawca\\addShipmentResponseItemType',
      'getKarty' => 'App\\ElektronicznyNadawca\\getKarty',
      'getKartyResponse' => 'App\\ElektronicznyNadawca\\getKartyResponse',
      'getPasswordExpiredDate' => 'App\\ElektronicznyNadawca\\getPasswordExpiredDate',
      'getPasswordExpiredDateResponse' => 'App\\ElektronicznyNadawca\\getPasswordExpiredDateResponse',
      'setAktywnaKarta' => 'App\\ElektronicznyNadawca\\setAktywnaKarta',
      'setAktywnaKartaResponse' => 'App\\ElektronicznyNadawca\\setAktywnaKartaResponse',
      'getEnvelopeContentFull' => 'App\\ElektronicznyNadawca\\getEnvelopeContentFull',
      'getEnvelopeContentFullResponse' => 'App\\ElektronicznyNadawca\\getEnvelopeContentFullResponse',
      'getEnvelopeContentShort' => 'App\\ElektronicznyNadawca\\getEnvelopeContentShort',
      'getEnvelopeContentShortResponse' => 'App\\ElektronicznyNadawca\\getEnvelopeContentShortResponse',
      'hello' => 'App\\ElektronicznyNadawca\\hello',
      'helloResponse' => 'App\\ElektronicznyNadawca\\helloResponse',
      'kartaType' => 'App\\ElektronicznyNadawca\\kartaType',
      'getAddressLabel' => 'App\\ElektronicznyNadawca\\getAddressLabel',
      'getAddressLabelResponse' => 'App\\ElektronicznyNadawca\\getAddressLabelResponse',
      'addressLabelContent' => 'App\\ElektronicznyNadawca\\addressLabelContent',
      'getOutboxBook' => 'App\\ElektronicznyNadawca\\getOutboxBook',
      'getOutboxBookResponse' => 'App\\ElektronicznyNadawca\\getOutboxBookResponse',
      'getFirmowaPocztaBook' => 'App\\ElektronicznyNadawca\\getFirmowaPocztaBook',
      'getFirmowaPocztaBookResponse' => 'App\\ElektronicznyNadawca\\getFirmowaPocztaBookResponse',
      'getEnvelopeList' => 'App\\ElektronicznyNadawca\\getEnvelopeList',
      'getEnvelopeListResponse' => 'App\\ElektronicznyNadawca\\getEnvelopeListResponse',
      'envelopeInfoType' => 'App\\ElektronicznyNadawca\\envelopeInfoType',
      'przesylkaZagranicznaType' => 'App\\ElektronicznyNadawca\\przesylkaZagranicznaType',
      'przesylkaRejestrowanaType' => 'App\\ElektronicznyNadawca\\przesylkaRejestrowanaType',
      'przesylkaNieRejestrowanaType' => 'App\\ElektronicznyNadawca\\przesylkaNieRejestrowanaType',
      'przesylkaBiznesowaType' => 'App\\ElektronicznyNadawca\\przesylkaBiznesowaType',
      'subPrzesylkaBiznesowaType' => 'App\\ElektronicznyNadawca\\subPrzesylkaBiznesowaType',
      'subPrzesylkaBiznesowaPlusType' => 'App\\ElektronicznyNadawca\\subPrzesylkaBiznesowaPlusType',
      'getAddresLabelByGuid' => 'App\\ElektronicznyNadawca\\getAddresLabelByGuid',
      'getAddresLabelByGuidResponse' => 'App\\ElektronicznyNadawca\\getAddresLabelByGuidResponse',
      'przesylkaBiznesowaPlusType' => 'App\\ElektronicznyNadawca\\przesylkaBiznesowaPlusType',
      'pakietType' => 'App\\ElektronicznyNadawca\\pakietType',
      'opakowanieType' => 'App\\ElektronicznyNadawca\\opakowanieType',
      'getPlacowkiPocztowe' => 'App\\ElektronicznyNadawca\\getPlacowkiPocztowe',
      'getPlacowkiPocztoweResponse' => 'App\\ElektronicznyNadawca\\getPlacowkiPocztoweResponse',
      'getGuid' => 'App\\ElektronicznyNadawca\\getGuid',
      'getGuidResponse' => 'App\\ElektronicznyNadawca\\getGuidResponse',
      'kierunekType' => 'App\\ElektronicznyNadawca\\kierunekType',
      'getKierunki' => 'App\\ElektronicznyNadawca\\getKierunki',
      'getKierunkiResponse' => 'App\\ElektronicznyNadawca\\getKierunkiResponse',
      'getKierunkiInfo' => 'App\\ElektronicznyNadawca\\getKierunkiInfo',
      'getKierunkiInfoResponse' => 'App\\ElektronicznyNadawca\\getKierunkiInfoResponse',
      'uslugiType' => 'App\\ElektronicznyNadawca\\uslugiType',
      'deliveryPathType' => 'App\\ElektronicznyNadawca\\deliveryPathType',
      'placowkaPocztowaType' => 'App\\ElektronicznyNadawca\\placowkaPocztowaType',
      'godzinyPracyType' => 'App\\ElektronicznyNadawca\\godzinyPracyType',
      'godzinyPracyOdDoType' => 'App\\ElektronicznyNadawca\\godzinyPracyOdDoType',
      'punktWydaniaPrzesylkiBiznesowejPlus' => 'App\\ElektronicznyNadawca\\punktWydaniaPrzesylkiBiznesowejPlus',
      'getEnvelopeBufor' => 'App\\ElektronicznyNadawca\\getEnvelopeBufor',
      'getEnvelopeBuforResponse' => 'App\\ElektronicznyNadawca\\getEnvelopeBuforResponse',
      'clearEnvelopeByGuids' => 'App\\ElektronicznyNadawca\\clearEnvelopeByGuids',
      'clearEnvelopeByGuidsResponse' => 'App\\ElektronicznyNadawca\\clearEnvelopeByGuidsResponse',
      'zwrotDokumentowType' => 'App\\ElektronicznyNadawca\\zwrotDokumentowType',
      'odbiorPrzesylkiOdNadawcyType' => 'App\\ElektronicznyNadawca\\odbiorPrzesylkiOdNadawcyType',
      'potwierdzenieDoreczeniaType' => 'App\\ElektronicznyNadawca\\potwierdzenieDoreczeniaType',
      'rodzajListType' => 'App\\ElektronicznyNadawca\\rodzajListType',
      'potwierdzenieOdbioruType' => 'App\\ElektronicznyNadawca\\potwierdzenieOdbioruType',
      'doreczenieType' => 'App\\ElektronicznyNadawca\\doreczenieType',
      'doreczenieUslugaPocztowaType' => 'App\\ElektronicznyNadawca\\doreczenieUslugaPocztowaType',
      'doreczenieUslugaKurierskaType' => 'App\\ElektronicznyNadawca\\doreczenieUslugaKurierskaType',
      'paczkaZagranicznaType' => 'App\\ElektronicznyNadawca\\paczkaZagranicznaType',
      'paczkaZagranicznaPremiumType' => 'App\\ElektronicznyNadawca\\paczkaZagranicznaPremiumType',
      'setEnvelopeBuforDataNadania' => 'App\\ElektronicznyNadawca\\setEnvelopeBuforDataNadania',
      'setEnvelopeBuforDataNadaniaResponse' => 'App\\ElektronicznyNadawca\\setEnvelopeBuforDataNadaniaResponse',
      'lokalizacjaGeograficznaType' => 'App\\ElektronicznyNadawca\\lokalizacjaGeograficznaType',
      'wspolrzednaGeograficznaType' => 'App\\ElektronicznyNadawca\\wspolrzednaGeograficznaType',
      'zwrotType' => 'App\\ElektronicznyNadawca\\zwrotType',
      'listZwyklyType' => 'App\\ElektronicznyNadawca\\listZwyklyType',
      'listZwyklyFirmowyType' => 'App\\ElektronicznyNadawca\\listZwyklyFirmowyType',
      'reklamowaType' => 'App\\ElektronicznyNadawca\\reklamowaType',
      'getEPOStatus' => 'App\\ElektronicznyNadawca\\getEPOStatus',
      'getEPOStatusResponse' => 'App\\ElektronicznyNadawca\\getEPOStatusResponse',
      'EPOType' => 'App\\ElektronicznyNadawca\\EPOType',
      'EPOSimpleType' => 'App\\ElektronicznyNadawca\\EPOSimpleType',
      'EPOExtendedType' => 'App\\ElektronicznyNadawca\\EPOExtendedType',
      'przesylkaEPOType' => 'App\\ElektronicznyNadawca\\przesylkaEPOType',
      'przesylkaFirmowaPoleconaType' => 'App\\ElektronicznyNadawca\\przesylkaFirmowaPoleconaType',
      'przesylkaNierejestrowanaZNumeremType' => 'App\\ElektronicznyNadawca\\przesylkaNierejestrowanaZNumeremType',
      'EPOInfoType' => 'App\\ElektronicznyNadawca\\EPOInfoType',
      'awizoPrzesylkiType' => 'App\\ElektronicznyNadawca\\awizoPrzesylkiType',
      'doreczeniePrzesylkiType' => 'App\\ElektronicznyNadawca\\doreczeniePrzesylkiType',
      'zwrotPrzesylkiType' => 'App\\ElektronicznyNadawca\\zwrotPrzesylkiType',
      'getAddresLabelCompact' => 'App\\ElektronicznyNadawca\\getAddresLabelCompact',
      'getAddresLabelCompactResponse' => 'App\\ElektronicznyNadawca\\getAddresLabelCompactResponse',
      'getAddresLabelByGuidCompact' => 'App\\ElektronicznyNadawca\\getAddresLabelByGuidCompact',
      'getAddresLabelByGuidCompactResponse' => 'App\\ElektronicznyNadawca\\getAddresLabelByGuidCompactResponse',
      'ubezpieczenieType' => 'App\\ElektronicznyNadawca\\ubezpieczenieType',
      'EMSType' => 'App\\ElektronicznyNadawca\\EMSType',
      'getEnvelopeBuforList' => 'App\\ElektronicznyNadawca\\getEnvelopeBuforList',
      'getEnvelopeBuforListResponse' => 'App\\ElektronicznyNadawca\\getEnvelopeBuforListResponse',
      'buforType' => 'App\\ElektronicznyNadawca\\buforType',
      'createEnvelopeBufor' => 'App\\ElektronicznyNadawca\\createEnvelopeBufor',
      'createEnvelopeBuforResponse' => 'App\\ElektronicznyNadawca\\createEnvelopeBuforResponse',
      'moveShipments' => 'App\\ElektronicznyNadawca\\moveShipments',
      'moveShipmentsResponse' => 'App\\ElektronicznyNadawca\\moveShipmentsResponse',
      'updateEnvelopeBufor' => 'App\\ElektronicznyNadawca\\updateEnvelopeBufor',
      'updateEnvelopeBuforResponse' => 'App\\ElektronicznyNadawca\\updateEnvelopeBuforResponse',
      'getUbezpieczeniaInfo' => 'App\\ElektronicznyNadawca\\getUbezpieczeniaInfo',
      'getUbezpieczeniaInfoResponse' => 'App\\ElektronicznyNadawca\\getUbezpieczeniaInfoResponse',
      'ubezpieczeniaInfoType' => 'App\\ElektronicznyNadawca\\ubezpieczeniaInfoType',
      'isMiejscowa' => 'App\\ElektronicznyNadawca\\isMiejscowa',
      'isMiejscowaResponse' => 'App\\ElektronicznyNadawca\\isMiejscowaResponse',
      'trasaRequestType' => 'App\\ElektronicznyNadawca\\trasaRequestType',
      'trasaResponseType' => 'App\\ElektronicznyNadawca\\trasaResponseType',
      'deklaracjaCelnaType' => 'App\\ElektronicznyNadawca\\deklaracjaCelnaType',
      'szczegolyDeklaracjiCelnejType' => 'App\\ElektronicznyNadawca\\szczegolyDeklaracjiCelnejType',
      'przesylkaPaletowaType' => 'App\\ElektronicznyNadawca\\przesylkaPaletowaType',
      'paletaType' => 'App\\ElektronicznyNadawca\\paletaType',
      'platnikType' => 'App\\ElektronicznyNadawca\\platnikType',
      'subPrzesylkaPaletowaType' => 'App\\ElektronicznyNadawca\\subPrzesylkaPaletowaType',
      'getBlankietPobraniaByGuids' => 'App\\ElektronicznyNadawca\\getBlankietPobraniaByGuids',
      'getBlankietPobraniaByGuidsResponse' => 'App\\ElektronicznyNadawca\\getBlankietPobraniaByGuidsResponse',
      'updateAccount' => 'App\\ElektronicznyNadawca\\updateAccount',
      'updateAccountResponse' => 'App\\ElektronicznyNadawca\\updateAccountResponse',
      'accountType' => 'App\\ElektronicznyNadawca\\accountType',
      'getAccountList' => 'App\\ElektronicznyNadawca\\getAccountList',
      'getAccountListResponse' => 'App\\ElektronicznyNadawca\\getAccountListResponse',
      'profilType' => 'App\\ElektronicznyNadawca\\profilType',
      'getProfilList' => 'App\\ElektronicznyNadawca\\getProfilList',
      'getProfilListResponse' => 'App\\ElektronicznyNadawca\\getProfilListResponse',
      'updateProfil' => 'App\\ElektronicznyNadawca\\updateProfil',
      'updateProfilResponse' => 'App\\ElektronicznyNadawca\\updateProfilResponse',
      'uslugaPaczkowaType' => 'App\\ElektronicznyNadawca\\uslugaPaczkowaType',
      'subUslugaPaczkowaType' => 'App\\ElektronicznyNadawca\\subUslugaPaczkowaType',
      'uslugaKurierskaType' => 'App\\ElektronicznyNadawca\\uslugaKurierskaType',
      'subUslugaKurierskaType' => 'App\\ElektronicznyNadawca\\subUslugaKurierskaType',
      'createAccount' => 'App\\ElektronicznyNadawca\\createAccount',
      'createAccountResponse' => 'App\\ElektronicznyNadawca\\createAccountResponse',
      'createProfil' => 'App\\ElektronicznyNadawca\\createProfil',
      'createProfilResponse' => 'App\\ElektronicznyNadawca\\createProfilResponse',
      'potwierdzenieOdbioruPaczkowaType' => 'App\\ElektronicznyNadawca\\potwierdzenieOdbioruPaczkowaType',
      'zwrotDokumentowKurierskaType' => 'App\\ElektronicznyNadawca\\zwrotDokumentowKurierskaType',
      'potwierdzenieOdbioruKurierskaType' => 'App\\ElektronicznyNadawca\\potwierdzenieOdbioruKurierskaType',
      'addReklamacje' => 'App\\ElektronicznyNadawca\\addReklamacje',
      'addReklamacjeResponse' => 'App\\ElektronicznyNadawca\\addReklamacjeResponse',
      'getReklamacje' => 'App\\ElektronicznyNadawca\\getReklamacje',
      'getReklamacjeResponse' => 'App\\ElektronicznyNadawca\\getReklamacjeResponse',
      'getZapowiedziFaktur' => 'App\\ElektronicznyNadawca\\getZapowiedziFaktur',
      'getZapowiedziFakturResponse' => 'App\\ElektronicznyNadawca\\getZapowiedziFakturResponse',
      'addOdwolanieDoReklamacji' => 'App\\ElektronicznyNadawca\\addOdwolanieDoReklamacji',
      'addOdwolanieDoReklamacjiResponse' => 'App\\ElektronicznyNadawca\\addOdwolanieDoReklamacjiResponse',
      'addRozbieznoscDoZapowiedziFaktur' => 'App\\ElektronicznyNadawca\\addRozbieznoscDoZapowiedziFaktur',
      'addRozbieznoscDoZapowiedziFakturResponse' => 'App\\ElektronicznyNadawca\\addRozbieznoscDoZapowiedziFakturResponse',
      'reklamowanaPrzesylkaType' => 'App\\ElektronicznyNadawca\\reklamowanaPrzesylkaType',
      'powodReklamacjiType' => 'App\\ElektronicznyNadawca\\powodReklamacjiType',
      'reklamacjaRozpatrzonaType' => 'App\\ElektronicznyNadawca\\reklamacjaRozpatrzonaType',
      'getListaPowodowReklamacji' => 'App\\ElektronicznyNadawca\\getListaPowodowReklamacji',
      'getListaPowodowReklamacjiResponse' => 'App\\ElektronicznyNadawca\\getListaPowodowReklamacjiResponse',
      'powodSzczegolowyType' => 'App\\ElektronicznyNadawca\\powodSzczegolowyType',
      'kategoriePowodowReklamacjiType' => 'App\\ElektronicznyNadawca\\kategoriePowodowReklamacjiType',
      'listBiznesowyType' => 'App\\ElektronicznyNadawca\\listBiznesowyType',
      'zamowKuriera' => 'App\\ElektronicznyNadawca\\zamowKuriera',
      'zamowKurieraResponse' => 'App\\ElektronicznyNadawca\\zamowKurieraResponse',
      'getEZDOList' => 'App\\ElektronicznyNadawca\\getEZDOList',
      'getEZDOListResponse' => 'App\\ElektronicznyNadawca\\getEZDOListResponse',
      'getEZDO' => 'App\\ElektronicznyNadawca\\getEZDO',
      'getEZDOResponse' => 'App\\ElektronicznyNadawca\\getEZDOResponse',
      'EZDOPakietType' => 'App\\ElektronicznyNadawca\\EZDOPakietType',
      'EZDOPrzesylkaType' => 'App\\ElektronicznyNadawca\\EZDOPrzesylkaType',
      'wplataCKPType' => 'App\\ElektronicznyNadawca\\wplataCKPType',
      'getWplatyCKP' => 'App\\ElektronicznyNadawca\\getWplatyCKP',
      'getWplatyCKPResponse' => 'App\\ElektronicznyNadawca\\getWplatyCKPResponse',
      'globalExpresType' => 'App\\ElektronicznyNadawca\\globalExpresType',
      'cancelReklamacja' => 'App\\ElektronicznyNadawca\\cancelReklamacja',
      'cancelReklamacjaResponse' => 'App\\ElektronicznyNadawca\\cancelReklamacjaResponse',
      'zalacznikDoReklamacjiType' => 'App\\ElektronicznyNadawca\\zalacznikDoReklamacjiType',
      'addZalacznikDoReklamacji' => 'App\\ElektronicznyNadawca\\addZalacznikDoReklamacji',
      'addZalacznikDoReklamacjiResponse' => 'App\\ElektronicznyNadawca\\addZalacznikDoReklamacjiResponse',
      'updateShopEZwroty' => 'App\\ElektronicznyNadawca\\updateShopEZwroty',
      'updateShopEZwrotyResponse' => 'App\\ElektronicznyNadawca\\updateShopEZwrotyResponse',
      'shopEZwrotyType' => 'App\\ElektronicznyNadawca\\shopEZwrotyType',
      'getListaZgodEZwrotow' => 'App\\ElektronicznyNadawca\\getListaZgodEZwrotow',
      'getListaZgodEZwrotowResponse' => 'App\\ElektronicznyNadawca\\getListaZgodEZwrotowResponse',
      'oczekujeNaZgodeEZwrotType' => 'App\\ElektronicznyNadawca\\oczekujeNaZgodeEZwrotType',
      'setStatusZgodyNaEZwrot' => 'App\\ElektronicznyNadawca\\setStatusZgodyNaEZwrot',
      'setStatusZgodyNaEZwrotResponse' => 'App\\ElektronicznyNadawca\\setStatusZgodyNaEZwrotResponse',
      'statusZgodyEZwrotType' => 'App\\ElektronicznyNadawca\\statusZgodyEZwrotType',
      'przesylkaEZwrotPocztexType' => 'App\\ElektronicznyNadawca\\przesylkaEZwrotPocztexType',
      'przesylkaEZwrotPaczkaType' => 'App\\ElektronicznyNadawca\\przesylkaEZwrotPaczkaType',
      'wyslijLinkaOStatusieEZwrotu' => 'App\\ElektronicznyNadawca\\wyslijLinkaOStatusieEZwrotu',
      'wyslijLinkaOStatusieEZwrotuResponse' => 'App\\ElektronicznyNadawca\\wyslijLinkaOStatusieEZwrotuResponse',
      'isObszarMiasto' => 'App\\ElektronicznyNadawca\\isObszarMiasto',
      'isObszarMiastoResponse' => 'App\\ElektronicznyNadawca\\isObszarMiastoResponse',
      'obszarAdresowyType' => 'App\\ElektronicznyNadawca\\obszarAdresowyType',
      'obszarAdresowyResponseType' => 'App\\ElektronicznyNadawca\\obszarAdresowyResponseType',
      'reklamacjaInfoType' => 'App\\ElektronicznyNadawca\\reklamacjaInfoType',
      'setJednostkaOrganizacyjna' => 'App\\ElektronicznyNadawca\\setJednostkaOrganizacyjna',
      'setJednostkaOrganizacyjnaResponse' => 'App\\ElektronicznyNadawca\\setJednostkaOrganizacyjnaResponse',
      'jednostkaOrganizacyjnaType' => 'App\\ElektronicznyNadawca\\jednostkaOrganizacyjnaType',
      'getJednostkaOrganizacyjna' => 'App\\ElektronicznyNadawca\\getJednostkaOrganizacyjna',
      'getJednostkaOrganizacyjnaResponse' => 'App\\ElektronicznyNadawca\\getJednostkaOrganizacyjnaResponse',
      'daneSentType' => 'App\\ElektronicznyNadawca\\daneSentType',
      'awizacjaType' => 'App\\ElektronicznyNadawca\\awizacjaType',
      'przesylkaNierejestrowanaKrajowaType' => 'App\\ElektronicznyNadawca\\przesylkaNierejestrowanaKrajowaType',
      'listWartosciowyKrajowyType' => 'App\\ElektronicznyNadawca\\listWartosciowyKrajowyType',
      'relatedToAllegroType' => 'App\\ElektronicznyNadawca\\relatedToAllegroType',
      'getPrintForParcel' => 'App\\ElektronicznyNadawca\\getPrintForParcel',
      'getPrintForParcelResponse' => 'App\\ElektronicznyNadawca\\getPrintForParcelResponse',
      'PrintType' => 'App\\ElektronicznyNadawca\\PrintType',
      'PrintResultType' => 'App\\ElektronicznyNadawca\\PrintResultType',
      'deklaracjaCelna2Type' => 'App\\ElektronicznyNadawca\\deklaracjaCelna2Type',
      'DokumentyTowarzyszaceType' => 'App\\ElektronicznyNadawca\\DokumentyTowarzyszaceType',
      'SzczegolyZawartosciPrzesylkiZagranicznejType' => 'App\\ElektronicznyNadawca\\SzczegolyZawartosciPrzesylkiZagranicznejType',
      'dataZlozeniaType' => 'App\\ElektronicznyNadawca\\dataZlozeniaType',
      'potwierdzenieOdbioruBiznesowaType' => 'App\\ElektronicznyNadawca\\potwierdzenieOdbioruBiznesowaType',
      'doreczenieBiznesowaType' => 'App\\ElektronicznyNadawca\\doreczenieBiznesowaType',
      'zwrotDokumentowBiznesowaType' => 'App\\ElektronicznyNadawca\\zwrotDokumentowBiznesowaType',
      'sposobDoreczeniaType' => 'App\\ElektronicznyNadawca\\sposobDoreczeniaType',
      'adresKorespondencyjny' => 'App\\ElektronicznyNadawca\\adresKorespondencyjny',
      'produktyInKartaType' => 'App\\ElektronicznyNadawca\\produktyInKartaType',
      'produktInKartaType' => 'App\\ElektronicznyNadawca\\produktInKartaType',
      'eZwrotKartaType' => 'App\\ElektronicznyNadawca\\eZwrotKartaType',
      'createShopEZwroty' => 'App\\ElektronicznyNadawca\\createShopEZwroty',
      'createShopEZwrotyResponse' => 'App\\ElektronicznyNadawca\\createShopEZwrotyResponse',
      'deleteShopEZwroty' => 'App\\ElektronicznyNadawca\\deleteShopEZwroty',
      'deleteShopEZwrotyResponse' => 'App\\ElektronicznyNadawca\\deleteShopEZwrotyResponse',
      'getShopEZwrotyList' => 'App\\ElektronicznyNadawca\\getShopEZwrotyList',
      'getShopEZwrotyListResponse' => 'App\\ElektronicznyNadawca\\getShopEZwrotyListResponse',
      'shopEZwrotyInfoType' => 'App\\ElektronicznyNadawca\\shopEZwrotyInfoType',
      'oplacaOdbiorcaType' => 'App\\ElektronicznyNadawca\\oplacaOdbiorcaType',
      'oplacaOdbiorcaKartaType' => 'App\\ElektronicznyNadawca\\oplacaOdbiorcaKartaType',
      'getLibrariesForLegalDeposits' => 'App\\ElektronicznyNadawca\\getLibrariesForLegalDeposits',
      'getLibrariesForLegalDepositsResponse' => 'App\\ElektronicznyNadawca\\getLibrariesForLegalDepositsResponse',
      'LibraryForLegalDepositType' => 'App\\ElektronicznyNadawca\\LibraryForLegalDepositType',
      'CustomsDeclarationType' => 'App\\ElektronicznyNadawca\\CustomsDeclarationType',
      'AccompanyingDocumentsType' => 'App\\ElektronicznyNadawca\\AccompanyingDocumentsType',
      'ShipmentContentsDetailsType' => 'App\\ElektronicznyNadawca\\ShipmentContentsDetailsType',
      'AddressType' => 'App\\ElektronicznyNadawca\\AddressType',
      'orderEasyReturnSolutionLabel' => 'App\\ElektronicznyNadawca\\orderEasyReturnSolutionLabel',
      'orderEasyReturnSolutionLabelResponse' => 'App\\ElektronicznyNadawca\\orderEasyReturnSolutionLabelResponse',
      'DeliveryMethodType' => 'App\\ElektronicznyNadawca\\DeliveryMethodType',
      'EmailDeliveryMethodType' => 'App\\ElektronicznyNadawca\\EmailDeliveryMethodType',
      'pocztex2021Type' => 'App\\ElektronicznyNadawca\\pocztex2021Type',
      'subPocztex2021Type' => 'App\\ElektronicznyNadawca\\subPocztex2021Type',
      'pocztex2021KurierType' => 'App\\ElektronicznyNadawca\\pocztex2021KurierType',
      'pocztex2021NaDzisType' => 'App\\ElektronicznyNadawca\\pocztex2021NaDzisType',
      'subPocztex2021KurierType' => 'App\\ElektronicznyNadawca\\subPocztex2021KurierType',
      'subPocztex2021NaDzisType' => 'App\\ElektronicznyNadawca\\subPocztex2021NaDzisType',
      'punktOdbioruType' => 'App\\ElektronicznyNadawca\\punktOdbioruType',
      'potwierdzenieOdbioruPocztex2021Type' => 'App\\ElektronicznyNadawca\\potwierdzenieOdbioruPocztex2021Type',
      'zawartoscPocztex2021Type' => 'App\\ElektronicznyNadawca\\zawartoscPocztex2021Type',
      'potwierdzenieEDoreczeniaType' => 'App\\ElektronicznyNadawca\\potwierdzenieEDoreczeniaType',
      'punktNadaniaType' => 'App\\ElektronicznyNadawca\\punktNadaniaType',
      'przesylkaEZwrotPocztex2021Type' => 'App\\ElektronicznyNadawca\\przesylkaEZwrotPocztex2021Type',
      'marketingowaZbiorczoType' => 'App\\ElektronicznyNadawca\\marketingowaZbiorczoType',
      'marketingowaZAdresemType' => 'App\\ElektronicznyNadawca\\marketingowaZAdresemType',
      'getPlacowkaPocztowa' => 'App\\ElektronicznyNadawca\\getPlacowkaPocztowa',
      'getPlacowkaPocztowaResponse' => 'App\\ElektronicznyNadawca\\getPlacowkaPocztowaResponse',
      'przesylkaProceduralnaType' => 'App\\ElektronicznyNadawca\\przesylkaProceduralnaType',
      'getParcelContentList' => 'App\\ElektronicznyNadawca\\getParcelContentList',
      'getParcelContentListResponse' => 'App\\ElektronicznyNadawca\\getParcelContentListResponse',
      'createParcelContent' => 'App\\ElektronicznyNadawca\\createParcelContent',
      'createParcelContentResponse' => 'App\\ElektronicznyNadawca\\createParcelContentResponse',
      'updateParcelContent' => 'App\\ElektronicznyNadawca\\updateParcelContent',
      'updateParcelContentResponse' => 'App\\ElektronicznyNadawca\\updateParcelContentResponse',
      'deleteParcelContent' => 'App\\ElektronicznyNadawca\\deleteParcelContent',
      'deleteParcelContentResponse' => 'App\\ElektronicznyNadawca\\deleteParcelContentResponse',
      'parcelContentType' => 'App\\ElektronicznyNadawca\\parcelContentType',
      'createReturnDocumentsProfile' => 'App\\ElektronicznyNadawca\\createReturnDocumentsProfile',
      'createReturnDocumentsProfileResponse' => 'App\\ElektronicznyNadawca\\createReturnDocumentsProfileResponse',
      'updateReturnDocumentsProfile' => 'App\\ElektronicznyNadawca\\updateReturnDocumentsProfile',
      'updateReturnDocumentsProfileResponse' => 'App\\ElektronicznyNadawca\\updateReturnDocumentsProfileResponse',
      'deleteReturnDocumentsProfile' => 'App\\ElektronicznyNadawca\\deleteReturnDocumentsProfile',
      'deleteReturnDocumentsProfileResponse' => 'App\\ElektronicznyNadawca\\deleteReturnDocumentsProfileResponse',
      'getReturnDocumentsProfileList' => 'App\\ElektronicznyNadawca\\getReturnDocumentsProfileList',
      'getReturnDocumentsProfileListResponse' => 'App\\ElektronicznyNadawca\\getReturnDocumentsProfileListResponse',
      'returnDocumentProfileType' => 'App\\ElektronicznyNadawca\\returnDocumentProfileType',
      'additionalActivityType' => 'App\\ElektronicznyNadawca\\additionalActivityType',
      'createChecklistTemplate' => 'App\\ElektronicznyNadawca\\createChecklistTemplate',
      'createChecklistTemplateResponse' => 'App\\ElektronicznyNadawca\\createChecklistTemplateResponse',
      'updateChecklistTemplate' => 'App\\ElektronicznyNadawca\\updateChecklistTemplate',
      'updateChecklistTemplateResponse' => 'App\\ElektronicznyNadawca\\updateChecklistTemplateResponse',
      'deleteChecklistTemplate' => 'App\\ElektronicznyNadawca\\deleteChecklistTemplate',
      'deleteChecklistTemplateResponse' => 'App\\ElektronicznyNadawca\\deleteChecklistTemplateResponse',
      'getChecklistTemplateList' => 'App\\ElektronicznyNadawca\\getChecklistTemplateList',
      'getChecklistTemplateListResponse' => 'App\\ElektronicznyNadawca\\getChecklistTemplateListResponse',
      'checklistTemplateType' => 'App\\ElektronicznyNadawca\\checklistTemplateType',
      'getAdditionalActivitiesList' => 'App\\ElektronicznyNadawca\\getAdditionalActivitiesList',
      'getAdditionalActivitiesListResponse' => 'App\\ElektronicznyNadawca\\getAdditionalActivitiesListResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = null)
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(array (
      'features' => 1,
    ), $options);
      if (!$wsdl) {
        $wsdl = 'en.wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * @param addShipment $parameters
     * @return addShipmentResponse
     */
    public function addShipment(addShipment $parameters)
    {
      return $this->__soapCall('addShipment', array($parameters));
    }

    /**
     * @param changePassword $parameters
     * @return changePasswordResponse
     */
    public function changePassword(changePassword $parameters)
    {
      return $this->__soapCall('changePassword', array($parameters));
    }

    /**
     * @param sendEnvelope $parameters
     * @return sendEnvelopeResponseType
     */
    public function sendEnvelope(sendEnvelope $parameters)
    {
      return $this->__soapCall('sendEnvelope', array($parameters));
    }

    /**
     * @param getUrzedyNadania $parameters
     * @return getUrzedyNadaniaResponse
     */
    public function getUrzedyNadania(getUrzedyNadania $parameters)
    {
      return $this->__soapCall('getUrzedyNadania', array($parameters));
    }

    /**
     * @param clearEnvelope $parameters
     * @return clearEnvelopeResponse
     */
    public function clearEnvelope(clearEnvelope $parameters)
    {
      return $this->__soapCall('clearEnvelope', array($parameters));
    }

    /**
     * @param getUrzedyWydajaceEPrzesylki $parameters
     * @return getUrzedyWydajaceEPrzesylkiResponse
     */
    public function getUrzedyWydajaceEPrzesylki(getUrzedyWydajaceEPrzesylki $parameters)
    {
      return $this->__soapCall('getUrzedyWydajaceEPrzesylki', array($parameters));
    }

    /**
     * @param uploadIWDContent $parameters
     * @return sendEnvelopeResponseType
     */
    public function uploadIWDContent(uploadIWDContent $parameters)
    {
      return $this->__soapCall('uploadIWDContent', array($parameters));
    }

    /**
     * @param getEnvelopeStatus $parameters
     * @return getEnvelopeStatusResponse
     */
    public function getEnvelopeStatus(getEnvelopeStatus $parameters)
    {
      return $this->__soapCall('getEnvelopeStatus', array($parameters));
    }

    /**
     * @param downloadIWDContent $parameters
     * @return downloadIWDContentResponse
     */
    public function downloadIWDContent(downloadIWDContent $parameters)
    {
      return $this->__soapCall('downloadIWDContent', array($parameters));
    }

    /**
     * @param getKarty $parameters
     * @return getKartyResponse
     */
    public function getKarty(getKarty $parameters)
    {
      return $this->__soapCall('getKarty', array($parameters));
    }

    /**
     * @param getPasswordExpiredDate $parameters
     * @return getPasswordExpiredDateResponse
     */
    public function getPasswordExpiredDate(getPasswordExpiredDate $parameters)
    {
      return $this->__soapCall('getPasswordExpiredDate', array($parameters));
    }

    /**
     * @param setAktywnaKarta $parameters
     * @return setAktywnaKartaResponse
     */
    public function setAktywnaKarta(setAktywnaKarta $parameters)
    {
      return $this->__soapCall('setAktywnaKarta', array($parameters));
    }

    /**
     * @param hello $parameters
     * @return helloResponse
     */
    public function hello(hello $parameters)
    {
      return $this->__soapCall('hello', array($parameters));
    }

    /**
     * @param getEnvelopeContentShort $parameters
     * @return getEnvelopeContentShortResponse
     */
    public function getEnvelopeContentShort(getEnvelopeContentShort $parameters)
    {
      return $this->__soapCall('getEnvelopeContentShort', array($parameters));
    }

    /**
     * @param getEnvelopeContentFull $parameters
     * @return getEnvelopeContentFullResponse
     */
    public function getEnvelopeContentFull(getEnvelopeContentFull $parameters)
    {
      return $this->__soapCall('getEnvelopeContentFull', array($parameters));
    }

    /**
     * @param getAddressLabel $parameters
     * @return getAddressLabelResponse
     */
    public function getAddressLabel(getAddressLabel $parameters)
    {
      return $this->__soapCall('getAddressLabel', array($parameters));
    }

    /**
     * @param getOutboxBook $parameters
     * @return getOutboxBookResponse
     */
    public function getOutboxBook(getOutboxBook $parameters)
    {
      return $this->__soapCall('getOutboxBook', array($parameters));
    }

    /**
     * @param getFirmowaPocztaBook $parameters
     * @return getFirmowaPocztaBookResponse
     */
    public function getFirmowaPocztaBook(getFirmowaPocztaBook $parameters)
    {
      return $this->__soapCall('getFirmowaPocztaBook', array($parameters));
    }

    /**
     * @param getEnvelopeList $parameters
     * @return getEnvelopeListResponse
     */
    public function getEnvelopeList(getEnvelopeList $parameters)
    {
      return $this->__soapCall('getEnvelopeList', array($parameters));
    }

    /**
     * @param getAddresLabelByGuid $parameters
     * @return getAddresLabelByGuidResponse
     */
    public function getAddresLabelByGuid(getAddresLabelByGuid $parameters)
    {
      return $this->__soapCall('getAddresLabelByGuid', array($parameters));
    }

    /**
     * @param getPlacowkiPocztowe $parameters
     * @return getPlacowkiPocztoweResponse
     */
    public function getPlacowkiPocztowe(getPlacowkiPocztowe $parameters)
    {
      return $this->__soapCall('getPlacowkiPocztowe', array($parameters));
    }

    /**
     * @param getGuid $parameters
     * @return getGuidResponse
     */
    public function getGuid(getGuid $parameters)
    {
      return $this->__soapCall('getGuid', array($parameters));
    }

    /**
     * @param getKierunki $parameters
     * @return getKierunkiResponse
     */
    public function getKierunki(getKierunki $parameters)
    {
      return $this->__soapCall('getKierunki', array($parameters));
    }

    /**
     * @param getKierunkiInfo $parameters
     * @return getKierunkiInfoResponse
     */
    public function getKierunkiInfo(getKierunkiInfo $parameters)
    {
      return $this->__soapCall('getKierunkiInfo', array($parameters));
    }

    /**
     * @param getEnvelopeBufor $parameters
     * @return getEnvelopeBuforResponse
     */
    public function getEnvelopeBufor(getEnvelopeBufor $parameters)
    {
      return $this->__soapCall('getEnvelopeBufor', array($parameters));
    }

    /**
     * @param clearEnvelopeByGuids $parameters
     * @return clearEnvelopeByGuidsResponse
     */
    public function clearEnvelopeByGuids(clearEnvelopeByGuids $parameters)
    {
      return $this->__soapCall('clearEnvelopeByGuids', array($parameters));
    }

    /**
     * @param setEnvelopeBuforDataNadania $parameters
     * @return setEnvelopeBuforDataNadaniaResponse
     */
    public function setEnvelopeBuforDataNadania(setEnvelopeBuforDataNadania $parameters)
    {
      return $this->__soapCall('setEnvelopeBuforDataNadania', array($parameters));
    }

    /**
     * @param getEPOStatus $parameters
     * @return getEPOStatusResponse
     */
    public function getEPOStatus(getEPOStatus $parameters)
    {
      return $this->__soapCall('getEPOStatus', array($parameters));
    }

    /**
     * @param getAddresLabelCompact $parameters
     * @return getAddresLabelCompactResponse
     */
    public function getAddresLabelCompact(getAddresLabelCompact $parameters)
    {
      return $this->__soapCall('getAddresLabelCompact', array($parameters));
    }

    /**
     * @param getAddresLabelByGuidCompact $parameters
     * @return getAddresLabelByGuidCompactResponse
     */
    public function getAddresLabelByGuidCompact(getAddresLabelByGuidCompact $parameters)
    {
      return $this->__soapCall('getAddresLabelByGuidCompact', array($parameters));
    }

    /**
     * @param getEnvelopeBuforList $parameters
     * @return getEnvelopeBuforListResponse
     */
    public function getEnvelopeBuforList(getEnvelopeBuforList $parameters)
    {
      return $this->__soapCall('getEnvelopeBuforList', array($parameters));
    }

    /**
     * @param createEnvelopeBufor $parameters
     * @return createEnvelopeBuforResponse
     */
    public function createEnvelopeBufor(createEnvelopeBufor $parameters)
    {
      return $this->__soapCall('createEnvelopeBufor', array($parameters));
    }

    /**
     * @param updateEnvelopeBufor $parameters
     * @return updateEnvelopeBuforResponse
     */
    public function updateEnvelopeBufor(updateEnvelopeBufor $parameters)
    {
      return $this->__soapCall('updateEnvelopeBufor', array($parameters));
    }

    /**
     * @param moveShipments $parameters
     * @return moveShipmentsResponse
     */
    public function moveShipments(moveShipments $parameters)
    {
      return $this->__soapCall('moveShipments', array($parameters));
    }

    /**
     * @param getUbezpieczeniaInfo $parameters
     * @return getUbezpieczeniaInfoResponse
     */
    public function getUbezpieczeniaInfo(getUbezpieczeniaInfo $parameters)
    {
      return $this->__soapCall('getUbezpieczeniaInfo', array($parameters));
    }

    /**
     * @param isMiejscowa $parameters
     * @return isMiejscowaResponse
     */
    public function isMiejscowa(isMiejscowa $parameters)
    {
      return $this->__soapCall('isMiejscowa', array($parameters));
    }

    /**
     * @param getBlankietPobraniaByGuids $parameters
     * @return getBlankietPobraniaByGuidsResponse
     */
    public function getBlankietPobraniaByGuids(getBlankietPobraniaByGuids $parameters)
    {
      return $this->__soapCall('getBlankietPobraniaByGuids', array($parameters));
    }

    /**
     * @param updateAccount $parameters
     * @return updateAccountResponse
     */
    public function updateAccount(updateAccount $parameters)
    {
      return $this->__soapCall('updateAccount', array($parameters));
    }

    /**
     * @param getAccountList $parameters
     * @return getAccountListResponse
     */
    public function getAccountList(getAccountList $parameters)
    {
      return $this->__soapCall('getAccountList', array($parameters));
    }

    /**
     * @param getProfilList $parameters
     * @return getProfilListResponse
     */
    public function getProfilList(getProfilList $parameters)
    {
      return $this->__soapCall('getProfilList', array($parameters));
    }

    /**
     * @param updateProfil $parameters
     * @return updateProfilResponse
     */
    public function updateProfil(updateProfil $parameters)
    {
      return $this->__soapCall('updateProfil', array($parameters));
    }

    /**
     * @param createAccount $parameters
     * @return createAccountResponse
     */
    public function createAccount(createAccount $parameters)
    {
      return $this->__soapCall('createAccount', array($parameters));
    }

    /**
     * @param createProfil $parameters
     * @return createProfilResponse
     */
    public function createProfil(createProfil $parameters)
    {
      return $this->__soapCall('createProfil', array($parameters));
    }

    /**
     * @param addReklamacje $parameters
     * @return addReklamacjeResponse
     */
    public function addReklamacje(addReklamacje $parameters)
    {
      return $this->__soapCall('addReklamacje', array($parameters));
    }

    /**
     * @param getReklamacje $parameters
     * @return getReklamacjeResponse
     */
    public function getReklamacje(getReklamacje $parameters)
    {
      return $this->__soapCall('getReklamacje', array($parameters));
    }

    /**
     * @param addOdwolanieDoReklamacji $parameters
     * @return addOdwolanieDoReklamacjiResponse
     */
    public function addOdwolanieDoReklamacji(addOdwolanieDoReklamacji $parameters)
    {
      return $this->__soapCall('addOdwolanieDoReklamacji', array($parameters));
    }

    /**
     * @param cancelReklamacja $parameters
     * @return cancelReklamacjaResponse
     */
    public function cancelReklamacja(cancelReklamacja $parameters)
    {
      return $this->__soapCall('cancelReklamacja', array($parameters));
    }

    /**
     * @param getZapowiedziFaktur $parameters
     * @return getZapowiedziFakturResponse
     */
    public function getZapowiedziFaktur(getZapowiedziFaktur $parameters)
    {
      return $this->__soapCall('getZapowiedziFaktur', array($parameters));
    }

    /**
     * @param addRozbieznoscDoZapowiedziFaktur $parameters
     * @return addRozbieznoscDoZapowiedziFakturResponse
     */
    public function addRozbieznoscDoZapowiedziFaktur(addRozbieznoscDoZapowiedziFaktur $parameters)
    {
      return $this->__soapCall('addRozbieznoscDoZapowiedziFaktur', array($parameters));
    }

    /**
     * @param getListaPowodowReklamacji $parameters
     * @return getListaPowodowReklamacjiResponse
     */
    public function getListaPowodowReklamacji(getListaPowodowReklamacji $parameters)
    {
      return $this->__soapCall('getListaPowodowReklamacji', array($parameters));
    }

    /**
     * @param zamowKuriera $parameters
     * @return zamowKurieraResponse
     */
    public function zamowKuriera(zamowKuriera $parameters)
    {
      return $this->__soapCall('zamowKuriera', array($parameters));
    }

    /**
     * @param getEZDO $parameters
     * @return getEZDOResponse
     */
    public function getEZDO(getEZDO $parameters)
    {
      return $this->__soapCall('getEZDO', array($parameters));
    }

    /**
     * @param getEZDOList $parameters
     * @return getEZDOListResponse
     */
    public function getEZDOList(getEZDOList $parameters)
    {
      return $this->__soapCall('getEZDOList', array($parameters));
    }

    /**
     * @param getWplatyCKP $parameters
     * @return getWplatyCKPResponse
     */
    public function getWplatyCKP(getWplatyCKP $parameters)
    {
      return $this->__soapCall('getWplatyCKP', array($parameters));
    }

    /**
     * @param addZalacznikDoReklamacji $parameters
     * @return addZalacznikDoReklamacjiResponse
     */
    public function addZalacznikDoReklamacji(addZalacznikDoReklamacji $parameters)
    {
      return $this->__soapCall('addZalacznikDoReklamacji', array($parameters));
    }

    /**
     * @param updateShopEZwroty $parameters
     * @return updateShopEZwrotyResponse
     */
    public function updateShopEZwroty(updateShopEZwroty $parameters)
    {
      return $this->__soapCall('updateShopEZwroty', array($parameters));
    }

    /**
     * @param getListaZgodEZwrotow $parameters
     * @return getListaZgodEZwrotowResponse
     */
    public function getListaZgodEZwrotow(getListaZgodEZwrotow $parameters)
    {
      return $this->__soapCall('getListaZgodEZwrotow', array($parameters));
    }

    /**
     * @param setStatusZgodyNaEZwrot $parameters
     * @return setStatusZgodyNaEZwrotResponse
     */
    public function setStatusZgodyNaEZwrot(setStatusZgodyNaEZwrot $parameters)
    {
      return $this->__soapCall('setStatusZgodyNaEZwrot', array($parameters));
    }

    /**
     * @param wyslijLinkaOStatusieEZwrotu $parameters
     * @return wyslijLinkaOStatusieEZwrotuResponse
     */
    public function wyslijLinkaOStatusieEZwrotu(wyslijLinkaOStatusieEZwrotu $parameters)
    {
      return $this->__soapCall('wyslijLinkaOStatusieEZwrotu', array($parameters));
    }

    /**
     * @param isObszarMiasto $parameters
     * @return isObszarMiastoResponse
     */
    public function isObszarMiasto(isObszarMiasto $parameters)
    {
      return $this->__soapCall('isObszarMiasto', array($parameters));
    }

    /**
     * @param setJednostkaOrganizacyjna $parameters
     * @return setJednostkaOrganizacyjnaResponse
     */
    public function setJednostkaOrganizacyjna(setJednostkaOrganizacyjna $parameters)
    {
      return $this->__soapCall('setJednostkaOrganizacyjna', array($parameters));
    }

    /**
     * @param getJednostkaOrganizacyjna $parameters
     * @return getJednostkaOrganizacyjnaResponse
     */
    public function getJednostkaOrganizacyjna(getJednostkaOrganizacyjna $parameters)
    {
      return $this->__soapCall('getJednostkaOrganizacyjna', array($parameters));
    }

    /**
     * The method returns parcels printouts for passed
     * 				guid's
     *
     * @param getPrintForParcel $parameters
     * @return getPrintForParcelResponse
     */
    public function getPrintForParcel(getPrintForParcel $parameters)
    {
      return $this->__soapCall('getPrintForParcel', array($parameters));
    }

    /**
     * @param createShopEZwroty $parameters
     * @return createShopEZwrotyResponse
     */
    public function createShopEZwroty(createShopEZwroty $parameters)
    {
      return $this->__soapCall('createShopEZwroty', array($parameters));
    }

    /**
     * @param deleteShopEZwroty $parameters
     * @return deleteShopEZwrotyResponse
     */
    public function deleteShopEZwroty(deleteShopEZwroty $parameters)
    {
      return $this->__soapCall('deleteShopEZwroty', array($parameters));
    }

    /**
     * @param getShopEZwrotyList $parameters
     * @return getShopEZwrotyListResponse
     */
    public function getShopEZwrotyList(getShopEZwrotyList $parameters)
    {
      return $this->__soapCall('getShopEZwrotyList', array($parameters));
    }

    /**
     * @param getLibrariesForLegalDeposits $parameters
     * @return getLibrariesForLegalDepositsResponse
     */
    public function getLibrariesForLegalDeposits(getLibrariesForLegalDeposits $parameters)
    {
      return $this->__soapCall('getLibrariesForLegalDeposits', array($parameters));
    }

    /**
     * @param orderEasyReturnSolutionLabel $parameters
     * @return orderEasyReturnSolutionLabelResponse
     */
    public function orderEasyReturnSolutionLabel(orderEasyReturnSolutionLabel $parameters)
    {
      return $this->__soapCall('orderEasyReturnSolutionLabel', array($parameters));
    }

    /**
     * @param getPlacowkaPocztowa $parameters
     * @return getPlacowkaPocztowaResponse
     */
    public function getPlacowkaPocztowa(getPlacowkaPocztowa $parameters)
    {
      return $this->__soapCall('getPlacowkaPocztowa', array($parameters));
    }

    /**
     * @param getParcelContentList $parameters
     * @return getParcelContentListResponse
     */
    public function getParcelContentList(getParcelContentList $parameters)
    {
      return $this->__soapCall('getParcelContentList', array($parameters));
    }

    /**
     * @param createParcelContent $parameters
     * @return createParcelContentResponse
     */
    public function createParcelContent(createParcelContent $parameters)
    {
      return $this->__soapCall('createParcelContent', array($parameters));
    }

    /**
     * @param updateParcelContent $parameters
     * @return updateParcelContentResponse
     */
    public function updateParcelContent(updateParcelContent $parameters)
    {
      return $this->__soapCall('updateParcelContent', array($parameters));
    }

    /**
     * @param deleteParcelContent $parameters
     * @return deleteParcelContentResponse
     */
    public function deleteParcelContent(deleteParcelContent $parameters)
    {
      return $this->__soapCall('deleteParcelContent', array($parameters));
    }

    /**
     * @param createReturnDocumentsProfile $parameters
     * @return createReturnDocumentsProfileResponse
     */
    public function createReturnDocumentsProfile(createReturnDocumentsProfile $parameters)
    {
      return $this->__soapCall('createReturnDocumentsProfile', array($parameters));
    }

    /**
     * @param updateReturnDocumentsProfile $parameters
     * @return updateReturnDocumentsProfileResponse
     */
    public function updateReturnDocumentsProfile(updateReturnDocumentsProfile $parameters)
    {
      return $this->__soapCall('updateReturnDocumentsProfile', array($parameters));
    }

    /**
     * @param deleteReturnDocumentsProfile $parameters
     * @return deleteReturnDocumentsProfileResponse
     */
    public function deleteReturnDocumentsProfile(deleteReturnDocumentsProfile $parameters)
    {
      return $this->__soapCall('deleteReturnDocumentsProfile', array($parameters));
    }

    /**
     * @param getReturnDocumentsProfileList $parameters
     * @return getReturnDocumentsProfileListResponse
     */
    public function getReturnDocumentsProfileList(getReturnDocumentsProfileList $parameters)
    {
      return $this->__soapCall('getReturnDocumentsProfileList', array($parameters));
    }

    /**
     * @param createChecklistTemplate $parameters
     * @return createChecklistTemplateResponse
     */
    public function createChecklistTemplate(createChecklistTemplate $parameters)
    {
      return $this->__soapCall('createChecklistTemplate', array($parameters));
    }

    /**
     * @param updateChecklistTemplate $parameters
     * @return updateChecklistTemplateResponse
     */
    public function updateChecklistTemplate(updateChecklistTemplate $parameters)
    {
      return $this->__soapCall('updateChecklistTemplate', array($parameters));
    }

    /**
     * @param deleteChecklistTemplate $parameters
     * @return deleteChecklistTemplateResponse
     */
    public function deleteChecklistTemplate(deleteChecklistTemplate $parameters)
    {
      return $this->__soapCall('deleteChecklistTemplate', array($parameters));
    }

    /**
     * @param getChecklistTemplateList $parameters
     * @return getChecklistTemplateListResponse
     */
    public function getChecklistTemplateList(getChecklistTemplateList $parameters)
    {
      return $this->__soapCall('getChecklistTemplateList', array($parameters));
    }

    /**
     * @param getAdditionalActivitiesList $parameters
     * @return getAdditionalActivitiesListResponse
     */
    public function getAdditionalActivitiesList(getAdditionalActivitiesList $parameters)
    {
      return $this->__soapCall('getAdditionalActivitiesList', array($parameters));
    }

}
