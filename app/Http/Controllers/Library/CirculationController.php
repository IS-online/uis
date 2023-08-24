<?php
/*
 * Mr. Umesh Kumar Yadav
 * Business With Technology Pvt. Ltd.
 * Rajbiraj-7 (Province 2, Saptari), Nepal
 * +977-9868156047
 * freelancerumeshnepal@gmail.com
 * https://codecanyon.net/item/unlimited-edu-firm-school-college-information-management-system/21850988
 */

namespace App\Http\Controllers\Library;

use App\Http\Controllers\CollegeBaseController;
use App\Models\LibraryCirculation;
use Illuminate\Http\Request;

class CirculationController extends CollegeBaseController
{
    protected $base_route = 'library.circulation';
    protected $view_path = 'library.circulation';
    protected $panel = 'Periodi izdavanja';
    protected $filter_query = [];

    public function __construct()
    {

    }

    public function index(Request $request)
    {
        $data = [];
        $data['circulation'] = LibraryCirculation::select('id', 'user_type', 'slug', 'code_prefix','issue_limit_days','issue_limit_books',
            'fine_per_day', 'status')->get();
        return view(parent::loadDataToView($this->view_path.'.index'), compact('data'));
    }

    public function store(Request $request)
    {
       $request->request->add(['created_by' => auth()->user()->id]);

       LibraryCirculation::create($request->all());

       $request->session()->flash($this->message_success, $this->panel. ' Uspješno kreirano.');
       return redirect()->route($this->base_route);
    }

    public function edit(Request $request, $id)
    {
        $data = [];
        if (!$data['row'] = LibraryCirculation::find($id))
            return parent::invalidRequest();

        $data['circulation'] = LibraryCirculation::select('id', 'user_type', 'slug', 'code_prefix', 'issue_limit_days','issue_limit_books',
            'fine_per_day', 'status')->get();

        $data['base_route'] = $this->base_route;
        return view(parent::loadDataToView($this->view_path.'.index'), compact('data'));
    }

    public function update(Request $request, $id)
    {

       if (!$row = LibraryCirculation::find($id)) return parent::invalidRequest();

        $request->request->add(['last_updated_by' => auth()->user()->id]);

        $row->update($request->all());

        $request->session()->flash($this->message_success, $this->panel.' Uspješno ažurirano.');
        return redirect()->route($this->base_route);
    }

    public function delete(Request $request, $id)
    {
        if (!$row = LibraryCirculation::find($id)) return parent::invalidRequest();

        $row->delete();

        $request->session()->flash($this->message_success, $this->panel.' Uspješno izbrisano.');
        return redirect()->route($this->base_route);
    }

    public function bulkAction(Request $request)
    {
        if ($request->has('bulk_action') && in_array($request->get('bulk_action'), ['active', 'in-active', 'delete'])) {

            if ($request->has('chkIds')) {
                foreach ($request->get('chkIds') as $row_id) {
                    switch ($request->get('bulk_action')) {
                        case 'active':
                        case 'in-active':
                            $row = LibraryCirculation::find($row_id);
                            if ($row) {
                                $row->status = $request->get('bulk_action') == 'active'?'active':'in-active';
                                $row->save();
                            }
                            break;
                        case 'delete':
                            $row = LibraryCirculation::find($row_id);
                            $row->delete();
                            break;
                    }
                }

                if ($request->get('bulk_action') == 'active' || $request->get('bulk_action') == 'in-active')
                    $request->session()->flash($this->message_success, $request->get('bulk_action'). ' Akcija uspješna.');
                else
                    $request->session()->flash($this->message_success, 'Uspješno izbrisano.');

                return redirect()->route($this->base_route);

            } else {
                $request->session()->flash($this->message_warning, 'Molimo vas, označite barem jedan red.');
                return redirect()->route($this->base_route);
            }

        } else return parent::invalidRequest();

    }

    public function active(request $request, $id)
    {
        if (!$row = LibraryCirculation::find($id)) return parent::invalidRequest();

        $request->request->add(['status' => 'active']);

        $row->update($request->all());

        $request->session()->flash($this->message_success, $row->semester.' '.$this->panel.' Aktivan uspješno.');
        return redirect()->route($this->base_route);
    }

    public function inActive(request $request, $id)
    {
        if (!$row = LibraryCirculation::find($id)) return parent::invalidRequest();

        $request->request->add(['status' => 'in-active']);
        $row->update($request->all());

        $request->session()->flash($this->message_success, $row->semester.' '.$this->panel.' Neaktivan uspješno.');
        return redirect()->route($this->base_route);
    }
}