function reservationForm() {
    return {
        name: '',
        email: '',
        phone: '',
        arrivalDate: '',
        departureDate: '',
        nights: 0,
        roomType: '',
        guests: 1,
        totalPrice: 0,
        calculateNights() {
            console.log('Calculating nights...');
            if (this.arrivalDate && this.departureDate) {
                const arrival = new Date(this.arrivalDate);
                const departure = new Date(this.departureDate);
                if (arrival < departure) {
                    const timeDiff = Math.abs(departure - arrival);
                    this.nights = Math.ceil(timeDiff / (1000 * 60 * 60 * 24));
                    this.calculateTotalPrice();
                    console.log('Nights calculated:', this.nights);
                } else {
                    alert("Departure date must be after arrival date.");
                }
            }
        },
        calculateTotalPrice() {
            console.log('Calculating total price...');
            const roomPrices = {
                'Спалня': 80,
                'Двойна': 60,
                'Апартамент': 100,
                'Bedroom': 80,
                'Double room': 60,
                'Apartment': 100
            };
            if (roomPrices[this.roomType]) {
                this.totalPrice = this.nights * roomPrices[this.roomType] * this.guests;
                console.log('Total price calculated:', this.totalPrice);
            } else {
                this.totalPrice = 0;
                console.log('Invalid room type:', this.roomType);
            }
        },
        validateForm() {
            console.log('Validating form...');
            const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            const phonePattern = /^\+?\d{7,15}$/; // Adjusted to allow more flexible phone formats
            
            // Debugging logs to check each field
            console.log('Name:', this.name);
            console.log('Email valid:', emailPattern.test(this.email));
            console.log('Phone valid:', phonePattern.test(this.phone));
            console.log('Arrival date:', this.arrivalDate);
            console.log('Departure date:', this.departureDate);
            console.log('Room type:', this.roomType);
            console.log('Guests:', this.guests);

            // Check if all required fields are filled and valid
            const isValid = this.name && 
                            emailPattern.test(this.email) && 
                            phonePattern.test(this.phone) && 
                            this.arrivalDate && 
                            this.departureDate && 
                            this.roomType && 
                            this.guests;
            
            console.log('Form validation result:', isValid);
            return isValid;
        },
        // Modified form submission method for Alpine.js
        submitForm() {
            if (!this.validateForm()) {
                alert('Please fill out all required fields correctly.');
                return;
            }

            // Show loading spinner
            var loadingSpinner = document.getElementById('loading-spinner');
            loadingSpinner.classList.remove('hidden');

            // Gather form data
            var form = document.querySelector('form');
            var formData = new FormData(form);

            fetch('process_reservation.php', {
                method: 'POST',
                body: formData
            }).then(response => response.text())
              .then(data => {
                  alert(data);
                  // Hide loading spinner
                  loadingSpinner.classList.add('hidden');
              })
              .catch(error => {
                  console.error('Error:', error);
                  alert('An error occurred while processing your reservation. Please try again.');
                  // Hide loading spinner
                  loadingSpinner.classList.add('hidden');
              });
        }
    };
}


    




