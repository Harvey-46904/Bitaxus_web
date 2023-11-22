<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
class CryptoController extends Controller
{
    
    public function index()
    {
        $cryptos=[
            ["id"=>1,"name"=>"bitcoin","symbol"=>"BTC","icon"=>"1.png"],
            ["id"=>1027,"name"=>"ethereum","symbol"=>"ETH","icon"=>"1027.png"],
            ["id"=>825,"name"=>"tether","symbol"=>"USDT","icon"=>"825.png"],
            ["id"=>52,"name"=>"xrp","symbol"=>"XRP","icon"=>"52.png"],
            ["id"=>1839,"name"=>"bnb","symbol"=>"BNB","icon"=>"1839.png"],
            ["id"=>3408,"name"=>"usd-coin","symbol"=>"USDC","icon"=>"3408.png"],
            ["id"=>2010,"name"=>"cardano","symbol"=>"ADA","icon"=>"2010.png"],
            ["id"=>591,"name"=>"solcoin","symbol"=>"SOL","icon"=>"591.png"],
            ["id"=>74,"name"=>"dogecoin","symbol"=>"DOGE","icon"=>"74.png"],
            ["id"=>3890,"name"=>"polygon","symbol"=>"MATIC","icon"=>"3890.png"],
            ["id"=>2,"name"=>"litecoin","symbol"=>"LTC","icon"=>"2.png"],
            ["id"=>1958,"name"=>"tron","symbol"=>"TRX","icon"=>"1958.png"],
            
           
          
            ["id"=>5805,"name"=>"avalanche","symbol"=>"AVAX","icon"=>"5805.png"],
            ["id"=>5994,"name"=>"shiba-inu","symbol"=>"SHIB","icon"=>"5994.png"],
           
           
            ["id"=>512,"name"=>"stellar","symbol"=>"XLM","icon"=>"512.png"],
          
          
            ["id"=>1975,"name"=>"chainlink","symbol"=>"LINK","icon"=>"1975.png"],
            ["id"=>1420,"name"=>"atomic-coin","symbol"=>"ATOM","icon"=>"1420.png"],
            ["id"=>126,"name"=>"unitecoin","symbol"=>"UNI","icon"=>"126.png"],
            ["id"=>328,"name"=>"monero","symbol"=>"XMR","icon"=>"328.png"],
            ["id"=>646,"name"=>"ethercoin","symbol"=>"ETC","icon"=>"646.png"],
            ["id"=>2563,"name"=>"trueusd","symbol"=>"TUSD","icon"=>"2563.png"],
           
        ];
        return view('index',compact("cryptos"));
    }
}
