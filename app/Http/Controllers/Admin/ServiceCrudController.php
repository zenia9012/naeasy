<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\ServiceRequest as StoreRequest;
use App\Http\Requests\ServiceRequest as UpdateRequest;
use Illuminate\Support\Facades\Auth;

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
		    'label' => 'Текст на головній'
	    ]);

	    $this->crud->addColumn([
		    'name' => 'all_text_ua',
		    'label' => 'Текст на сторінці послуги'
	    ]);

	    $this->crud->addColumn([
		    'name' => 'length',
		    'label' => 'Length'
	    ]);

	    $this->crud->addColumn([
		    'name' => 'last_modified',
		    'label' => 'last_modified'
	    ]);

	    $this->crud->addField([
	    	'name' => 'title',
		    'label' => 'title'
	    ]);

	    $this->crud->addField([
		    'name' => 'ua',
		    'label' => 'Текст на головній',
		    'type' => 'ckeditor'
	    ]);

	    $this->crud->addField([
		    'name' => 'all_text_ua',
		    'label' => 'Текст на сторінці послуги',
		    'type' => 'ckeditor'
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
	    $user = Auth::user();

	    $this->crud->hasAccessOrFail('update');

	    // fallback to global request instance
	    if (is_null($request)) {
		    $request = \Request::instance();
	    }

	    // replace empty values with NULL, so that it will work with MySQL strict mode on
	    foreach ($request->input() as $key => $value) {
		    if (empty($value) && $value !== '0') {
			    $request->request->set($key, null);
		    }
	    }

	    $data['_token'] = $request->input('_token');
	    $data['title'] = $request->input('title');
	    $data['ua'] = $request->input('ua');
	    $data['all_text_ua'] = $request->input('all_text_ua');
	    $data['length'] = $request->input('length');
	    $data['id'] = $request->input('id');
	    $data['last_modified'] = $user->name;
	    $data['save_action'] = $request->input('save_action');

	    // update the row in the db
	    $item = $this->crud->update($data['id'], $data);
	    $this->data['entry'] = $this->crud->entry = $item;

	    \Alert::success(trans('backpack::crud.update_success'))->flash();

	    $this->setSaveAction();

	    $redirect_location = $this->performSaveAction($item->getKey());

        return $redirect_location;
    }
}
