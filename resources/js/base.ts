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

    /*
        SIDEBAR START
    */
    const allSidebarToggles = document.querySelectorAll('[data-role=sidebar-toggle]');
    allSidebarToggles.forEach(function (sidebarToggleBtn) {
        sidebarToggleBtn.addEventListener('click', function () {
            const target = sidebarToggleBtn.getAttribute('data-target');
            if(target){
                const targetSidebarContainer = document.getElementById(target);
                const targetSidebarBackground = targetSidebarContainer.querySelectorAll('[data-role=sidebar-background]')[0]
                const targetSidebarInner = targetSidebarContainer.querySelectorAll('[data-role=sidebar-inner]')[0]
                const targetSidebarInnerContent = targetSidebarContainer.querySelectorAll('[data-role=sidebar-inner-content]')[0]

                const currentState = targetSidebarContainer.getAttribute('data-is-open') ?? 'no';
                if(currentState === "yes"){
                    targetSidebarContainer.classList.add('transition-opacity', 'ease-linear', 'duration-300', 'opacity-0');
                    targetSidebarContainer.classList.remove('transition-opacity', 'ease-linear', 'duration-300', 'opacity-100');
                    targetSidebarBackground.classList.add('hidden');
                    targetSidebarInner.classList.remove('transition', 'ease-in-out', 'duration-300', 'transform', 'translate-x-0')
                    targetSidebarInner.classList.add('transition', 'ease-in-out', 'duration-300', 'transform', '-translate-x-full')
                    targetSidebarInnerContent.classList.remove('ease-in-out', 'duration-300', 'opacity-100');
                    targetSidebarInnerContent.classList.add('ease-in-out', 'duration-300', 'opacity-0');
                    targetSidebarContainer.setAttribute('data-is-open', 'no');
                } else {
                    targetSidebarContainer.classList.remove('transition-opacity', 'ease-linear', 'duration-300', 'opacity-0');
                    targetSidebarContainer.classList.add('transition-opacity', 'ease-linear', 'duration-300', 'opacity-100');
                    targetSidebarBackground.classList.remove('hidden');
                    targetSidebarInner.classList.remove('transition', 'ease-in-out', 'duration-300', 'transform', '-translate-x-full')

                    targetSidebarInner.classList.add('transition', 'ease-in-out', 'duration-300', 'transform', 'translate-x-0')
                    targetSidebarInnerContent.classList.remove('ease-in-out', 'duration-300', 'opacity-0');
                    targetSidebarInnerContent.classList.add('ease-in-out', 'duration-300', 'opacity-100');
                    targetSidebarContainer.setAttribute('data-is-open', 'yes');
                }

            }
        })
    })
    /*
        SIDEBAR ENDS
    */
}
