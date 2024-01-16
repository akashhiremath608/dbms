<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Train Ticket Online Booking</title>

        <link rel="stylesheet" href="css/Tmain.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
         
        <link rel="stylesheet" href="css/trainfare.css">
        <script src="main.js"></script>
    </head>
    <body>

    <?php

$servername= "localhost";
$username= "root";
$password = "";
$db_name = "brand";

$conn = new mysqli('localhost','root','','brand');
if($conn->connect_error){
	die('Connection Failed : '.$conn->connect_error);
}



            echo'<div class="topnav" id="TopNavigationSection">
            <img src="images/bt-logo.png"><span>Brand Travels</span></p>
                <a href="javascript:void(0);" class="icon" onclick="TopNavToggle()"><i class="fa fa-bars"></i></a>
                <a href="contact.html"><i class="fa fa-fw fa-phone"></i> Contact Us</a>
                <a href="#aboutus"><i class="fa fa-fw fa-info"></i> About Us</a>
                <a href="#booking"><i class="fa fa-fw fa-book"></i> Booking</a>
                <a href="Home.html"><i class="fa fa-fw fa-home"></i> Home</a>
               
            </div>';

            echo'<div class="banner" id="home">
               
                <div class="banner-text">
                    <h1>WELCOME TO OUR ONLINE TRAIN TICKET BOOKING SERVICE</h1>
                    <div class="text">
                    <p>(On the go, or in advance)<br> Trainline means everyday savings of 35%<br>
                    You all find all the latest train deals and discounts on Brand Travels & you can book with us from all around the India here.<br> 
                    If you are looking for other ways to save money on rail travel, why not visit our Brand Travels guide.<p>
                    </div>
                    
                </div>
                <div class="banner-overlay"></div>
                
            </div>';

          

            echo'<div class="bookingParent" id="booking">
                <h1>BOOK YOUR TICKETS HERE!</h1>
                <div class="booking">
                    <form action="php/booking.php" method="post" id="bookingsForm" name="bookingsForm">
                        <div class="elem-group">
                            <label for="userName">Name</label>
                            <input type="text" id="userName" name="userName" placeholder="Username" pattern=[A-Z\sa-z]{3,20} required>
                        </div>

                        <div class="elem-group">
                            <label for="email">E-mail</label>
                            <input type="email" id="email" name="email" placeholder="email" required>
                        </div>

                        <div class="elem-group">
                            <label for="phone">Contact No</label>
                            <input type="tel" id="phone" name="phone" placeholder="phone" pattern=(\d{3})-?\s?(\d{3})-?\s?(\d{4}) required>
                        </div>
            
                        <hr>

                        <div class="elem-group inlined">
                            <label for="stationStart">From</label>
                            <select id="stationStart" name="stationStart" required onchange="FilterStations(0)">
                                 <option value="" selected>Select Station</option>
                                 <option value="Bangalore">Bangalore</option>
                                 <option value="Yesvantpur Junction">Yesvantpur Junction</option>
                                 <option value="Yelhanka Junction">Yelhanka Junction</option>
                                 <option value="Dodballapur">Dodballapur</option>
                                 <option value="Gauribidanur">Gauribidanur</option>
                                 <option value="Raichur">Raichur </option>
                                 <option value="Gulbarga">Gulbarga </option>
                                 <option value="Mumbai Cst ">Mumbai Cst </option>
                            </select>
                        </div>

                        <div class="elem-group inlined">
                            <label for="stationEnd">To</label>
                            <select id="stationEnd" name="stationEnd" required onchange="FilterStations(1)">
                                <option value="" selected>Select Station</option>
                                <option value="Bangalore">Bangalore</option>
                                <option value="Yesvantpur Junction">Yesvantpur Junction</option>
                                <option value="Yelhanka Junction">Yelhanka Junction</option>
                                <option value="Dodballapur">Dodballapur</option>
                                <option value="Gauribidanur">Gauribidanur</option>
                                <option value="Raichur">Raichur </option>
                                <option value="Gulbarga">Gulbarga </option>
                                <option value="Mumbai Cst ">Mumbai Cst </option>
                            </select>
                        </div>
                        <hr>

                        <div class="elem-group inlined">
                            <label for="checkInDate">Check-in Date</label>
                            <input type="date" min="date("Y-m-d");" id="checkInDate" name="checkInDate" required>
                        </div>

                        <div class="elem-group inlined">
                            <label for="checkInTime">Check-in Time</label>
                            <select id="checkInTime" name="checkInTime" required>
                                <option value="" selected>SELECT</option>
                                <option value="05:45 AM">05:45 AM</option>
                                <option value="6:12 AM">06:12 AM</option>
                                <option value="7:32 AM">07:32 AM</option>
                                <option value="17:20 PM">17:20 PM</option>
                                <option value="18:40 PM">18:40 PM</option>
                                <option value="19:00 PM">19:00 PM</option>
                                <option value="20:15 PM">20:15 PM</option>
                            </select>
                        </div>

                        

                      <!---  <div class="elem-group">
                            <label for="visitorClass">Class</label>
                            <select id="visitorClass" name="visitorClass" required>
                                <option value="First Class" selected>First Class</option>
                                <option value="Second Class">Second Class</option>
                                <option value="Third Class">Third Class</option>
                            </select>
                        </div>--->

                        <div class="elem-group inlined1">
                           <!-- <label for="seats">Seats</label>-->
                            
                            <div class="inputs">
                            <div class="input-group f-class">
                            
                            <div class="plus-minus-btn">
                                <p id="first-class-decrease">-</p>
                            </div>
                            <div>
                                <label for="">First Class(Rs.500)</label>
                                <input id="first-class-input" class="inp-style inp-width" type="number" name="firstclass" value="1">
                            </div>
                            <div class="plus-minus-btn">
                                <p id="first-class-increase">+</p>
                            </div>
                        </div>
                        <div class"elem-group inlined1">

                        <div class="input-group f-class">
                    <div class="plus-minus-btn">
                        <p id="economy-class-decrease">-</p>
                    </div>
                    <div>
                        <label for="">Economy (Rs.300)</label>
                        <input id="economy-class-input" class="inp-style inp-width" type="number" name="economyclass" value="1">
                    </div>
                    <div class="plus-minus-btn">
                        <p id="economy-class-increase"> <span>+</span></p>
                    </div>
                </div>
             </div>

          </div>
         
                     <div class="elem-group inlined1">
                     <hr>
                     <hr>

                        <div class="calculations">
                        <div class="amount" name="grand-total">
                            <div class="left">
                                <p>Subtotal</p>
                            </div>
                            <div class="right">
                                <p id="ticket-price">Rs.250</p>
                            </div>
                        </div>
        
                        <div class="amount">
                            <div class="left">
                                <p>Charge 10% GST</p>
                            </div>
                            <div class="right">
                                <p id="vat-amount">Rs.25</p>
                            </div>
                        </div>
                        <hr>
                        <div class="amount">
                            <div class="left" name="grand-total">
                                <h4>Total</h4>
                            </div>
                            <div class="right" name="grand-total">
                                <p id="grand-total"  >Rs.275</p>
                            </div>
                        </div>
                    </div>
                            <!----<label for="amount">Amount</label>
                            <input readonly  type="text" id="amount" name="amount" value="Rs.250" onchange="calculateTicketFare()" >--->
                        </div>

                       
                        <button type="submit" class="BookingConfirm" id="bookingFormBtn">Book Now</button>
                    </form>
                </div>
            </div>';
            echo'<div class="about-us-block" id="aboutus">
            <div id="about-us-section">
                <div class="about-us-image">
                    <img src="images/about.jpeg" width="808" height="458" alt="Train Image">
                </div>
            
                <div class="about-us-info">
                    <h2>We are Brand Travels<sup>&trade;</sup></h2>
                    <p>India is a fabulous place, safe, friendly and remarkably hassle-free. Taking the train is a great way to get around and a real cultural experience. Reserve train tickets with convenience and ease any time any were by just visit our online web service. Reservations can be made for selected trains of Indian railway.</p>
                    
                </div>
            </div>
        </div>';
            echo'<div class="footer" id="contactUs">
                <div class="heading">
                    <h2>BT<sup>&trade;</sup></h2>
                </div>

                <div class="content">
                    <div class="social-media">
                        <h4>Social</h4>
                        <p>
                            <a href="https://www.facebook.com" target="_blank"><i class="fa fa-facebook"></i> Facebook</a>
                        </p>
                        <p>
                            <a href="https://www.instagram.com" target="_blank"><i class="fa fa-instagram"></i> Instagram</a>
                        </p>
                    </div>

                    <div class="links">
                        <h4>Quick links</h4>
                        <p><a href="Home.html">Home</a></p>
                        <p><a href="#booking">Booking</a></p>
                        <p><a href="#aboutus">About Us</a></p>
                        <p><a href="contact.html">Contact Us</a></p>
                    </div>

                    <div class="details">
                        <h4 class="address">Head Office</h4>
                        <p>No 52, 3rd Lane, Dwarakanagar bagulu main road Yelahanka-560063</p>
                        <h4 class="mobile">Mobile</h4>
                        <p>+91 9855 2442 55</p>
                        <h4 class="mail">Email</h4>
                        <p><a href="mailto:Brandtravells@gmail.com">brandTravells@gmail.com</a></p>
                    </div>
                </div>

                <footer>
                    <hr />
                    &copy; 2023 Akash Hiremath | Abu Bakkar
                </footer>
            </div>';
        ?>
        <script>
            // First Class Ticket Quantity Increase Btn Event
