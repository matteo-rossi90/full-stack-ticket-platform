<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Operator;
use App\Models\Ticket;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $count_tickets = Ticket::count();

        $count_operators = Operator::count();

        $count_categories = Category::count();

        return view('admin.dashboard', compact('count_tickets', 'count_operators', 'count_categories'));
    }
}
