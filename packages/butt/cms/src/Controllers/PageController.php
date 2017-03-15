<?php

namespace Butt\Cms\Controllers;

use App\Http\Controllers\Controller;

class PageController extends Controller {

    /**
     * Get a list of all pages
     * 
     * @return array
     */
    public function index() {
        $data['pages'] = [
            ['title' => 'Page 1'],
            ['title' => 'Page 2']
        ];
        
        return view('cms::page.index', $data);
    }
    
    /**
     * Get a single page
     * 
     * @return array
     */
    public function show($page) {
        return [
            ['title' => 'Page 1']
        ];
    }

}