const firstClassIncreaseBtn = document.getElementById('first-class-increase');
firstClassIncreaseBtn.addEventListener('click', function () {
	firstClassTicketQuantity(true);
    calculateTicketFare()
});

// First Class Ticket Quantity Decrease Btn Event
const firstClassDecreaseBtn = document.getElementById('first-class-decrease');
firstClassDecreaseBtn.addEventListener('click', function () {
	firstClassTicketQuantity(false);
    calculateTicketFare()
});

// First Economy Ticket Quantity Increase Btn Event
const economyClassIncreaseBtn = document.getElementById('economy-class-increase');
economyClassIncreaseBtn.addEventListener('click', function (){
    economyClassTicketQuantity(true);
    calculateTicketFare()
})

// First Economy Ticket Quantity Decrease Btn Event
const economyClassDecreaseBtn = document.getElementById('economy-class-decrease');
economyClassDecreaseBtn.addEventListener('click', function (){
    economyClassTicketQuantity(false);
    calculateTicketFare()
})

// First Class Ticket Quantity Calculation
function firstClassTicketQuantity(isIncreased) {
	const firstClassTicketInput = document.getElementById('first-class-input').value;
	const firstClassTicketValue = parseInt(firstClassTicketInput);
	let newFirstClassTicketValue = firstClassTicketValue;
	if (isIncreased == true) {
		newFirstClassTicketValue = firstClassTicketValue + 1;
	}
	if (isIncreased == false && firstClassTicketValue > 0) {
		newFirstClassTicketValue = firstClassTicketValue - 1;
	}
	document.getElementById('first-class-input').value = newFirstClassTicketValue;
}

