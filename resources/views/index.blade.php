@extends('app')

@section('meta')
	<title>BYOkids | Your Family Travel Gurus</title>
@endsection

@section('head')
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.5&appId=1428829950709319";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
@endsection

@section('header')
	<div class="row no-gutter padding-top-10">
    	<!--<div class="col-md-6 col-sm-8 col-xs-12">
		  	<div class="panel panel-default">
				<ul class="nav nav-tabs" role="tablist">
				    <li role="presentation" class="text-uppercase active"><a href="#holiday-form" aria-controls="holiday" role="tab" data-toggle="tab"><i class="fa fa-3x fa-suitcase"></i><br /><span class="tab-heading"><strong>Holiday</strong></span></a></li>
				    <li role="presentation" class="text-uppercase"><a href="#cruise-form" aria-controls="cruise" role="tab" data-toggle="tab"><i class="fa fa-3x fa-ship"></i><br /><span class="tab-heading"><strong>Cruise</strong></span></a></li>
			    	<li role="presentation" class="text-uppercase"><a href="#tour-form" aria-controls="tour" role="tab" data-toggle="tab"><i class="fa fa-3x fa-globe"></i><br /><span class="tab-heading"><strong>Tour</strong></span></a></li>
			    	<li role="presentation" class="text-uppercase"><a href="#hotel-form" aria-controls="hotel" role="tab" data-toggle="tab"><i class="fa fa-3x fa-bed"></i><br /><span class="tab-heading"><strong>Hotel</strong></span></a></li>
			    	<li role="presentation" class="text-uppercase hidden-xs"><a href="#resort-form" aria-controls="resort" role="tab" data-toggle="tab"><i class="fa fa-3x fa-building"></i><br /><span class="tab-heading"><strong>Resort</strong></span></a></li>
			  	</ul>
			
				<div class="panel-body">
					<div class="tab-content">
					    <div role="tabpanel" class="tab-pane active" id="holiday-form">
					    	<form action="/search" method="POST">
					    		<input type="hidden" name="_token" value="{{ csrf_token() }}">
					    		<input type="hidden" name="_type" value="holiday">
								<div class="form-group">
									<p>We have amazing deals available</p>
								    <select class="form-control" name="destination">
								    	<option value="5">All Holiday Destinations</option>
								    	@foreach($destinations as $destination)
								    		<option value="{!! $destination->term_id !!}">{!! $destination->name !!}</option>
								    	@endforeach
								    </select>
								</div>
								<button type="submit" class="btn btn-success btn-block text-uppercase">Search</button>
							</form>
					    </div>
					    <div role="tabpanel" class="tab-pane" id="cruise-form">
					    	<form action="/search" method="POST">
					    		<input type="hidden" name="_token" value="{{ csrf_token() }}">
					    		<input type="hidden" name="_type" value="cruise">
								<div class="form-group">
								    <select class="form-control" name="destination">
								    	<option value='-99'>All Destinations</option><option value='1'>Africa</option><option value='2'>Alaska</option><option value='83' selected='selected'>Alaska Cruise Tours</option><option value='41'>Antarctic</option><option value='136'>Arctic</option><option value='37'>Asia</option><option value='694'>Asia River Cruise</option><option value='515'>Australia</option><option value='3'>Australia/New Zealand</option><option value='4'>Bahamas</option><option value='5'>Bermuda</option><option value='616'>Canada</option><option value='6'>Canada/New England</option><option value='19'>Caribbean</option><option value='7'>Caribbean, Eastern</option><option value='21'>Caribbean, Exotic</option><option value='8'>Caribbean, Southern</option><option value='9'>Caribbean, Western</option><option value='42'>Central America</option><option value='696'>China River Cruise</option><option value='29'>East Coast</option><option value='697'>Egypt River Cruise</option><option value='54'>Europe</option><option value='698'>Europe River Cruise</option><option value='20'>Europe, Mediterranean</option><option value='10'>Europe, Northern</option><option value='73'>Europe, Western</option><option value='11'>Far East</option><option value='12'>Hawaii</option><option value='14'>Mexican Baja/Riviera</option><option value='59'>Middle East</option><option value='60'>New England</option><option value='62'>New Zealand</option><option value='15'>Pacific Coastal</option><option value='16'>Panama Canal</option><option value='38'>River Cruise, Americas</option><option value='17'>South America</option><option value='36'>South Pacific</option><option value='70'>Tahiti</option><option value='18'>Transatlantic</option><option value='39'>Transpacific</option><option value='74'>World Cruise</option>
								    </select>
								</div>
								<div class="form-group">
								    <select class="form-control" name="cruiseline">
								    	<option value='-99'>All Cruise Lines</option><option value='171'>American Queen Steamboat</option><option value='139'>APT - Australian Pacific Touring</option><option value='84'>Avalon Waterways AU</option><option value='116'>Azamara Club</option><option value='89'>Blue Lagoon  AU</option><option value='38'>Captain Cook</option><option value='243'>Captains Choice AU</option><option value='1'>Carnival Cruise Lines</option><option value='164'>Carnival Cruise Lines [AU/NZ]</option><option value='6'>Celebrity</option><option value='7'>Costa</option><option value='14'>Crystal</option><option value='9'>Disney</option><option value='3'>Holland America</option><option value='8'>Norwegian</option><option value='104'>P&O Cruises Australia</option><option value='129'>Pandaw River</option><option value='214'>Ponant AU</option><option value='2'>Princess Cruises</option><option value='15'>Regent Seven Seas</option><option value='4'>Royal Caribbean</option><option value='21'>Seabourn</option><option value='17'>Silversea</option><option value='40'>Star</option><option value='200'>Travelmarvel</option><option value='136'>Uniworld AU</option><option value='130'>Viking  AU</option><option value='24'>Windstar</option>
								    </select>
								</div>
								<div class="form-group">
								    <select class="form-control" name="duration">
								    	<option value='-99'>Any Duration</option><option value='1'>2-6 Nights</option><option value='2'>7-9 Nights</option><option value='3'>10-14 Nights</option><option value='4'>Over 14 Nights</option>
								    </select>
								</div>
								<div class="form-group">
								    <select class="form-control" name="date">
								    	<option value='-99X-99' selected='selected'>Any Date</option><option value='2X2016'>February 2016</option><option value='3X2016'>March 2016</option><option value='4X2016'>April 2016</option><option value='5X2016'>May 2016</option><option value='6X2016'>June 2016</option><option value='7X2016'>July 2016</option><option value='8X2016'>August 2016</option><option value='9X2016'>September 2016</option><option value='10X2016'>October 2016</option><option value='11X2016'>November 2016</option><option value='12X2016'>December 2016</option><option value='1X2017'>January 2017</option><option value='2X2017'>February 2017</option><option value='3X2017'>March 2017</option><option value='4X2017'>April 2017</option><option value='5X2017'>May 2017</option><option value='6X2017'>June 2017</option><option value='7X2017'>July 2017</option><option value='8X2017'>August 2017</option><option value='9X2017'>September 2017</option><option value='10X2017'>October 2017</option><option value='11X2017'>November 2017</option><option value='12X2017'>December 2017</option><option value='1X2018'>January 2018</option><option value='2X2018'>February 2018</option><option value='3X2018'>March 2018</option><option value='4X2018'>April 2018</option><option value='5X2018'>May 2018</option><option value='6X2018'>June 2018</option><option value='7X2018'>July 2018</option><option value='8X2018'>August 2018</option>
								    </select>
								</div>
								<button type="submit" class="btn btn-success btn-block text-uppercase">Search</button>
							</form>
					    </div>
					    <div role="tabpanel" class="tab-pane" id="tour-form">
					    	<form action="/search" method="POST">
					    		<input type="hidden" name="_token" value="{{ csrf_token() }}">
					    		<input type="hidden" name="_type" value="tour">
								<div class="form-group">
								    <select class="form-control" name="provider">
									    <option value="" >All Providers</option><option value="AAT Kings">AAT Kings</option><option value="Abercrombie and Kent">Abercrombie and Kent</option><option value="Albatross Tours">Albatross Tours</option><option value="APT">APT</option><option value="Back-Roads">Back-Roads</option><option value="Collette">Collette</option><option value="Contiki">Contiki</option><option value="Contours Travel">Contours Travel</option><option value="Cosmos">Cosmos</option><option value="Evergreen Tours">Evergreen Tours</option><option value="Explore">Explore</option><option value="G Adventures">G Adventures</option><option value="Geckos Adventures">Geckos Adventures</option><option value="Globus">Globus</option><option value="Great Trains of Europe Tours">Great Trains of Europe Tours</option><option value="Helen Wong">Helen Wong</option><option value="Insider Journeys">Insider Journeys</option><option value="Insight Gold">Insight Gold</option><option value="Insight Vacations">Insight Vacations</option><option value="Intrepid">Intrepid</option><option value="Mat McLachlan Battlefield Tour">Mat McLachlan Battlefield Tour</option><option value="Milestones Tours">Milestones Tours</option><option value="Orient Express">Orient Express</option><option value="Our Vacation Centre">Our Vacation Centre</option><option value="Outback Discovery">Outback Discovery</option><option value="Peregrine">Peregrine</option><option value="Rocky Mountaineer">Rocky Mountaineer</option><option value="Rovos Rail">Rovos Rail</option><option value="Scenic">Scenic</option><option value="The Captains Choice Tour">The Captains Choice Tour</option><option value="Trafalgar">Trafalgar</option><option value="Travel Indochina">Travel Indochina</option><option value="Travelmarvel">Travelmarvel</option><option value="Vacations Direct">Vacations Direct</option><option value="Wendy Wu">Wendy Wu</option><option value="Wildlife Safari">Wildlife Safari</option>
									</select>
								</div>
								<div class="form-group">
								    <select class="form-control" name="destination">
								    	<option value="1"  selected="selected">All Regions</option>
		                                <option value="2"  >Africa/Middle East/Egypt</option>
		                                <option value="3"  >Asia</option>
		                                <option value="4"  >Australia/NZ/South Pacific</option>
		                                <option value="5"  >Europe: UK</option>
		                                <option value="6"  >Europe: River Cruises</option>
		                                <option value="7"  >Europe: Western</option>
		                                <option value="8"  >Europe: Eastern</option>
		                                <option value="9"  >Europe: Mediterranean (Italy, Spain, Greece etc)</option>
		                                <option value="10" >Europe: Scandinavia/Russia/Baltics</option>
		                                <option value="11" >Europe: Multi Country/Panoramas</option>
		                                <option value="12" >South and Central America/Mexico/Antarctica</option>
		                                <option value="13" >North America: USA/Alaska/Hawaii</option>
		                                <option value="14" >North America: Canada</option>
									</select>
								</div>
								<div class="form-group">
								    <select class="form-control" name="duration">
								    	<option value="1" selected="selected">Any Duration</option>
		                                <option value="2" >0-1 Nights</option>
		                                <option value="3" >2-6 Nights</option>
		                                <option value="4" >7-9 Nights</option>
		                                <option value="5" >10-14 Nights</option>
		                                <option value="6" >Over 14 Nights</option>
									</select>
								</div>
								<button type="submit" class="btn btn-success btn-block text-uppercase">Search</button>
							</form>
					    </div>
						<div role="tabpanel" class="tab-pane" id="hotel-form">
					    	<form action="/search" method="POST">
					    		<input type="hidden" name="_token" value="{{ csrf_token() }}">
					    		<input type="hidden" name="_type" value="hotel">
					    		<input type='hidden' id='city' name='city' value="" />
        						<input type='hidden' id='hotel' name='hotel' value="" />
							  	<div class="form-group">
								   <input type="text" autocomplete="off" class="form-control" name="search" id="search" onkeyup="showResult(this.value)" placeholder="Find a hotel" required />
                					<div id="results" style="position:absolute;"></div>
					  			</div>
								<div class="form-group">
								   <div class='input-group date'>
					                    <input type="text" autocomplete="off" name="checkInDate" data-date-format="dd-mm-yyyy" class="form-control" required />
					                    <span class="input-group-addon">
					                        <span class="glyphicon glyphicon-calendar"></span>
					                    </span>
					                </div>
					  			</div>
					  			<div class="form-group">
								  <div class='input-group date'>
					                    <input type="text" autocomplete="off" name="checkOutDate" data-date-format="dd-mm-yyyy" class="form-control" required /> 
					                    <span class="input-group-addon">
					                        <span class="glyphicon glyphicon-calendar"></span>
					                    </span>
					                </div>
					  			</div>
							  	<button type="submit" class="btn btn-success btn-block text-uppercase">Search</button>
							</form>
					    </div>
					    <div role="tabpanel" class="tab-pane" id="resort-form">
					    	<form action="/search" method="POST">
					    		<input type="hidden" name="_token" value="{{ csrf_token() }}">
					    		<input type="hidden" name="_type" value="resort">
							  	<div class="form-group">
								    <select class="form-control" id="checkin" name="checkin">
								    	<option value="-99" selected="selected">- Select a Month</option>
										<option value="20160201">February 2016</option>
										<option value="20160301">March 2016</option>									
										<option value="20160401" selected="selected" >April 2016</option>									
										<option value="20160501">May 2016</option>									
										<option value="20160601">June 2016</option>									
										<option value="20160701">July 2016</option>									
										<option value="20160801">August 2016</option>									
										<option value="20160901">September 2016</option>									
										<option value="20161001">October 2016</option>									
										<option value="20161101">November 2016</option>									
										<option value="20161201">December 2016</option>									
										<option value="20170101">January 2017</option>									
										<option value="20170201">February 2017</option>									
										<option value="20170301">March 2017</option>									
										<option value="20170401">April 2017</option>									
										<option value="20170501">May 2017</option>									
										<option value="20170601">June 2017</option>									
										<option value="20170701">July 2017</option>									
										<option value="20170801">August 2017</option>									
										<option value="20170901">September 2017</option>									
										<option value="20171001">October 2017</option>									
										<option value="20171101">November 2017</option>									
										<option value="20171201">December 2017</option>									
										<option value="20180101">January 2018</option>
									</select>
								</div>
								<div class="form-group">
								    <select class="form-control" id="destination" name="destination" onchange="changeLocationList()">
								    	<option value="-99" selected="selected">- Select a Destination</option>			
										<option value="1">California</option>									
										<option value="2">Canada</option>									
										<option value="3">Florida</option>									
										<option value="4">Hawaii</option>									
										<option value="5">Mid-Atlantic Coast</option>									
										<option value="6">Midwest / Central</option>									
										<option value="7">New England</option>									
										<option value="8">Northwest</option>									
										<option value="9">Rocky Mountains</option>									
										<option value="10">Southern States</option>									
										<option value="11">Southwest</option>									
										<option value="12">Texas</option>									
											<option value="-98"></option>
											<option value="-98">** Worldwide Resorts **</option>										
										<option value="13">Asia Pacific</option>									
										<option value="14">Australia and New Zealand</option>									
										<option value="15">Caribbean</option>									
										<option value="16">Europe</option>									
										<option value="17">Mexico</option>									
										<option value="18">Middle East and Africa</option>									
										<option value="19">South and Central America</option>									
										<option value="20">South Pacific Islands</option>
									</select>
							  	</div>
							  	<div class="form-group">
							    	<select class="form-control" id="location" name="location">
							    		<option value="-99">- Select a Location</option>
									</select>
							  	</div>
							  	<button type="submit" class="btn btn-success btn-block text-uppercase">Search</button>
							</form>

							<script>
							    function changeLocationList() {
							        var x = document.getElementById("destination").value;
							        document.getElementById("location").innerHTML = document.getElementById("location_" + x).innerHTML;
							    }
							</script>

							<div id="location_-99" style="display:none;">
							    <option value="-99">- Select a Location</option>
							</div>
							<div id="location_-98" style="display:none;">
							    <option value="-99">- Select a Location</option>
							</div>
							<div id="location_1" style="display:none;">
						        <option value="-99">- Select a Location</option>
				               	<option value="SANF">San Francisco Area</option>									
								<option value="SCAL">Southern Coastal</option>									
								<option value="SCIN">Southern Inland</option>									
								<option value="TAHO">Lake Tahoe</option>
						    </div>
						    <div id="location_2" style="display:none;">
						        <option value="-99">- Select a Location</option>
				               	<option value="ECAN">Eastern / Ontario / Quebec</option>									
								<option value="WCAN">Western / N. Idaho / N. Montana / Alaska</option>									
						    </div>
						    <div id="location_3" style="display:none;">
						        <option value="-99">- Select a Location</option>
				               	<option value="FLKY">Keys</option>									
								<option value="FLNW">Northwest</option>	
								<option value="FLOR">Orlando Area</option>	
								<option value="FLPH">Panhandle</option>	
								<option value="FLSW">Southwest</option>	
								<option value="FLNE">Northeast</option>
								<option value="FLSE">Southeast</option>	
						    </div>
						    <div id="location_4" style="display:none;">
						        <option value="-99">- Select a Location</option>
				               	<option value="HAWI">All Islands</option>	
						    </div>
						    <div id="location_5" style="display:none;">
						        <option value="-99">- Select a Location</option>
				               	<option value="WILL">Williamsburg</option>									
								<option value="ECSO">Virginia, North & South Carolina</option>	
								<option value="HHDI">Coastal South Carolina, Hilton Head, Tybee Island</option>	
						    </div>
						    <div id="location_6" style="display:none;">
						        <option value="-99">- Select a Location</option>
				               	<option value="NINT">Interior - IN, OH, KY, VA, WV</option>									
								<option value="GRLK">North Central - MI, MN, WI, IA</option>	
								<option value="OZAR">Arkansas / Missouri (Ozarks)</option>	
						    </div>
						    <div id="location_7" style="display:none;">
						        <option value="-99">- Select a Location</option>
				               	<option value="ECNO">Northeast</option>									
								<option value="NENG">Inland - NH, VT, NY, MA, ME</option>	
								<option value="PENN">Pennsylvania (Poconos)</option>	
						    </div>
						    <div id="location_8" style="display:none;">
						        <option value="-99">- Select a Location</option>
				               	<option value="NWST">Washington / Oregon</option>	
						    </div>
						    <div id="location_9" style="display:none;">
						        <option value="-99">- Select a Location</option>
				               	<option value="WCAN">Western Canada / N. Idaho / N. Montana</option>									
								<option value="COLN">Colorado (N) - Copper Mtn, Estes, Steamboat</option>	
								<option value="COLS">Colorado (S)</option>	
								<option value="UTAH">Utah and Bear Lake, ID</option>	
								<option value="YELO">Yellowstone Area-WY / Idaho / Montana</option>	
						    </div>
						    <div id="location_10" style="display:none;">
						        <option value="-99">- Select a Location</option>
				               	<option value="GLFS">Gulf States - LA, MS, AL</option>									
								<option value="SINT">Interior AL / GA / MS / NC / SC</option>	
								<option value="SMOK">Smoky Mountains</option>	
						    </div>
						    <div id="location_11" style="display:none;">
						        <option value="-99">- Select a Location</option>
				               	<option value="ARIZ">Arizona</option>									
								<option value="VGAS">Las Vegas</option>	
								<option value="NMEX">New Mexico</option>	
						    </div>
						    <div id="location_12" style="display:none;">
						        <option value="-99">- Select a Location</option>
				               	<option value="TXCO">Coastal - Brownsville, Galveston, Corpus Christi</option>									
								<option value="TXIN">Inland</option>	
						    </div>
						    <div id="location_13" style="display:none;">
						        <option value="-99">- Select a Location</option>
				               	<option value="NEAP">Northeast - Korea, China</option>									
								<option value="SEAP">Southeast - Indonesia, Phillippines, Thailand</option>	
								<option value="INDA">India</option>	
								<option value="INTL">Japan</option>	
						    </div>
						    <div id="location_14" style="display:none;">
						        <option value="-99">- Select a Location</option>
				               	<option value="GLDC">Gold Coast (Queensland)</option>									
								<option value="NSWL">New South Wales</option>	
								<option value="QNLN">Northern Queensland</option>	
								<option value="VCSA">Victoria / Southern</option>	
								<option value="WAUS">Western</option>	
								<option value="NZNI">New Zealand - North Island</option>	
								<option value="NZSI">New Zealand - South Island</option>	
						    </div>
						    <div id="location_15" style="display:none;">
						        <option value="-99">- Select a Location</option>
				               	<option value="BAHM">Bahamas / Bermuda</option>									
								<option value="CRBN">All Other Islands</option>	
						    </div>
						    <div id="location_16" style="display:none;">
						        <option value="-99">- Select a Location</option>
				               	<option value="ALPA">Austria</option>									
								<option value="FUER">Canary Islands - Fuerteventura</option>	
								<option value="GRAN">Canary Islands - Gran Canaria</option>	
								<option value="LANZ">Canary Islands - Lanzarote</option>	
								<option value="TENN">Canary Islands - North Tenerife</option>	
								<option value="TENS">Canary Islands - South Tenerife</option>	
								<option value="SCAN">Denmark / Norway / Sweden</option>	
								<option value="ENGN">England (North), Lake District and Isle of Man</option>	
								<option value="ENGS">England (South) and Channel Island</option>	
								<option value="WALS">England - Wales</option>	
								<option value="FINL">Finland</option>	
								<option value="FRAN">France (Excluding Alps)</option>	
								<option value="ALPF">French Alps / Switzerland</option>	
								<option value="GERM">Germany, Benelux and Poland</option>	
								<option value="GREC">Greece</option>	
								<option value="HUNG">Hungary</option>	
								<option value="IRLD">Ireland</option>	
								<option value="ITAL">Italy (Excluding Alps)</option>	
								<option value="ALPI">Italian Alps</option>	
								<option value="MALT">Malta</option>	
								<option value="PORT">Portugal</option>	
								<option value="MADR">Portugal - Madeira</option>	
								<option value="SCOT">Scotland</option>	
								<option value="SPIS">Spain - Balearic Islands</option>	
								<option value="SPEC">Spain - East Coast</option>	
								<option value="SPMG">Spain - Malaga</option>	
								<option value="SPMB">Spain - Marbella</option>	
								<option value="TRKY">Turkey and Northern Cyprus</option>	
						    </div>
						    <div id="location_17" style="display:none;">
						        <option value="-99">- Select a Location</option>
				               	<option value="ACAP">Acapulco</option>									
								<option value="BAJA">Northwest - Baja, Cabo San Lucas, La Paz</option>	
								<option value="CANC">Cancun / Cozumel</option>	
								<option value="HUAT">Huatulco</option>	
								<option value="MEXX">Inland</option>	
								<option value="IXTA">Ixtapa</option>	
								<option value="MANZ">Manzanillo</option>	
								<option value="MAZT">Mazatlan</option>	
								<option value="PVTA">Puerto Vallarta</option>	
						    </div>
						    <div id="location_18" style="display:none;">
						        <option value="-99">- Select a Location</option>
				               	<option value="SAFR">South Africa</option>									
								<option value="AFRI">Africa</option>	
								<option value="EGYP">Egypt</option>	
								<option value="ISRL">Israel</option>	
						    </div>
						    <div id="location_19" style="display:none;">
						        <option value="-99">- Select a Location</option>
				               	<option value="BLIT">Brazil South Coastal</option>									
								<option value="SACO">Coastal-Peru / Chile / Argentina / Uruguay</option>	
								<option value="CSAM">Colombia and Ecuador/Central America</option>	
								<option value="SAIN">Inland-Bolivia / Argentina / Uruguay</option>	
								<option value="VENZ">Venezuela / Isla de Margarita</option>	
						    </div>
						    <div id="location_20" style="display:none;">
						        <option value="-99">- Select a Location</option>
				               	<option value="SOPI">Fiji</option>									
								<option value="FRPO">Tahiti / Bora Bora</option>	
						    </div>
					    </div>
					</div>
				</div>
			</div>
		</div>-->
	</div>
