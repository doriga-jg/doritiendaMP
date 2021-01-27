<?php
namespace App\Controllers;

use MercadoPago\Sdk;

class Productos extends BaseController
{
    function index() {
        return view('productos');;
    }

    public function pagarMp()
    {
        MercadoPago\SDK::setAccessToken('PROD_ACCESS_TOKEN');

        // Crea un objeto de preferencia
        $preference = new MercadoPago\Preference();

        $_POST['articulo'] = array(
            'id' => 56,
            'titulo' => 'Producto',
            'descripcion' => 'Descripcion de mi producto',
            'cantidad' => 1,
            'precio_unitario' => 75.56,
        );
        // Crea un ítem en la preferencia

        $articulo = $_POST['articulo'];

        $producto = MYSQL->findByID($articulo['id']);

        if (!$producto) {
            # code...
        } else {
            $item = new MercadoPago\Item();
            $item->title = $articulo->titulo;
            $item->quantity = $articulo->quantity;
            $item->unit_price = $articulo->precio_unitario;
            $preference->items = array($item);
            $respuestaPreferencia = $preference->save();

            $urlParaPago = $respuestaPreferencia->sandbox_init_point;

            
        }

        $respuestaCobro = MercadoPago->cobro($cobro);
        
        $dataToView = array(
            'detalles_de_compra' => $respuestaCobro
        );

        return view('compra_finalizada', $dataToView);


        $detalles_de_compra->id


        
    }

}