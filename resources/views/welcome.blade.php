<htmal>
    <head>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body class="font-sans">
        <header class="bg-cover bg-no-repeat bg-bottom pt-10 pb-30 px-20 bg-usgr-image xl:h-750 xl:py-0 relative">
            <!-- menu button -->
            <div class="xl:hidden flex items-center justify-end w-320 mx-auto pr-10">
                <button class="mobile-menu-button">
                    <svg class="w-24 h-24 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                      </svg>
                </button>
            </div>
            <div class="-mt-24 xl:w-1180 2xl:w-1360 xl:mx-auto xl:mt-0">
                <!-- mobile menu -->
                <div class="hidden mobile-menu bg-white text-blue-cu xl:hidden absolute min-w-9/10 top-0 right-0 h-screen shadow-2xl">
                    <div class="flex justify-between bg-grey-menu">
                        <button class="p-10 mobile-menu-close">
                            <svg class="w-24 h-24" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                              </svg>
                        </button>
                        <img src="/images/lang.svg" alt="" class="p-12">
                    </div>
                    <div class="flex justify-center mt-11">
                        <img src="/images/user2.svg" alt="Avatar" class="mr-5">
                        <h5 class="font-bold text-p-feat"><a href="#" class="hover:text-red-cu">Εγγραφή / Σύνδεση</a></h5>
                    </div>
                    <hr class="w-full border border-line mt-10">
                    <div class="py-20 pr-10 pl-20">
                        <ul class="">
                            <a href="#" class="hover:text-red-cu flex justify-between mobile-submenu-button"><li class="mb-20 text-p-feat font-bold">Η ΟΜΟΣΠΟΝΔΙΑ</li><img src="/images/arrow_right.svg" class="w-20 h-20"></a>
                            <a href="#" class="hover:text-red-cu flex justify-between"><li class="mb-20 text-p-feat font-bold">ΑΡΚΑΔΩΝ ΕΡΓΑ</li><img src="/images/arrow_right.svg" class="w-20 h-20"></a>
                            <a href="#" class="hover:text-red-cu flex justify-between"><li class="mb-20 text-p-feat font-bold">ΕΠΩΝΥΜΟΙ ΑΡΚΑΔΕΣ</li><img src="/images/arrow_right.svg" class="w-20 h-20"></a>
                            <a href="#" class="hover:text-red-cu flex justify-between"><li class="mb-20 text-p-feat font-bold">ΝΕΑ - ΕΝΗΜΕΡΩΣΗ</li><img src="/images/arrow_right.svg" class="w-20 h-20"></a>
                            <a href="#" class="hover:text-red-cu flex justify-between"><li class="mb-20 text-p-feat font-bold">ΕΠΙΣΚΕΨΗ ΣΤΗΝ ΑΡΚΑΔΙΑ</li><img src="/images/arrow_right.svg" class="w-20 h-20"></a>
                            <a href="#" class="hover:text-red-cu flex justify-between"><li class="text-p-feat font-bold">ΑΝΑΖΗΤΗΣΕΙΣ ΣΤΗΝ ΑΡΚΑΔΙΑ</li><img src="/images/arrow_right.svg" class="w-20 h-20"></a>
                        </ul>
                    </div>
                </div>
                <!-- mobile submenu -->
                <div class="hidden mobile-submenu bg-white text-blue-cu xl:hidden absolute min-w-9/10 top-0 right-0 h-screen shadow-2xl">
                    <div class="bg-grey-menu">
                        <button class="p-10 pl-20 mobile-submenu-close flex items-center">
                            <img src="/images/arrow_left.svg"><h3 class="text-p-feat">Επιστροφή</h3>
                        </button>
                    </div>
                    <div class="py-20 pr-10 pl-30">
                        <ul class="">
                            <a href="#" class="hover:text-red-cu flex justify-between"><li class="mb-20 text-p-feat font-bold">Ιστορία</li></a>
                            <a href="#" class="hover:text-red-cu flex justify-between"><li class="mb-20 text-p-feat font-bold">Διοικητικό Συμβούλιο</li></a>
                            <a href="#" class="hover:text-red-cu flex justify-between"><li class="mb-20 text-p-feat font-bold">Πρόεδρος - Βιογραφικό Σημείωμα</li></a>
                            <a href="#" class="hover:text-red-cu flex justify-between"><li class="mb-20 text-p-feat font-bold">Μήνυμα Προέδρου</li></a>
                            <a href="#" class="hover:text-red-cu flex justify-between"><li class="mb-20 text-p-feat font-bold">Districts</li></a>
                            <a href="#" class="hover:text-red-cu flex justify-between"><li class="mb-20 text-p-feat font-bold">Διατελέσαντες Προέδροι</li></a>
                            <a href="#" class="hover:text-red-cu flex justify-between"><li class="mb-20 text-p-feat font-bold">Αποστολή - Αξίες</li></a>
                            <a href="#" class="hover:text-red-cu flex justify-between"><li class="mb-20 text-p-feat font-bold">Πορεία - Εξέλιξη</li></a>
                            <a href="#" class="hover:text-red-cu flex justify-between"><li class="mb-20 text-p-feat font-bold">Ο Έλληνας πρέσβης στην Ουάσιγκτον</li></a>
                            <a href="#" class="hover:text-red-cu flex justify-between"><li class="mb-20 text-p-feat font-bold">Ο Πρέσβης ΗΠΑ στην Αθήνα</li></a>
                            <a href="#" class="hover:text-red-cu flex justify-between"><li class="mb-20 text-p-feat font-bold">Ο Οικουμενικός Πατριάρχης</li></a>
                            <a href="#" class="hover:text-red-cu flex justify-between"><li class="text-p-feat font-bold">Ο Αρχιεπίσκοπος Αμερικής</li></a>
                        </ul>
                    </div>
                </div>
                <!-- topbar -->
                <div class="xl:h-70 xl:flex">
                    <!-- topmenu -->
                    <div class="flex justify-center xl:w-978 2xl:w-1078 xl:h-44 xl:mt-14 xl:mr-37 xl:mb-12 xl:ml-245 2xl:ml-auto xl:justify-between">
                        <div class="xl:flex xl:w-204">
                            <ul class="flex xl:gap-20 xl:-ml-11">
                                <li class="mt-40 mr-22 xl:m-0 xl:p-0"><h5 class="text-arc-sm text-white text-right font-bold tracking-wide xl:text-h6-sec2">ΑΡΚΑΔΙΑ</h5><h4 class="flex text-time-sm text-white xl:text-h4-top xl:font-serif"><img src="./images/clock.svg" class="w-16 mr-5 xl:w-20">13:28</h4></li>
                                <li class="xl:hidden"><a href="/"><img src="/images/logo.svg" alt="Logo" class="w-100"></a></li>
                                <li class="mt-40 ml-17 xl:m-0 xl:p-0"><h5 class="text-arc-sm text-white text-right font-bold tracking-wide xl:text-h6-sec2">ΚΑΤΑΙΓΙΔΑ</h5><h4 class="flex text-time-sm text-white xl:text-h4-top xl:font-serif"><img src="./images/weather.svg" class="w-16 mr-5 xl:w-20">12°C<a class="text-time-sm opacity-40 xl:text-h4-top">°F</a></h4></li>
                            </ul>
                        </div>
                        <div class="hidden xl:flex">
                            <ul class="flex mr-10 items-center">
                                <li><img src="/images/user.svg" alt="Avatar" class="mr-5">
                                <li class="mr-44"><h5 class="font-bold text-p-feat text-white"><a href="#" class="hover:text-red-cu">Εγγραφή / Σύνδεση</a></h5></li>
                                <li><img src="/images/lang.svg" alt="Language" class="lang"></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <nav class="hidden xl:block -ml-11 h-60 bg-white rounded-md relative 2xl:w-1360">
                    <a href="/" class="block absolute border-10 rounded-full border-red-drk left-50 top-1/2 transform -translate-y-1/2"><img src="/images/logo.svg" alt="Logo" class="block w-160 h-160 2xl:w-180 2xl:h-180"></a>
                    
                    <ul class="flex py-0 pr-20 pl-250 2xl:pr-39 2xl:pl-283 items-center justify-between h-60 text-p-feat font-bold text-blue-cu">
                        <li class="relative group"><a href="#" class="hover:text-red-cu">Η ΟΜΟΣΠΟΝΔΙΑ</a>
                            <div class="hidden group-hover:block absolute -left-26 2xl:-left-38">
                                <ul class="mt-30 bg-white pt-16 pr-0 pb-23 pl-20 w-275 h-auto rounded-md">
                                    <li class="mb-8"><a href="#" class="hover:text-red-cu">Ιστορία</a></li>
                                    <li class="mb-8"><a href="#" class="hover:text-red-cu">Διοικητικό Συμβούλιο</a></li>
                                    <li class="mb-8"><a href="#" class="hover:text-red-cu">Πρόεδρος - Βιογραφικό Σημείωμα</a></li>
                                    <li class="mb-8"><a href="#" class="hover:text-red-cu">Μήνυμα Προέδρου</a></li>
                                    <li class="mb-8"><a href="#" class="hover:text-red-cu">Districts</a></li>
                                    <li class="mb-8"><a href="#" class="hover:text-red-cu">Διατελεσαντες Προέδροι</a></li>
                                    <li class="mb-8"><a href="#" class="hover:text-red-cu">Αποστολή - Αξίες</a></li>
                                    <li class="mb-8"><a href="#" class="hover:text-red-cu">Πορεία - Εξέλιξη</a></li>
                                    <li class="mb-8"><a href="#" class="hover:text-red-cu">Ο Έλληνας πρέσβης στην Ουάσιγκτον</a></li>
                                    <li class="mb-8"><a href="#" class="hover:text-red-cu">Ο Πρέσβης ΗΠΑ στην Αθήνα</a></li>
                                    <li class="mb-8"><a href="#" class="hover:text-red-cu">Ο Οικουμενικός Πατριάρχης</a></li>
                                    <li class=""><a href="#" class="hover:text-red-cu">Ο Αρχιεπίσκοπος Αμερικής</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="#" class="hover:text-red-cu">ΑΡΚΑΔΩΝ ΕΡΓΑ</a></li>
                        <li><a href="#" class="hover:text-red-cu">ΕΠΩΝΥΜΟΙ ΑΡΚΑΔΕΣ</a></li>
                        <li><a href="#" class="hover:text-red-cu">ΝΕΑ - ΕΝΗΜΕΡΩΣΗ</a></li>
                        <li><a href="#" class="hover:text-red-cu">ΕΠΙΣΚΕΨΗ ΣΤΗΝ ΑΡΚΑΔΙΑ</a></li>
                        <li><a href="#" class="hover:text-red-cu">ΑΝΑΖΗΤΗΣΕΙΣ ΣΤΗΝ ΑΡΚΑΔΙΑ</a></li>
                        <li><a href="#"><img src="/images/mail.svg" class="mail"></a></li>
                    </ul>
                </nav>
                <div class="flex justify-center mt-10 xl:justify-start xl:mt-20 xl:ml-235">
                    <a><img src="/images/paf.svg" alt="PAF"></a>
                </div>
                <!-- Featured -->
                <div class="flex justify-center rounded-full w-284 h-284 bg-feat-img bg-no-repeat bg-cover mx-auto mt-30 border-2 shadow-2xl xl:w-462 xl:h-462 xl:border-6">
                    <div class="text-center">
                        <img src="/images/greek.svg" alt="Greek" class="mx-auto w-18 pt-18 xl:w-24 xl:pt-38">
                        <h3 class="font-bold text-white text-h3-feat mt-4 xl:mt-10 xl:text-h6-sec2">ΚΑΛΩΣ ΗΛΘΑΤΕ</h3>
                        <h2 class="font-bold text-white text-h2-feat mt-15 xl:mt-34 xl:text-h4-sec">Η αποστολή μας</h2>
                        <p class="hidden xl:block mt-35 text-white text-p-sec w-385">Ο Παναρκαδικής Ομοσπονδίας Αμερικής είναι μια πανεθνική μη κερδοσκοπικού αδελφό<br>ελληνικό-αμερικανική οργάνωση τα μέλη της οποίας κατεβαίνουν από την περιοχή της Αρκαδίας στην Πελοπόννησο, στη νότια Ελλάδα …</p>
                        <p class="text-white text-p-feat mt-16 w-232 xl:hidden">Ο Παναρκαδικής Ομοσπονδίας Αμερικής είναι μια πανεθνική μη κερδοσκοπικού αδελφό<br> ελληνικό-αμερικανική οργάνωση …</p>
                        <div class="inline-flex justify-center border rounded w-140 h-40 mt-14 xl:mt-34 xl:w-202 xl:h-52">
                            <a href="#" class="place-self-center text-p-feat text-white xl:font-bold">ΠΕΡΙΣΣΟΤΕΡΑ</a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <section>
            <div class="bg-white h-auto text-center w-auto pt-30 pl-20 pr-25 xl:bg-sec-img xl:bg-no-repeat xl:bg-cover xl:bg-top xl:h-744">
                <img src="/images/tree.svg" alt="Roots" class="w-219 h-116 mx-auto">
                <h2 class="mt-30 text-red-cu text-h2-sec font-bold xl:text-h2-sec-xl">Μετριόμαστε, γιατί μετράμε!</h2>
                <div class="xl:flex xl:text-left xl:gap-63 xl:justify-center xl:mt-40">
                    <div class="mt-14 xl:w-461 xl:h-245 xl:mt-0">
                        <h3 class="text-h2-feat font-bold text-blue-cu">Γενική απογραφή  των αποδήμων Αρκάδων στις ΗΠΑ και επαναπατρισθέντων από τις ΗΠΑ</h3>
                        <p class="mt-20 text-p-sec text-grey-cu">Η Παναρκαδική Ομοσπονδία Αμερικής πραγματοποιεί απογραφή των Αρκάδων που διαμένουν και εργάζονται στις ΗΠΑ, (ανεξαρτήτως υπηκότητας).</p>
                        <p class="font-bold text-p-sec text-grey-cu mt-10">Το αποτύπωμα της Αρκαδικής γης μας συνδέει!</p>
                        <p class="text-p-sec text-grey-cu mt-15">Όση χιλιομετρική απόσταση και αν μας χωρίζει, όσες γενιές και να έχουμε...ψηλώσει πέρα απο τις ρίζες μας, η Αρκαδία, μας ενώνει!</p>
                    </div>
                    <div class="hidden xl:block xl:w-475 xl:h-235">
                        <h3 class="text-h2-feat font-bold text-blue-cu mb-40">Απογραφόμαστε...</h3>
                            <ul class="">
                                <li class="flex mb-8"><img src="/images/list.svg"><p>Για να γνωρίσουμε ο ένας τον άλλο.</p></li>
                                <li class="flex mb-8"><img src="/images/list.svg" class="mt-2"><p class="mt-2">Για να αντλήσουμε δύναμη απο  τις ρίζες μας και την καταγωγή μας.</p></li>
                                <li class="flex mb-8"><img src="/images/list.svg" class="-mt-22"><p>Για να είμαστε χρήσιμοι και να  παρεμβαίνουμε δημιουργικά για τις ΗΠΑ την Ελλάδα και την Αρκαδία.</p></li>
                                <li class="flex mb-8"><img src="/images/list.svg"><p>Για να υλοποιήσουμε τα σχέδια και τα οραματά μας.</p></li>
                                <li class="flex"><img src="/images/list.svg"><p>Για να είμαστε ισχυροί.</p></li>
                            </ul>
                    </div>
                </div>
                <h5 class="font-bold text-h2-feat text-red-cu mt-30">ΤΕΛΕΤΗ ΕΝΑΡΞΗΣ</h5>
                <h4 class="font-bold text-h4-sec text-blue-cu mt-9 xl:text-h4-sec-xl">Παρασκευή 20 Απριλίου 2108</h4>
                <h5 class="font-bold text-h2-feat text-blue-cu mt-12 mb-38">ΝΕΑ ΥΟΡΚΗ</h5>
            </div>
        </section>
        <section2>
            <div class="h-592 text-white bg-blue-cu w-auto px-20 pt-30 xl:h-650">
                <img src="/images/greek.svg" alt="Greek" class="mx-auto">
                <h6 class="text-center mt-10 text-h6-sec2 font-bold">ΕΡΓΑ & ΔΡΑΣΤΗΡΙΟΤΗΤΕΣ</h6>
                <div class="flex mt-30 flex-nowrap overflow-x-auto xl:justify-center">
                    <div class="w-260 mr-20 flex-none xl:w-300">
                        <img src="/images/nosokomio.png" alt="Hospital">
                        <h2 class="mt-20 font-bold text-h2-feat xl:text-h4-sec">Γενικού Παναρκαδικό Νοσοκομείο Τρίπολης</h2>
                        <p class="mt-12 text-p-sec pr-26 xl:p-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolor.</p>
                        <ul class="flex ml-5 xl:mt-16">
                            <li><img src="/images/dash.svg"></li>
                            <li class="text-p-feat font-bold"><a href="#">ΠΕΡΙΣΣΟΤΕΡΑ</a></li>
                        </ul>
                    </div>
                    <div class="w-260 mr-20 flex-none xl:w-300">
                        <img src="/images/oikismos.png" alt="Village">
                        <h2 class="mt-20 font-bold text-h2-feat xl:text-h4-sec">Ο παραδοσιακός οικισμός του Λεωνιδίου</h2>
                        <p class="mt-12 text-p-sec pr-26 xl:p-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolor.</p>
                        <ul class="flex ml-5 xl:mt-16">
                            <li><img src="/images/dash.svg"></li>
                            <li class="text-p-feat font-bold"><a href="#">ΠΕΡΙΣΣΟΤΕΡΑ</a></li>
                        </ul>
                    </div>
                    <div class="w-260 mr-20 flex-none xl:w-300">
                        <img src="/images/parnonas.png" alt="Village">
                        <h2 class="mt-20 font-bold text-h2-feat xl:text-h4-sec">Κυνουρία, Εκεί που δεσπόζει ο Πάρνωνας</h2>
                        <p class="mt-12 text-p-sec pr-26 xl:p-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolor.</p>
                        <ul class="flex ml-5 xl:mt-16">
                            <li><img src="/images/dash.svg"></li>
                            <li class="text-p-feat font-bold"><a href="#">ΠΕΡΙΣΣΟΤΕΡΑ</a></li>
                        </ul>
                    </div>
                    <div class="w-260 mr-20 flex-none xl:w-300">
                        <img src="/images/parka.png" alt="Village">
                        <h2 class="mt-20 font-bold text-h2-feat xl:text-h4-sec">Οι ελληνικές πόλεις με τα καλύτερα πάρκα!</h2>
                        <p class="mt-12 text-p-sec pr-26 xl:p-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolor.</p>
                        <ul class="flex ml-5 xl:mt-16">
                            <li><img src="/images/dash.svg"></li>
                            <li class="text-p-feat font-bold"><a href="#">ΠΕΡΙΣΣΟΤΕΡΑ</a></li>
                        </ul>
                    </div>
                </div>
                <a href="#" class="flex justify-center border rounded w-280 h-50 mt-30 mx-auto xl:w-200 xl:mt-28 xl:mb-40"><h1 class="place-self-center text-p-feat font-bold">ΠΕΡΙΣΣΟΤΕΡΑ</h1></a>
            </div>
        </section2>
        <section3 id="contact">
            <div class="w-auto lg:w-740 lg:mx-auto">
                <div class="h-auto bg-white flex items-center justify-center">
                    <div class="w-full">
                        <h3 class="text-p-feat text-blue-cu font-bold text-center pt-32 mb-34 xl:mb-20">ΕΠΙΚΟΙΝΩΝΙΑ</h3>
                        <hr class="w-full border border-line hidden xl:block xl:mb-16">
                        @if(count($errors) > 0)
                            <div class="text-center">
                                <p class="text-red-500">* Όλα τα πεδία είναι υποχρεωτικά!</p>
                            </div>
                        @endif
                        <div class="flex justify-center items-center px-20">
                            <form class="w-full" method="post" action="{{ url('/#contact') }}">
                                {{ csrf_field() }}

                                <label for="fname" class="text-label text-grey-cu">Ονοματεπώνυμο</label><br>
                                <input type="text" id="fname" name="fname" value="{{ old('fname') }}" class="w-full h-46 border border-grey-lt py-12 pr-20 pl-31 rounded mt-5 mb-15"><br>
                                <label for="lname" class="text-label text-grey-cu">Τηλέφωνο</label><br>
                                <input type="text" id="phone" name="phone" value="{{ old('phone') }}" class="w-full h-46 border border-grey-lt py-12 pr-20 pl-31 rounded mt-5 mb-15 bg-phone bg-no-repeat bg-formico"><br>
                                <label for="mail" class="text-label text-grey-cu">Email</label><br>
                                <input type="text" id="mail" name="mail" value="{{ old('mail') }}" class="w-full h-46 border border-grey-lt py-12 pr-20 pl-31 rounded mt-5 mb-15 bg-mail bg-no-repeat bg-formico"><br>
                                <label for="memo" class="text-label text-grey-cu">Μήνυμα</label><br>
                                <textarea type="text" id="memo" name="memo" value="{{ old('memo') }}" class="w-full h-119 border border-grey-lt py-12 pr-20 pl-31 rounded mt-5 mb-30 resize-none"></textarea>
                                <hr class="w-full border border-line">
                                <div class="flex justify-center items-center border border-red-700 bg-red-700 w-132 h-52 rounded mt-32 mb-61 ml-auto xl:w-242 xl:h-52">
                                    <input type="submit" name="send" value="ΑΠΟΣΤΟΛΗ" class="bg-red-700 text-white font-bold text-p-feat cursor-pointer xl:mx-auto"><span class="bg-send-img bg-no-repeat w-24 h-24 -mr-10 xl:mr-10"></span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>     
        </section3>
        <footer>
            <div class="w-auto relative">
                <button class="flex justify-center">
                    <a class="toTop absolute top-548 right-10 xl:-top-22 md:right-100"><img src="/images/top.svg" alt="Top"></a>
                </button>
                <div class="h-auto bg-blue-cu flex items-center justify-center">
                    <div class="pt-30 w-full">
                        <a><img src="/images/logo.svg" alt="Logo" class="w-140 mx-auto xl:w-180"></a>
                        <a id="paf2"><img src="/images/paf.svg" alt="PAF" class="mx-auto mt-20"></a>
                        <div class="flex justify-center mt-30 mx-20 gap-20 xl:mt-27">
                            <a href="#"><img src="/images/fb.svg" alt="Facebook"></a>
                            <a href="#"><img src="/images/tweet.svg" alt="Twitter"></a>
                            <a href="#"><img src="/images/linked.svg" alt="Linkedin"></a>
                            <a href="#"><img src="/images/insta.svg" alt="Instagram"></a>
                            <a href="#"><img src="/images/yt.svg" alt="Youtube"></a>
                        </div>
                        <ul class="mt-30 text-center text-white text-p-feat font-bold xl:flex xl:justify-between xl:w-1101 xl:h-30 xl:mx-auto">
                            <li class="mb-20"><a href="#" class="hover:text-red-cu">Η ΟΜΟΣΠΟΝΔΙΑ</a></li>
                            <li class="mb-20"><a href="#" class="hover:text-red-cu">ΑΡΚΑΔΩΝ ΕΡΓΑ</a></li>
                            <li class="mb-20"><a href="#" class="hover:text-red-cu">ΕΠΩΝΥΜΟΙ ΑΡΚΑΔΕΣ</a></li>
                            <li class="mb-20"><a href="#" class="hover:text-red-cu">ΝΕΑ - ΕΝΗΜΕΡΩΣΗ</a></li>
                            <li class="mb-20"><a href="#" class="hover:text-red-cu">ΕΠΙΣΚΕΨΗ ΣΤΗΝ ΑΡΚΑΔΙΑ</a></li>
                            <li class="mb-20"><a href="#" class="hover:text-red-cu">ΑΝΑΖΗΤΗΣΕΙΣ ΣΤΗΝ ΑΡΚΑΔΙΑ</a></li>
                            <li><a href="#" class="hover:text-red-cu">ΕΠΙΚΟΙΝΩΝΙΑ</a></li>
                        </ul>
                        <h5 class="mt-30 mb-23 text-p-feat text-white opacity-50 text-center xl:mt-8 xl:mb-14">©2018 Pan Arcadian Federation of America</h5>
                    </div>
                </div>
            </div>
        </footer>
        <script>
            const btn = document.querySelector("button.mobile-menu-button");
            const btn2 = document.querySelector("button.mobile-menu-close");
            const menu = document.querySelector(".mobile-menu");
            const btn3 = document.querySelector(".mobile-submenu-button");
            const btn4 = document.querySelector("button.mobile-submenu-close");
            const menu2 = document.querySelector(".mobile-submenu");
            const toTop = document.querySelector(".toTop");

            btn.addEventListener("click", () => {
                menu.classList.toggle("hidden");
            });

            btn2.addEventListener("click", () => {
                menu.classList.add("hidden");
            });

            btn3.addEventListener("click", () => {
                menu2.classList.toggle("hidden");
            })

            btn4.addEventListener("click", () => {
                menu2.classList.add("hidden");
            })

            toTop.addEventListener("click", () => {
                window.scroll({top: 0, left: 0, behavior: "smooth"});
            })
        </script>
    </body>
</htmal>