@endsection

@section('content')
	<div class="container padding-top-20">
		<h2 class="text-center">Our Customers Favourite Holiday Destinations</h2>
		<!-- Start Destinations -->
		<div class="row jcarousel-container">
			<div class="jcarousel-wrapper">
			    <div class="jcarousel">
			        <ul>
			            @foreach ($destinations as $destination)				           
				            <li class="thumbnail">
				            	<a href="/destinations/{!! $destination->post_name !!}">
					                <img alt="{!! $destination->post_title!!}" src="{!! wp_get_attachment_image_src(get_post_thumbnail_id($destination->ID), 'homepage-thumb-retina')[0] !!}" class="img-responsive jcarousel-img" height="auto" width="220px" />    
					                <span style="z-index: 1000;position: relative;">{!! $destination->post_title !!}</span>
					            </a>
				            </li>
						@endforeach
			        </ul>
			    </div>
			    <a href="#" class="jcarousel-control-prev" style="z-index: 1000;">&lsaquo;</a>
		        <a href="#" class="jcarousel-control-next" style="z-index: 1000;">&rsaquo;</a>
			</div>
		</div>
		<!-- Start Destinations -->

		<div class="row">
			@if($blog)
				<div class="col-md-4 col-sm-12 col-xs-12" style="margin-bottom: 10px;">
					@foreach($blog as $entry)
						@if(has_post_thumbnail($entry->ID))
							<div class="row">
								<div class="col-xs-12 text-center">
		                        	<p><strong><a href="/blog/{!! $entry->post_name !!}" class="post-title">
		                        		{!! str_limit($entry->post_title, $limit = 30, $end = '...') !!}
		                        	</a></strong></p>
		                        	<p>{!! str_limit(strip_tags($entry->post_content), $limit = 100, $end = '...') !!}</p>
		                        	<p class="text-right"><a href="/blog/{!! $entry->post_name !!}" class="btn btn-read-more">Read More</a></p>
		                    	</div>
		                    </div>
						@endif
					@endforeach
				</div>
			@endif
			<div class="col-md-4 col-sm-6 col-xs-12" style="margin-bottom: 10px;">
				<div class="fb-page" data-href="https://www.facebook.com/BYOkids/" data-tabs="timeline" data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="true">
					<div class="fb-xfbml-parse-ignore">
						<blockquote cite="https://www.facebook.com/BYOkids/">
							<a href="https://www.facebook.com/BYOkids/">BYOkids...your family travel gurus</a>
						</blockquote>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12" style="margin-bottom: 10px;">
				<!-- SnapWidget -->
				<script src="http://snapwidget.com/js/snapwidget.js"></script>
				<div style="height:500px; overflow:scroll;">
					<div id="instafeed"></div>
				</div>
			</div>
		</div>
		<hr />


		@unless($ad1 == null)
			@foreach($ad1 as $ad1)
				<a href="{!! $ad1->post_content !!}" target="_blank"><img src="{!! wp_get_attachment_image_src(get_post_thumbnail_id($ad1->ID), 'homepage-thumb-retina')[0] !!}" class="img-responsive" /></a>
			@endforeach
		@endunless

		<div class="row">
			<div class="col-xs-12 padding-top-10">
				@foreach($cruises as $cruise)
	                <div class="row post-content">
						<div class="col-lg-2 col-sm-3 col-xs-12">
					        <a href="{!! str_replace('http://www.byokids.com.au/cruise-deal?id=','http://byokids.ourvacationcentre.com.au/cruise-deal/', $cruise['url']) !!}">
					        	<div class="ratio-1-1" style="background-image:url({!! $cruise['image'] !!})"></div>
					        </a>
					    </div>
						<div class="col-lg-6 col-sm-5 col-xs-12">
							<p class="blog-header"><strong><a href="{!! str_replace('http://www.byokids.com.au/cruise-deal?id=','http://byokids.ourvacationcentre.com.au/cruise-deal/', $cruise['url']) !!}" class="post-title">{!! $cruise['name'] !!}</a></strong></p>
							<p>{!! $cruise['destination'] !!}</p>
							<p>{!! $cruise['provider'] !!}, {!! $cruise['ship'] !!}</p>
						</div>
						<div class="col-lg-2 col-sm-2 col-xs-12">
							<p style="margin-top: 40px;text-align: center;">
								<a href="{!! str_replace('http://www.byokids.com.au/cruise-deal?id=','http://byokids.ourvacationcentre.com.au/cruise-deal/', $cruise['url']) !!}" class="dealPrice">
									${!! number_format($cruise['price']) !!}*<br />
									<span class="priceSubtext">per person</span>
								</a>
							</p>
						</div>
						<div class="col-lg-2 col-sm-2 col-xs-12">
							<p class="readmoreIndex"><a href="{!! str_replace('http://www.byokids.com.au/cruise-deal?id=','http://byokids.ourvacationcentre.com.au/cruise-deal/', $cruise['url']) !!}" class="btn btn-read-more">Read More</a></p>
						</div>
					</div>
					<hr />
				@endforeach
				@foreach($resorts as $resort)
	                <div class="row post-content">
						<div class="col-lg-2 col-sm-3 col-xs-12">
					        <a href="{!! str_replace('?id=','/', $resort['url']) !!}">
					        	<div class="ratio-1-1" style="background-image:url({!! $resort['image'] !!})"></div>
					        </a>
					    </div>
						<div class="col-lg-6 col-sm-5 col-xs-12">
							<p class="blog-header"><strong><a href="{!! str_replace('?id=','/', $resort['url']) !!}" class="post-title">{!! $resort['deal_name'] !!}*<br />{!! $resort['per'] !!}</a></strong></p>
							<p>{!! $resort['destination'] !!}</p>			
							<p>{!! $resort['Property'] !!}</p>				
						</div>
						<div class="col-lg-2 col-sm-2 col-xs-12">
							<p style="margin-top: 40px;text-align: center;">
								<a href="{!! str_replace('?id=','/', $resort['url']) !!}" class="dealPrice">
									${!! number_format($resort['price']) !!}*<br />
									<span class="priceSubtext">{!! $resort['per'] !!}</span>
								</a>
							</p>
						</div>
						<div class="col-lg-2 col-sm-2 col-xs-12">
							<p class="readmoreIndex"><a href="{!! str_replace('?id=','/', $resort['url']) !!}" class="btn btn-read-more">Read More</a></p>
						</div>
					</div>
					<hr />
				@endforeach
				@foreach($tours as $tour)
	                <div class="row post-content">
						<div class="col-lg-2 col-sm-3 col-xs-12">
					        <a href="{!! str_replace('?id=','/', $tour['url']) !!}">
					        	<div class="ratio-1-1" style="background-image:url({!! $tour['image'] !!})"></div>
					        </a>
					    </div>
						<div class="col-lg-6 col-sm-5 col-xs-12">
							<p class="blog-header"><strong><a href="{!! str_replace('?id=','/', $tour['url']) !!}" class="post-title">{!! $tour['deal_name'] !!}</a></strong></p>
							<p>{!! $tour['region'] !!}</p>
							<p>{!! $tour['provider'] !!}</p>
						</div>
						<div class="col-lg-2 col-sm-2 col-xs-12">
							<p style="margin-top: 40px;text-align: center;">
								<a href="{!! str_replace('?id=','/', $tour['url']) !!}" class="dealPrice">
									${!! number_format($tour['price']) !!}*<br />
									<span class="priceSubtext">per person</span>
								</a>
							</p>
						</div>
						<div class="col-lg-2 col-sm-2 col-xs-12">
							<p class="readmoreIndex"><a href="{!! str_replace('?id=','/', $tour['url']) !!}" class="btn btn-read-more">Read More</a></p>
						</div>
					</div>
					<hr />
				@endforeach
				@foreach($packages as $package)
	                <div class="row post-content">
						<div class="col-lg-2 col-sm-3 col-xs-12">
					        <a href="{!! str_replace('?id=','/', $package['url']) !!}">
					        	<div class="ratio-1-1" style="background-image:url({!! $package['image'] !!})"></div>
					        </a>
					    </div>
						<div class="col-lg-6 col-sm-5 col-xs-12">
							<p class="blog-header"><strong><a href="{!! str_replace('?id=','/', $package['url']) !!}" class="post-title">{!! $package['deal_name'] !!}*<br />per {!! $package['per'] !!}</a></strong></p>
							<p>{!! $package['destination'] !!}</p>							
						</div>
						<div class="col-lg-2 col-sm-2 col-xs-12">
							<p style="margin-top: 40px;text-align: center;">
								<a href="{!! str_replace('?id=','/', $package['url']) !!}" class="dealPrice">
									${!! number_format($package['price']) !!}*<br />
									<span class="priceSubtext">per {!! $package['per'] !!}</span>
								</a>
							</p>
						</div>
						<div class="col-lg-2 col-sm-2 col-xs-12">
							<p class="readmoreIndex"><a href="{!! str_replace('?id=','/', $package['url']) !!}" class="btn btn-read-more">Read More</a></p>
						</div>
					</div>
					<hr />
				@endforeach
			</div>
		</div>

		@unless($ad2 == null)
			@foreach($ad2 as $ad2)
				<img src="{!! wp_get_attachment_image_src(get_post_thumbnail_id($ad2->ID), 'homepage-thumb-retina')[0] !!}" class="img-responsive" />
			@endforeach
		@endunless

	</div>
	
