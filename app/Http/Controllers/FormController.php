<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\QuestionnaireRequest;
use App\Models\Form;

class FormController extends Controller
{
    public function index(){
        return view('index');
    }

    public function create(QuestionnaireRequest $request){
        $form = $request->all();
        Form::create($form);
        return redirect('/thanks');
    }

    public function thanks(){
        return view('thanks');
    }
}
