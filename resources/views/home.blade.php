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
     <div class="h-auto border-b-2 border-[#dfdfdf] grid grid-cols-2 px-[150px] py-[70px] gap-[50px]">

         {{-- left-paragraph start --}}
         <div>
             <div>
                 <img src="https://dmcdharan.com/images/1678445495.webp" alt="profile" width="150px">
                 <h1 class="text-[20px] font-semibold py-[20px]">Message From Principal</h1>
             </div>

             <div class="text-[16px] text-justify flex flex-col gap-[15px]">

                 <p>
                     - <span class="font-semibold">Dharan Multiple Campus (DMC), NAAST College and NAAST Secondary
                         School
                         (NAASTSS)</span> are
                     well-recognized and outstanding academic institutions. The main objective of the academy is to
                     offer maximum opportunities for the students to develop academic and social rankings. The academy
                     has a well-deserved reputation for academic excellence.
                 </p>

                 <p> We create a safe social and physical environment that helps our students learn and succeed.
                     Developing and maintaining relationships with parents means that we know each student as an
                     individual. We encourage all our students to develop high expectations about themselves, their work
                     and their behavior, which is an expression of values of Personal Best, Integrity, Respect, and
                     Responsibility.
                 </p>

                 <p>Over the past years, we have had consistent success, with all passed students either pursuing
                     further study or doing jobs in relevant organizations.
                 </p>

                 <p>Choosing the right academic institution can be challenging. To support you in making a
                     well-informed choice, we encourage you to visit our academy.
                 </p>

                 <button class="border-2 border-[#bbbbbb] py-[5px]">Read More</button>

             </div>
         </div>
         {{-- left-paragraph end --}}


         {{-- right-paragraph start --}}
         <div>
             <div>
                 <img src="https://dmcdharan.com/images/1678445593.webp" alt="profile" width="176px">
                 <h1 class="text-[20px] font-semibold py-[20px]">Message From Campus Chief</h1>
             </div>

             <div class="text-[16px] text-justify flex flex-col gap-[15px]">

                 <p>
                     - <span class="font-semibold">Dharan Multiple Campus (DMC), NAAST College and NAAST Secondary
                         School (NAASTSS)</span> are
                     well-recognized and outstanding academic institutions. The main objective of the academy is to
                     offer maximum opportunities for the students to develop academic and social rankings. The
                     academy
                     has a well-deserved reputation for academic excellence.
                 </p>

                 <p> We create a safe social and physical environment that helps our students learn and succeed.
                     Developing and maintaining relationships with parents means that we know each student as an
                     individual. We encourage all our students to develop high expectations about themselves, their
                     work
                     and their behavior, which is an expression of values of Personal Best, Integrity, Respect, and
                     Responsibility.
                 </p>

                 <p>Over the past years, we have had consistent success, with all passed students either pursuing
                     further study or doing jobs in relevant organizations.
                 </p>

                 <p>Choosing the right academic institution can be challenging. To support you in making a
                     well-informed choice, we encourage you to visit our academy.
                 </p>

                 <button class="border-2 border-[#bbbbbb] py-[5px]">Read More</button>

             </div>

         </div>
         {{-- right-paragraph end --}}

     </div>
     {{-- notices-from-staffs end --}}


     {{-- programs-section start --}}
     <div class="h-auto border-b-2 border-[#dfdfdf] bg-[#F8F9FA] px-[150px] py-[40px] justify-items-center">

        <h1 class="text-[#447C9D] font-semibold text-[40px] text-center pb-[30px]">Our Programs</h1>

        <div class="grid grid-cols-4 gap-6 justify-between items-center">
            <a class="duration-300 py-[15px] px-[50px] rounded-xl text-center bg-[#ebebeb] shadow-lg hover:shadow-xl hover:scale-[1.1] border-2 border-[#ffffff]" href="">NEB Programs</a>
            <a class="duration-300 py-[15px] px-[50px] rounded-xl text-center bg-[#ebebeb] shadow-lg hover:shadow-xl hover:scale-[1.1] border-2 border-[#ffffff]" href="">Bachelor Programs</a>
            <a class="duration-300 py-[15px] px-[50px] rounded-xl text-center bg-[#ebebeb] shadow-lg hover:shadow-xl hover:scale-[1.1] border-2 border-[#ffffff]" href="">CTEVT Programs</a>
            <a class="duration-300 py-[15px] px-[50px] rounded-xl text-center bg-[#ebebeb] shadow-lg hover:shadow-xl hover:scale-[1.1] border-2 border-[#ffffff]" href="">Research Cell</a>
        </div>

     </div>
     {{-- programs-section end --}}

 </x-front-end--layout>
