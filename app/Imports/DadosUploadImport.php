<?php

namespace App\Imports;

use App\Models\UploadDoArquivo;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithCustomCsvSettings;

class DadosUploadImport implements ToModel, WithHeadingRow, WithCustomCsvSettings
{
    protected $fileName; 
    public function __construct($fileName) { $this->fileName = $fileName;}
    public function getCsvSettings(): array
    {
        return [
            'delimiter' => ';' //separando as linhas para que nao aconteça um erro 
        ];
    }

    public function model(array $row)//upload dos arquivos
    {
        return new UploadDoArquivo([
            'RptDt' => $row['rptdt'],
            'TckrSymb' => $row['tckrsymb'],
            'Asst' => $row['asst'],
            'AsstDesc' => $row['asstdesc'],
            'SgmtNm' => $row['sgmtnm'],
            'MktNm' => $row['mktnm'],
            'SctyCtgyNm' => $row['sctyctgynm'],
            'XprtnDt' => $row['xprtndt'],
            'XprtnCd' => $row['xprtncd'],
            'TradgStartDt' => $row['tradgstartdt'],
            'TradgEndDt' => $row['tradgenddt'],
            'BaseCd' => $row['basecd'],
            'ConvsCritNm' => $row['convscritnm'],
            'MtrtyDtTrgtPt' => $row['mtrtydttrgtpt'],
            'ReqrdConvsInd' => $row['reqrdconvsind'],
            'ISIN' => $row['isin'],
            'CFICd' => $row['cficd'],
            'DlvryNtceStartDt' => $row['dlvryntcestartdt'],
            'DlvryNtceEndDt' => $row['dlvryntceenddt'],
            'OptnTp' => $row['optntp'],
            'CtrctMltplr' => $row['ctrctmltplr'],
            'AsstQtnQty' => $row['asstqtnqty'],
            'AllcnRndLot' => $row['allcnrndlot'],
            'TradgCcy' => $row['tradgccy'],
            'DlvryTpNm' => $row['dlvrytpnm'],
            'WdrwlDays' => $row['wdrwldays'],
            'WrkgDays' => $row['wrkgdays'],
            'ClnrDays' => $row['clnrdays'],
            'RlvrBasePricNm' => $row['rlvrbasepricnm'],
            'OpngFutrPosDay' => $row['opngfutrposday'],
            'SdTpCd1' => $row['sdtpcd1'],
            'UndrlygTckrSymb1' => $row['undrlygtckrsymb1'],
            'SdTpCd2' => $row['sdtpcd2'],
            'UndrlygTckrSymb2' => $row['undrlygtckrsymb2'],
            'PureGoldWght' => $row['puregoldwght'],
            'ExrcPric' => $row['exrcpric'],
            'OptnStyle' => $row['optnstyle'],
            'ValTpNm' => $row['valtpnm'],
            'PrmUpfrntInd' => $row['prmupfrntind'],
            'OpngPosLmtDt' => $row['opngposlmtdt'],
            'DstrbtnId' => $row['dstrbtnid'],
            'PricFctr' => $row['pricfctr'],
            'DaysToSttlm' => $row['daystosttlm'],
            'SrsTpNm' => $row['srstpnm'],
            'PrtcnFlg' => $row['prtcnflg'],
            'AutomtcExrcInd' => $row['automtcexrcind'],
            'SpcfctnCd' => $row['spcfctncd'],
            'CrpnNm' => $row['crpnnm'],
            'CorpActnStartDt' => $row['corpactnstartdt'],
            'CtdyTrtmntTpNm' => $row['ctdytrtmnttpnm'],
            'MktCptlstn' => $row['mktcptlstn'],
            'CorpGovnLvlNm' => $row['corpgovnlvlnm'],
            'file_name' => $this->fileName, 
            'uploaded_at' => now()
        ]);
    }
}
