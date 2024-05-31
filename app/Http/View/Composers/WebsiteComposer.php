<?php 
namespace App\Http\View\Composers;

use Illuminate\View\View;
use App\Models\Website_config;

class WebsiteComposer
{
    protected $websiteHeader;

    public function __construct()
    {
        // Carregar os dados uma única vez
        $this->websiteHeader = Website_config::findOrFail(1);
    }

    public function compose(View $view)
    {
        // Disponibiliza os dados para todas as views
        $view->with('headerData', ['header' => $this->websiteHeader])
             ->with('footerData', ['footer' => $this->websiteHeader]);
    }
}

?>