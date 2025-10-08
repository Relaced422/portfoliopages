// Wait until the DOM is fully loaded before running this code
document.addEventListener("DOMContentLoaded", () => {
    // Array of lines that will be "typed" out in the terminal
    let lines = [
        "(BOOT) Kernmodules gestart... ✔",
        "(NETWERK) Gebruiker gedetecteerd.",
        "(STATUS) Verbinding tot stand gebracht.",
        "",
        "Welkom bij de persoonlijke terminal van Tobi Q.",
        "Geen ruis, geen onnodige fouten — alleen een dosis creativiteit.",
        "",
        "Naam: Tobi Q",
        "Rol: Software Developer",
        "Locatie: Onbekend",
        "",
        "(STACK)",
        " - Java",
        " - Lua",
        " - Web Development (HTML, CSS, JS, PHP)",
        " - Customer Success",
        " ",
        "(BERICHT AAN U)",
        "   U kunt verder scrollen om mijn projecten te ontdekken,",
        "   of direct contact opnemen voor een kennismaking of samenwerking.",
        " ",
        "(SYSTEEMSTATUS)",
        "   CPU: Volledig gefocust",
        "   RAM: Gevuld met ideeën",
        "   Netwerk: Altijd open voor nieuwe connecties",
        " ",
        "(TRANSMISSIE EINDE)",
        "Verbinding blijft actief voor toekomstige communicatie."
    ];

    // Get the output elements from the DOM
    let output  = document.getElementById("terminal-output");   // <pre> where the lines appear
    let wrapper = document.getElementById("terminal-wrapper");  // scrollable container

    // State for tracking which line and character is being typed
    let line = 0,   // current line index
        char = 0,   // current character index
        div;        // <div> element for the current line

    // Recursive function to "type" characters one by one
    function next() {
        // Stop if all lines have been processed
        if (line >= lines.length) return;

        // If starting a new line, create a <div> for it
        if (char === 0) {
            div = document.createElement("div");
            output.appendChild(div);
            wrapper.scrollTop = wrapper.scrollHeight; // keep scrolled to bottom
        }

        // Still characters left in this line?
        if (char < lines[line].length) {
            div.textContent += lines[line][char++];  // add next character
            wrapper.scrollTop = wrapper.scrollHeight; // auto-scroll
            setTimeout(next, 20); // schedule next char after 20ms
        } else {
            // Line finished → move to the next one
            line++;
            char = 0;
            setTimeout(next, 100); // wait 100ms before starting new line
        }
    }

    // Start typing immediately once DOM is ready
    next();
});

