<?php namespace App\Http\ViewComposer;
use Illuminate\Contracts\View\View;
class AppNameComposer {
/**
* Bind data to the view.
*
* @param View $view
* @return void
*/
public function compose(View $view)
{
$view->with('app_name', 'Aplikasi Kur kur Online');
}
}