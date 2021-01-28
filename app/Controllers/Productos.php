<?php   namespace App\Controllers;

use MercadoPago;

class Productos extends BaseController
{
    
    public function index()
	{

        //Pedir token y almacenarlo en $token
        $token = MercadoPago\SDK::setAccessToken(DORI_TOKEN);

        //Crear objeto de preferencia y almacenarlo en $preference
        $preference = new MercadoPago\Preference();

        //Creamos ítem
        $item = new MercadoPago\Item();

        //Información del ítem
        $item->id= 12345;
        $item->title = 'Doriproducto';
        $item->description = 'Un doriproducto super padriuris';
        $item->quantity = 1;
        $item->unit_price = 75.56;


        //Guardamos la info del item en la preferencia
        $preference -> items = array($item);
        $preference -> save();

        $dataToView = array(
            'preference' => $preference, 
        );

        return view('productos', $dataToView);
	}


    function preferenceMP(){

    }

    function paymentMP(){
        
        //De nuevo se pide el token de MP
        $token = MercadoPago\SDK::setAccessToken(DORI_TOKEN);

        //Creamos un objeto de pago y asignamos su infomación con valores fijos
        $payment = new MercadoPago\Payment();
        $payment -> transaction_amount = 390;
        $payment -> token = 'CARD_TOKEN';

    }

}