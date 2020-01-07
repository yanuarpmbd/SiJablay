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
            $total_nomor = PenggunaanNomorModel::all()->count();
            $nomor_spare = new PenggunaanNomorModel();
            if ($total_nomor !== 0){
                $nomor_terakhir = PenggunaanNomorModel::findOrFail($total_nomor);
                $nomor_spare->count = ($nomor_terakhir->count) + 1;
            }
            else{
                $nomor_terakhir = 0;
                $nomor_spare->count = $nomor_terakhir + 1;
            }
            $nomor_spare->tanggal = Carbon::createFromDate(2020, 01, 06);
            $nomor_spare->used = 0;
            $nomor_spare->save();
        }
        $this->info('Spare Nomor Hari ini sejumlah'.' '.$spare->spare);
    }
}
