<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models;
use Illuminate\Support\Facades\DB;

class CompaniesController extends Controller
{
    public function index()
    {
        return view('pages.main');
    }

    public function addCompanyPage()
    {
        return view('pages.add-company');
    }

    public function editCompanyPage($id)
    {
        $comapny = DB::table('companies')->where('id', $id)->get();

        return view('pages.edit-company')->with('company', $comapny);
    }

    public function allCompaniesPage()
    {
        $companies = DB::table('companies')->get();

        return view('pages.all-companies')->with('companies', $companies);
    }

    public function storeCompany(Request $request)
    {
        $request->validate([
            'company_name' => 'required',
            'company_leader' => 'required',
            'company_description' => 'required',
    ]);

        $company = new Models\Company([
            'company_name' => $request->post('company_name'),
            'company_leader' => $request->post('company_leader'),
            'company_description' => $request->post('company_description')
        ]);

        $company->save();

        $companies = DB::table('companies')->get();

        return redirect('/visos-imones');
    }

    public function deleteCompany($id)
    {
        $companies = DB::table('companies')->where('id', $id);

        $companies->delete();

        return redirect()->back();
    }

    public function editCompany(Request $request, $id)
    {
        $request->validate([
            'company_name' => 'required',
            'company_leader' => 'required',
            'company_description' => 'required',
        ]);

        $company = new Models\Company([
            'company_name' => $request->post('company_name'),
            'company_leader' => $request->post('company_leader'),
            'company_description' => $request->post('company_description')
        ]);

        $firm = DB::table('companies')
        ->where('id', $id)
            ->update([
                'company_name' => $request->company_name,
                'company_leader' => $request->company_leader,
                'company_description' => $request->company_description
            ]);

        return redirect('/visos-imones');
    }
}
