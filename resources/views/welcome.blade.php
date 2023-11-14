<x-guest-layout>
    <!-- Main Hero Content -->
    <div class="container max-w-lg px-4 py-32 mx-auto text-left bg-center bg-no-repeat bg-cover md:max-w-none md:text-center"
        style="background-image: url('https://cdn.pixabay.com/photo/2020/05/24/01/50/barber-shop-5212042_1280.jpg')" alt="Background image">
        <h1
            class="font-mono text-3xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500 md:text-center sm:leading-none lg:text-5xl">
            <span class="inline md:block">Witamy w salonie urody PSY(chic)</span>
        </h1>
        <div class="font-mono text-3xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500 md:text-center sm:leading-none lg:text-3xl">  
            Odkryj najlepszy salon urody w okolicy i zarezerwuj wizytę online!   
        </div>
        <div class="flex flex-col items-center mt-12 text-center">
            <span class="relative inline-flex w-full md:w-auto">
                <a href="{{ route('reservations.step.one') }}" type="button"
                    class="inline-flex items-center justify-center px-6 py-2 text-base font-bold leading-6 text-white bg-green-600 rounded-full lg:w-full md:w-auto hover:bg-green-500 focus:outline-none">
                    Zarezerwuj wizytę
                </a>
        </div>
    </div>
    <!-- End Main Hero Content -->
    <section id="section1" class="px-2 py-32 bg-slate-900 md:px-0">
        <div class="container items-center max-w-6xl px-8 mx-auto xl:px-5">
            <div class="flex flex-wrap items-center sm:-mx-3">
                <div class="w-full md:w-1/2 md:px-3">
                    <div class="w-full pb-6 space-y-4 sm:max-w-md lg:max-w-lg lg:space-y-4 lg:pr-0 md:pb-0">
                        <h2 class="mb-4 text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500">
                        O NAS
                        </h2>
                        <p class="mx-auto text-base text-gray-300 sm:max-w-md lg:text-xl md:max-w-3xl">
                        Jesteśmy salonem, który powstał, aby służyć ludziom.🥰
                        W pracy korzystamy z najlepszych kosmetyków. Nasi pracownicy są profesjonalistami w każdym calu.
                        Każdy pracownik posiada wieloletnie doświadczenie.
                        Najważniejsze dla nas jest dobro naszych klientów.
                        Zapraszamy serdecznie.😎
                        </p>
                        <!-- <div class="relative flex">
                            <a href="#_"
                                class="flex items-center w-full px-6 py-3 mb-3 text-lg text-white bg-green-600 rounded-md sm:mb-0 hover:bg-green-700 sm:w-auto">
                                Read More
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-1" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                    <polyline points="12 5 19 12 12 19"></polyline>
                                </svg>
                            </a>
                        </div> -->
                    </div>
                </div>
                <div class="w-full md:w-1/2">
                    <div class="w-full h-auto overflow-hidden rounded-md shadow-xl sm:rounded-xl">
                        <img src="https://cdn.pixabay.com/photo/2023/09/15/04/24/machine-8254053_1280.jpg" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="section2" class="py-20 bg-slate-800">
        <div class="container items-center max-w-6xl px-4 px-10 mx-auto sm:px-20 md:px-32 lg:px-16">
            <div class="flex flex-wrap items-center -mx-3">
                <div class="order-1 w-full px-3 lg:w-1/2 lg:order-0">
                    <div class="w-full lg:max-w-md">
                        <h2 class="mb-4 text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500">
                            UDOGODNIENIA</h2>
                        <p class="mb-4 font-medium tracking-tight text-base text-gray-300 xl:mb-6">
                            Dla naszym klientów oferujemy darmowy, niestrzeżony parking w niewielkiej odległości od budynku.
                            Płatności zbliżeniowe telefonem, smartwatchem oraz oczywiście kartami kredytowymi.
                            Darmowy dostęp do sieci Wifi dostępnej w miejscu strzyżenia.
                        </p>
                        <ul>
                            <li class="flex items-center py-2 space-x-4 xl:py-3">
                                <svg class="w-8 h-8 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M17.778 1.65a2.35 2.35 0 0 1 2.325 1.898l.025.16.51 4.093 2.4-.533a.75.75 0 0 1 .423 1.435l-.098.03-2.184.484.907 1.365c.142.21.229.45.255.704l.009.154v9.36a1.55 1.55 0 0 1-1.409 1.544l-.141.006h-1.6a1.55 1.55 0 0 1-1.544-1.409l-.006-.141v-1.65H6.35v1.65a1.55 1.55 0 0 1-1.409 1.544l-.141.006H3.2a1.55 1.55 0 0 1-1.544-1.409L1.65 20.8v-9.366a1.55 1.55 0 0 1 .184-.721l.078-.128.908-1.368-2.183-.485a.75.75 0 0 1 .225-1.48l.1.016 2.406.535.504-4.097A2.35 2.35 0 0 1 6.06 1.654l.16-.004h11.557zM4.85 19.15h-1.7v1.65c0 .018.01.034.025.043l.025.007h1.6a.05.05 0 0 0 .043-.025l.007-.025v-1.65zm16 0h-1.7v1.65c0 .018.01.034.025.043l.025.007h1.6a.05.05 0 0 0 .043-.025l.007-.025v-1.65zm-1.282-9.6H4.428l-.024.006-.02.02-1.226 1.842-.008.022v6.21h17.7v-6.211l-.01-.024-1.226-1.843a.052.052 0 0 0-.046-.022zM7.217 12a2.217 2.217 0 1 1 0 4.433 2.217 2.217 0 0 1 0-4.433zm9.333 0a2.217 2.217 0 1 1 0 4.433 2.217 2.217 0 0 1 0-4.433zm-9.333 1.5a.717.717 0 1 0 0 1.433.717.717 0 0 0 0-1.433zm9.333 0a.717.717 0 1 0 0 1.433.717.717 0 0 0 0-1.433zm1.234-10.35H6.21a.85.85 0 0 0-.83.637l-.02.104-.503 4.103a.05.05 0 0 0 .012.04l.016.012.019.004h14.197a.05.05 0 0 0 .038-.017l.01-.018.003-.018-.512-4.103a.852.852 0 0 0-.856-.744z">
                                    </path>
                                </svg>
                                <span class="font-medium text-gray-400">Parking dla klientów</span>
                            </li>
                            <li class="flex items-center py-2 space-x-4 xl:py-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-gray-500" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span class="font-medium text-gray-400">Łatwe i szybkie płatności</span>
                            </li>
                            <li class="flex items-center py-2 space-x-4 xl:py-3">
                                <svg class="w-8 h-8 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path transform="translate(-1 1) translate(0 .15) translate(.8 .8)"
                                        d="M12.2 14.25c1.298 0 2.35 1.052 2.35 2.35s-1.052 2.35-2.35 2.35-2.35-1.052-2.35-2.35 1.052-2.35 2.35-2.35zm0 1.5c-.47 0-.85.38-.85.85s.38.85.85.85.85-.38.85-.85-.38-.85-.85-.85zm0-6.597c2.472 0 4.84.996 6.568 2.762.29.296.285.771-.011 1.061-.296.29-.771.285-1.061-.011-1.447-1.479-3.428-2.312-5.496-2.312-2.068 0-4.05.833-5.496 2.312-.29.296-.765.3-1.06.011-.297-.29-.302-.765-.012-1.06 1.729-1.767 4.096-2.763 6.568-2.763zm0-4.533c3.446 0 6.746 1.39 9.153 3.856.289.297.283.771-.013 1.06-.297.29-.771.284-1.06-.012-2.125-2.177-5.038-3.404-8.08-3.404S6.245 7.347 4.12 9.524c-.289.296-.763.302-1.06.013-.296-.29-.302-.764-.013-1.06C5.454 6.01 8.754 4.62 12.2 4.62zm11.723.395c.297.289.303.764.014 1.06-.289.297-.764.303-1.06.014C16.936.3 7.464.3 1.523 6.09c-.296.29-.771.283-1.06-.014-.29-.296-.283-.771.014-1.06C7-1.342 17.4-1.342 23.923 5.015z">
                                    </path>
                                </svg>
                                <span class="font-medium text-gray-400">Darmowy Internet</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="w-full px-3 mb-12 lg:w-1/2 order-0 lg:order-1 lg:mb-0"><img
                        class="mx-auto sm:max-w-sm lg:max-w-full"
                        src="https://cdn.pixabay.com/photo/2016/10/10/22/37/credit-card-1730085_1280.jpg"
                        alt="payment with credit card"></div>
            </div>
        </div>
    </section>
    <section id="section3" class="pt-4 pb-12 bg-slate-900">
        <div class="my-16 text-center">
            <h2 class="text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500">
            OPINIE</h2>
            <p class="text-xl text-gray-300">Opinie klientów na temat jakości naszych usług.</p>
        </div>
        <div class="flex flex-wrap items-center gap-20 justify-center">
            <div class="max-w-md p-4 bg-slate-700 rounded-lg shadow-lg">
                <div class="flex justify-center -mt-16 md:justify-end" >
                    <img class="object-cover w-20 h-20 border-2 border-green-500 rounded-full"
                        src="https://images.unsplash.com/photo-1499714608240-22fc6ad53fb2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80">
                </div>
                <div>
                    <h2 class="text-3xl font-semibold text-gray-400">STRZYŻENIE</h2>
                    <p class="mt-2 text-gray-300">Niestety porażka. Pani fryzjerka bardzo sympatyczna w rozmowie, ale strzyżenie wyszło fatalnie.
                        Fakt, że włosy nie są układane codziennie na szczotce, też nie został uwzględniony przez fryzjerkę. Stare przysłowie, co tanio to drogo. Poprawka u innego fryzjera.
                    </p>
                </div>
                <div class="flex justify-end mt-4">
                    <a class="text-xl font-medium text-green-500">Tomasz Kowalski</a>
                </div>
            </div>
            <div class="max-w-md p-4 bg-slate-700 rounded-lg shadow-lg" style="min-height: 250px;">
                <div class="flex justify-center -mt-16 md:justify-end">
                    <img class="object-cover w-20 h-20 border-2 border-green-500 rounded-full"
                        src="https://cdn.pixabay.com/photo/2018/01/04/21/15/young-3061652__340.jpg">
                </div>
                <div>
                    <h2 class="text-3xl font-semibold text-gray-400">PAKIET ŚLUBNY</h2>
                    <p class="mt-2 text-gray-300">Doskonała stylizacja na ślub. Zadbano o najmniejsze szczegóły. Jestem bardzo zadowolona. Nie mogłam wybrać lepiej.
                        Polecam wszystkim!</p>
                </div>
                <div class="flex justify-end mt-4">
                    <a class="text-xl font-medium text-green-500">Agnieszka Król</a>
                </div>
            </div>
            <div class="max-w-md p-4 bg-slate-700 rounded-lg shadow-lg" style="min-height: 250px;">
                <div class="flex justify-center -mt-16 md:justify-end">
                    <img class="object-cover w-20 h-20 border-2 border-green-500 rounded-full"
                        src="https://cdn.pixabay.com/photo/2018/01/18/17/48/purchase-3090818__340.jpg">
                </div>
                <div>
                    <h2 class="text-3xl font-semibold text-gray-400">STRZYŻENIE DAMSKIE</h2>
                    <p class="mt-2 text-gray-300">Pierwszy raz jestem w tym salonie, świetnie dopasowała pani kolor. Jestem bardzo zadowolona.
                        Pięknie zrobiona dekoloryzacja i farbowanie, bardzo miła atmosfera, serdecznie polecam!!!</p>
                </div>
                <div class="flex justify-end mt-4">
                    <a class="text-xl font-medium text-green-500">Julia Nowak</a>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>
