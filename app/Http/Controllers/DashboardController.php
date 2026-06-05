<?php

namespace App\Http\Controllers;

use App\Models\Complaint;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(): View
    {
        return view('dashboard', [
            'openComplaintCount' => Complaint::query()->count(),
            'complaints' => Complaint::query()
                ->latest('date')
                ->latest('time')
                ->get(),
        ]);
    }
}
