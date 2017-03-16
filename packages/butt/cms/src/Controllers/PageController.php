<?php

namespace Butt\Cms\Controllers;

use App\Http\Controllers\Controller;
use Butt\Cms\Models\Page;

class PageController extends Controller {

    /**
     * Get a list of all pages
     * 
     * @return array
     */
    public function index() {
        $page = New Page;
        $data['pages'] = $page->getActivePages();
        
        return view('cms::page.list', $data);
    }
    
    /**
     * Get a single page
     * 
     * @return array
     */
    public function show($slug) {
        $data['page'] = Page::where('slug', $slug)->first();
        
        return view('cms::page.show', $data);
    }

}
