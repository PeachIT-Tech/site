// JS para Menu
    function dropMenu() {
        var header = document.getElementById("header");
        var dropdown = document.getElementById("DropdownItem");

        if (header.classList.contains("show")) {
            header.classList.remove("show");
        } else {
            header.classList.add("show");
        }
        
        if (dropdown.classList.contains("show")) {
            dropdown.classList.remove("show");
        } else {
            dropdown.classList.add("show");
        }
    }

    function menuMobile() {
        var menu = document.getElementById("menu-button");
        var collapse = document.getElementById("navbar-collapse");

        if (collapse.classList.contains("show")) {
            collapse.classList.remove("show");
        } else {
            collapse.classList.add("show");
        }

        if (menu.classList.contains("cross")) {
            menu.classList.remove("cross");
        } else {
            menu.classList.add("cross");
        }
    }

    function expand() {
        var expand = document.getElementById("expand");

        if (expand.classList.contains("expand")) {
            expand.classList.remove("expand");
        } else {
            expand.classList.add("expand");
        }
    }

// Initialize Swiper
    var swiperGeral = new Swiper(".slider-geral");

    var swiperHome = new Swiper(".slider-home", {
        pagination: {
            el: ".swiper-pagination-slider-home",
            clickable: true,
        },
    });

    var swiperClients = new Swiper(".slider-clients", {
        pagination: {
            el: ".swiper-pagination-slider-clients",
            clickable: true,
        },
    });

    var swiperTeam = new Swiper(".slider-team", {
        pagination: {
            el: ".swiper-pagination-slider-team",
            clickable: true,
        },
    });

    var swiperDoing = new Swiper(".swiper-doing", {
        pagination: {
            el: ".swiper-pagination-slider-doing",
            clickable: true,
        },
        slidesPerView: 3,
        spaceBetween: 30,
        breakpoints: {
            100: {
                slidesPerView: 1,
                spaceBetween: 30,
            },
            991: {
                slidesPerView: 3,
                spaceBetween: 30,
            },
        },
    });

    var swiperProjects = new Swiper(".swiper-projects", {
        spaceBetween: 30,
        pagination: {
            el: ".swiper-pagination-slider-projects",
            clickable: true
        },
        navigation: {
            nextEl: ".swiper-button-next-projects",
            prevEl: ".swiper-button-prev-projects",
        },
        breakpoints: {
            100: {
                slidesPerView: 1,
                grid: {
                    rows: 2,
                },
            },
            991: {
                slidesPerView: 4,
                grid: {
                    rows: 1,
                },
            },
        },
    });

// Get Filename input
    function getInputName() {
        var fullPath = document.getElementById('arquivo').value;
        
        if (fullPath) {
            var startIndex = (fullPath.indexOf('\\') >= 0 ? fullPath.lastIndexOf('\\') : fullPath.lastIndexOf('/'));
            var filename = fullPath.substring(startIndex);
            if (filename.indexOf('\\') === 0 || filename.indexOf('/') === 0) {
                filename = filename.substring(1);
            }
            let nomeArquivo = filename;

            document.getElementById('fileName').innerHTML = nomeArquivo;

            var uploded = document.getElementById("uploaded-item");

            if (uploded.classList.contains("active")) {
                uploded.classList.remove("active");
            } else {
                uploded.classList.add("active");
            }
        }
    }

    function removeFile() {
        document.getElementById('arquivo').value = "";
        document.getElementById('fileName').innerHTML = "";
        
        var uploded = document.getElementById("uploaded-item");

        if (uploded.classList.contains("active")) {
            uploded.classList.remove("active");
        } else {
            uploded.classList.add("active");
        }
    }