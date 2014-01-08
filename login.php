<?php

session_start();

$con = mysqli_connect("localhost","root","root","whynotv4");
if (mysqli_connect_errno())
{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$user = $_POST['user'];
$_SESSION['user'] = $user;
$lat = $_POST['lat'];
$_SESSION['userlat'] = $lat;
$_SESSION['lat'] = $lat;
$long = $_POST['long'];
$_SESSION['userlong'] = $long;
$_SESSION['long'] = $long;
$cat = $_POST['cat'];
$_SESSION['cat'] = $cat;
$place = $_POST['place'];
$_SESSION['place'] = $place;
$_SESSION['refresh'] = 'true';

$sql = "INSERT INTO Users (User, Latitude, Longitude, Category, LookingIn) values ('$user','$lat','$long','$cat','$place')";
mysqli_query($con,$sql);

switch($place) {
	case "Near Me":
	break;
	case "Abbey Road":
	$_SESSION['lat']= 51.531951985733; 
	$_SESSION['long']=0.0037377856069111; 
	break;
	case "Acton":
	$_SESSION['lat']= 51.516886963398; 
	$_SESSION['long']=-0.26767554257793; 
	break;
	case "Acton Central":
	$_SESSION['lat']= 51.508757812012; 
	$_SESSION['long']=-0.26341579231596; 
	break;
	case "Acton Town":
	$_SESSION['lat']= 51.503071476856; 
	$_SESSION['long']=-0.2802882961706; 
	break;
	case "Aldgate":
	$_SESSION['lat']= 51.514342387502; 
	$_SESSION['long']=-0.075612503707184; 
	break;
	case "Aldgate East":
	$_SESSION['lat']= 51.515081631079; 
	$_SESSION['long']=-0.072987053548915; 
	break;
	case "Alexandra Palace":
	$_SESSION['lat']= 51.598262836895; 
	$_SESSION['long']=-0.1201345367387; 
	break;
	case "All Saints":
	$_SESSION['lat']= 51.510476925464; 
	$_SESSION['long']=-0.012610477634; 
	break;
	case "Angel":
	$_SESSION['lat']= 51.532968028132; 
	$_SESSION['long']=-0.10556703413728; 
	break;
	case "Archway":
	$_SESSION['lat']= 51.565490550156; 
	$_SESSION['long']=-0.13510715160572; 
	break;
	case "Arsenal":
	$_SESSION['lat']= 51.558541388156; 
	$_SESSION['long']=-0.10548551071377; 
	break;
	case "Baker Street":
	$_SESSION['lat']= 51.523129639184; 
	$_SESSION['long']=-0.15688978273689; 
	break;
	case "Balham":
	$_SESSION['lat']= 51.443182580239; 
	$_SESSION['long']=-0.15267077683302; 
	break;
	case "Bank":
	$_SESSION['lat']= 51.513347072699; 
	$_SESSION['long']=-0.088985715325045; 
	break;
	case "Barbican":
	$_SESSION['lat']= 51.520215295016; 
	$_SESSION['long']=-0.097707167852645; 
	break;
	case "Barnes":
	$_SESSION['lat']= 51.467127801887; 
	$_SESSION['long']=-0.24201866806989; 
	break;
	case "Barnes Bridge":
	$_SESSION['lat']= 51.472228083132; 
	$_SESSION['long']=-0.25234822148068; 
	break;
	case "Barons Court":
	$_SESSION['lat']= 51.490228707652; 
	$_SESSION['long']=-0.21341574380466;
	break;
	case "Battersea Park":
	$_SESSION['lat']= 51.477318340776; 
	$_SESSION['long']=-0.14810936441775; 
	break;
	case "Bayswater":
$_SESSION['lat']= 51.512111310915;
 $_SESSION['long']=-0.18788716574986;
 break;
case "Beckton":
$_SESSION['lat']= 51.514376621471;
 $_SESSION['long']=0.061539705886513;
 break;
case "Beckton Park":
$_SESSION['lat']= 51.508900786453;
 $_SESSION['long']=0.054836346093653;
 break;
case "Bellingham":
$_SESSION['lat']= 51.433864895434;
 $_SESSION['long']=-0.020397386684838;
 break;
case "Belsize Park":
$_SESSION['lat']= 51.550190897304;
 $_SESSION['long']=-0.1639600723677;
 break;
case "Bermondsey":
$_SESSION['lat']= 51.497960787629;
 $_SESSION['long']=-0.064315686265478;
 break;
case "Bethnal Green":
$_SESSION['lat']= 51.527191747482;
 $_SESSION['long']=-0.055377698622437;
 break;
case "Bethnal Green Rail":
$_SESSION['lat']= 51.524282746211;
 $_SESSION['long']=-0.059999330521283;
 break;
case "Blackfriars":
$_SESSION['lat']= 51.511586939902;
 $_SESSION['long']=-0.10298097717171;
 break;
case "Blackheath":
$_SESSION['lat']= 51.465408009363;
 $_SESSION['long']=0.0083509882498168;
 break;
case "Blackhorse Road":
$_SESSION['lat']= 51.585776631411;
 $_SESSION['long']=-0.039611280026926;
 break;
case "Blackwall":
$_SESSION['lat']= 51.507831540895;
 $_SESSION['long']=-0.0072207589795153;
 break;
case "Bond Street":
$_SESSION['lat']= 51.513797542631;
 $_SESSION['long']=-0.14959920109132;
 break;
case "Borough":
$_SESSION['lat']= 51.501048880447;
 $_SESSION['long']=-0.094182918403389;
 break;
case "Bounds Green":
$_SESSION['lat']= 51.607031935983;
 $_SESSION['long']=-0.12416262739225;
 break;
case "Bow Church":
$_SESSION['lat']= 51.527615205643;
 $_SESSION['long']=-0.020485486059214;
 break;
case "Bow Road":
$_SESSION['lat']= 51.527041809222;
 $_SESSION['long']=-0.024345177705763;
 break;
case "Brent Cross":
$_SESSION['lat']= 51.576599240756;
 $_SESSION['long']=-0.21332141198154;
 break;
case "Brixton":
$_SESSION['lat']= 51.462736815606;
 $_SESSION['long']=-0.11453770490964;
 break;
case "Brockley":
$_SESSION['lat']= 51.464749666688;
 $_SESSION['long']=-0.03773385721419;
 break;
case "Brondesbury":
$_SESSION['lat']= 51.545262386773;
 $_SESSION['long']=-0.20282406710345;
 break;
case "Brondesbury Park":
$_SESSION['lat']= 51.540325391085;
 $_SESSION['long']=-0.21045952961905;
 break;
case "Bruce Grove":
$_SESSION['lat']= 51.594011254361;
 $_SESSION['long']=-0.070384555517657;
 break;
case "Caledonian Road":
$_SESSION['lat']= 51.547885455043;
 $_SESSION['long']=-0.11834644235876;
 break;
case "Caledonian Road and Barnsbury":
$_SESSION['lat']= 51.543284589046;
 $_SESSION['long']=-0.11519043865212;
 break;
case "Cambridge Heath":
$_SESSION['lat']= 51.532059770708;
 $_SESSION['long']=-0.05718878628523;
 break;
case "Camden Road":
$_SESSION['lat']= 51.541851250779;
 $_SESSION['long']=-0.13918869492503;
 break;
case "Camden Town":
$_SESSION['lat']= 51.539969369251;
 $_SESSION['long']=-0.14243796405007;
 break;
case "Canada Water":
$_SESSION['lat']= 51.498168417556;
 $_SESSION['long']=-0.05079271714472;
 break;
case "Canary Wharf":
$_SESSION['lat']= 51.503578406232;
 $_SESSION['long']=-0.019452434600173;
 break;
case "Canning Town":
$_SESSION['lat']= 51.513870285695;
 $_SESSION['long']=0.0083200415480822;
 break;
case "Cannon Street":
$_SESSION['lat']= 51.511362099463;
 $_SESSION['long']=-0.090236118885105;
 break;
case "Canonbury":
$_SESSION['lat']= 51.548188396024;
 $_SESSION['long']=-0.092559776199295;
 break;
case "Catford":
$_SESSION['lat']= 51.44426491475;
 $_SESSION['long']=-0.026524111698793;
 break;
case "Catford Bridge":
$_SESSION['lat']= 51.444694627575;
 $_SESSION['long']=-0.024807488912048;
 break;
case "Chalk Farm":
$_SESSION['lat']= 51.544149104848;
 $_SESSION['long']=-0.15371865256093;
 break;
case "Chancery Lane":
$_SESSION['lat']= 51.518494029809;
 $_SESSION['long']=-0.11194761724718;
 break;
case "Charing Cross":
$_SESSION['lat']= 51.508358644804;
 $_SESSION['long']=-0.12478853109718;
 break;
case "Charlton":
$_SESSION['lat']= 51.486834983914;
 $_SESSION['long']=0.030956045084626;
 break;
case "Chiswick":
$_SESSION['lat']= 51.480781526773;
 $_SESSION['long']=-0.2669989236265;
 break;
case "Chiswick Park":
$_SESSION['lat']= 51.494370746332;
 $_SESSION['long']=-0.26772251965492;
 break;
case "City Thameslink":
$_SESSION['lat']= 51.513935079961;
 $_SESSION['long']=-0.10360404036727;
 break;
case "Clapham Common":
$_SESSION['lat']= 51.4618036863;
 $_SESSION['long']=-0.13830051012379;
 break;
case "Clapham High Street":
$_SESSION['lat']= 51.465469529402;
 $_SESSION['long']=-0.13245010905033;
 break;
case "Clapham Junction":
$_SESSION['lat']= 51.464366804651;
 $_SESSION['long']=-0.17030060907001;
 break;
case "Clapham North":
$_SESSION['lat']= 51.464916230409;
 $_SESSION['long']=-0.12989566953588;
 break;
case "Clapton":
$_SESSION['lat']= 51.561569094453;
 $_SESSION['long']=-0.057475034590784;
 break;
case "Colliers Wood":
$_SESSION['lat']= 51.418759208995;
 $_SESSION['long']=-0.17740072104762;
 break;
case "Covent Garden":
$_SESSION['lat']= 51.512760249622;
 $_SESSION['long']=-0.1244924862088;
 break;
case "Cricklewood":
$_SESSION['lat']= 51.558422694084;
 $_SESSION['long']=-0.21253351132178;
 break;
case "Crofton Park":
$_SESSION['lat']= 51.455179296249;
 $_SESSION['long']=-0.036532191514461;
 break;
case "Crossharbour and London Arena":
$_SESSION['lat']= 51.495839980525;
 $_SESSION['long']=-0.014918409980624;
 break;
case "Crouch Hill":
$_SESSION['lat']= 51.571327111387;
 $_SESSION['long']=-0.11711885796196;
 break;
case "Crystal Palace":
$_SESSION['lat']= 51.418170359941;
 $_SESSION['long']=-0.072592854062748;
 break;
case "Custom House":
$_SESSION['lat']= 51.509622053058;
 $_SESSION['long']=0.025786917726712;
 break;
case "Cutty Sark for Maritime Greenwich":
$_SESSION['lat']= 51.481944468688;
 $_SESSION['long']=-0.01056746798363;
 break;
case "Cyprus":
$_SESSION['lat']= 51.508526572883;
 $_SESSION['long']=0.063855162939039;
 break;
case "Dalston Junction":
$_SESSION['lat']= 51.546093724339;
 $_SESSION['long']=-0.07497978585502;
 break;
case "Dalston Kingsland":
$_SESSION['lat']= 51.548667827094;
 $_SESSION['long']=-0.076212502172009;
 break;
case "Denmark Hill":
$_SESSION['lat']= 51.468200650033;
 $_SESSION['long']=-0.090973475173744;
 break;
case "Deptford":
$_SESSION['lat']= 51.478890086282;
 $_SESSION['long']=-0.026181921788286;
 break;
case "Deptford Bridge":
$_SESSION['lat']= 51.474476774061;
 $_SESSION['long']=-0.022038032405853;
 break;
case "Devons Road":
$_SESSION['lat']= 51.522258469272;
 $_SESSION['long']=-0.017993342742124;
 break;
case "Dollis Hill":
$_SESSION['lat']= 51.551850619529;
 $_SESSION['long']=-0.23878334100376;
 break;
case "Drayton Park":
$_SESSION['lat']= 51.553078319423;
 $_SESSION['long']=-0.10575577858654;
 break;
case "Ealing Broadway":
$_SESSION['lat']= 51.51486201146;
 $_SESSION['long']=-0.30199597251937;
 break;
case "Ealing Common":
$_SESSION['lat']= 51.510248690463;
 $_SESSION['long']=-0.28713701041592;
 break;
case "Earlsfield":
$_SESSION['lat']= 51.442238829835;
 $_SESSION['long']=-0.18725830238926;
 break;
case "East Acton":
$_SESSION['lat']= 51.516263444214;
 $_SESSION['long']=-0.2480978154307;
 break;
case "East Dulwich":
$_SESSION['lat']= 51.461625592168;
 $_SESSION['long']=-0.080422179162408;
 break;
case "East Finchley":
$_SESSION['lat']= 51.587332564437;
 $_SESSION['long']=-0.16472945405368;
 break;
case "Edgware Road (Bakerloo)":
$_SESSION['lat']= 51.520645381678;
 $_SESSION['long']=-0.17052514070378;
 break;
case "Edgware Road":
$_SESSION['lat']= 51.51999806318;
 $_SESSION['long']=-0.1676538436008;
 break;
case "Embankment":
$_SESSION['lat']= 51.507312509276;
 $_SESSION['long']=-0.12235292981979;
 break;
case "Essex Road":
$_SESSION['lat']= 51.540633322162;
 $_SESSION['long']=-0.096351108662094;
 break;
case "Euston":
$_SESSION['lat']= 51.528664346375;
 $_SESSION['long']=-0.13328205840994;
 break;
case "Euston Square":
$_SESSION['lat']= 51.528664346375;
 $_SESSION['long']=-0.13328205840994;
 break;
case "Farringdon":
$_SESSION['lat']= 51.520195700647;
 $_SESSION['long']=-0.10482865117184;
 break;
case "Fenchurch Street":
$_SESSION['lat']= 51.511566715013;
 $_SESSION['long']=-0.078539744740966;
 break;
case "Finchley Road":
$_SESSION['lat']= 51.547096220268;
 $_SESSION['long']=-0.18003614128656;
 break;
case "Finchley Road and Frognal":
$_SESSION['lat']= 51.550119520279;
 $_SESSION['long']=-0.18363678247277;
 break;
case "Finsbury Park":
$_SESSION['lat']= 51.564635458062;
 $_SESSION['long']=-0.10586706135916;
 break;
case "Forest Gate":
$_SESSION['lat']= 51.54931611531;
 $_SESSION['long']=0.024203511499168;
 break;
case "Forest Hill":
$_SESSION['lat']= 51.439308318386;
 $_SESSION['long']=-0.053314119078799;
 break;
case "Fulham Broadway":
$_SESSION['lat']= 51.480260927016;
 $_SESSION['long']=-0.19552976561085;
 break;
case "Gallions Reach":
$_SESSION['lat']= 51.509034130657;
 $_SESSION['long']=0.071789801687878;
 break;
case "Gipsy Hill":
$_SESSION['lat']= 51.424469532451;
 $_SESSION['long']=-0.083820786846549;
 break;
case "Gloucester Road":
$_SESSION['lat']= 51.494499579725;
 $_SESSION['long']=-0.18352915689619;
 break;
case "Golders Green":
$_SESSION['lat']= 51.572215556655;
 $_SESSION['long']=-0.19482013198437;
 break;
case "Goldhawk Road":
$_SESSION['lat']= 51.502076993967;
 $_SESSION['long']=-0.22738960127533;
 break;
case "Goodge Street":
$_SESSION['lat']= 51.520613125487;
 $_SESSION['long']=-0.13479327927061;
 break;
case "Gospel Oak":
$_SESSION['lat']= 51.555405311264;
 $_SESSION['long']=-0.15128661069808;
 break;
case "Great Portland Street":
$_SESSION['lat']= 51.52378881305;
 $_SESSION['long']=-0.14394701338886;
 break;
case "Green Park":
$_SESSION['lat']= 51.506760501463;
 $_SESSION['long']=-0.14246316907526;
 break;
case "Greenwich":
$_SESSION['lat']= 51.477547665535;
 $_SESSION['long']=-0.014848686252722;
 break;
case "Gunnersbury":
$_SESSION['lat']= 51.491863444709;
 $_SESSION['long']=-0.27514973411264;
 break;
case "Hackney Central":
$_SESSION['lat']= 51.547257451286;
 $_SESSION['long']=-0.055575092639468;
 break;
case "Hackney Downs":
$_SESSION['lat']= 51.549078092042;
 $_SESSION['long']=-0.060170685150219;
 break;
case "Hackney Wick":
$_SESSION['lat']= 51.543558409072;
 $_SESSION['long']=-0.025245084630728;
 break;
case "Haggerston":
$_SESSION['lat']= 51.538684738939;
 $_SESSION['long']=-0.075580841462924;
 break;
case "Hammersmith (District)":
$_SESSION['lat']= 51.491819802914;
 $_SESSION['long']=-0.22284652701972;
 break;
case "Hammersmith (Met.)":
$_SESSION['lat']= 51.493483379174;
 $_SESSION['long']=-0.22462575515926;
 break;
case "Hampstead":
$_SESSION['lat']= 51.556542616677;
 $_SESSION['long']=-0.17800013773286;
 break;
case "Hampstead Heath":
$_SESSION['lat']= 51.555199944256;
 $_SESSION['long']=-0.16455176144825;
 break;
case "Hanger Lane":
$_SESSION['lat']= 51.530072069094;
 $_SESSION['long']=-0.29298173181915;
 break;
case "Harlesden":
$_SESSION['lat']= 51.536258358843;
 $_SESSION['long']=-0.25748125850322;
 break;
case "Harringay":
$_SESSION['lat']= 51.577357921799;
 $_SESSION['long']=-0.10519382370901;
 break;
case "Harringay Green Lanes":
$_SESSION['lat']= 51.57714590447;
 $_SESSION['long']=-0.098202962998489;
 break;
case "Haydons Road":
$_SESSION['lat']= 51.425457340854;
 $_SESSION['long']=-0.18891497843117;
 break;
case "Herne Hill":
$_SESSION['lat']= 51.453991381788;
 $_SESSION['long']=-0.10254851838021;
 break;
case "Heron Quays":
$_SESSION['lat']= 51.503386571015;
 $_SESSION['long']=-0.021939126563571;
 break;
case "High Street Kensington":
$_SESSION['lat']= 51.500729468384;
 $_SESSION['long']=-0.19155165303998;
 break;
case "Highbury and Islington":
$_SESSION['lat']= 51.546495518926;
 $_SESSION['long']=-0.10406772078143;
 break;
case "Highgate":
$_SESSION['lat']= 51.57764663481;
 $_SESSION['long']=-0.14692043327249;
 break;
case "Hither Green":
$_SESSION['lat']= 51.452401721767;
 $_SESSION['long']=-0.00095652287067613;
 break;
case "Holborn":
$_SESSION['lat']= 51.517235749261;
 $_SESSION['long']=-0.11982609759457;
 break;
case "Holland Park":
$_SESSION['lat']= 51.507146508744;
 $_SESSION['long']=-0.20654337129402;
 break;
case "Holloway Road":
$_SESSION['lat']= 51.55281611672;
 $_SESSION['long']=-0.11292127587712;
 break;
case "Homerton":
$_SESSION['lat']= 51.546595450822;
 $_SESSION['long']=-0.038497927971748;
 break;
case "Honor Oak Park":
$_SESSION['lat']= 51.450648245652;
 $_SESSION['long']=-0.044138732242293;
 break;
case "Hornsey":
$_SESSION['lat']= 51.586474864733;
 $_SESSION['long']=-0.11180120639571;
 break;
case "Hyde Park Corner":
$_SESSION['lat']= 51.502584030904;
 $_SESSION['long']=-0.15245970877887;
 break;
case "Imperial Wharf":
$_SESSION['lat']= 51.474938948929;
 $_SESSION['long']=-0.18282310826897;
 break;
case "Island Gardens":
$_SESSION['lat']= 51.487950088882;
 $_SESSION['long']=-0.010478902499309;
 break;
case "Kennington":
$_SESSION['lat']= 51.488662470707;
 $_SESSION['long']=-0.10505621257104;
 break;
case "Kensal Green":
$_SESSION['lat']= 51.530524241234;
 $_SESSION['long']=-0.22469897011847;
 break;
case "Kensal Rise":
$_SESSION['lat']= 51.53421509119;
 $_SESSION['long']=-0.22080656353585;
 break;
case "Kensington (Olympia)":
$_SESSION['lat']= 51.497879724483;
 $_SESSION['long']=-0.21036483866639;
 break;
case "Kentish Town":
$_SESSION['lat']= 51.550009538423;
 $_SESSION['long']=-0.14045684366827;
 break;
case "Kentish Town West":
$_SESSION['lat']= 51.546547987029;
 $_SESSION['long']=-0.14674199079293;
 break;
case "Kew Bridge":
$_SESSION['lat']= 51.49000465091;
 $_SESSION['long']=-0.28883209363752;
 break;
case "Kidbrooke":
$_SESSION['lat']= 51.462690183933;
 $_SESSION['long']=0.028314631821257;
 break;
case "Kilburn":
$_SESSION['lat']= 51.546944459981;
 $_SESSION['long']=-0.20461829997264;
 break;
case "Kilburn High Road":
$_SESSION['lat']= 51.537267764059;
 $_SESSION['long']=-0.19109868962017;
 break;
case "Kilburn Park":
$_SESSION['lat']= 51.535135560206;
 $_SESSION['long']=-0.19395164168612;
 break;
case "King George V":
$_SESSION['lat']= 51.502008599189;
 $_SESSION['long']=0.062220618931645;
 break;
case "King's Cross":
$_SESSION['lat']= 51.53079820546;
 $_SESSION['long']=-0.12274200728123;
 break;
case "Kings Cross St. Pancras":
$_SESSION['lat']= 51.530312476892;
 $_SESSION['long']=-0.12385771561154;
 break;
case "Knightsbridge":
$_SESSION['lat']= 51.501354916808;
 $_SESSION['long']=-0.16065008131194;
 break;
case "Ladbroke Grove":
$_SESSION['lat']= 51.517210698742;
 $_SESSION['long']=-0.21018376269161;
 break;
case "Ladywell":
$_SESSION['lat']= 51.45619213691;
 $_SESSION['long']=-0.019230010500554;
 break;
case "Lambeth North":
$_SESSION['lat']= 51.499129959063;
 $_SESSION['long']=-0.11175385704735;
 break;
case "Lancaster Gate":
$_SESSION['lat']= 51.511890964101;
 $_SESSION['long']=-0.17541552045722;
 break;
case "Langdon Park":
$_SESSION['lat']= 51.518883939693;
 $_SESSION['long']=-0.015199388573999;
 break;
case "Latimer Road":
$_SESSION['lat']= 51.513958124663;
 $_SESSION['long']=-0.21744525733064;
 break;
case "Lee":
$_SESSION['lat']= 51.449458517716;
 $_SESSION['long']=0.013379080898623;
 break;
case "Leicester Square":
$_SESSION['lat']= 51.511291196842;
 $_SESSION['long']=-0.12822773962177;
 break;
case "Lewisham":
$_SESSION['lat']= 51.464880714235;
 $_SESSION['long']=-0.012418307529155;
 break;
case "Leyton":
$_SESSION['lat']= 51.55813227051;
 $_SESSION['long']=-0.0064509088011814;
 break;
case "Leyton Midland Road":
$_SESSION['lat']= 51.569364239801;
 $_SESSION['long']=-0.0080519210997184;
 break;
case "Leytonstone High Road":
$_SESSION['lat']= 51.563807342647;
 $_SESSION['long']=0.0082688934065806;
 break;
case "Limehouse":
$_SESSION['lat']= 51.512312167848;
 $_SESSION['long']=-0.039365669438682;
 break;
case "Liverpool Street":
$_SESSION['lat']= 51.517598273919;
 $_SESSION['long']=-0.082235212309326;
 break;
case "London Bridge":
$_SESSION['lat']= 51.504674357597;
 $_SESSION['long']=-0.085991192281661;
 break;
case "London City Airport":
$_SESSION['lat']= 51.50368965775;
 $_SESSION['long']=0.047887121033287;
 break;
case "London Fields":
$_SESSION['lat']= 51.540718847663;
 $_SESSION['long']=-0.057685269137809;
 break;
case "Loughborough Junction":
$_SESSION['lat']= 51.46667891193;
 $_SESSION['long']=-0.10248294761392;
 break;
case "Maida Vale":
$_SESSION['lat']= 51.529995078969;
 $_SESSION['long']=-0.18541823310956;
 break;
case "Manor House":
$_SESSION['lat']= 51.570747151453;
 $_SESSION['long']=-0.095670549505162;
 break;
case "Mansion House":
$_SESSION['lat']= 51.512091761163;
 $_SESSION['long']=-0.094183249527509;
 break;
case "Marble Arch":
$_SESSION['lat']= 51.513965510738;
 $_SESSION['long']=-0.15855680746603;
 break;
case "Maryland":
$_SESSION['lat']= 51.545668269809;
 $_SESSION['long']=0.0056960730233714;
 break;
case "Marylebone":
$_SESSION['lat']= 51.522396687994;
 $_SESSION['long']=-0.16347815242029;
 break;
case "Maze Hill":
$_SESSION['lat']= 51.483013655604;
 $_SESSION['long']=0.0032192958995991;
 break;
case "Mile End":
$_SESSION['lat']= 51.525310973905;
 $_SESSION['long']=-0.032651671918221;
 break;
case "Mitcham Eastfields":
$_SESSION['lat']= 51.408383928225;
 $_SESSION['long']=-0.15398734320935;
 break;
case "Monument":
$_SESSION['lat']= 51.510630425959;
 $_SESSION['long']=-0.086173905918798;
 break;
case "Moorgate":
$_SESSION['lat']= 51.518437149414;
 $_SESSION['long']=-0.08900327764505;
 break;
case "Mornington Crescent":
$_SESSION['lat']= 51.534362233874;
 $_SESSION['long']=-0.1387299346061;
 break;
case "Mortlake":
$_SESSION['lat']= 51.468167968359;
 $_SESSION['long']=-0.26718891965297;
 break;
case "Mudchute":
$_SESSION['lat']= 51.491236186648;
 $_SESSION['long']=-0.014945543221677;
 break;
case "Neasden":
$_SESSION['lat']= 51.554627747213;
 $_SESSION['long']=-0.25010062378951;
 break;
case "New Cross":
$_SESSION['lat']= 51.476429418617;
 $_SESSION['long']=-0.032264414494673;
 break;
case "New Cross Gate":
$_SESSION['lat']= 51.475264932486;
 $_SESSION['long']=-0.039514655295107;
 break;
case "Norbury":
$_SESSION['lat']= 51.411188517406;
 $_SESSION['long']=-0.12278502535626;
 break;
case "North Dulwich":
$_SESSION['lat']= 51.454481818931;
 $_SESSION['long']=-0.087904290624922;
 break;
case "North Ealing":
$_SESSION['lat']= 51.517622323819;
 $_SESSION['long']=-0.28897914280262;
 break;
case "North Sheen":
$_SESSION['lat']= 51.465419645874;
 $_SESSION['long']=-0.28638307337002;
 break;
case "Northfields":
$_SESSION['lat']= 51.500491708619;
 $_SESSION['long']=-0.31505041439224;
 break;
case "Nunhead":
$_SESSION['lat']= 51.466579990247;
 $_SESSION['long']=-0.053665348737765;
 break;
case "Old Street":
$_SESSION['lat']= 51.525581481862;
 $_SESSION['long']=-0.087608545343845;
 break;
case "Oval":
$_SESSION['lat']= 51.481412613811;
 $_SESSION['long']=-0.11330667730935;
 break;
case "Oxford Circus":
$_SESSION['lat']= 51.515223419245;
 $_SESSION['long']=-0.14082176208955;
 break;
case "Paddington":
$_SESSION['lat']= 51.515393806532;
 $_SESSION['long']=-0.17572234283505;
 break;
case "Park Royal":
$_SESSION['lat']= 51.526834054645;
 $_SESSION['long']=-0.28491450496891;
 break;
case "Parsons Green":
$_SESSION['lat']= 51.474960176772;
 $_SESSION['long']=-0.20111009589714;
 break;
case "Peckham Rye":
$_SESSION['lat']= 51.469511372801;
 $_SESSION['long']=-0.069969158361951;
 break;
case "Piccadilly Circus":
$_SESSION['lat']= 51.509696764476;
 $_SESSION['long']=-0.13369718974012;
 break;
case "Pimlico":
$_SESSION['lat']= 51.489552877924;
 $_SESSION['long']=-0.1330938573102;
 break;
case "Plaistow":
$_SESSION['lat']= 51.531288332324;
 $_SESSION['long']=0.017795056275962;
 break;
case "Pontoon Dock":
$_SESSION['lat']= 51.502216211037;
 $_SESSION['long']=0.033340112607835;
 break;
case "Poplar":
$_SESSION['lat']= 51.507588072081;
 $_SESSION['long']=-0.017261086484836;
 break;
case "Prince Regent":
$_SESSION['lat']= 51.509434545079;
 $_SESSION['long']=0.033502981448267;
 break;
case "Putney Bridge":
$_SESSION['lat']= 51.467865362703;
 $_SESSION['long']=-0.20935102262327;
 break;
case "Queens Park":
$_SESSION['lat']= 51.534312675201;
 $_SESSION['long']=-0.20478373421795;
 break;
case "Queens Road Peckham":
$_SESSION['lat']= 51.474284715779;
 $_SESSION['long']=-0.057340582526957;
 break;
case "Queenstown Road":
$_SESSION['lat']= 51.47495914471;
 $_SESSION['long']=-0.14734091559888;
 break;
case "Queensway":
$_SESSION['lat']= 51.510449255439;
 $_SESSION['long']=-0.18740549543317;
 break;
case "Ravenscourt Park":
$_SESSION['lat']= 51.494068008984;
 $_SESSION['long']=-0.23595483065011;
 break;
case "Rectory Road":
$_SESSION['lat']= 51.558763484573;
 $_SESSION['long']=-0.068371241749211;
 break;
case "Regents Park":
$_SESSION['lat']= 51.52381069054;
 $_SESSION['long']=-0.14532999904559;
 break;
case "Rotherhithe":
$_SESSION['lat']= 51.501594510808;
 $_SESSION['long']=-0.052951891484305;
 break;
case "Royal Albert":
$_SESSION['lat']= 51.508493863562;
 $_SESSION['long']=0.045191552169371;
 break;
case "Royal Oak":
$_SESSION['lat']= 51.518294375269;
 $_SESSION['long']=-0.18880926348942;
 break;
case "Royal Victoria":
$_SESSION['lat']= 51.509055232332;
 $_SESSION['long']=0.017979819853408;
 break;
case "Russell Square":
$_SESSION['lat']= 51.523013052867;
 $_SESSION['long']=-0.12457578611157;
 break;
case "Seven Sisters":
$_SESSION['lat']= 51.583362168372;
 $_SESSION['long']=-0.0724523920649;
 break;
case "Shadwell":
$_SESSION['lat']= 51.51130016173;
 $_SESSION['long']=-0.056904799137598;
 break;
case "Shepherds Bush":
$_SESSION['lat']= 51.50453217729;
 $_SESSION['long']=-0.21850475368199;
 break;
case "Shepherds Bush Market":
$_SESSION['lat']= 51.505880735504;
 $_SESSION['long']=-0.22738608723774;
 break;
case "Shoreditch High Street":
$_SESSION['lat']= 51.523466827911;
 $_SESSION['long']=-0.077073012851082;
 break;
case "Sloane Square":
$_SESSION['lat']= 51.492359782932;
 $_SESSION['long']=-0.1564744555002;
 break;
case "South Acton":
$_SESSION['lat']= 51.499685861011;
 $_SESSION['long']=-0.27020080333496;
 break;
case "South Bermondsey":
$_SESSION['lat']= 51.487676621549;
 $_SESSION['long']=-0.054740420692279;
 break;
case "South Ealing":
$_SESSION['lat']= 51.501644057917;
 $_SESSION['long']=-0.30702584019952;
 break;
case "South Hampstead":
$_SESSION['lat']= 51.541476868984;
 $_SESSION['long']=-0.1783567825076;
 break;
case "South Kensington":
$_SESSION['lat']= 51.494071386411;
 $_SESSION['long']=-0.17390862058942;
 break;
case "South Quay":
$_SESSION['lat']= 51.500863608239;
 $_SESSION['long']=-0.018446287979256;
 break;
case "South Tottenham":
$_SESSION['lat']= 51.580402594532;
 $_SESSION['long']=-0.071841526783666;
 break;
case "South Wimbledon":
$_SESSION['lat']= 51.41536073293;
 $_SESSION['long']=-0.19196016848772;
 break;
case "Southfields":
$_SESSION['lat']= 51.444883338258;
 $_SESSION['long']=-0.20659499856664;
 break;
case "Southwark":
$_SESSION['lat']= 51.503853632869;
 $_SESSION['long']=-0.10578053394541;
 break;
case "St James Street":
$_SESSION['lat']= 51.580608667586;
 $_SESSION['long']=-0.032790131848525;
 break;
case "St Johns":
$_SESSION['lat']= 51.468975297065;
 $_SESSION['long']=-0.023226267171585;
 break;
case "St Pancras":
$_SESSION['lat']= 51.530554416571;
 $_SESSION['long']=-0.12549136793246;
 break;
case "St. James's Park":
$_SESSION['lat']= 51.499609810342;
 $_SESSION['long']=-0.13386435110426;
 break;
case "St. Johns Wood":
$_SESSION['lat']= 51.534854431713;
 $_SESSION['long']=-0.17405042505482;
 break;
case "St. Pauls":
$_SESSION['lat']= 51.51483530739;
 $_SESSION['long']=-0.097556591574387;
 break;
case "Stamford Brook":
$_SESSION['lat']= 51.494449997347;
 $_SESSION['long']=-0.24523190696758;
 break;
case "Stamford Hill":
$_SESSION['lat']= 51.574447612615;
 $_SESSION['long']=-0.076653913978365;
 break;
case "Star Lane":
$_SESSION['lat']= 51.520604250081;
 $_SESSION['long']=0.0042054135552674;
 break;
case "Stepney Green":
$_SESSION['lat']= 51.521995838874;
 $_SESSION['long']=-0.047368111957746;
 break;
case "Stockwell":
$_SESSION['lat']= 51.472159270341;
 $_SESSION['long']=-0.12283190859196;
 break;
case "Stoke Newington":
$_SESSION['lat']= 51.564637618307;
 $_SESSION['long']=-0.072320969849242;
 break;
case "Stonebridge Park":
$_SESSION['lat']= 51.54398658738;
 $_SESSION['long']=-0.27538602336732;
 break;
case "Stratford":
$_SESSION['lat']= 51.541692579295;
 $_SESSION['long']=-0.0037372234417709;
 break;
case "Stratford High Street":
$_SESSION['lat']= 51.538148951165;
 $_SESSION['long']=-0.001065939537146;
 break;
case "Stratford International":
$_SESSION['lat']= 51.54480853536;
 $_SESSION['long']=-0.0087640154463654;
 break;
case "Streatham":
$_SESSION['lat']= 51.425845878375;
 $_SESSION['long']=-0.13231111566835;
 break;
case "Streatham Common":
$_SESSION['lat']= 51.418984686908;
 $_SESSION['long']=-0.13571178617484;
 break;
case "Streatham Hill":
$_SESSION['lat']= 51.438460380547;
 $_SESSION['long']=-0.1276670964405;
 break;
case "Surrey Quays":
$_SESSION['lat']= 51.493266862158;
 $_SESSION['long']=-0.047515585346921;
 break;
case "Swiss Cottage":
$_SESSION['lat']= 51.543034867714;
 $_SESSION['long']=-0.17561218648329;
 break;
case "Sydenham":
$_SESSION['lat']= 51.427341258001;
 $_SESSION['long']=-0.055074289357489;
 break;
case "Sydenham Hill":
$_SESSION['lat']= 51.432575896828;
 $_SESSION['long']=-0.080215824663043;
 break;
case "Temple":
$_SESSION['lat']= 51.51104062071;
 $_SESSION['long']=-0.11371134239066;
 break;
case "Tooting":
$_SESSION['lat']= 51.419896651766;
 $_SESSION['long']=-0.16098809293112;
 break;
case "Tooting Bec":
$_SESSION['lat']= 51.435838083172;
 $_SESSION['long']=-0.15968610811001;
 break;
case "Tooting Broadway":
$_SESSION['lat']= 51.42704916499;
 $_SESSION['long']=-0.16867014599257;
 break;
case "Tottenham Court Road":
$_SESSION['lat']= 51.51621088565;
 $_SESSION['long']=-0.13109602942553;
 break;
case "Tottenham Hale":
$_SESSION['lat']= 51.587997785049;
 $_SESSION['long']=-0.060173390466137;
 break;
case "Tower Gateway":
$_SESSION['lat']= 51.510392650922;
 $_SESSION['long']=-0.074395469530797;
 break;
case "Tower Hill":
$_SESSION['lat']= 51.510394282129;
 $_SESSION['long']=-0.076686790760475;
 break;
case "Tufnell Park":
$_SESSION['lat']= 51.556440814333;
 $_SESSION['long']=-0.13772775294192;
 break;
case "Tulse Hill":
$_SESSION['lat']= 51.4397974399;
 $_SESSION['long']=-0.10510812362275;
 break;
case "Turnham Green":
$_SESSION['lat']= 51.495181971972;
 $_SESSION['long']=-0.25451016527384;
 break;
case "Turnpike Lane":
$_SESSION['lat']= 51.590358146027;
 $_SESSION['long']=-0.1027906082273;
 break;
case "Upper Holloway":
$_SESSION['lat']= 51.563623319983;
 $_SESSION['long']=-0.12909493917319;
 break;
case "Upton Park":
$_SESSION['lat']= 51.536628195871;
 $_SESSION['long']=0.034556255633226;
 break;
case "Victoria":
$_SESSION['lat']= 51.496423969876;
 $_SESSION['long']=-0.14390630306143;
 break;
case "Walthamstow Central":
$_SESSION['lat']= 51.583018115291;
 $_SESSION['long']=-0.019926114372123;
 break;
case "Walthamstow Queens Road":
$_SESSION['lat']= 51.581546193899;
 $_SESSION['long']=-0.0238295131434;
 break;
case "Wandsworth Common":
$_SESSION['lat']= 51.446365623898;
 $_SESSION['long']=-0.16352259346247;
 break;
case "Wandsworth Road":
$_SESSION['lat']= 51.470223218762;
 $_SESSION['long']=-0.13902328072857;
 break;
case "Wandsworth Town":
$_SESSION['lat']= 51.461034098277;
 $_SESSION['long']=-0.18789564563536;
 break;
case "Wanstead Park":
$_SESSION['lat']= 51.551778074703;
 $_SESSION['long']=0.026404363778733;
 break;
case "Wapping":
$_SESSION['lat']= 51.504340322706;
 $_SESSION['long']=-0.055846408737992;
 break;
case "Warren Street":
$_SESSION['lat']= 51.524580005085;
 $_SESSION['long']=-0.13826391949985;
 break;
case "Warwick Avenue":
$_SESSION['lat']= 51.523104457076;
 $_SESSION['long']=-0.18293888140664;
 break;
case "Waterloo":
$_SESSION['lat']= 51.503146653078;
 $_SESSION['long']=-0.11324484659974;
 break;
case "West Acton":
$_SESSION['lat']= 51.517770184208;
 $_SESSION['long']=-0.28064276561988;
 break;
case "West Brompton":
$_SESSION['lat']= 51.487328938205;
 $_SESSION['long']=-0.19552441152812;
 break;
case "West Dulwich":
$_SESSION['lat']= 51.440911831895;
 $_SESSION['long']=-0.090658290563767;
 break;
case "West Ealing":
$_SESSION['lat']= 51.513625243955;
 $_SESSION['long']=-0.31976854613702;
 break;
case "West Ham":
$_SESSION['lat']= 51.52852551818;
 $_SESSION['long']=0.0053318072586749;
 break;
case "West Hampstead":
$_SESSION['lat']= 51.547474356007;
 $_SESSION['long']=-0.19111216622603;
 break;
case "West Hampstead Thameslink":
$_SESSION['lat']= 51.548629145744;
 $_SESSION['long']=-0.19252310000093;
 break;
case "West India Quay":
$_SESSION['lat']= 51.506762659668;
 $_SESSION['long']=-0.020568040587805;
 break;
case "West Kensington":
$_SESSION['lat']= 51.490109387233;
 $_SESSION['long']=-0.20618929345907;
 break;
case "West Norwood":
$_SESSION['lat']= 51.431241127782;
 $_SESSION['long']=-0.10317475212492;
 break;
case "West Silvertown":
$_SESSION['lat']= 51.502884431544;
 $_SESSION['long']=0.022260451989289;
 break;
case "Westbourne Park":
$_SESSION['lat']= 51.520988865484;
 $_SESSION['long']=-0.20086810419124;
 break;
case "Westcombe Park":
$_SESSION['lat']= 51.484508893293;
 $_SESSION['long']=0.017760099794534;
 break;
case "Westferry":
$_SESSION['lat']= 51.509638150617;
 $_SESSION['long']=-0.026308729670621;
 break;
case "Westminster":
$_SESSION['lat']= 51.501401606172;
 $_SESSION['long']=-0.12498767440679;
 break;
case "White City":
$_SESSION['lat']= 51.512232464701;
 $_SESSION['long']=-0.22461752326457;
 break;
case "White Hart Lane":
$_SESSION['lat']= 51.605034779059;
 $_SESSION['long']=-0.07085588920127;
 break;
case "Whitechapel":
$_SESSION['lat']= 51.519587792346;
 $_SESSION['long']=-0.059406074587337;
 break;
case "Willesden Junction":
$_SESSION['lat']= 51.532233992929;
 $_SESSION['long']=-0.2438947288224;
 break;
case "Wimbledon":
$_SESSION['lat']= 51.421107869794;
 $_SESSION['long']=-0.20664845638008;
 break;
case "Wimbledon Chase":
$_SESSION['lat']= 51.409530957999;
 $_SESSION['long']=-0.21407539384331;
 break;
case "Wimbledon Park":
$_SESSION['lat']= 51.434580976538;
 $_SESSION['long']=-0.19917189150183;
 break;
case "Wood Green":
$_SESSION['lat']= 51.597453741251;
 $_SESSION['long']=-0.10951215426353;
 break;
case "Wood Lane":
$_SESSION['lat']= 51.509658221839;
 $_SESSION['long']=-0.2244582012666;
 break;
case "Woolwich Dockyard":
$_SESSION['lat']= 51.491107787563;
 $_SESSION['long']=0.054626749936269;
	break;
}

header('Location:tryitout.html');

?>