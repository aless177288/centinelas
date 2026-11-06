<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function index()
    {
        return view('event.register');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'age' => 'required|integer|min:1|max:120',
            'parish' => 'nullable|string|max:255',
            'phone' => 'required|string|max:20',
            'belongs_to_group' => 'required|boolean',
            'group_name' => 'nullable|required_if:belongs_to_group,1|string|max:255',
        ], [
            'full_name.required' => 'El nombre completo es obligatorio.',
            'age.required' => 'La edad es obligatoria.',
            'age.min' => 'La edad debe ser mayor que cero.',
            'age.max' => 'Verifica la edad ingresada.',
            'phone.required' => 'El teléfono es obligatorio.',
            'belongs_to_group.required' => 'Indica si perteneces a algún grupo.',
            'group_name.required_if' => 'Indica el nombre del grupo al que perteneces.',
        ]);

        // Si no pertenece a un grupo, no guardamos un nombre de grupo.
        if (!$validated['belongs_to_group']) {
            $validated['group_name'] = null;
        }

        Registration::create($validated);

        return redirect()->route('event.success');
    }

    public function success()
    {
        return view('event.success');
    }
}
