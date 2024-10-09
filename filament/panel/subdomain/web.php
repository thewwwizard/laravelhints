## when using Filament panel with subdomain, route config will be overwritten by your web.php main routing config file
## use this code to add filament routing rules before main routing config 

use Filament\Facades\Filament;
use Illuminate\Support\Facades\Route;

Filament::getPanel('backend')->routes(null);

Route::get('/', function () {
    return view('welcome');
});
