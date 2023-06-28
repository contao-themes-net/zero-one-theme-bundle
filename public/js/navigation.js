setTimeout(function() {
    Array.from(document.querySelectorAll(".open-dropdown")).forEach(
        function(element) {
            element.addEventListener("click", function(e) {
                this.parentElement.classList.toggle('open');
            }, false);
        }
    );
}, 500);
