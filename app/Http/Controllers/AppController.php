<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
        public function store(Request $request)
        {
            // Валидация данных
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'date' => 'required|date',
                'region' => 'required|string',
                'city' => 'required|string',
                'status' => 'required|string',
                'school' => 'required|integer|min:1|max:12',
                'incomplete_reason' => 'nullable|string',
                'special_education' => 'nullable|string',
                'education' => 'required|integer|min:1|max:5',
                'reason_no_university' => 'nullable|string',
                'university' => 'nullable|string',
                'climate_impact' => 'nullable|string',
                'improvement_measures' => 'nullable|array', // так как это множественный выбор
            ]);

            // Создание записи в базе данных
            \App\Models\ApplicationModel::create([
                'name' => $validatedData['name'],
                'date' => $validatedData['date'],
                'region' => $validatedData['region'],
                'city' => $validatedData['city'],
                'status' => $validatedData['status'],
                'school' => $validatedData['school'],
                'incomplete_reason' => $validatedData['incomplete_reason'] ?? null,
                'special_education' => $validatedData['special_education'] ?? null,
                'education' => $validatedData['education'],
                'reason_no_university' => $validatedData['reason_no_university'] ?? null,
                'university' => $validatedData['university'] ?? null,
                'climate_impact' => $validatedData['climate_impact'] ?? null,
                'improvement_measures' => json_encode($validatedData['improvement_measures'] ?? []), // Преобразование в JSON
            ]);

            return redirect()->back()->with('success', 'Form submitted successfully.');
        }

}
