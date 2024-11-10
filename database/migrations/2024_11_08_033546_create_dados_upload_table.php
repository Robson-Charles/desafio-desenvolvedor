<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateDadosUploadTable extends Migration{
    public function up()
    {
        Schema::create('dados_upload', function (Blueprint $table) {
            // Definição das colunas
            $table->increments('id');
            $table->date('RptDt')->nullable(); 
            $table->string('TckrSymb')->nullable();
            $table->string('Asst')->nullable();
            $table->string('AsstDesc')->nullable();
            $table->string('SgmtNm')->nullable();
            $table->string('MktNm')->nullable();
            $table->string('SctyCtgyNm')->nullable();
            $table->date('XprtnDt')->nullable();
            $table->string('XprtnCd')->nullable();
            $table->date('TradgStartDt')->nullable();
            $table->date('TradgEndDt')->nullable();
            $table->string('BaseCd')->nullable();
            $table->string('ConvsCritNm')->nullable();
            $table->string('MtrtyDtTrgtPt')->nullable();
            $table->boolean('ReqrdConvsInd')->nullable();
            $table->string('ISIN')->nullable();
            $table->string('CFICd')->nullable();
            $table->date('DlvryNtceStartDt')->nullable();
            $table->date('DlvryNtceEndDt')->nullable();
            $table->string('OptnTp')->nullable();
            $table->integer('CtrctMltplr')->nullable();
            $table->integer('AsstQtnQty')->nullable();
            $table->integer('AllcnRndLot')->nullable();
            $table->string('TradgCcy')->nullable();
            $table->string('DlvryTpNm')->nullable();
            $table->integer('WdrwlDays')->nullable();
            $table->integer('WrkgDays')->nullable();
            $table->integer('ClnrDays')->nullable();
            $table->string('RlvrBasePricNm')->nullable();
            $table->integer('OpngFutrPosDay')->nullable();
            $table->string('SdTpCd1')->nullable();
            $table->string('UndrlygTckrSymb1')->nullable();
            $table->string('SdTpCd2')->nullable();
            $table->string('UndrlygTckrSymb2')->nullable();
            $table->decimal('PureGoldWght', 10, 2)->nullable();
            $table->decimal('ExrcPric', 10, 2)->nullable();
            $table->string('OptnStyle')->nullable();
            $table->string('ValTpNm')->nullable();
            $table->boolean('PrmUpfrntInd')->nullable();
            $table->date('OpngPosLmtDt')->nullable();
            $table->string('DstrbtnId')->nullable();
            $table->decimal('PricFctr', 10, 2)->nullable();
            $table->integer('DaysToSttlm')->nullable();
            $table->string('SrsTpNm')->nullable();
            $table->boolean('PrtcnFlg')->nullable();
            $table->boolean('AutomtcExrcInd')->nullable();
            $table->string('SpcfctnCd')->nullable();
            $table->string('CrpnNm')->nullable();
            $table->date('CorpActnStartDt')->nullable();
            $table->string('CtdyTrtmntTpNm')->nullable();
            $table->decimal('MktCptlstn', 15, 2)->nullable();
            $table->string('CorpGovnLvlNm')->nullable();
            
            //realizar uma adicição para que seja enviado o nome do arquivo e a data de envio
            $table->string('file_name')->nullable(); 
            $table->timestamp('uploaded_at')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('dados_upload');
    }
}
