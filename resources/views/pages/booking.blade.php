<x-app-layout>
    <br>
    <section class="container-form">
        <header>Booking Form</header>
        <form action="{{ route('booking.store') }}" method="POST" class="form">
            @csrf
            <div class="input-box">
                <label class="headup">Full Name</label>
                <input type="text" placeholder="Enter full name" name="full_name" required />
            </div>
            <div class="input-box">
                <label class="headup">National Identity Card Number</label>
                <input type="text" placeholder="Enter National Identity Card Number" name="nic" required />
            </div>
            <div class="column">
                <div class="input-box">
                    <label class="headup">Phone Number</label>
                    <input type="number" placeholder="Enter phone number" name="phone_number" required />
                </div>
            </div>

            {{-- GENDER1 --}}
            <div class="gender-box">
                <h3 id="heady">Type</h3>
                <div class="gender-option">
                    <div class="gender">
                        <input type="radio" id="check-male" name="type" value="Petrol"/>
                        <label for="check-male">Petrol</label>
                    </div>
                    <div class="gender">
                        <input type="radio" id="check-female" name="type"  value="Diesel" />
                        <label for="check-female">Diesel</label>
                    </div>
                    <div class="gender">
                        <input type="radio" id="check-other" name="type"  value="Electric" />
                        <label for="check-other">Electric</label>
                    </div>
                </div>
            </div>

            {{-- GENDER2 --}}
            <div class="gender-box">
                <h3 id="heady">Payment Type</h3>
                <div class="gender-option">
                    <div class="gender">
                        <input type="radio" id="check-male" name="payment" value="card"/>
                        <label for="check-male">Card</label>
                        <br>
                        <div class="input-box">
                            <input type="text" placeholder="Enter card number"  name="card_No"  />
                        </div>
                        <div class="input-box">
                            <input type="text" placeholder="Enter security number"  name="sec_No"  />
                        </div>
                        <br>
                    </div>
                    <div class="gender">
                        <br>
                        <input type="radio" id="check-female" name="payment" value="cash"/>
                        <label for="check-female">Cash</label>
                    </div>
                </div>
            </div>

            {{-- GENDER3 --}}
            <div class="gender-box">
                <h3 id="heady">Type of service needed:</h3>
                <div class="gender-option">
                    <div class="gender">
                        <input type="checkbox" id="check-male" name="service" value="Car wash"/>
                        <label for="check-male">Car wash</label>
                    </div>
                    <div class="gender">
                        <input type="checkbox" id="check-female" name="service" value="Battery change"/>
                        <label for="check-female">Battery change</label>
                    </div>
                    <div class="gender">
                        <input type="checkbox" id="check-other" name="service" value="Tyre change" />
                        <label for="check-other">Tyre change</label>
                    </div>
                    <div class="gender">
                        <input type="checkbox" id="check-other" name="service" value="Engine oil change"/>
                        <label for="check-other">Engine oil change</label>
                    </div>
                    <div class="gender">
                        <input type="checkbox" id="check-other" name="service" value="Fuel Delivery"/>
                        <label for="check-other">Fuel Delivery (Only 5 litres)</label>
                    </div>
                </div>
            </div>

            <div class="input-box address">
                <label class="headup">Address and Additional Details</label>
                <input type="text" placeholder="Enter street address" name="address" required />
                <div class="column">
                    <input type="text" placeholder="Enter your plate number"  name="plate" required />
                </div>
                <div class="column">
                    <input type="text" placeholder="Enter your chasis number"  name="chasis" required />
                    <input type="number" placeholder="Enter discount code"  name="discount" required  />
                </div>
            </div>
            @guest
                <button onclick="window.location='{{ route('login') }}'">Submit</button>
            @endguest
            @if (Route::has('login'))
                @auth
                    <button>Submit</button>
                @endauth
            @endif



        </form>
    </section>
</x-app-layout>
