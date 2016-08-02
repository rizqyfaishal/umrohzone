<?php

namespace App\Http\Controllers;

use App\Helper\PageDescription;
use App\Helper\RegistersUsers;
use Illuminate\Http\Request;

use App\Http\Requests;

class PemesanController extends Controller
{

    use RegistersUsers;

    protected $registerView = 'pemesan.register';


    public function __construct(PageDescription $page)
    {
        $this->page = $page;
    }

    public function showRegister(){
        $this->page->setTitle('Register');
        return $this->showRegistrationForm($this->page);
    }

    public function postRegister(Requests\RegisterPemesanRequest $request){

    }
}
