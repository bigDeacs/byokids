<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use SearchResults;
use Mail;
use SoapClient;

class SiteController extends Controller {

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

	protected $data = [];

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
		$this->data = [];
	}

	/**
	 * Category IDs:
	 * 'blog' = 1
	 * 'competitions' = 42
	 * 'things-to-know' = 43
	 * 'holiday-deals' = 6
	 * 'edm-deals' = 41
	 * 'holiday-parks' = 2
	 * 'accomodation' = 4
	 * 'theme-parks' = 3	 
	 * 'destinations' = 5
	 * 'Ad1' = 72
	 * 'Ad2' = 73
	 *
	 * @return Response
	 */
	public function index()
	{	
		$this->data['destinations'] = getCategory(5, 10);
		$this->data['ad1'] = getCategory(72, 1);
		$this->data['ad2'] = getCategory(73, 1);
		$this->data['blog'] = getCategory(1, 4); 
		try {
		  	$cClient = new SoapClient('http://deals.ourvacationcentre.com.au/wsdl/get-cruise-deals.wsdl');
		  	$cParams = array(3, 54);
	  		$this->data['cruises'] = $cClient->doHello($cParams); 
		} catch(SoapFault $cE){
	  		var_dump($cE);
		}
		try {
		  	$rClient = new SoapClient('http://deals.ourvacationcentre.com.au/wsdl/get-resort-deals.wsdl');
		  	$rParams = array(3, 54);
	  		$this->data['resorts'] = $rClient->doHello($rParams); 
		} catch(SoapFault $rE){
	  		var_dump($rE);
		}
		try {
		  	$tClient = new SoapClient('http://deals.ourvacationcentre.com.au/wsdl/get-tour-deals.wsdl');
		  	$tParams = array(3, 54);
	  		$this->data['tours'] = $tClient->doHello($tParams); 
		} catch(SoapFault $tE){
	  		var_dump($tE);
		}
		try {
		  	$pClient = new SoapClient('http://deals.ourvacationcentre.com.au/wsdl/get-package-deals.wsdl');
		  	$pParams = array(3, 54);
	  		$this->data['packages'] = $pClient->doHello($pParams); 
		} catch(SoapFault $pE){
	  		var_dump($pE);
		}

        $data = $this->data;
		return view('index', $data);
	}

	/**
	 * Category ID:
	 * 'holiday-deals' = 6
	 *
	 * @return Response
	 */
	public function deals($slug = 1)
	{	
        try {
		  	$cClient = new SoapClient('http://deals.ourvacationcentre.com.au/wsdl/get-cruise-deals.wsdl');
		  	$cParams = array(9, 54);
	  		$this->data['cruises'] = $cClient->doHello($cParams); 
		} catch(SoapFault $cE){
	  		var_dump($cE);
		}
		try {
		  	$rClient = new SoapClient('http://deals.ourvacationcentre.com.au/wsdl/get-resort-deals.wsdl');
		  	$rParams = array(9, 54);
	  		$this->data['resorts'] = $rClient->doHello($rParams); 
		} catch(SoapFault $rE){
	  		var_dump($rE);
		}
		try {
		  	$tClient = new SoapClient('http://deals.ourvacationcentre.com.au/wsdl/get-tour-deals.wsdl');
		  	$tParams = array(9, 54);
	  		$this->data['tours'] = $tClient->doHello($tParams); 
		} catch(SoapFault $tE){
	  		var_dump($tE);
		}
		try {
		  	$pClient = new SoapClient('http://deals.ourvacationcentre.com.au/wsdl/get-package-deals.wsdl');
		  	$pParams = array(9, 54);
	  		$this->data['packages'] = $pClient->doHello($pParams); 
		} catch(SoapFault $pE){
	  		var_dump($pE);
		}

        $data = $this->data;
		return view('deals', $data);
	}

	public function search(Request $request)
	{	
		if($request->input('_type') == 'holiday') {
        	return $this->destination($request->input('destination'));
		} elseif($request->input('_type') == 'cruise') {
			return $this->cruise($request->input('destination'), $request->input('cruiseline'), $request->input('duration'), $request->input('date'));
		} elseif($request->input('_type') == 'tour') {
			return $this->tour($request->input('destination'), $request->input('provider'), $request->input('duration'), $request->input('date'));
		} elseif($request->input('_type') == 'hotel') {						
			return $this->hotel($request->input('city'), date("Y-m-d", strtotime($request->input('checkInDate'))), date("Y-m-d", strtotime($request->input('checkOutDate'))));
		} elseif($request->input('_type') == 'resort') {						
			return $this->resort($request->input('destination'), $request->input('location'), $request->input('checkin'));
		} else {
			return 'this is for not cruise results';
		}
	}

	public function destination($destination = null)
	{	
        $ppp = 10;
    	$this->data['content'] = getCategory(5, $ppp, $destination);
    	$this->data['current_page'] = $destination;
    	$this->data['max_pages'] = count(getCategory(5)) / $ppp;
        $this->data['parent'] = 'Destinations';
        $data = $this->data;
		return view('category', $data);
		return view('destination', $data);
	}

	public function cruise($destination = null, $cruiseline = null, $duration = null, $date = null)
	{	
		$this->data['params'] = ['destination' => $destination, 'cruiseline' => $cruiseline, 'duration' => $duration, 'date' => $date];
        $data = $this->data;
		return view('cruise', $data);
	}

	public function tour($destination = null, $provider = null, $duration = null)
	{	
		$this->data['params'] = ['destination' => $destination, 'provider' => $provider, 'duration' => $duration];
        $data = $this->data;
		return view('tour', $data);
	}

	public function hotel($destination = null, $checkin = null, $checkout = null)
	{	
		$this->data['params'] = ['destination' => $destination, 'checkin' => $checkin, 'checkout' => $checkout];
        $data = $this->data;
		return view('hotel', $data);
	}

	public function resort($destination = null, $location = null, $checkin = null)
	{	
		$this->data['params'] = ['destination' => $destination, 'location' => $location, 'checkin' => $checkin];
        $data = $this->data;
		return view('resort', $data);
	}

	public function about()
	{	
        $data = $this->data;
		return view('about', $data);
	}

	public function brochures()
	{	
        $this->data['content'] = getPage('free-brochures');
        $data = $this->data;
		return view('brochures', $data);
	}

	public function quote($type = null, $slug = null)
	{	
        $this->data['params'] = ['type' => $type, 'slug' => $slug];
        $data = $this->data;
		return view('quote', $data);
	}

	public function quoteRequest(Request $request)
	{	
       Mail::send('emails.quote',
	        [
	        	'deal' => $request->get('deal'), 
	        	'name' => $request->get('fname'). ' ' .$request->get('lname'), 
	        	'email' => $request->get('email'), 
	        	'city' => $request->get('city'),
	        	'suburb' => $request->get('suburb'), 
	        	'phone' => $request->get('phone'), 
	        	'department' => $request->get('department'), 
	        	'adults' => $request->get('adults'), 
	        	'children' => $request->get('children'), 
	        	'ages' => $request->get('ages'), 
	        	'departure' => $request->get('departure'), 
	        	'return' => $request->get('return'), 
	        	'comments' => $request->get('comments')
	        ], function($message)
	   	 	{
	        	$message->from('donotreply@byokids.com.au');
	        	//$message->to('info@byokids.com.au', 'Admin')->cc('John.Braid@ourvacationcentre.com', 'John')->subject('Cruise Megastore Quote Request');
	        	$message->to('brentdeacon23@gmail.com', 'Admin')->subject('BYOKids Quote Request');
	    	}
	    );
	}

	public function contact()
	{	
        $data = $this->data;
		return view('contact', $data);
	}

	public function newsletter()
	{	
        $data = $this->data;
		return view('newsletter', $data);
	}

	public function legal()
	{	
        $data = $this->data;
		return view('legal', $data);
	}

	public function cruiseDeal($slug)
	{	
		try {
			$deals_brand_id = 54;
		    //$sClient = new SoapClient('http://deals.ourvacationcentre.com.au/wsdl/cruise-deal.wsdl', array('cache_wsdl'=>WSDL_CACHE_MEMORY));
		    $wsdl = 'http://deals.ourvacationcentre.com.au/wsdl/cruise-deal.wsdl';
				file_get_contents($wsdl);
				$sClient = new SoapClient($wsdl, array(
					'soap_version' => SOAP_1_1,
					'trace' => 1,
					'cache_wsdl' => WSDL_CACHE_NONE, // this is important for the purpose of the test
					'exception' => true,
				));
		    $params = array($slug, $deals_brand_id); 
		    $this->data['deal'] = $sClient->doHello($params);
		    if (!$this->data['deal']['deal_name']) {
		      //header('Location: /?error=no-deal-found');
		    }
		  } catch (SoapFault $e) {
		    var_dump($e);
		  }
		$this->data['enquire'] = true;

		 try {
		  	$cClient = new SoapClient('http://deals.ourvacationcentre.com.au/wsdl/get-cruise-deals.wsdl');
		  	$cParams = array(9, 54);
	  		$this->data['cruises'] = $cClient->doHello($cParams); 
		} catch(SoapFault $cE){
	  		var_dump($cE);
		}
		
        $data = $this->data;
		return view('cruise-deal', $data);
	}

	public function resortDeal($slug)
	{	
		try {
			$deals_brand_id = 54;
		    //$sClient = new SoapClient('http://deals.ourvacationcentre.com.au/wsdl/cruise-deal.wsdl', array('cache_wsdl'=>WSDL_CACHE_MEMORY));
		    $wsdl = 'http://deals.ourvacationcentre.com.au/wsdl/resort-deal.wsdl';
				file_get_contents($wsdl);
				$sClient = new SoapClient($wsdl, array(
					'soap_version' => SOAP_1_1,
					'trace' => 1,
					'cache_wsdl' => WSDL_CACHE_NONE, // this is important for the purpose of the test
					'exception' => true,
				));
		    $params = array($slug, $deals_brand_id); 
		    $this->data['deal'] = $sClient->doHello($params);
		    if (!$this->data['deal']['deal_name']) {
		      //header('Location: /?error=no-deal-found');
		    }
		  } catch (SoapFault $e) {
		    var_dump($e);
		  }
		$this->data['enquire'] = true;

		try {
		  	$rClient = new SoapClient('http://deals.ourvacationcentre.com.au/wsdl/get-resort-deals.wsdl');
		  	$rParams = array(9, 54);
	  		$this->data['resorts'] = $rClient->doHello($rParams); 
		} catch(SoapFault $rE){
	  		var_dump($rE);
		}
		

        $data = $this->data;
		return view('resort-deal', $data);
	}

	public function tourDeal($slug)
	{	
		try {
			$deals_brand_id = 54;
		    //$sClient = new SoapClient('http://deals.ourvacationcentre.com.au/wsdl/cruise-deal.wsdl', array('cache_wsdl'=>WSDL_CACHE_MEMORY));
		    $wsdl = 'http://deals.ourvacationcentre.com.au/wsdl/tour-deal.wsdl';
				file_get_contents($wsdl);
				$sClient = new SoapClient($wsdl, array(
					'soap_version' => SOAP_1_1,
					'trace' => 1,
					'cache_wsdl' => WSDL_CACHE_NONE, // this is important for the purpose of the test
					'exception' => true,
				));
		    $params = array($slug, $deals_brand_id); 
		    $this->data['deal'] = $sClient->doHello($params);
		    if (!$this->data['deal']['deal_name']) {
		      //header('Location: /?error=no-deal-found');
		    }
		  } catch (SoapFault $e) {
		    var_dump($e);
		  }
		$this->data['enquire'] = true;

		try {
		  	$tClient = new SoapClient('http://deals.ourvacationcentre.com.au/wsdl/get-tour-deals.wsdl');
		  	$tParams = array(9, 54);
	  		$this->data['tours'] = $tClient->doHello($tParams); 
		} catch(SoapFault $tE){
	  		var_dump($tE);
		}

        $data = $this->data;
		return view('tour-deal', $data);
	}

	public function packageDeal($slug)
	{	
		try {
			$deals_brand_id = 54;
		    //$sClient = new SoapClient('http://deals.ourvacationcentre.com.au/wsdl/cruise-deal.wsdl', array('cache_wsdl'=>WSDL_CACHE_MEMORY));
		    $wsdl = 'http://deals.ourvacationcentre.com.au/wsdl/package-deal.wsdl';
				file_get_contents($wsdl);
				$sClient = new SoapClient($wsdl, array(
					'soap_version' => SOAP_1_1,
					'trace' => 1,
					'cache_wsdl' => WSDL_CACHE_NONE, // this is important for the purpose of the test
					'exception' => true,
				));
		    $params = array($slug, $deals_brand_id); 
		    $this->data['deal'] = $sClient->doHello($params);
		    if (!$this->data['deal']['deal_name']) {
		      //header('Location: /?error=no-deal-found');
		    }
		  } catch (SoapFault $e) {
		    var_dump($e);
		  }
		$this->data['enquire'] = true;

		try {
		  	$pClient = new SoapClient('http://deals.ourvacationcentre.com.au/wsdl/get-package-deals.wsdl');
		  	$pParams = array(9, 54);
	  		$this->data['packages'] = $pClient->doHello($pParams); 
		} catch(SoapFault $pE){
	  		var_dump($pE);
		}
		
        $data = $this->data;
		return view('package-deal', $data);
	}

	/**
	 * Category ID:
	 * 'destinations' = 5
	 *
	 * @return Response
	 */
	public function destinations($slug = 1)
	{	
        if(is_numeric($slug)) {
        	$ppp = 10;
        	$this->data['content'] = getCategory(5, $ppp, $slug);
        	$this->data['current_page'] = $slug;
        	$this->data['max_pages'] = count(getCategory(5)) / $ppp;
	        $this->data['parent'] = 'Destinations';
	        $data = $this->data;
			return view('category', $data);
    	} else {
    		$this->data['content'] = getPost($slug, 1)[0];
        	$this->data['enquire'] = true;
        	$this->data['parent'] = 'Destinations';
        	$this->data['latestPosts'] = getCategoryWithChildren(5, 3, null, [$this->data['content']->ID]);
        	$data = $this->data;
			return view('blog', $data);
        }
	}

	/**
	 * Category ID:
	 * 'blog' = 1
	 * 'competitions' = 42
	 * 'things-to-know' = 43
	 *
	 * @return Response
	 */
	public function blog($slug = 1)
	{	
        if(is_numeric($slug)) {
        	$ppp = 10;
			$this->data['content'] = getCategoryWithChildren(1, $ppp, $slug);
        	$this->data['current_page'] = $slug;
        	$this->data['max_pages'] = count(getCategoryWithChildren(1)) / $ppp;
	        $this->data['parent'] = 'Blog';
	        $data = $this->data;
			return view('category', $data);
    	} else {
    		$this->data['content'] = getPost($slug, 1)[0];
        	$this->data['enquire'] = false;
        	$this->data['parent'] = 'Blog';
        	$this->data['latestPosts'] = getCategoryWithChildren(1, 3, null, [$this->data['content']->ID]);
        	$data = $this->data;
			return view('blog', $data);
        }
	}

	

	/**
	 * Category ID:
	 * 'edm-deals' = 41
	 *
	 * @return Response
	 */
	public function edm($slug = 1)
	{	
        if(is_numeric($slug)) {
        	$ppp = 10;
        	$this->data['content'] = getCategoryWithChildren(41, $ppp, $slug);
        	$this->data['current_page'] = $slug;
        	$this->data['max_pages'] = count(getCategoryWithChildren(41)) / $ppp;
	        $this->data['parent'] = 'EDM Deals';
	        $data = $this->data;
			return view('category', $data);
    	} else {
    		$this->data['content'] = getPost($slug, 1)[0];
        	$this->data['enquire'] = true;
        	$this->data['parent'] = 'EDM Deals';
        	$this->data['latestPosts'] = getCategoryWithChildren(41, 3, null, [$this->data['content']->ID]);
        	$data = $this->data;
			return view('blog', $data);
        }
	}

	/**
	 * Category ID:
	 * 'holiday-parks' = 2
	 *
	 * @return Response
	 */
	public function holidayParks($slug = 1)
	{	
        if(is_numeric($slug)) {
        	$ppp = 10;
        	$this->data['content'] = getCategoryWithChildren(2, $ppp, $slug);
        	$this->data['current_page'] = $slug;
        	$this->data['max_pages'] = count(getCategoryWithChildren(2)) / $ppp;
	        $this->data['parent'] = 'Holiday Parks';
	        $data = $this->data;
			return view('category', $data);
    	} else {
    		$this->data['content'] = getPost($slug, 1)[0];
        	$this->data['enquire'] = true;
        	$this->data['parent'] = 'Holiday Parks';
        	$this->data['latestPosts'] = getCategoryWithChildren(2, 3, null, [$this->data['content']->ID]);
        	$data = $this->data;
			return view('blog', $data);
        }
	}

	/**
	 * Category ID:
	 * 'theme-parks' = 3
	 *
	 * @return Response
	 */
	public function themeParks($slug = 1)
	{	
        if(is_numeric($slug)) {
        	$ppp = 10;
        	$this->data['content'] = getCategoryWithChildren(3, $ppp, $slug);
        	$this->data['current_page'] = $slug;
        	$this->data['max_pages'] = count(getCategoryWithChildren(3)) / $ppp;
	        $this->data['parent'] = 'Theme Parks';
	        $data = $this->data;
			return view('category', $data);
    	} else {
    		$this->data['content'] = getPost($slug, 1)[0];
        	$this->data['enquire'] = true;
        	$this->data['parent'] = 'Theme Parks';
        	$this->data['latestPosts'] = getCategoryWithChildren(3, 3, null, [$this->data['content']->ID]);
        	$data = $this->data;
			return view('blog', $data);
        }
	}

	/**
	 * Category ID:
	 * 'accomodation' = 4
	 *
	 * @return Response
	 */
	public function accommodation($slug = 1)
	{	
        if(is_numeric($slug)) {
        	$ppp = 10;
        	$this->data['content'] = getCategoryWithChildren(4, $ppp, $slug);
        	$this->data['current_page'] = $slug;
        	$this->data['max_pages'] = count(getCategoryWithChildren(4)) / $ppp;
	        $this->data['parent'] = 'Accommodation';
	        $data = $this->data;
			return view('category', $data);
    	} else {
    		$this->data['content'] = getPost($slug, 1)[0];
        	$this->data['enquire'] = true;
        	$this->data['parent'] = 'Accommodation';
        	$this->data['latestPosts'] = getCategoryWithChildren(4, 3, null, [$this->data['content']->ID]);
        	$data = $this->data;
			return view('blog', $data);
        }
	}


}
