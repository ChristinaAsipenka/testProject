<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function mainform()
    {


        return view('form');

    }

    public function store()
    {
        $data = request()->validate([
            'name'=>'string|min:2',
            'email' => 'string|email',
            'message' => 'string|max:2500',
        ]);


       $form = Form::create($data);

        if(isset($form->id)){
            $savedData = Form::findOrFail($form->id);
            return view('show', compact('savedData'));
        }else{
            return redirect()->route('index');
        }

    }

    public function show($id)
    {
        $message = Form::findOrFail($id);

        return view('show', compact('message'));
    }
}
