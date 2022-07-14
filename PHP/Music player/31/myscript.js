// Một số bài hát có thể bị lỗi do liên kết bị hỏng. Vui lòng thay thế liên kết khác để có thể phát
// Some songs may be faulty due to broken links. Please replace another link so that it can be played

const $				=	 document.querySelector.bind(document);
const $$			=	 document.querySelectorAll.bind(document);


const player		=	 $(".player");


const heading		=	 $("header h2");


const cd			=	 $(".cd");
const cdThumb		=	 $(".cd-thumb");


const repeatBtn		=	 $(".btn-repeat");

const prevBtn		=	 $(".btn-prev");

const playBtn		=	 $(".btn-toggle-play");

const nextBtn		=	 $(".btn-next");

const randomBtn 	=	 $(".btn-random");


const progress		=	 $("#progress");

const audio			=	 $("#audio");


const starttime		=	 $("#starttime");
const endtime		=	 $("#endtime");


const playlist		=	 $(".playlist");


const PlAYER_STORAGE_KEY = "F8_PLAYER_31";





function 	ducTime(seconde) {
		
	if( ! isNaN(seconde) )
		
			return 		new Date(seconde * 1000).toISOString().substr(11, 8);
	
	else	return 		'';
};





