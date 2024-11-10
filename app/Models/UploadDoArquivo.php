<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UploadDoArquivo extends Model
{
    protected $table = 'dados_upload'; // nome da tabela por garantia para que nao aconteça um erro 

    protected $fillable = [
        'RptDt', 'TckrSymb', 'Asst', 'AsstDesc', 'SgmtNm', 'MktNm', 'SctyCtgyNm',
        'XprtnDt', 'XprtnCd', 'TradgStartDt', 'TradgEndDt', 'BaseCd', 'ConvsCritNm',
        'MtrtyDtTrgtPt', 'ReqrdConvsInd', 'ISIN', 'CFICd', 'DlvryNtceStartDt',
        'DlvryNtceEndDt', 'OptnTp', 'CtrctMltplr', 'AsstQtnQty', 'AllcnRndLot', 'TradgCcy',
        'DlvryTpNm', 'WdrwlDays', 'WrkgDays', 'ClnrDays', 'RlvrBasePricNm', 'OpngFutrPosDay',
        'SdTpCd1', 'UndrlygTckrSymb1', 'SdTpCd2', 'UndrlygTckrSymb2', 'PureGoldWght',
        'ExrcPric', 'OptnStyle', 'ValTpNm', 'PrmUpfrntInd', 'OpngPosLmtDt', 'DstrbtnId',
        'PricFctr', 'DaysToSttlm', 'SrsTpNm', 'PrtcnFlg', 'AutomtcExrcInd', 'SpcfctnCd',
        'CrpnNm', 'CorpActnStartDt', 'CtdyTrtmntTpNm', 'MktCptlstn', 'CorpGovnLvlNm', 'file_name', 'uploaded_at'
    ]; //modelo por segurança na hora do envio
}
