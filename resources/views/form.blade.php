<x-front-end--layout>
    <div class="flex items-center justify-center h-[500px] bg-gray-100">
        <div class="w-auto h-auto rounded-[30px] p-[40px] bg-white shadow-md">
            <h1 class="text-2xl font-bold text-center">FORM</h1>
            <form class="space-y-6" action="/school/store" method="POST">
                @csrf

                <div class="flex gap-4">

                    <div class="space-y-1 grid grid-cols-2 gap-4">

                        <div>
                            <label for="name" class="text-sm font-semibold">Name</label>
                            <input type="text" id="name" placeholder="Name" required
                                class="w-full p-2 mt-1 border rounded-md focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300" />
                        </div>

                        <div>
                            <label for="email" class="text-sm font-semibold">Email</label>
                            <input type="email" id="email" placeholder="Email" required
                                class="w-full p-2 mt-1 border rounded-md focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300" />
                        </div>

                        <div>
                            <label for="tel_one" class="text-sm font-semibold">Tel_one</label>
                            <input type="tel_one" id="tel_one" placeholder="tel_one" required
                                class="w-full p-2 mt-1 border rounded-md focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300" />
                        </div>

                        <div>
                            <label for="tel_two" class="text-sm font-semibold">Tel_two</label>
                            <input type="tel_two" id="tel_two" placeholder="tel_two" required
                                class="w-full p-2 mt-1 border rounded-md focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300" />
                        </div>

                        <div>
                            <label for="address" class="text-sm font-semibold">Address</label>
                            <input type="address" id="address" placeholder="address" required
                                class="w-full p-2 mt-1 border rounded-md focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300" />
                        </div>

                        <div>
                            <label for="logo" class="text-sm font-semibold">Logo</label>
                            <input type="logo" id="logo" placeholder="logo" required
                                class="w-full p-2 mt-1 border rounded-md focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300" />
                        </div>

                    </div>

                    <div>
                        <label for="map" class="text-sm font-semibold">Map</label>
                        <div class="flex justify-center">
                            <textarea class="focus:outline-none border-[1px] border-[#c6c6c6] rounded-b-2xl" name="map" id="map"
                                cols="45" rows="10"></textarea>
                        </div>
                    </div>

                </div>

                <button type="submit"
                    class="w-full py-2 duration-300 font-semibold text-white bg-[#F4CA29] rounded-full hover:bg-[#000000] focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
                    SUBMIT
                </button>
            </form>
        </div>
    </div>
</x-front-end--layout>