// Economy Class Ticket Quantity Calculation
function economyClassTicketQuantity(isIncreased){
    const economyClassTicketInput = document.getElementById('economy-class-input').value;
	const economyClassTicketValue = parseInt(economyClassTicketInput);
	let newEconomyClassTicketValue = economyClassTicketValue;
	if (isIncreased == true) {
		newEconomyClassTicketValue = economyClassTicketValue + 1;
	}
	if (isIncreased == false && economyClassTicketValue > 0) {
		newEconomyClassTicketValue = economyClassTicketValue - 1;
	}
	document.getElementById('economy-class-input').value = newEconomyClassTicketValue;
}

// Ticket Fare Calculation
function calculateTicketFare(){
    const firstClassInputValue = document.getElementById('first-class-input').value;
    const firstClassTicketCost = firstClassInputValue * 500;
    const economyClassInputValue = document.getElementById('economy-class-input').value;
    const economyClassTicketCost = economyClassInputValue * 300;
    const totalCost = firstClassTicketCost + economyClassTicketCost;
    document.getElementById('ticket-price').innerText = 'Rs.' + totalCost;
    const vat = Math.round(totalCost * 0.1);
    document.getElementById('vat-amount').innerText = 'Rs.' + vat;
    const grandTotal = totalCost + vat;
    document.getElementById('grand-total').innerText = 'Rs.' + grandTotal;
}

//no of seat
function noofseats(isIncreased) {
    const noofseat = document.getElementById('seatno').value;
    const seatvalue = parseInt(noofseat);
    let newSeatvalue = seatvalue;
    if (isIncreased == true) {
        newSeatvalue = seatvalue + 1;
    }
    if (isIncreased == false && seatvalue > 0) {
        newSeatvalue = seatvalue - 1;
    }
    document.getElementById('seatno').value = newSeatvalue;
}

        </script>
    </body>
</html>