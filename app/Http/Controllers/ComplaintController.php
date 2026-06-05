<?php

namespace App\Http\Controllers;

use App\Models\Complaint;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ComplaintController extends Controller
{
    public function create(): View
    {
        return view('complaints.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'date' => ['required', 'date'],
            'time' => ['required', 'date_format:H:i'],
            'description' => ['required', 'string'],
        ]);

        Complaint::create($validated);

        return redirect()->route('dashboard')->with('status', 'Complaint added successfully.');
    }

    public function show(Complaint $complaint): View
    {
        return view('complaints.show', compact('complaint'));
    }

    public function edit(Complaint $complaint): View
    {
        return view('complaints.edit', compact('complaint'));
    }

    public function update(Request $request, Complaint $complaint): RedirectResponse
    {
        $validated = $request->validate([
            'date' => ['required', 'date'],
            'time' => ['required', 'date_format:H:i'],
            'description' => ['required', 'string'],
        ]);

        $complaint->update($validated);

        return redirect()->route('dashboard')->with('status', 'Complaint updated successfully.');
    }

    public function destroy(Complaint $complaint): RedirectResponse
    {
        $complaint->delete();

        return redirect()->route('dashboard')->with('status', 'Complaint deleted successfully.');
    }
}
