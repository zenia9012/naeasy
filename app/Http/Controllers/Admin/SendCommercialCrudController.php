<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\SendCommercialRequest as StoreRequest;
use App\Http\Requests\SendCommercialRequest as UpdateRequest;

class SendCommercialCrudController extends CrudController
{
    public function setup()
    {
        $this->crud->setModel('App\Models\SendCommercial');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/sendcommercial');
        $this->crud->setEntityNameStrings('sendcommercial', 'send_commercials');

        $this->crud->setFromDb();
    }

    public function store(StoreRequest $request)
    {
        // your additional operations before save here
        $redirect_location = parent::storeCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }

    public function update(UpdateRequest $request)
    {
        // your additional operations before save here
        $redirect_location = parent::updateCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }
}
