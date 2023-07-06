<?php

    namespace App\Http\Controllers;
    
    use Illuminate\Routing\Controller;
    use App\Models\User;
    class HomeController extends Controller{

public function home(){
    $session_id=session('user_id');
    $user=User::find($session_id);
    return view('home')->with('username', $user);
}

public function avventura()   
    { 
        $session_id=session('user_id');
        $user=User::find($session_id);
        return view('avventura')->with('username', $user);
    }

    public function cultura()   
    { 
        $session_id=session('user_id');
        $user=User::find($session_id);
        return view('cultura')->with('username', $user);
    }
    public function divertimento()   
    { 
        $session_id=session('user_id');
        $user=User::find($session_id);
        return view('divertimento')->with('username', $user);
    }

    public function relax()   
    { 
        $session_id=session('user_id');
        $user=User::find($session_id);
        return view('relax')->with('username', $user);
    }
   
    public function eventi(){
        $API_KEY= env('KEY_EVENTI'); 
        $endpoint="https://app.ticketmaster.com/discovery/v2/events.json?countryCode=GB&apikey=";
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $endpoint.$API_KEY);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec($curl);
        curl_close($curl);
        echo $result;
    }

    public function news($query){

        $rest_url='https://newsapi.org/v2/everything?';
    
        $json=Http::get($rest_url,[
            'q' => $query,
            'language' => 'it',
            'apikey' => '3840884f7e17432787ec144bade5c59a'
        ]);
    
        return $json;
    }
    

}

?>