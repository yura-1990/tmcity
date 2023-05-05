<?php

namespace App\Http\Controllers;

use App\Models\AboutCompony;
use App\Models\CompanyActivity;
use App\Models\HomeHead;
use App\Models\HomeMenu;
use App\Models\InstitutionUnderNumber;
use App\Models\Leadership;
use App\Models\LeftContact;
use App\Models\Logo;
use App\Models\News;
use App\Models\Service;
use App\Models\ServiceItem;
use App\Models\Structure;
use App\Traits\LocaleTrait;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class HomeController extends Controller
{
    use LocaleTrait;
    public function index(): Factory|View|Application
    {
        $locales = config('app.all_locales');
        $homeMenus = HomeMenu::query()->get();
        $homeHeads = HomeHead::query()->select(LocaleTrait::locale('title'),LocaleTrait::locale('text'), 'background_image', 'url')->get();
        $logo = Logo::query()->latest()->first();
        $allActivities = CompanyActivity::query()->select(LocaleTrait::locale('activity_type'),LocaleTrait::locale('activity_text'), 'icon')->get();
        $news = News::query()->select(LocaleTrait::locale('text'),LocaleTrait::locale('title'), 'images')->get();
        $services = Service::query()->select(LocaleTrait::locale('text'),LocaleTrait::locale('title'), 'images')->first();
        $serviceItems = ServiceItem::query()->select(LocaleTrait::locale('text_item'))->get();
        $institutions = InstitutionUnderNumber::query()->select(LocaleTrait::locale('text'), 'icon', 'number')->get();

        return view('welcome', compact('locales', 'homeMenus', 'logo', 'homeHeads', 'allActivities', 'news', 'services', 'serviceItems', 'institutions'));
    }



    public function locale($local): RedirectResponse
    {
        app()->setLocale($local);
        session()->put('locale', $local);
        return redirect()->back();
    }

    public function contact(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'text' => 'required|min:10'
        ]);

        LeftContact::query()->create([
            'name' => $data['name'],
            'email' => $data['email'],
            'message' => $data['text']
        ]);

        return redirect()->back();
    }

    public function news(): Factory|View|Application
    {
        $locales = config('app.all_locales');
        $homeMenus = HomeMenu::query()->select(LocaleTrait::locale('menu_name'), 'url')->get();
        $homeHeads = HomeHead::query()->select(LocaleTrait::locale('title'),LocaleTrait::locale('text'), 'background_image', 'url')->get();
        $logo = Logo::query()->latest()->first();
        $news = News::query()->select(LocaleTrait::locale('text'),LocaleTrait::locale('title'), 'images', 'id')->paginate(4);

        return view('news.news', compact('news', 'locales', 'homeMenus', 'logo', 'homeHeads'));
    }

    public function oneNews($id): Factory|View|Application
    {
        $locales = config('app.all_locales');
        $homeMenus = HomeMenu::query()->select(LocaleTrait::locale('menu_name'), 'url')->get();
        $homeHeads = HomeHead::query()->select(LocaleTrait::locale('title'),LocaleTrait::locale('text'), 'background_image', 'url')->get();
        $logo = Logo::query()->latest()->first();
        $oneNews = News::query()->select(LocaleTrait::locale('text'),LocaleTrait::locale('title'), 'images', 'id')->where('id', $id)->first();
        return view('news.oneNews', compact('oneNews', 'locales', 'homeMenus', 'logo', 'homeHeads'));
    }

    public function about(): Factory|View|Application
    {
        $locales = config('app.all_locales');
        $homeMenus = HomeMenu::query()->select(LocaleTrait::locale('menu_name'), 'url')->get();
        $homeHeads = HomeHead::query()->select(LocaleTrait::locale('title'),LocaleTrait::locale('text'), 'background_image', 'url')->get();
        $logo = Logo::query()->latest()->first();
        $about = AboutCompony::query()->select(LocaleTrait::locale('title'),LocaleTrait::locale('text'), 'certificate')->first();
        return view('about.about', compact('about', 'locales', 'homeMenus', 'logo', 'homeHeads'));
    }

    public function structure(): Factory|View|Application
    {
        $locales = config('app.all_locales');
        $homeMenus = HomeMenu::query()->select(LocaleTrait::locale('menu_name'), 'url')->get();
        $homeHeads = HomeHead::query()->select(LocaleTrait::locale('title'),LocaleTrait::locale('text'), 'background_image', 'url')->get();
        $logo = Logo::query()->latest()->first();
        $structure = Structure::query()->select(LocaleTrait::locale('title'),LocaleTrait::locale('text'), 'structure_image')->first();
        return view('structure.structure', compact('structure', 'locales', 'homeMenus', 'logo', 'homeHeads'));
    }

    public function leadership(): Factory|View|Application
    {
        $locales = config('app.all_locales');
        $homeMenus = HomeMenu::query()->select(LocaleTrait::locale('menu_name'), 'url')->get();
        $homeHeads = HomeHead::query()->select(LocaleTrait::locale('title'),LocaleTrait::locale('text'), 'background_image', 'url')->get();
        $logo = Logo::query()->latest()->first();
        $leaderships = Leadership::query()->select('phone', 'email', LocaleTrait::locale('position'),LocaleTrait::locale('acceptance_days'),'full_name_latin', 'full_name_cyrillic', 'photo', 'icon')->get();
        return view('leadership.leadership', compact('leaderships', 'locales', 'homeMenus', 'logo', 'homeHeads'));
    }
}
