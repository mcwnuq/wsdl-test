<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for all operations
 * @subpackage Services
 */
class Service extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named addShipment
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \App\ElektronicznyNadawca\StructType\AddShipment $parameters
     * @return \App\ElektronicznyNadawca\StructType\AddShipmentResponse|bool
     */
    public function addShipment(\App\ElektronicznyNadawca\StructType\AddShipment $parameters)
    {
        try {
            $this->setResult($resultAddShipment = $this->getSoapClient()->__soapCall('addShipment', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultAddShipment;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named changePassword
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \App\ElektronicznyNadawca\StructType\ChangePassword $parameters
     * @return \App\ElektronicznyNadawca\StructType\ChangePasswordResponse|bool
     */
    public function changePassword(\App\ElektronicznyNadawca\StructType\ChangePassword $parameters)
    {
        try {
            $this->setResult($resultChangePassword = $this->getSoapClient()->__soapCall('changePassword', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultChangePassword;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named sendEnvelope
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \App\ElektronicznyNadawca\StructType\SendEnvelope $parameters
     * @return \App\ElektronicznyNadawca\StructType\SendEnvelopeResponseType|bool
     */
    public function sendEnvelope(\App\ElektronicznyNadawca\StructType\SendEnvelope $parameters)
    {
        try {
            $this->setResult($resultSendEnvelope = $this->getSoapClient()->__soapCall('sendEnvelope', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSendEnvelope;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getUrzedyNadania
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \App\ElektronicznyNadawca\StructType\GetUrzedyNadania $parameters
     * @return \App\ElektronicznyNadawca\StructType\GetUrzedyNadaniaResponse|bool
     */
    public function getUrzedyNadania(\App\ElektronicznyNadawca\StructType\GetUrzedyNadania $parameters)
    {
        try {
            $this->setResult($resultGetUrzedyNadania = $this->getSoapClient()->__soapCall('getUrzedyNadania', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetUrzedyNadania;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named clearEnvelope
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \App\ElektronicznyNadawca\StructType\ClearEnvelope $parameters
     * @return \App\ElektronicznyNadawca\StructType\ClearEnvelopeResponse|bool
     */
    public function clearEnvelope(\App\ElektronicznyNadawca\StructType\ClearEnvelope $parameters)
    {
        try {
            $this->setResult($resultClearEnvelope = $this->getSoapClient()->__soapCall('clearEnvelope', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultClearEnvelope;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getUrzedyWydajaceEPrzesylki
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \App\ElektronicznyNadawca\StructType\GetUrzedyWydajaceEPrzesylki $parameters
     * @return \App\ElektronicznyNadawca\StructType\GetUrzedyWydajaceEPrzesylkiResponse|bool
     */
    public function getUrzedyWydajaceEPrzesylki(\App\ElektronicznyNadawca\StructType\GetUrzedyWydajaceEPrzesylki $parameters)
    {
        try {
            $this->setResult($resultGetUrzedyWydajaceEPrzesylki = $this->getSoapClient()->__soapCall('getUrzedyWydajaceEPrzesylki', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetUrzedyWydajaceEPrzesylki;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named uploadIWDContent
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \App\ElektronicznyNadawca\StructType\UploadIWDContent $parameters
     * @return \App\ElektronicznyNadawca\StructType\SendEnvelopeResponseType|bool
     */
    public function uploadIWDContent(\App\ElektronicznyNadawca\StructType\UploadIWDContent $parameters)
    {
        try {
            $this->setResult($resultUploadIWDContent = $this->getSoapClient()->__soapCall('uploadIWDContent', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultUploadIWDContent;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getEnvelopeStatus
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \App\ElektronicznyNadawca\StructType\GetEnvelopeStatus $parameters
     * @return \App\ElektronicznyNadawca\StructType\GetEnvelopeStatusResponse|bool
     */
    public function getEnvelopeStatus(\App\ElektronicznyNadawca\StructType\GetEnvelopeStatus $parameters)
    {
        try {
            $this->setResult($resultGetEnvelopeStatus = $this->getSoapClient()->__soapCall('getEnvelopeStatus', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetEnvelopeStatus;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named downloadIWDContent
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \App\ElektronicznyNadawca\StructType\DownloadIWDContent $parameters
     * @return \App\ElektronicznyNadawca\StructType\DownloadIWDContentResponse|bool
     */
    public function downloadIWDContent(\App\ElektronicznyNadawca\StructType\DownloadIWDContent $parameters)
    {
        try {
            $this->setResult($resultDownloadIWDContent = $this->getSoapClient()->__soapCall('downloadIWDContent', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultDownloadIWDContent;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getKarty
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \App\ElektronicznyNadawca\StructType\GetKarty $parameters
     * @return \App\ElektronicznyNadawca\StructType\GetKartyResponse|bool
     */
    public function getKarty(\App\ElektronicznyNadawca\StructType\GetKarty $parameters)
    {
        try {
            $this->setResult($resultGetKarty = $this->getSoapClient()->__soapCall('getKarty', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetKarty;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getPasswordExpiredDate
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \App\ElektronicznyNadawca\StructType\GetPasswordExpiredDate $parameters
     * @return \App\ElektronicznyNadawca\StructType\GetPasswordExpiredDateResponse|bool
     */
    public function getPasswordExpiredDate(\App\ElektronicznyNadawca\StructType\GetPasswordExpiredDate $parameters)
    {
        try {
            $this->setResult($resultGetPasswordExpiredDate = $this->getSoapClient()->__soapCall('getPasswordExpiredDate', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetPasswordExpiredDate;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named setAktywnaKarta
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \App\ElektronicznyNadawca\StructType\SetAktywnaKarta $parameters
     * @return \App\ElektronicznyNadawca\StructType\SetAktywnaKartaResponse|bool
     */
    public function setAktywnaKarta(\App\ElektronicznyNadawca\StructType\SetAktywnaKarta $parameters)
    {
        try {
            $this->setResult($resultSetAktywnaKarta = $this->getSoapClient()->__soapCall('setAktywnaKarta', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSetAktywnaKarta;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named hello
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \App\ElektronicznyNadawca\StructType\Hello $parameters
     * @return \App\ElektronicznyNadawca\StructType\HelloResponse|bool
     */
    public function hello(\App\ElektronicznyNadawca\StructType\Hello $parameters)
    {
        try {
            $this->setResult($resultHello = $this->getSoapClient()->__soapCall('hello', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultHello;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getEnvelopeContentShort
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \App\ElektronicznyNadawca\StructType\GetEnvelopeContentShort $parameters
     * @return \App\ElektronicznyNadawca\StructType\GetEnvelopeContentShortResponse|bool
     */
    public function getEnvelopeContentShort(\App\ElektronicznyNadawca\StructType\GetEnvelopeContentShort $parameters)
    {
        try {
            $this->setResult($resultGetEnvelopeContentShort = $this->getSoapClient()->__soapCall('getEnvelopeContentShort', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetEnvelopeContentShort;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getEnvelopeContentFull
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \App\ElektronicznyNadawca\StructType\GetEnvelopeContentFull $parameters
     * @return \App\ElektronicznyNadawca\StructType\GetEnvelopeContentFullResponse|bool
     */
    public function getEnvelopeContentFull(\App\ElektronicznyNadawca\StructType\GetEnvelopeContentFull $parameters)
    {
        try {
            $this->setResult($resultGetEnvelopeContentFull = $this->getSoapClient()->__soapCall('getEnvelopeContentFull', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetEnvelopeContentFull;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAddressLabel
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \App\ElektronicznyNadawca\StructType\GetAddressLabel $parameters
     * @return \App\ElektronicznyNadawca\StructType\GetAddressLabelResponse|bool
     */
    public function getAddressLabel(\App\ElektronicznyNadawca\StructType\GetAddressLabel $parameters)
    {
        try {
            $this->setResult($resultGetAddressLabel = $this->getSoapClient()->__soapCall('getAddressLabel', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAddressLabel;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getOutboxBook
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \App\ElektronicznyNadawca\StructType\GetOutboxBook $parameters
     * @return \App\ElektronicznyNadawca\StructType\GetOutboxBookResponse|bool
     */
    public function getOutboxBook(\App\ElektronicznyNadawca\StructType\GetOutboxBook $parameters)
    {
        try {
            $this->setResult($resultGetOutboxBook = $this->getSoapClient()->__soapCall('getOutboxBook', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetOutboxBook;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getFirmowaPocztaBook
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \App\ElektronicznyNadawca\StructType\GetFirmowaPocztaBook $parameters
     * @return \App\ElektronicznyNadawca\StructType\GetFirmowaPocztaBookResponse|bool
     */
    public function getFirmowaPocztaBook(\App\ElektronicznyNadawca\StructType\GetFirmowaPocztaBook $parameters)
    {
        try {
            $this->setResult($resultGetFirmowaPocztaBook = $this->getSoapClient()->__soapCall('getFirmowaPocztaBook', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetFirmowaPocztaBook;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getEnvelopeList
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \App\ElektronicznyNadawca\StructType\GetEnvelopeList $parameters
     * @return \App\ElektronicznyNadawca\StructType\GetEnvelopeListResponse|bool
     */
    public function getEnvelopeList(\App\ElektronicznyNadawca\StructType\GetEnvelopeList $parameters)
    {
        try {
            $this->setResult($resultGetEnvelopeList = $this->getSoapClient()->__soapCall('getEnvelopeList', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetEnvelopeList;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAddresLabelByGuid
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \App\ElektronicznyNadawca\StructType\GetAddresLabelByGuid $parameters
     * @return \App\ElektronicznyNadawca\StructType\GetAddresLabelByGuidResponse|bool
     */
    public function getAddresLabelByGuid(\App\ElektronicznyNadawca\StructType\GetAddresLabelByGuid $parameters)
    {
        try {
            $this->setResult($resultGetAddresLabelByGuid = $this->getSoapClient()->__soapCall('getAddresLabelByGuid', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAddresLabelByGuid;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getPlacowkiPocztowe
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \App\ElektronicznyNadawca\StructType\GetPlacowkiPocztowe $parameters
     * @return \App\ElektronicznyNadawca\StructType\GetPlacowkiPocztoweResponse|bool
     */
    public function getPlacowkiPocztowe(\App\ElektronicznyNadawca\StructType\GetPlacowkiPocztowe $parameters)
    {
        try {
            $this->setResult($resultGetPlacowkiPocztowe = $this->getSoapClient()->__soapCall('getPlacowkiPocztowe', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetPlacowkiPocztowe;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getGuid
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \App\ElektronicznyNadawca\StructType\GetGuid $parameters
     * @return \App\ElektronicznyNadawca\StructType\GetGuidResponse|bool
     */
    public function getGuid(\App\ElektronicznyNadawca\StructType\GetGuid $parameters)
    {
        try {
            $this->setResult($resultGetGuid = $this->getSoapClient()->__soapCall('getGuid', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetGuid;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getKierunki
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \App\ElektronicznyNadawca\StructType\GetKierunki $parameters
     * @return \App\ElektronicznyNadawca\StructType\GetKierunkiResponse|bool
     */
    public function getKierunki(\App\ElektronicznyNadawca\StructType\GetKierunki $parameters)
    {
        try {
            $this->setResult($resultGetKierunki = $this->getSoapClient()->__soapCall('getKierunki', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetKierunki;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getKierunkiInfo
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \App\ElektronicznyNadawca\StructType\GetKierunkiInfo $parameters
     * @return \App\ElektronicznyNadawca\StructType\GetKierunkiInfoResponse|bool
     */
    public function getKierunkiInfo(\App\ElektronicznyNadawca\StructType\GetKierunkiInfo $parameters)
    {
        try {
            $this->setResult($resultGetKierunkiInfo = $this->getSoapClient()->__soapCall('getKierunkiInfo', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetKierunkiInfo;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getEnvelopeBufor
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \App\ElektronicznyNadawca\StructType\GetEnvelopeBufor $parameters
     * @return \App\ElektronicznyNadawca\StructType\GetEnvelopeBuforResponse|bool
     */
    public function getEnvelopeBufor(\App\ElektronicznyNadawca\StructType\GetEnvelopeBufor $parameters)
    {
        try {
            $this->setResult($resultGetEnvelopeBufor = $this->getSoapClient()->__soapCall('getEnvelopeBufor', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetEnvelopeBufor;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named clearEnvelopeByGuids
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \App\ElektronicznyNadawca\StructType\ClearEnvelopeByGuids $parameters
     * @return \App\ElektronicznyNadawca\StructType\ClearEnvelopeByGuidsResponse|bool
     */
    public function clearEnvelopeByGuids(\App\ElektronicznyNadawca\StructType\ClearEnvelopeByGuids $parameters)
    {
        try {
            $this->setResult($resultClearEnvelopeByGuids = $this->getSoapClient()->__soapCall('clearEnvelopeByGuids', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultClearEnvelopeByGuids;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named setEnvelopeBuforDataNadania
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \App\ElektronicznyNadawca\StructType\SetEnvelopeBuforDataNadania $parameters
     * @return \App\ElektronicznyNadawca\StructType\SetEnvelopeBuforDataNadaniaResponse|bool
     */
    public function setEnvelopeBuforDataNadania(\App\ElektronicznyNadawca\StructType\SetEnvelopeBuforDataNadania $parameters)
    {
        try {
            $this->setResult($resultSetEnvelopeBuforDataNadania = $this->getSoapClient()->__soapCall('setEnvelopeBuforDataNadania', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSetEnvelopeBuforDataNadania;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getEPOStatus
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \App\ElektronicznyNadawca\StructType\GetEPOStatus $parameters
     * @return \App\ElektronicznyNadawca\StructType\GetEPOStatusResponse|bool
     */
    public function getEPOStatus(\App\ElektronicznyNadawca\StructType\GetEPOStatus $parameters)
    {
        try {
            $this->setResult($resultGetEPOStatus = $this->getSoapClient()->__soapCall('getEPOStatus', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetEPOStatus;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAddresLabelCompact
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \App\ElektronicznyNadawca\StructType\GetAddresLabelCompact $parameters
     * @return \App\ElektronicznyNadawca\StructType\GetAddresLabelCompactResponse|bool
     */
    public function getAddresLabelCompact(\App\ElektronicznyNadawca\StructType\GetAddresLabelCompact $parameters)
    {
        try {
            $this->setResult($resultGetAddresLabelCompact = $this->getSoapClient()->__soapCall('getAddresLabelCompact', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAddresLabelCompact;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAddresLabelByGuidCompact
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \App\ElektronicznyNadawca\StructType\GetAddresLabelByGuidCompact $parameters
     * @return \App\ElektronicznyNadawca\StructType\GetAddresLabelByGuidCompactResponse|bool
     */
    public function getAddresLabelByGuidCompact(\App\ElektronicznyNadawca\StructType\GetAddresLabelByGuidCompact $parameters)
    {
        try {
            $this->setResult($resultGetAddresLabelByGuidCompact = $this->getSoapClient()->__soapCall('getAddresLabelByGuidCompact', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAddresLabelByGuidCompact;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getEnvelopeBuforList
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \App\ElektronicznyNadawca\StructType\GetEnvelopeBuforList $parameters
     * @return \App\ElektronicznyNadawca\StructType\GetEnvelopeBuforListResponse|bool
     */
    public function getEnvelopeBuforList(\App\ElektronicznyNadawca\StructType\GetEnvelopeBuforList $parameters)
    {
        try {
            $this->setResult($resultGetEnvelopeBuforList = $this->getSoapClient()->__soapCall('getEnvelopeBuforList', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetEnvelopeBuforList;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named createEnvelopeBufor
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \App\ElektronicznyNadawca\StructType\CreateEnvelopeBufor $parameters
     * @return \App\ElektronicznyNadawca\StructType\CreateEnvelopeBuforResponse|bool
     */
    public function createEnvelopeBufor(\App\ElektronicznyNadawca\StructType\CreateEnvelopeBufor $parameters)
    {
        try {
            $this->setResult($resultCreateEnvelopeBufor = $this->getSoapClient()->__soapCall('createEnvelopeBufor', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultCreateEnvelopeBufor;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named updateEnvelopeBufor
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \App\ElektronicznyNadawca\StructType\UpdateEnvelopeBufor $parameters
     * @return \App\ElektronicznyNadawca\StructType\UpdateEnvelopeBuforResponse|bool
     */
    public function updateEnvelopeBufor(\App\ElektronicznyNadawca\StructType\UpdateEnvelopeBufor $parameters)
    {
        try {
            $this->setResult($resultUpdateEnvelopeBufor = $this->getSoapClient()->__soapCall('updateEnvelopeBufor', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultUpdateEnvelopeBufor;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named moveShipments
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \App\ElektronicznyNadawca\StructType\MoveShipments $parameters
     * @return \App\ElektronicznyNadawca\StructType\MoveShipmentsResponse|bool
     */
    public function moveShipments(\App\ElektronicznyNadawca\StructType\MoveShipments $parameters)
    {
        try {
            $this->setResult($resultMoveShipments = $this->getSoapClient()->__soapCall('moveShipments', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultMoveShipments;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getUbezpieczeniaInfo
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \App\ElektronicznyNadawca\StructType\GetUbezpieczeniaInfo $parameters
     * @return \App\ElektronicznyNadawca\StructType\GetUbezpieczeniaInfoResponse|bool
     */
    public function getUbezpieczeniaInfo(\App\ElektronicznyNadawca\StructType\GetUbezpieczeniaInfo $parameters)
    {
        try {
            $this->setResult($resultGetUbezpieczeniaInfo = $this->getSoapClient()->__soapCall('getUbezpieczeniaInfo', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetUbezpieczeniaInfo;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named isMiejscowa
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \App\ElektronicznyNadawca\StructType\IsMiejscowa $parameters
     * @return \App\ElektronicznyNadawca\StructType\IsMiejscowaResponse|bool
     */
    public function isMiejscowa(\App\ElektronicznyNadawca\StructType\IsMiejscowa $parameters)
    {
        try {
            $this->setResult($resultIsMiejscowa = $this->getSoapClient()->__soapCall('isMiejscowa', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultIsMiejscowa;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getBlankietPobraniaByGuids
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \App\ElektronicznyNadawca\StructType\GetBlankietPobraniaByGuids $parameters
     * @return \App\ElektronicznyNadawca\StructType\GetBlankietPobraniaByGuidsResponse|bool
     */
    public function getBlankietPobraniaByGuids(\App\ElektronicznyNadawca\StructType\GetBlankietPobraniaByGuids $parameters)
    {
        try {
            $this->setResult($resultGetBlankietPobraniaByGuids = $this->getSoapClient()->__soapCall('getBlankietPobraniaByGuids', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetBlankietPobraniaByGuids;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named updateAccount
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \App\ElektronicznyNadawca\StructType\UpdateAccount $parameters
     * @return \App\ElektronicznyNadawca\StructType\UpdateAccountResponse|bool
     */
    public function updateAccount(\App\ElektronicznyNadawca\StructType\UpdateAccount $parameters)
    {
        try {
            $this->setResult($resultUpdateAccount = $this->getSoapClient()->__soapCall('updateAccount', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultUpdateAccount;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAccountList
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \App\ElektronicznyNadawca\StructType\GetAccountList $parameters
     * @return \App\ElektronicznyNadawca\StructType\GetAccountListResponse|bool
     */
    public function getAccountList(\App\ElektronicznyNadawca\StructType\GetAccountList $parameters)
    {
        try {
            $this->setResult($resultGetAccountList = $this->getSoapClient()->__soapCall('getAccountList', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAccountList;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getProfilList
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \App\ElektronicznyNadawca\StructType\GetProfilList $parameters
     * @return \App\ElektronicznyNadawca\StructType\GetProfilListResponse|bool
     */
    public function getProfilList(\App\ElektronicznyNadawca\StructType\GetProfilList $parameters)
    {
        try {
            $this->setResult($resultGetProfilList = $this->getSoapClient()->__soapCall('getProfilList', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetProfilList;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named updateProfil
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \App\ElektronicznyNadawca\StructType\UpdateProfil $parameters
     * @return \App\ElektronicznyNadawca\StructType\UpdateProfilResponse|bool
     */
    public function updateProfil(\App\ElektronicznyNadawca\StructType\UpdateProfil $parameters)
    {
        try {
            $this->setResult($resultUpdateProfil = $this->getSoapClient()->__soapCall('updateProfil', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultUpdateProfil;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named createAccount
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \App\ElektronicznyNadawca\StructType\CreateAccount $parameters
     * @return \App\ElektronicznyNadawca\StructType\CreateAccountResponse|bool
     */
    public function createAccount(\App\ElektronicznyNadawca\StructType\CreateAccount $parameters)
    {
        try {
            $this->setResult($resultCreateAccount = $this->getSoapClient()->__soapCall('createAccount', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultCreateAccount;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named createProfil
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \App\ElektronicznyNadawca\StructType\CreateProfil $parameters
     * @return \App\ElektronicznyNadawca\StructType\CreateProfilResponse|bool
     */
    public function createProfil(\App\ElektronicznyNadawca\StructType\CreateProfil $parameters)
    {
        try {
            $this->setResult($resultCreateProfil = $this->getSoapClient()->__soapCall('createProfil', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultCreateProfil;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named addReklamacje
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \App\ElektronicznyNadawca\StructType\AddReklamacje $parameters
     * @return \App\ElektronicznyNadawca\StructType\AddReklamacjeResponse|bool
     */
    public function addReklamacje(\App\ElektronicznyNadawca\StructType\AddReklamacje $parameters)
    {
        try {
            $this->setResult($resultAddReklamacje = $this->getSoapClient()->__soapCall('addReklamacje', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultAddReklamacje;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getReklamacje
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \App\ElektronicznyNadawca\StructType\GetReklamacje $parameters
     * @return \App\ElektronicznyNadawca\StructType\GetReklamacjeResponse|bool
     */
    public function getReklamacje(\App\ElektronicznyNadawca\StructType\GetReklamacje $parameters)
    {
        try {
            $this->setResult($resultGetReklamacje = $this->getSoapClient()->__soapCall('getReklamacje', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetReklamacje;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named addOdwolanieDoReklamacji
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \App\ElektronicznyNadawca\StructType\AddOdwolanieDoReklamacji $parameters
     * @return \App\ElektronicznyNadawca\StructType\AddOdwolanieDoReklamacjiResponse|bool
     */
    public function addOdwolanieDoReklamacji(\App\ElektronicznyNadawca\StructType\AddOdwolanieDoReklamacji $parameters)
    {
        try {
            $this->setResult($resultAddOdwolanieDoReklamacji = $this->getSoapClient()->__soapCall('addOdwolanieDoReklamacji', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultAddOdwolanieDoReklamacji;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named cancelReklamacja
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \App\ElektronicznyNadawca\StructType\CancelReklamacja $parameters
     * @return \App\ElektronicznyNadawca\StructType\CancelReklamacjaResponse|bool
     */
    public function cancelReklamacja(\App\ElektronicznyNadawca\StructType\CancelReklamacja $parameters)
    {
        try {
            $this->setResult($resultCancelReklamacja = $this->getSoapClient()->__soapCall('cancelReklamacja', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultCancelReklamacja;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getZapowiedziFaktur
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \App\ElektronicznyNadawca\StructType\GetZapowiedziFaktur $parameters
     * @return \App\ElektronicznyNadawca\StructType\GetZapowiedziFakturResponse|bool
     */
    public function getZapowiedziFaktur(\App\ElektronicznyNadawca\StructType\GetZapowiedziFaktur $parameters)
    {
        try {
            $this->setResult($resultGetZapowiedziFaktur = $this->getSoapClient()->__soapCall('getZapowiedziFaktur', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetZapowiedziFaktur;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named addRozbieznoscDoZapowiedziFaktur
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \App\ElektronicznyNadawca\StructType\AddRozbieznoscDoZapowiedziFaktur $parameters
     * @return \App\ElektronicznyNadawca\StructType\AddRozbieznoscDoZapowiedziFakturResponse|bool
     */
    public function addRozbieznoscDoZapowiedziFaktur(\App\ElektronicznyNadawca\StructType\AddRozbieznoscDoZapowiedziFaktur $parameters)
    {
        try {
            $this->setResult($resultAddRozbieznoscDoZapowiedziFaktur = $this->getSoapClient()->__soapCall('addRozbieznoscDoZapowiedziFaktur', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultAddRozbieznoscDoZapowiedziFaktur;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getListaPowodowReklamacji
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \App\ElektronicznyNadawca\StructType\GetListaPowodowReklamacji $parameters
     * @return \App\ElektronicznyNadawca\StructType\GetListaPowodowReklamacjiResponse|bool
     */
    public function getListaPowodowReklamacji(\App\ElektronicznyNadawca\StructType\GetListaPowodowReklamacji $parameters)
    {
        try {
            $this->setResult($resultGetListaPowodowReklamacji = $this->getSoapClient()->__soapCall('getListaPowodowReklamacji', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetListaPowodowReklamacji;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named zamowKuriera
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \App\ElektronicznyNadawca\StructType\ZamowKuriera $parameters
     * @return \App\ElektronicznyNadawca\StructType\ZamowKurieraResponse|bool
     */
    public function zamowKuriera(\App\ElektronicznyNadawca\StructType\ZamowKuriera $parameters)
    {
        try {
            $this->setResult($resultZamowKuriera = $this->getSoapClient()->__soapCall('zamowKuriera', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultZamowKuriera;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getEZDO
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \App\ElektronicznyNadawca\StructType\GetEZDO $parameters
     * @return \App\ElektronicznyNadawca\StructType\GetEZDOResponse|bool
     */
    public function getEZDO(\App\ElektronicznyNadawca\StructType\GetEZDO $parameters)
    {
        try {
            $this->setResult($resultGetEZDO = $this->getSoapClient()->__soapCall('getEZDO', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetEZDO;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getEZDOList
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \App\ElektronicznyNadawca\StructType\GetEZDOList $parameters
     * @return \App\ElektronicznyNadawca\StructType\GetEZDOListResponse|bool
     */
    public function getEZDOList(\App\ElektronicznyNadawca\StructType\GetEZDOList $parameters)
    {
        try {
            $this->setResult($resultGetEZDOList = $this->getSoapClient()->__soapCall('getEZDOList', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetEZDOList;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getWplatyCKP
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \App\ElektronicznyNadawca\StructType\GetWplatyCKP $parameters
     * @return \App\ElektronicznyNadawca\StructType\GetWplatyCKPResponse|bool
     */
    public function getWplatyCKP(\App\ElektronicznyNadawca\StructType\GetWplatyCKP $parameters)
    {
        try {
            $this->setResult($resultGetWplatyCKP = $this->getSoapClient()->__soapCall('getWplatyCKP', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetWplatyCKP;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named addZalacznikDoReklamacji
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \App\ElektronicznyNadawca\StructType\AddZalacznikDoReklamacji $parameters
     * @return \App\ElektronicznyNadawca\StructType\AddZalacznikDoReklamacjiResponse|bool
     */
    public function addZalacznikDoReklamacji(\App\ElektronicznyNadawca\StructType\AddZalacznikDoReklamacji $parameters)
    {
        try {
            $this->setResult($resultAddZalacznikDoReklamacji = $this->getSoapClient()->__soapCall('addZalacznikDoReklamacji', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultAddZalacznikDoReklamacji;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named updateShopEZwroty
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \App\ElektronicznyNadawca\StructType\UpdateShopEZwroty $parameters
     * @return \App\ElektronicznyNadawca\StructType\UpdateShopEZwrotyResponse|bool
     */
    public function updateShopEZwroty(\App\ElektronicznyNadawca\StructType\UpdateShopEZwroty $parameters)
    {
        try {
            $this->setResult($resultUpdateShopEZwroty = $this->getSoapClient()->__soapCall('updateShopEZwroty', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultUpdateShopEZwroty;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getListaZgodEZwrotow
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \App\ElektronicznyNadawca\StructType\GetListaZgodEZwrotow $parameters
     * @return \App\ElektronicznyNadawca\StructType\GetListaZgodEZwrotowResponse|bool
     */
    public function getListaZgodEZwrotow(\App\ElektronicznyNadawca\StructType\GetListaZgodEZwrotow $parameters)
    {
        try {
            $this->setResult($resultGetListaZgodEZwrotow = $this->getSoapClient()->__soapCall('getListaZgodEZwrotow', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetListaZgodEZwrotow;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named setStatusZgodyNaEZwrot
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \App\ElektronicznyNadawca\StructType\SetStatusZgodyNaEZwrot $parameters
     * @return \App\ElektronicznyNadawca\StructType\SetStatusZgodyNaEZwrotResponse|bool
     */
    public function setStatusZgodyNaEZwrot(\App\ElektronicznyNadawca\StructType\SetStatusZgodyNaEZwrot $parameters)
    {
        try {
            $this->setResult($resultSetStatusZgodyNaEZwrot = $this->getSoapClient()->__soapCall('setStatusZgodyNaEZwrot', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSetStatusZgodyNaEZwrot;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named wyslijLinkaOStatusieEZwrotu
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \App\ElektronicznyNadawca\StructType\WyslijLinkaOStatusieEZwrotu $parameters
     * @return \App\ElektronicznyNadawca\StructType\WyslijLinkaOStatusieEZwrotuResponse|bool
     */
    public function wyslijLinkaOStatusieEZwrotu(\App\ElektronicznyNadawca\StructType\WyslijLinkaOStatusieEZwrotu $parameters)
    {
        try {
            $this->setResult($resultWyslijLinkaOStatusieEZwrotu = $this->getSoapClient()->__soapCall('wyslijLinkaOStatusieEZwrotu', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultWyslijLinkaOStatusieEZwrotu;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named isObszarMiasto
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \App\ElektronicznyNadawca\StructType\IsObszarMiasto $parameters
     * @return \App\ElektronicznyNadawca\StructType\IsObszarMiastoResponse|bool
     */
    public function isObszarMiasto(\App\ElektronicznyNadawca\StructType\IsObszarMiasto $parameters)
    {
        try {
            $this->setResult($resultIsObszarMiasto = $this->getSoapClient()->__soapCall('isObszarMiasto', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultIsObszarMiasto;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named setJednostkaOrganizacyjna
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \App\ElektronicznyNadawca\StructType\SetJednostkaOrganizacyjna $parameters
     * @return \App\ElektronicznyNadawca\StructType\SetJednostkaOrganizacyjnaResponse|bool
     */
    public function setJednostkaOrganizacyjna(\App\ElektronicznyNadawca\StructType\SetJednostkaOrganizacyjna $parameters)
    {
        try {
            $this->setResult($resultSetJednostkaOrganizacyjna = $this->getSoapClient()->__soapCall('setJednostkaOrganizacyjna', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSetJednostkaOrganizacyjna;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getJednostkaOrganizacyjna
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \App\ElektronicznyNadawca\StructType\GetJednostkaOrganizacyjna $parameters
     * @return \App\ElektronicznyNadawca\StructType\GetJednostkaOrganizacyjnaResponse|bool
     */
    public function getJednostkaOrganizacyjna(\App\ElektronicznyNadawca\StructType\GetJednostkaOrganizacyjna $parameters)
    {
        try {
            $this->setResult($resultGetJednostkaOrganizacyjna = $this->getSoapClient()->__soapCall('getJednostkaOrganizacyjna', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetJednostkaOrganizacyjna;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getPrintForParcel
     * Meta information extracted from the WSDL
     * - documentation: The method returns parcels printouts for passed guid's
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \App\ElektronicznyNadawca\StructType\GetPrintForParcel $parameters
     * @return \App\ElektronicznyNadawca\StructType\GetPrintForParcelResponse|bool
     */
    public function getPrintForParcel(\App\ElektronicznyNadawca\StructType\GetPrintForParcel $parameters)
    {
        try {
            $this->setResult($resultGetPrintForParcel = $this->getSoapClient()->__soapCall('getPrintForParcel', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetPrintForParcel;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named createShopEZwroty
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \App\ElektronicznyNadawca\StructType\CreateShopEZwroty $parameters
     * @return \App\ElektronicznyNadawca\StructType\CreateShopEZwrotyResponse|bool
     */
    public function createShopEZwroty(\App\ElektronicznyNadawca\StructType\CreateShopEZwroty $parameters)
    {
        try {
            $this->setResult($resultCreateShopEZwroty = $this->getSoapClient()->__soapCall('createShopEZwroty', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultCreateShopEZwroty;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteShopEZwroty
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \App\ElektronicznyNadawca\StructType\DeleteShopEZwroty $parameters
     * @return \App\ElektronicznyNadawca\StructType\DeleteShopEZwrotyResponse|bool
     */
    public function deleteShopEZwroty(\App\ElektronicznyNadawca\StructType\DeleteShopEZwroty $parameters)
    {
        try {
            $this->setResult($resultDeleteShopEZwroty = $this->getSoapClient()->__soapCall('deleteShopEZwroty', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteShopEZwroty;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getShopEZwrotyList
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \App\ElektronicznyNadawca\StructType\GetShopEZwrotyList $parameters
     * @return \App\ElektronicznyNadawca\StructType\GetShopEZwrotyListResponse|bool
     */
    public function getShopEZwrotyList(\App\ElektronicznyNadawca\StructType\GetShopEZwrotyList $parameters)
    {
        try {
            $this->setResult($resultGetShopEZwrotyList = $this->getSoapClient()->__soapCall('getShopEZwrotyList', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetShopEZwrotyList;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getLibrariesForLegalDeposits
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \App\ElektronicznyNadawca\StructType\GetLibrariesForLegalDeposits $parameters
     * @return \App\ElektronicznyNadawca\StructType\GetLibrariesForLegalDepositsResponse|bool
     */
    public function getLibrariesForLegalDeposits(\App\ElektronicznyNadawca\StructType\GetLibrariesForLegalDeposits $parameters)
    {
        try {
            $this->setResult($resultGetLibrariesForLegalDeposits = $this->getSoapClient()->__soapCall('getLibrariesForLegalDeposits', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetLibrariesForLegalDeposits;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named orderEasyReturnSolutionLabel
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \App\ElektronicznyNadawca\StructType\OrderEasyReturnSolutionLabel $parameters
     * @return \App\ElektronicznyNadawca\StructType\OrderEasyReturnSolutionLabelResponse|bool
     */
    public function orderEasyReturnSolutionLabel(\App\ElektronicznyNadawca\StructType\OrderEasyReturnSolutionLabel $parameters)
    {
        try {
            $this->setResult($resultOrderEasyReturnSolutionLabel = $this->getSoapClient()->__soapCall('orderEasyReturnSolutionLabel', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultOrderEasyReturnSolutionLabel;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getPlacowkaPocztowa
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \App\ElektronicznyNadawca\StructType\GetPlacowkaPocztowa $parameters
     * @return \App\ElektronicznyNadawca\StructType\GetPlacowkaPocztowaResponse|bool
     */
    public function getPlacowkaPocztowa(\App\ElektronicznyNadawca\StructType\GetPlacowkaPocztowa $parameters)
    {
        try {
            $this->setResult($resultGetPlacowkaPocztowa = $this->getSoapClient()->__soapCall('getPlacowkaPocztowa', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetPlacowkaPocztowa;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getParcelContentList
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \App\ElektronicznyNadawca\StructType\GetParcelContentList $parameters
     * @return \App\ElektronicznyNadawca\StructType\GetParcelContentListResponse|bool
     */
    public function getParcelContentList(\App\ElektronicznyNadawca\StructType\GetParcelContentList $parameters)
    {
        try {
            $this->setResult($resultGetParcelContentList = $this->getSoapClient()->__soapCall('getParcelContentList', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetParcelContentList;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named createParcelContent
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \App\ElektronicznyNadawca\StructType\CreateParcelContent $parameters
     * @return \App\ElektronicznyNadawca\StructType\CreateParcelContentResponse|bool
     */
    public function createParcelContent(\App\ElektronicznyNadawca\StructType\CreateParcelContent $parameters)
    {
        try {
            $this->setResult($resultCreateParcelContent = $this->getSoapClient()->__soapCall('createParcelContent', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultCreateParcelContent;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named updateParcelContent
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \App\ElektronicznyNadawca\StructType\UpdateParcelContent $parameters
     * @return \App\ElektronicznyNadawca\StructType\UpdateParcelContentResponse|bool
     */
    public function updateParcelContent(\App\ElektronicznyNadawca\StructType\UpdateParcelContent $parameters)
    {
        try {
            $this->setResult($resultUpdateParcelContent = $this->getSoapClient()->__soapCall('updateParcelContent', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultUpdateParcelContent;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteParcelContent
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \App\ElektronicznyNadawca\StructType\DeleteParcelContent $parameters
     * @return \App\ElektronicznyNadawca\StructType\DeleteParcelContentResponse|bool
     */
    public function deleteParcelContent(\App\ElektronicznyNadawca\StructType\DeleteParcelContent $parameters)
    {
        try {
            $this->setResult($resultDeleteParcelContent = $this->getSoapClient()->__soapCall('deleteParcelContent', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteParcelContent;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named createReturnDocumentsProfile
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \App\ElektronicznyNadawca\StructType\CreateReturnDocumentsProfile $parameters
     * @return \App\ElektronicznyNadawca\StructType\CreateReturnDocumentsProfileResponse|bool
     */
    public function createReturnDocumentsProfile(\App\ElektronicznyNadawca\StructType\CreateReturnDocumentsProfile $parameters)
    {
        try {
            $this->setResult($resultCreateReturnDocumentsProfile = $this->getSoapClient()->__soapCall('createReturnDocumentsProfile', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultCreateReturnDocumentsProfile;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named updateReturnDocumentsProfile
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \App\ElektronicznyNadawca\StructType\UpdateReturnDocumentsProfile $parameters
     * @return \App\ElektronicznyNadawca\StructType\UpdateReturnDocumentsProfileResponse|bool
     */
    public function updateReturnDocumentsProfile(\App\ElektronicznyNadawca\StructType\UpdateReturnDocumentsProfile $parameters)
    {
        try {
            $this->setResult($resultUpdateReturnDocumentsProfile = $this->getSoapClient()->__soapCall('updateReturnDocumentsProfile', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultUpdateReturnDocumentsProfile;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteReturnDocumentsProfile
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \App\ElektronicznyNadawca\StructType\DeleteReturnDocumentsProfile $parameters
     * @return \App\ElektronicznyNadawca\StructType\DeleteReturnDocumentsProfileResponse|bool
     */
    public function deleteReturnDocumentsProfile(\App\ElektronicznyNadawca\StructType\DeleteReturnDocumentsProfile $parameters)
    {
        try {
            $this->setResult($resultDeleteReturnDocumentsProfile = $this->getSoapClient()->__soapCall('deleteReturnDocumentsProfile', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteReturnDocumentsProfile;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getReturnDocumentsProfileList
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \App\ElektronicznyNadawca\StructType\GetReturnDocumentsProfileList $parameters
     * @return \App\ElektronicznyNadawca\StructType\GetReturnDocumentsProfileListResponse|bool
     */
    public function getReturnDocumentsProfileList(\App\ElektronicznyNadawca\StructType\GetReturnDocumentsProfileList $parameters)
    {
        try {
            $this->setResult($resultGetReturnDocumentsProfileList = $this->getSoapClient()->__soapCall('getReturnDocumentsProfileList', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetReturnDocumentsProfileList;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named createChecklistTemplate
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \App\ElektronicznyNadawca\StructType\CreateChecklistTemplate $parameters
     * @return \App\ElektronicznyNadawca\StructType\CreateChecklistTemplateResponse|bool
     */
    public function createChecklistTemplate(\App\ElektronicznyNadawca\StructType\CreateChecklistTemplate $parameters)
    {
        try {
            $this->setResult($resultCreateChecklistTemplate = $this->getSoapClient()->__soapCall('createChecklistTemplate', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultCreateChecklistTemplate;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named updateChecklistTemplate
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \App\ElektronicznyNadawca\StructType\UpdateChecklistTemplate $parameters
     * @return \App\ElektronicznyNadawca\StructType\UpdateChecklistTemplateResponse|bool
     */
    public function updateChecklistTemplate(\App\ElektronicznyNadawca\StructType\UpdateChecklistTemplate $parameters)
    {
        try {
            $this->setResult($resultUpdateChecklistTemplate = $this->getSoapClient()->__soapCall('updateChecklistTemplate', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultUpdateChecklistTemplate;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteChecklistTemplate
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \App\ElektronicznyNadawca\StructType\DeleteChecklistTemplate $parameters
     * @return \App\ElektronicznyNadawca\StructType\DeleteChecklistTemplateResponse|bool
     */
    public function deleteChecklistTemplate(\App\ElektronicznyNadawca\StructType\DeleteChecklistTemplate $parameters)
    {
        try {
            $this->setResult($resultDeleteChecklistTemplate = $this->getSoapClient()->__soapCall('deleteChecklistTemplate', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteChecklistTemplate;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getChecklistTemplateList
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \App\ElektronicznyNadawca\StructType\GetChecklistTemplateList $parameters
     * @return \App\ElektronicznyNadawca\StructType\GetChecklistTemplateListResponse|bool
     */
    public function getChecklistTemplateList(\App\ElektronicznyNadawca\StructType\GetChecklistTemplateList $parameters)
    {
        try {
            $this->setResult($resultGetChecklistTemplateList = $this->getSoapClient()->__soapCall('getChecklistTemplateList', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetChecklistTemplateList;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAdditionalActivitiesList
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \App\ElektronicznyNadawca\StructType\GetAdditionalActivitiesList $parameters
     * @return \App\ElektronicznyNadawca\StructType\GetAdditionalActivitiesListResponse|bool
     */
    public function getAdditionalActivitiesList(\App\ElektronicznyNadawca\StructType\GetAdditionalActivitiesList $parameters)
    {
        try {
            $this->setResult($resultGetAdditionalActivitiesList = $this->getSoapClient()->__soapCall('getAdditionalActivitiesList', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAdditionalActivitiesList;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \App\ElektronicznyNadawca\StructType\AddOdwolanieDoReklamacjiResponse|\App\ElektronicznyNadawca\StructType\AddReklamacjeResponse|\App\ElektronicznyNadawca\StructType\AddRozbieznoscDoZapowiedziFakturResponse|\App\ElektronicznyNadawca\StructType\AddShipmentResponse|\App\ElektronicznyNadawca\StructType\AddZalacznikDoReklamacjiResponse|\App\ElektronicznyNadawca\StructType\CancelReklamacjaResponse|\App\ElektronicznyNadawca\StructType\ChangePasswordResponse|\App\ElektronicznyNadawca\StructType\ClearEnvelopeByGuidsResponse|\App\ElektronicznyNadawca\StructType\ClearEnvelopeResponse|\App\ElektronicznyNadawca\StructType\CreateAccountResponse|\App\ElektronicznyNadawca\StructType\CreateChecklistTemplateResponse|\App\ElektronicznyNadawca\StructType\CreateEnvelopeBuforResponse|\App\ElektronicznyNadawca\StructType\CreateParcelContentResponse|\App\ElektronicznyNadawca\StructType\CreateProfilResponse|\App\ElektronicznyNadawca\StructType\CreateReturnDocumentsProfileResponse|\App\ElektronicznyNadawca\StructType\CreateShopEZwrotyResponse|\App\ElektronicznyNadawca\StructType\DeleteChecklistTemplateResponse|\App\ElektronicznyNadawca\StructType\DeleteParcelContentResponse|\App\ElektronicznyNadawca\StructType\DeleteReturnDocumentsProfileResponse|\App\ElektronicznyNadawca\StructType\DeleteShopEZwrotyResponse|\App\ElektronicznyNadawca\StructType\DownloadIWDContentResponse|\App\ElektronicznyNadawca\StructType\GetAccountListResponse|\App\ElektronicznyNadawca\StructType\GetAdditionalActivitiesListResponse|\App\ElektronicznyNadawca\StructType\GetAddresLabelByGuidCompactResponse|\App\ElektronicznyNadawca\StructType\GetAddresLabelByGuidResponse|\App\ElektronicznyNadawca\StructType\GetAddresLabelCompactResponse|\App\ElektronicznyNadawca\StructType\GetAddressLabelResponse|\App\ElektronicznyNadawca\StructType\GetBlankietPobraniaByGuidsResponse|\App\ElektronicznyNadawca\StructType\GetChecklistTemplateListResponse|\App\ElektronicznyNadawca\StructType\GetEnvelopeBuforListResponse|\App\ElektronicznyNadawca\StructType\GetEnvelopeBuforResponse|\App\ElektronicznyNadawca\StructType\GetEnvelopeContentFullResponse|\App\ElektronicznyNadawca\StructType\GetEnvelopeContentShortResponse|\App\ElektronicznyNadawca\StructType\GetEnvelopeListResponse|\App\ElektronicznyNadawca\StructType\GetEnvelopeStatusResponse|\App\ElektronicznyNadawca\StructType\GetEPOStatusResponse|\App\ElektronicznyNadawca\StructType\GetEZDOListResponse|\App\ElektronicznyNadawca\StructType\GetEZDOResponse|\App\ElektronicznyNadawca\StructType\GetFirmowaPocztaBookResponse|\App\ElektronicznyNadawca\StructType\GetGuidResponse|\App\ElektronicznyNadawca\StructType\GetJednostkaOrganizacyjnaResponse|\App\ElektronicznyNadawca\StructType\GetKartyResponse|\App\ElektronicznyNadawca\StructType\GetKierunkiInfoResponse|\App\ElektronicznyNadawca\StructType\GetKierunkiResponse|\App\ElektronicznyNadawca\StructType\GetLibrariesForLegalDepositsResponse|\App\ElektronicznyNadawca\StructType\GetListaPowodowReklamacjiResponse|\App\ElektronicznyNadawca\StructType\GetListaZgodEZwrotowResponse|\App\ElektronicznyNadawca\StructType\GetOutboxBookResponse|\App\ElektronicznyNadawca\StructType\GetParcelContentListResponse|\App\ElektronicznyNadawca\StructType\GetPasswordExpiredDateResponse|\App\ElektronicznyNadawca\StructType\GetPlacowkaPocztowaResponse|\App\ElektronicznyNadawca\StructType\GetPlacowkiPocztoweResponse|\App\ElektronicznyNadawca\StructType\GetPrintForParcelResponse|\App\ElektronicznyNadawca\StructType\GetProfilListResponse|\App\ElektronicznyNadawca\StructType\GetReklamacjeResponse|\App\ElektronicznyNadawca\StructType\GetReturnDocumentsProfileListResponse|\App\ElektronicznyNadawca\StructType\GetShopEZwrotyListResponse|\App\ElektronicznyNadawca\StructType\GetUbezpieczeniaInfoResponse|\App\ElektronicznyNadawca\StructType\GetUrzedyNadaniaResponse|\App\ElektronicznyNadawca\StructType\GetUrzedyWydajaceEPrzesylkiResponse|\App\ElektronicznyNadawca\StructType\GetWplatyCKPResponse|\App\ElektronicznyNadawca\StructType\GetZapowiedziFakturResponse|\App\ElektronicznyNadawca\StructType\HelloResponse|\App\ElektronicznyNadawca\StructType\IsMiejscowaResponse|\App\ElektronicznyNadawca\StructType\IsObszarMiastoResponse|\App\ElektronicznyNadawca\StructType\MoveShipmentsResponse|\App\ElektronicznyNadawca\StructType\OrderEasyReturnSolutionLabelResponse|\App\ElektronicznyNadawca\StructType\SendEnvelopeResponseType|\App\ElektronicznyNadawca\StructType\SetAktywnaKartaResponse|\App\ElektronicznyNadawca\StructType\SetEnvelopeBuforDataNadaniaResponse|\App\ElektronicznyNadawca\StructType\SetJednostkaOrganizacyjnaResponse|\App\ElektronicznyNadawca\StructType\SetStatusZgodyNaEZwrotResponse|\App\ElektronicznyNadawca\StructType\UpdateAccountResponse|\App\ElektronicznyNadawca\StructType\UpdateChecklistTemplateResponse|\App\ElektronicznyNadawca\StructType\UpdateEnvelopeBuforResponse|\App\ElektronicznyNadawca\StructType\UpdateParcelContentResponse|\App\ElektronicznyNadawca\StructType\UpdateProfilResponse|\App\ElektronicznyNadawca\StructType\UpdateReturnDocumentsProfileResponse|\App\ElektronicznyNadawca\StructType\UpdateShopEZwrotyResponse|\App\ElektronicznyNadawca\StructType\WyslijLinkaOStatusieEZwrotuResponse|\App\ElektronicznyNadawca\StructType\ZamowKurieraResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
