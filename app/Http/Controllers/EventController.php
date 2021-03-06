<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Vehicles;
use MaddHatter\LaravelFullcalendar\Facades\Calendar;
use DB;
use Carbon\Carbon;

class EventController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $InsuranceExpiryEvents = [];
        $FitnessExpiryEvents = [];
        $LicencesExpiryEvents = [];
        $SerivceExpiryEvents = [];
        $data = Vehicles::all();
        if($data->count()) {
            foreach ($data as $key => $value) {
                $InsuranceExpiryEvents[] = Calendar::event(
                    $value->vehicle_no,
                    true,
                    new \DateTime($value->insurance_expairy),
                    new \DateTime($value->insurance_expairy.' +1 day'),
                    null,
                    // Add color and link on event
                    [
                        'color' => '#dc3545',
                        'url' => 'vehicles\{$value->id}\edit',
                    ]
                );
            }

            foreach ($data as $key => $value) {
                $FitnessExpiryEvents[] = Calendar::event(
                    $value->vehicle_no,
                    true,
                    new \DateTime($value->fitness_expairy),
                    new \DateTime($value->fitness_expairy.' +1 day'),
                    null,
                    // Add color and link on event
                    [
                        'color' => '#007bff',
                        'url' => 'vehicles\{$value->id}\edit',
                    ]
                );
            }

            foreach ($data as $key => $value) {
                $LicencesExpiryEvents[] = Calendar::event(
                    $value->vehicle_no,
                    true,
                    new \DateTime($value->licence_expairy),
                    new \DateTime($value->licence_expairy.' +1 day'),
                    null,
                    // Add color and link on event
                    [
                        'color' => '#ffc107',
                        'url' => 'vehicles\{$value->id}\edit',
                    ]
                );
            }

            foreach ($data as $key => $value) {
                $SerivceExpiryEvents[] = Calendar::event(
                    $value->vehicle_no,
                    true,
                    new \DateTime($value->service_expiration),
                    new \DateTime($value->service_expiration.' +1 day'),
                    null,
                    // Add color and link on event
                    [
                        'color' => '#000034',
                        'url' => 'vehicles\{$value->id}\edit',
                    ]
                );
            }
        }

        $events= array_merge($InsuranceExpiryEvents, $FitnessExpiryEvents,$LicencesExpiryEvents,$SerivceExpiryEvents);
        $calendar = Calendar::addEvents($events);
        return view('eventTracker.events', compact('calendar'));
    }

    public function indexInsurancesOnly()
    {
        $InsuranceExpiryEvents = [];
        $data = Vehicles::all();
        if($data->count()) {
            foreach ($data as $key => $value) {
                $InsuranceExpiryEvents[] = Calendar::event(
                    $value->vehicle_no,
                    true,
                    new \DateTime($value->insurance_expairy),
                    new \DateTime($value->insurance_expairy.' +1 day'),
                    null,
                    // Add color and link on event
                    [
                        'color' => '#dc3545',
                        'url' => 'vehicles\{$value->id}\edit',
                    ]
                );
            }
        }
        $calendar = Calendar::addEvents($InsuranceExpiryEvents);
        return view('eventTracker.events', compact('calendar'));
    }

    public function indexLicenseOnly()
    {
        $LicencesExpiryEvents=[];
        $data = Vehicles::all();
        if($data->count()) {

            foreach ($data as $key => $value) {
                $LicencesExpiryEvents[] = Calendar::event(
                    $value->vehicle_no,
                    true,
                    new \DateTime($value->licence_expairy),
                    new \DateTime($value->licence_expairy.' +1 day'),
                    null,
                    // Add color and link on event
                    [
                        'color' => '#ffc107',
                        'url' => 'vehicles\{$value->id}\edit',
                    ]
                );
            }
        }
        $calendar = Calendar::addEvents($LicencesExpiryEvents);
        return view('eventTracker.events', compact('calendar'));
    }

    public function indexFittnessOnly()
    {
        $FitnessExpiryEvents = [];
        $data = Vehicles::all();
        if($data->count()) {
            foreach ($data as $key => $value) {
                $FitnessExpiryEvents[] = Calendar::event(
                    $value->vehicle_no,
                    true,
                    new \DateTime($value->fitness_expairy),
                    new \DateTime($value->fitness_expairy.' +1 day'),
                    null,
                    // Add color and link on event
                    [
                        'color' => '#007bff',
                        'url' => 'vehicles\{$value->id}\edit',
                    ]
                );
            }

        }
        $calendar = Calendar::addEvents($FitnessExpiryEvents);
        return view('eventTracker.events', compact('calendar'));
    }

    public function indexServiceOnly()
    {
        $SerivceExpiryEvents = [];
        $data = Vehicles::all();
        if($data->count()) {
            foreach ($data as $key => $value) {
                $SerivceExpiryEvents[] = Calendar::event(
                    $value->vehicle_no,
                    true,
                    new \DateTime($value->service_expiration),
                    new \DateTime($value->service_expiration.' +1 day'),
                    null,
                    // Add color and link on event
                    [
                        'color' => '#000034',
                        'url' => 'vehicles\{$value->id}\edit',
                    ]
                );
            }

        }
        $calendar = Calendar::addEvents($SerivceExpiryEvents);
        return view('eventTracker.events', compact('calendar'));
    }

    public function eventsListView()
    {
        $eventlist=Vehicles::where('service_expiration', '>=', Carbon::now()->startOfMonth())
                   ->orwhere('insurance_expairy', '>=', Carbon::now()->startOfMonth())
                   ->orwhere('licence_expairy', '>=', Carbon::now()->startOfMonth())
                   ->orwhere('fitness_expairy', '>=', Carbon::now()->startOfMonth())->get();


        return view('eventTracker.eventsList')->with('eventsList',$eventlist);

    }


}
