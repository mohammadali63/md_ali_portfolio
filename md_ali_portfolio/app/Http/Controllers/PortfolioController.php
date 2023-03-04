<?php

namespace App\Http\Controllers;

use App\Models\Addportfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function addPortfolio()
    {
        return view('admin.portfolio.add-portfolio');
    }

    public function savePortfolio(Request $request)
    {
        Addportfolio::savePortfolio($request);
        return redirect(route('add.portfolio'));
    }
}
