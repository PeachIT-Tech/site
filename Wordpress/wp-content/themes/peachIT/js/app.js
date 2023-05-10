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

    $("#menu-item-77" ).click(function() {
        if ($("#header").hasClass("show")) {
            $("#header").removeClass("show");
        } else {
            $("#header").addClass("show");
        }
        
        if ($("#DropdownItem").hasClass("show")) {
            $("#DropdownItem").removeClass("show");
        } else {
            $("#DropdownItem").addClass("show");
        }
        
        if ($("#menu-item-77 > ul").hasClass("show")) {
            $("#menu-item-77 > ul").removeClass("show");
        } else {
            $("#menu-item-77 > ul").addClass("show");
        }
    });

    $("#menu-item-77 > a" ).click(function() {
        if ($("#expand").hasClass("expand")) {
            $("#expand").removeClass("expand");
        } else {
            $("#expand").addClass("expand");
        }
    });

// Initialize Swiper
    var swiperGeral = new Swiper(".slider-geral");

    var swiperHome = new Swiper(".slider-home", {
        pagination: {
            el: ".swiper-pagination-slider-home",
            clickable: true,
        },
        loop: true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false
        },
    });

    var swiperClients = new Swiper(".slider-clients", {
        pagination: {
            el: ".swiper-pagination-slider-clients",
            clickable: true,
        },
        autoplay: {
            delay: 2500,
            disableOnInteraction: false
        },
    });

    var swiperTeam = new Swiper(".slider-team", {
        pagination: {
            el: ".swiper-pagination-slider-team",
            clickable: true,
        },
        autoplay: {
            delay: 2500,
            disableOnInteraction: false
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
                autoplay: {
                    delay: 2500,
                    disableOnInteraction: false
                },
            },
            991: {
                slidesPerView: 3,
                spaceBetween: 30,
            },
        },
    });

    var swiperSlider = new Swiper(".swiper-slider", {
        pagination: {
            el: ".swiper-pagination-slider",
            clickable: true,
        },
        slidesPerView: 3,
        spaceBetween: 30,
        breakpoints: {
            100: {
                slidesPerView: 1,
                spaceBetween: 30,
                autoplay: {
                    delay: 2500,
                    disableOnInteraction: false
                },
            },
            991: {
                slidesPerView: 3,
                spaceBetween: 30,
            },
        },
    });

    var swiperValues = new Swiper(".swiper-values", {
        spaceBetween: 30,
        pagination: {
            el: ".swiper-pagination-slider-values",
            clickable: true,
        },
        autoplay: {
            delay: 2500,
            disableOnInteraction: false
        },
    });

    var swiperMetodologia = new Swiper(".swiper-metodologia", {
        pagination: {
            el: ".swiper-pagination-slider-metodologia",
            clickable: true,
        },
        slidesPerView: 5,
        spaceBetween: 30,
        breakpoints: {
            100: {
                slidesPerView: 1,
                spaceBetween: 30,
                autoplay: {
                    delay: 2500,
                    disableOnInteraction: false
                },
            },
            991: {
                slidesPerView: 5,
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
        autoplay: {
            delay: 2500,
            disableOnInteraction: false
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

    var swiperOptions = new Swiper(".swiper-options", {
        spaceBetween: 30,
        pagination: {
            el: ".swiper-pagination-slider-options-sol",
            clickable: true
        },
        autoplay: {
            delay: 2500,
            disableOnInteraction: false
        },
        breakpoints: {
            100: {
                slidesPerView: 1,
                grid: {
                    rows: 1,
                },
        autoplay: {
            delay: 2500,
            disableOnInteraction: false
        },
            },
            991: {
                slidesPerView: 2,
                grid: {
                    rows: 2,
                },
            },
        },
    });

    var swiperOptions2 = new Swiper(".swiper-options-2", {
        slidesPerView: 1,
        spaceBetween: 30,
        pagination: {
            el: ".swiper-pagination-slider-options-2-sol",
            clickable: true
        },
        breakpoints: {
            100: {
                slidesPerView: 1,
                spaceBetween: 30,
            },
            991: {
                slidesPerView: 2,
                spaceBetween: 30,
            },
        },
    });

    var swiperBeneficios = new Swiper(".swiper-beneficios", {
        spaceBetween: 0,
        pagination: {
            el: ".swiper-pagination-slider-beneficios",
            clickable: true
        },
        breakpoints: {
            100: {
                slidesPerView: 1,
                grid: {
                    rows: 1,
                },
            },
            991: {
                slidesPerView: 2,
                grid: {
                    rows: 2,
                },
            },
        },
    });

    var swiperPlataform = new Swiper(".swiper-plataform", {
        pagination: {
            el: ".swiper-pagination-plataform",
            clickable: true
        },
        autoplay: {
            delay: 2500,
            disableOnInteraction: false
        },
        breakpoints: {
            100: {
                slidesPerView: 1,
                grid: {
                    rows: 2,
                },
            },
            991: {
                slidesPerView: 2,
                grid: {
                    rows: 6,
                },
            },
        },
    });

    var swiperBoxTeam = new Swiper(".swiper-team", {
        spaceBetween: 30,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        autoplay: {
            delay: 2500,
            disableOnInteraction: false
        },
        breakpoints: {
            100: {
                slidesPerView: 1,
                grid: {
                    rows: 2,
                },
            },
            991: {
                slidesPerView: 3,
                grid: {
                    rows: 3,
                },
            },
        },
    });

// Get Filename input
    $("#arquivo").change(function(){
        var fullPath = document.getElementById('arquivo').value;
        
        if (fullPath) {
            var startIndex = (fullPath.indexOf('\\') >= 0 ? fullPath.lastIndexOf('\\') : fullPath.lastIndexOf('/'));
            var filename = fullPath.substring(startIndex);
            if (filename.indexOf('\\') === 0 || filename.indexOf('/') === 0) {
                filename = filename.substring(1);
            }
            let nomeArquivo = filename;

            document.getElementById('fileName').innerHTML = nomeArquivo;

            if ($("#uploaded-item").hasClass("active")) {
                $("#uploaded-item").removeClass("active");
            } else {
                $("#uploaded-item").addClass("active");
            }
        }
    });
    
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