<!doctype html>
<html lang="en" class="no-js">
  <head>
    <title>Services - 229 Consulting</title>
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}" type="image/x-icon">

    <!-- meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="view-transition" content="same-origin">
    <meta name="theme-color" content="#1e40af">
    <meta name="description" content="Explore 229 Consulting's comprehensive services: GenAI Adoption, Public Sector Consulting, Strategy & Leadership Advisory, and Training & Capacity Building. We deliver actionable strategy and execution support.">
    <meta name="keywords" content="business consulting services, GenAI adoption, public sector consulting, strategy advisory, leadership development, capacity building, organizational transformation">
    <meta property="og:site_name" content="229 Consulting">
    <meta property="og:title" content="Services - 229 Consulting">
    <meta property="og:description" content="Comprehensive business consulting services: AI adoption, public sector consulting, strategy advisory, and leadership development. Beyond theory - we deliver real outcomes.">
    <meta property="og:type" content="website">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Services - 229 Consulting">
    <meta name="twitter:description" content="Explore our comprehensive consulting services for organizational transformation and growth.">

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- all css -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendor.css') }}">
    <style>
      /* Industries Section Styles */
      .industries-section {
        background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        padding: 60px 0;
        border-radius: 20px;
        margin: 0 15px;
      }

      .industry-card {
        background: white;
        border-radius: 12px;
        padding: 25px 20px;
        height: 100%;
        transition: all 0.3s ease;
        border: 2px solid transparent;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
      }

      .industry-card:hover {
        transform: translateY(-5px);
        border-color: #2b999f;
        box-shadow: 0 5px 20px rgba(43, 153, 159, 0.15);
      }

      .industry-icon {
        width: 50px;
        height: 50px;
        background: linear-gradient(135deg, #2b999f 0%, #1e7579 100%);
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 15px;
        color: white;
      }

      .industry-card h3 {
        color: #2b999f;
        margin-bottom: 10px;
        font-weight: 600;
      }

      .industry-card p {
        color: #5f6b6b;
        margin: 0;
        line-height: 1.6;
      }

      .industries-grid .row {
        row-gap: 20px;
      }

      @media (max-width: 768px) {
        .industries-section {
          padding: 40px 0;
          margin: 0 10px;
        }
        
        .industry-card {
          padding: 20px 15px;
        }

        .industries-header h2 {
          font-size: 32px !important;
        }
      }
    </style>
    <style>
      :root {
        /* Typography */
        --font-body--family: "Inter", sans-serif;
        --font-body--style: normal;
        --font-body--weight: 400;

        --font-heading--family: "Poppins", sans-serif;
        --font-heading--style: normal;
        --font-heading--weight: 600;

        --font-button--family: "Poppins", sans-serif;
        --font-button--style: normal;
        --font-button--weight: 600;

        /* h1-h6 */
        --font-h1--size: 60px;
        --font-h2--size: 48px;
        --font-h3--size: 36px;
        --font-h4--size: 24px;
        --font-h5--size: 20px;
        --font-h6--size: 16px;

        /* header nav */
        --font-nav-main: 16px;

        /* Colors */
        --color-background: rgba(255, 255, 255, 1);
        --color-foreground: rgba(28, 37, 57, 1);
        --color-foreground-heading: rgba(28, 37, 57, 1);
        --color-foreground-subheading: rgba(93, 102, 111, 1);
        --color-background-subheading: rgba(255, 255, 255, 0.1);
        --color-border-subheading-bg: rgba(32, 40, 45, 0.1);
        --color-primary: #2b999f;
        --color-primary-background: #2b999f;
        --color-primary-hover: #1e7579;
        --color-primary-background-hover: #1e7579;
        --color-border: rgba(255, 255, 255, 0.3);
        --color-border-hover: rgba(93, 102, 111, 0.5);
        --color-shadow: rgba(0, 0, 0, 1);
        --color-overlay: rgba(43, 153, 159, 0.6);

        /* Buttons */
        --font-button-size: 16px;
        --font-button-size-mobile: 16px;
        --style-button-height: 56px;
        --style-button-height-mobile: 48px;
        --style-button-slim-height: 52px;
        --style-button-slim-height-mobile: 40px;
        --style-cta-underline-offset: 5px;
        --style-cta-underline-thickness: 1px;

        /* Colors - Primary Button */
        --color-primary-button-text: rgba(255, 255, 255, 1);
        --color-primary-button-background: #2b999f;
        --color-primary-button-border: #2b999f;
        --color-primary-button-icon: rgba(28, 37, 57, 1);
        --color-primary-button-icon-background: rgba(255, 255, 255, 1);

        --color-primary-button-hover-text: #2b999f;
        --color-primary-button-hover-background: #f9bc01;
        --color-primary-button-hover-border: #1e7579;
        --color-primary-button-hover-icon: rgba(255, 255, 255, 1);
        --color-primary-button-hover-icon-background: #2b999f;

        /* Colors - Secondary Button */
        --color-secondary-button-text: rgba(32, 40, 45, 1);
        --color-secondary-button-background: rgba(255, 255, 255, 1);
        --color-secondary-button-border: rgba(255, 255, 255, 1);
        --color-secondary-button-icon: rgba(255, 255, 255, 1);
        --color-secondary-button-icon-background: rgba(32, 40, 45, 1);

        --color-secondary-button-hover-text: rgba(255, 255, 255, 1);
        --color-secondary-button-hover-background: #2b999f;
        --color-secondary-button-hover-border: #2b999f;
        --color-secondary-button-hover-icon: rgba(28, 37, 57, 1);
        --color-secondary-button-hover-icon-background: rgba(255, 255, 255, 1);

        /* Colors - Input */
        --color-input-background: rgba(255, 255, 255, 1);
        --color-input-text: rgba(93, 102, 111, 1);
        --color-input-border: rgba(93, 102, 111, 0.2);
        --color-input-hover-background: rgba(255, 255, 255, 1);
        --color-input-hover-text: rgba(93, 102, 111, 1);
        --color-input-hover-border: rgba(93, 102, 111, 0.2);

        /* Borders */
        --style-border-width-buttons-primary: 1px;
        --style-border-width-buttons-secondary: 1px;
        --style-border-radius-buttons-primary: 40px;
        --style-border-radius-buttons-secondary: 40px;

        --style-border-width-inputs: 1px;
        --style-border-radius-inputs: 8px;
        --style-border-width: 1px;

        /* Focus */
        --focus-outline-width: 1px;
        --focus-outline-offset: 3px;

        /* Pagination */
        --style-pagination-border-width: 1px;
        --pagination-item-foreground: rgba(28, 37, 57, 1);
        --pagination-item-background: rgba(242, 242, 242, 1);
        --pagination-item-border: rgba(242, 242, 242, 1);
        --pagination-item-active-foreground: rgba(255, 255, 255, 1);
        --pagination-item-active-background: #2b999f;
        --pagination-item-active-border: #2b999f;

        /* Swiper */
        --swiper-navigation-size: 16px;
        --swiper-navigation-color: rgba(255, 255, 255, 1);
        --swiper-navigation-background-color: transparent;
        --swiper-navigation-hover-color: rgba(255, 255, 255, 1);
        --swiper-navigation-hover-background-color: rgba(255, 255, 255, 0.15);
        --swiper-pagination-bullet-inactive-color: rgba(242, 242, 242);
        --swiper-pagination-color: #2b999f;
        --swiper-pagination-bullet-inactive-opacity: 1;
      }

      @media (max-width: 767px) {
        :root {
          --font-h1--size: 48px;
          --font-h2--size: 40px;
          --font-h3--size: 28px;
          --font-h4--size: 20px;
          --font-h5--size: 18px;
        }
      }
    </style>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  </head>

  <body>
  <!-- Header -->
  <sticky-header data-sticky-type="always">
    <header class="header-2 header-floating">
        <div class="container-fluid">
            <div class="header-grid">
                <a class="header-logo" href="/" aria-label="229 Consulting">
                    <img src="{{ asset('assets/img/consulting_logo.png') }}" alt="229 Consulting Logo"
                        width="100" height="auto" loading="lazy">
                </a>
                <drawer-menu>
                    <nav class="header-nav drawer-menu">
                        <div class="d-lg-none header-nav-headings">
                            <a class="header-logo" href="/" aria-label="229 Consulting">
                                <img src="{{ asset('assets/img/consulting_logo.png') }}" alt="229 Consulting Logo"
                                    width="80" height="auto" loading="lazy">
                            </a>
                            <drawer-opener class="svg-wrapper menu-close" data-drawer=".drawer-menu">
                                <svg width="30px" height="30px" viewbox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M8.00386 9.41816C7.61333 9.02763 7.61334 8.39447 8.00386 8.00395C8.39438 7.61342 9.02755 7.61342 9.41807 8.00395L12.0057 10.5916L14.5907 8.00657C14.9813 7.61605 15.6144 7.61605 16.0049 8.00657C16.3955 8.3971 16.3955 9.03026 16.0049 9.42079L13.4199 12.0058L16.0039 14.5897C16.3944 14.9803 16.3944 15.6134 16.0039 16.0039C15.6133 16.3945 14.9802 16.3945 14.5896 16.0039L12.0057 13.42L9.42097 16.0048C9.03045 16.3953 8.39728 16.3953 8.00676 16.0048C7.61624 15.6142 7.61624 14.9811 8.00676 14.5905L10.5915 12.0058L8.00386 9.41816Z"
                                        fill="currentColor"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M23 12C23 18.0751 18.0751 23 12 23C5.92487 23 1 18.0751 1 12C1 5.92487 5.92487 1 12 1C18.0751 1 23 5.92487 23 12ZM3.00683 12C3.00683 16.9668 7.03321 20.9932 12 20.9932C16.9668 20.9932 20.9932 16.9668 20.9932 12C20.9932 7.03321 16.9668 3.00683 12 3.00683C7.03321 3.00683 3.00683 7.03321 3.00683 12Z"
                                        fill="currentColor"></path>
                                </svg>
                            </drawer-opener>
                        </div>
                        <ul class="header-menu list-unstyled">
                            <li class="nav-item">
                                <a class="menu-link menu-link-main menu-accrodion" href="/"
                                    data-text="Home">
                                    Home
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="menu-link menu-link-main" href="/about">
                                    About Us
                                </a>
                            </li>
                            <li class="nav-item nav-item-static">
                                <a class="menu-link menu-link-main active" href="/services">
                                    Services
                                </a>
                            </li>
                            <li class="nav-item nav-item-static">
                                <a class="menu-link menu-link-main menu-accrodion" href="/">
                                    Pages
                                    <svg width="10" height="5" viewbox="0 0 10 5" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5 5L0 0H10L5 5Z" fill="currentColor"></path>
                                    </svg>
                                </a>
                                <div class="header-megamenu header-submenu menu-absolute submenu-color">
                                    <ul class="list-unstyled">
                                        <li class="nav-item">
                                            <a class="menu-link heading fw-300" href="">SERVICE PAGES</a>
                                            <ul class="submenu-lists reset-submenu list-unstyled submenu-color">
                                                <li class="nav-item">
                                                    <a class="menu-link" href="/services">
                                                        <div class="heading text-18 fw-500">
                                                            Services
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="menu-link" href="/service-details">
                                                        <div class="heading text-18 fw-500">
                                                            Services Details
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a class="menu-link heading fw-300" href="">BLOG PAGES</a>
                                            <ul class="submenu-lists reset-submenu list-unstyled submenu-color">
                                                <li class="nav-item">
                                                    <a class="menu-link" href="/blog">
                                                        <div class="heading text-18 fw-500">Blog</div>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="menu-link" href="/blog">
                                                        <div class="heading text-18 fw-500">
                                                            Blog List
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a class="menu-link heading fw-300" href="">OTHER PAGES</a>
                                            <ul class="submenu-lists reset-submenu list-unstyled submenu-color">
                                                <li class="nav-item">
                                                    <a class="menu-link" href="/about">
                                                        <div class="heading text-18 fw-500">
                                                            About Us
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="menu-link" href="/contact">
                                                        <div class="heading text-18 fw-500">
                                                            Contact Us
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="menu-link" href="/faq">
                                                        <div class="heading text-18 fw-500">FAQ</div>
                                                    </a>
                                                </li>

                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a class="menu-link heading fw-300" href="">PROJECTS</a>
                                            <ul class="submenu-lists reset-submenu list-unstyled submenu-color">
                                                <li class="nav-item">
                                                    <a class="menu-link" href="/projects">
                                                        <div class="heading text-18 fw-500">
                                                            Project
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="menu-link" href="/team">
                                                        <div class="heading text-18 fw-500">
                                                            Our Team
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="menu-link" href="/privacy-policy">
                                                        <div class="heading text-18 fw-500">
                                                            Privacy Policy
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item megamenu-links">
                                            <a class="menu-link text-14 fw-300" href="/contact">
                                                <svg class="icon-18" width="20px" height="20px"
                                                    viewbox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 13.5997 2.37562 15.1116 3.04346 16.4525C3.22094 16.8088 3.28001 17.2161 3.17712 17.6006L2.58151 19.8267C2.32295 20.793 3.20701 21.677 4.17335 21.4185L6.39939 20.8229C6.78393 20.72 7.19121 20.7791 7.54753 20.9565C8.88837 21.6244 10.4003 22 12 22Z"
                                                        stroke="currentColor" stroke-width="1.5"></path>
                                                    <path opacity="0.5" d="M8 10.5H16" stroke="currentColor"
                                                        stroke-width="1.5" stroke-linecap="round"></path>
                                                    <path opacity="0.5" d="M8 14H13.5" stroke="currentColor"
                                                        stroke-width="1.5" stroke-linecap="round"></path>
                                                </svg>
                                                Get in Touch
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="menu-link menu-link-main" href="/blog">
                                    Blog
                                </a>
                                <div class="header-submenu menu-absolute submenu-color">
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="menu-link menu-link-main" href="/contact">
                                    Contact
                                </a>
                            </li>
                        </ul>
                        <div class="drawer-content d-lg-none">
                            <div class="drawer-block">
                                <div class="drawer-heading text text-18">Our Services</div>
                                <ul class="drawer-additional-menu list-unstyled flex-direction-column">
                                    <li class="nav-item">
                                        <a class="menu-link" href="/services">GenAI Adoption for
                                            Institutions</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="menu-link" href="/services">Public Sector & Development
                                            Consulting</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="menu-link" href="/services">Strategy & Leadership
                                            Advisory</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="menu-link" href="/services">
                                            Training & Capacity Building
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="drawer-block drawer-block-contact">
                                <div class="drawer-heading text text-18">Quick Contact</div>
                                <ul class="drawer-additional-menu list-unstyled flex-direction-column">
                                    <li class="nav-item">
                                        <div class="menu-link no-hover">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewbox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                class="size-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"></path>
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z">
                                                </path>
                                            </svg>
                                            Abuja: Plot 211B, Makuru Close, Wuse II Abuja<br>
                                            Kano: 28 Ibrahim Taiwo Road, Kano.<br>
                                            England: GU1 4AX, Guildford, Surrey.
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="menu-link" href="tel:+2348096382607">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewbox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                class="size-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M14.25 9.75v-4.5m0 4.5h4.5m-4.5 0 6-6m-3 18c-8.284 0-15-6.716-15-15V4.5A2.25 2.25 0 0 1 4.5 2.25h1.372c.516 0 .966.351 1.091.852l1.106 4.423c.11.44-.054.902-.417 1.173l-1.293.97a1.062 1.062 0 0 0-.38 1.21 12.035 12.035 0 0 0 7.143 7.143c.441.162.928-.004 1.21-.38l.97-1.293a1.125 1.125 0 0 1 1.173-.417l4.423 1.106c.5.125.852.575.852 1.091V19.5a2.25 2.25 0 0 1-2.25 2.25h-2.25Z">
                                                </path>
                                            </svg>
                                            Nigeria: +234 809 638 2607
                                            <br>
                                            England: +44 773 377 7013
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="menu-link" href="mailto:info@229consult.com">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewbox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                class="size-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M21.75 9v.906a2.25 2.25 0 0 1-1.183 1.981l-6.478 3.488M2.25 9v.906a2.25 2.25 0 0 0 1.183 1.981l6.478 3.488m8.839 2.51-4.66-2.51m0 0-1.023-.55a2.25 2.25 0 0 0-2.134 0l-1.022.55m0 0-4.661 2.51m16.5 1.615a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V8.844a2.25 2.25 0 0 1 1.183-1.981l7.5-4.039a2.25 2.25 0 0 1 2.134 0l7.5 4.039a2.25 2.25 0 0 1 1.183 1.98V19.5Z">
                                                </path>
                                            </svg>
                                            info@229consult.com
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </drawer-menu>
                <div class="header-actions d-flex align-items-center">
                    <a href="/contact" aria-label="contact us" class="button button--primary button--slim">
                        Get in Touch
                        <span class="svg-wrapper">
                            <svg class="icon-20" width="20" height="20" viewbox="0 0 20 20"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M13.3365 7.84518L6.16435 15.0173L4.98584 13.8388L12.158 6.66667H5.83652V5H15.0032V14.1667H13.3365V7.84518Z"
                                    fill="currentColor"></path>
                            </svg>
                        </span>
                    </a>
                    <drawer-opener class="svg-wrapper menu-open d-lg-none" data-drawer=".drawer-menu">
                        <svg width="52" height="52" viewbox="0 0 52 52" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <circle cx="26" cy="26" r="25.5" fill="white" stroke="currentColor">
                            </circle>
                            <path
                                d="M32.5 18.2857C32.5 17.5757 31.9179 17 31.2 17H14.3C13.5821 17 13 17.5757 13 18.2857C13 18.9958 13.5821 19.5714 14.3 19.5714H31.2C31.9179 19.5714 32.5 18.9957 32.5 18.2857ZM14.3 24.7143H37.7C38.4179 24.7143 39 25.29 39 26C39 26.7101 38.4179 27.2857 37.7 27.2857H14.3C13.5821 27.2857 13 26.7101 13 26C13 25.29 13.5821 24.7143 14.3 24.7143ZM14.3 32.4286H26C26.7179 32.4286 27.3 33.0042 27.3 33.7143C27.3 34.4243 26.7179 35 26 35H14.3C13.5821 35 13 34.4243 13 33.7143C13 33.0042 13.5821 32.4286 14.3 32.4286Z"
                                fill="currentColor"></path>
                        </svg>
                    </drawer-opener>
                    <drawer-opener class="svg-wrapper menu-open d-none d-lg-flex"
                        data-drawer=".drawer-additional">
                        <svg width="52" height="52" viewbox="0 0 52 52" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <circle cx="26" cy="26" r="25.5" fill="white" stroke="currentColor">
                            </circle>
                            <path
                                d="M32.5 18.2857C32.5 17.5757 31.9179 17 31.2 17H14.3C13.5821 17 13 17.5757 13 18.2857C13 18.9958 13.5821 19.5714 14.3 19.5714H31.2C31.9179 19.5714 32.5 18.9957 32.5 18.2857ZM14.3 24.7143H37.7C38.4179 24.7143 39 25.29 39 26C39 26.7101 38.4179 27.2857 37.7 27.2857H14.3C13.5821 27.2857 13 26.7101 13 26C13 25.29 13.5821 24.7143 14.3 24.7143ZM14.3 32.4286H26C26.7179 32.4286 27.3 33.0042 27.3 33.7143C27.3 34.4243 26.7179 35 26 35H14.3C13.5821 35 13 34.4243 13 33.7143C13 33.0042 13.5821 32.4286 14.3 32.4286Z"
                                fill="currentColor"></path>
                        </svg>
                    </drawer-opener>
                </div>
            </div>
        </div>
    </header>
</sticky-header>

  <div class="theme-drawer drawer-additional" data-position="right">
    <div class="drawer-headings">
      <a class="header-logo" href="/" aria-label="229 Consulting">
        <img src="{{ asset('assets/img/consulting_logo.png') }}" alt="229 Consulting Logo" width="auto" height="100" loading="lazy">
      </a>
      <drawer-opener class="svg-wrapper menu-close" data-drawer=".drawer-additional">
        <svg width="30px" height="30px" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M8.00386 9.41816C7.61333 9.02763 7.61334 8.39447 8.00386 8.00395C8.39438 7.61342 9.02755 7.61342 9.41807 8.00395L12.0057 10.5916L14.5907 8.00657C14.9813 7.61605 15.6144 7.61605 16.0049 8.00657C16.3955 8.3971 16.3955 9.03026 16.0049 9.42079L13.4199 12.0058L16.0039 14.5897C16.3944 14.9803 16.3944 15.6134 16.0039 16.0039C15.6133 16.3945 14.9802 16.3945 14.5896 16.0039L12.0057 13.42L9.42097 16.0048C9.03045 16.3953 8.39728 16.3953 8.00676 16.0048C7.61624 15.6142 7.61624 14.9811 8.00676 14.5905L10.5915 12.0058L8.00386 9.41816Z" fill="currentColor"></path>
        </svg>
      </drawer-opener>
    </div>
    <div class="drawer-content">
      <div class="drawer-block">
        <div class="drawer-heading text text-18">Our Services</div>
        <ul class="drawer-additional-menu list-unstyled flex-direction-column">
          <li class="nav-item">
            <a class="menu-link" href="#genai">GenAI Adoption for Institutions</a>
          </li>
          <li class="nav-item">
            <a class="menu-link" href="#public-sector">Public Sector & Development Consulting</a>
          </li>
          <li class="nav-item">
            <a class="menu-link" href="#strategy">Strategy & Leadership Advisory</a>
          </li>
          <li class="nav-item">
            <a class="menu-link" href="#training">Training & Capacity Building</a>
          </li>
        </ul>
      </div>
      <div class="drawer-block drawer-block-contact">
        <div class="drawer-heading text text-18">Quick Contact</div>
        <ul class="drawer-additional-menu list-unstyled flex-direction-column">
          <li class="nav-item">
            <div class="menu-link no-hover">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z"></path>
              </svg>
              <span>+234 809 638 2607</span>
            </div>
          </li>
          <li class="nav-item">
            <a class="menu-link" href="mailto:info@229consult.com">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 9v.906a2.25 2.25 0 0 1-1.183 1.981l-6.478 3.488M2.25 9v.906a2.25 2.25 0 0 0 1.183 1.981l6.478 3.488m8.839 2.51-4.66-2.51m0 0-1.023-.55a2.25 2.25 0 0 0-2.134 0l-1.022.55m0 0-4.661 2.51m16.5 1.615a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V8.844a2.25 2.25 0 0 1 1.183-1.981l7.5-4.039a2.25 2.25 0 0 1 2.134 0l7.5 4.039a2.25 2.25 0 0 1 1.183 1.98V19.5Z"></path>
              </svg>
              info@229consult.com
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>

    <!-- Main -->
    <main>
      <div class="particles">
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
      </div>  
   <!-- Page Banner -->
   <div class="page-banner overlay">
    <picture class="media media-bg">
      <img src="{{ asset('assets/img/banner/banner.jpg') }}" width="1920" height="auto" loading="eager" alt="Page Banner Image">
    </picture>
    <div class="page-banner-content">
      <div class="container text-center">
        <h1 class="heading text-80 fw-500" data-aos="fade-up">
          Services
        </h1>
        <ul class="breadcrumb list-unstyled" data-aos="fade-up" data-aos-delay="100">
          <li>
            <a href="/" class="text text-18" aria-label="Home Page">
              Home
            </a>
          </li>
          <li>
            <svg width="8" height="12" viewbox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M7.08929 5.40903C7.24552 5.5653 7.33328 5.77723 7.33328 5.9982C7.33328 6.21917 7.24552 6.43109 7.08929 6.58736L2.37512 11.3015C2.29825 11.3811 2.2063 11.4446 2.10463 11.4883C2.00296 11.532 1.89361 11.5549 1.78296 11.5559C1.67231 11.5569 1.56258 11.5358 1.46016 11.4939C1.35775 11.452 1.2647 11.3901 1.18646 11.3119C1.10822 11.2336 1.04634 11.1406 1.00444 11.0382C0.962537 10.9357 0.941453 10.826 0.942414 10.7154C0.943376 10.6047 0.966364 10.4954 1.01004 10.3937C1.05371 10.292 1.1172 10.2001 1.19679 10.1232L5.32179 5.9982L1.19679 1.8732C1.04499 1.71603 0.960996 1.50553 0.962894 1.28703C0.964793 1.06853 1.05243 0.859522 1.20694 0.705015C1.36145 0.550508 1.57046 0.462868 1.78896 0.460969C2.00745 0.45907 2.21795 0.543066 2.37512 0.694864L7.08929 5.40903Z" fill="currentColor"></path>
            </svg>
          </li>
          <li>
            <a role="link" aria-disabled="true" class="text text-18 active">
              Services
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>


      <!-- Multicolmun -->
      <div class="multicolumn multicolumn-page mt-100">
        <div class="container">
          <div class="multicolumn-inner">
            <div class="row product-grid">
              <div class="col-xl-6 col-md-6 col-12" data-aos="fade-up" id="genai">
                <a class="multicolumn-card" href="/service-details" aria-label="View Service Details">
                  <div class="card-icon">
                    <svg class="icon-40" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewbox="0 0 40 40" fill="none">
                      <g clip-path="url(#clip0_9088_5407)">
                        <path d="M34.1323 16.6016H24.0586C23.735 16.6016 23.4727 16.8639 23.4727 17.1875C23.4727 17.5111 23.735 17.7734 24.0586 17.7734H34.1323C34.4559 17.7734 34.7183 17.5111 34.7183 17.1875C34.7183 16.8639 34.4559 16.6016 34.1323 16.6016Z" fill="CurrentColor"></path>
                        <path d="M34.1323 19.0469H24.0586C23.735 19.0469 23.4727 19.3092 23.4727 19.6328C23.4727 19.9564 23.735 20.2188 24.0586 20.2188H34.1323C34.4559 20.2188 34.7183 19.9564 34.7183 19.6328C34.7183 19.3092 34.4559 19.0469 34.1323 19.0469Z" fill="CurrentColor"></path>
                        <path d="M34.1323 21.5H24.0586C23.735 21.5 23.4727 21.7623 23.4727 22.0859C23.4727 22.4095 23.735 22.6719 24.0586 22.6719H34.1323C34.4559 22.6719 34.7183 22.4095 34.7183 22.0859C34.7183 21.7623 34.4559 21.5 34.1323 21.5Z" fill="CurrentColor"></path>
                        <path d="M31.0934 23.9453H24.0586C23.735 23.9453 23.4727 24.2077 23.4727 24.5312C23.4727 24.8548 23.735 25.1172 24.0586 25.1172H31.0934C31.417 25.1172 31.6794 24.8548 31.6794 24.5312C31.6794 24.2077 31.417 23.9453 31.0934 23.9453Z" fill="CurrentColor"></path>
                        <path d="M11.7012 14.4923V13.3672C11.7012 13.0436 11.4388 12.7812 11.1152 12.7812C10.7916 12.7812 10.5293 13.0436 10.5293 13.3672V14.4923C10.5293 14.8159 10.7916 15.0783 11.1152 15.0783C11.4388 15.0783 11.7012 14.8159 11.7012 14.4923Z" fill="CurrentColor"></path>
                        <path d="M16.0059 15.0783C16.3295 15.0783 16.5918 14.8159 16.5918 14.4923V13.3672C16.5918 13.0436 16.3295 12.7812 16.0059 12.7812C15.6823 12.7812 15.4199 13.0436 15.4199 13.3672V14.4923C15.4199 14.8159 15.6822 15.0783 16.0059 15.0783Z" fill="CurrentColor"></path>
                        <path d="M13.5607 17.2873C13.8843 17.2873 14.1466 17.025 14.1466 16.7014C14.1466 16.3778 13.8843 16.1155 13.5607 16.1155C13.4793 16.1155 13.4131 16.0492 13.4131 15.9679C13.4131 15.8866 13.4793 15.8203 13.5607 15.8203C13.8843 15.8203 14.1466 15.558 14.1466 15.2344C14.1466 14.9108 13.8843 14.6484 13.5607 14.6484C12.8332 14.6484 12.2412 15.2404 12.2412 15.9679C12.2412 16.6954 12.8332 17.2873 13.5607 17.2873Z" fill="CurrentColor"></path>
                        <path d="M13.5607 20.4749C14.1772 20.4898 14.8222 20.2316 15.2868 19.7812C15.6858 19.3946 15.9049 18.9168 15.9036 18.4359C15.9027 18.1128 15.6405 17.8516 15.3176 17.8516C15.3171 17.8516 15.3165 17.8516 15.316 17.8516C14.9924 17.8524 14.7307 18.1155 14.7316 18.4391C14.732 18.5965 14.6372 18.7789 14.4712 18.9398C14.2291 19.1744 13.8884 19.3137 13.5805 19.3032C13.5673 19.3027 13.554 19.3027 13.5407 19.3032C13.2334 19.3148 12.8921 19.1744 12.65 18.9398C12.4841 18.779 12.3893 18.5965 12.3897 18.4391C12.3905 18.1155 12.129 17.8525 11.8054 17.8516C11.8048 17.8516 11.8043 17.8516 11.8037 17.8516C11.4809 17.8516 11.2187 18.1128 11.2178 18.4359C11.2165 18.9167 11.4354 19.3945 11.8344 19.7812C12.2862 20.2191 12.9074 20.4756 13.5093 20.4756C13.5264 20.4755 13.5436 20.4753 13.5607 20.4749Z" fill="CurrentColor"></path>
                        <path d="M24.9282 10.9297C24.8399 10.6184 24.5159 10.4375 24.2047 10.5256C23.8934 10.6138 23.7124 10.9377 23.8007 11.2491C24.4682 13.6055 26.6457 15.2513 29.096 15.2513C32.1313 15.2513 34.6006 12.782 34.6006 9.74672C34.6006 6.71148 32.1313 4.24219 29.096 4.24219C26.6721 4.24219 24.501 5.86539 23.8163 8.18953C23.7249 8.49992 23.9024 8.8257 24.2128 8.91711C24.5231 9.00852 24.849 8.83109 24.9403 8.52063C25.4791 6.69148 27.188 5.41406 29.096 5.41406C31.485 5.41406 33.4286 7.35766 33.4286 9.74672C33.4286 12.1358 31.485 14.0794 29.096 14.0794C27.1673 14.0794 25.4534 12.7841 24.9282 10.9297Z" fill="CurrentColor"></path>
                        <path d="M28.6863 11.7562C28.8362 11.7562 28.9862 11.699 29.1006 11.5845L31.6146 9.07053C31.8434 8.8417 31.8434 8.47068 31.6146 8.24193C31.3858 8.01311 31.0147 8.01311 30.786 8.24193L28.6864 10.3415L27.4065 9.0617C27.1776 8.83287 26.8066 8.83287 26.5779 9.0617C26.349 9.29053 26.349 9.66154 26.5779 9.89029L28.2721 11.5845C28.3864 11.699 28.5364 11.7562 28.6863 11.7562Z" fill="CurrentColor"></path>
                        <path d="M38.6328 0.585938H19.5588C18.8049 0.585938 18.1916 1.1993 18.1916 1.95312V4.57211C17.748 4.4357 17.2773 4.36195 16.7897 4.36195H16.4382C15.6986 3.64062 14.689 3.195 13.5768 3.195H9.65453C7.39289 3.195 5.55297 5.03492 5.55297 7.29656V8.04602C5.55297 8.36961 5.81531 8.63195 6.13891 8.63195C6.4625 8.63195 6.72484 8.36961 6.72484 8.04602V7.29656C6.72484 5.68109 8.03906 4.36687 9.65453 4.36687H13.5768C15.1923 4.36687 16.5065 5.68109 16.5065 7.29656V10.2726H9.56773C8.45195 10.2726 7.53242 11.1277 7.42922 12.2169H6.72484V10.7804C6.72484 10.4568 6.4625 10.1945 6.13891 10.1945C5.81531 10.1945 5.55297 10.4568 5.55297 10.7804V12.4932C4.74906 12.9077 4.19773 13.7459 4.19773 14.7109V15.4813C4.19773 16.8566 5.31656 17.9753 6.69172 17.9753H7.41922V18.5184C7.41922 20.2408 8.40719 21.7358 9.84555 22.4695L9.355 22.7527C8.97023 22.9748 8.71914 23.3723 8.67813 23.81L3.11578 25.6005C1.25211 26.2004 0 27.9189 0 29.8766V38.0452C0 38.799 0.613359 39.4123 1.36719 39.4123H3.33234C3.65594 39.4123 3.91828 39.15 3.91828 38.8264C3.91828 38.5028 3.65594 38.2405 3.33234 38.2405H1.36719C1.25953 38.2405 1.17188 38.1528 1.17188 38.0452V29.8766C1.17188 28.4296 2.09734 27.1595 3.47484 26.716L7.60789 25.3856L5.53273 28.183C5.23008 28.5911 5.29398 29.171 5.67828 29.5034L7.40172 30.9939L5.62766 32.5283C5.29867 32.8129 5.19766 33.2867 5.38195 33.6806L7.51492 38.2404H6.06672C5.74312 38.2404 5.48078 38.5027 5.48078 38.8263C5.48078 39.1499 5.74312 39.4123 6.06672 39.4123H28.559C29.3128 39.4123 29.9262 38.7989 29.9262 38.0451V33.2008L31.2456 31.8813H38.6328C39.3866 31.8813 40 31.268 40 30.5141V1.95312C40 1.1993 39.3866 0.585938 38.6328 0.585938ZM7.41914 16.8035H6.69164C5.96258 16.8035 5.36953 16.2104 5.36953 15.4814V14.7109C5.36953 13.9819 5.96266 13.3888 6.69164 13.3888H7.41914V16.8035ZM8.67141 37.9473L6.50594 33.318L8.67141 31.4451V37.9473ZM8.67141 29.8958L8.29734 30.2193L6.58187 28.7356L8.67141 25.9189V29.8958ZM20.3966 9.14086V12.217H19.6923C19.593 11.1685 18.7373 10.3373 17.6783 10.2765V7.29656C17.6783 6.68 17.5407 6.09523 17.2959 5.57008C19.0459 5.81703 20.3966 7.32383 20.3966 9.14086ZM20.4297 13.3887C21.1588 13.3887 21.7518 13.9818 21.7518 14.7109V15.4813C21.7518 16.2104 21.1587 16.8034 20.4297 16.8034H19.7022V13.3887H20.4297ZM8.59101 18.5184V12.421C8.59101 11.8825 9.02906 11.4445 9.56758 11.4445H17.5538C18.0923 11.4445 18.5303 11.8825 18.5303 12.421V18.5184C18.5303 20.3169 17.0672 21.7799 15.2688 21.7799H11.8525C10.0541 21.7799 8.59101 20.3168 8.59101 18.5184ZM20.543 28.7327L18.8241 30.2193L18.45 29.8958V25.8616L20.543 28.7327ZM15.5138 22.9447V23.4638L13.5607 25.0295L11.6076 23.4639V22.9448C11.6887 22.9492 11.7703 22.9519 11.8525 22.9519H15.2688C15.3511 22.9518 15.4327 22.9491 15.5138 22.9447ZM9.84328 23.9367C9.84328 23.8672 9.8807 23.8023 9.94094 23.7676L10.4357 23.482V23.5577C10.4357 23.8555 10.5691 24.1334 10.8015 24.3196L12.9499 26.0417C12.9729 26.0602 12.9966 26.0773 13.0206 26.0934L9.84328 28.1104V23.9367ZM10.8807 38.2405H9.84328V29.4984L11.0093 28.7582L11.8824 29.7222L10.8807 38.2405ZM12.0606 38.2405L12.9282 30.8632C13.1038 31.0125 13.3279 31.097 13.5607 31.097C13.7935 31.097 14.0177 31.0124 14.1931 30.8631L15.0607 38.2405H12.0606ZM13.5607 29.8295L12.0133 28.1209L13.5608 27.1386L15.1083 28.1209L13.5607 29.8295ZM17.2781 38.2405H16.2407L15.239 29.7222L16.112 28.7583L17.2781 29.4985V38.2405ZM17.2781 28.1104L14.1008 26.0934C14.1248 26.0773 14.1485 26.0602 14.1715 26.0417L16.3198 24.3197C16.5524 24.1334 16.6858 23.8556 16.6858 23.5577V23.482L17.1805 23.7676C17.2408 23.8023 17.2782 23.8672 17.2782 23.9367L17.2781 28.1104ZM18.1916 23.1387C18.0804 22.9836 17.9366 22.8509 17.7665 22.7527L17.2759 22.4695C17.6074 22.3005 17.9145 22.0905 18.1916 21.8472V23.1387ZM18.45 31.4452L20.6116 33.3147L18.45 37.8092V31.4452ZM22.5927 32.9168V38.2405H19.543L21.7325 33.688C21.9231 33.2917 21.824 32.8139 21.4913 32.5261L19.7198 30.994L21.4454 29.5015C21.8266 29.1719 21.8926 28.5947 21.5957 28.1875L19.5652 25.4023L23.6465 26.716C24.8542 27.1048 25.7143 28.1291 25.908 29.3509C24.0576 29.4852 22.5927 31.0327 22.5927 32.9168ZM28.7543 38.0452C28.7543 38.1528 28.6666 38.2405 28.559 38.2405H23.7645V33.5441H28.7543V38.0452ZM31.3955 30.0743L29.0975 32.3723H23.8267C24.0741 31.3078 25.0305 30.5122 26.1691 30.5122H28.5578C28.7132 30.5122 28.8623 30.4505 28.9721 30.3405L30.3169 28.9958C30.6143 28.6985 31.098 28.6984 31.3954 28.9958C31.5395 29.1398 31.6187 29.3313 31.6187 29.535C31.6187 29.7388 31.5395 29.9302 31.3955 30.0743ZM38.8281 30.5142C38.8281 30.6219 38.7405 30.7095 38.6328 30.7095H32.3931C32.6508 30.3738 32.7908 29.9652 32.7908 29.535C32.7908 29.0183 32.5895 28.5324 32.2241 28.1671C31.4699 27.4128 30.2426 27.4129 29.4884 28.1671L28.3152 29.3403H27.0897C26.8845 27.6106 25.697 26.1449 24.0057 25.6005L19.3634 24.1063V20.2166C19.5815 19.6934 19.7023 19.1198 19.7023 18.5184V17.9754H20.4298C21.805 17.9754 22.9238 16.8566 22.9238 15.4814V14.7109C22.9238 13.7459 22.3724 12.9078 21.5686 12.4933V9.14086C21.5686 7.45305 20.6883 5.96789 19.3634 5.11742V1.95312C19.3634 1.84547 19.4511 1.75781 19.5588 1.75781H38.6328C38.7405 1.75781 38.8281 1.84547 38.8281 1.95312V30.5142Z" fill="CurrentColor"></path>
                        <path d="M34.1327 23.9453H32.9688C32.6452 23.9453 32.3828 24.2077 32.3828 24.5312C32.3828 24.8548 32.6452 25.1172 32.9688 25.1172H34.1327C34.4563 25.1172 34.7186 24.8548 34.7186 24.5312C34.7186 24.2077 34.4563 23.9453 34.1327 23.9453Z" fill="CurrentColor"></path>
                      </g>
                      <defs>
                        <clippath id="clip0_9088_5407">
                          <rect width="40" height="40" fill="CurrentColor"></rect>
                        </clippath>
                      </defs>
                    </svg>
                  </div>
                  <h2 class="heading text-28">GenAI Adoption for Institutions
                  </h2>
                  <div class="text text-16">
                    Helping organisations unlock productivity and resilience with generative AI. We help organisations unlock productivity and resilience by embedding Generative AI into their people, processes, and systems — driving efficiency, transparency, and readiness for the future of work.


                  </div>
             
                </a>
              </div>
              <div class="col-xl-6 col-md-6 col-12" data-aos="fade-up" data-aos-delay="200" id="public-sector">
                <a class="multicolumn-card" href="/service-details" aria-label="View Service Details">
                  <div class="card-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewbox="0 0 40 40" fill="none">
                      <g clip-path="url(#clip0_9088_5460)">
                        <path d="M9.67742 3.87097C6.47548 3.87097 3.87097 6.47613 3.87097 9.67742C3.87097 12.8787 6.47548 15.4839 9.67742 15.4839C12.8794 15.4839 15.4839 12.8787 15.4839 9.67742C15.4839 6.47613 12.8794 3.87097 9.67742 3.87097ZM9.67742 14.1935C7.18774 14.1935 5.16129 12.1677 5.16129 9.67742C5.16129 7.1871 7.18774 5.16129 9.67742 5.16129C12.1671 5.16129 14.1935 7.1871 14.1935 9.67742C14.1935 12.1677 12.1671 14.1935 9.67742 14.1935ZM9.67742 6.45161C7.89871 6.45161 6.45161 7.89871 6.45161 9.67742C6.45161 11.4561 7.89871 12.9032 9.67742 12.9032C11.4561 12.9032 12.9032 11.4561 12.9032 9.67742C12.9032 7.89871 11.4561 6.45161 9.67742 6.45161ZM9.67742 11.6129C8.61032 11.6129 7.74194 10.7445 7.74194 9.67742C7.74194 8.61032 8.61032 7.74194 9.67742 7.74194C10.7445 7.74194 11.6129 8.61032 11.6129 9.67742C11.6129 10.7445 10.7445 11.6129 9.67742 11.6129ZM38.7097 0H29.6774C28.9658 0 28.3871 0.57871 28.3871 1.29032V2.58065H23.2258C22.5142 2.58065 21.9355 3.15935 21.9355 3.87097V9.03226H19.3548V7.09677H17.4652C17.0652 7.09677 16.9077 6.79161 16.8684 6.69806C16.8297 6.60452 16.7258 6.27806 17.009 5.99548L18.3445 4.65935L14.6955 1.00968L13.3594 2.34581C13.0781 2.62839 12.751 2.52452 12.6561 2.48581C12.5632 2.4471 12.2581 2.28968 12.2581 1.88968V0H7.09677V1.88968C7.09677 2.28968 6.79161 2.4471 6.69871 2.48581C6.60452 2.52452 6.27677 2.62839 5.99548 2.34581L4.65935 1.00968L1.00968 4.65935L2.34516 5.99613C2.62774 6.27871 2.52387 6.60516 2.48581 6.69871C2.4471 6.79161 2.28968 7.09677 1.88968 7.09677H0V12.2581H1.88968C2.28968 12.2581 2.4471 12.5632 2.48645 12.6568C2.52516 12.7503 2.62903 13.0768 2.34581 13.3594L1.01032 14.6955L3.87097 17.5568V30.5768C3.87097 30.9594 3.98323 31.3303 4.19613 31.6503L9.67742 39.8729L15.1587 31.6503C15.2981 31.4413 15.389 31.2097 15.4394 30.9677H21.9355V36.129C21.9355 36.8406 22.5142 37.4194 23.2258 37.4194H28.3871V38.7097C28.3871 39.4213 28.9658 40 29.6774 40H38.7097C39.4213 40 40 39.4213 40 38.7097V34.8387C40 34.1271 39.4213 33.5484 38.7097 33.5484H29.6774C28.9658 33.5484 28.3871 34.1271 28.3871 34.8387V36.129H23.2258V30.9677C23.2258 30.2561 22.6471 29.6774 21.9355 29.6774H15.4839V25.8064H24.5161V27.7419C24.5161 28.4535 25.0948 29.0323 25.8064 29.0323H30.9677V29.6774C30.9677 30.389 31.5465 30.9677 32.2581 30.9677H36.129C36.8406 30.9677 37.4194 30.389 37.4194 29.6774V27.0968C37.4194 26.3852 36.8406 25.8064 36.129 25.8064H32.2581C31.5465 25.8064 30.9677 26.3852 30.9677 27.0968V27.7419H25.8064V25.8064C25.8064 25.0948 25.2277 24.5161 24.5161 24.5161H15.4839V20.6452H28.3871V21.9355C28.3871 22.6471 28.9658 23.2258 29.6774 23.2258H38.7097C39.4213 23.2258 40 22.6471 40 21.9355V18.0645C40 17.3529 39.4213 16.7742 38.7097 16.7742H29.6774C28.9658 16.7742 28.3871 17.3529 28.3871 18.0645V19.3548H15.4839V17.5568L17.5568 15.4839H24.5161C25.2277 15.4839 25.8064 14.9052 25.8064 14.1935V12.2581H30.9677V12.9032C30.9677 13.6148 31.5465 14.1935 32.2581 14.1935H36.129C36.8406 14.1935 37.4194 13.6148 37.4194 12.9032V10.3226C37.4194 9.61097 36.8406 9.03226 36.129 9.03226H32.2581C31.5465 9.03226 30.9677 9.61097 30.9677 10.3226V10.9677H25.8064C25.0948 10.9677 24.5161 11.5465 24.5161 12.2581V14.1935H17.8432L17.009 13.3594C16.7265 13.0768 16.8303 12.7503 16.8684 12.6568C16.9077 12.5632 17.0652 12.2581 17.4652 12.2581H19.3548V10.3226H21.9355C22.6471 10.3226 23.2258 9.74387 23.2258 9.03226V3.87097H28.3871V5.16129C28.3871 5.8729 28.9658 6.45161 29.6774 6.45161H38.7097C39.4213 6.45161 40 5.8729 40 5.16129V1.29032C40 0.57871 39.4213 0 38.7097 0ZM29.6774 34.8387H38.7097L38.7103 38.7097H29.6774V34.8387ZM32.2581 27.0968H36.129L36.1297 29.6774H32.2581V27.0968ZM29.6774 18.0645H38.7097L38.7103 21.9355H29.6774V18.0645ZM32.2581 10.3226H36.129V12.9032H32.2581V10.3226ZM5.29097 30.9677H14.0632L12.3426 33.5484H7.01161L5.29097 30.9677ZM12.2581 29.6774V19.3548V18.7097V17.4652C12.2581 17.0652 12.5632 16.9077 12.6561 16.869C12.7503 16.8297 13.0774 16.7258 13.3594 17.009L14.1935 17.8432V29.6774H12.2581ZM10.9677 29.6774H8.3871V19.3548H10.9677V29.6774ZM7.09677 18.7097V19.3548V29.6774H5.16129V17.8432L5.99548 17.009C6.27742 16.7265 6.60516 16.831 6.69871 16.869C6.79161 16.9077 7.09677 17.0652 7.09677 17.4652V18.7097ZM7.87226 34.8387H11.4826L9.67742 37.5464L7.87226 34.8387ZM18.0645 10.9677H17.4652C16.6671 10.9677 15.9819 11.4258 15.6768 12.1632C15.3716 12.9 15.5329 13.7084 16.0968 14.2723L16.52 14.6961L14.6955 16.5213L14.2716 16.0974C13.7084 15.5335 12.9006 15.3723 12.1619 15.6781C11.4258 15.9819 10.9677 16.6671 10.9677 17.4652V18.0645H8.3871V17.4652C8.3871 16.6677 7.92903 15.9826 7.19226 15.6774C6.45419 15.3723 5.64645 15.5335 5.08258 16.0968L4.65871 16.5206L2.83419 14.6955L3.25742 14.2716C3.82129 13.7077 3.98258 12.8994 3.67742 12.1626C3.3729 11.4258 2.68774 10.9677 1.88968 10.9677H1.29032V8.3871H1.88968C2.68774 8.3871 3.3729 7.92903 3.67806 7.19161C3.98323 6.45484 3.82194 5.64645 3.25806 5.08258L2.83484 4.65935L4.65935 2.83419L5.08323 3.25806C5.6471 3.82258 6.45484 3.98387 7.1929 3.67742C7.92903 3.3729 8.3871 2.68774 8.3871 1.88968V1.29032H10.9677V1.88968C10.9677 2.6871 11.4258 3.37226 12.1626 3.67742C12.9013 3.98387 13.7084 3.82194 14.2723 3.25806L14.6961 2.83419L16.5206 4.65935L16.0968 5.08258C15.5329 5.64645 15.3716 6.45484 15.6768 7.19161C15.9819 7.92903 16.6671 8.3871 17.4652 8.3871H18.0645V10.9677ZM38.7097 5.16129H29.6774V1.29032H38.7097V5.16129Z" fill="CurrentColor"></path>
                      </g>
                      <defs>
                        <clippath id="clip0_9088_5460">
                          <rect width="40" height="40" fill="CurrentColor"></rect>
                        </clippath>
                      </defs>
                    </svg>
                  </div>
                  <h2 class="heading text-28">Public Sector & Development Consulting
                  </h2>
                  <div class="text text-16">
                    Shaping policies and programs that create lasting impact. We equip leaders, teams, and institutions with the skills, strategies, and policies to thrive in disruption and create lasting impact.


                  </div>
                
                </a>
              </div>
              <div class="col-xl-6 col-md-6 col-12" data-aos="fade-up" data-aos-delay="300" id="strategy">
                  <a class="multicolumn-card" href="/service-details" aria-label="View Service Details">
                  <div class="card-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewbox="0 0 40 40" fill="none">
                      <g clip-path="url(#clip0_9088_5440)">
                        <path d="M31.2904 35.4839H36.4517V30.3226H35.1614V27.6311C35.1614 27.3645 35.2149 27.1053 35.3195 26.8599L36.8351 23.325C37.0084 22.918 37.0969 22.4877 37.0969 22.0464V15.453C37.0969 14.9509 36.9781 14.4484 36.7544 14.0008C36.4511 13.3956 35.9763 12.9076 35.38 12.5892L32.6712 11.1445L36.5072 7.30847C36.8877 6.92824 37.0969 6.42263 37.0969 5.88458C37.0969 4.77413 36.1937 3.87097 35.0833 3.87097C34.5531 3.87097 34.0342 4.08581 33.6594 4.46069L31.2904 6.82964V0H2.90332V40H31.2904V35.4839ZM34.7717 13.727C35.1311 13.9189 35.4169 14.2128 35.5996 14.5782C35.735 14.8478 35.8059 15.1503 35.8059 15.453V22.0464C35.8059 22.3129 35.7524 22.5721 35.6478 22.8175L34.1322 26.3524C33.9596 26.7594 33.8711 27.1897 33.8711 27.6311V30.3226H28.7098V27.7876C28.7098 27.2237 28.562 26.6671 28.282 26.1763L26.3865 22.8607C26.2189 22.5652 26.1291 22.2297 26.1291 21.8898V13.5484C27.1961 13.5484 28.0646 14.4169 28.0646 15.4839V19.4156C28.0646 20.8052 29.1949 21.9355 30.5838 21.9355C31.6703 21.9355 32.6311 21.2431 32.9742 20.213L33.4782 18.7034C33.7388 17.9199 33.8711 17.1053 33.8711 16.2812C33.8711 15.5431 33.4606 14.8806 32.8013 14.5505L30.444 13.3717L31.7176 12.098L34.7717 13.727ZM24.8388 17.1522L21.9277 20.0627L20.564 20.4032L20.9051 19.0395L24.8388 15.1058V17.1522ZM13.8711 25.1285C10.6156 24.8037 8.06461 22.0489 8.06461 18.7097C8.06461 15.3705 10.6156 12.6156 13.8711 12.2908V25.1285ZM19.4964 19.3548H15.1614V12.2845C17.8904 12.5098 20.2912 14.1561 21.4867 16.6337L19.7402 18.3799L19.4964 19.3548ZM15.1614 20.6452H19.1738L18.791 22.1774L22.1362 21.3407C21.5349 24.7653 18.6808 27.4231 15.1614 27.7148V20.6452ZM26.6473 11.473L25.3387 10.8187C25.0303 10.6644 24.8388 10.3547 24.8388 10.011V9.93542C24.8388 9.43738 25.2439 9.03226 25.742 9.03226C25.8897 9.03226 26.0362 9.06912 26.1666 9.13874L28.0019 10.1175L26.6473 11.473ZM29.4819 14.3334L32.2238 15.7044C32.444 15.8143 32.5807 16.0355 32.5807 16.2812C32.5807 16.9664 32.4711 17.6446 32.2544 18.2948L31.751 19.8044C31.5834 20.3078 31.1143 20.6452 30.5838 20.6452C29.9059 20.6452 29.3549 20.0936 29.3549 19.4156V15.4839C29.3549 15.1748 29.2976 14.8825 29.2163 14.5993L29.4819 14.3334ZM34.5717 5.37298C34.7065 5.23879 34.893 5.16129 35.0833 5.16129C35.4821 5.16129 35.8065 5.48576 35.8065 5.88458C35.8065 6.078 35.7316 6.25945 35.5949 6.39617L28.58 13.411C28.2628 13.0362 27.8712 12.7284 27.4157 12.529L34.5717 5.37298ZM30.0001 35.4839V38.7097H4.19364V1.29032H30.0001V8.11996L28.9561 9.16394L26.7737 7.99994C26.4567 7.83109 26.1001 7.74194 25.742 7.74194C24.5323 7.74194 23.5485 8.72574 23.5485 9.93542V10.011C23.5485 10.8471 24.0138 11.5987 24.7613 11.9736L25.5832 12.3844C25.2364 12.5485 24.9749 12.8607 24.8807 13.2406L22.4434 15.6779C20.8711 12.7904 17.8561 10.9677 14.5162 10.9677H13.8711V11.0005C9.90338 11.3303 6.77429 14.6588 6.77429 18.7097C6.77429 22.7605 9.90338 26.089 13.8711 26.4189V29.0323H14.5162C19.4012 29.0323 23.3834 25.1311 23.5343 20.2819L24.8388 18.9768V21.8892C24.8388 22.4527 24.9865 23.0097 25.2666 23.5005L27.1621 26.8161C27.3297 27.1122 27.4195 27.4477 27.4195 27.7876V30.3226H26.1291V35.4839H28.7098V34.1936H27.4195V31.6129H35.1614V34.1936H31.2904C30.5788 34.1936 30.0001 34.7722 30.0001 35.4839ZM16.4517 22.5806H17.742V23.871H16.4517V22.5806ZM20.3227 23.871H19.0324V22.5806H20.3227V23.871ZM9.35493 16.7742H12.5807V18.0645H9.35493V16.7742ZM9.35493 19.3548H12.5807V20.6452H9.35493V19.3548ZM14.5162 36.129H15.8065V37.4194H5.48397V27.7419H6.77429V36.129H8.06461V29.6774H9.35493V36.129H10.6453V31.6129H11.9356V36.129H13.2259V32.9032H14.5162V36.129ZM21.613 29.0323H24.8388V32.2581H23.5485V31.2349L20.9678 33.8155L19.6775 32.5252L16.9079 35.2949L15.9956 34.3826L19.6775 30.7006L20.9678 31.9909L22.6362 30.3226H21.613V29.0323ZM6.77429 3.87097H5.48397V2.58065H6.77429V3.87097ZM17.0969 3.87097H8.06461V2.58065H17.0969V3.87097ZM6.77429 6.45161H5.48397V5.16129H6.77429V6.45161ZM17.0969 6.45161H8.06461V5.16129H17.0969V6.45161ZM6.77429 9.03226H5.48397V7.74194H6.77429V9.03226ZM17.0969 9.03226H8.06461V7.74194H17.0969V9.03226ZM23.5485 3.87097H22.2582V2.58065H23.5485V3.87097ZM26.1291 3.87097H24.8388V2.58065H26.1291V3.87097ZM28.7098 3.87097H27.4195V2.58065H28.7098V3.87097Z" fill="CurrentColor"></path>
                      </g>
                      <defs>
                        <clippath id="clip0_9088_5440">
                          <rect width="40" height="40" fill="CurrentColor"></rect>
                        </clippath>
                      </defs>
                    </svg>
                  </div>
                  <h2 class="heading text-28">Strategy & Leadership Advisory
                  </h2>
                  <div class="text text-16">
                    Guiding leaders and institutions to thrive in times of disruption. We provide clear strategies, innovative models, and practical guidance to support growth, expansion, and long-term success.


                  </div>
               
                </a>
              </div>
              <div class="col-xl-6 col-md-6 col-12" data-aos="fade-up" id="training">
                <a class="multicolumn-card" href="/service-details" aria-label="View Service Details">
                  <div class="card-icon">
                    <svg class="icon-40" width="40" height="40" viewbox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <g clip-path="url(#clip0_9105_30181)">
                        <path d="M3.09175 23.9688C3.38125 24.0267 3.72285 23.8004 3.78143 23.5099C3.79042 23.4654 4.71851 18.9998 8.11233 14.1991C10.0981 11.3901 12.5294 9.01514 15.3386 7.14012C18.7079 4.89132 22.6379 3.35744 27.0271 2.57581L26.548 3.30502C26.1455 3.91761 27.091 4.61245 27.5272 3.94839L28.7319 2.11477C28.9001 1.79747 28.8439 1.52687 28.5631 1.30292L26.7263 0.1004C26.0926 -0.314863 25.4508 0.665803 26.0845 1.08068L26.6527 1.45274C22.1593 2.27421 18.1277 3.86387 14.6601 6.18422C11.7284 8.14586 9.19338 10.6292 7.12542 13.5653C3.60466 18.5641 2.67055 23.0895 2.63251 23.2797C2.56908 23.5968 2.77468 23.9051 3.09175 23.9688Z" fill="CurrentColor"></path>
                        <path d="M35.5768 30.0864V26.3214C35.5768 25.9977 35.3145 25.7355 34.9909 25.7355H31.1417V7.82806C31.1417 7.50442 30.8794 7.24219 30.5558 7.24219H23.0685C22.745 7.24219 22.4827 7.50442 22.4827 7.82806V13.9723H15.5752C15.2517 13.9723 14.9893 14.2345 14.9893 14.5581V20.715H8.08187C7.75831 20.715 7.496 20.9772 7.496 21.3009V26.604H0.588448C0.264892 26.604 0.00257874 26.8662 0.00257874 27.1899V33.0497C0.00257874 33.3733 0.264892 33.6356 0.588448 33.6356H2.66578C3.42327 33.6356 3.42327 32.4638 2.66578 32.4638H1.17432V27.7757H7.48983V32.4638H5.78385C5.02637 32.4638 5.02637 33.6356 5.78385 33.6356H17.74V39.4112C17.74 39.7349 18.0023 39.9971 18.3259 39.9971H34.9909C34.9944 39.9971 34.9979 39.9966 35.0014 39.9966C35.0083 39.9966 35.0152 39.9971 35.0221 39.9971C35.8983 39.9971 36.7612 39.765 37.5175 39.326C38.1727 38.9457 37.5846 37.9327 36.9293 38.3126C36.3514 38.648 35.692 38.8253 35.0221 38.8253C32.9249 38.8253 31.2187 37.1209 31.2187 35.0258C31.2187 32.9307 32.9249 31.2264 35.0221 31.2264C37.1194 31.2264 38.8256 32.9307 38.8256 35.0258C38.8256 35.4766 38.7474 35.9177 38.5931 36.3369C38.3314 37.0478 39.431 37.4525 39.6927 36.7417C39.8948 36.1925 39.9973 35.6152 39.9973 35.0258C39.9973 32.4722 38.0599 30.363 35.5768 30.0864ZM32.1489 30.9714H27.2443V29.5252H34.405V30.0944C33.5718 30.1979 32.8024 30.5077 32.1489 30.9714ZM26.0725 32.1432V33.5894H18.9118V32.1432H26.0725ZM18.9118 34.7611H26.0725V36.2074H18.9118V34.7611ZM27.2443 34.7611H30.0542C30.0289 35.2406 30.0762 35.7421 30.1901 36.2074H27.2443V34.7611ZM30.2596 33.5893H27.2443V32.1431H30.9728C30.6614 32.5786 30.4182 33.0656 30.2596 33.5893ZM34.405 28.3535H27.2443V26.9072H30.4803C30.5051 26.9104 30.5302 26.9126 30.5559 26.9126C30.5816 26.9126 30.6066 26.9104 30.6315 26.9072H34.4051V28.3535H34.405ZM29.9699 8.41393V25.7355H26.6584C26.3348 25.7355 26.0725 25.9977 26.0725 26.3214V28.9393V30.9714H23.6544V8.41393H29.9699ZM14.9832 32.4638H8.66774V21.8868H14.9832V32.4638ZM16.1611 32.4638V15.144H22.4766V30.9714H18.3259C18.0023 30.9714 17.74 31.2336 17.74 31.5572V32.4638L16.1611 32.4638ZM26.0725 38.8254H18.9118V37.3791H26.0725V38.8254ZM27.2443 38.8254V37.3791H30.6409C30.9399 37.9326 31.3412 38.4227 31.8187 38.8254H27.2443Z" fill="CurrentColor"></path>
                        <path d="M34.9994 38.1165C35.323 38.1165 35.5853 37.8543 35.5853 37.5307V37.3316C36.0858 37.1309 36.4641 36.6834 36.558 36.1243C36.6788 35.4046 36.2892 34.7549 35.5884 34.5076C35.2944 34.4038 34.842 34.3332 34.7475 34.1256C34.7005 34.0223 34.7709 33.9302 34.8721 33.8754C35.1535 33.7906 35.3323 33.9262 35.3517 33.9421C35.3434 33.9354 35.3394 33.9312 35.3394 33.9312C35.3394 33.9312 35.8569 34.2362 36.1505 33.9426C36.6973 33.3958 36.133 33.0691 36.133 33.0691C36.0213 32.9662 35.8307 32.8438 35.5853 32.7632V32.6306C35.5853 31.8731 34.4135 31.8731 34.4135 32.6306V32.7971C33.9923 32.9702 33.6833 33.3518 33.595 33.8212C33.5049 34.2998 33.6658 34.7669 34.015 35.0403C34.3307 35.2876 34.7703 35.4615 35.1985 35.6125C35.3027 35.6493 35.4373 35.7222 35.4024 35.9302C35.3811 36.0573 35.2713 36.2729 34.9956 36.2747C34.6716 36.2768 34.6026 36.2662 34.3712 36.1151C34.1003 35.9382 33.7373 36.0144 33.5604 36.2853C33.3834 36.5563 33.4596 36.9193 33.7305 37.0962C33.9871 37.2638 34.1945 37.354 34.4135 37.4007V37.5306C34.4135 37.8543 34.6759 38.1165 34.9994 38.1165Z" fill="CurrentColor"></path>
                      </g>
                      <defs>
                        <clippath id="clip0_9105_30181">
                          <rect width="40" height="40" fill="CurrentColor"></rect>
                        </clippath>
                      </defs>
                    </svg>
                  </div>
                  <h2 class="heading text-28">Training & Capacity Building
                  </h2>
                  <div class="text text-16">
                    Equipping leaders and teams with the skills to thrive in disruption. We deliver practical training, leadership workshops, and data-driven learning programs tailored to strengthen decision-making, strategy, and organizational growth.


                  </div>
           
                </a>
              </div>
        
            </div>
          </div>
        </div>
      </div>

      <!-- Industries We Serve -->
      <div id="industries" class="industries-section mt-100">
        <div class="container">
          <div class="industries-header text-center" data-aos="fade-up">
            <h2 class="heading text-48" style="color: #2b999f; margin-bottom: 20px;">INDUSTRIES WE SERVE</h2>
            <p class="text text-18" style="max-width: 800px; margin: 0 auto 50px; color: #5f6b6b;">
              229 Consulting works across diverse industries, helping organizations respond to disruption, seize opportunities, and sustain growth.
            </p>
          </div>
          
          <div class="industries-grid">
            <div class="row g-3">
              <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="industry-card">
                  <div class="industry-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect>
                      <line x1="1" y1="10" x2="23" y2="10"></line>
                    </svg>
                  </div>
                  <h3 class="heading text-20">Financial Services</h3>
                  <p class="text text-14">Banking, fintech, and investment firms navigating digital transformation and market expansion.</p>
                </div>
              </div>

              <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="150">
                <div class="industry-card">
                  <div class="industry-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                      <polyline points="9 22 9 12 15 12 15 22"></polyline>
                    </svg>
                  </div>
                  <h3 class="heading text-20">Real Estate & Infrastructure</h3>
                  <p class="text text-14">Developers and construction firms driving urban growth and mega projects.</p>
                </div>
              </div>

              <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="industry-card">
                  <div class="industry-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <circle cx="12" cy="12" r="5"></circle>
                      <line x1="12" y1="1" x2="12" y2="3"></line>
                      <line x1="12" y1="21" x2="12" y2="23"></line>
                      <line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line>
                      <line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line>
                      <line x1="1" y1="12" x2="3" y2="12"></line>
                      <line x1="21" y1="12" x2="23" y2="12"></line>
                      <line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line>
                      <line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line>
                    </svg>
                  </div>
                  <h3 class="heading text-20">Energy & Utilities</h3>
                  <p class="text text-14">Renewable energy, oil & gas, and power companies seeking sustainable, scalable strategies.</p>
                </div>
              </div>

              <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="250">
                <div class="industry-card">
                  <div class="industry-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                      <path d="M9 22V12h6v10"></path>
                    </svg>
                  </div>
                  <h3 class="heading text-20">Public Sector & Government</h3>
                  <p class="text text-14">Ministries, agencies, and institutions focused on policy reform, public service delivery, and impact measurement.</p>
                </div>
              </div>

              <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="industry-card">
                  <div class="industry-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect>
                      <line x1="8" y1="21" x2="16" y2="21"></line>
                      <line x1="12" y1="17" x2="12" y2="21"></line>
                    </svg>
                  </div>
                  <h3 class="heading text-20">Technology & Innovation</h3>
                  <p class="text text-14">Startups and established players shaping the future of digital ecosystems.</p>
                </div>
              </div>

              <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="350">
                <div class="industry-card">
                  <div class="industry-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                    </svg>
                  </div>
                  <h3 class="heading text-20">Healthcare</h3>
                  <p class="text text-14">Governments and institutions pioneering last-mile initiatives to improve healthcare access and outcomes.</p>
                </div>
              </div>

              <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="industry-card">
                  <div class="industry-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path>
                      <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path>
                    </svg>
                  </div>
                  <h3 class="heading text-20">Education</h3>
                  <p class="text text-14">Schools and regulators pioneering transformative learning to prepare students and teachers for the future.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </main>

    <!-- Footer -->
    <footer id="contact" class="mt-100">
      <!-- Footer Contact Form -->
      <div class="footer-contact bg-contain" style="background-image: url({{ asset('assets/img/contact/contact-bg.jpg') }})">
        <div class="container">
          <div class="contact-box radius18">
            <div class="row">
              <div class="col-12 col-lg-6">
                <div class="contact-media overlay" data-aos="fade-right" data-aos-anchor=".contact-box">
                  <img src="{{ asset('assets/img/contact/contact.jpg') }}" alt="contact image" width="1290" height="1400" loading="lazy">
                </div>
              </div>
              <div class="col-12 col-lg-6">
                <div class="contact-form-wrap">
                  <div class="contact-box-headings section-headings">
                    <div class="subheading text-20 subheading-bg" data-aos="fade-up" data-aos-anchor=".contact-box">
                      <svg class="icon icon-14" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewbox="0 0 14 14" fill="none">
                        <g clip-path="url(#clip0_9088_4143)">
                          <path d="M8.71401 5.28599C11.7514 5.4205 14 5.9412 14 7C14 8.0588 11.7514 8.5795 8.71401 8.71401C8.5795 11.7514 8.0588 14 7 14C5.9412 14 5.4205 11.7514 5.28599 8.71401C2.2486 8.5795 -1.33117e-07 8.0588 0 7C4.62818e-08 5.94119 2.2486 5.4205 5.28599 5.28599C5.4205 2.2486 5.9412 0 7 0C8.0588 0 8.5795 2.2486 8.71401 5.28599Z" fill="CurrentColor"></path>
                        </g>
                        <defs>
                          <clippath>
                            <rect width="14" height="14" fill="CurrentColor"></rect>
                          </clippath>
                        </defs>
                      </svg>
                      <span>Contact Us</span>
                      <svg class="icon icon-14" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewbox="0 0 14 14" fill="none">
                        <g clip-path="url(#clip0_9088_4143)">
                          <path d="M8.71401 5.28599C11.7514 5.4205 14 5.9412 14 7C14 8.0588 11.7514 8.5795 8.71401 8.71401C8.5795 11.7514 8.0588 14 7 14C5.9412 14 5.4205 11.7514 5.28599 8.71401C2.2486 8.5795 -1.33117e-07 8.0588 0 7C4.62818e-08 5.94119 2.2486 5.4205 5.28599 5.28599C5.4205 2.2486 5.9412 0 7 0C8.0588 0 8.5795 2.2486 8.71401 5.28599Z" fill="CurrentColor"></path>
                        </g>
                        <defs>
                          <clippath>
                            <rect width="14" height="14" fill="CurrentColor"></rect>
                          </clippath>
                        </defs>
                      </svg>
                    </div>
                    <h2 class="heading text-50" data-aos="fade-up" data-aos-delay="50" data-aos-anchor=".contact-box">
                      Ready to Transform Your Organization?
                    </h2>
                    <p class="text text-18" data-aos="fade-up" data-aos-delay="80" data-aos-anchor=".contact-box">
                      Whether you need AI adoption strategies, public sector consulting, leadership development, or capacity building programs, we're here to help you achieve your goals.
                    </p>
                  </div>
                  <form action="mailto:info@229consulting.com?subject=Consultation Request" method="post" enctype="text/plain" class="form contact-form">
                    <div class="field w-half" data-aos="fade-right" data-aos-anchor=".contact-form-wrap">
                      <label for="ContactForm-name" class="visually-hidden">
                        Your Name
                      </label>
                      <input id="ContactForm-name" class="text text-16" type="text" placeholder="Your Name*" name="name" required="">
                    </div>
                    <div class="field w-half" data-aos="fade-left" data-aos-anchor=".contact-form-wrap">
                      <label for="ContactForm-email" class="visually-hidden">
                        Your Email
                      </label>
                      <input id="ContactForm-email" class="text text-16" type="text" placeholder="Your Email*" name="email" required="">
                    </div>
                    <div class="field" data-aos="fade-up" data-aos-anchor=".contact-form-wrap">
                      <label for="ContactForm-body" class="visually-hidden">
                        Write your message
                      </label>
                      <textarea id="ContactForm-body" class="text text-16" rows="4" placeholder="Tell us about your project or challenges*" name="message" required=""></textarea>
                    </div>
                    <div class="form-button" data-aos="fade-up" data-aos-anchor=".contact-form-wrap">
                      <button type="submit" class="button button--primary" aria-label="Start Your Digital Transformation">
                        Start Your Transformation
                        <span class="svg-wrapper">
                          <svg class="icon-20" width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13.3365 7.84518L6.16435 15.0173L4.98584 13.8388L12.158 6.66667H5.83652V5H15.0032V14.1667H13.3365V7.84518Z" fill="currentColor"></path>
                          </svg>
                        </span>
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Footer Main -->
      <div class="footer-main bg-contain"
      style="background: linear-gradient(135deg, #1C2539 0%, #2a3548 100%); background-image: url({{ asset('assets/img/footer/footer.png') }}); background-blend-mode: overlay; ">
      <div class="footer-top" style="padding-bottom: 30px;">
          <div class="container">
            <div class="row footer-custom-row">
              <div class="col-12 col-md-6">
                <div class="footer-widget footer-widget-brand" data-aos="fade-up" data-aos-anchor=".footer-top">
                  <a class="footer-logo" href="/" aria-label="229 Consulting Logo"
                  style="display: inline-block; background: white;  border-radius: 8px;">
                  <img src="{{ asset('assets/img/consulting_logo.png') }}" alt="229 Consulting Logo"
                    style="max-width: 150px; height: auto;" loading="lazy">
                  </a>
                  <p class="text text-16">
                  229 Consulting delivers actionable strategy and execution support to organizations navigating
                  disruption, growth, and transformation. Beyond pitch decks—we carry the work forward until it
                  translates into real outcomes.
                  </p>
                  <ul class="social-icons list-unstyled" data-aos="fade-up" data-aos-anchor=".footer-top">
                    <li>
                      <a class="social-link text" href="https://web.facebook.com">
                        <svg width="10" height="18" viewbox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M6.66634 10.2552H8.74967L9.58301 6.92188H6.66634V5.25521C6.66634 4.39739 6.66634 3.58854 8.33301 3.58854H9.58301V0.788625C9.31159 0.752583 8.28551 0.671875 7.20209 0.671875C4.94001 0.671875 3.33301 2.05259 3.33301 4.5883V6.92188H0.833008V10.2552H3.33301V17.3385H6.66634V10.2552Z" fill="currentColor"></path>
                        </svg>
                        <span class="visually-hidden">Facebook</span>
                      </a>
                    </li>
                    <li>
                      <a class="social-link text" href="https://www.linkedin.com/">
                        <svg width="17" height="16" viewbox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M3.78357 2.16742C3.78326 2.84601 3.37157 3.45666 2.74262 3.71142C2.11367 3.96619 1.39306 3.81419 0.920587 3.32711C0.448112 2.84001 0.318129 2.11511 0.59192 1.49421C0.86572 0.873305 1.48862 0.480397 2.1669 0.500755C3.0678 0.527797 3.78398 1.26612 3.78357 2.16742ZM3.83357 5.06742H0.500237V15.5007H3.83357V5.06742ZM9.10025 5.06742H5.78357V15.5007H9.06692V10.0257C9.06692 6.97573 13.0419 6.6924 13.0419 10.0257V15.5007H16.3336V8.8924C16.3336 3.75075 10.4503 3.94242 9.06692 6.4674L9.10025 5.06742Z" fill="currentColor"></path>
                        </svg>
                        <span class="visually-hidden">Linkedin</span>
                      </a>
                    </li>
                    <li>
                      <a class="social-link text" href="https://x.com/">
                        <svg width="18" height="14" viewbox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M17.5104 1.71289C16.8743 1.9943 16.1996 2.17914 15.5088 2.26127C16.2366 1.82561 16.7812 1.14026 17.0411 0.332886C16.3573 0.739186 15.6088 1.02515 14.8282 1.17835C14.1693 0.475394 13.2483 0.0770356 12.2848 0.0781272C10.3605 0.0781272 8.79975 1.63835 8.79975 3.56354C8.79975 3.83666 8.83109 4.10153 8.88967 4.35709C5.99206 4.21121 3.42506 2.82455 1.70565 0.715686C1.39608 1.24757 1.23338 1.85216 1.2342 2.46757C1.2342 3.67667 1.84967 4.74388 2.78458 5.36868C2.23115 5.35118 1.6899 5.20171 1.20599 4.93262C1.20545 4.94726 1.20545 4.9619 1.20545 4.97574C1.20545 6.66484 2.40683 8.07384 4.00166 8.39376C3.70234 8.47476 3.3936 8.51568 3.08352 8.51543C2.85831 8.51543 2.63976 8.49468 2.42733 8.45393C2.8711 9.83826 4.15739 10.8461 5.683 10.8738C4.44845 11.8427 2.92391 12.3683 1.35453 12.3661C1.07677 12.3663 0.799246 12.3499 0.523438 12.3171C2.1167 13.3413 3.97127 13.8849 5.86535 13.8829C12.2763 13.8829 15.7817 8.57243 15.7817 3.9671C15.7817 3.81643 15.778 3.66523 15.7713 3.51615C16.4536 3.02322 17.0425 2.41257 17.5104 1.71289Z" fill="currentColor"></path>
                        </svg>
                        <span class="visually-hidden">Twitter</span>
                      </a>
                    </li>
                    <li>
                      <a class="social-link text" href="https://www.instagram.com/">
                        <svg width="18" height="18" viewbox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M9.85724 0.671875C10.7951 0.673425 11.2703 0.678392 11.681 0.690617L11.8427 0.6959C12.0296 0.702542 12.2139 0.710875 12.4362 0.721292C13.3229 0.762267 13.9278 0.902542 14.4591 1.10879C15.0083 1.3206 15.4722 1.60671 15.9354 2.06991C16.3979 2.5331 16.6841 2.99837 16.8966 3.54629C17.1021 4.07685 17.2424 4.68241 17.2841 5.56921C17.294 5.79143 17.302 5.97577 17.3086 6.16263L17.3138 6.32437C17.326 6.73499 17.3316 7.21032 17.3333 8.14818L17.334 8.76952C17.3341 8.84543 17.3341 8.92377 17.3341 9.0046L17.334 9.23968L17.3335 9.8611C17.3319 10.7989 17.327 11.2743 17.3147 11.6848L17.3094 11.8466C17.3028 12.0335 17.2945 12.2178 17.2841 12.44C17.2431 13.3268 17.1021 13.9317 16.8966 14.4629C16.6847 15.0123 16.3979 15.4762 15.9354 15.9393C15.4722 16.4018 15.0062 16.6879 14.4591 16.9004C13.9278 17.106 13.3229 17.2463 12.4362 17.2879C12.2139 17.2978 12.0296 17.3059 11.8427 17.3124L11.681 17.3177C11.2703 17.3299 10.7951 17.3354 9.85724 17.3373L9.23582 17.3379C9.1599 17.3379 9.08157 17.3379 9.00074 17.3379H8.76565L8.14424 17.3373C7.2064 17.3358 6.73109 17.3309 6.32046 17.3186L6.15873 17.3134C5.97185 17.3067 5.78752 17.2983 5.5653 17.2879C4.67849 17.247 4.07433 17.106 3.54239 16.9004C2.99377 16.6887 2.52919 16.4018 2.06599 15.9393C1.6028 15.4762 1.31739 15.0102 1.10489 14.4629C0.898636 13.9317 0.759052 13.3268 0.717386 12.44C0.707486 12.2178 0.69941 12.0335 0.692869 11.8466L0.687627 11.6848C0.675435 11.2743 0.669877 10.7989 0.668077 9.8611L0.667969 8.14818C0.669519 7.21032 0.674477 6.73499 0.686702 6.32437L0.691994 6.16263C0.698635 5.97577 0.706969 5.79143 0.717386 5.56921C0.758352 4.68171 0.898636 4.07754 1.10489 3.54629C1.31669 2.99768 1.6028 2.5331 2.06599 2.06991C2.52919 1.60671 2.99447 1.32129 3.54239 1.10879C4.07364 0.902542 4.6778 0.762958 5.5653 0.721292C5.78752 0.7114 5.97185 0.703325 6.15873 0.696783L6.32046 0.691542C6.73109 0.679342 7.2064 0.673783 8.14424 0.671983L9.85724 0.671875ZM9.00074 4.83796C6.6983 4.83796 4.83405 6.70423 4.83405 9.0046C4.83405 11.307 6.70033 13.1713 9.00074 13.1713C11.3032 13.1713 13.1674 11.305 13.1674 9.0046C13.1674 6.70221 11.3011 4.83796 9.00074 4.83796ZM9.00074 6.50462C10.3815 6.50462 11.5007 7.62352 11.5007 9.0046C11.5007 10.3853 10.3818 11.5046 9.00074 11.5046C7.61999 11.5046 6.50072 10.3858 6.50072 9.0046C6.50072 7.62385 7.61957 6.50462 9.00074 6.50462ZM13.3757 3.58796C12.8013 3.58796 12.3341 4.05455 12.3341 4.62892C12.3341 5.20329 12.8007 5.6706 13.3757 5.6706C13.9501 5.6706 14.4174 5.20402 14.4174 4.62892C14.4174 4.05455 13.9493 3.58724 13.3757 3.58796Z" fill="currentColor"></path>
                        </svg>
                        <span class="visually-hidden">Instagram</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-12 col-md-6">
                <div class="footer-widget footer-widget-menu" data-aos="fade-up" data-aos-anchor=".footer-top">
                  <div class="widget-heading heading text-22">Quick Link</div>
                  <ul class="footer-menu list-unstyled">
                    <li>
                      <a href="/about" class="text text-16 link" aria-label="About Us">
                        About Us
                      </a>
                    </li>
                    <li>
                      <a href="/team" class="text text-16 link" aria-label="Our Team">
                        Our Team
                      </a>
                    </li>
                  
                    <li>
                      <a href="/blogs" class="text text-16 link" aria-label="Blogs">
                        Blogs
                      </a>
                    </li>
                    <li>
                      <a href="#contact" class="text text-16 link" aria-label="Contact">
                        Contact Us
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-12 col-md-6">
                <div class="footer-widget footer-widget-menu" data-aos="fade-up" data-aos-anchor=".footer-top">
                  <div class="widget-heading heading text-22">Services</div>
                  <ul class="footer-menu list-unstyled">
                    <li>
                      <a href="/services" class="text text-16 link" aria-label="GenAI Adoption for Institutions">
                        GenAI Adoption for Institutions
                      </a>
                    </li>
                    <li>
                      <a href="/services" class="text text-16 link" aria-label="Public Sector & Development Consulting">
                        Public Sector & Development Consulting
                      </a>
                    </li>
                    <li>
                      <a href="/services" class="text text-16 link" aria-label="Strategy & Leadership Advisory">
                        Strategy & Leadership Advisory
                      </a>
                    </li>
                    <li>
                      <a href="/services" class="text text-16 link" aria-label="Training & Capacity Building">
                        Training & Capacity Building
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-12 col-md-6">
                <div class="footer-widget footer-widget-menu" data-aos="fade-up" data-aos-anchor=".footer-top">
                  <div class="widget-heading heading text-22">Information</div>
                  <ul class="footer-menu list-unstyled">
                    <li>
                      <a href="/about" class="text text-16 link" aria-label="Working Process">
                        Working Process
                      </a>
                    </li>
                    <li>
                      <a href="/privacy-policy" class="text text-16 link" aria-label="Privacy Policy">
                        Privacy Policy
                      </a>
                    </li>
                    <li>
                      <a href="" class="text text-16 link" aria-label="Terms & Conditions">
                        Terms & Conditions
                      </a>
                    </li>
                    <li>
                      <a href="/faq" class="text text-16 link" aria-label="FAQ">
                        Faqs
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="footer-bottom"
        style="background: rgba(0,0,0,0.3); margin-top: 0; padding: 20px 0; border-top: 1px solid rgba(255,255,255,0.1); width: 100%;">
        <div class="container-fluid">
          <div class="row footer-bottom-row" style="align-items: center;">
              <div class="col-12 col-md-6 col-lg-6">
              <div class="footer-copyright text text-16" style="margin: 0;">
                Copyright ©<span class="current-year"></span> 229 Consulting. All rights reserved.
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-6">
              <ul class="footer-menu footer-policies list-unstyled" style="margin: 0;">
                  <li>
                    <a href="/privacy-policy" class="text text-16 link" aria-label="Privacy Policy">
                      Privacy Policy
                    </a>
                  </li>
                  <li>
                    <a href="/faq" class="text text-16 link" aria-label="FAQ">
                      Faqs
                    </a>
                  </li>
                  <li>
                  <a href="/contact" class="text text-16 link" aria-label="Contact">
                      Contact
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- Modal and Drawer Overlay -->
    <drawer-opener id="drawer-overlay"></drawer-opener>

    <!-- Scroll to Top Button -->
    <scroll-top>
      <div class="scroll-to-top">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 15.75 7.5-7.5 7.5 7.5"></path>
        </svg>
      </div>
    </scroll-top>

    <!-- all js -->
    <script src="{{ asset('assets/js/vendor.js') }}" defer=""></script>
    <script src="{{ asset('assets/js/main.js') }}" defer=""></script>
  </body>
</html>
