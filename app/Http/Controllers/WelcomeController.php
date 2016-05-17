<?php namespace App\Http\Controllers;

class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$query = new \WP_Query(array(
            'category_name' => 'blog',
            'posts_per_page' => 3,
            'orderby' => 'date',
            'order'   => 'DESC'
        ));

        dd($posts = $query->get_posts());

        return View::make('post')->with('theme-parks', $posts);
        //return view('welcome');
	}

}
