<x-app-layout>

    <div class="container mx-auto mt-40">
        <div class="space-y-10 divide-y divide-gray-900/10">

            <div class="grid grid-cols-1 gap-x-8 gap-y-8 md:grid-cols-3">
                <div class="px-4 sm:px-0">
                    <h2 class="text-base font-semibold leading-7 text-gray-900">
                        Update booking
                    </h2>
                    <p class="mt-1 text-sm leading-6 text-gray-600">
                        Update the booking's details.
                    </p>
                </div>
                <form method="post"
                     @if($booking->id)
                    action="{{ route('booking.update', $booking->id) }}"
                    @else
                    action="{{ route('booking.store') }}"
                    @endif
                    class="bg-white shadow-sm ring-1 ring-gray-900/5 sm:rounded-xl md:col-span-2">

                    @csrf
                     @if ($booking->id)
                        @method('PUT')
                    @endif

                    <div class="px-4 py-6 sm:p-8">
                        <div class="grid max-w-2xl grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">


                            <div class="col-span-full">
                                <label for="nic" class="block text-sm font-medium leading-6 text-gray-900">
                                    National Identity Card Number
                                </label>
                                <div class="mt-2">
                                    <input id="nic" name="nic" rows="3"


                                        value="{{ old('nic', $booking->nic) }}"
                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                                </div>
                                @error('name')
                                    <p class="mt-3 text-sm leading-6 text-red-600">
                                        {{ $message }}
                                    </p>
                                @enderror

                            </div>


                            <div class="col-span-full">
                                <label for="phone_number" class="block text-sm font-medium leading-6 text-gray-900">
                                    Phone Number
                                </label>
                                <div class="mt-2">
                                    <input id="phone_number" name="phone_number"  rows="3"
                                        value="{{ old('phone_number', $booking->phone_number) }}"
                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                                </div>
                            </div>

                            <div class="col-span-full">
                                <label for="type" class="block text-sm font-medium leading-6 text-gray-900">
                                    Type
                                </label>
                                <div class="mt-2">
                                    <input id="type" name="type"  rows="3"
                                        value="{{ old('type', $booking->type) }}"
                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                                </div>
                            </div>

                            <div class="col-span-full">
                                <label for="payment" class="block text-sm font-medium leading-6 text-gray-900">
                                    Payment Type
                                </label>
                                <div class="mt-2">
                                    <input id="payment" name="payment"  rows="3"
                                        value="{{ old('payment', $booking->payment) }}"
                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                                </div>
                            </div>

                            <div class="col-span-full">
                                <label for="card_No" class="block text-sm font-medium leading-6 text-gray-900">
                                    Card Number
                                </label>
                                <div class="mt-2">
                                    <input id="card_No" name="card_No"  rows="3"
                                        value="{{ old('card_No', $booking->card_No) }}"
                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                                </div>
                            </div>

                            <div class="col-span-full">
                                <label for="sec_No" class="block text-sm font-medium leading-6 text-gray-900">
                                    Security Number
                                </label>
                                <div class="mt-2">
                                    <input id="sec_No" name="sec_No"  rows="3"
                                        value="{{ old('sec_No', $booking->sec_No) }}"
                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                                </div>
                            </div>

                            <div class="col-span-full">
                                <label for="email" class="block text-sm font-medium leading-6 text-gray-900">
                                    Service
                                </label>
                                <div class="mt-2">
                                    <input id="service" name="service" rows="3"
                                        value="{{ old('service', $booking->service) }}"
                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                                </div>
                            </div>
                            <div class="col-span-full">
                                <label for="address" class="block text-sm font-medium leading-6 text-gray-900">
                                    Address
                                </label>
                                <div class="mt-2">
                                    <input id="address" name="address" rows="3"
                                        value="{{ old('address', $booking->address) }}"
                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                                </div>
                            </div>

                            <div class="col-span-full">
                                <label for="plate" class="block text-sm font-medium leading-6 text-gray-900">
                                    Plate Number
                                </label>
                                <div class="mt-2">
                                    <input id="plate" name="plate"  rows="3"
                                        value="{{ old('plate', $booking->plate) }}"
                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                                </div>
                            </div>

                            <div class="col-span-full">
                                <label for="chasis" class="block text-sm font-medium leading-6 text-gray-900">
                                    Chasis Number
                                </label>
                                <div class="mt-2">
                                    <input id="chasis" name="chasis"  rows="3"
                                        value="{{ old('chasis', $booking->chasis) }}"
                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                                </div>
                            </div>

                            <div class="col-span-full">
                                <label for="discount" class="block text-sm font-medium leading-6 text-gray-900">
                                    Discount Number
                                </label>
                                <div class="mt-2">
                                    <input id="discount" name="discount"  rows="3"
                                        value="{{ old('discount', $booking->discount) }}"
                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center justify-end gap-x-6 border-t border-gray-900/10 px-4 py-4 sm:px-8">
                        <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
                        <button type="submit"
                            class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</x-app-layout>
