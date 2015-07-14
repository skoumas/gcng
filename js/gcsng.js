var name = null;
function facebookShare(url, title, descr, image) {
    var winTop = (screen.height / 2) - (500 / 2);
    var winLeft = (screen.width / 2) - (200 / 2);
    window.open('http://www.facebook.com/sharer.php?s=100&p[title]=' + title + '&p[summary]=' + descr + '&p[url]=' + url + '&p[images][0]=' + image, 'sharer', 'top=' + winTop + ',left=' + winLeft + ',toolbar=0,status=0,width=' + 500 + ',height=' + 200);
}

function randomFromArray(array) {
	return Math.floor (( Math.random() * array.length) );
}

function generateName()
{
	$("#link").slideUp();
	
	var loadingInterval = null;
	var MaxLoadingMessages = 5;
	var messageTimes = 0;
	var temp_loading_titles = [];
	var timeoutLoading = 1000;
	var loading_titles = 
	[
		"calculating mathematical geographical coordinates",
		"making a greek salad",
		"making some greek souvlaki",
		"making some musaka",
		"calculating souvlaki curvatures",
		"calculating coffee color and quantity",
		"shouting Opa Opa to random tourists",
		"taking santorini pictures",
		"drinking a bit of Ouzo",
		"taking a dive to the beautiful greek islands",
		"celebrating awesomeness",
		"playing with various tourist",
		"philosophizing",
		"watching footbal",
		"winning the Euro",
		"inventing olympic games",
		"inventing democracy",
		"inventing philosophy",
		"inventing all modern vocabuly words",
		"fighting the persians with 300 people",
		"making Greek humour",
		"going to the parliement",
		"playing the buzuki",
		"creating the perfect frappe",
		"relaxing under the greek sun",
		"playing tavli",
		"doing Greek Kamaki",
		"making some Feta Cheese",
		"visiting one of the hundrets of Greek islands",
		"visiting some of the greatest museums of Greece",
		"studying Greek history",
		"eating a big crepa",
		"having a saturday night out in Athens",
		"drinking tsipouro",
		"making elections",
		"eating spanakopita",
		"eating kalamarakia",
		"go deep diving in the greek islands",
		"myyyyyyyykoooonooooosssss",
		"smoking karelia"
	]

	var name_1 = [
		"frappe",
		"havale",
		"mpale",
		"leonida",
		"klama",
		"sueno",
		"kano",
		"grexite",
		"triakosi",
		"kone",
		"tsipro",
		"tsipra",
		"merkele",
		"elia",
		"varkari",
		"pitayiro",
		"voule",
		"vouli",
		"foroi",
		"nisi",
		"moro",
		"kali",
		"zali",
		"vouta",
		"noumi",
		"mikono",
		"salata",
		"kalamake",
		"musaka",
		"kolare",
		"kolase",
		"yorgou",
		"yan",
		"buzu",
		"buzuke",
		"buzuki",
		"pireo",
		"leonaintas",
		"opa",
		"ya",
		"xoriata",
		"zante",
		"ilio",
		"varoufaki",
		"levente",
		"tsolia",
		"klarino",
		"gampro",
		"tsolia",
		"nifi",
		"nifoule",
		"palikare",
		"palikari"

	]
	var name_2 = [
		"ainte",
		"kala",
		"ma",
		"ai re",
		"re",
		"ti",
		"ai",
		"more",
		"mor",
		"opa",
		"am",
		"yan",
		"fan",
		"yamas",
		"fer",
		"em",
		"il",
		"kara",
		"mas"
	]
	var name_3 = [
		"eeeee",
		"el",
		"ai"
	]
	var name_static = [
		"pueno",
		"fragko",
		"stella",
		"fasi",
		"frape",
		"kolara",
		"nescafe",
		"psaraki",
		"zante",
		"giannero",
		"rodo",
		"antho",
		"opante",
		"pireo",
		"mitso",
		"kosta",
		"giorgo",
		"gian",
		"gianni",
		"yani",
		"yan",
		"fan",
		"marante",
		"kolokotron"
	];
	var type = Math.floor((Math.random() * 3) + 1);
	 
	if (type == 1)
	{
		//Name 3 Name Static
		var first = randomFromArray(name_3);
		var second = randomFromArray(name_static);
		name = name_3[first] + " " + name_static[second];
	}
	else if (type==2)
	{
		 
		var first = randomFromArray(name_1);
		var second = randomFromArray(name_2);
		name = name_2[second]   + name_1[first];
	}
	else if (type==3)
	{
		var first = randomFromArray(name_1);
		var second = randomFromArray(name_2);
		var third = randomFromArray(name_3);
		name = name_3[third] + " " + name_1[first] + name_2[second] ;
	}

	$("#first").slideUp("slow");
	$("#loading").slideDown("slow");

	loadLoading();
	 
	loadingInterval =  setInterval(loadLoading,timeoutLoading);


	function loadLoading() {

		if (messageTimes > MaxLoadingMessages) {
			clearInterval(loadingInterval);
			console.log(loadingInterval);
			$("#loading").hide();
			$("#final").show();
			$("#final_name").show("slow");
			$("#final_name").html(name);
			return;
		} 
		var randomMessage = randomFromArray(loading_titles);
		 
		$("#loading_title").html( "..." + loading_titles[randomMessage] );
		$("#progress_bar").css({ width: (  messageTimes   / MaxLoadingMessages) *100 + "%"});
		//temp_loading_titles.push ( loading_titles.splice(randomMessage,1) );
		messageTimes ++;
	}

	$.ajax({
	  url: "http://www.greek-cafeteria-name-generator.com/counter.php",
	  data:{ok:1},
	  type:"POST"
	})
	.done(function() {
	 
	});

	

	
}

function reset() {

	$("#progress_bar").css({width:"0px"});
	$("#final_name").html("");
	$("#final").hide();
	$("#loading").hide();
	$("#first").hide();
	generateName();
}


