<?php

namespace App\Http\Controllers;

use SimpleSoftwareIO\QrCode\Facades\QrCode;
use App\Models\UserImageOrder;

class QRcodeGenerateController extends Controller
{
    // QR code generation
    public function qrcode(){
        $qrCodes = [];

        $qrCodes['simple']        = QrCode::size(150)->generate('https://blog.renatolucena.net');
        $qrCodes['changeColor']   = QrCode::size(150)->color(255, 0, 0)->generate('https://blog.renatolucena.net');
        $qrCodes['changeBgColor'] = QrCode::size(150)->backgroundColor(255, 0, 0)->generate('https://blog.renatolucena.net');
        $qrCodes['styleDot']      = QrCode::size(150)->style('dot')->generate('https://blog.renatolucena.net');
        $qrCodes['styleSquare']   = QrCode::size(150)->style('square')->generate('https://blog.renatolucena.net');
        $qrCodes['styleRound']    = QrCode::size(150)->style('round')->generate('https://blog.renatolucena.net');

        return view('qrcode',$qrCodes);
    }

    // public function qrcodeDB()
    // {
    //     // env('APP_URL').'/storage',
    //     dd(env('APP_URL'));
    // }

    public function qrcodeDB($orderNumber)
    {
        // Busca o pedido no banco de dados
        $order = UserImageOrder::where('order_number', $orderNumber)->first();

        // Verifica se o pedido existe
        if (!$order) {
            return response()->json(['message' => 'Order not found'], 404);
        }

        // Gera o QR code com a URL do pedido
        $url = env('APP_URL') . '/order/' . $orderNumber;
        $qrCode = QrCode::size(150)->generate($url);

        return view('show_qrcode', ['qrCode' => $qrCode, 'orderNumber' => $orderNumber]);
    }

    public function showOrderDetails($orderNumber)
    {
        // Busca o pedido no banco de dados
        $order = UserImageOrder::where('order_number', $orderNumber)->with('user', 'image')->first();

        // Verifica se o pedido existe
        if (!$order) {
            return response()->json(['message' => 'Order not found'], 404);
        }

        return view('order_details', ['order' => $order]);
    }
}
