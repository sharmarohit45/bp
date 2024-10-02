<?php
namespace App\Http\Controllers;

use App\Models\User;        // Import the User model for agents
use App\Models\Property;    // Import the Property model
use App\Models\Enquiry;      // Import the Enquiry model
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        $agentCount = User::count();
        $propertyCount = Property::count();
        $enquiryCount = Enquiry::count();
        return view('admin.adminhome', compact('agentCount', 'propertyCount', 'enquiryCount'));
    }
}
