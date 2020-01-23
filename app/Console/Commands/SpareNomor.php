<?php

namespace App\Console\Commands;

use App\Models\Sekretariat\PenggunaanNomorModel;
use App\Models\Sekretariat\SettingNomorModel;
use Carbon\Carbon;
use Illuminate\Console\Command;

class SpareNomor extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'spare:day';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Buat Spare Penomoran Surat';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $spare = SettingNomorModel::first();
        for ($i=1;$i<=$spare->spare;$i++){
            $total_nomor = PenggunaanNomorModel::max('count');
            //dd($total_nomor);
            $nomor_spare = new PenggunaanNomorModel();
            $nomor_spare->count = ($total_nomor) + 1;
            $nomor_spare->tanggal = Carbon::now();
            /*$nomor_spare->tanggal = Carbon::createFromDate(2020, 01, 21);*/
            $nomor_spare->used = 0;
            //dump($nomor_spare->count);
            $nomor_spare->save();
            sleep(3);
        }
        //die();
        $this->info('Spare Nomor Hari ini sejumlah'.' '.$spare->spare);
    }
}
