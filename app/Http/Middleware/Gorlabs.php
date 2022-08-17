<?php

namespace App\Http\Middleware;

use App\Classes\Gorlabs\Themes\Facades\Theme;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class Gorlabs
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse) $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        //AddVarsFolder
        addJsonFileInVars('vars-files');
        $varsFilesContent = config('vars-files-content');
        $data = [];
        foreach ($varsFilesContent as $item) {
            $loop[] = $item;
            $data['files'] = $loop;
        }
        setVar('vars-files', $data);
        //dd($data);
        //Add files of vars folder
        $varsFiles = getVar('vars-files')['files'];
        foreach ($varsFiles as $file) {
            addJsonFileInVars($file);
        }
        $systemJsonMainData=config('gorlabs-robot-first-step');
        //dd($systemJsonMainData);
        setVar('system',$systemJsonMainData);
        //Save Added themes to database
        setAddedThemes();
        if (checkDBConnection()) {
            session()->put('admin_theme_category', env('ADMIN_THEME_CATEGORY'));
            session()->put('admin_theme', env('ADMIN_THEME'));
            session()->put('theme_category', env('THEME_CATEGORY'));
            session()->put('theme', env('THEME'));
            $adminPath = 'admins/' . session()->get('admin_theme_category') . '/' . session()->get('admin_theme');
            //$frontEndPath = 'frontends/' . session()->get('theme_category') . '/' . session()->get('theme');
            //setThemes();
            if ($request->is('admin/*'))
                Theme::init($adminPath);
            elseif ($request->is('admin'))
                Theme::init($adminPath);
            elseif ($request->is('login'))
                Theme::init($adminPath);
            elseif ($request->is('register'))
                Theme::init($adminPath);
            elseif ($request->is('owner'))
                Theme::init($adminPath);
            elseif ($request->is('owner/'))
                Theme::init($adminPath);
            //else
            //Theme::init($frontEndPath);
        }
        return $next($request);
    }
}
