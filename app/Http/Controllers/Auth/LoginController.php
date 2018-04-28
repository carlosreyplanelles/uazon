<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Facebook\Facebook;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/books';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function logout(Request $request)
    {
        $this->guard()->logout();
        $request->session()->flush();
        $request->session()->regenerate();
        return redirect('/books');
    }

    public function facebook(){
        $fb = new Facebook(['app_id'=>'226690111434793','app_secret'=>'8970b3f9310c8fede7241ffe9c34096f','default_graph_version'=>'']);
        $helper = $fb->getRedirectLoginHelper();
        $permissions = ['email'];
        $facebook_login = $helper->getLoginUrl(env('FACEBOOK_CALLBACK_URL'), $permissions);
        return redirect()->away($facebook_login);
    }

    public function loginFacebook(){
        $fb = new Facebook(['app_id'=>'226690111434793','app_secret'=>'8970b3f9310c8fede7241ffe9c34096f','default_graph_version'=>'']);
        $helper = $fb->getRedirectLoginHelper();
        if (isset($_GET['state'])) {
            $helper->getPersistentDataHandler()->set('state', $_GET['state']);
        }
        $accessToken = $helper->getAccessToken(env('FACEBOOK_CALLBACK_URL'));
        $oAuth2Client = $fb->getOAuth2Client();
        if (! $accessToken->isLongLived()) {
            try {
                $accessToken = $oAuth2Client->getLongLivedAccessToken((string) $accessToken);
            } catch (\Facebook\Exceptions\FacebookSDKException $e) {
                echo "<p>Error getting long-lived access token: " . $helper->getMessage() . "</p>\n\n";
                exit;
            }
        }
        $_SESSION['fb_access_token'] = (string) $accessToken;
        $fb->setDefaultAccessToken($accessToken);
        $response = $fb->get('/me?fields=id,first_name,last_name,picture,email');
        $info = $response->getGraphUser();
        return $info;
    }
}
