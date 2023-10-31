<?php

namespace App\Http\Controllers;

use App\Models\Prd;
use App\Models\Company;
use App\Models\DetailPrd;
use App\Models\Feature;
use App\Http\Requests\StorePrdRequest;
use App\Http\Requests\UpdatePrdRequest;
use App\Mail\CompanyPRDMail;
use App\Models\Target;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;


class PrdController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.prd');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function sendEmail()
    {
        $mailData = [
            'title' => 'Mail from ItSolutionStuff.com',
            'body' => 'This is for testing email using smtp.'
        ];

        Mail::to('bernitafebri@gmail.com')->send(new CompanyPRDMail($mailData));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $company = new Company();
        $company->company_name  = $request->company_name;
        $company->company_code  = Str::random(4) . random_int(0, 9) . Str::random(2);
        $company->cp_name       = $request->cp_name;
        $company->cp_email       = $request->cp_email;
        $company->cp_phone       = $request->cp_phone;
        $company->save();

        $cpnyID = $company->id;

        $prd    = new Prd();
        $prd->company_id    = $cpnyID;
        $prd->prd_code    = Str::random(2) . random_int(0, 9) . Str::random(2);
        $prd->brief_id    = 1;
        $prd->save();

        $prdID  = $prd->id;

        $detaPRD                    = new DetailPrd;
        $detaPRD->company_id        = $cpnyID;
        $detaPRD->prd_id            = $prdID;
        $detaPRD->product           = $request->product;
        $detaPRD->goals             = $request->goals;
        $detaPRD->require_product   = $request->require_product;
        $detaPRD->target_users      = $request->target_users;
        $detaPRD->deadline          = Carbon::parse($request->deadline);
        $detaPRD->note              = $request->note;
        $detaPRD->save();

        if ($request->target[0]["target"] != null) {
            foreach ($request->target as $ke) {
                $fitur  = new Target();
                $fitur->company_id  = $cpnyID;
                $fitur->prd_id      = $prdID;
                $fitur->target        = $ke['target'];
                $fitur->desc        = $ke['desc'];
                $fitur->save();
            }
        }
        if ($request->feature[0]["fitur"] != null) {
            foreach ($request->feature as $ke) {
                $fitur  = new Feature();
                $fitur->company_id      = $cpnyID;
                $fitur->prd_id      = $prdID;
                $fitur->name        = $ke['fitur'];
                $fitur->desc        = $ke['desc'];
                $fitur->value        = $ke['value'];
                $fitur->save();
            }
        }

        $mailData = [
            'title' => 'Info Dokumen PRD',
            'url' => url('prd-detail/' . $company->company_code),

            // 'url' => url('/prd-detail/{{ $company->code }}'),
        ];

        // Mail::to('bernitafebri@gmail.com')->send(new CompanyPRDMail($mailData));
        Mail::to($company->cp_email)->cc('bernitafebri@gmail.com')->send(new CompanyPRDMail($mailData));

        return back()->with('success', 'PRD Berhasil Disimpan. ');
    }

    /**
     * Display the specified resource.
     */
    public function show(Prd $prd)
    {
        return view(
            'company.detail',
            // [
            //     'prd'   =>  $prd,
            // ]
        );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Prd $prd)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePrdRequest $request, Prd $prd)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Prd $prd)
    {
        //
    }
}
