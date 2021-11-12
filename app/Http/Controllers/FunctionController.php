<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;




class FunctionController extends Controller{
    public function dd(){
        $user=Auth::user();
        
        $view = view('cabinet');
        echo $view->render(); // Hello, World!
       

       
    }
}

?>