@endsection

@section('scripts')
	<script>
		$("#home").addClass("active");
		$(".input-group.date").datepicker({ 
    		autoclose: true, todayHighlight: true
    	});
        !function(e){var t=function(t,r){this.element=e(t);this.format=n.parseFormat(r.format||this.element.data("date-format")||"mm/dd/yyyy");this.picker=e(n.template).appendTo("body").on({click:e.proxy(this.click,this)});this.isInput=this.element.is("input");this.component=this.element.is(".date")?this.element.find(".add-on"):false;if(this.isInput){this.element.on({focus:e.proxy(this.show,this),keyup:e.proxy(this.update,this)})}else{if(this.component){this.component.on("click",e.proxy(this.show,this))}else{this.element.on("click",e.proxy(this.show,this))}}this.minViewMode=r.minViewMode||this.element.data("date-minviewmode")||0;if(typeof this.minViewMode==="string"){switch(this.minViewMode){case"months":this.minViewMode=1;break;case"years":this.minViewMode=2;break;default:this.minViewMode=0;break}}this.viewMode=r.viewMode||this.element.data("date-viewmode")||0;if(typeof this.viewMode==="string"){switch(this.viewMode){case"months":this.viewMode=1;break;case"years":this.viewMode=2;break;default:this.viewMode=0;break}}this.startViewMode=this.viewMode;this.weekStart=r.weekStart||this.element.data("date-weekstart")||0;this.weekEnd=this.weekStart===0?6:this.weekStart-1;this.onRender=r.onRender;this.fillDow();this.fillMonths();this.update();this.showMode()};t.prototype={constructor:t,show:function(t){this.picker.show();this.height=this.component?this.component.outerHeight():this.element.outerHeight();this.place();e(window).on("resize",e.proxy(this.place,this));if(t){t.stopPropagation();t.preventDefault()}if(!this.isInput){}var n=this;e(document).on("mousedown",function(t){if(e(t.target).closest(".datepicker").length==0){n.hide()}});this.element.trigger({type:"show",date:this.date})},hide:function(){this.picker.hide();e(window).off("resize",this.place);this.viewMode=this.startViewMode;this.showMode();if(!this.isInput){e(document).off("mousedown",this.hide)}this.element.trigger({type:"hide",date:this.date})},set:function(){var e=n.formatDate(this.date,this.format);if(!this.isInput){if(this.component){this.element.find("input").prop("value",e)}this.element.data("date",e)}else{this.element.prop("value",e)}},setValue:function(e){if(typeof e==="string"){this.date=n.parseDate(e,this.format)}else{this.date=new Date(e)}this.set();this.viewDate=new Date(this.date.getFullYear(),this.date.getMonth(),1,0,0,0,0);this.fill()},place:function(){var e=this.component?this.component.offset():this.element.offset();this.picker.css({top:e.top+this.height,left:e.left})},update:function(e){this.date=n.parseDate(typeof e==="string"?e:this.isInput?this.element.prop("value"):this.element.data("date"),this.format);this.viewDate=new Date(this.date.getFullYear(),this.date.getMonth(),1,0,0,0,0);this.fill()},fillDow:function(){var e=this.weekStart;var t="<tr>";while(e<this.weekStart+7){t+='<th class="dow">'+n.dates.daysMin[e++%7]+"</th>"}t+="</tr>";this.picker.find(".datepicker-days thead").append(t)},fillMonths:function(){var e="";var t=0;while(t<12){e+='<span class="month">'+n.dates.monthsShort[t++]+"</span>"}this.picker.find(".datepicker-months td").append(e)},fill:function(){var e=new Date(this.viewDate),t=e.getFullYear(),r=e.getMonth(),i=this.date.valueOf();this.picker.find(".datepicker-days th:eq(1)").text(n.dates.months[r]+" "+t);var s=new Date(t,r-1,28,0,0,0,0),o=n.getDaysInMonth(s.getFullYear(),s.getMonth());s.setDate(o);s.setDate(o-(s.getDay()-this.weekStart+7)%7);var u=new Date(s);u.setDate(u.getDate()+42);u=u.valueOf();var a=[];var f,l,c;while(s.valueOf()<u){if(s.getDay()===this.weekStart){a.push("<tr>")}f=this.onRender(s);l=s.getFullYear();c=s.getMonth();if(c<r&&l===t||l<t){f+=" old"}else if(c>r&&l===t||l>t){f+=" new"}if(s.valueOf()===i){f+=" active"}a.push('<td class="day '+f+'">'+s.getDate()+"</td>");if(s.getDay()===this.weekEnd){a.push("</tr>")}s.setDate(s.getDate()+1)}this.picker.find(".datepicker-days tbody").empty().append(a.join(""));var h=this.date.getFullYear();var p=this.picker.find(".datepicker-months").find("th:eq(1)").text(t).end().find("span").removeClass("active");if(h===t){p.eq(this.date.getMonth()).addClass("active")}a="";t=parseInt(t/10,10)*10;var d=this.picker.find(".datepicker-years").find("th:eq(1)").text(t+"-"+(t+9)).end().find("td");t-=1;for(var v=-1;v<11;v++){a+='<span class="year'+(v===-1||v===10?" old":"")+(h===t?" active":"")+'">'+t+"</span>";t+=1}d.html(a)},click:function(t){t.stopPropagation();t.preventDefault();var r=e(t.target).closest("span, td, th");if(r.length===1){switch(r[0].nodeName.toLowerCase()){case"th":switch(r[0].className){case"switch":this.showMode(1);break;case"prev":case"next":this.viewDate["set"+n.modes[this.viewMode].navFnc].call(this.viewDate,this.viewDate["get"+n.modes[this.viewMode].navFnc].call(this.viewDate)+n.modes[this.viewMode].navStep*(r[0].className==="prev"?-1:1));this.fill();this.set();break}break;case"span":if(r.is(".month")){var i=r.parent().find("span").index(r);this.viewDate.setMonth(i)}else{var s=parseInt(r.text(),10)||0;this.viewDate.setFullYear(s)}if(this.viewMode!==0){this.date=new Date(this.viewDate);this.element.trigger({type:"changeDate",date:this.date,viewMode:n.modes[this.viewMode].clsName})}this.showMode(-1);this.fill();this.set();break;case"td":if(r.is(".day")&&!r.is(".disabled")){var o=parseInt(r.text(),10)||1;var i=this.viewDate.getMonth();if(r.is(".old")){i-=1}else if(r.is(".new")){i+=1}var s=this.viewDate.getFullYear();this.date=new Date(s,i,o,0,0,0,0);this.viewDate=new Date(s,i,Math.min(28,o),0,0,0,0);this.fill();this.set();this.element.trigger({type:"changeDate",date:this.date,viewMode:n.modes[this.viewMode].clsName})}break}}},mousedown:function(e){e.stopPropagation();e.preventDefault()},showMode:function(e){if(e){this.viewMode=Math.max(this.minViewMode,Math.min(2,this.viewMode+e))}this.picker.find(">div").hide().filter(".datepicker-"+n.modes[this.viewMode].clsName).show()}};e.fn.datepicker=function(n,r){return this.each(function(){var i=e(this),s=i.data("datepicker"),o=typeof n==="object"&&n;if(!s){i.data("datepicker",s=new t(this,e.extend({},e.fn.datepicker.defaults,o)))}if(typeof n==="string")s[n](r)})};e.fn.datepicker.defaults={onRender:function(e){return""}};e.fn.datepicker.Constructor=t;var n={modes:[{clsName:"days",navFnc:"Month",navStep:1},{clsName:"months",navFnc:"FullYear",navStep:1},{clsName:"years",navFnc:"FullYear",navStep:10}],dates:{days:["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"],daysShort:["Sun","Mon","Tue","Wed","Thu","Fri","Sat","Sun"],daysMin:["Su","Mo","Tu","We","Th","Fr","Sa","Su"],months:["January","February","March","April","May","June","July","August","September","October","November","December"],monthsShort:["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"]},isLeapYear:function(e){return e%4===0&&e%100!==0||e%400===0},getDaysInMonth:function(e,t){return[31,n.isLeapYear(e)?29:28,31,30,31,30,31,31,30,31,30,31][t]},parseFormat:function(e){var t=e.match(/[.\/\-\s].*?/),n=e.split(/\W+/);if(!t||!n||n.length===0){throw new Error("Invalid date format.")}return{separator:t,parts:n}},parseDate:function(e,t){var n=e.split(t.separator),e=new Date,r;e.setHours(0);e.setMinutes(0);e.setSeconds(0);e.setMilliseconds(0);if(n.length===t.parts.length){var i=e.getFullYear(),s=e.getDate(),o=e.getMonth();for(var u=0,a=t.parts.length;u<a;u++){r=parseInt(n[u],10)||1;switch(t.parts[u]){case"dd":case"d":s=r;e.setDate(r);break;case"mm":case"m":o=r-1;e.setMonth(r-1);break;case"yy":i=2e3+r;e.setFullYear(2e3+r);break;case"yyyy":i=r;e.setFullYear(r);break}}e=new Date(i,o,s,0,0,0)}return e},formatDate:function(e,t){var n={d:e.getDate(),m:e.getMonth()+1,yy:e.getFullYear().toString().substring(2),yyyy:e.getFullYear()};n.dd=(n.d<10?"0":"")+n.d;n.mm=(n.m<10?"0":"")+n.m;var e=[];for(var r=0,i=t.parts.length;r<i;r++){e.push(n[t.parts[r]])}return e.join(t.separator)},headTemplate:"<thead>"+"<tr>"+'<th class="prev">&lsaquo;</th>'+'<th colspan="5" class="switch"></th>'+'<th class="next">&rsaquo;</th>'+"</tr>"+"</thead>",contTemplate:'<tbody><tr><td colspan="7"></td></tr></tbody>'};n.template='<div class="datepicker dropdown-menu">'+'<div class="datepicker-days">'+'<table class=" table-condensed">'+n.headTemplate+"<tbody></tbody>"+"</table>"+"</div>"+'<div class="datepicker-months">'+'<table class="table-condensed">'+n.headTemplate+n.contTemplate+"</table>"+"</div>"+'<div class="datepicker-years">'+'<table class="table-condensed">'+n.headTemplate+n.contTemplate+"</table>"+"</div>"+"</div>"}(window.jQuery)
        
        function showResult(str)
        {
     
           if (window.XMLHttpRequest)
           {
               xmlhttp=new XMLHttpRequest();
           }
           else
           {
               xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
           }
           xmlhttp.onreadystatechange=function()
           {
               if (xmlhttp.readyState==4 && xmlhttp.status==200)
               {
                   document.getElementById("results").innerHTML=xmlhttp.responseText;
               }
           }
           xmlhttp.open("GET","/includes/ajax.php?q="+str,true);
           xmlhttp.send();
        }
       
       
        function add(str){
           var sfr1 = str.split("|");
           var a = sfr1[0];
           var b = sfr1[1];
           var c = sfr1[2];
           document.getElementById('search').value = a;
           if(b === 'city') {
               document.getElementById('city').value = c;
           }
           document.getElementById('dropdown-menu').style.display='none'
        }
       
        function clearform(){
            var elements = document.getElementsByTagName("input");
            for (var ii=0; ii < elements.length; ii++) {
                if (elements[ii].type == "text") {
                elements[ii].value = "";
              }
            if (elements[ii].type == "hidden") {
                elements[ii].value = "";
              }
            }
        }                                                                     
	   var nowTemp = new Date();
	   var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);

	   var checkin = $('#dpd1').datepicker({
	     onRender: function(date) {
	       return date.valueOf() < now.valueOf() ? 'disabled' : '';
	     }
	   }).on('changeDate', function(ev) {
	     if (ev.date.valueOf() > checkout.date.valueOf()) {
	       var newDate = new Date(ev.date)
	       newDate.setDate(newDate.getDate() + 1);
	       checkout.setValue(newDate);
	     }
	     checkin.hide();
	     $('#dpd2')[0].focus();
	   }).data('datepicker');
	   var checkout = $('#dpd2').datepicker({
	     onRender: function(date) {
	       return date.valueOf() <= checkin.date.valueOf() ? 'disabled' : '';
	     }
	   }).on('changeDate', function(ev) {
	     checkout.hide();
	   }).data('datepicker');
	</script>
	<script type="text/javascript">
	    var userFeed = new Instafeed({
	        get: 'user',
	        userId: '300897923',
	        accessToken: '300897923.9c6e2b3.d6962c805c9744348543e397d7f2951d',
	        template: '<a href="@{{link}}" target="_blank"><img src="@{{image}}" style="width: 50%;" /></a>'
	    });
	    userFeed.run();
	</script>
	<script src="/js/plugins/jquery.jcarousel.min.js"></script>
	<script src="/js/plugins/jcarousel.responsive.js"></script>
	<script type="text/javascript">
		$(function() {
    		$('.jcarousel').jcarousel();
		});
		$('.carousel').carousel({
		  interval: 5000
		});
	</script>
@endsection
