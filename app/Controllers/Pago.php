<?php namespace App\Controllers;

class Pago extends BaseController
{
	public function index()
    { return; }
    
    public function error()
    {
        $articleData = $_GET['item_data'];

        $articleDataArray = explode(',',$articleData);

        $dataToView = array(
            'articulo' => $articleDataArray
        );

        return view('pago/error', $dataToView);
    }
    
    public function pendiente()
    {
        return view('pago/pendiente');
    }
    
    public function exitoso()
    {
        return view('pago/exitoso');
    }

	//--------------------------------------------------------------------

}
