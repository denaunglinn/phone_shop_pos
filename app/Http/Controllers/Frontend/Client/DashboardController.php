<?php

namespace App\Http\Controllers\Frontend\Client;

use App\Helper\FontConvert;
use App\Helper\ResponseHelper;
use App\Http\Controllers\Controller;
use App\Models\AccountType;
use App\Models\Booking;
use App\Models\CardType;
use App\Models\ExtraInvoice;
use App\Models\Invoice;
use App\Models\Payslip;
use App\Models\Tax;
use App\Models\User;
use App\Models\UserCreditCard;
use App\Models\UserNrcPicture;
use App\Models\UserProfile;
use Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Spatie\ImageOptimizer\OptimizerChainFactory;
use Storage;
use Yajra\DataTables\DataTables;

class DashboardController extends Controller
{
    public function index()
    {
    }

   

}
