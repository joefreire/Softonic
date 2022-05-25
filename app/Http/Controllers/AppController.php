<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class AppController extends Controller
{
    /**
     * Return all items.
     *
     * @return json
     */
    public function showAll() {
        return response()->json('To be implemented');
    }
    /**
    * Return some item.
    * 
    * @param  $id
    * @return json
    */
    public function showOne($id) {
        $result = $this->getAppData('file',$id);
        return response()->json($result, (!empty($result)?200:404) );        
    }
    /**
    * Create some item.
    * 
    * @param  App\Http\Requests\Request  $request
    * @return json
    */
    public function create(Request $request) {
        return response()->json('To be implemented', 201);
    }
    /**
    * Update some item.
    * 
    * @param  $id, App\Http\Requests\ProductStoreRequest $request
    * @return json
    */
    public function update($id, Request $request) {
        return response()->json('To be implemented', 200);
    }
    /**
    * Delete some item.
    * 
    * @param  $id
    * @return json
    */
    public function delete($id) {
        return response('To be implemented', 200);
    }
}