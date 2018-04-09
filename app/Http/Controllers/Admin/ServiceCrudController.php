<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\ServiceRequest as StoreRequest;
use App\Http\Requests\ServiceRequest as UpdateRequest;

class ServiceCrudController extends CrudController
{
    public function setup()
    {

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Service');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/service');
        $this->crud->setEntityNameStrings('service', 'services');

	    $this->crud->addColumn([
	    	'name' => 'title',
		    'label' => 'Title'
	    ]);

	    $this->crud->addColumn([
		    'name' => 'ua',
		    'label' => 'Text'
	    ]);

	    $this->crud->addColumn([
		    'name' => 'length',
		    'label' => 'Length'
	    ]);

	    $this->crud->addField([
	    	'name' => 'title',
		    'label' => 'title'
	    ]);

	    $this->crud->addField([
		    'name' => 'ua',
		    'label' => 'text',
		    'type' => 'ckeditor'
	    ]);

	    $this->crud->addField([
		    'name' => 'length',
		    'label' => 'length'
	    ]);

         $this->crud->denyAccess([ 'create']);

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
