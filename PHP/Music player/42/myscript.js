// Một số bài hát có thể bị lỗi do liên kết bị hỏng. Vui lòng thay thế liên kết khác để có thể phát
// Some songs may be faulty due to broken links. Please replace another link so that it can be played

/*const $				=	 document.querySelector.bind(document);
const $$			=	 document.querySelectorAll.bind(document);
*/

const player		=	 $(".player")[0];


const heading		=	 $("header h2")[0];


const cd			=	 $(".cd")[0];
const cdThumb		=	 $(".cd-thumb")[0];


const repeatBtn		=	 $(".btn-repeat")[0];

const prevBtn		=	 $(".btn-prev")[0];

const playBtn		=	 $(".btn-toggle-play")[0];

const nextBtn		=	 $(".btn-next")[0];

const randomBtn 	=	 $(".btn-random")[0];


const progress		=	 $("#progress")[0];

const audio			=	 $("#audio")[0];


const starttime		=	 $("#starttime")[0];
const endtime		=	 $("#endtime")[0];



const playlist		=	 $(".playlist")[0];



const PlAYER_STORAGE_KEY 	=	 "F8_PLAYER_31";





function 	ducTime(seconde) {
		
	if( ! isNaN(seconde) )
		
			return 		new Date(seconde * 1000).toISOString().substr(11, 8);
	
	else	return 		'';
};





