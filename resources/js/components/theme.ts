(function () {
    document.addEventListener('DOMContentLoaded', function () {
        //Dropdowns
        const dropdowns = document.querySelectorAll('[data-dropdown]');
        dropdowns.forEach(function (dropdown) {
            dropdown.addEventListener('click', function () {
                const isOpen = dropdown.getAttribute('data-is-open') ?? 'no';
                const dropdownTarget = dropdown.getAttribute('data-dropdown-target');
                const dropdownChevron = dropdown.querySelector('[data-dropdown-chevron]');

                if(dropdownTarget){
                    const dropdownMenu = document.getElementById(dropdownTarget);
                    if(dropdownMenu){
                        if(isOpen === "yes"){
                            dropdownMenu.classList.remove('opacity-100', 'translate-y-0', 'transition', 'ease-in', 'duration-150');
                            dropdownMenu.classList.add('opacity-0', 'translate-y-1', 'transition', 'ease-out', 'duration-200', 'hidden');
                            if(dropdownChevron){
                                dropdownChevron.classList.add('rotate-180')
                            }
                            dropdown.setAttribute('data-is-open', 'no')
                        } else {
                            dropdownMenu.classList.remove('opacity-0', 'translate-y-1', 'transition', 'ease-out', 'duration-200', 'hidden');
                            dropdownMenu.classList.add('opacity-100', 'translate-y-0', 'transition', 'ease-in', 'duration-150');
                            if(dropdownChevron){
                                dropdownChevron.classList.remove('rotate-180')
                            }
                            dropdown.setAttribute('data-is-open', 'yes')
                        }
                    }
                }
            })
        })

        document.addEventListener('click', function (event) {
            const dropdowns = document.querySelectorAll('[data-dropdown]');

            dropdowns.forEach(function (dropdown) {
                if(dropdown.getAttribute('data-is-open') === "yes"){
                    const dropdownTarget = dropdown.getAttribute('data-dropdown-target');
                    const dropdownChevron = dropdown.querySelector('[data-dropdown-chevron]')
                    if(dropdownTarget){
                        const dropdownMenu = document.getElementById(dropdownTarget);

                        if(dropdownMenu){
                            if(!dropdownMenu.contains(event.target as Node) && !dropdown.contains(event.target as Node)){
                                dropdownMenu.classList.remove('opacity-100', 'translate-y-0', 'transition', 'ease-in', 'duration-150');
                                dropdownMenu.classList.add('opacity-0', 'translate-y-1', 'transition', 'ease-out', 'duration-200', 'hidden');
                                if(dropdownChevron){
                                    dropdownChevron.classList.add('rotate-180')
                                }
                                dropdown.setAttribute('data-is-open', 'no')
                            }
                        }
                    }
                }
            })
        })

        //Main Sidebar
        const mainSidebar = document.getElementById('main-sidebar');
        const mainSidebarToggle = document.getElementById('main-sidebar-toggle')
        const mainSidebarBackdrop = document.getElementById('main-sidebar-backdrop');
        const mainSidebarCloseButton = document.getElementById('main-sidebar-close-button')
        if(mainSidebar && mainSidebarToggle && mainSidebarBackdrop && mainSidebarCloseButton){
            mainSidebarToggle.addEventListener('click', function () {
                mainSidebar.classList.remove('hidden');
                mainSidebarBackdrop.classList.remove('hidden')
            })

            mainSidebarCloseButton.addEventListener('click', function () {
                mainSidebar.classList.add('hidden');
                mainSidebarBackdrop.classList.add('hidden')
            })
        }
    })
})()
