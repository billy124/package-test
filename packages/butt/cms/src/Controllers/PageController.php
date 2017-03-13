<?php

namespace Butt\Cms\Controllers;

use App\Http\Controllers\Controller;

class PageController extends Controller {

    /**
     * Get a list of all pages
     * 
     * @return type
     */
    public function index() {
        $data['pages'] = [
            ['title' => 'Page 1'],
            ['title' => 'Page 2']
        ];
        
        return view('butt::page.index', $data);
    }
    
    /**
     * Get a single page
     * 
     * @return type
     */
    public function show($page) {
        return [
            ['title' => 'Page 1']
        ];
    }

}
