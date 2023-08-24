<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function download() {
        try {
            $applicationForm = storage_path('docs/downloads/applicationForm.pdf');
            
            return response()->download($applicationForm);
        } catch (\Exception $e) {
            abort(404);
        }
    }
}
