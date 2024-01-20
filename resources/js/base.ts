export function initBase() {
    console.log('Laravel Base init');
    /*
        DROPDOWNS START
    */
    const allDropdowns = document.querySelectorAll('[data-role=dropdown]');
    allDropdowns.forEach(function (dropdownContainer) {
        const dropdownButton = dropdownContainer.querySelectorAll('button');
        const dropdownBox = dropdownContainer.querySelectorAll('[role=menu]')
        if (dropdownButton.length > 0 && dropdownBox.length > 0) {
            dropdownButton[0].addEventListener('click', function () {
                const currentState = dropdownContainer.getAttribute('data-is-open') ?? 'no'
                if (currentState === "yes") {
                    dropdownBox[0].classList.remove('transition', 'ease-out', 'duration-100', 'transform', 'opacity-100', 'scale-100');
                    dropdownBox[0].classList.add('transition', 'ease-in', 'duration-75', 'transform', 'opacity-0', 'scale-95');
                    dropdownContainer.setAttribute('data-is-open', 'no');
                } else {
                    dropdownBox[0].classList.remove('transition', 'ease-in', 'duration-75', 'transform', 'opacity-0', 'scale-95');
                    dropdownBox[0].classList.add('transition', 'ease-out', 'duration-100', 'transform', 'opacity-100', 'scale-100');
                    dropdownContainer.setAttribute('data-is-open', 'yes');
                }
            });
        }
    });
    /*
        DROPDOWNS END
    */
}
