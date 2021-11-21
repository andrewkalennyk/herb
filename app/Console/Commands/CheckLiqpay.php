<?php

namespace App\Console\Commands;

use App\Models\Order;
use Carbon\Carbon;
use DenizTezcan\LiqPay\LiqPay;
use Illuminate\Console\Command;

class CheckLiqpay extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'check:liqpay';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Check Liqpay orders';

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
     * @return int
     */
    public function handle()
    {
        $liqPay = new LiqPay();
        $orders = Order::where('paid_type', 'online')
            ->where('is_checked', 0)
            ->orderBy('id','DESC')
            ->get();
        if ($orders->count()) {
            foreach ($orders as $order) {
                $status = json_decode($liqPay->status($order->id), true);
                if (!empty($status['result']) &&
                    !empty($status['status']) &&
                    $status['result'] === 'ok' &&
                    $status['status'] === 'success'
                ) {
                    $order->is_paid = 1;
                }
                $order->is_checked = 1;
                $order->paid_at = Carbon::now()->format('Y-m-d H:m');
                $order->save();

            }
        }
    }
}
