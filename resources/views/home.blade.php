 <x-front-end--layout>

     {{-- notification section start --}}
     <div id="notice" class="flex items-center px-[150px] py-[10px] border-b-2 border-[#F3F3F3]">
         <p>{{ $n }}:</p>

         <marquee onmouseover="this.stop()" onmouseleave="this.start()">
             <p class="flex items-center">
                 <i class="ri-megaphone-line"></i>Admission Open
                 <i class="ri-megaphone-line"></i>Admission Open for Btech
                 <i class="ri-megaphone-line"></i>Admission Open
                 <i class="ri-megaphone-line"></i>Best of luck
                 <i class="ri-megaphone-line"></i>यस धरान बहुमुखी क्याम्पसमा शैक्षिक सत्र २०७८/८० का लागि बिद्देतु
                 हु.ड
                 मा
                 पहिलो बर्षका लागि केही सिट रिक्त रहेकाे. बिटेक प्रथम सालको प्रवेश परीक्षा उत्रिण जो कोहीले पनि
                 सम्पर्क
                 गर्नूहोला।
             </p>
         </marquee>
     </div>
     {{-- notification section end --}}

     {{-- hero section start --}}
     <div id="hero1" class="h-[500px] w-[100%]"></div>
     {{-- hero section end --}}

     {{-- notices-from-staffs start  --}}
     <div class="h-auto grid grid-cols-2 px-[150px] py-[30px]">



     </div>
     {{-- notices-from-staffs end --}}

 </x-front-end--layout>
