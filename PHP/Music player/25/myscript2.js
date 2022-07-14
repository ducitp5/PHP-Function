
function 	ducTime(seconde) {
		
	if( ! isNaN(seconde) )
		
			return 		new Date(seconde * 1000).toISOString().substr(11, 8);
	
	else	return 		'indefine isNaN';
};



const app = {


	songs: [

		{
			name: "Click Pow Get Down",
			singer: "Raftaar x Fortnite",
			path: "../music/cafe1.mp3",
			image: "https://i.ytimg.com/vi/jTLhQf5KJSc/maxresdefault.jpg"
		},

		{
			name: "Tu Phir Se Aana",
			singer: "Raftaar x Salim Merchant x Karma",
			path: "../music/cafe2.mp3",
			image: "https://1.bp.blogspot.com/-kX21dGUuTdM/X85ij1SBeEI/AAAAAAAAKK4/feboCtDKkls19cZw3glZWRdJ6J8alCm-gCNcBGAsYHQ/s16000/Tu%2BAana%2BPhir%2BSe%2BRap%2BSong%2BLyrics%2BBy%2BRaftaar.jpg"
		},
		{
			name: "Naachne Ka Shaunq",
			singer: "Raftaar x Brobha V",
			path: "../music/cafe3.mp3",
			image: "https://i.ytimg.com/vi/QvswgfLDuPg/maxresdefault.jpg"
		},
		{
			name: "Click Pow Get Down",
			singer: "Raftaar x Fortnite",
			path: "../music/cafe4.mp3",
			image: "https://i.ytimg.com/vi/jTLhQf5KJSc/maxresdefault.jpg"
		},

		{
			name: "Tu Phir Se Aana",
			singer: "Raftaar x Salim Merchant x Karma",
			path: "../music/cafe5.mp3",
			image: "https://1.bp.blogspot.com/-kX21dGUuTdM/X85ij1SBeEI/AAAAAAAAKK4/feboCtDKkls19cZw3glZWRdJ6J8alCm-gCNcBGAsYHQ/s16000/Tu%2BAana%2BPhir%2BSe%2BRap%2BSong%2BLyrics%2BBy%2BRaftaar.jpg"
		},

		{
			name: "Click Pow Get Down",
			singer: "Raftaar x Fortnite",

			path: "../music/cafe6.mp3",
			image: "https://i.ytimg.com/vi/jTLhQf5KJSc/maxresdefault.jpg"
		},

		{
			name: "Tu Phir Se Aana",
			singer: "Raftaar x Salim Merchant x Karma",
			path: "../music/cafe7.mp3",
			image:
				"https://1.bp.blogspot.com/-kX21dGUuTdM/X85ij1SBeEI/AAAAAAAAKK4/feboCtDKkls19cZw3glZWRdJ6J8alCm-gCNcBGAsYHQ/s16000/Tu%2BAana%2BPhir%2BSe%2BRap%2BSong%2BLyrics%2BBy%2BRaftaar.jpg"
		},
		{
			name: "Naachne Ka Shaunq",
			singer: "Raftaar x Brobha V",
			path: "../music/cafe8.mp3",
			image: "https://i.ytimg.com/vi/QvswgfLDuPg/maxresdefault.jpg"
		},
		{
			name: "Mantoiyat",
			singer: "Raftaar x Nawazuddin Siddiqui",
			path: "../music/cafe6.mp3",
			image:
				"https://a10.gaanacdn.com/images/song/39/24225939/crop_480x480_1536749130.jpg"
		},
		{
			name: "Aage Chal",
			singer: "Raftaar",
			path: "../music/cafe5.mp3",
			image:
				"https://a10.gaanacdn.com/images/albums/72/3019572/crop_480x480_3019572.jpg"
		},
		{
			name: "Click Pow Get Down",
			singer: "Raftaar x Fortnite",
			path: "../music/cafe1.mp3",
			image: "https://i.ytimg.com/vi/jTLhQf5KJSc/maxresdefault.jpg"
		},

		{
			name: "Tu Phir Se Aana",
			singer: "Raftaar x Salim Merchant x Karma",
			path: "../music/cafe4.mp3",
			image: "https://1.bp.blogspot.com/-kX21dGUuTdM/X85ij1SBeEI/AAAAAAAAKK4/feboCtDKkls19cZw3glZWRdJ6J8alCm-gCNcBGAsYHQ/s16000/Tu%2BAana%2BPhir%2BSe%2BRap%2BSong%2BLyrics%2BBy%2BRaftaar.jpg"
		},
		{
			name: "Naachne Ka Shaunq",
			singer: "Raftaar x Brobha V",
			path: "../music/cafe7.mp3",
			image: "https://i.ytimg.com/vi/QvswgfLDuPg/maxresdefault.jpg"
		},
		{
			name: "Click Pow Get Down",
			singer: "Raftaar x Fortnite",
			path: "../music/cafe8.mp3",
			image: "https://i.ytimg.com/vi/jTLhQf5KJSc/maxresdefault.jpg"
		},
		
		{
			name: "Click Pow Get Down",
			singer: "Raftaar x Fortnite",
			path: "../music/cafe1.mp3",
			image: "https://i.ytimg.com/vi/jTLhQf5KJSc/maxresdefault.jpg"
		},

		{
			name: "Tu Phir Se Aana",
			singer: "Raftaar x Salim Merchant x Karma",
			path: "../music/cafe2.mp3",
			image: "https://1.bp.blogspot.com/-kX21dGUuTdM/X85ij1SBeEI/AAAAAAAAKK4/feboCtDKkls19cZw3glZWRdJ6J8alCm-gCNcBGAsYHQ/s16000/Tu%2BAana%2BPhir%2BSe%2BRap%2BSong%2BLyrics%2BBy%2BRaftaar.jpg"
		},
		{
			name: "Naachne Ka Shaunq",
			singer: "Raftaar x Brobha V",
			path: "../music/cafe3.mp3",
			image: "https://i.ytimg.com/vi/QvswgfLDuPg/maxresdefault.jpg"
		},
		{
			name: "Click Pow Get Down",
			singer: "Raftaar x Fortnite",
			path: "../music/cafe4.mp3",
			image: "https://i.ytimg.com/vi/jTLhQf5KJSc/maxresdefault.jpg"
		},

		{
			name: "Tu Phir Se Aana",
			singer: "Raftaar x Salim Merchant x Karma",
			path: "../music/cafe5.mp3",
			image: "https://1.bp.blogspot.com/-kX21dGUuTdM/X85ij1SBeEI/AAAAAAAAKK4/feboCtDKkls19cZw3glZWRdJ6J8alCm-gCNcBGAsYHQ/s16000/Tu%2BAana%2BPhir%2BSe%2BRap%2BSong%2BLyrics%2BBy%2BRaftaar.jpg"
		},

		{
			name: "Click Pow Get Down",
			singer: "Raftaar x Fortnite",

			path: "../music/cafe6.mp3",
			image: "https://i.ytimg.com/vi/jTLhQf5KJSc/maxresdefault.jpg"
		},

		{
			name: "Tu Phir Se Aana",
			singer: "Raftaar x Salim Merchant x Karma",
			path: "../music/cafe7.mp3",
			image:
				"https://1.bp.blogspot.com/-kX21dGUuTdM/X85ij1SBeEI/AAAAAAAAKK4/feboCtDKkls19cZw3glZWRdJ6J8alCm-gCNcBGAsYHQ/s16000/Tu%2BAana%2BPhir%2BSe%2BRap%2BSong%2BLyrics%2BBy%2BRaftaar.jpg"
		},
		{
			name: "Naachne Ka Shaunq",
			singer: "Raftaar x Brobha V",
			path: "../music/cafe8.mp3",
			image: "https://i.ytimg.com/vi/QvswgfLDuPg/maxresdefault.jpg"
		},
		{
			name: "Mantoiyat",
			singer: "Raftaar x Nawazuddin Siddiqui",
			path: "../music/cafe6.mp3",
			image:
				"https://a10.gaanacdn.com/images/song/39/24225939/crop_480x480_1536749130.jpg"
		},
		{
			name: "Aage Chal",
			singer: "Raftaar",
			path: "../music/cafe5.mp3",
			image:
				"https://a10.gaanacdn.com/images/albums/72/3019572/crop_480x480_3019572.jpg"
		},
		{
			name: "Click Pow Get Down",
			singer: "Raftaar x Fortnite",
			path: "../music/cafe1.mp3",
			image: "https://i.ytimg.com/vi/jTLhQf5KJSc/maxresdefault.jpg"
		},

		{
			name: "Tu Phir Se Aana",
			singer: "Raftaar x Salim Merchant x Karma",
			path: "../music/cafe4.mp3",
			image: "https://1.bp.blogspot.com/-kX21dGUuTdM/X85ij1SBeEI/AAAAAAAAKK4/feboCtDKkls19cZw3glZWRdJ6J8alCm-gCNcBGAsYHQ/s16000/Tu%2BAana%2BPhir%2BSe%2BRap%2BSong%2BLyrics%2BBy%2BRaftaar.jpg"
		},
		{
			name: "Naachne Ka Shaunq",
			singer: "Raftaar x Brobha V",
			path: "../music/cafe7.mp3",
			image: "https://i.ytimg.com/vi/QvswgfLDuPg/maxresdefault.jpg"
		},
		{
			name: "Click Pow Get Down",
			singer: "Raftaar x Fortnite",
			path: "../music/cafe8.mp3",
			image: "https://i.ytimg.com/vi/jTLhQf5KJSc/maxresdefault.jpg"
		},

		
		
	],


	currentIndex	: 0,
	
	get 	currentSong(){
		
		return 		this.songs[this.currentIndex];		
		
	},
	
	
	isPlaying		:	false,
		
	cdThumbAnimate	:		cdThumb.animate(
			
		[{ transform : "rotate(360deg)" }]  , 
		
		{		
			duration		: 10000,			// 10 seconds
		
			iterations		: Infinity,		
			
			delay			: 500,
		}
	),
	
	
	isRepeat	:	false,
	
	isRandom	:	false,
	
	
	
	
	render			: function () {
				
		
		this.loadCurrentSong();	
		
		this.renderTime();

		if(app.isPlaying)		audio.play();
		
		
		audio.onplay 	=	 function () {
			
			console.log('on playing ');
			
			app.isPlaying	=	true;
			
			player.classList.add("playing");
			
			app.cdThumbAnimate.play();			
		};
		
		
		audio.onpause 	=	 function () {

			console.log('paussing ');
			
			app.isPlaying	=	false;
			
			player.classList.remove("playing");

			app.cdThumbAnimate.pause();			
		};		

		


		const htmls		= 	this.songs.map(  (song , index)		=> {

			return `
        
				<div	class		= "song ${	index === this.currentIndex		?	 "active"	:	""	}"	
				
						data-index	= "${index}" >

					<div 	class	="thumb"
					
							style	="background-image: url(${song.image})" >
					</div>
					
					
					<div 	class="body">
						
						<h3 class="title">	${song.name}	</h3>
						
						<p class="author">	${song.singer}	</p>
						
					</div>
					
					
					<div 	class ="option">
					
						<i class ="fas fa-ellipsis-h"></i>
					</div>
				</div>
			`;
		});
		
		playlist.innerHTML 		=	 htmls.join("");		
		
	},	
	
	


	
	
	handleEvents	: function () {	
					
		
		const cdWidth			= cd.offsetWidth;
		
		
		document.onscroll		= function () {

			const scrollTop		= window.scrollY	||	 document.documentElement.scrollTop;

			const newCdWidth	= cdWidth - scrollTop;

			cd.style.width		= newCdWidth > 0	?	 newCdWidth + "px"		:	 0;

			cd.style.opacity	= newCdWidth / cdWidth;
		};

		
		repeatBtn.onclick		=	 function (e) {			

			app.isRepeat		=	 !app.isRepeat;		
			
			repeatBtn.classList.toggle( "active"  ,  app.isRepeat );
		};
		
		
		prevBtn.onclick			=	 function () {			
	
			app.prevSong();
			
			app.render();
			
		};


		playBtn.onclick			=	 function (e) {
			
			app.isPlaying 		=	!app.isPlaying;
			
			if (app.isPlaying) {	
				
				audio.play();		
			} 
			else {								
				
				audio.pause();							
			}			
		};
		
		
		nextBtn.onclick 	=	 function () {
			
			app.nextSong();
			
			app.render();
			
		};
		

		randomBtn.onclick 		=	 function (e) {
			
			app.isRandom 		=	 !app.isRandom;		
			
			randomBtn.classList.toggle("active", app.isRandom);			
		};
		

		progress.onchange 		=	 function (e) {
			
			audio.currentTime 		=	 (audio.duration / 100) * e.target.value;

			app.renderTime();			
		};	
		
		
		audio.ontimeupdate 		=	 function (e) {
			
			if (audio.duration) {				
				
				const progressPercent 	=	 Math.floor(
						
					(audio.currentTime / audio.duration) * 100
				);
				progress.value 		=	 progressPercent;
			}
			
			app.renderTime();
		};
				
		
		playlist.onclick 		=	 function (e) {
			
			const songNode 		=	 e.target.closest(".song:not(.active)");

			if (songNode || e.target.closest(".option")) {
				
				// Handle when clicking on the song
				
				if (songNode) {
					
					app.currentIndex 	=	 Number(songNode.dataset.index);
					
					app.audioLoaded		=	false;
					app.render();
					
				}

				// Handle when clicking on the song option
				if (e.target.closest(".option")) {

				}
			}
		};		
	},
	
	

	
	
	loadCurrentSong		: function () {
	
		heading.textContent 			= 	this.currentSong.name;
		
		cdThumb.style.backgroundImage 	= 	`url('${this.currentSong.image}')`;
			
		audio.src 						= 	this.currentSong.path;	
		
		progress.value					=	0;
		
		app.scrollToActiveSong();
	},
	
	
	nextSong			: function () {

		if(app.isRandom){
			
			app.playRandomSong();
		}
		else{
			this.currentIndex ++ ;
			
			if (this.currentIndex >= this.songs.length) {
			
				this.currentIndex   =   0;
			}
		}		
	},
	
	
	prevSong			: function () {
		
		if(app.isRandom){
			
			app.playRandomSong();
		}
		else{
		
			this.currentIndex -- ;
			
			if (this.currentIndex < 0) {
			
				this.currentIndex 	=	 this.songs.length - 1;
			}
		}
		
	},
	
	
	playRandomSong		: function () {
		
		let 	newIndex;
		
		do {
			
			newIndex 	=	 Math.floor(Math.random() * this.songs.length);
		}
		while (newIndex === this.currentIndex);

		this.currentIndex 		=	 newIndex;
	},
	
	
	scrollToActiveSong		: function () {
		
		setTimeout(() => {
		
			$(".song.active").scrollIntoView({
				
				behavior	: "smooth",
				block		: "nearest"
			});
			
		}, 		100);
	},
	
	audioLoaded				: false,
	
	renderTime				: function () {		
		
		if( ! app.audioLoaded ){
			
			audio.onloadedmetadata 		=	function(e) {				
			
				starttime.innerHTML		=	ducTime(audio.currentTime);
				
				endtime.innerHTML		=	ducTime(audio.duration) ;	
							
				app.audioLoaded 		=	true;
			};
		}
		else{
			
			starttime.innerHTML		=	ducTime(audio.currentTime);
			
			endtime.innerHTML		=	ducTime(audio.duration) ;
		}
	},
	
	
	
	
	
	start		: function () {

		this.cdThumbAnimate.pause();

		this.render();
				
		this.handleEvents();

	}
};


app.start();