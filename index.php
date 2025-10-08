<!DOCTYPE html>
<html lang="nl">

<head>
    <title>Portfolio Tobi Q</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pathway+Gothic+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nosifer&family=Pathway+Gothic+One&display=swap" rel="stylesheet">
    <script src="js/terminal.js" defer></script>
</head>

<body class="text-white font-['Pathway_Gothic_One',sans-serif]">
    <div id="project-panel-root"></div>
    <!-- Header -->
    <header class="bg-red-950 flex justify-evenly font-['Nosifer',sans-serif] border-y-2 border-white w-full">
        <nav class="flex p-6 w-full">
            <ul class="flex justify-evenly w-full">
                <li><a href="#general-info" class="text-white hover:text-gray-400 whitespace-nowrap">Tobi
                        Q</a></li>
                <li><a href="#about-terminal" class="text-white hover:text-gray-400 whitespace-nowrap">Over Mij</a></li>
                <li><a href="#projects" class="text-white hover:text-gray-400 whitespace-nowrap">Projecten</a></li>
                <li><a href="#contact" class="text-white hover:text-gray-400 whitespace-nowrap">Contact</a></li>
            </ul>
        </nav>
    </header>
    <!-- Main Content -->
    <main class="p-4 bg-[url('img/background.png')] bg-fixed bg-cover bg-center">
        <section id="general-info">
            <!-- General Information -->
            <div class="flex flex-col items-center">
                <div class="flex justify-center">
                    <div class="bg-neutral-800 w-96 border-2 border-white p-2">
                        <h1 class="text-2xl font-bold my-5">Tobi Q</h1>
                        <ul class="flex flex-col justify-between max-h-56 list-disc list-inside">
                            <li class="my-[0.5vw]">Student Software Developer</li>
                            <li class="my-[0.5vw]">Java, HTML, CSS & Lua</li>
                            <li class="my-[0.5vw]">Ervaren in FiveM-serverontwikkeling</li>
                            <li class="my-[0.5vw]">Creatief & leergierig</li>
                        </ul>
                    </div>
                    <!-- Chain Icons -->
                    <div class="flex flex-col items-center justify-between">
                        <img src="img/details/graychain.png" alt="gray chain icon">
                        <img src="img/details/graychain.png" alt="gray chain icon">
                        <img src="img/details/graychain.png" alt="gray chain icon">
                    </div>
                    <div>
                        <!-- Profile Image -->
                        <img src="/img/profile.png" alt="Tobi Quenum" class="min-h-[215px] w-96 border-2 border-white">
                    </div>
                </div>
                <!-- Chain Icons -->
                <div class="flex w-full max-w-[800px] justify-between">
                    <img src="img/details/graychainupright.png" alt="upright chain icon" class="w-6">
                    <img src="img/details/graychainupright.png" alt="upleft chain icon" class="w-6">
                </div>
            </div>
        </section>
        <section id="about-terminal" class="grid place-items-center">
            <!-- Terminal with continuous output (Script at bottom of the file)-->
            <div
                class="w-[min(920px,90vw)] bg-[#0f0a0a] border border-[rgba(31,22,22,0.06)] rounded-[10px] overflow-hidden shadow-[0_0_12px_#ff2626,0_0_30px_rgba(255,38,38,0.35)]">
                <header class="flex items-center gap-[10px] px-[14px] py-[10px] bg-[#3f0101] border-b border-white/10">
                    <div class="text-[#7b7b7b] font-medium text-[12px] leading-[1] uppercase">
                        Tobi-Q/Langbericht
                    </div>
                </header>
                <div id="terminal-wrapper" class="p-5 bg-[#130505] h-[280px] overflow-y-auto scrollbar-thin"
                    style="scrollbar-color: #901616ff #1a1a1a;">
                    <pre id="terminal-output"
                        class="h-full font-mono text-[14.5px] leading-[1.5] text-[#d7d7d7] whitespace-pre-wrap"></pre>
                </div>
            </div>
        </section>
        <div class="w-full flex justify-center">
            <div class="flex w-full max-w-[800px] justify-between">
                <img src="img/details/graychainupright.png" alt="upright chain icon" class="w-6 h-15">
                <img src="img/details/graychainupright.png" alt="upleft chain icon" class="w-6 h-15">
            </div>
        </div>
        <section id="projects">
            <div class="flex justify-center">
                <div
                    class="bg-neutral-800 flex flex-col items-center border-red-800 border-2 p-2 w-full max-w-[930px] rounded-lg shadow-[0_0_20px_rgba(255,0,0,0.7)]">

                    <!-- Start: hidden -->
                    <button id="toggle-flow"
                        class="bg-red-800 w-[300px] text-white py-2 px-4 rounded mt-4 mb-4 shadow-[0_0_50px_rgba(255,0,0,0.7)] border-2 border-red-800">
                        Carrière flowchart
                    </button>
                    <img id="flow-image" src="img/flowchart.png" alt="Flowchart"
                        class="max-w-[900px] w-full scale-y-0 hidden transition-transform duration-700 ease-out origin-top">

                    <script src="js/flowchart-anim.js" defer></script>
                    <div class="border-t-2 border-red-800 w-full flex justify-center">
                        <h1 class="font-bold my-5 text-[clamp(1.5rem,4vw,3rem)]">Mijn Projecten</h1>
                    </div>

                    <!-- Project 1 (LEFT → slides in from left) -->
                    <div class="relative w-full h-24 overflow-hidden">
                        <div class="absolute inset-0 bg-[#ff0000] flex justify-center text-white
                    opacity-0 -translate-x-full transition-all duration-500 rounded-lg">
                            <div class="p-4 bg-neutral-800 rounded-lg m-4 w-[clamp(200px,30%,420px)]">
                                <a class="text-lg text-center block" href="https://google.com">Meer info komt nog...</a>
                            </div>
                            <div class="p-4 bg-neutral-800 rounded-lg m-4 w-[clamp(200px,30%,420px)]">
                                <a class="text-lg text-center block" href="https://google.com">Meer info komt nog...</a>
                            </div>
                            <div class="p-4 bg-neutral-800 rounded-lg m-4 w-[clamp(200px,30%,420px)]">
                                <a class="text-lg text-center block" href="https://google.com">Meer info komt nog...</a>
                            </div>
                        </div>

                        <button
                            class="absolute left-0 top-1/2 -translate-y-1/2 flex items-center gap-4 transition-all duration-500 z-10"
                            onclick="
                            // Toggle classes for animation
            this.querySelector('span').classList.toggle('hidden');
            // hides the 'basis programmeren' tekst when activated
            this.previousElementSibling.classList.toggle('opacity-100');
            // previousElementSibling is the div above the 'this' selection
            // shows the content when activated
            this.previousElementSibling.classList.toggle('translate-x-0');
            // slides the content to the right when activated
          ">
                            <img src="img/icons/comp-icon.png" alt="Computer Icon"
                                class="w-[clamp(3rem,6vw,9rem)] h-auto transition-all duration-500">
                            <span class="font-bold text-[clamp(1rem,2.5vw,2rem)] transition-all duration-300">Basis
                                Programmeren</span>
                        </button>
                    </div>

                    <!-- Project 2 (RIGHT → slides in from right, with 3 cards) -->
                    <div class="relative w-full h-24 overflow-hidden">
                        <div class="absolute inset-0 bg-[#d10000] flex justify-center text-white
              opacity-0 translate-x-full transition-all duration-500 rounded-lg">
                            <div class="p-4 bg-neutral-800 rounded-lg m-4 w-[clamp(200px,30%,420px)]">
                                <a class="text-lg text-center block" href="downloadable/pinkgoose.zip"
                                    download="pinkgoose.zip">Pinkgoose Website (Download)</a>
                            </div>
                            <div class="p-4 bg-neutral-800 rounded-lg m-4 w-[clamp(200px,30%,420px)]">
                                <a class="text-lg text-center block" href="downloadable/beide-portfolio.zip"
                                    download="beide-portfolio.zip">Portfolio websites vorige periode</a>
                            </div>
                            <div class="p-4 bg-neutral-800 rounded-lg m-4 w-[clamp(200px,30%,420px)]">
                                <a class="text-lg text-center block" href="https://example.com">Meer info komt
                                    nog...</a>
                            </div>
                        </div>

                        <button
                            class="absolute right-0 top-1/2 -translate-y-1/2 flex items-center gap-4 transition-all duration-500 z-10 "
                            onclick="
      this.querySelector('span').classList.toggle('hidden');
      this.previousElementSibling.classList.toggle('opacity-100');
      this.previousElementSibling.classList.toggle('translate-x-0');
    ">
                            <span
                                class="font-bold text-[clamp(1rem,2.5vw,2rem)] transition-all duration-300">Website</span>
                            <img src="img/icons/web-icon.png" alt="Website Icon"
                                class="w-[clamp(3rem,6vw,9rem)] h-auto transition-all duration-500">
                        </button>
                    </div>

                    <!-- Project 3 (LEFT → slides in from left, with 3 cards) -->
                    <div class="relative w-full h-24 overflow-hidden">
                        <div class="absolute inset-0 bg-[#940000] flex justify-center text-white
              opacity-0 -translate-x-full transition-all duration-500 rounded-lg">
                            <div class="p-4 bg-neutral-800 rounded-lg m-4 w-[clamp(200px,30%,420px)]">
                                <a class="text-lg text-center block" href="https://example.com">Meer info komt
                                    nog...</a>
                            </div>
                            <div class="p-4 bg-neutral-800 rounded-lg m-4 w-[clamp(200px,30%,420px)]">
                                <a class="text-lg text-center block" href="https://example.com">Meer info komt
                                    nog...</a>
                            </div>
                            <div class="p-4 bg-neutral-800 rounded-lg m-4 w-[clamp(200px,30%,420px)]">
                                <a class="text-lg text-center block" href="https://example.com">Meer info komt
                                    nog...</a>
                            </div>
                        </div>

                        <button
                            class="absolute left-0 top-1/2 -translate-y-1/2 flex items-center gap-4 transition-all duration-500 z-10"
                            onclick="
      this.querySelector('span').classList.toggle('hidden');
      this.previousElementSibling.classList.toggle('opacity-100');
      this.previousElementSibling.classList.toggle('translate-x-0');
    ">
                            <img src="img/icons/ict-icon.png" alt="ICT Icon"
                                class="w-[clamp(3rem,6vw,9rem)] h-auto transition-all duration-500">
                            <span class="font-bold text-[clamp(1rem,2.5vw,2rem)] transition-all duration-300">Basis
                                ICT</span>
                        </button>
                    </div>

                    <!-- Project 4 (RIGHT → slides in from right, with 3 cards) -->
                    <div class="relative w-full h-24 overflow-hidden">
                        <div class="absolute inset-0 bg-[#4d0000] flex justify-center text-white
              opacity-0 translate-x-full transition-all duration-500 rounded-lg">
                            <div class="p-4 bg-neutral-800 rounded-lg m-4 w-[clamp(200px,30%,420px)]">
                                <a class="text-lg text-center block" href="https://example.com">Meer info komt
                                    nog...</a>
                            </div>
                            <div class="p-4 bg-neutral-800 rounded-lg m-4 w-[clamp(200px,30%,420px)]">
                                <a class="text-lg text-center block" href="https://example.com">Meer info komt
                                    nog...</a>
                            </div>
                            <div class="p-4 bg-neutral-800 rounded-lg m-4 w-[clamp(200px,30%,420px)]">
                                <a class="text-lg text-center block" href="https://example.com">Meer info komt
                                    nog...</a>
                            </div>
                        </div>

                        <button
                            class="absolute right-0 top-1/2 -translate-y-1/2 flex items-center gap-4 transition-all duration-500 z-10"
                            onclick="
      this.querySelector('span').classList.toggle('hidden');
      this.previousElementSibling.classList.toggle('opacity-100');
      this.previousElementSibling.classList.toggle('translate-x-0');
    ">
                            <span
                                class="font-bold text-[clamp(1rem,2.5vw,2rem)] transition-all duration-300">FiveM</span>
                            <img src="img/icons/fivem-icon.png" alt="Fivem Icon"
                                class="w-[clamp(3rem,6vw,9rem)] h-auto transition-all duration-500">
                        </button>
                    </div>

                    <!-- Project 5 (LEFT → slides in from left, with 3 cards) -->
                    <div class="relative w-full h-24 overflow-hidden">
                        <div class="absolute inset-0 bg-[#330000] flex justify-center text-white
              opacity-0 -translate-x-full transition-all duration-500 rounded-lg">
                            <div class="p-4 bg-neutral-800 rounded-lg m-4 w-[clamp(200px,30%,420px)]">
                                <a class="text-lg text-center block" href="https://example.com">Meer info komt
                                    nog...</a>
                            </div>
                            <div class="p-4 bg-neutral-800 rounded-lg m-4 w-[clamp(200px,30%,420px)]">
                                <a class="text-lg text-center block" href="https://example.com">Meer info komt
                                    nog...</a>
                            </div>
                            <div class="p-4 bg-neutral-800 rounded-lg m-4 w-[clamp(200px,30%,420px)]">
                                <a class="text-lg text-center block" href="https://example.com">Meer info komt
                                    nog...</a>
                            </div>
                        </div>

                        <button
                            class="absolute left-0 top-1/2 -translate-y-1/2 flex items-center gap-4 transition-all duration-500 z-10"
                            onclick="
      this.querySelector('span').classList.toggle('hidden');
      this.previousElementSibling.classList.toggle('opacity-100');
      this.previousElementSibling.classList.toggle('translate-x-0');
    ">
                            <img src="img/icons/projects-icon.png" alt="Other Projects Icon"
                                class="w-[clamp(3rem,6vw,9rem)] h-auto transition-all duration-500">
                            <span class="font-bold text-[clamp(1rem,2.5vw,2rem)] transition-all duration-300">Andere
                                Projecten</span>
                        </button>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact Section -->
        <section id="contact" class="flex justify-center items-center flex-col">
            <div class="flex justify-between w-[800px] items-center">
                <img src="img/details/graychainupright.png" alt="Chain Icon">
                <h1 class="text-5xl font-bold mb-5">Contacteer Mij</h1>
                <img src="img/details/graychainupright.png" alt="Chain Icon">
            </div>
            <div id="contact-form" class="bg-neutral-800 p-5 rounded-lg border-2 border-red-800 w-full max-w-[1100px]"
                method="POST" action="send_email.php">
                <h1 class="text-3xl font-bold self-start m-5">Email:</h1>
                <input name="email" type="email" placeholder="iwanttohiretobi@example.com"
                    class="w-full p-2 border-2 border-red-800 rounded-lg bg-neutral-900" required>
                <h1 class="text-3xl font-bold self-end m-5">Bericht:</h1>
                <textarea name="message" placeholder="Uw bericht hier..."
                    class="w-full p-2 border-2 border-red-800 rounded-lg bg-neutral-900" required></textarea>
                <button type="submit" class="mt-4 bg-red-800 text-white py-2 px-4 rounded-lg">Verstuur</button>
            </div>
        </section>
    </main>
    <footer class="bg-neutral-800 text-white p-4 text-center">
        &copy; TQ Hosting. All rights reserved.
    </footer>
</body>

</html>
