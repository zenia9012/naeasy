<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\CallbackRequest as StoreRequest;
use App\Http\Requests\CallbackRequest as UpdateRequest;

class CallbackCrudController extends CrudController
{
    public function setup()
    {

        $this->crud->setModel('App\Models\Callback');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/callback');
        $this->crud->setEntityNameStrings('callback', 'callbacks');

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
