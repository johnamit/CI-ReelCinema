const container= document.querySelector('.container');
const seating = document.querySelectorAll('.row.seating:not(.occupied)');
const count = document.getElementById('count');
const price = document.getElementById('price');

const movieSelect= document.getElementById('movie');
let ticketPrice = movieSelect.value;

const populateUI = ()=> {
	const selectedSeats = JSON.parse(localStorage.getItem('selectedSeats'));
	
	if (selectedSeats !== null&& selectedSeats.length >0){
		seats.forEach((seats,index) > -1 ){
			seats.classList.add('selected');
		}
}};



const selectedMovieListing = localStorage.getItem('selectedMovieListing');
const selectedMoviePrice = localStorage.getItem('selectedPrice');

if (selectedMovieListing !== null){
	movieSelect.selectedMovieListing;
}

if (selectedMoviePrice != null){
	count.innerText = selectedSeats.length;
	price.innerText = selectedSeats.length * selectedMoviePrice;	
}


PopulateUI();

selectedMovieListing = (movieIndex, moviePrice) => {
	localStorage.setItem('slectedMovieIndex',movieIndex);
	localStorage.setItem('selectedMoviePrice',moviePrice);	
};

const updateSelectedSeatsCount = () => {
	const seletedSeats =document.querySelectorAll('.row.selected');
}

const seatsIndex = [...selectedSeats].map(seat=> [...seats].indexOf(seat));

localStorage.settings ('selectedSeats', JSON.stringify(seatsIndex));

count.innerText = selectedSeatsCount;
price.innerText = selectedSeatsCount * ticketPrice;


container.addEventListener('click', e =>){
	if(
		s.target.classList.contains('seat') && !s.target.classList.contains('occupied')
	)
	else(
		s.target.classList.toggle('selected')
		
		updateSelectedSeatsCount();
	)
}

movieSelect.addEventListener('change', s=>){
	ticketPrice = +s.target.value;
	selectedMovieListing(s.target.selectedSeats, s.target.value);
	
	updateSelectedSeatsCount();
};



