@php
    use Firefly\FilamentBlog\Models\Post;
    $latestPosts = Post::published()->latest('published_at')->take(3)->get();
@endphp
<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <title>229 Consulting - Real Strategy, Real Outcomes.</title>
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}" type="image/x-icon">

    <!-- meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="view-transition" content="same-origin">
    <meta name="theme-color" content="#1e40af">
    <meta name="description"
        content="229 Consulting delivers actionable strategy and execution support to organizations navigating disruption, growth, and transformation. Beyond pitch decks—we carry the work forward until it translates into real outcomes.">
    <meta name="keywords"
        content="business consulting, consulting,strategy,development,leadership, GenAI adoption, training, capacity building, execution, transformation, growth, disruption, organizational development">
    <meta property="og:site_name" content="229 Consulting">
    <meta property="og:title" content="229 Consulting - Real Strategy, Real Outcomes.">
    <meta property="og:description"
        content="Beyond Theory. Beyond Pitch Decks. We deliver actionable strategy and execution support to organizations navigating disruption, growth, and transformation.">
    <meta property="og:type" content="website">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="229 Consulting - Real Strategy, Real Outcomes.">
    <meta name="twitter:description"
        content="Beyond Theory. Beyond Pitch Decks. We deliver actionable strategy and execution support.">

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- all css -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendor.css') }}">
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
            --color-border: rgba(255, 255, 255, 0.2);
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
            --swiper-navigation-size: 14px;
            --swiper-navigation-color: rgba(28, 37, 57, 1);
            --swiper-navigation-background-color: rgba(242, 242, 242, 1);
            --swiper-navigation-hover-color: rgba(28, 37, 57, 1);
            --swiper-navigation-hover-background-color: transparent;
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
                --swiper-navigation-size: 12px;
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
                                    <a class="menu-link menu-link-main menu-accrodion active" href="/"
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
                                    <a class="menu-link menu-link-main" href="/services">
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
                <img src="{{ asset('assets/img/consulting_logo.png') }}" alt="229 Consulting Logo" width="auto"
                    height="100" loading="lazy">
            </a>
            <drawer-opener class="svg-wrapper menu-close" data-drawer=".drawer-additional">
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
        <div class="drawer-content">
            <div class="drawer-block">
                <div class="drawer-heading text text-18">Our Services</div>
                <ul class="drawer-additional-menu list-unstyled flex-direction-column">
                    <li class="nav-item">
                        <a class="menu-link" href="/services">GenAI Adoption for Institutions
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="menu-link" href="/services">Public Sector & Development Consulting</a>
                    </li>
                    <li class="nav-item">
                        <a class="menu-link" href="/services">Strategy & Leadership Advisory</a>
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
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor">
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
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M14.25 9.75v-4.5m0 4.5h4.5m-4.5 0 6-6m-3 18c-8.284 0-15-6.716-15-15V4.5A2.25 2.25 0 0 1 4.5 2.25h1.372c.516 0 .966.351 1.091.852l1.106 4.423c.11.44-.054.902-.417 1.173l-1.293.97a1.062 1.062 0 0 0-.38 1.21 12.035 12.035 0 0 0 7.143 7.143c.441.162.928-.004 1.21-.38l.97-1.293a1.125 1.125 0 0 1 1.173-.417l4.423 1.106c.5.125.852.575.852 1.091V19.5a2.25 2.25 0 0 1-2.25 2.25h-2.25Z">
                                </path>
                            </svg>
                            Nigeria: +234 809 638 2607
                            <br>
                            England: +44 773 377 7013 </a>
                    </li>
                    <li class="nav-item">
                        <a class="menu-link" href="mailto:info@229consult.com">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor">
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
    </div>

    <!-- Main -->
    <main>
        <!-- Hero Banner -->
        <div class="hero-banner with-floating-header">
            <div class="media media-bg">
                <img src="{{ asset('assets/img/slider/slider-bg.jpg') }}" alt="slider background" width="1920"
                    height="1000" loading="eager">
            </div>
            <div class="particles">
                <div class="particle"></div>
                <div class="particle"></div>
                <div class="particle"></div>
                <div class="particle"></div>
                <div class="particle"></div>
                <div class="particle"></div>
            </div>
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-12">
                        <div class="content section-headings">
                            <div class="subheading text-20 subheading-bg" data-aos="fade-up">
                                <svg class="icon icon-14" xmlns="http://www.w3.org/2000/svg" width="14"
                                    height="14" viewbox="0 0 14 14" fill="none">
                                    <g clip-path="url(#clip0_9088_4143)">
                                        <path
                                            d="M8.71401 5.28599C11.7514 5.4205 14 5.9412 14 7C14 8.0588 11.7514 8.5795 8.71401 8.71401C8.5795 11.7514 8.0588 14 7 14C5.9412 14 5.4205 11.7514 5.28599 8.71401C2.2486 8.5795 -1.33117e-07 8.0588 0 7C4.62818e-08 5.94119 2.2486 5.4205 5.28599 5.28599C5.4205 2.2486 5.9412 0 7 0C8.0588 0 8.5795 2.2486 8.71401 5.28599Z"
                                            fill="CurrentColor"></path>
                                    </g>
                                    <defs>
                                        <clippath>
                                            <rect width="14" height="14" fill="CurrentColor"></rect>
                                        </clippath>
                                    </defs>
                                </svg>
                                <span>Beyond Theory. Beyond Pitch Decks.</span>
                                <svg class="icon icon-14" xmlns="http://www.w3.org/2000/svg" width="14"
                                    height="14" viewbox="0 0 14 14" fill="none">
                                    <g clip-path="url(#clip0_9088_4143)">
                                        <path
                                            d="M8.71401 5.28599C11.7514 5.4205 14 5.9412 14 7C14 8.0588 11.7514 8.5795 8.71401 8.71401C8.5795 11.7514 8.0588 14 7 14C5.9412 14 5.4205 11.7514 5.28599 8.71401C2.2486 8.5795 -1.33117e-07 8.0588 0 7C4.62818e-08 5.94119 2.2486 5.4205 5.28599 5.28599C5.4205 2.2486 5.9412 0 7 0C8.0588 0 8.5795 2.2486 8.71401 5.28599Z"
                                            fill="CurrentColor"></path>
                                    </g>
                                    <defs>
                                        <clippath>
                                            <rect width="14" height="14" fill="CurrentColor"></rect>
                                        </clippath>
                                    </defs>
                                </svg>
                            </div>
                            <h2 class="heading text-80 fw-700" data-aos="fade-up" data-aos-delay="100">
                                Turning Disruption <br>into
                                <span class="decorated-text"><span>Growth</span></span>

                            </h2>
                            <div class="text text-18" data-aos="fade-up" data-aos-delay="150">
                                We prepare institutions to thrive in rapidly changing business, digital, or political
                                landscapes,
                                preserving their momentum, driving change, turning disruption into growth.
                            </div>
                            <div class="hero-button-wrap buttons" data-aos="fade-up" data-aos-delay="200">
                                <a href="/services" class="button button--primary" aria-label="hero button">
                                    Book a Consultation
                                    <span class="svg-wrapper">
                                        <svg class="icon-20" width="20" height="20" viewbox="0 0 20 20"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M13.3365 7.84518L6.16435 15.0173L4.98584 13.8388L12.158 6.66667H5.83652V5H15.0032V14.1667H13.3365V7.84518Z"
                                                fill="currentColor"></path>
                                        </svg>
                                    </span>
                                </a>
                                <a href="/services" class="button button--secondary" aria-label="hero button">
                                    Partner With Us
                                    <span class="svg-wrapper">
                                        <svg class="icon-20" width="20" height="20" viewbox="0 0 20 20"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M13.3365 7.84518L6.16435 15.0173L4.98584 13.8388L12.158 6.66667H5.83652V5H15.0032V14.1667H13.3365V7.84518Z"
                                                fill="currentColor"></path>
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <banner-slider class="banner-slider">
                            <div class="banner-badge svg-wrapper" data-aos="fade-right">
                                <svg class="infinite-rotate" viewbox="0 0 176 176" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M176 88C176 136.601 136.601 176 88 176C39.3989 176 0 136.601 0 88C0 39.3989 39.3989 0 88 0C136.601 0 176 39.3989 176 88Z"
                                        fill="white"></path>
                                    <defs>
                                        <path id="textcircle" d="M88,163 a75,75 0 0,1 0,-150 a75,75 0 0,1 0,150Z"
                                            transform="rotate(12,88,88)" />
                                    </defs>
                                    <text fill="black"
                                        style="font-size: 12px; font-weight: bold; font-family: sans-serif;">
                                        <textPath xlink:href="#textcircle" textLength="471">
                                            • Real Strategy, Real Outcomes • Real Strategy, Real Outcomes
                                        </textPath>
                                    </text>
                                    <path
                                        d="M88 132L81.6588 100.294L63.7999 112.2L75.7058 94.3411L44 88L75.7058 81.6588L63.7999 63.7999L81.6588 75.7059L88 44L94.3411 75.7058L112.2 63.7999L100.294 81.6588L132 88L100.294 94.3412L112.2 112.2L94.3412 100.294L88 132Z"
                                        fill="#20282D"></path>
                                </svg>
                            </div>
                            <div class="main-slider" data-aos="fade-down">
                                <div class="swiper">
                                    <div class="swiper-wrapper">
                                        <!-- Slides -->
                                        <div class="swiper-slide">
                                            <div class="main-img">
                                                <img src="{{ asset('assets/img/slider/bg1.jpg') }}" width="992"
                                                    height="717" loading="eager" alt="Image">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="main-img">
                                                <img src="{{ asset('assets/img/slider/bg4.jpg') }}" width="992"
                                                    height="717" loading="lazy" alt="Image">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="main-img">
                                                <img src="{{ asset('assets/img/slider/bg3.jpg') }}" width="992"
                                                    height="717" loading="lazy" alt="Image">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="main-img">
                                                <img src="{{ asset('assets/img/slider/s2.jpg') }}" width="992"
                                                    height="717" loading="lazy" alt="Image">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="thumb-slider" data-aos="fade-up">
                                <div class="swiper">
                                    <div class="swiper-wrapper">
                                        <!-- Slides -->
                                        <div class="swiper-slide">
                                            <div class="thumb-img">
                                                <img src="{{ asset('assets/img/slider/bg1sm.jpg') }}" width="160"
                                                    height="140" loading="lazy" alt="Slider image">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="thumb-img">
                                                <img src="{{ asset('assets/img/slider/bg4.jpg') }}" width="160"
                                                    height="140" loading="lazy" alt="Slider image">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="thumb-img">
                                                <img src="{{ asset('assets/img/slider/bg3.jpg') }}" width="160"
                                                    height="140" loading="lazy" alt="Slider image">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="thumb-img">
                                                <img src="{{ asset('assets/img/slider/s2sm.jpg') }}" width="160"
                                                    height="140" loading="lazy" alt="Slider image">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-button-prev">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="14"
                                        viewbox="0 0 16 14" fill="none">
                                        <path d="M7.125 13L1 7M1 7L7.125 1M1 7H15" stroke="CurrentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </div>
                                <div class="swiper-button-next">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="14"
                                        viewbox="0 0 16 14" fill="none">
                                        <path d="M8.875 13L15 7M15 7L8.875 1M15 7H1" stroke="CurrentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </div>
                            </div>
                        </banner-slider>
                    </div>
                </div>
            </div>
        </div>
        <div class="running-content mt-100">
            <div class="container">
                <div class="content-inner">
                    <div class="content-lists running-animation">
                        <div class="content-item">
                            <a href="/about" class="content-link">
                                <img src="{{ asset('assets/img/brand/bg6.png') }}" width="108" height="36"
                                    loading="lazy" alt="Brand Image">
                            </a>
                            <a href="/about" class="content-link">
                                <img src="{{ asset('assets/img/brand/bg5.png') }}" width="108" height="36"
                                    loading="lazy" alt="Brand Image">
                            </a>
                            <a href="/about" class="content-link">
                                <img src="{{ asset('assets/img/brand/bg4.png') }}" width="108" height="36"
                                    loading="lazy" alt="Brand Image">
                            </a>
                            <a href="/about" class="content-link">
                                <img src="{{ asset('assets/img/brand/bg3.png') }}" width="130" height="50"
                                    loading="lazy" alt="Brand Image">
                            </a>
                            <a href="/about" class="content-link">
                                <img src="{{ asset('assets/img/brand/bg2.png') }}" width="108" height="36"
                                    loading="lazy" alt="Brand Image">
                            </a>
                            <a href="/about" class="content-link">
                                <img src="{{ asset('assets/img/brand/bg1.png') }}" width="130" height="50"
                                    loading="lazy" alt="Brand Image">
                            </a>
                        </div>
                        <div class="content-item">
                            <a href="/about" class="content-link">
                                <img src="{{ asset('assets/img/brand/bg6.png') }}" width="108" height="36"
                                    loading="lazy" alt="Brand Image">
                            </a>
                            <a href="/about" class="content-link">
                                <img src="{{ asset('assets/img/brand/bg5.png') }}" width="108" height="36"
                                    loading="lazy" alt="Brand Image">
                            </a>
                            <a href="/about" class="content-link">
                                <img src="{{ asset('assets/img/brand/bg4.png') }}" width="108" height="36"
                                    loading="lazy" alt="Brand Image">
                            </a>
                            <a href="/about" class="content-link">
                                <img src="{{ asset('assets/img/brand/bg3.png') }}" width="130" height="50"
                                    loading="lazy" alt="Brand Image">
                            </a>
                            <a href="/about" class="content-link">
                                <img src="{{ asset('assets/img/brand/bg2.png') }}" width="108" height="36"
                                    loading="lazy" alt="Brand Image">
                            </a>
                            <a href="/about" class="content-link">
                                <img src="{{ asset('assets/img/brand/bg1.png') }}" width="130" height="50"
                                    loading="lazy" alt="Brand Image">
                            </a>
                        </div>
                        <div class="content-item">
                            <a href="/about" class="content-link">
                                <img src="{{ asset('assets/img/brand/bg6.png') }}" width="108" height="36"
                                    loading="lazy" alt="Brand Image">
                            </a>
                            <a href="/about" class="content-link">
                                <img src="{{ asset('assets/img/brand/bg5.png') }}" width="108" height="36"
                                    loading="lazy" alt="Brand Image">
                            </a>
                            <a href="/about" class="content-link">
                                <img src="{{ asset('assets/img/brand/bg4.png') }}" width="108" height="36"
                                    loading="lazy" alt="Brand Image">
                            </a>
                            <a href="/about" class="content-link">
                                <img src="{{ asset('assets/img/brand/bg3.png') }}" width="130" height="50"
                                    loading="lazy" alt="Brand Image">
                            </a>
                            <a href="/about" class="content-link">
                                <img src="{{ asset('assets/img/brand/bg2.png') }}" width="108" height="36"
                                    loading="lazy" alt="Brand Image">
                            </a>
                            <a href="/about" class="content-link">
                                <img src="{{ asset('assets/img/brand/bg1.png') }}" width="130" height="50"
                                    loading="lazy" alt="Brand Image">
                            </a>
                        </div>
                        <div class="content-item">
                            <a href="/about" class="content-link">
                                <img src="{{ asset('assets/img/brand/bg6.png') }}" width="108" height="36"
                                    loading="lazy" alt="Brand Image">
                            </a>
                            <a href="/about" class="content-link">
                                <img src="{{ asset('assets/img/brand/bg5.png') }}" width="108" height="36"
                                    loading="lazy" alt="Brand Image">
                            </a>
                            <a href="/about" class="content-link">
                                <img src="{{ asset('assets/img/brand/bg4.png') }}" width="108" height="36"
                                    loading="lazy" alt="Brand Image">
                            </a>
                            <a href="/about" class="content-link">
                                <img src="{{ asset('assets/img/brand/bg3.png') }}" width="130" height="50"
                                    loading="lazy" alt="Brand Image">
                            </a>
                            <a href="/about" class="content-link">
                                <img src="{{ asset('assets/img/brand/bg2.png') }}" width="108" height="36"
                                    loading="lazy" alt="Brand Image">
                            </a>
                            <a href="/about" class="content-link">
                                <img src="{{ asset('assets/img/brand/bg1.png') }}" width="130" height="50"
                                    loading="lazy" alt="Brand Image">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Image Text -->
        <div id="about" class="image-text mt-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-12">
                        <div class="media-wrap">
                            <img src="{{ asset('assets/img/image-text/img1.png') }}" width="992" height="1000"
                                loading="lazy" alt="Image" data-aos="zoom-in-up">
                            <div class="image-small" data-aos="zoom-in-down"
                                data-aos-anchor-placement="bottom-bottom">
                                <img src="{{ asset('assets/img/image-text/image.png') }}" width="195"
                                    loading="lazy" alt="Image">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12" style="padding-top: 0;">
                        <div class="content section-headings" style="padding-top: 30px;">
                            <div class="subheading text-20 subheading-bg" data-aos="fade-up">
                                <svg class="icon icon-14" xmlns="http://www.w3.org/2000/svg" width="14"
                                    height="14" viewbox="0 0 14 14" fill="none">
                                    <g clip-path="url(#clip0_9088_4143)">
                                        <path
                                            d="M8.71401 5.28599C11.7514 5.4205 14 5.9412 14 7C14 8.0588 11.7514 8.5795 8.71401 8.71401C8.5795 11.7514 8.0588 14 7 14C5.9412 14 5.4205 11.7514 5.28599 8.71401C2.2486 8.5795 -1.33117e-07 8.0588 0 7C4.62818e-08 5.94119 2.2486 5.4205 5.28599 5.28599C5.4205 2.2486 5.9412 0 7 0C8.0588 0 8.5795 2.2486 8.71401 5.28599Z"
                                            fill="CurrentColor"></path>
                                    </g>
                                    <defs>
                                        <clippath>
                                            <rect width="14" height="14" fill="CurrentColor"></rect>
                                        </clippath>
                                    </defs>
                                </svg>
                                <span>Our Company</span>
                                <svg class="icon icon-14" xmlns="http://www.w3.org/2000/svg" width="14"
                                    height="14" viewbox="0 0 14 14" fill="none">
                                    <g clip-path="url(#clip0_9088_4143)">
                                        <path
                                            d="M8.71401 5.28599C11.7514 5.4205 14 5.9412 14 7C14 8.0588 11.7514 8.5795 8.71401 8.71401C8.5795 11.7514 8.0588 14 7 14C5.9412 14 5.4205 11.7514 5.28599 8.71401C2.2486 8.5795 -1.33117e-07 8.0588 0 7C4.62818e-08 5.94119 2.2486 5.4205 5.28599 5.28599C5.4205 2.2486 5.9412 0 7 0C8.0588 0 8.5795 2.2486 8.71401 5.28599Z"
                                            fill="CurrentColor"></path>
                                    </g>
                                    <defs>
                                        <clippath>
                                            <rect width="14" height="14" fill="CurrentColor"></rect>
                                        </clippath>
                                    </defs>
                                </svg>
                            </div>
                            <h2 class="heading text-50" data-aos="fade-up" data-aos-delay="50">
                                Who We Are
                            </h2>
                            <div class="text text-18" data-aos="fade-up" data-aos-delay="80">
                                <p>229 Consulting is a consulting company that was launched in the United Kingdom, and
                                    the Company has
                                    recently expanded its operations into Nigeria.</p>
                                <p style="margin-top: 20px">In today's world, disruption kills institutions that refuse
                                    to adapt. At
                                    229 Consulting, we help organisations break that cycle. We prepare institutions to
                                    thrive in rapidly
                                    changing business, digital, or political landscapes, preserving their momentum,
                                    driving change,
                                    turning disruption into growth. The future of work is here and we make sure you're
                                    ready to own it.
                                </p>
                            </div>
                            <ul class="list-block list-unstyled">
                                <li class="text-item text text-18" data-aos="fade-up" data-aos-delay="100">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60"
                                        viewbox="0 0 60 60" fill="none">
                                        <circle cx="30" cy="30" r="29.5" stroke="#1C2539"></circle>
                                        <g clip-path="url(#clip0_9088_7871)">
                                            <path
                                                d="M17.6645 23.0585C17.9536 23.0713 18.1997 22.8406 18.2097 22.5496L18.2916 20.171H19.8332L19.8752 23.414C19.8776 23.6041 19.9822 23.7782 20.149 23.8696C20.2281 23.913 20.3153 23.9345 20.4025 23.9345C20.499 23.9345 20.5954 23.908 20.6804 23.8554L23.0793 22.3682C23.4423 22.1432 23.8385 21.9858 24.257 21.9001L26.0346 21.5365C26.2934 22.4812 26.9984 23.2578 27.9438 23.5951C28.4258 23.7671 28.9633 23.6936 29.3816 23.3988C29.7998 23.104 30.0495 22.6224 30.0495 22.1107V21.4152C31.3436 21.3001 32.5622 20.7633 33.5262 19.8745L35.1291 18.3968C35.3432 18.1994 35.3568 17.8657 35.1594 17.6515C34.9619 17.4374 34.6283 17.4239 34.4141 17.6212L32.8112 19.0989C32.0429 19.8073 31.0773 20.2424 30.0495 20.3541V19.4985C30.3096 19.3462 30.5363 19.1366 30.7068 18.8822C31.3934 17.857 31.5003 16.5734 30.9927 15.4487C30.8117 15.0655 30.7404 14.8867 30.5598 14.5411C30.6899 14.4487 30.7951 14.321 30.8593 14.1678C30.9929 13.8489 30.9252 13.4808 30.6867 13.2299C30.3259 12.8504 29.6593 12.3448 28.533 12.0921C27.3385 11.8242 26.3261 12.15 25.7719 12.9473C25.182 12.9439 24.3397 13.2015 23.9312 14.2172C23.3791 15.5897 23.8024 16.9465 25.0634 17.8468C25.223 17.958 25.5552 18.1053 25.8893 18.0809C26.0727 18.3439 26.2575 18.5924 26.5698 18.8814L26.0545 20.4559L24.0457 20.8668C23.5049 20.9774 22.9928 21.181 22.5236 21.4718L20.9177 22.4673L20.853 17.4732C20.8406 16.5142 20.0503 15.734 19.0912 15.734C18.1366 15.734 17.3631 16.4814 17.3303 17.4354C17.2871 18.691 17.1986 21.2624 17.1556 22.5134C17.1456 22.8044 17.3734 23.0485 17.6645 23.0585ZM29.8306 18.2952C29.6657 18.5413 29.3909 18.6999 29.0955 18.7196C28.2307 18.7771 27.4117 18.3914 26.9055 17.6873L26.8234 17.5731C26.9393 17.4164 27.0189 17.2324 27.0519 17.0322C27.1102 16.6636 27.2776 16.1451 27.4864 15.7812C27.872 15.1088 28.6831 14.8455 29.3986 14.7512C29.6197 14.9309 29.9074 15.5952 30.0315 15.8825C30.3881 16.6729 30.313 17.5749 29.8306 18.2952ZM26.5029 13.802C26.7417 13.2068 27.2556 13.0528 27.7233 13.0528C28.2626 13.0354 29.2258 13.3744 29.5923 13.6708C28.7134 13.7436 27.5391 14.0128 26.8322 14.8713C26.6729 14.7728 26.5603 14.6535 26.4959 14.5147C26.357 14.2157 26.4662 13.8936 26.5029 13.802ZM24.9098 14.6107C25.0278 14.3171 25.2032 14.1617 25.3753 14.0814C25.3597 14.3876 25.4141 14.6894 25.5392 14.9589C25.6568 15.2122 25.8825 15.531 26.3114 15.7873C26.1751 16.1203 26.0742 16.4791 26.0113 16.8603C25.9955 16.9552 25.928 16.9964 25.8892 17.0126C25.8552 17.0267 25.7663 17.0524 25.6763 16.9882C24.8007 16.3631 24.5356 15.541 24.9098 14.6107ZM28.9241 19.7801C28.9477 19.7801 28.9713 19.7794 28.9949 19.7789V22.1106C28.9949 22.2824 28.9143 22.4376 28.7739 22.5367C28.6336 22.6358 28.4602 22.6594 28.2984 22.6017C27.587 22.3478 27.0852 21.7127 26.9966 20.9681L27.4851 19.4755C27.9316 19.6741 28.42 19.7801 28.9241 19.7801ZM19.0913 16.7887C19.4763 16.7887 19.7934 17.1018 19.7984 17.4867L19.8195 19.1163H18.3278L18.3844 17.4716C18.3977 17.0886 18.7081 16.7887 19.0913 16.7887Z"
                                                fill="CurrentColor"></path>
                                            <path
                                                d="M40.5805 44.8109H39.7454L39.8653 37.543C39.8785 36.7532 39.5412 36.0061 38.9402 35.4933L36.6506 33.5403C36.4289 33.3511 36.0961 33.3777 35.9071 33.5993C35.7181 33.8208 35.7446 34.1537 35.9661 34.3427L38.2557 36.2958C38.6163 36.6034 38.8186 37.0516 38.8108 37.5255L38.6906 44.8109H37.3269L36.5306 42.2281C36.213 41.1978 36.2378 40.0714 36.6004 39.0562L36.823 38.4328C36.8725 38.294 36.8618 38.1409 36.7933 38.0104C36.7248 37.8799 36.605 37.784 36.4627 37.7459L30.6868 36.1996L30.5948 34.3953C30.5801 34.1044 30.3345 33.8792 30.0413 33.8955C29.7504 33.9103 29.5266 34.1581 29.5415 34.449L29.8263 40.0356C29.8571 40.6418 29.547 41.2022 29.0167 41.4979L28.294 41.901C28.0396 42.0429 27.9484 42.364 28.0903 42.6184C28.1868 42.7915 28.3664 42.889 28.5514 42.889C28.6383 42.889 28.7265 42.8675 28.8078 42.8222L29.5305 42.4191C30.4142 41.9262 30.9312 40.9924 30.8797 39.9819L30.7433 37.3067L35.6373 38.6169C35.1928 39.7857 35.1262 41.2859 35.5228 42.5389L36.4015 45.3893V46.7853C36.4015 47.456 36.9472 48.0017 37.6179 48.0017H42.0965C42.5012 48.0017 42.8305 47.6723 42.8305 47.2677V47.061C42.8305 45.8202 41.8212 44.8109 40.5805 44.8109ZM37.6179 46.9468C37.5287 46.9468 37.4562 46.8743 37.4562 46.7851V45.8656H40.5806C41.2011 45.8656 41.7128 46.3411 41.7704 46.9468H37.6179Z"
                                                fill="CurrentColor"></path>
                                            <path
                                                d="M26.1036 36.7365C25.4655 35.2029 25.2087 33.5316 25.3546 31.8796L31.6141 30.6277L34.0866 32.7368C34.3082 32.9259 34.6411 32.8994 34.83 32.6778C35.019 32.4562 34.9926 32.1233 34.771 31.9343L32.3587 29.8764L33.6032 25.3202C33.6523 25.1402 33.7435 24.9712 33.8668 24.8312C35.039 23.5 41.5132 16.151 42.5131 15.0151C43.1031 14.3454 43.1149 13.363 42.5411 12.6792C42.2232 12.3004 41.7765 12.0744 41.2831 12.0429C40.789 12.0112 40.3177 12.1785 39.9543 12.5135C39.0336 13.3623 37.1142 15.1317 36.1987 15.9758C35.9846 16.1732 35.971 16.5069 36.1684 16.7211C36.366 16.9351 36.6994 16.9486 36.9137 16.7514L38.6546 15.1464L39.8769 16.4122L33.0753 24.1339C32.8462 24.3939 32.6769 24.708 32.5856 25.0423L31.3388 29.607C30.2809 29.8186 26.1948 30.6358 25.2521 30.8244L24.141 26.7059C24.0544 26.3846 23.8469 26.1177 23.557 25.9544C23.267 25.7909 22.9313 25.7519 22.6115 25.8442L19.1776 26.836C18.9126 26.9123 18.6362 26.8591 18.4186 26.6897C18.2012 26.5202 18.0819 26.265 18.0914 25.9895L18.1253 25.0028C18.1354 24.7117 17.9075 24.4677 17.6164 24.4576C17.3274 24.4452 17.0813 24.6754 17.0713 24.9665L17.0373 25.9532C17.016 26.5703 17.2832 27.142 17.7704 27.5216C18.2575 27.9012 18.877 28.0206 19.4703 27.8493L22.9042 26.8575C22.9658 26.8397 23.0154 26.8597 23.0393 26.8733C23.0633 26.8868 23.106 26.9187 23.1228 26.9806L24.3366 31.4801C24.1139 33.4007 24.3868 35.3559 25.1298 37.1416L26.0376 39.3235L25.6865 39.4013C24.366 39.6944 23.2072 40.4631 22.4239 41.566L20.2228 44.665C19.9891 44.994 19.8656 45.3812 19.8656 45.7847V46.783C19.8656 47.4538 20.4113 47.9994 21.082 47.9994H25.5606C25.9653 47.9994 26.2946 47.67 26.2946 47.2654V47.0587C26.2946 46.1293 25.7281 45.3297 24.9222 44.987L26.7053 43.9926C26.9597 43.8508 27.0509 43.5296 26.909 43.2752C26.7671 43.0208 26.4458 42.9295 26.1915 43.0715L23.0763 44.8088H21.4143L23.2837 42.1768C23.9154 41.2874 24.8499 40.6674 25.9149 40.4311L26.8804 40.2169C27.0327 40.1832 27.1623 40.0836 27.2342 39.9452C27.3061 39.8067 27.3131 39.6436 27.2532 39.4995L26.1036 36.7365ZM39.4303 14.4313L40.6693 13.2891C40.8188 13.1513 41.0126 13.0826 41.2157 13.0955C41.4186 13.1085 41.6024 13.2014 41.733 13.3572C41.969 13.6384 41.9642 14.0425 41.7216 14.318L40.5763 15.6181L39.4303 14.4313ZM24.0447 45.8635C24.6652 45.8635 25.1768 46.339 25.2344 46.9447H21.0819C20.9927 46.9447 20.9202 46.8722 20.9202 46.7831V45.8635H24.0447Z"
                                                fill="CurrentColor"></path>
                                        </g>
                                        <defs>
                                            <clippath id="clip0_9088_7871">
                                                <rect width="36" height="36" fill="white"
                                                    transform="translate(12 12)"></rect>
                                            </clippath>
                                        </defs>
                                    </svg>
                                    <h3 class="title text text-22 fw-600">Our Vision</h3>
                                    <div class="text text-16">
                                        To be the leading strategic partner helping unlock organizational potential and
                                        shaping institutions
                                        that drive progress, resilience, and shared prosperity for humanity's future.
                                    </div>
                                <li class="text-item text text-18" data-aos="fade-up" data-aos-delay="200">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60"
                                        viewbox="0 0 60 60" fill="none">
                                        <circle cx="30" cy="30" r="29.5" stroke="#1C2539"></circle>
                                        <g clip-path="url(#clip0_9088_7881)">
                                            <path
                                                d="M30.2367 26.3969C29.9451 26.3727 29.6871 26.591 29.6632 26.8839L29.5444 28.3407C29.3383 28.2575 29.1135 28.2112 28.878 28.2112H28.6278V26.8196C28.6278 26.1923 28.1175 25.6819 27.4902 25.6819H25.3008C23.6635 25.6819 22.0433 25.137 20.7387 24.1476L20.488 23.9575C20.2973 23.8129 20.062 23.7528 19.8255 23.7878C19.5889 23.823 19.3813 23.949 19.241 24.1428C18.5807 25.0547 18.2317 26.1318 18.2317 27.2577V28.2112H17.9815C17.7556 28.2112 17.5394 28.2539 17.3403 28.3307L16.8959 25.1623C16.8345 24.7242 16.852 24.2829 16.948 23.8506C17.0117 23.5639 16.831 23.2797 16.5442 23.216C16.2574 23.1521 15.9732 23.3331 15.9095 23.6198C15.7857 24.1768 15.7632 24.7454 15.8422 25.3101L16.387 29.1942C16.2649 29.4358 16.1956 29.7085 16.1956 29.9972C16.1956 30.9821 16.9968 31.7833 17.9817 31.7833H18.2478C18.3716 33.4531 19.2868 34.9052 20.6197 35.7654V37.1111L16.9487 38.8461C14.3185 40.089 12.6191 42.7718 12.6191 45.6807V47.4674C12.6191 47.7612 12.8573 47.9993 13.1511 47.9993C13.445 47.9993 13.6831 47.7612 13.6831 47.4674V45.6807C13.6831 43.1812 15.1433 40.8761 17.4031 39.808L20.7367 38.2325C21.073 39.3302 22.0957 40.1307 23.3021 40.1307C24.5084 40.1307 25.5312 39.3301 25.8674 38.2325L29.2013 39.8081L29.2547 39.8346C29.3297 39.871 29.4089 39.8882 29.4868 39.8882C29.6842 39.8882 29.8737 39.778 29.9657 39.5886C30.0941 39.3243 29.984 39.0061 29.7198 38.8777L29.7013 38.8686C29.6861 38.8609 29.6709 38.8533 29.6556 38.8461L25.9846 37.1111V35.9201C27.4549 35.0865 28.4803 33.5578 28.6118 31.7834H28.8779C29.8628 31.7834 30.664 30.9821 30.664 29.9973C30.664 29.759 30.6167 29.5318 30.5317 29.3237L30.7236 26.9704C30.7475 26.6775 30.5295 26.4208 30.2367 26.3969ZM17.2593 29.9972C17.2593 29.599 17.5833 29.2751 17.9815 29.2751H18.2316V30.7194H17.9815C17.5833 30.7194 17.2593 30.3954 17.2593 29.9972ZM24.9208 37.4481C24.9208 38.3406 24.1947 39.0668 23.3021 39.0668C22.4095 39.0668 21.6834 38.3406 21.6834 37.4481V36.2914C22.2296 36.4868 22.8173 36.5941 23.4298 36.5941C23.9479 36.5941 24.4482 36.5168 24.9208 36.375V37.4481ZM27.5639 31.3959C27.5639 33.6755 25.7093 35.5301 23.4298 35.5301C21.1502 35.5301 19.2956 33.6755 19.2956 31.3959V27.2577C19.2956 26.4198 19.5373 25.6156 19.9966 24.9201L20.0958 24.9954C21.5842 26.1242 23.4327 26.7458 25.3008 26.7458H27.4902C27.5308 26.7458 27.5639 26.7789 27.5639 26.8196V31.3959ZM28.878 30.7194H28.6278V29.2751H28.878C29.2761 29.2751 29.6001 29.599 29.6001 29.9972C29.6001 30.3954 29.2762 30.7194 28.878 30.7194Z"
                                                fill="CurrentColor"></path>
                                            <path
                                                d="M17.4977 22.2682C17.638 22.2682 17.7781 22.213 17.8826 22.1035C18.4046 21.5567 19.0725 21.188 19.8141 21.0374C19.8484 21.0304 19.882 21.02 19.9144 21.0064L21.643 20.2796C24.0632 19.262 26.8038 19.9557 28.462 22.0064C28.6468 22.2348 28.9819 22.2702 29.2102 22.0854C29.4387 21.9007 29.4741 21.5657 29.2894 21.3373C28.3772 20.2094 27.1072 19.3774 25.7135 18.9944C24.2261 18.5858 22.6761 18.691 21.2307 19.2988L19.5492 20.0058C18.6147 20.2065 17.7734 20.6771 17.113 21.3689C16.9101 21.5814 16.9179 21.9182 17.1304 22.121C17.2336 22.2194 17.3657 22.2682 17.4977 22.2682Z"
                                                fill="CurrentColor"></path>
                                            <path
                                                d="M30.9625 40.2847C30.757 40.4945 30.7603 40.8313 30.9702 41.0369C32.21 42.2518 32.9211 43.9429 32.9211 45.6767V47.4634C32.9211 47.7572 33.1592 47.9954 33.4531 47.9954C33.7469 47.9954 33.985 47.7572 33.985 47.4634V45.6767C33.985 43.6588 33.1576 41.6906 31.7148 40.277C31.5049 40.0715 31.1682 40.0747 30.9625 40.2847Z"
                                                fill="CurrentColor"></path>
                                            <path
                                                d="M17.1511 44.6719C16.8573 44.6719 16.6191 44.9101 16.6191 45.2038V47.4677C16.6191 47.7615 16.8573 47.9997 17.1511 47.9997C17.445 47.9997 17.6831 47.7615 17.6831 47.4677V45.2038C17.6831 44.9101 17.445 44.6719 17.1511 44.6719Z"
                                                fill="CurrentColor"></path>
                                            <path
                                                d="M29.4529 44.6719C29.159 44.6719 28.9209 44.9101 28.9209 45.2038V47.4677C28.9209 47.7615 29.159 47.9997 29.4529 47.9997C29.7467 47.9997 29.9848 47.7615 29.9848 47.4677V45.2038C29.9848 44.9101 29.7467 44.6719 29.4529 44.6719Z"
                                                fill="CurrentColor"></path>
                                            <path
                                                d="M39.8362 23.1695C39.5837 23.3197 39.5008 23.6462 39.6511 23.8987C39.7506 24.0659 39.9275 24.1586 40.1088 24.1586C40.2013 24.1586 40.2951 24.1345 40.3803 24.0837C41.976 23.1341 42.9672 21.3925 42.9672 19.5386C42.9672 19.3859 42.9598 19.2301 42.9449 19.0625C42.9187 18.7699 42.6601 18.5545 42.3675 18.5802C42.0748 18.6065 41.8589 18.865 41.8852 19.1576C41.8974 19.2933 41.9033 19.4179 41.9033 19.5387C41.9033 21.0194 41.1112 22.4106 39.8362 23.1695Z"
                                                fill="CurrentColor"></path>
                                            <path
                                                d="M37.6812 15.314C38.3764 15.314 39.0658 15.4869 39.6749 15.8138C39.9337 15.9527 40.2561 15.8556 40.3951 15.5967C40.5341 15.3378 40.4369 15.0153 40.178 14.8764C39.4147 14.4666 38.5513 14.25 37.6812 14.25C34.7661 14.25 32.3945 16.6216 32.3945 19.5366C32.3945 22.4517 34.7661 24.8233 37.6812 24.8233C37.7694 24.8233 37.8598 24.821 37.9499 24.8165C38.2434 24.8018 38.4693 24.552 38.4546 24.2585C38.4399 23.9651 38.1918 23.7386 37.8967 23.7538C37.8243 23.7574 37.7517 23.7593 37.6812 23.7593C35.3528 23.7593 33.4585 21.865 33.4585 19.5366C33.4585 17.2082 35.3528 15.314 37.6812 15.314Z"
                                                fill="CurrentColor"></path>
                                            <path
                                                d="M46.9867 15.1394L45.5427 14.3323L45.3644 12.6877C45.3352 12.4185 45.1714 12.189 44.9264 12.0738C44.6811 11.9587 44.4001 11.9792 44.1742 12.1286L41.7744 13.7166C41.5333 13.8762 41.4028 14.1539 41.4339 14.4415L41.6333 16.2811L39.7795 17.5078C39.2483 16.9579 38.5042 16.6149 37.6811 16.6149C36.0714 16.6149 34.7617 17.9246 34.7617 19.5343C34.7617 21.144 36.0714 22.4536 37.6811 22.4536C39.2908 22.4536 40.6004 21.144 40.6004 19.5343C40.6004 19.1299 40.5176 18.7445 40.3683 18.394L42.2204 17.1684L43.8357 18.0713C43.9532 18.137 44.0825 18.1696 44.2114 18.1696C44.3594 18.1696 44.5071 18.1266 44.6361 18.0413L47.0358 16.4533C47.2617 16.304 47.3905 16.0532 47.3803 15.7826C47.3703 15.512 47.2231 15.2716 46.9867 15.1394ZM39.5365 19.5344C39.5365 20.5574 38.7043 21.3897 37.6812 21.3897C36.6581 21.3897 35.8257 20.5574 35.8257 19.5344C35.8257 18.5113 36.6581 17.6789 37.6812 17.6789C38.1327 17.6789 38.547 17.8413 38.8691 18.1104L37.3877 19.0907C37.1427 19.2528 37.0755 19.5829 37.2376 19.8279C37.3399 19.9826 37.5092 20.0664 37.6817 20.0664C37.7825 20.0664 37.8845 20.0378 37.9748 19.978L39.457 18.9972C39.5085 19.1674 39.5365 19.3476 39.5365 19.5344ZM42.511 14.5051L44.3587 13.2824L44.4797 14.3979L42.632 15.6205L42.511 14.5051ZM44.1985 17.0552L43.219 16.5078L43.9407 16.0303L45.0668 15.2851L46.0462 15.8326L44.1985 17.0552Z"
                                                fill="CurrentColor"></path>
                                            <path
                                                d="M44.6027 19.2041C44.307 19.1948 44.0641 19.427 44.0558 19.7207C44.009 21.3665 43.3296 22.9146 42.1428 24.0802C40.9554 25.2464 39.3937 25.8976 37.7454 25.914C36.1035 25.9302 34.5416 25.325 33.3412 24.21C33.2333 24.1097 33.0883 24.0588 32.9417 24.0691L30.3382 24.2528L31.6639 22.3008C31.7617 22.157 31.7829 21.9744 31.7208 21.812C31.4215 21.0291 31.2816 20.203 31.3048 19.3568C31.399 15.9267 34.2539 13.1578 37.6819 13.1578C37.7007 13.1578 37.72 13.1578 37.7387 13.158C38.5193 13.165 39.281 13.3117 40.0031 13.5941C40.2767 13.7011 40.5854 13.5662 40.6923 13.2925C40.7993 13.019 40.6643 12.7103 40.3907 12.6033C39.5477 12.2735 38.6586 12.1022 37.7483 12.094C37.7261 12.0938 37.7041 12.0938 37.6819 12.0938C33.6826 12.0938 30.3512 15.3251 30.2413 19.3275C30.2168 20.2193 30.3481 21.0925 30.6316 21.9272L29.2334 23.9857C29.0447 24.2636 29.0315 24.6172 29.1992 24.9084C29.3667 25.1996 29.6794 25.3658 30.0142 25.3421L32.7912 25.1461C34.1487 26.3307 35.8733 26.9781 37.6809 26.9781C37.7058 26.9781 37.7309 26.978 37.756 26.9778C39.6809 26.9587 41.5036 26.1992 42.8884 24.8392C44.2723 23.48 45.0646 21.6729 45.1193 19.7509C45.1277 19.4572 44.8963 19.2124 44.6027 19.2041Z"
                                                fill="CurrentColor"></path>
                                        </g>
                                        <defs>
                                            <clippath id="clip0_9088_7881">
                                                <rect width="36" height="36" fill="white"
                                                    transform="translate(12 12)"></rect>
                                            </clippath>
                                        </defs>
                                    </svg>
                                    <h3 class="title text text-22 fw-600">Our Mission</h3>
                                    <div class="text text-16">
                                        We deliver actionable insights and transformative strategies that empower
                                        businesses, governments,
                                        and institutions to thrive in a rapidly changing world.
                                    </div>
                                </li>
                            </ul>
                            <div class="buttons" data-aos="fade-up" data-aos-delay="100">
                                <a href="/about" class="button button--primary" aria-label="More About Us">
                                    More About Us
                                    <span class="svg-wrapper">
                                        <svg class="icon-20" width="20" height="20" viewbox="0 0 20 20"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M13.3365 7.84518L6.16435 15.0173L4.98584 13.8388L12.158 6.66667H5.83652V5H15.0032V14.1667H13.3365V7.84518Z"
                                                fill="CurrentColor"></path>
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Our Services -->
        <div id="services" class="our-services mt-100 section-padding">
            <div class="container">
                <div class="section-headings section-headings-horizontal">
                    <div class="section-headings-left">
                        <div class="subheading text-20 subheading-bg" data-aos="fade-right" data-aos-delay="10">
                            <svg class="icon icon-14" xmlns="http://www.w3.org/2000/svg" width="14"
                                height="14" viewbox="0 0 14 14" fill="none">
                                <g clip-path="url(#clip0_9088_4143)">
                                    <path
                                        d="M8.71401 5.28599C11.7514 5.4205 14 5.9412 14 7C14 8.0588 11.7514 8.5795 8.71401 8.71401C8.5795 11.7514 8.0588 14 7 14C5.9412 14 5.4205 11.7514 5.28599 8.71401C2.2486 8.5795 -1.33117e-07 8.0588 0 7C4.62818e-08 5.94119 2.2486 5.4205 5.28599 5.28599C5.4205 2.2486 5.9412 0 7 0C8.0588 0 8.5795 2.2486 8.71401 5.28599Z"
                                        fill="CurrentColor"></path>
                                </g>
                                <defs>
                                    <clippath>
                                        <rect width="14" height="14" fill="CurrentColor"></rect>
                                    </clippath>
                                </defs>
                            </svg>
                            <span>Our Services</span>
                            <svg class="icon icon-14" xmlns="http://www.w3.org/2000/svg" width="14"
                                height="14" viewbox="0 0 14 14" fill="none">
                                <g clip-path="url(#clip0_9088_4143)">
                                    <path
                                        d="M8.71401 5.28599C11.7514 5.4205 14 5.9412 14 7C14 8.0588 11.7514 8.5795 8.71401 8.71401C8.5795 11.7514 8.0588 14 7 14C5.9412 14 5.4205 11.7514 5.28599 8.71401C2.2486 8.5795 -1.33117e-07 8.0588 0 7C4.62818e-08 5.94119 2.2486 5.4205 5.28599 5.28599C5.4205 2.2486 5.9412 0 7 0C8.0588 0 8.5795 2.2486 8.71401 5.28599Z"
                                        fill="CurrentColor"></path>
                                </g>
                                <defs>
                                    <clippath>
                                        <rect width="14" height="14" fill="CurrentColor"></rect>
                                    </clippath>
                                </defs>
                            </svg>
                        </div>
                        <h2 class="heading text-40" data-aos="fade-right" data-aos-delay="20">
                            A portfolio of services designed to address today's toughest challenges and tomorrow's
                            biggest
                            opportunities
                        </h2>
                    </div>

                    <div class="section-headings-right buttons" data-aos="fade-left" data-aos-delay="20">
                        <a href="/services" class="button button--secondary" aria-label="hero button">
                            More Services
                            <span class="svg-wrapper">
                                <svg class="icon-20" width="20" height="20" viewbox="0 0 20 20"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M13.3365 7.84518L6.16435 15.0173L4.98584 13.8388L12.158 6.66667H5.83652V5H15.0032V14.1667H13.3365V7.84518Z"
                                        fill="currentColor"></path>
                                </svg>
                            </span>
                        </a>
                    </div>
                </div>

                <div class="section-content" data-aos="fade-up">
                    <accordion-horizontal class="accordion-horizontal">
                        <ul class="service-list list-unstyled radius18">
                            <li class="accordion-li">
                                <div class="accordion-title">
                                    <div class="accordion-title-icon">
                                        <svg viewbox="0 0 70 70" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect width="70" height="70" rx="10" fill="#20282D">
                                            </rect>
                                            <g clip-path="url(#clip0_9088_7908)">
                                                <path
                                                    d="M49.1323 31.6016H39.0586C38.735 31.6016 38.4727 31.8639 38.4727 32.1875C38.4727 32.5111 38.735 32.7734 39.0586 32.7734H49.1323C49.4559 32.7734 49.7183 32.5111 49.7183 32.1875C49.7183 31.8639 49.4559 31.6016 49.1323 31.6016Z"
                                                    fill="white"></path>
                                                <path
                                                    d="M49.1323 34.0469H39.0586C38.735 34.0469 38.4727 34.3092 38.4727 34.6328C38.4727 34.9564 38.735 35.2188 39.0586 35.2188H49.1323C49.4559 35.2188 49.7183 34.9564 49.7183 34.6328C49.7183 34.3092 49.4559 34.0469 49.1323 34.0469Z"
                                                    fill="white"></path>
                                                <path
                                                    d="M49.1323 36.5H39.0586C38.735 36.5 38.4727 36.7623 38.4727 37.0859C38.4727 37.4095 38.735 37.6719 39.0586 37.6719H49.1323C49.4559 37.6719 49.7183 37.4095 49.7183 37.0859C49.7183 36.7623 49.4559 36.5 49.1323 36.5Z"
                                                    fill="white"></path>
                                                <path
                                                    d="M46.0934 38.9453H39.0586C38.735 38.9453 38.4727 39.2077 38.4727 39.5312C38.4727 39.8548 38.735 40.1172 39.0586 40.1172H46.0934C46.417 40.1172 46.6794 39.8548 46.6794 39.5312C46.6794 39.2077 46.417 38.9453 46.0934 38.9453Z"
                                                    fill="white"></path>
                                                <path
                                                    d="M26.7012 29.4923V28.3672C26.7012 28.0436 26.4388 27.7812 26.1152 27.7812C25.7916 27.7812 25.5293 28.0436 25.5293 28.3672V29.4923C25.5293 29.8159 25.7916 30.0783 26.1152 30.0783C26.4388 30.0783 26.7012 29.8159 26.7012 29.4923Z"
                                                    fill="white"></path>
                                                <path
                                                    d="M31.0059 30.0783C31.3295 30.0783 31.5918 29.8159 31.5918 29.4923V28.3672C31.5918 28.0436 31.3295 27.7812 31.0059 27.7812C30.6823 27.7812 30.4199 28.0436 30.4199 28.3672V29.4923C30.4199 29.8159 30.6822 30.0783 31.0059 30.0783Z"
                                                    fill="white"></path>
                                                <path
                                                    d="M28.5607 32.2873C28.8843 32.2873 29.1466 32.025 29.1466 31.7014C29.1466 31.3778 28.8843 31.1155 28.5607 31.1155C28.4793 31.1155 28.4131 31.0492 28.4131 30.9679C28.4131 30.8866 28.4793 30.8203 28.5607 30.8203C28.8843 30.8203 29.1466 30.558 29.1466 30.2344C29.1466 29.9108 28.8843 29.6484 28.5607 29.6484C27.8332 29.6484 27.2412 30.2404 27.2412 30.9679C27.2412 31.6954 27.8332 32.2873 28.5607 32.2873Z"
                                                    fill="white"></path>
                                                <path
                                                    d="M28.5607 35.4749C29.1772 35.4898 29.8222 35.2316 30.2868 34.7812C30.6858 34.3946 30.9049 33.9168 30.9036 33.4359C30.9027 33.1128 30.6405 32.8516 30.3176 32.8516C30.3171 32.8516 30.3165 32.8516 30.316 32.8516C29.9924 32.8524 29.7307 33.1155 29.7316 33.4391C29.732 33.5965 29.6372 33.7789 29.4712 33.9398C29.2291 34.1744 28.8884 34.3137 28.5805 34.3032C28.5673 34.3027 28.554 34.3027 28.5407 34.3032C28.2334 34.3148 27.8921 34.1744 27.65 33.9398C27.4841 33.779 27.3893 33.5965 27.3897 33.4391C27.3905 33.1155 27.129 32.8525 26.8054 32.8516C26.8048 32.8516 26.8043 32.8516 26.8037 32.8516C26.4809 32.8516 26.2187 33.1128 26.2178 33.4359C26.2165 33.9167 26.4354 34.3945 26.8344 34.7812C27.2862 35.2191 27.9074 35.4756 28.5093 35.4756C28.5264 35.4755 28.5436 35.4753 28.5607 35.4749Z"
                                                    fill="white"></path>
                                                <path
                                                    d="M39.9282 25.9297C39.8399 25.6184 39.5159 25.4375 39.2047 25.5256C38.8934 25.6138 38.7124 25.9377 38.8007 26.2491C39.4682 28.6055 41.6457 30.2513 44.096 30.2513C47.1313 30.2513 49.6006 27.782 49.6006 24.7467C49.6006 21.7115 47.1313 19.2422 44.096 19.2422C41.6721 19.2422 39.501 20.8654 38.8163 23.1895C38.7249 23.4999 38.9024 23.8257 39.2128 23.9171C39.5231 24.0085 39.849 23.8311 39.9403 23.5206C40.4791 21.6915 42.188 20.4141 44.096 20.4141C46.485 20.4141 48.4286 22.3577 48.4286 24.7467C48.4286 27.1358 46.485 29.0794 44.096 29.0794C42.1673 29.0794 40.4534 27.7841 39.9282 25.9297Z"
                                                    fill="white"></path>
                                                <path
                                                    d="M43.6863 26.7562C43.8362 26.7562 43.9862 26.699 44.1006 26.5845L46.6146 24.0705C46.8434 23.8417 46.8434 23.4707 46.6146 23.2419C46.3858 23.0131 46.0147 23.0131 45.786 23.2419L43.6864 25.3415L42.4065 24.0617C42.1776 23.8329 41.8066 23.8329 41.5779 24.0617C41.349 24.2905 41.349 24.6615 41.5779 24.8903L43.2721 26.5845C43.3864 26.699 43.5364 26.7562 43.6863 26.7562Z"
                                                    fill="white"></path>
                                                <path
                                                    d="M53.6328 15.5859H34.5588C33.8049 15.5859 33.1916 16.1993 33.1916 16.9531V19.5721C32.748 19.4357 32.2773 19.362 31.7897 19.362H31.4382C30.6986 18.6406 29.689 18.195 28.5768 18.195H24.6545C22.3929 18.195 20.553 20.0349 20.553 22.2966V23.046C20.553 23.3696 20.8153 23.632 21.1389 23.632C21.4625 23.632 21.7248 23.3696 21.7248 23.046V22.2966C21.7248 20.6811 23.0391 19.3669 24.6545 19.3669H28.5768C30.1923 19.3669 31.5065 20.6811 31.5065 22.2966V25.2726H24.5677C23.452 25.2726 22.5324 26.1277 22.4292 27.2169H21.7248V25.7804C21.7248 25.4568 21.4625 25.1945 21.1389 25.1945C20.8153 25.1945 20.553 25.4568 20.553 25.7804V27.4932C19.7491 27.9077 19.1977 28.7459 19.1977 29.7109V30.4813C19.1977 31.8566 20.3166 32.9753 21.6917 32.9753H22.4192V33.5184C22.4192 35.2408 23.4072 36.7358 24.8455 37.4695L24.355 37.7527C23.9702 37.9748 23.7191 38.3723 23.6781 38.81L18.1158 40.6005C16.2521 41.2004 15 42.9189 15 44.8766V53.0452C15 53.799 15.6134 54.4123 16.3672 54.4123H18.3323C18.6559 54.4123 18.9183 54.15 18.9183 53.8264C18.9183 53.5028 18.6559 53.2405 18.3323 53.2405H16.3672C16.2595 53.2405 16.1719 53.1528 16.1719 53.0452V44.8766C16.1719 43.4296 17.0973 42.1595 18.4748 41.716L22.6079 40.3856L20.5327 43.183C20.2301 43.5911 20.294 44.171 20.6783 44.5034L22.4017 45.9939L20.6277 47.5283C20.2987 47.8129 20.1977 48.2867 20.382 48.6806L22.5149 53.2404H21.0667C20.7431 53.2404 20.4808 53.5027 20.4808 53.8263C20.4808 54.1499 20.7431 54.4123 21.0667 54.4123H43.559C44.3128 54.4123 44.9262 53.7989 44.9262 53.0451V48.2008L46.2456 46.8813H53.6328C54.3866 46.8813 55 46.268 55 45.5141V16.9531C55 16.1993 54.3866 15.5859 53.6328 15.5859ZM22.4191 31.8035H21.6916C20.9626 31.8035 20.3695 31.2104 20.3695 30.4814V29.7109C20.3695 28.9819 20.9627 28.3888 21.6916 28.3888H22.4191V31.8035ZM23.6714 52.9473L21.5059 48.318L23.6714 46.4451V52.9473ZM23.6714 44.8958L23.2973 45.2193L21.5819 43.7356L23.6714 40.9189V44.8958ZM35.3966 24.1409V27.217H34.6923C34.593 26.1685 33.7373 25.3373 32.6783 25.2765V22.2966C32.6783 21.68 32.5407 21.0952 32.2959 20.5701C34.0459 20.817 35.3966 22.3238 35.3966 24.1409ZM35.4297 28.3887C36.1588 28.3887 36.7518 28.9818 36.7518 29.7109V30.4813C36.7518 31.2104 36.1587 31.8034 35.4297 31.8034H34.7022V28.3887H35.4297ZM23.591 33.5184V27.421C23.591 26.8825 24.0291 26.4445 24.5676 26.4445H32.5538C33.0923 26.4445 33.5303 26.8825 33.5303 27.421V33.5184C33.5303 35.3169 32.0672 36.7799 30.2688 36.7799H26.8525C25.0541 36.7799 23.591 35.3168 23.591 33.5184ZM35.543 43.7327L33.8241 45.2193L33.45 44.8958V40.8616L35.543 43.7327ZM30.5138 37.9447V38.4638L28.5607 40.0295L26.6076 38.4639V37.9448C26.6887 37.9492 26.7703 37.9519 26.8525 37.9519H30.2688C30.3511 37.9518 30.4327 37.9491 30.5138 37.9447ZM24.8433 38.9367C24.8433 38.8672 24.8807 38.8023 24.9409 38.7676L25.4357 38.482V38.5577C25.4357 38.8555 25.5691 39.1334 25.8015 39.3196L27.9499 41.0417C27.9729 41.0602 27.9966 41.0773 28.0206 41.0934L24.8433 43.1104V38.9367ZM25.8807 53.2405H24.8433V44.4984L26.0093 43.7582L26.8824 44.7222L25.8807 53.2405ZM27.0606 53.2405L27.9282 45.8632C28.1038 46.0125 28.3279 46.097 28.5607 46.097C28.7935 46.097 29.0177 46.0124 29.1931 45.8631L30.0607 53.2405H27.0606ZM28.5607 44.8295L27.0133 43.1209L28.5608 42.1386L30.1083 43.1209L28.5607 44.8295ZM32.2781 53.2405H31.2407L30.239 44.7222L31.112 43.7583L32.2781 44.4985V53.2405ZM32.2781 43.1104L29.1008 41.0934C29.1248 41.0773 29.1485 41.0602 29.1715 41.0417L31.3198 39.3197C31.5524 39.1334 31.6858 38.8556 31.6858 38.5577V38.482L32.1805 38.7676C32.2408 38.8023 32.2782 38.8672 32.2782 38.9367L32.2781 43.1104ZM33.1916 38.1387C33.0804 37.9836 32.9366 37.8509 32.7665 37.7527L32.2759 37.4695C32.6074 37.3005 32.9145 37.0905 33.1916 36.8472V38.1387ZM33.45 46.4452L35.6116 48.3147L33.45 52.8092V46.4452ZM37.5927 47.9168V53.2405H34.543L36.7325 48.688C36.9231 48.2917 36.824 47.8139 36.4913 47.5261L34.7198 45.994L36.4454 44.5015C36.8266 44.1719 36.8926 43.5947 36.5957 43.1875L34.5652 40.4023L38.6465 41.716C39.8542 42.1048 40.7143 43.1291 40.908 44.3509C39.0576 44.4852 37.5927 46.0327 37.5927 47.9168ZM43.7543 53.0452C43.7543 53.1528 43.6666 53.2405 43.559 53.2405H38.7645V48.5441H43.7543V53.0452ZM46.3955 45.0743L44.0975 47.3723H38.8267C39.0741 46.3078 40.0305 45.5122 41.1691 45.5122H43.5578C43.7132 45.5122 43.8623 45.4505 43.9721 45.3405L45.3169 43.9958C45.6143 43.6985 46.098 43.6984 46.3954 43.9958C46.5395 44.1398 46.6187 44.3313 46.6187 44.535C46.6187 44.7388 46.5395 44.9302 46.3955 45.0743ZM53.8281 45.5142C53.8281 45.6219 53.7405 45.7095 53.6328 45.7095H47.3931C47.6508 45.3738 47.7908 44.9652 47.7908 44.535C47.7908 44.0183 47.5895 43.5324 47.2241 43.1671C46.4699 42.4128 45.2426 42.4129 44.4884 43.1671L43.3152 44.3403H42.0897C41.8845 42.6106 40.697 41.1449 39.0057 40.6005L34.3634 39.1063V35.2166C34.5815 34.6934 34.7023 34.1198 34.7023 33.5184V32.9754H35.4298C36.805 32.9754 37.9238 31.8566 37.9238 30.4814V29.7109C37.9238 28.7459 37.3724 27.9078 36.5686 27.4933V24.1409C36.5686 22.453 35.6883 20.9679 34.3634 20.1174V16.9531C34.3634 16.8455 34.4511 16.7578 34.5588 16.7578H53.6328C53.7405 16.7578 53.8281 16.8455 53.8281 16.9531V45.5142Z"
                                                    fill="white"></path>
                                                <path
                                                    d="M49.1327 38.9453H47.9688C47.6452 38.9453 47.3828 39.2077 47.3828 39.5312C47.3828 39.8548 47.6452 40.1172 47.9688 40.1172H49.1327C49.4563 40.1172 49.7186 39.8548 49.7186 39.5312C49.7186 39.2077 49.4563 38.9453 49.1327 38.9453Z"
                                                    fill="white"></path>
                                            </g>
                                            <defs>
                                                <clippath id="clip0_9088_7908">
                                                    <rect width="40" height="40" fill="white"
                                                        transform="translate(15 15)"></rect>
                                                </clippath>
                                            </defs>
                                        </svg>
                                        <h2 class="heading text-24 text-rotate">
                                            GenAI Adoption for Institutions
                                        </h2>
                                    </div>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24"
                                        stroke-width="1" stroke="currentColor" class="icon icon-plus-circle">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"></path>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24"
                                        stroke-width="1" stroke="currentColor" class="icon icon-minus-circle">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15 12H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"></path>
                                    </svg>
                                </div>
                                <div class="accordion-content">
                                    <div class="service-content-inner">
                                        <div>
                                            <svg viewbox="0 0 70 70" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect width="70" height="70" rx="10" fill="#1C2539">
                                                </rect>
                                                <g clip-path="url(#clip0_9088_790888)">
                                                    <path
                                                        d="M49.1323 31.6016H39.0586C38.735 31.6016 38.4727 31.8639 38.4727 32.1875C38.4727 32.5111 38.735 32.7734 39.0586 32.7734H49.1323C49.4559 32.7734 49.7183 32.5111 49.7183 32.1875C49.7183 31.8639 49.4559 31.6016 49.1323 31.6016Z"
                                                        fill="white"></path>
                                                    <path
                                                        d="M49.1323 34.0469H39.0586C38.735 34.0469 38.4727 34.3092 38.4727 34.6328C38.4727 34.9564 38.735 35.2188 39.0586 35.2188H49.1323C49.4559 35.2188 49.7183 34.9564 49.7183 34.6328C49.7183 34.3092 49.4559 34.0469 49.1323 34.0469Z"
                                                        fill="white"></path>
                                                    <path
                                                        d="M49.1323 36.5H39.0586C38.735 36.5 38.4727 36.7623 38.4727 37.0859C38.4727 37.4095 38.735 37.6719 39.0586 37.6719H49.1323C49.4559 37.6719 49.7183 37.4095 49.7183 37.0859C49.7183 36.7623 49.4559 36.5 49.1323 36.5Z"
                                                        fill="white"></path>
                                                    <path
                                                        d="M46.0934 38.9453H39.0586C38.735 38.9453 38.4727 39.2077 38.4727 39.5312C38.4727 39.8548 38.735 40.1172 39.0586 40.1172H46.0934C46.417 40.1172 46.6794 39.8548 46.6794 39.5312C46.6794 39.2077 46.417 38.9453 46.0934 38.9453Z"
                                                        fill="white"></path>
                                                    <path
                                                        d="M26.7012 29.4923V28.3672C26.7012 28.0436 26.4388 27.7812 26.1152 27.7812C25.7916 27.7812 25.5293 28.0436 25.5293 28.3672V29.4923C25.5293 29.8159 25.7916 30.0783 26.1152 30.0783C26.4388 30.0783 26.7012 29.8159 26.7012 29.4923Z"
                                                        fill="white"></path>
                                                    <path
                                                        d="M31.0059 30.0783C31.3295 30.0783 31.5918 29.8159 31.5918 29.4923V28.3672C31.5918 28.0436 31.3295 27.7812 31.0059 27.7812C30.6823 27.7812 30.4199 28.0436 30.4199 28.3672V29.4923C30.4199 29.8159 30.6822 30.0783 31.0059 30.0783Z"
                                                        fill="white"></path>
                                                    <path
                                                        d="M28.5607 32.2873C28.8843 32.2873 29.1466 32.025 29.1466 31.7014C29.1466 31.3778 28.8843 31.1155 28.5607 31.1155C28.4793 31.1155 28.4131 31.0492 28.4131 30.9679C28.4131 30.8866 28.4793 30.8203 28.5607 30.8203C28.8843 30.8203 29.1466 30.558 29.1466 30.2344C29.1466 29.9108 28.8843 29.6484 28.5607 29.6484C27.8332 29.6484 27.2412 30.2404 27.2412 30.9679C27.2412 31.6954 27.8332 32.2873 28.5607 32.2873Z"
                                                        fill="white"></path>
                                                    <path
                                                        d="M28.5607 35.4749C29.1772 35.4898 29.8222 35.2316 30.2868 34.7812C30.6858 34.3946 30.9049 33.9168 30.9036 33.4359C30.9027 33.1128 30.6405 32.8516 30.3176 32.8516C30.3171 32.8516 30.3165 32.8516 30.316 32.8516C29.9924 32.8524 29.7307 33.1155 29.7316 33.4391C29.732 33.5965 29.6372 33.7789 29.4712 33.9398C29.2291 34.1744 28.8884 34.3137 28.5805 34.3032C28.5673 34.3027 28.554 34.3027 28.5407 34.3032C28.2334 34.3148 27.8921 34.1744 27.65 33.9398C27.4841 33.779 27.3893 33.5965 27.3897 33.4391C27.3905 33.1155 27.129 32.8525 26.8054 32.8516C26.8048 32.8516 26.8043 32.8516 26.8037 32.8516C26.4809 32.8516 26.2187 33.1128 26.2178 33.4359C26.2165 33.9167 26.4354 34.3945 26.8344 34.7812C27.2862 35.2191 27.9074 35.4756 28.5093 35.4756C28.5264 35.4755 28.5436 35.4753 28.5607 35.4749Z"
                                                        fill="white"></path>
                                                    <path
                                                        d="M39.9282 25.9297C39.8399 25.6184 39.5159 25.4375 39.2047 25.5256C38.8934 25.6138 38.7124 25.9377 38.8007 26.2491C39.4682 28.6055 41.6457 30.2513 44.096 30.2513C47.1313 30.2513 49.6006 27.782 49.6006 24.7467C49.6006 21.7115 47.1313 19.2422 44.096 19.2422C41.6721 19.2422 39.501 20.8654 38.8163 23.1895C38.7249 23.4999 38.9024 23.8257 39.2128 23.9171C39.5231 24.0085 39.849 23.8311 39.9403 23.5206C40.4791 21.6915 42.188 20.4141 44.096 20.4141C46.485 20.4141 48.4286 22.3577 48.4286 24.7467C48.4286 27.1358 46.485 29.0794 44.096 29.0794C42.1673 29.0794 40.4534 27.7841 39.9282 25.9297Z"
                                                        fill="white"></path>
                                                    <path
                                                        d="M43.6863 26.7562C43.8362 26.7562 43.9862 26.699 44.1006 26.5845L46.6146 24.0705C46.8434 23.8417 46.8434 23.4707 46.6146 23.2419C46.3858 23.0131 46.0147 23.0131 45.786 23.2419L43.6864 25.3415L42.4065 24.0617C42.1776 23.8329 41.8066 23.8329 41.5779 24.0617C41.349 24.2905 41.349 24.6615 41.5779 24.8903L43.2721 26.5845C43.3864 26.699 43.5364 26.7562 43.6863 26.7562Z"
                                                        fill="white"></path>
                                                    <path
                                                        d="M53.6328 15.5859H34.5588C33.8049 15.5859 33.1916 16.1993 33.1916 16.9531V19.5721C32.748 19.4357 32.2773 19.362 31.7897 19.362H31.4382C30.6986 18.6406 29.689 18.195 28.5768 18.195H24.6545C22.3929 18.195 20.553 20.0349 20.553 22.2966V23.046C20.553 23.3696 20.8153 23.632 21.1389 23.632C21.4625 23.632 21.7248 23.3696 21.7248 23.046V22.2966C21.7248 20.6811 23.0391 19.3669 24.6545 19.3669H28.5768C30.1923 19.3669 31.5065 20.6811 31.5065 22.2966V25.2726H24.5677C23.452 25.2726 22.5324 26.1277 22.4292 27.2169H21.7248V25.7804C21.7248 25.4568 21.4625 25.1945 21.1389 25.1945C20.8153 25.1945 20.553 25.4568 20.553 25.7804V27.4932C19.7491 27.9077 19.1977 28.7459 19.1977 29.7109V30.4813C19.1977 31.8566 20.3166 32.9753 21.6917 32.9753H22.4192V33.5184C22.4192 35.2408 23.4072 36.7358 24.8455 37.4695L24.355 37.7527C23.9702 37.9748 23.7191 38.3723 23.6781 38.81L18.1158 40.6005C16.2521 41.2004 15 42.9189 15 44.8766V53.0452C15 53.799 15.6134 54.4123 16.3672 54.4123H18.3323C18.6559 54.4123 18.9183 54.15 18.9183 53.8264C18.9183 53.5028 18.6559 53.2405 18.3323 53.2405H16.3672C16.2595 53.2405 16.1719 53.1528 16.1719 53.0452V44.8766C16.1719 43.4296 17.0973 42.1595 18.4748 41.716L22.6079 40.3856L20.5327 43.183C20.2301 43.5911 20.294 44.171 20.6783 44.5034L22.4017 45.9939L20.6277 47.5283C20.2987 47.8129 20.1977 48.2867 20.382 48.6806L22.5149 53.2404H21.0667C20.7431 53.2404 20.4808 53.5027 20.4808 53.8263C20.4808 54.1499 20.7431 54.4123 21.0667 54.4123H43.559C44.3128 54.4123 44.9262 53.7989 44.9262 53.0451V48.2008L46.2456 46.8813H53.6328C54.3866 46.8813 55 46.268 55 45.5141V16.9531C55 16.1993 54.3866 15.5859 53.6328 15.5859ZM22.4191 31.8035H21.6916C20.9626 31.8035 20.3695 31.2104 20.3695 30.4814V29.7109C20.3695 28.9819 20.9627 28.3888 21.6916 28.3888H22.4191V31.8035ZM23.6714 52.9473L21.5059 48.318L23.6714 46.4451V52.9473ZM23.6714 44.8958L23.2973 45.2193L21.5819 43.7356L23.6714 40.9189V44.8958ZM35.3966 24.1409V27.217H34.6923C34.593 26.1685 33.7373 25.3373 32.6783 25.2765V22.2966C32.6783 21.68 32.5407 21.0952 32.2959 20.5701C34.0459 20.817 35.3966 22.3238 35.3966 24.1409ZM35.4297 28.3887C36.1588 28.3887 36.7518 28.9818 36.7518 29.7109V30.4813C36.7518 31.2104 36.1587 31.8034 35.4297 31.8034H34.7022V28.3887H35.4297ZM23.591 33.5184V27.421C23.591 26.8825 24.0291 26.4445 24.5676 26.4445H32.5538C33.0923 26.4445 33.5303 26.8825 33.5303 27.421V33.5184C33.5303 35.3169 32.0672 36.7799 30.2688 36.7799H26.8525C25.0541 36.7799 23.591 35.3168 23.591 33.5184ZM35.543 43.7327L33.8241 45.2193L33.45 44.8958V40.8616L35.543 43.7327ZM30.5138 37.9447V38.4638L28.5607 40.0295L26.6076 38.4639V37.9448C26.6887 37.9492 26.7703 37.9519 26.8525 37.9519H30.2688C30.3511 37.9518 30.4327 37.9491 30.5138 37.9447ZM24.8433 38.9367C24.8433 38.8672 24.8807 38.8023 24.9409 38.7676L25.4357 38.482V38.5577C25.4357 38.8555 25.5691 39.1334 25.8015 39.3196L27.9499 41.0417C27.9729 41.0602 27.9966 41.0773 28.0206 41.0934L24.8433 43.1104V38.9367ZM25.8807 53.2405H24.8433V44.4984L26.0093 43.7582L26.8824 44.7222L25.8807 53.2405ZM27.0606 53.2405L27.9282 45.8632C28.1038 46.0125 28.3279 46.097 28.5607 46.097C28.7935 46.097 29.0177 46.0124 29.1931 45.8631L30.0607 53.2405H27.0606ZM28.5607 44.8295L27.0133 43.1209L28.5608 42.1386L30.1083 43.1209L28.5607 44.8295ZM32.2781 53.2405H31.2407L30.239 44.7222L31.112 43.7583L32.2781 44.4985V53.2405ZM32.2781 43.1104L29.1008 41.0934C29.1248 41.0773 29.1485 41.0602 29.1715 41.0417L31.3198 39.3197C31.5524 39.1334 31.6858 38.8556 31.6858 38.5577V38.482L32.1805 38.7676C32.2408 38.8023 32.2782 38.8672 32.2782 38.9367L32.2781 43.1104ZM33.1916 38.1387C33.0804 37.9836 32.9366 37.8509 32.7665 37.7527L32.2759 37.4695C32.6074 37.3005 32.9145 37.0905 33.1916 36.8472V38.1387ZM33.45 46.4452L35.6116 48.3147L33.45 52.8092V46.4452ZM37.5927 47.9168V53.2405H34.543L36.7325 48.688C36.9231 48.2917 36.824 47.8139 36.4913 47.5261L34.7198 45.994L36.4454 44.5015C36.8266 44.1719 36.8926 43.5947 36.5957 43.1875L34.5652 40.4023L38.6465 41.716C39.8542 42.1048 40.7143 43.1291 40.908 44.3509C39.0576 44.4852 37.5927 46.0327 37.5927 47.9168ZM43.7543 53.0452C43.7543 53.1528 43.6666 53.2405 43.559 53.2405H38.7645V48.5441H43.7543V53.0452ZM46.3955 45.0743L44.0975 47.3723H38.8267C39.0741 46.3078 40.0305 45.5122 41.1691 45.5122H43.5578C43.7132 45.5122 43.8623 45.4505 43.9721 45.3405L45.3169 43.9958C45.6143 43.6985 46.098 43.6984 46.3954 43.9958C46.5395 44.1398 46.6187 44.3313 46.6187 44.535C46.6187 44.7388 46.5395 44.9302 46.3955 45.0743ZM53.8281 45.5142C53.8281 45.6219 53.7405 45.7095 53.6328 45.7095H47.3931C47.6508 45.3738 47.7908 44.9652 47.7908 44.535C47.7908 44.0183 47.5895 43.5324 47.2241 43.1671C46.4699 42.4128 45.2426 42.4129 44.4884 43.1671L43.3152 44.3403H42.0897C41.8845 42.6106 40.697 41.1449 39.0057 40.6005L34.3634 39.1063V35.2166C34.5815 34.6934 34.7023 34.1198 34.7023 33.5184V32.9754H35.4298C36.805 32.9754 37.9238 31.8566 37.9238 30.4814V29.7109C37.9238 28.7459 37.3724 27.9078 36.5686 27.4933V24.1409C36.5686 22.453 35.6883 20.9679 34.3634 20.1174V16.9531C34.3634 16.8455 34.4511 16.7578 34.5588 16.7578H53.6328C53.7405 16.7578 53.8281 16.8455 53.8281 16.9531V45.5142Z"
                                                        fill="white"></path>
                                                    <path
                                                        d="M49.1327 38.9453H47.9688C47.6452 38.9453 47.3828 39.2077 47.3828 39.5312C47.3828 39.8548 47.6452 40.1172 47.9688 40.1172H49.1327C49.4563 40.1172 49.7186 39.8548 49.7186 39.5312C49.7186 39.2077 49.4563 38.9453 49.1327 38.9453Z"
                                                        fill="white"></path>
                                                </g>
                                                <defs>
                                                    <clippath id="clip0_9088_790888">
                                                        <rect width="40" height="40" fill="white"
                                                            transform="translate(15 15)"></rect>
                                                    </clippath>
                                                </defs>
                                            </svg>
                                            <h2 class="heading text-24">
                                                GenAI Adoption for Institutions
                                            </h2>
                                            <p class="text text-16">
                                                Helping organisations unlock productivity and resilience with generative
                                                AI. We help
                                                organisations unlock productivity and resilience by embedding Generative
                                                AI into their people,
                                                processes, and systems — driving efficiency, transparency, and readiness
                                                for the future of work.

                                            </p>
                                        </div>
                                        <div class="service-button">
                                            <a href="/service-details" class="button button--primary">
                                                + View Details
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion-li">
                                <div class="accordion-title">
                                    <div class="accordion-title-icon">
                                        <svg width="70" height="70" viewbox="0 0 70 70" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <rect width="70" height="70" rx="10" fill="#20282D">
                                            </rect>
                                            <g clip-path="url(#clip0_9088_7937)">
                                                <path
                                                    d="M27.5 41.875V41.8156C27.5 41.1587 26.9662 40.625 26.3094 40.625H26.1912C25.5338 40.625 25 41.1587 25 41.8156C25 42.3287 25.3269 42.7831 25.815 42.9463L27.0806 43.3687C28.0794 43.7013 28.75 44.6319 28.75 45.6844C28.75 46.8344 27.9475 47.7956 26.875 48.0525V49.375H25.625V48.0519C24.5525 47.795 23.75 46.8344 23.75 45.6838V45H25V45.6844C25 46.3413 25.5338 46.875 26.1906 46.875H26.3088C26.9662 46.875 27.5 46.3413 27.5 45.6844C27.5 45.1713 27.1731 44.7169 26.685 44.5537L25.4194 44.1313C24.4206 43.7987 23.75 42.8681 23.75 41.8156C23.75 40.6656 24.5525 39.7044 25.625 39.4475V38.125H26.875V39.4481C27.9475 39.705 28.75 40.6656 28.75 41.8162L27.5 41.875ZM34.375 43.75C34.375 48.23 30.73 51.875 26.25 51.875C21.77 51.875 18.125 48.23 18.125 43.75C18.125 39.27 21.77 35.625 26.25 35.625C30.73 35.625 34.375 39.27 34.375 43.75ZM33.125 43.75C33.125 39.9594 30.0406 36.875 26.25 36.875C22.4594 36.875 19.375 39.9594 19.375 43.75C19.375 47.5406 22.4594 50.625 26.25 50.625C30.0406 50.625 33.125 47.5406 33.125 43.75ZM42.0631 42.9469L40.1831 41.0669L41.0669 40.1831L42.9469 42.0631C43.1912 41.9456 43.4613 41.875 43.75 41.875C44.7838 41.875 45.625 42.7162 45.625 43.75C45.625 44.5637 45.1006 45.2513 44.375 45.51V46.875H43.125V45.51C42.3994 45.2513 41.875 44.5637 41.875 43.75C41.875 43.4613 41.9456 43.1912 42.0631 42.9469ZM43.125 43.75C43.125 44.095 43.405 44.375 43.75 44.375C44.095 44.375 44.375 44.095 44.375 43.75C44.375 43.405 44.095 43.125 43.75 43.125C43.405 43.125 43.125 43.405 43.125 43.75ZM54.375 43.75C54.375 49.6087 49.6087 54.375 43.75 54.375C40.2356 54.375 36.9725 52.6287 35.0006 49.7631C33.0825 52.5456 29.8775 54.375 26.25 54.375C20.3913 54.375 15.625 49.6087 15.625 43.75C15.625 39.5081 18.13 35.8494 21.7325 34.1475C21.6725 33.9225 21.6044 33.6956 21.5575 33.4744L20 32.9487V28.3006L21.5569 27.7756C21.9069 26.1094 22.5512 24.5494 23.4775 23.1287L22.75 21.6619L26.0363 18.375L27.5044 19.1025C28.9237 18.1769 30.4838 17.5319 32.1519 17.1812L32.6763 15.625H37.3237L37.8487 17.1819C39.5169 17.5325 41.0763 18.1775 42.4963 19.1031L43.9637 18.375L47.25 21.6613L46.5225 23.1294C47.4488 24.5494 48.0938 26.11 48.4431 27.7762L50 28.3012V32.9494L48.4425 33.4744C48.3956 33.6956 48.3275 33.9225 48.2675 34.1475C51.87 35.8494 54.375 39.5081 54.375 43.75ZM22.8906 33.6781C23.2819 33.5475 23.68 33.4319 24.0894 33.3469C23.8669 32.4562 23.75 31.5444 23.75 30.625C23.75 24.4219 28.7969 19.375 35 19.375C40.2956 19.375 44.825 23.0431 45.9675 28.1594C46.8381 28.3212 47.5 29.0831 47.5 30C47.5 30.8138 46.9756 31.5013 46.25 31.76V33.4344C46.5413 33.505 46.8281 33.5837 47.1094 33.6781C47.1775 33.4106 47.2375 33.145 47.285 32.885L47.3506 32.5225L48.75 32.0513V29.1994L47.3512 28.7275L47.2856 28.365C46.9656 26.6144 46.2937 24.9888 45.2875 23.5325L45.0788 23.23L45.7319 21.9112L43.7144 19.8938L42.3956 20.5469L42.0931 20.3375C40.6381 19.3325 39.0119 18.66 37.2606 18.3394L36.8981 18.2731L36.4263 16.875H33.5737L33.1025 18.2731L32.74 18.3394C30.9881 18.66 29.3625 19.3319 27.9075 20.3375L27.605 20.5469L26.2863 19.8938L24.2694 21.9106L24.9225 23.2294L24.7137 23.5319C23.7075 24.9881 23.035 26.6144 22.7156 28.3644L22.65 28.7269L21.25 29.1988V32.0506L22.6487 32.5225L22.7144 32.885C22.7625 33.145 22.8231 33.4106 22.8906 33.6781ZM35.0006 37.7369C36.4937 35.5675 38.7269 34.0431 41.25 33.43V31.76C40.5244 31.5013 40 30.8138 40 30C40 28.9663 40.8412 28.125 41.875 28.125H42.0694C41.0244 25.1462 38.2244 23.125 35 23.125C30.8644 23.125 27.5 26.4894 27.5 30.625C27.5 31.5431 27.6719 32.4338 27.9938 33.2806C30.8913 33.7625 33.3975 35.4113 35.0006 37.7369ZM26.25 33.125C26.3756 33.125 26.4981 33.1394 26.6225 33.1438C26.3781 32.3313 26.25 31.4881 26.25 30.625C26.25 25.8 30.175 21.875 35 21.875C38.9094 21.875 42.2831 24.4225 43.3806 28.125H44.68C43.5556 23.7381 39.6012 20.625 35 20.625C29.4862 20.625 25 25.1112 25 30.625C25 31.4862 25.1175 32.3394 25.3369 33.1712C25.6388 33.1456 25.9419 33.125 26.25 33.125ZM46.25 30C46.25 29.6556 45.97 29.375 45.625 29.375H41.875C41.53 29.375 41.25 29.6556 41.25 30C41.25 30.3444 41.53 30.625 41.875 30.625H45.625C45.97 30.625 46.25 30.3444 46.25 30ZM42.5 33.2038C42.9125 33.1544 43.3288 33.125 43.75 33.125C44.1737 33.125 44.5894 33.1569 45 33.205V31.875H42.5V33.2038ZM35.625 43.75C35.625 38.5806 31.4194 34.375 26.25 34.375C21.0806 34.375 16.875 38.5806 16.875 43.75C16.875 48.9194 21.0806 53.125 26.25 53.125C31.4194 53.125 35.625 48.9194 35.625 43.75ZM36.9069 43.125H38.125V44.375H36.9069C37.0362 45.8019 37.6012 47.1038 38.47 48.1463L39.3306 47.2856L40.2144 48.1694L39.3538 49.03C40.3956 49.8994 41.6981 50.4637 43.125 50.5931V49.375H44.375V50.5931C45.8019 50.4637 47.1038 49.8988 48.1463 49.03L47.2856 48.1694L48.1694 47.2856L49.03 48.1463C49.8994 47.1044 50.4637 45.8019 50.5931 44.375H49.375V43.125H50.5931C50.4637 41.6981 49.8988 40.3962 49.03 39.3538L48.1694 40.2144L47.2856 39.3306L48.1463 38.47C47.1044 37.6006 45.8019 37.0362 44.375 36.9069V38.125H43.125V36.9069C41.6981 37.0362 40.3962 37.6012 39.3538 38.47L40.2144 39.3306L39.3306 40.2144L38.47 39.3538C37.6006 40.3962 37.0362 41.6981 36.9069 43.125ZM53.125 43.75C53.125 38.5806 48.9194 34.375 43.75 34.375C40.4513 34.375 37.4031 36.1181 35.7119 38.94C35.9569 39.42 36.1688 39.9181 36.3394 40.4363C37.61 37.605 40.4506 35.625 43.75 35.625C48.23 35.625 51.875 39.27 51.875 43.75C51.875 48.23 48.23 51.875 43.75 51.875C40.4506 51.875 37.61 49.895 36.3387 47.0637C36.1681 47.5819 35.9563 48.0806 35.7113 48.56C37.4031 51.3819 40.4513 53.125 43.75 53.125C48.9194 53.125 53.125 48.9194 53.125 43.75ZM28.75 30.625H30C30 28.7125 31.0644 26.9956 32.7781 26.1444L32.2213 25.025C30.0806 26.0894 28.75 28.235 28.75 30.625ZM33.8888 25.7487C34.2512 25.6669 34.625 25.625 35 25.625V24.375C34.5319 24.375 34.065 24.4269 33.6112 24.53L33.8888 25.7487Z"
                                                    fill="white"></path>
                                            </g>
                                            <defs>
                                                <clippath id="clip0_9088_7937">
                                                    <rect width="40" height="40" fill="white"
                                                        transform="translate(15 15)"></rect>
                                                </clippath>
                                            </defs>
                                        </svg>

                                        <h2 class="heading text-24 text-rotate">
                                            Public Sector & Development Consulting
                                        </h2>
                                    </div>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24"
                                        stroke-width="1" stroke="currentColor" class="icon icon-plus-circle">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"></path>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24"
                                        stroke-width="1" stroke="currentColor" class="icon icon-minus-circle">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15 12H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"></path>
                                    </svg>
                                </div>
                                <div class="accordion-content">
                                    <div class="service-content-inner">
                                        <div>
                                            <svg width="70" height="70" viewbox="0 0 70 70" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect width="70" height="70" rx="10" fill="#1C2539">
                                                </rect>
                                                <g clip-path="url(#clip0_9088_793777)">
                                                    <path
                                                        d="M27.5 41.875V41.8156C27.5 41.1587 26.9662 40.625 26.3094 40.625H26.1912C25.5338 40.625 25 41.1587 25 41.8156C25 42.3287 25.3269 42.7831 25.815 42.9463L27.0806 43.3687C28.0794 43.7013 28.75 44.6319 28.75 45.6844C28.75 46.8344 27.9475 47.7956 26.875 48.0525V49.375H25.625V48.0519C24.5525 47.795 23.75 46.8344 23.75 45.6838V45H25V45.6844C25 46.3413 25.5338 46.875 26.1906 46.875H26.3088C26.9662 46.875 27.5 46.3413 27.5 45.6844C27.5 45.1713 27.1731 44.7169 26.685 44.5537L25.4194 44.1313C24.4206 43.7987 23.75 42.8681 23.75 41.8156C23.75 40.6656 24.5525 39.7044 25.625 39.4475V38.125H26.875V39.4481C27.9475 39.705 28.75 40.6656 28.75 41.8162L27.5 41.875ZM34.375 43.75C34.375 48.23 30.73 51.875 26.25 51.875C21.77 51.875 18.125 48.23 18.125 43.75C18.125 39.27 21.77 35.625 26.25 35.625C30.73 35.625 34.375 39.27 34.375 43.75ZM33.125 43.75C33.125 39.9594 30.0406 36.875 26.25 36.875C22.4594 36.875 19.375 39.9594 19.375 43.75C19.375 47.5406 22.4594 50.625 26.25 50.625C30.0406 50.625 33.125 47.5406 33.125 43.75ZM42.0631 42.9469L40.1831 41.0669L41.0669 40.1831L42.9469 42.0631C43.1912 41.9456 43.4613 41.875 43.75 41.875C44.7838 41.875 45.625 42.7162 45.625 43.75C45.625 44.5637 45.1006 45.2513 44.375 45.51V46.875H43.125V45.51C42.3994 45.2513 41.875 44.5637 41.875 43.75C41.875 43.4613 41.9456 43.1912 42.0631 42.9469ZM43.125 43.75C43.125 44.095 43.405 44.375 43.75 44.375C44.095 44.375 44.375 44.095 44.375 43.75C44.375 43.405 44.095 43.125 43.75 43.125C43.405 43.125 43.125 43.405 43.125 43.75ZM54.375 43.75C54.375 49.6087 49.6087 54.375 43.75 54.375C40.2356 54.375 36.9725 52.6287 35.0006 49.7631C33.0825 52.5456 29.8775 54.375 26.25 54.375C20.3913 54.375 15.625 49.6087 15.625 43.75C15.625 39.5081 18.13 35.8494 21.7325 34.1475C21.6725 33.9225 21.6044 33.6956 21.5575 33.4744L20 32.9487V28.3006L21.5569 27.7756C21.9069 26.1094 22.5512 24.5494 23.4775 23.1287L22.75 21.6619L26.0363 18.375L27.5044 19.1025C28.9237 18.1769 30.4838 17.5319 32.1519 17.1812L32.6763 15.625H37.3237L37.8487 17.1819C39.5169 17.5325 41.0763 18.1775 42.4963 19.1031L43.9637 18.375L47.25 21.6613L46.5225 23.1294C47.4488 24.5494 48.0938 26.11 48.4431 27.7762L50 28.3012V32.9494L48.4425 33.4744C48.3956 33.6956 48.3275 33.9225 48.2675 34.1475C51.87 35.8494 54.375 39.5081 54.375 43.75ZM22.8906 33.6781C23.2819 33.5475 23.68 33.4319 24.0894 33.3469C23.8669 32.4562 23.75 31.5444 23.75 30.625C23.75 24.4219 28.7969 19.375 35 19.375C40.2956 19.375 44.825 23.0431 45.9675 28.1594C46.8381 28.3212 47.5 29.0831 47.5 30C47.5 30.8138 46.9756 31.5013 46.25 31.76V33.4344C46.5413 33.505 46.8281 33.5837 47.1094 33.6781C47.1775 33.4106 47.2375 33.145 47.285 32.885L47.3506 32.5225L48.75 32.0513V29.1994L47.3512 28.7275L47.2856 28.365C46.9656 26.6144 46.2937 24.9888 45.2875 23.5325L45.0788 23.23L45.7319 21.9112L43.7144 19.8938L42.3956 20.5469L42.0931 20.3375C40.6381 19.3325 39.0119 18.66 37.2606 18.3394L36.8981 18.2731L36.4263 16.875H33.5737L33.1025 18.2731L32.74 18.3394C30.9881 18.66 29.3625 19.3319 27.9075 20.3375L27.605 20.5469L26.2863 19.8938L24.2694 21.9106L24.9225 23.2294L24.7137 23.5319C23.7075 24.9881 23.035 26.6144 22.7156 28.3644L22.65 28.7269L21.25 29.1988V32.0506L22.6487 32.5225L22.7144 32.885C22.7625 33.145 22.8231 33.4106 22.8906 33.6781ZM35.0006 37.7369C36.4937 35.5675 38.7269 34.0431 41.25 33.43V31.76C40.5244 31.5013 40 30.8138 40 30C40 28.9663 40.8412 28.125 41.875 28.125H42.0694C41.0244 25.1462 38.2244 23.125 35 23.125C30.8644 23.125 27.5 26.4894 27.5 30.625C27.5 31.5431 27.6719 32.4338 27.9938 33.2806C30.8913 33.7625 33.3975 35.4113 35.0006 37.7369ZM26.25 33.125C26.3756 33.125 26.4981 33.1394 26.6225 33.1438C26.3781 32.3313 26.25 31.4881 26.25 30.625C26.25 25.8 30.175 21.875 35 21.875C38.9094 21.875 42.2831 24.4225 43.3806 28.125H44.68C43.5556 23.7381 39.6012 20.625 35 20.625C29.4862 20.625 25 25.1112 25 30.625C25 31.4862 25.1175 32.3394 25.3369 33.1712C25.6388 33.1456 25.9419 33.125 26.25 33.125ZM46.25 30C46.25 29.6556 45.97 29.375 45.625 29.375H41.875C41.53 29.375 41.25 29.6556 41.25 30C41.25 30.3444 41.53 30.625 41.875 30.625H45.625C45.97 30.625 46.25 30.3444 46.25 30ZM42.5 33.2038C42.9125 33.1544 43.3288 33.125 43.75 33.125C44.1737 33.125 44.5894 33.1569 45 33.205V31.875H42.5V33.2038ZM35.625 43.75C35.625 38.5806 31.4194 34.375 26.25 34.375C21.0806 34.375 16.875 38.5806 16.875 43.75C16.875 48.9194 21.0806 53.125 26.25 53.125C31.4194 53.125 35.625 48.9194 35.625 43.75ZM36.9069 43.125H38.125V44.375H36.9069C37.0362 45.8019 37.6012 47.1038 38.47 48.1463L39.3306 47.2856L40.2144 48.1694L39.3538 49.03C40.3956 49.8994 41.6981 50.4637 43.125 50.5931V49.375H44.375V50.5931C45.8019 50.4637 47.1038 49.8988 48.1463 49.03L47.2856 48.1694L48.1694 47.2856L49.03 48.1463C49.8994 47.1044 50.4637 45.8019 50.5931 44.375H49.375V43.125H50.5931C50.4637 41.6981 49.8988 40.3962 49.03 39.3538L48.1694 40.2144L47.2856 39.3306L48.1463 38.47C47.1044 37.6006 45.8019 37.0362 44.375 36.9069V38.125H43.125V36.9069C41.6981 37.0362 40.3962 37.6012 39.3538 38.47L40.2144 39.3306L39.3306 40.2144L38.47 39.3538C37.6006 40.3962 37.0362 41.6981 36.9069 43.125ZM53.125 43.75C53.125 38.5806 48.9194 34.375 43.75 34.375C40.4513 34.375 37.4031 36.1181 35.7119 38.94C35.9569 39.42 36.1688 39.9181 36.3394 40.4363C37.61 37.605 40.4506 35.625 43.75 35.625C48.23 35.625 51.875 39.27 51.875 43.75C51.875 48.23 48.23 51.875 43.75 51.875C40.4506 51.875 37.61 49.895 36.3387 47.0637C36.1681 47.5819 35.9563 48.0806 35.7113 48.56C37.4031 51.3819 40.4513 53.125 43.75 53.125C48.9194 53.125 53.125 48.9194 53.125 43.75ZM28.75 30.625H30C30 28.7125 31.0644 26.9956 32.7781 26.1444L32.2213 25.025C30.0806 26.0894 28.75 28.235 28.75 30.625ZM33.8888 25.7487C34.2512 25.6669 34.625 25.625 35 25.625V24.375C34.5319 24.375 34.065 24.4269 33.6112 24.53L33.8888 25.7487Z"
                                                        fill="white"></path>
                                                </g>
                                                <defs>
                                                    <clippath id="clip0_9088_793777">
                                                        <rect width="40" height="40" fill="white"
                                                            transform="translate(15 15)"></rect>
                                                    </clippath>
                                                </defs>
                                            </svg>

                                            <h2 class="heading text-24">
                                                Public Sector & Development Consulting
                                            </h2>
                                            <p class="text text-16">
                                                Shaping policies and programs that create lasting impact. We equip
                                                leaders, teams, and
                                                institutions with the skills, strategies, and policies to thrive in
                                                disruption and create
                                                lasting impact.
                                            </p>
                                        </div>
                                        <div class="service-button">
                                            <a href="/service-details" class="button button--primary">
                                                + View Details
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion-li">
                                <div class="accordion-title">
                                    <div class="accordion-title-icon">
                                        <svg width="70" height="70" viewbox="0 0 70 70" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <rect width="70" height="70" rx="10" fill="#20282D">
                                            </rect>
                                            <g clip-path="url(#clip0_9088_7947)">
                                                <path
                                                    d="M39.4969 44.0801L39.891 43.2916L38.3206 41.7213L37.5328 42.1154C37.1711 41.9109 36.7884 41.7521 36.3889 41.6413L36.1104 40.8065H33.8896L33.6117 41.6419C33.2123 41.7528 32.8298 41.9115 32.4679 42.116L31.68 41.7219L30.1096 43.2923L30.5037 44.0808C30.2993 44.4427 30.1405 44.8252 30.029 45.2246L29.1935 45.5025V47.7227L30.0284 48.0012C30.1392 48.4006 30.298 48.7831 30.5031 49.145L30.109 49.9329L31.6794 51.5039L32.4672 51.1098C32.8289 51.3143 33.2116 51.473 33.6111 51.5839L33.8896 52.4194H36.1104L36.3883 51.5839C36.7877 51.473 37.1702 51.3143 37.5321 51.1098L38.32 51.5039L39.8904 49.9329L39.4963 49.145C39.7007 48.7824 39.8595 48.4006 39.971 48.0012L40.8065 47.7234V45.5031L39.9716 45.2246C39.8601 44.8252 39.7014 44.4418 39.4969 44.0801ZM39.5161 46.7928L38.8684 47.0083L38.7947 47.3756C38.6961 47.8698 38.5033 48.3335 38.2227 48.7554L38.0147 49.0666L38.3206 49.6781L38.0658 49.9335L37.455 49.627L37.1431 49.8349C36.7219 50.1162 36.2576 50.3078 35.7633 50.407L35.396 50.4801L35.1799 51.129H34.8201L34.604 50.4807L34.2367 50.4076C33.7424 50.309 33.2787 50.1169 32.8569 49.8356L32.545 49.6276L31.9342 49.9342L31.6794 49.6787L31.9853 49.0672L31.7773 48.756C31.496 48.3348 31.3039 47.8705 31.2053 47.3762L31.1316 47.0089L30.4839 46.7928V46.4324L31.1316 46.2169L31.2053 45.8496C31.3039 45.3547 31.4967 44.891 31.7773 44.4698L31.9853 44.1586L31.6794 43.5465L31.9342 43.2916L32.545 43.5982L32.8569 43.3902C33.2781 43.1089 33.7424 42.9174 34.2367 42.8182L34.604 42.7451L34.8201 42.0968H35.1799L35.396 42.7451L35.7633 42.8182C36.2576 42.9168 36.7213 43.1089 37.1431 43.3902L37.455 43.5982L38.0658 43.2916L38.3206 43.5465L38.0147 44.1586L38.2227 44.4698C38.504 44.8904 38.6961 45.3547 38.7947 45.8496L38.8684 46.2169L39.5161 46.433V46.7928ZM35 44.0323C33.5767 44.0323 32.4194 45.1896 32.4194 46.6129C32.4194 48.0362 33.5767 49.1936 35 49.1936C36.4233 49.1936 37.5806 48.0362 37.5806 46.6129C37.5806 45.1896 36.4233 44.0323 35 44.0323ZM35 47.9032C34.2884 47.9032 33.7097 47.3245 33.7097 46.6129C33.7097 45.9013 34.2884 45.3226 35 45.3226C35.7116 45.3226 36.2903 45.9013 36.2903 46.6129C36.2903 47.3245 35.7116 47.9032 35 47.9032ZM50.0819 28.9762C50.7214 28.3865 51.129 27.5491 51.129 26.6129V25.3226C51.129 23.544 49.6818 22.0968 47.9032 22.0968C46.1246 22.0968 44.6774 23.544 44.6774 25.3226V26.6129C44.6774 27.5491 45.0851 28.3865 45.7245 28.9762C43.791 29.7625 42.3737 31.5594 42.1349 33.7097H42.0968V26.6129H40.7683C40.5296 24.4626 39.1123 22.6657 37.1787 21.8794C37.8182 21.2897 38.2258 20.4524 38.2258 19.5161V18.2258C38.2258 16.4472 36.7786 15 35 15C33.2214 15 31.7742 16.4472 31.7742 18.2258V19.5161C31.7742 20.4524 32.1818 21.2897 32.8213 21.8794C30.8877 22.6657 29.4705 24.4626 29.2317 26.6129H27.9032V33.7097H27.8651C27.6263 31.5594 26.209 29.7625 24.2755 28.9762C24.9149 28.3865 25.3226 27.5491 25.3226 26.6129V25.3226C25.3226 23.544 23.8754 22.0968 22.0968 22.0968C20.3182 22.0968 18.871 23.544 18.871 25.3226V26.6129C18.871 27.5491 19.2786 28.3865 19.9181 28.9762C17.9845 29.7625 16.5672 31.5594 16.3284 33.7097H15V46.6129H26.6129C26.6129 51.2374 30.3755 55 35 55C39.6245 55 43.3871 51.2374 43.3871 46.6129H55V33.7097H53.6716C53.4328 31.5594 52.0155 29.7625 50.0819 28.9762ZM45.9677 26.6129V25.3226C45.9677 24.2556 46.8363 23.3871 47.9032 23.3871C48.9702 23.3871 49.8387 24.2556 49.8387 25.3226V26.6129C49.8387 27.6799 48.9702 28.5484 47.9032 28.5484C46.8363 28.5484 45.9677 27.6799 45.9677 26.6129ZM47.9032 29.8387C50.1736 29.8387 52.053 31.525 52.3677 33.7097H43.4388C43.7535 31.525 45.6329 29.8387 47.9032 29.8387ZM33.0645 19.5161V18.2258C33.0645 17.1588 33.933 16.2903 35 16.2903C36.067 16.2903 36.9355 17.1588 36.9355 18.2258V19.5161C36.9355 20.5831 36.067 21.4516 35 21.4516C33.933 21.4516 33.0645 20.5831 33.0645 19.5161ZM35 22.7419C37.2704 22.7419 39.1498 24.4282 39.4645 26.6129H30.5355C30.8502 24.4282 32.7297 22.7419 35 22.7419ZM20.1613 26.6129V25.3226C20.1613 24.2556 21.0298 23.3871 22.0968 23.3871C23.1637 23.3871 24.0323 24.2556 24.0323 25.3226V26.6129C24.0323 27.6799 23.1637 28.5484 22.0968 28.5484C21.0298 28.5484 20.1613 27.6799 20.1613 26.6129ZM22.0968 29.8387C24.3671 29.8387 26.2465 31.525 26.5612 33.7097H17.6323C17.947 31.525 19.8264 29.8387 22.0968 29.8387ZM35 53.7097C31.0871 53.7097 27.9032 50.5258 27.9032 46.6129C27.9032 42.7 31.0871 39.5161 35 39.5161C38.9129 39.5161 42.0968 42.7 42.0968 46.6129C42.0968 50.5258 38.9129 53.7097 35 53.7097ZM53.7097 45.3226H43.2775C42.6534 41.3102 39.185 38.2258 35 38.2258C30.815 38.2258 27.3466 41.3102 26.7225 45.3226H16.2903V35H27.9032V38.871H29.1935V27.9032H40.8065V38.871H42.0968V35H53.7097V45.3226ZM33.0645 29.1935H36.9355V30.4839H35.6452V35.6452H36.9355V36.9355H33.0645V35.6452H34.3548V30.4839H33.0645V29.1935ZM18.871 37.5806H20.1613V42.7419H18.871V44.0323H25.3226V42.7419H24.0323V37.5806H25.3226V36.2903H18.871V37.5806ZM22.7419 42.7419H21.4516V37.5806H22.7419V42.7419ZM43.3871 42.7419V44.0323H52.4194V42.7419H51.129V37.5806H52.4194V36.2903H43.3871V37.5806H44.6774V42.7419H43.3871ZM49.8387 42.7419H48.5484V37.5806H49.8387V42.7419ZM45.9677 37.5806H47.2581V42.7419H45.9677V37.5806Z"
                                                    fill="white"></path>
                                            </g>
                                            <defs>
                                                <clippath id="clip0_9088_7947">
                                                    <rect width="40" height="40" fill="white"
                                                        transform="translate(15 15)"></rect>
                                                </clippath>
                                            </defs>
                                        </svg>

                                        <h2 class="heading text-24 text-rotate">
                                            Strategy & Leadership Advisory
                                        </h2>
                                    </div>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24"
                                        stroke-width="1" stroke="currentColor" class="icon icon-plus-circle">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"></path>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24"
                                        stroke-width="1" stroke="currentColor" class="icon icon-minus-circle">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15 12H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"></path>
                                    </svg>
                                </div>
                                <div class="accordion-content">
                                    <div class="service-content-inner">
                                        <div>
                                            <svg width="70" height="70" viewbox="0 0 70 70"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect width="70" height="70" rx="10"
                                                    fill="#1C2539"></rect>
                                                <g clip-path="url(#clip0_9088_7947567)">
                                                    <path
                                                        d="M39.4969 44.0801L39.891 43.2916L38.3206 41.7213L37.5328 42.1154C37.1711 41.9109 36.7884 41.7521 36.3889 41.6413L36.1104 40.8065H33.8896L33.6117 41.6419C33.2123 41.7528 32.8298 41.9115 32.4679 42.116L31.68 41.7219L30.1096 43.2923L30.5037 44.0808C30.2993 44.4427 30.1405 44.8252 30.029 45.2246L29.1935 45.5025V47.7227L30.0284 48.0012C30.1392 48.4006 30.298 48.7831 30.5031 49.145L30.109 49.9329L31.6794 51.5039L32.4672 51.1098C32.8289 51.3143 33.2116 51.473 33.6111 51.5839L33.8896 52.4194H36.1104L36.3883 51.5839C36.7877 51.473 37.1702 51.3143 37.5321 51.1098L38.32 51.5039L39.8904 49.9329L39.4963 49.145C39.7007 48.7824 39.8595 48.4006 39.971 48.0012L40.8065 47.7234V45.5031L39.9716 45.2246C39.8601 44.8252 39.7014 44.4418 39.4969 44.0801ZM39.5161 46.7928L38.8684 47.0083L38.7947 47.3756C38.6961 47.8698 38.5033 48.3335 38.2227 48.7554L38.0147 49.0666L38.3206 49.6781L38.0658 49.9335L37.455 49.627L37.1431 49.8349C36.7219 50.1162 36.2576 50.3078 35.7633 50.407L35.396 50.4801L35.1799 51.129H34.8201L34.604 50.4807L34.2367 50.4076C33.7424 50.309 33.2787 50.1169 32.8569 49.8356L32.545 49.6276L31.9342 49.9342L31.6794 49.6787L31.9853 49.0672L31.7773 48.756C31.496 48.3348 31.3039 47.8705 31.2053 47.3762L31.1316 47.0089L30.4839 46.7928V46.4324L31.1316 46.2169L31.2053 45.8496C31.3039 45.3547 31.4967 44.891 31.7773 44.4698L31.9853 44.1586L31.6794 43.5465L31.9342 43.2916L32.545 43.5982L32.8569 43.3902C33.2781 43.1089 33.7424 42.9174 34.2367 42.8182L34.604 42.7451L34.8201 42.0968H35.1799L35.396 42.7451L35.7633 42.8182C36.2576 42.9168 36.7213 43.1089 37.1431 43.3902L37.455 43.5982L38.0658 43.2916L38.3206 43.5465L38.0147 44.1586L38.2227 44.4698C38.504 44.8904 38.6961 45.3547 38.7947 45.8496L38.8684 46.2169L39.5161 46.433V46.7928ZM35 44.0323C33.5767 44.0323 32.4194 45.1896 32.4194 46.6129C32.4194 48.0362 33.5767 49.1936 35 49.1936C36.4233 49.1936 37.5806 48.0362 37.5806 46.6129C37.5806 45.1896 36.4233 44.0323 35 44.0323ZM35 47.9032C34.2884 47.9032 33.7097 47.3245 33.7097 46.6129C33.7097 45.9013 34.2884 45.3226 35 45.3226C35.7116 45.3226 36.2903 45.9013 36.2903 46.6129C36.2903 47.3245 35.7116 47.9032 35 47.9032ZM50.0819 28.9762C50.7214 28.3865 51.129 27.5491 51.129 26.6129V25.3226C51.129 23.544 49.6818 22.0968 47.9032 22.0968C46.1246 22.0968 44.6774 23.544 44.6774 25.3226V26.6129C44.6774 27.5491 45.0851 28.3865 45.7245 28.9762C43.791 29.7625 42.3737 31.5594 42.1349 33.7097H42.0968V26.6129H40.7683C40.5296 24.4626 39.1123 22.6657 37.1787 21.8794C37.8182 21.2897 38.2258 20.4524 38.2258 19.5161V18.2258C38.2258 16.4472 36.7786 15 35 15C33.2214 15 31.7742 16.4472 31.7742 18.2258V19.5161C31.7742 20.4524 32.1818 21.2897 32.8213 21.8794C30.8877 22.6657 29.4705 24.4626 29.2317 26.6129H27.9032V33.7097H27.8651C27.6263 31.5594 26.209 29.7625 24.2755 28.9762C24.9149 28.3865 25.3226 27.5491 25.3226 26.6129V25.3226C25.3226 23.544 23.8754 22.0968 22.0968 22.0968C20.3182 22.0968 18.871 23.544 18.871 25.3226V26.6129C18.871 27.5491 19.2786 28.3865 19.9181 28.9762C17.9845 29.7625 16.5672 31.5594 16.3284 33.7097H15V46.6129H26.6129C26.6129 51.2374 30.3755 55 35 55C39.6245 55 43.3871 51.2374 43.3871 46.6129H55V33.7097H53.6716C53.4328 31.5594 52.0155 29.7625 50.0819 28.9762ZM45.9677 26.6129V25.3226C45.9677 24.2556 46.8363 23.3871 47.9032 23.3871C48.9702 23.3871 49.8387 24.2556 49.8387 25.3226V26.6129C49.8387 27.6799 48.9702 28.5484 47.9032 28.5484C46.8363 28.5484 45.9677 27.6799 45.9677 26.6129ZM47.9032 29.8387C50.1736 29.8387 52.053 31.525 52.3677 33.7097H43.4388C43.7535 31.525 45.6329 29.8387 47.9032 29.8387ZM33.0645 19.5161V18.2258C33.0645 17.1588 33.933 16.2903 35 16.2903C36.067 16.2903 36.9355 17.1588 36.9355 18.2258V19.5161C36.9355 20.5831 36.067 21.4516 35 21.4516C33.933 21.4516 33.0645 20.5831 33.0645 19.5161ZM35 22.7419C37.2704 22.7419 39.1498 24.4282 39.4645 26.6129H30.5355C30.8502 24.4282 32.7297 22.7419 35 22.7419ZM20.1613 26.6129V25.3226C20.1613 24.2556 21.0298 23.3871 22.0968 23.3871C23.1637 23.3871 24.0323 24.2556 24.0323 25.3226V26.6129C24.0323 27.6799 23.1637 28.5484 22.0968 28.5484C21.0298 28.5484 20.1613 27.6799 20.1613 26.6129ZM22.0968 29.8387C24.3671 29.8387 26.2465 31.525 26.5612 33.7097H17.6323C17.947 31.525 19.8264 29.8387 22.0968 29.8387ZM35 53.7097C31.0871 53.7097 27.9032 50.5258 27.9032 46.6129C27.9032 42.7 31.0871 39.5161 35 39.5161C38.9129 39.5161 42.0968 42.7 42.0968 46.6129C42.0968 50.5258 38.9129 53.7097 35 53.7097ZM53.7097 45.3226H43.2775C42.6534 41.3102 39.185 38.2258 35 38.2258C30.815 38.2258 27.3466 41.3102 26.7225 45.3226H16.2903V35H27.9032V38.871H29.1935V27.9032H40.8065V38.871H42.0968V35H53.7097V45.3226ZM33.0645 29.1935H36.9355V30.4839H35.6452V35.6452H36.9355V36.9355H33.0645V35.6452H34.3548V30.4839H33.0645V29.1935ZM18.871 37.5806H20.1613V42.7419H18.871V44.0323H25.3226V42.7419H24.0323V37.5806H25.3226V36.2903H18.871V37.5806ZM22.7419 42.7419H21.4516V37.5806H22.7419V42.7419ZM43.3871 42.7419V44.0323H52.4194V42.7419H51.129V37.5806H52.4194V36.2903H43.3871V37.5806H44.6774V42.7419H43.3871ZM49.8387 42.7419H48.5484V37.5806H49.8387V42.7419ZM45.9677 37.5806H47.2581V42.7419H45.9677V37.5806Z"
                                                        fill="white"></path>
                                                </g>
                                                <defs>
                                                    <clippath id="clip0_9088_7947567">
                                                        <rect width="40" height="40" fill="white"
                                                            transform="translate(15 15)"></rect>
                                                    </clippath>
                                                </defs>
                                            </svg>

                                            <h2 class="heading text-24">
                                                Strategy & Leadership Advisory
                                            </h2>
                                            <p class="text text-16">
                                                Guiding leaders and institutions to thrive in times of disruption. We
                                                provide clear strategies,
                                                innovative models, and practical guidance to support growth, expansion,
                                                and long-term success.

                                            </p>
                                        </div>
                                        <div class="service-button">
                                            <a href="/service-details" class="button button--primary">
                                                + View Details
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion-li">
                                <div class="accordion-title">
                                    <div class="accordion-title-icon">
                                        <svg width="70" height="70" viewbox="0 0 70 70" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <rect width="70" height="70" rx="10" fill="#20282D">
                                            </rect>
                                            <g clip-path="url(#clip0_9088_7957)">
                                                <path
                                                    d="M41.7088 20.625H40.7125L36.8694 19.5269C36.5675 19.4406 36.255 19.4056 35.9412 19.3938L33.1138 18.4894C31.825 18.0769 30.4306 18.0137 29.1087 18.3075L24.9688 19.2281L19.5644 15.625H15.625V24.8125L22.855 27.4419L25.0063 28.7325C25.0369 29.7575 25.8587 30.5819 26.8825 30.6181C26.9187 31.6381 27.7375 32.4569 28.7575 32.4931C28.7881 33.3506 29.3725 34.0625 30.1656 34.2906C26.6194 36.0963 24.375 39.7075 24.375 43.75C24.375 49.6087 29.1413 54.375 35 54.375C40.8587 54.375 45.625 49.6087 45.625 43.75C45.625 39.4175 43.0644 35.6219 39.1519 33.9725C39.2863 33.7163 39.3687 33.43 39.3725 33.1225C40.4019 33.1094 41.2356 32.275 41.2475 31.2456C42.2862 31.2206 43.125 30.3719 43.125 29.3275C43.125 29.2562 43.1106 29.1875 43.1025 29.1169L45.8819 27.4494L54.375 24.8369V15.625H50.4588L41.7088 20.625ZM16.875 23.9375V16.875H19.1856L24.2781 20.27L22.7 26.0556L16.875 23.9375ZM26.25 28.6744C26.25 28.4869 26.3231 28.3113 26.455 28.1788L28.1788 26.455C28.3113 26.3231 28.4869 26.25 28.6744 26.25C29.0606 26.25 29.375 26.5644 29.375 26.9506C29.375 27.1381 29.3019 27.3137 29.17 27.4462L27.4462 29.17C27.3137 29.3019 27.1381 29.375 26.9506 29.375C26.5644 29.375 26.25 29.0606 26.25 28.6744ZM28.125 30.5494C28.125 30.3619 28.1981 30.1863 28.33 30.0538L30.0538 28.33C30.1863 28.1981 30.3619 28.125 30.5494 28.125C30.9356 28.125 31.25 28.4394 31.25 28.8256C31.25 29.0131 31.1769 29.1887 31.045 29.3212L29.3212 31.045C29.1887 31.1769 29.0131 31.25 28.8256 31.25C28.4394 31.25 28.125 30.9356 28.125 30.5494ZM30.205 31.9288L31.9288 30.205C32.0613 30.0731 32.2369 30 32.4244 30C32.8106 30 33.125 30.3144 33.125 30.7006C33.125 30.8881 33.0519 31.0637 32.92 31.1962L31.1962 32.92C31.0637 33.0519 30.8881 33.125 30.7006 33.125C30.3144 33.125 30 32.8106 30 32.4244C30 32.2369 30.0731 32.0613 30.205 31.9288ZM34.2994 31.875C34.6856 31.875 35 32.1894 35 32.5756C35 32.7631 34.9269 32.9387 34.795 33.0712L33.0712 34.795C32.9387 34.9269 32.7631 35 32.5756 35C32.1894 35 31.875 34.6856 31.875 34.2994C31.875 34.1119 31.9481 33.9363 32.08 33.8038L33.8038 32.08C33.9363 31.9481 34.1119 31.875 34.2994 31.875ZM35.55 34.0844L36.0156 34.4725C36.1644 34.5963 36.25 34.7788 36.25 34.9731C36.25 35.3325 35.9575 35.625 35.5981 35.625H35.4825C35.3237 35.625 35.1706 35.5669 35.0513 35.4619L34.5837 35.0494L35.55 34.0844ZM35 36.875C38.7906 36.875 41.875 39.9594 41.875 43.75C41.875 47.5406 38.7906 50.625 35 50.625C31.2094 50.625 28.125 47.5406 28.125 43.75C28.125 39.9594 31.2094 36.875 35 36.875ZM44.375 43.75C44.375 48.9194 40.1694 53.125 35 53.125C29.8306 53.125 25.625 48.9194 25.625 43.75C25.625 40.1138 27.6812 36.8706 30.9156 35.31C31.1744 35.7331 31.5869 36.0469 32.0775 36.1775C29.0387 37.3544 26.875 40.3006 26.875 43.75C26.875 48.23 30.52 51.875 35 51.875C39.48 51.875 43.125 48.23 43.125 43.75C43.125 40.0419 40.6256 36.9131 37.2256 35.9425C37.3919 35.6644 37.4931 35.3438 37.4975 34.9975C37.6969 34.995 37.8863 34.9556 38.0669 34.8956C41.8525 36.2013 44.375 39.7106 44.375 43.75ZM41.2025 30H41.0944C40.9375 30 40.7844 29.945 40.6644 29.8444L40.5656 29.7619L37.275 27.02L36.475 27.98L39.7656 30.7219C39.9144 30.8469 40 31.0294 40 31.2231C40 31.5825 39.7075 31.875 39.3481 31.875H39.2125C39.06 31.875 38.9119 31.8212 38.795 31.7237L38.6906 31.6369L35.4 28.895L34.6 29.855L37.8906 32.5969C38.0394 32.7213 38.125 32.9038 38.125 33.0981C38.125 33.4575 37.8325 33.75 37.4731 33.75C37.2331 33.75 37 33.6656 36.8156 33.5119L36.2006 32.9994C36.2306 32.8612 36.25 32.7206 36.25 32.5756C36.25 31.5231 35.4113 30.6687 34.3681 30.6319C34.3319 29.6119 33.5131 28.7931 32.4931 28.7569C32.4569 27.7369 31.6381 26.9181 30.6181 26.8819C30.5813 25.8387 29.7262 25 28.6744 25C28.1531 25 27.6631 25.2031 27.295 25.5712L25.5712 27.295C25.505 27.3613 25.4506 27.435 25.3956 27.5087L23.8525 26.5831L25.5438 20.3806L29.3794 19.5281C30.4869 19.2825 31.6537 19.3356 32.7325 19.6806L33.6525 19.975L30.5319 21.535C29.8181 21.8919 29.375 22.6094 29.375 23.4075V23.5319C29.375 24.6862 30.3138 25.625 31.4681 25.625C31.8475 25.625 32.22 25.5219 32.5456 25.3263L34.8725 23.93C35.3369 23.6506 35.9681 23.7113 36.3713 24.0744L41.6525 28.8275C41.7938 28.9556 41.875 29.1375 41.875 29.3275C41.875 29.6987 41.5737 30 41.2025 30ZM42.4887 27.8994L37.2075 23.1463C36.4056 22.4244 35.1538 22.3038 34.2288 22.8588L31.9019 24.255C31.7712 24.3337 31.6213 24.375 31.4681 24.375C31.0031 24.375 30.625 23.9969 30.625 23.5319V23.4075C30.625 23.0856 30.8038 22.7969 31.0913 22.6531L34.5781 20.91C35.1763 20.6113 35.885 20.5456 36.5263 20.7288L40.4538 21.8506L41.5375 21.8687L44.7419 26.6756L42.5644 27.9819C42.5375 27.9563 42.5169 27.9244 42.4887 27.8994ZM53.125 16.875V23.9131L45.8862 26.1406L42.7662 21.4606L50.7912 16.875H53.125ZM31.875 45.625V45H33.125V45.625C33.125 46.3144 33.6856 46.875 34.375 46.875H35.625C36.3144 46.875 36.875 46.3144 36.875 45.625C36.875 44.9356 36.3144 44.375 35.625 44.375H34.375C32.9963 44.375 31.875 43.2537 31.875 41.875C31.875 40.4963 32.9963 39.375 34.375 39.375V38.125H35.625V39.375C37.0037 39.375 38.125 40.4963 38.125 41.875H36.875C36.875 41.1856 36.3144 40.625 35.625 40.625H34.375C33.6856 40.625 33.125 41.1856 33.125 41.875C33.125 42.5644 33.6856 43.125 34.375 43.125H35.625C37.0037 43.125 38.125 44.2463 38.125 45.625C38.125 47.0037 37.0037 48.125 35.625 48.125V49.375H34.375V48.125C32.9963 48.125 31.875 47.0031 31.875 45.625ZM50 48.75H48.75V35.625L46.125 39.125L45.125 38.375L49.375 32.7087L53.625 38.375L52.625 39.125L50 35.625V48.75ZM48.75 50H50V51.25H48.75V50ZM21.25 48.75H20V35.625L17.375 39.125L16.375 38.375L20.625 32.7081L24.875 38.3744L23.875 39.1244L21.25 35.625V48.75ZM20 50H21.25V51.25H20V50Z"
                                                    fill="white"></path>
                                            </g>
                                            <defs>
                                                <clippath id="clip0_9088_7957">
                                                    <rect width="40" height="40" fill="white"
                                                        transform="translate(15 15)"></rect>
                                                </clippath>
                                            </defs>
                                        </svg>

                                        <h2 class="heading text-24 text-rotate">
                                            Training & Capacity Building
                                        </h2>
                                    </div>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24"
                                        stroke-width="1" stroke="currentColor" class="icon icon-plus-circle">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"></path>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24"
                                        stroke-width="1" stroke="currentColor" class="icon icon-minus-circle">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15 12H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"></path>
                                    </svg>
                                </div>
                                <div class="accordion-content">
                                    <div class="service-content-inner">
                                        <div>
                                            <svg width="70" height="70" viewbox="0 0 70 70"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect width="70" height="70" rx="10"
                                                    fill="#1C2539"></rect>
                                                <g clip-path="url(#clip0_9088_79573453)">
                                                    <path
                                                        d="M41.7088 20.625H40.7125L36.8694 19.5269C36.5675 19.4406 36.255 19.4056 35.9412 19.3938L33.1138 18.4894C31.825 18.0769 30.4306 18.0137 29.1087 18.3075L24.9688 19.2281L19.5644 15.625H15.625V24.8125L22.855 27.4419L25.0063 28.7325C25.0369 29.7575 25.8587 30.5819 26.8825 30.6181C26.9187 31.6381 27.7375 32.4569 28.7575 32.4931C28.7881 33.3506 29.3725 34.0625 30.1656 34.2906C26.6194 36.0963 24.375 39.7075 24.375 43.75C24.375 49.6087 29.1413 54.375 35 54.375C40.8587 54.375 45.625 49.6087 45.625 43.75C45.625 39.4175 43.0644 35.6219 39.1519 33.9725C39.2863 33.7163 39.3687 33.43 39.3725 33.1225C40.4019 33.1094 41.2356 32.275 41.2475 31.2456C42.2862 31.2206 43.125 30.3719 43.125 29.3275C43.125 29.2562 43.1106 29.1875 43.1025 29.1169L45.8819 27.4494L54.375 24.8369V15.625H50.4588L41.7088 20.625ZM16.875 23.9375V16.875H19.1856L24.2781 20.27L22.7 26.0556L16.875 23.9375ZM26.25 28.6744C26.25 28.4869 26.3231 28.3113 26.455 28.1788L28.1788 26.455C28.3113 26.3231 28.4869 26.25 28.6744 26.25C29.0606 26.25 29.375 26.5644 29.375 26.9506C29.375 27.1381 29.3019 27.3137 29.17 27.4462L27.4462 29.17C27.3137 29.3019 27.1381 29.375 26.9506 29.375C26.5644 29.375 26.25 29.0606 26.25 28.6744ZM28.125 30.5494C28.125 30.3619 28.1981 30.1863 28.33 30.0538L30.0538 28.33C30.1863 28.1981 30.3619 28.125 30.5494 28.125C30.9356 28.125 31.25 28.4394 31.25 28.8256C31.25 29.0131 31.1769 29.1887 31.045 29.3212L29.3212 31.045C29.1887 31.1769 29.0131 31.25 28.8256 31.25C28.4394 31.25 28.125 30.9356 28.125 30.5494ZM30.205 31.9288L31.9288 30.205C32.0613 30.0731 32.2369 30 32.4244 30C32.8106 30 33.125 30.3144 33.125 30.7006C33.125 30.8881 33.0519 31.0637 32.92 31.1962L31.1962 32.92C31.0637 33.0519 30.8881 33.125 30.7006 33.125C30.3144 33.125 30 32.8106 30 32.4244C30 32.2369 30.0731 32.0613 30.205 31.9288ZM34.2994 31.875C34.6856 31.875 35 32.1894 35 32.5756C35 32.7631 34.9269 32.9387 34.795 33.0712L33.0712 34.795C32.9387 34.9269 32.7631 35 32.5756 35C32.1894 35 31.875 34.6856 31.875 34.2994C31.875 34.1119 31.9481 33.9363 32.08 33.8038L33.8038 32.08C33.9363 31.9481 34.1119 31.875 34.2994 31.875ZM35.55 34.0844L36.0156 34.4725C36.1644 34.5963 36.25 34.7788 36.25 34.9731C36.25 35.3325 35.9575 35.625 35.5981 35.625H35.4825C35.3237 35.625 35.1706 35.5669 35.0513 35.4619L34.5837 35.0494L35.55 34.0844ZM35 36.875C38.7906 36.875 41.875 39.9594 41.875 43.75C41.875 47.5406 38.7906 50.625 35 50.625C31.2094 50.625 28.125 47.5406 28.125 43.75C28.125 39.9594 31.2094 36.875 35 36.875ZM44.375 43.75C44.375 48.9194 40.1694 53.125 35 53.125C29.8306 53.125 25.625 48.9194 25.625 43.75C25.625 40.1138 27.6812 36.8706 30.9156 35.31C31.1744 35.7331 31.5869 36.0469 32.0775 36.1775C29.0387 37.3544 26.875 40.3006 26.875 43.75C26.875 48.23 30.52 51.875 35 51.875C39.48 51.875 43.125 48.23 43.125 43.75C43.125 40.0419 40.6256 36.9131 37.2256 35.9425C37.3919 35.6644 37.4931 35.3438 37.4975 34.9975C37.6969 34.995 37.8863 34.9556 38.0669 34.8956C41.8525 36.2013 44.375 39.7106 44.375 43.75ZM41.2025 30H41.0944C40.9375 30 40.7844 29.945 40.6644 29.8444L40.5656 29.7619L37.275 27.02L36.475 27.98L39.7656 30.7219C39.9144 30.8469 40 31.0294 40 31.2231C40 31.5825 39.7075 31.875 39.3481 31.875H39.2125C39.06 31.875 38.9119 31.8212 38.795 31.7237L38.6906 31.6369L35.4 28.895L34.6 29.855L37.8906 32.5969C38.0394 32.7213 38.125 32.9038 38.125 33.0981C38.125 33.4575 37.8325 33.75 37.4731 33.75C37.2331 33.75 37 33.6656 36.8156 33.5119L36.2006 32.9994C36.2306 32.8612 36.25 32.7206 36.25 32.5756C36.25 31.5231 35.4113 30.6687 34.3681 30.6319C34.3319 29.6119 33.5131 28.7931 32.4931 28.7569C32.4569 27.7369 31.6381 26.9181 30.6181 26.8819C30.5813 25.8387 29.7262 25 28.6744 25C28.1531 25 27.6631 25.2031 27.295 25.5712L25.5712 27.295C25.505 27.3613 25.4506 27.435 25.3956 27.5087L23.8525 26.5831L25.5438 20.3806L29.3794 19.5281C30.4869 19.2825 31.6537 19.3356 32.7325 19.6806L33.6525 19.975L30.5319 21.535C29.8181 21.8919 29.375 22.6094 29.375 23.4075V23.5319C29.375 24.6862 30.3138 25.625 31.4681 25.625C31.8475 25.625 32.22 25.5219 32.5456 25.3263L34.8725 23.93C35.3369 23.6506 35.9681 23.7113 36.3713 24.0744L41.6525 28.8275C41.7938 28.9556 41.875 29.1375 41.875 29.3275C41.875 29.6987 41.5737 30 41.2025 30ZM42.4887 27.8994L37.2075 23.1463C36.4056 22.4244 35.1538 22.3038 34.2288 22.8588L31.9019 24.255C31.7712 24.3337 31.6213 24.375 31.4681 24.375C31.0031 24.375 30.625 23.9969 30.625 23.5319V23.4075C30.625 23.0856 30.8038 22.7969 31.0913 22.6531L34.5781 20.91C35.1763 20.6113 35.885 20.5456 36.5263 20.7288L40.4538 21.8506L41.5375 21.8687L44.7419 26.6756L42.5644 27.9819C42.5375 27.9563 42.5169 27.9244 42.4887 27.8994ZM53.125 16.875V23.9131L45.8862 26.1406L42.7662 21.4606L50.7912 16.875H53.125ZM31.875 45.625V45H33.125V45.625C33.125 46.3144 33.6856 46.875 34.375 46.875H35.625C36.3144 46.875 36.875 46.3144 36.875 45.625C36.875 44.9356 36.3144 44.375 35.625 44.375H34.375C32.9963 44.375 31.875 43.2537 31.875 41.875C31.875 40.4963 32.9963 39.375 34.375 39.375V38.125H35.625V39.375C37.0037 39.375 38.125 40.4963 38.125 41.875H36.875C36.875 41.1856 36.3144 40.625 35.625 40.625H34.375C33.6856 40.625 33.125 41.1856 33.125 41.875C33.125 42.5644 33.6856 43.125 34.375 43.125H35.625C37.0037 43.125 38.125 44.2463 38.125 45.625C38.125 47.0037 37.0037 48.125 35.625 48.125V49.375H34.375V48.125C32.9963 48.125 31.875 47.0031 31.875 45.625ZM50 48.75H48.75V35.625L46.125 39.125L45.125 38.375L49.375 32.7087L53.625 38.375L52.625 39.125L50 35.625V48.75ZM48.75 50H50V51.25H48.75V50ZM21.25 48.75H20V35.625L17.375 39.125L16.375 38.375L20.625 32.7081L24.875 38.3744L23.875 39.1244L21.25 35.625V48.75ZM20 50H21.25V51.25H20V50Z"
                                                        fill="white"></path>
                                                </g>
                                                <defs>
                                                    <clippath id="clip0_9088_79573453">
                                                        <rect width="40" height="40" fill="white"
                                                            transform="translate(15 15)"></rect>
                                                    </clippath>
                                                </defs>
                                            </svg>

                                            <h2 class="heading text-24">
                                                Training & Capacity Building
                                            </h2>
                                            <p class="text text-16">
                                                Equipping leaders and teams with the skills to thrive in disruption. We
                                                deliver practical
                                                training, leadership workshops, and data-driven learning programs
                                                tailored to strengthen
                                                decision-making, strategy, and organizational growth.
                                            </p>
                                        </div>

                                        <div class="service-button">
                                            <a href="/service-details" class="button button--primary">
                                                + View Details
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>


                        </ul>
                    </accordion-horizontal>
                </div>
            </div>
        </div>
        <!-- Our Approach -->
        <div class="working-process recent-project mt-100">
            <div class="container-fluid">
                <div class="section-headings section-headings-horizontal">
                    <div class="section-headings-left">
                        <div class="subheading text-20 subheading-bg" data-aos="fade-right">
                            <svg class="icon icon-14" xmlns="http://www.w3.org/2000/svg" width="14"
                                height="14" viewbox="0 0 14 14" fill="none">
                                <g clip-path="url(#clip0_9088_4143)">
                                    <path
                                        d="M8.71401 5.28599C11.7514 5.4205 14 5.9412 14 7C14 8.0588 11.7514 8.5795 8.71401 8.71401C8.5795 11.7514 8.0588 14 7 14C5.9412 14 5.4205 11.7514 5.28599 8.71401C2.2486 8.5795 -1.33117e-07 8.0588 0 7C4.62818e-08 5.94119 2.2486 5.4205 5.28599 5.28599C5.4205 2.2486 5.9412 0 7 0C8.0588 0 8.5795 2.2486 8.71401 5.28599Z"
                                        fill="CurrentColor"></path>
                                </g>
                                <defs>
                                    <clippath>
                                        <rect width="14" height="14" fill="CurrentColor"></rect>
                                    </clippath>
                                </defs>
                            </svg>
                            <span>Our Approach</span>
                            <svg class="icon icon-14" xmlns="http://www.w3.org/2000/svg" width="14"
                                height="14" viewbox="0 0 14 14" fill="none">
                                <g clip-path="url(#clip0_9088_4143)">
                                    <path
                                        d="M8.71401 5.28599C11.7514 5.4205 14 5.9412 14 7C14 8.0588 11.7514 8.5795 8.71401 8.71401C8.5795 11.7514 8.0588 14 7 14C5.9412 14 5.4205 11.7514 5.28599 8.71401C2.2486 8.5795 -1.33117e-07 8.0588 0 7C4.62818e-08 5.94119 2.2486 5.4205 5.28599 5.28599C5.4205 2.2486 5.9412 0 7 0C8.0588 0 8.5795 2.2486 8.71401 5.28599Z"
                                        fill="CurrentColor"></path>
                                </g>
                                <defs>
                                    <clippath>
                                        <rect width="14" height="14" fill="CurrentColor"></rect>
                                    </clippath>
                                </defs>
                            </svg>
                        </div>
                        <h2 class="heading text-50" data-aos="fade-right">
                            Strategy Built for Action, Not Just Presentation
                        </h2>
                    </div>
                    <div class="section-headings-right text text-18" data-aos="fade-left">
                        At 229 Consulting, we believe strategy must be actionable. We go beyond pitch decks and
                        theories—carrying
                        the work forward until it translates into real outcomes.
                    </div>
                </div>

                <div class="section-content">
                    <div class="row product-grid">
                        <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up">
                            <div class="card-working-process">
                                <h2 class="heading text-20 fw-500">Research First</h2>
                                <div class="card-icon-text card-icon-text-horizontal has-border">
                                    <div class="svg-wrapper">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24"
                                            stroke-width="1" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607ZM10.5 7.5v6m3-3h-6">
                                            </path>
                                        </svg>
                                    </div>
                                    <div class="content">
                                        <p class="text text-16">We start with deep insights into your industry and the
                                            disruptions shaping
                                            it, ensuring every strategy is grounded in reality.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                            <div class="card-working-process">
                                <h2 class="heading text-20 fw-500">Internal Alignment & Collaboration</h2>
                                <div class="card-icon-text card-icon-text-horizontal has-border">
                                    <div class="svg-wrapper">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24"
                                            stroke-width="1" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div class="content">
                                        <p class="text text-16">We work with your teams to integrate their insights
                                            and challenges,
                                            co-creating strategies that ensure ownership and sustainable results.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                            <div class="card-working-process">
                                <h2 class="heading text-20 fw-500">Global Expertise</h2>
                                <div class="card-icon-text card-icon-text-horizontal has-border">
                                    <div class="svg-wrapper">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24"
                                            stroke-width="1" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M12 21a9.004 9.004 0 0 0 8.716-6.747M12 21a9.004 9.004 0 0 1-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 0 1 7.843 4.582M12 3a8.997 8.997 0 0 0-7.843 4.582m15.686 0A11.953 11.953 0 0 1 12 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0 1 21 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0 1 12 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 0 1 3 12c0-1.605.42-3.113 1.157-4.418">
                                            </path>
                                        </svg>
                                    </div>
                                    <div class="content">
                                        <p class="text text-16">We bring globally certified experts who combine
                                            international standards with
                                            local relevance for maximum impact.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                            <div class="card-working-process">
                                <h2 class="heading text-20 fw-500">Tailored Strategy</h2>
                                <div class="card-icon-text card-icon-text-horizontal has-border">
                                    <div class="svg-wrapper">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24"
                                            stroke-width="1" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 0 0 2.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 0 0-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25ZM6.75 12h.008v.008H6.75V12Zm0 3h.008v.008H6.75V15Zm0 3h.008v.008H6.75V18Z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div class="content">
                                        <p class="text text-16">We design practical, customized roadmaps built for
                                            execution—not just
                                            presentations that sit on shelves.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="400">
                            <div class="card-working-process">
                                <h2 class="heading text-20 fw-500">Outcome Driven</h2>
                                <div class="card-icon-text card-icon-text-horizontal has-border">
                                    <div class="svg-wrapper">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24"
                                            stroke-width="1" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 0 1 3 19.875v-6.75ZM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V8.625ZM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V4.125Z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div class="content">
                                        <p class="text text-16">We carry the work forward in collaboration with your
                                            team until it
                                            translates into measurable outcomes and lasting success.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Our Core Values -->
        <div class="promotion mt-100 section-padding">
            <div class="container">
                <div class="promotion-container">
                    <div class="row">
                        <div class="col-lg-7 col-12">
                            <div class="promtion-content section-headings">
                                <div class="subheading text-20 subheading-bg" data-aos="fade-right">
                                    <svg class="icon icon-14" xmlns="http://www.w3.org/2000/svg" width="14"
                                        height="14" viewbox="0 0 14 14" fill="none">
                                        <g clip-path="url(#clip0_9088_4143)">
                                            <path
                                                d="M8.71401 5.28599C11.7514 5.4205 14 5.9412 14 7C14 8.0588 11.7514 8.5795 8.71401 8.71401C8.5795 11.7514 8.0588 14 7 14C5.9412 14 5.4205 11.7514 5.28599 8.71401C2.2486 8.5795 -1.33117e-07 8.0588 0 7C4.62818e-08 5.94119 2.2486 5.4205 5.28599 5.28599C5.4205 2.2486 5.9412 0 7 0C8.0588 0 8.5795 2.2486 8.71401 5.28599Z"
                                                fill="CurrentColor"></path>
                                        </g>
                                        <defs>
                                            <clippath>
                                                <rect width="14" height="14" fill="CurrentColor"></rect>
                                            </clippath>
                                        </defs>
                                    </svg>
                                    <span>Core Values</span>
                                    <svg class="icon icon-14" xmlns="http://www.w3.org/2000/svg" width="14"
                                        height="14" viewbox="0 0 14 14" fill="none">
                                        <g clip-path="url(#clip0_9088_4143)">
                                            <path
                                                d="M8.71401 5.28599C11.7514 5.4205 14 5.9412 14 7C14 8.0588 11.7514 8.5795 8.71401 8.71401C8.5795 11.7514 8.0588 14 7 14C5.9412 14 5.4205 11.7514 5.28599 8.71401C2.2486 8.5795 -1.33117e-07 8.0588 0 7C4.62818e-08 5.94119 2.2486 5.4205 5.28599 5.28599C5.4205 2.2486 5.9412 0 7 0C8.0588 0 8.5795 2.2486 8.71401 5.28599Z"
                                                fill="CurrentColor"></path>
                                        </g>
                                        <defs>
                                            <clippath>
                                                <rect width="14" height="14" fill="CurrentColor"></rect>
                                            </clippath>
                                        </defs>
                                    </svg>
                                </div>
                                <h2 class="heading text-50" data-aos="fade-right" data-aos-delay="200">
                                    Principles That Guide Our Work
                                </h2>
                                <div class="text text-18" data-aos="fade-right" data-aos-delay="200">
                                    At 229 Consulting, our work is guided by principles that shape how we think, act,
                                    and deliver. These
                                    values define our culture and drive our decisions.

                                </div>
                                <ul class="promotion-lists list-unstyled">
                                    <li class="promotion-item" data-aos="fade-up" data-aos-delay="10">
                                        <div class="promotion-title">
                                            <svg class="icon icon-50" xmlns="http://www.w3.org/2000/svg"
                                                width="50" height="50" viewbox="0 0 50 50"
                                                fill="none">
                                                <circle cx="25" cy="25" r="25" fill="#1C2539">
                                                </circle>
                                                <g clip-path="url(#clip0_9088_5518)">
                                                    <path
                                                        d="M19.5985 31.1283L19.0574 34.375H19C18.5864 34.375 18.25 34.7114 18.25 35.125V35.875C18.25 36.2886 18.5864 36.625 19 36.625H31C31.4136 36.625 31.75 36.2886 31.75 35.875V35.125C31.75 34.7114 31.4136 34.375 31 34.375H30.9426L30.4015 31.1283C30.2886 30.451 29.7378 29.9526 29.0669 29.8878L32.5289 24.6947L31.2651 19.6409L26.2041 21.328L25.6371 23.0009L24.589 16.8869L18.8121 13.5858L16.3416 19.7609L21.0389 29.8784C20.3204 29.8971 19.7174 30.4154 19.5985 31.1283ZM31.0004 35.875H19V35.125H31L31.0004 35.875ZM29.662 31.2516L30.1825 34.375H19.8175L20.338 31.2516C20.3988 30.8886 20.71 30.625 21.0782 30.625H28.9221C29.29 30.625 29.6012 30.8886 29.662 31.2516ZM26.6991 29.1906L28.618 25.3525L31.3727 25.0769L28.1744 29.875H26.8165L26.6991 29.1906ZM31.6559 24.295L28.5831 24.6021L27.0475 21.8376L30.7349 20.6084L31.6559 24.295ZM26.5833 22.5475L27.9509 25.0094L26.4846 27.9419L25.9037 24.553L26.5833 22.5475ZM26.0553 29.875H24.5271L22.9934 24.8897L22.2768 25.1102L23.7423 29.875H21.8643L17.3894 20.2368L20.9598 20.8319L22.0454 24.3603L22.762 24.1397L21.67 20.5915L24.0119 17.9571L26.0553 29.875ZM19.1879 14.6643L23.6624 17.221L21.1071 20.0958L17.2709 19.4564L19.1879 14.6643ZM21.25 31.375H28.75V33.625H27.25V32.875H28V32.125H22V32.875H26.5V33.625H21.25V31.375ZM32.5 18.4052V19.375H33.25V18.4052L34.1553 17.5H35.125V16.75H34.1553L33.25 15.8447V14.875H32.5V15.8447L31.5947 16.75H30.625V17.5H31.5947L32.5 18.4052ZM32.875 16.5302L33.4697 17.125L32.875 17.7198L32.2803 17.125L32.875 16.5302ZM33.25 14.125H32.5V13.375H33.25V14.125ZM29.875 17.5H29.125V16.75H29.875V17.5ZM32.5 20.125H33.25V20.875H32.5V20.125ZM35.875 16.75H36.625V17.5H35.875V16.75ZM15.25 34.1553V35.125H16V34.1553L16.9052 33.25H17.875V32.5H16.9052L16 31.5947V30.625H15.25V31.5947L14.3447 32.5H13.375V33.25H14.3447L15.25 34.1553ZM15.625 32.2803L16.2198 32.875L15.625 33.4697L15.0303 32.875L15.625 32.2803ZM15.25 29.125H16V29.875H15.25V29.125ZM16 36.625H15.25V35.875H16V36.625ZM34.75 28.2197V27.25H34V28.2197L33.0947 29.125H32.125V29.875H33.0947L34 30.7803V31.75H34.75V30.7803L35.6553 29.875H36.625V29.125H35.6553L34.75 28.2197ZM34.375 30.0947L33.7803 29.5L34.375 28.9053L34.9697 29.5L34.375 30.0947ZM34 26.5V25.75H34.75V26.5H34ZM34.75 33.25H34V32.5H34.75V33.25ZM30.625 29.875V29.125H31.375V29.875H30.625ZM14.875 14.125H14.125V13.375H14.875V14.125ZM14.125 14.875H13.375V14.125H14.125V14.875ZM14.125 14.875H14.875V15.625H14.125V14.875ZM14.875 14.875V14.125H15.625V14.875H14.875ZM16.75 24.625H16V23.875H16.75V24.625ZM15.25 24.625H16V25.375H15.25V24.625ZM16 25.375H16.75V26.125H16V25.375ZM16.75 25.375V24.625H17.5V25.375H16.75ZM26.125 14.875H25.375V14.125H26.125V14.875ZM25.375 15.625H24.625V14.875H25.375V15.625ZM25.375 15.625H26.125V16.375H25.375V15.625ZM26.125 15.625V14.875H26.875V15.625H26.125Z"
                                                        fill="white"></path>
                                                </g>
                                                <defs>
                                                    <clippath>
                                                        <rect width="24" height="24" fill="white"
                                                            transform="translate(13 13)"></rect>
                                                    </clippath>
                                                </defs>
                                            </svg>
                                            <div class="text text-18 fw-600">
                                                Integrity
                                            </div>
                                        </div>
                                        <div class="promotion-text text text-16">
                                            We uphold the highest ethical and professional standards in everything we
                                            do.
                                        </div>
                                    </li>
                                    <li class="promotion-item" data-aos="fade-up" data-aos-delay="50">
                                        <div class="promotion-title">
                                            <svg class="icon icon-50" xmlns="http://www.w3.org/2000/svg"
                                                width="50" height="50" viewbox="0 0 50 50"
                                                fill="none">
                                                <circle cx="25" cy="25" r="25" fill="#1C2539">
                                                </circle>
                                                <g clip-path="url(#clip0_9088_5518)">
                                                    <path
                                                        d="M19.5985 31.1283L19.0574 34.375H19C18.5864 34.375 18.25 34.7114 18.25 35.125V35.875C18.25 36.2886 18.5864 36.625 19 36.625H31C31.4136 36.625 31.75 36.2886 31.75 35.875V35.125C31.75 34.7114 31.4136 34.375 31 34.375H30.9426L30.4015 31.1283C30.2886 30.451 29.7378 29.9526 29.0669 29.8878L32.5289 24.6947L31.2651 19.6409L26.2041 21.328L25.6371 23.0009L24.589 16.8869L18.8121 13.5858L16.3416 19.7609L21.0389 29.8784C20.3204 29.8971 19.7174 30.4154 19.5985 31.1283ZM31.0004 35.875H19V35.125H31L31.0004 35.875ZM29.662 31.2516L30.1825 34.375H19.8175L20.338 31.2516C20.3988 30.8886 20.71 30.625 21.0782 30.625H28.9221C29.29 30.625 29.6012 30.8886 29.662 31.2516ZM26.6991 29.1906L28.618 25.3525L31.3727 25.0769L28.1744 29.875H26.8165L26.6991 29.1906ZM31.6559 24.295L28.5831 24.6021L27.0475 21.8376L30.7349 20.6084L31.6559 24.295ZM26.5833 22.5475L27.9509 25.0094L26.4846 27.9419L25.9037 24.553L26.5833 22.5475ZM26.0553 29.875H24.5271L22.9934 24.8897L22.2768 25.1102L23.7423 29.875H21.8643L17.3894 20.2368L20.9598 20.8319L22.0454 24.3603L22.762 24.1397L21.67 20.5915L24.0119 17.9571L26.0553 29.875ZM19.1879 14.6643L23.6624 17.221L21.1071 20.0958L17.2709 19.4564L19.1879 14.6643ZM21.25 31.375H28.75V33.625H27.25V32.875H28V32.125H22V32.875H26.5V33.625H21.25V31.375ZM32.5 18.4052V19.375H33.25V18.4052L34.1553 17.5H35.125V16.75H34.1553L33.25 15.8447V14.875H32.5V15.8447L31.5947 16.75H30.625V17.5H31.5947L32.5 18.4052ZM32.875 16.5302L33.4697 17.125L32.875 17.7198L32.2803 17.125L32.875 16.5302ZM33.25 14.125H32.5V13.375H33.25V14.125ZM29.875 17.5H29.125V16.75H29.875V17.5ZM32.5 20.125H33.25V20.875H32.5V20.125ZM35.875 16.75H36.625V17.5H35.875V16.75ZM15.25 34.1553V35.125H16V34.1553L16.9052 33.25H17.875V32.5H16.9052L16 31.5947V30.625H15.25V31.5947L14.3447 32.5H13.375V33.25H14.3447L15.25 34.1553ZM15.625 32.2803L16.2198 32.875L15.625 33.4697L15.0303 32.875L15.625 32.2803ZM15.25 29.125H16V29.875H15.25V29.125ZM16 36.625H15.25V35.875H16V36.625ZM34.75 28.2197V27.25H34V28.2197L33.0947 29.125H32.125V29.875H33.0947L34 30.7803V31.75H34.75V30.7803L35.6553 29.875H36.625V29.125H35.6553L34.75 28.2197ZM34.375 30.0947L33.7803 29.5L34.375 28.9053L34.9697 29.5L34.375 30.0947ZM34 26.5V25.75H34.75V26.5H34ZM34.75 33.25H34V32.5H34.75V33.25ZM30.625 29.875V29.125H31.375V29.875H30.625ZM14.875 14.125H14.125V13.375H14.875V14.125ZM14.125 14.875H13.375V14.125H14.125V14.875ZM14.125 14.875H14.875V15.625H14.125V14.875ZM14.875 14.875V14.125H15.625V14.875H14.875ZM16.75 24.625H16V23.875H16.75V24.625ZM15.25 24.625H16V25.375H15.25V24.625ZM16 25.375H16.75V26.125H16V25.375ZM16.75 25.375V24.625H17.5V25.375H16.75ZM26.125 14.875H25.375V14.125H26.125V14.875ZM25.375 15.625H24.625V14.875H25.375V15.625ZM25.375 15.625H26.125V16.375H25.375V15.625ZM26.125 15.625V14.875H26.875V15.625H26.125Z"
                                                        fill="white"></path>
                                                </g>
                                                <defs>
                                                    <clippath>
                                                        <rect width="24" height="24" fill="white"
                                                            transform="translate(13 13)"></rect>
                                                    </clippath>
                                                </defs>
                                            </svg>
                                            <div class="text text-18 fw-600">
                                                Excellence
                                            </div>
                                        </div>
                                        <div class="promotion-text text text-16">
                                            We push boundaries to deliver superior outcomes for our clients.
                                        </div>
                                    </li>
                                </ul>
                                <div class="buttons" data-aos="fade-up">
                                    <a href="/services" class="button button--secondary"
                                        aria-label="View All Details">
                                        Discover More
                                        <span class="svg-wrapper">
                                            <svg class="icon-20" width="20" height="20"
                                                viewbox="0 0 20 20" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M13.3365 7.84518L6.16435 15.0173L4.98584 13.8388L12.158 6.66667H5.83652V5H15.0032V14.1667H13.3365V7.84518Z"
                                                    fill="CurrentColor"></path>
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-12">
                            <div class="promotion-img radius18" data-aos="flip-left">
                                <img src="{{ asset('assets/img/promotion/1.jpg') }}" width="1000"
                                    height="1469" loading="lazy" alt="Promotion image">
                            </div>
                        </div>
                    </div>
                    <counter-up class="counter-up-wrap">
                        <div class="counter-up">
                            <div class="counter-item" data-aos="fade-up" data-aos-delay="50">
                                <h2 class="heading text-50" data-target="5">
                                    0 <span>k+</span>
                                </h2>
                                <div class="text text-18 fw-500">Project completed</div>
                            </div>
                            <div class="counter-item">
                                <h2 class="heading text-50" data-target="8">
                                    0<span>k+</span>
                                </h2>
                                <div class="text text-18 fw-500">Happy customers</div>
                            </div>
                            <div class="counter-item" data-aos="fade-down" data-aos-delay="50">
                                <h2 class="heading text-50" data-target="10">
                                    0<span>+</span>
                                </h2>
                                <div class="text text-18 fw-500">Years experiences</div>
                            </div>
                        </div>
                    </counter-up>
                </div>
            </div>
        </div>

        <!-- Text Image -->
        <div class="text-image-sticky mt-100">
            <div class="container">
                <div class="section-headings section-headings-horizontal align-items-start overflow-hidden">
                    <div class="section-headings-left">
                        <h2 class="heading text-50" data-aos="fade-right">
                            Featured Upcoming Programs
                        </h2>
                    </div>
                    <div class="section-headings-right text text-18" data-aos="fade-left">
                        Discover our upcoming initiatives designed to drive innovation and leadership development in the
                        consulting
                        space.
                    </div>
                </div>
                <div class="section-content">
                    <div class="image-text-card radius18">
                        <div class="row align-items-center product-grid">
                            <div class="col-lg-6 col-12">
                                <div class="content section-headings">
                                    <div class="subheading text-20 subheading-bg" data-aos="fade-up">
                                        <svg class="icon icon-14" xmlns="http://www.w3.org/2000/svg"
                                            width="14" height="14" viewbox="0 0 14 14" fill="none">
                                            <g clip-path="url(#clip0_9088_4143)">
                                                <path
                                                    d="M8.71401 5.28599C11.7514 5.4205 14 5.9412 14 7C14 8.0588 11.7514 8.5795 8.71401 8.71401C8.5795 11.7514 8.0588 14 7 14C5.9412 14 5.4205 11.7514 5.28599 8.71401C2.2486 8.5795 -1.33117e-07 8.0588 0 7C4.62818e-08 5.94119 2.2486 5.4205 5.28599 5.28599C5.4205 2.2486 5.9412 0 7 0C8.0588 0 8.5795 2.2486 8.71401 5.28599Z"
                                                    fill="CurrentColor"></path>
                                            </g>
                                            <defs>
                                                <clippath>
                                                    <rect width="14" height="14" fill="CurrentColor">
                                                    </rect>
                                                </clippath>
                                            </defs>
                                        </svg>
                                        <span>Education Innovation</span>
                                        <svg class="icon icon-14" xmlns="http://www.w3.org/2000/svg"
                                            width="14" height="14" viewbox="0 0 14 14" fill="none">
                                            <g clip-path="url(#clip0_9088_4143)">
                                                <path
                                                    d="M8.71401 5.28599C11.7514 5.4205 14 5.9412 14 7C14 8.0588 11.7514 8.5795 8.71401 8.71401C8.5795 11.7514 8.0588 14 7 14C5.9412 14 5.4205 11.7514 5.28599 8.71401C2.2486 8.5795 -1.33117e-07 8.0588 0 7C4.62818e-08 5.94119 2.2486 5.4205 5.28599 5.28599C5.4205 2.2486 5.9412 0 7 0C8.0588 0 8.5795 2.2486 8.71401 5.28599Z"
                                                    fill="CurrentColor"></path>
                                            </g>
                                            <defs>
                                                <clippath>
                                                    <rect width="14" height="14" fill="CurrentColor">
                                                    </rect>
                                                </clippath>
                                            </defs>
                                        </svg>
                                    </div>
                                    <h2 class="heading text-50" data-aos="fade-up">
                                        GenAI Adoption Program For Schools
                                    </h2>
                                    <div class="text text-18" data-aos="fade-up">
                                        Nigeria's education system is entering a new era as Generative AI becomes widely
                                        used by students,
                                        yet most schools still lack the policies and capacity to guide its safe and
                                        effective use. To
                                        support this transition, 229 Consulting introduces the GenAI Adoption for
                                        Schools Programme—an
                                        initiative that empowers educators and learners with the knowledge, tools, and
                                        structures required
                                        to use Generative AI responsibly and meaningfully. </div>
                                    <div class="buttons" data-aos="fade-up">
                                        <a href="mailto:info@229 isconsulting.com?subject=GenAI%20Adoption%20Programme%20Inquiry"
                                            class="button button--primary" aria-label="Book Consultation">
                                            Book Consultation
                                            <span class="svg-wrapper">
                                                <svg class="icon-32" width="32" height="32"
                                                    viewbox="0 0 20 20" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M13.3365 7.84518L6.16435 15.0173L4.98584 13.8388L12.158 6.66667H5.83652V5H15.0032V14.1667H13.3365V7.84518Z"
                                                        fill="CurrentColor"></path>
                                                </svg>
                                            </span>
                                            <span class="visually-hidden">To book a consultation, click this
                                                button.</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="media-wrap radius18" data-aos="zoom-in-up">
                                    <picture>
                                        <source media="(max-width: 991px)"
                                            srcset="{{ asset('assets/img/project/1mob-square.jpg') }}">
                                        <img src="{{ asset('assets/img/project/1.jpg') }}" width="1200"
                                            height="550" loading="lazy" alt="Image">
                                    </picture>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="image-text-card radius18">
                        <div class="row align-items-center product-grid">
                            <div class="col-lg-6 col-12">
                                <div class="content section-headings">
                                    <div class="subheading text-20 subheading-bg" data-aos="fade-up">
                                        <svg class="icon icon-14" xmlns="http://www.w3.org/2000/svg"
                                            width="14" height="14" viewbox="0 0 14 14" fill="none">
                                            <g clip-path="url(#clip0_9088_4143)">
                                                <path
                                                    d="M8.71401 5.28599C11.7514 5.4205 14 5.9412 14 7C14 8.0588 11.7514 8.5795 8.71401 8.71401C8.5795 11.7514 8.0588 14 7 14C5.9412 14 5.4205 11.7514 5.28599 8.71401C2.2486 8.5795 -1.33117e-07 8.0588 0 7C4.62818e-08 5.94119 2.2486 5.4205 5.28599 5.28599C5.4205 2.2486 5.9412 0 7 0C8.0588 0 8.5795 2.2486 8.71401 5.28599Z"
                                                    fill="CurrentColor"></path>
                                            </g>
                                            <defs>
                                                <clippath>
                                                    <rect width="14" height="14" fill="CurrentColor">
                                                    </rect>
                                                </clippath>
                                            </defs>
                                        </svg>
                                        <span>Strategic Leadership</span>
                                        <svg class="icon icon-14" xmlns="http://www.w3.org/2000/svg"
                                            width="14" height="14" viewbox="0 0 14 14" fill="none">
                                            <g clip-path="url(#clip0_9088_4143)">
                                                <path
                                                    d="M8.71401 5.28599C11.7514 5.4205 14 5.9412 14 7C14 8.0588 11.7514 8.5795 8.71401 8.71401C8.5795 11.7514 8.0588 14 7 14C5.9412 14 5.4205 11.7514 5.28599 8.71401C2.2486 8.5795 -1.33117e-07 8.0588 0 7C4.62818e-08 5.94119 2.2486 5.4205 5.28599 5.28599C5.4205 2.2486 5.9412 0 7 0C8.0588 0 8.5795 2.2486 8.71401 5.28599Z"
                                                    fill="CurrentColor"></path>
                                            </g>
                                            <defs>
                                                <clippath>
                                                    <rect width="14" height="14" fill="CurrentColor">
                                                    </rect>
                                                </clippath>
                                            </defs>
                                        </svg>
                                    </div>
                                    <h2 class="heading text-50" data-aos="fade-up" style="color: rgb(0, 0, 0);">
                                        End-of-Year Leadership Retreat
                                    </h2>
                                    <div class="text text-18" data-aos="fade-up">
                                        With the pace of change increasing, organizations need a clear pause to make
                                        sense of the past year
                                        and plan for what comes next. The 229 Consulting End-of-Year Strategy Retreat
                                        provides that
                                        space—helping teams reflect on performance, strengthen alignment, and set clear
                                        direction for 2026.
                                        It turns reflection into insight and insight into action.
                                    </div>
                                    <div class="buttons" data-aos="fade-up">
                                        <a href="mailto:info@229consulting.com?subject=End-of-Year%20Leadership%20Retreat%20Inquiry"
                                            class="button button--primary" aria-label="Book Retreat">
                                            Book Retreat
                                            <span class="svg-wrapper">
                                                <svg class="icon-20" width="20" height="20"
                                                    viewbox="0 0 20 20" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M13.3365 7.84518L6.16435 15.0173L4.98584 13.8388L12.158 6.66667H5.83652V5H15.0032V14.1667H13.3365V7.84518Z"
                                                        fill="CurrentColor"></path>
                                                </svg>
                                            </span>
                                            <span class="visually-hidden">To book the retreat, click this
                                                button.</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="media-wrap radius18" data-aos="zoom-in-up">
                                    <img src="{{ asset('assets/img/project/2.jpg') }}" width="1200"
                                        height="550" loading="lazy" alt="Image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Projects -->
        <project-slider class="project-slider mt-100">
            <div class="container">
                <div class="section-headings headings-width text-center">
                    <div class="subheading text-20 subheading-bg" data-aos="fade-up" data-aos-delay="10">
                        <svg class="icon icon-14" xmlns="http://www.w3.org/2000/svg" width="14"
                            height="14" viewbox="0 0 14 14" fill="none">
                            <g clip-path="url(#clip0_9088_4143)">
                                <path
                                    d="M8.71401 5.28599C11.7514 5.4205 14 5.9412 14 7C14 8.0588 11.7514 8.5795 8.71401 8.71401C8.5795 11.7514 8.0588 14 7 14C5.9412 14 5.4205 11.7514 5.28599 8.71401C2.2486 8.5795 -1.33117e-07 8.0588 0 7C4.62818e-08 5.94119 2.2486 5.4205 5.28599 5.28599C5.4205 2.2486 5.9412 0 7 0C8.0588 0 8.5795 2.2486 8.71401 5.28599Z"
                                    fill="CurrentColor"></path>
                            </g>
                            <defs>
                                <clippath>
                                    <rect width="14" height="14" fill="CurrentColor"></rect>
                                </clippath>
                            </defs>
                        </svg>
                        <span>Recent Projects</span>
                        <svg class="icon icon-14" xmlns="http://www.w3.org/2000/svg" width="14"
                            height="14" viewbox="0 0 14 14" fill="none">
                            <g clip-path="url(#clip0_9088_4143)">
                                <path
                                    d="M8.71401 5.28599C11.7514 5.4205 14 5.9412 14 7C14 8.0588 11.7514 8.5795 8.71401 8.71401C8.5795 11.7514 8.0588 14 7 14C5.9412 14 5.4205 11.7514 5.28599 8.71401C2.2486 8.5795 -1.33117e-07 8.0588 0 7C4.62818e-08 5.94119 2.2486 5.4205 5.28599 5.28599C5.4205 2.2486 5.9412 0 7 0C8.0588 0 8.5795 2.2486 8.71401 5.28599Z"
                                    fill="CurrentColor"></path>
                            </g>
                            <defs>
                                <clippath>
                                    <rect width="14" height="14" fill="CurrentColor"></rect>
                                </clippath>
                            </defs>
                        </svg>
                    </div>
                    <h2 class="heading text-50" data-aos="fade-up" data-aos-delay="20">
                        Explore the Recent Works We Have Done!
                    </h2>
                </div>
            </div>

            <div class="section-content">
                <div class="container-fluid slider-container" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <a class="card-project radius18" aria-label="project details"
                                    href="/project-details?project=marcx">
                                    <img src="{{ asset('assets/img/project/img1.jpg') }}"
                                        alt="MARCX & CONSTRUCTION" width="645" height="690" loading="lazy">
                                    <div class="card-project-content-absolute">
                                        <div class="card-project-content">
                                            <h2 class="heading text-24">MARCX & CONSTRUCTION</h2>
                                            <p class="text text-16">Design a commodity market's full operational
                                                framework</p>
                                        </div>
                                    </div>
                                    <span class="svg-wrapper icon-project-link">
                                        <svg viewbox="0 0 64 64" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="32" cy="32" r="32" fill="white"></circle>
                                            <path
                                                d="M26.1667 39C25.8167 39 25.5833 38.8833 25.35 38.65C24.8833 38.1833 24.8833 37.4833 25.35 37.0167L37.0167 25.35C37.4833 24.8833 38.1833 24.8833 38.65 25.35C39.1167 25.8167 39.1167 26.5167 38.65 26.9833L26.9833 38.65C26.75 38.8833 26.5167 39 26.1667 39Z"
                                                fill="#20282D"></path>
                                            <path
                                                d="M37.8332 37.8333C37.1332 37.8333 36.6665 37.3667 36.6665 36.6667V27.3333H27.3332C26.6332 27.3333 26.1665 26.8667 26.1665 26.1667C26.1665 25.4667 26.6332 25 27.3332 25H37.8332C38.5332 25 38.9998 25.4667 38.9998 26.1667V36.6667C38.9998 37.3667 38.5332 37.8333 37.8332 37.8333Z"
                                                fill="#20282D"></path>
                                        </svg>
                                    </span>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a class="card-project radius18" aria-label="project details"
                                    href="/project-details?project=azman">
                                    <img src="{{ asset('assets/img/project/img2.jpg') }}" alt="project image"
                                        width="645" height="690" loading="lazy">
                                    <div class="card-project-content-absolute">
                                        <div class="card-project-content">
                                            <h2 class="heading text-24">AZMAN AIRLINES</h2>
                                            <p class="text text-16">Pricing strategy design</p>
                                        </div>
                                    </div>
                                    <span class="svg-wrapper icon-project-link">
                                        <svg viewbox="0 0 64 64" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="32" cy="32" r="32" fill="white"></circle>
                                            <path
                                                d="M26.1667 39C25.8167 39 25.5833 38.8833 25.35 38.65C24.8833 38.1833 24.8833 37.4833 25.35 37.0167L37.0167 25.35C37.4833 24.8833 38.1833 24.8833 38.65 25.35C39.1167 25.8167 39.1167 26.5167 38.65 26.9833L26.9833 38.65C26.75 38.8833 26.5167 39 26.1667 39Z"
                                                fill="#20282D"></path>
                                            <path
                                                d="M37.8332 37.8333C37.1332 37.8333 36.6665 37.3667 36.6665 36.6667V27.3333H27.3332C26.6332 27.3333 26.1665 26.8667 26.1665 26.1667C26.1665 25.4667 26.6332 25 27.3332 25H37.8332C38.5332 25 38.9998 25.4667 38.9998 26.1667V36.6667C38.9998 37.3667 38.5332 37.8333 37.8332 37.8333Z"
                                                fill="#20282D"></path>
                                        </svg>
                                    </span>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a class="card-project radius18" aria-label="project details"
                                    href="/project-details?project=stuffsmart">
                                    <img src="{{ asset('assets/img/project/img3.jpg') }}" alt="project image"
                                        width="645" height="690" loading="lazy">
                                    <div class="card-project-content-absolute">
                                        <div class="card-project-content">
                                            <h2 class="heading text-24">STUFFS MART</h2>
                                            <p class="text text-16">Business expansion strategy</p>
                                        </div>
                                    </div>
                                    <span class="svg-wrapper icon-project-link">
                                        <svg viewbox="0 0 64 64" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="32" cy="32" r="32" fill="white"></circle>
                                            <path
                                                d="M26.1667 39C25.8167 39 25.5833 38.8833 25.35 38.65C24.8833 38.1833 24.8833 37.4833 25.35 37.0167L37.0167 25.35C37.4833 24.8833 38.1833 24.8833 38.65 25.35C39.1167 25.8167 39.1167 26.5167 38.65 26.9833L26.9833 38.65C26.75 38.8833 26.5167 39 26.1667 39Z"
                                                fill="#20282D"></path>
                                            <path
                                                d="M37.8332 37.8333C37.1332 37.8333 36.6665 37.3667 36.6665 36.6667V27.3333H27.3332C26.6332 27.3333 26.1665 26.8667 26.1665 26.1667C26.1665 25.4667 26.6332 25 27.3332 25H37.8332C38.5332 25 38.9998 25.4667 38.9998 26.1667V36.6667C38.9998 37.3667 38.5332 37.8333 37.8332 37.8333Z"
                                                fill="#20282D"></path>
                                        </svg>
                                    </span>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a class="card-project radius18" aria-label="project details"
                                    href="/project-details?project=ridgeville">
                                    <img src="{{ asset('assets/img/project/img4.jpg') }}" alt="project image"
                                        width="645" height="690" loading="lazy">
                                    <div class="card-project-content-absolute">
                                        <div class="card-project-content">
                                            <h2 class="heading text-24">RIDGE VILLE APARTMENT</h2>
                                            <p class="text text-16">Full operational setup of an aparthotel</p>
                                        </div>
                                    </div>
                                    <span class="svg-wrapper icon-project-link">
                                        <svg viewbox="0 0 64 64" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="32" cy="32" r="32" fill="white"></circle>
                                            <path
                                                d="M26.1667 39C25.8167 39 25.5833 38.8833 25.35 38.65C24.8833 38.1833 24.8833 37.4833 25.35 37.0167L37.0167 25.35C37.4833 24.8833 38.1833 24.8833 38.65 25.35C39.1167 25.8167 39.1167 26.5167 38.65 26.9833L26.9833 38.65C26.75 38.8833 26.5167 39 26.1667 39Z"
                                                fill="#20282D"></path>
                                            <path
                                                d="M37.8332 37.8333C37.1332 37.8333 36.6665 37.3667 36.6665 36.6667V27.3333H27.3332C26.6332 27.3333 26.1665 26.8667 26.1665 26.1667C26.1665 25.4667 26.6332 25 27.3332 25H37.8332C38.5332 25 38.9998 25.4667 38.9998 26.1667V36.6667C38.9998 37.3667 38.5332 37.8333 37.8332 37.8333Z"
                                                fill="#20282D"></path>
                                        </svg>
                                    </span>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a class="card-project radius18" aria-label="project details"
                                    href="/project-details?project=knightsbridge">
                                    <img src="{{ asset('assets/img/project/img5.jpg') }}" alt="project image"
                                        width="645" height="690" loading="lazy">
                                    <div class="card-project-content-absolute">
                                        <div class="card-project-content">
                                            <h2 class="heading text-24">KNIGHTSBRIDGE HOTEL & SUITES</h2>
                                            <p class="text text-16">Advisory and operational support for expansion</p>
                                        </div>
                                    </div>
                                    <span class="svg-wrapper icon-project-link">
                                        <svg viewbox="0 0 64 64" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="32" cy="32" r="32" fill="white"></circle>
                                            <path
                                                d="M26.1667 39C25.8167 39 25.5833 38.8833 25.35 38.65C24.8833 38.1833 24.8833 37.4833 25.35 37.0167L37.0167 25.35C37.4833 24.8833 38.1833 24.8833 38.65 25.35C39.1167 25.8167 39.1167 26.5167 38.65 26.9833L26.9833 38.65C26.75 38.8833 26.5167 39 26.1667 39Z"
                                                fill="#20282D"></path>
                                            <path
                                                d="M37.8332 37.8333C37.1332 37.8333 36.6665 37.3667 36.6665 36.6667V27.3333H27.3332C26.6332 27.3333 26.1665 26.8667 26.1665 26.1667C26.1665 25.4667 26.6332 25 27.3332 25H37.8332C38.5332 25 38.9998 25.4667 38.9998 26.1667V36.6667C38.9998 37.3667 38.5332 37.8333 37.8332 37.8333Z"
                                                fill="#20282D"></path>
                                        </svg>
                                    </span>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a class="card-project radius18" aria-label="project details"
                                    href="/project-details?project=eksiogullari">
                                    <img src="{{ asset('assets/img/project/img6.png') }}" alt="project image"
                                        width="645" height="690" loading="lazy">
                                    <div class="card-project-content-absolute">
                                        <div class="card-project-content">
                                            <h2 class="heading text-24">EKŞIOĞULLARI CONSTRUCTION</h2>
                                            <p class="text text-16">Divestment strategy during downturn</p>
                                        </div>
                                    </div>
                                    <span class="svg-wrapper icon-project-link">
                                        <svg viewbox="0 0 64 64" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="32" cy="32" r="32" fill="white"></circle>
                                            <path
                                                d="M26.1667 39C25.8167 39 25.5833 38.8833 25.35 38.65C24.8833 38.1833 24.8833 37.4833 25.35 37.0167L37.0167 25.35C37.4833 24.8833 38.1833 24.8833 38.65 25.35C39.1167 25.8167 39.1167 26.5167 38.65 26.9833L26.9833 38.65C26.75 38.8833 26.5167 39 26.1667 39Z"
                                                fill="#20282D"></path>
                                            <path
                                                d="M37.8332 37.8333C37.1332 37.8333 36.6665 37.3667 36.6665 36.6667V27.3333H27.3332C26.6332 27.3333 26.1665 26.8667 26.1665 26.1667C26.1665 25.4667 26.6332 25 27.3332 25H37.8332C38.5332 25 38.9998 25.4667 38.9998 26.1667V36.6667C38.9998 37.3667 38.5332 37.8333 37.8332 37.8333Z"
                                                fill="#20282D"></path>
                                        </svg>
                                    </span>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a class="card-project radius18" aria-label="project details"
                                    href="/project-details?project=government">
                                    <img src="{{ asset('assets/img/project/img7.jpg') }}" alt="project image"
                                        width="645" height="690" loading="lazy">
                                    <div class="card-project-content-absolute">
                                        <div class="card-project-content">
                                            <h2 class="heading text-24">GOVERNMENT AGENCY</h2>
                                            <p class="text text-16">Strategy retreat in London for two Nigerian
                                                government agencies</p>
                                        </div>
                                    </div>
                                    <span class="svg-wrapper icon-project-link">
                                        <svg viewbox="0 0 64 64" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="32" cy="32" r="32" fill="white"></circle>
                                            <path
                                                d="M26.1667 39C25.8167 39 25.5833 38.8833 25.35 38.65C24.8833 38.1833 24.8833 37.4833 25.35 37.0167L37.0167 25.35C37.4833 24.8833 38.1833 24.8833 38.65 25.35C39.1167 25.8167 39.1167 26.5167 38.65 26.9833L26.9833 38.65C26.75 38.8833 26.5167 39 26.1667 39Z"
                                                fill="#20282D"></path>
                                            <path
                                                d="M37.8332 37.8333C37.1332 37.8333 36.6665 37.3667 36.6665 36.6667V27.3333H27.3332C26.6332 27.3333 26.1665 26.8667 26.1665 26.1667C26.1665 25.4667 26.6332 25 27.3332 25H37.8332C38.5332 25 38.9998 25.4667 38.9998 26.1667V36.6667C38.9998 37.3667 38.5332 37.8333 37.8332 37.8333Z"
                                                fill="#20282D"></path>
                                        </svg>
                                    </span>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a class="card-project radius18" aria-label="project details"
                                    href="/project-details?project=healthcare">
                                    <img src="{{ asset('assets/img/project/img8.jpg') }}" alt="project image"
                                        width="645" height="690" loading="lazy">
                                    <div class="card-project-content-absolute">
                                        <div class="card-project-content">
                                            <h2 class="heading text-24">HEALTHCARE PROJECT</h2>
                                            <p class="text text-16">End-to-end project management for modern hospital
                                                construction</p>
                                        </div>
                                    </div>
                                    <span class="svg-wrapper icon-project-link">
                                        <svg viewbox="0 0 64 64" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="32" cy="32" r="32" fill="white"></circle>
                                            <path
                                                d="M26.1667 39C25.8167 39 25.5833 38.8833 25.35 38.65C24.8833 38.1833 24.8833 37.4833 25.35 37.0167L37.0167 25.35C37.4833 24.8833 38.1833 24.8833 38.65 25.35C39.1167 25.8167 39.1167 26.5167 38.65 26.9833L26.9833 38.65C26.75 38.8833 26.5167 39 26.1667 39Z"
                                                fill="#20282D"></path>
                                            <path
                                                d="M37.8332 37.8333C37.1332 37.8333 36.6665 37.3667 36.6665 36.6667V27.3333H27.3332C26.6332 27.3333 26.1665 26.8667 26.1665 26.1667C26.1665 25.4667 26.6332 25 27.3332 25H37.8332C38.5332 25 38.9998 25.4667 38.9998 26.1667V36.6667C38.9998 37.3667 38.5332 37.8333 37.8332 37.8333Z"
                                                fill="#20282D"></path>
                                        </svg>
                                    </span>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a class="card-project radius18" aria-label="project details"
                                    href="/project-details?project=school">
                                    <img src="{{ asset('assets/img/project/img9.jpg') }}" alt="project image"
                                        width="645" height="690" loading="lazy">
                                    <div class="card-project-content-absolute">
                                        <div class="card-project-content">
                                            <h2 class="heading text-24">PRIMARY & SECONDARY SCHOOL</h2>
                                            <p class="text text-16">Curriculum refinement to address technology
                                                adoption challenges</p>
                                        </div>
                                    </div>
                                    <span class="svg-wrapper icon-project-link">
                                        <svg viewbox="0 0 64 64" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="32" cy="32" r="32" fill="white"></circle>
                                            <path
                                                d="M26.1667 39C25.8167 39 25.5833 38.8833 25.35 38.65C24.8833 38.1833 24.8833 37.4833 25.35 37.0167L37.0167 25.35C37.4833 24.8833 38.1833 24.8833 38.65 25.35C39.1167 25.8167 39.1167 26.5167 38.65 26.9833L26.9833 38.65C26.75 38.8833 26.5167 39 26.1667 39Z"
                                                fill="#20282D"></path>
                                            <path
                                                d="M37.8332 37.8333C37.1332 37.8333 36.6665 37.3667 36.6665 36.6667V27.3333H27.3332C26.6332 27.3333 26.1665 26.8667 26.1665 26.1667C26.1665 25.4667 26.6332 25 27.3332 25H37.8332C38.5332 25 38.9998 25.4667 38.9998 26.1667V36.6667C38.9998 37.3667 38.5332 37.8333 37.8332 37.8333Z"
                                                fill="#20282D"></path>
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="swiper-nav-border" data-aos="fade-up" data-aos-delay="150">
                        <div class="swiper-nav-inner">
                            <div class="swiper-button-prev">
                                <svg viewbox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M0.910711 5.40903C0.754485 5.5653 0.666722 5.77723 0.666722 5.9982C0.666722 6.21917 0.754485 6.43109 0.910711 6.58736L5.62488 11.3015C5.70175 11.3811 5.7937 11.4446 5.89537 11.4883C5.99704 11.532 6.10639 11.5549 6.21704 11.5559C6.32769 11.5569 6.43742 11.5358 6.53984 11.4939C6.64225 11.452 6.7353 11.3901 6.81354 11.3119C6.89178 11.2336 6.95366 11.1406 6.99556 11.0382C7.03746 10.9357 7.05855 10.826 7.05759 10.7154C7.05662 10.6047 7.03364 10.4954 6.98996 10.3937C6.94629 10.292 6.8828 10.2001 6.80321 10.1232L2.67821 5.9982L6.80321 1.8732C6.95501 1.71603 7.039 1.50553 7.03711 1.28703C7.03521 1.06853 6.94757 0.859522 6.79306 0.705015C6.63855 0.550508 6.42954 0.462868 6.21104 0.460969C5.99255 0.45907 5.78205 0.543066 5.62488 0.694864L0.910711 5.40903Z"
                                        fill="currentColor"></path>
                                </svg>
                            </div>
                            <div class="swiper-button-next">
                                <svg viewbox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M7.08929 5.40903C7.24552 5.5653 7.33328 5.77723 7.33328 5.9982C7.33328 6.21917 7.24552 6.43109 7.08929 6.58736L2.37512 11.3015C2.29825 11.3811 2.2063 11.4446 2.10463 11.4883C2.00296 11.532 1.89361 11.5549 1.78296 11.5559C1.67231 11.5569 1.56258 11.5358 1.46016 11.4939C1.35775 11.452 1.2647 11.3901 1.18646 11.3119C1.10822 11.2336 1.04634 11.1406 1.00444 11.0382C0.962537 10.9357 0.941453 10.826 0.942414 10.7154C0.943376 10.6047 0.966364 10.4954 1.01004 10.3937C1.05371 10.292 1.1172 10.2001 1.19679 10.1232L5.32179 5.9982L1.19679 1.8732C1.04499 1.71603 0.960996 1.50553 0.962894 1.28703C0.964793 1.06853 1.05243 0.859522 1.20694 0.705015C1.36145 0.550508 1.57046 0.462868 1.78896 0.460969C2.00745 0.45907 2.21795 0.543066 2.37512 0.694864L7.08929 5.40903Z"
                                        fill="currentColor"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </project-slider>

        <!-- Our Team -->
        <team-slider class="team-slider mt-100">
            <div class="container">
                <div class="section-headings headings-width text-center">
                    <div class="subheading text-20 subheading-bg" data-aos="fade-up">
                        <svg class="icon icon-14" xmlns="http://www.w3.org/2000/svg" width="14"
                            height="14" viewbox="0 0 14 14" fill="none">
                            <g clip-path="url(#clip0_9088_4143)">
                                <path
                                    d="M8.71401 5.28599C11.7514 5.4205 14 5.9412 14 7C14 8.0588 11.7514 8.5795 8.71401 8.71401C8.5795 11.7514 8.0588 14 7 14C5.9412 14 5.4205 11.7514 5.28599 8.71401C2.2486 8.5795 -1.33117e-07 8.0588 0 7C4.62818e-08 5.94119 2.2486 5.4205 5.28599 5.28599C5.4205 2.2486 5.9412 0 7 0C8.0588 0 8.5795 2.2486 8.71401 5.28599Z"
                                    fill="CurrentColor"></path>
                            </g>
                            <defs>
                                <clippath>
                                    <rect width="14" height="14" fill="CurrentColor"></rect>
                                </clippath>
                            </defs>
                        </svg>
                        <span>Our Team</span>
                        <svg class="icon icon-14" xmlns="http://www.w3.org/2000/svg" width="14"
                            height="14" viewbox="0 0 14 14" fill="none">
                            <g clip-path="url(#clip0_9088_4143)">
                                <path
                                    d="M8.71401 5.28599C11.7514 5.4205 14 5.9412 14 7C14 8.0588 11.7514 8.5795 8.71401 8.71401C8.5795 11.7514 8.0588 14 7 14C5.9412 14 5.4205 11.7514 5.28599 8.71401C2.2486 8.5795 -1.33117e-07 8.0588 0 7C4.62818e-08 5.94119 2.2486 5.4205 5.28599 5.28599C5.4205 2.2486 5.9412 0 7 0C8.0588 0 8.5795 2.2486 8.71401 5.28599Z"
                                    fill="CurrentColor"></path>
                            </g>
                            <defs>
                                <clippath>
                                    <rect width="14" height="14" fill="CurrentColor"></rect>
                                </clippath>
                            </defs>
                        </svg>
                    </div>
                    <h2 class="heading text-50" data-aos="fade-up">
                        Meet the experts behind your success
                    </h2>
                </div>
            </div>

            <div class="section-content" data-aos="fade-up">
                <div class="container">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="card-team radius18">
                                    <img src="{{ asset('assets/img/team/img1.jpeg') }}" alt="team image"
                                        width="500" height="619" loading="lazy">
                                    <div class="card-team-content-absolute">
                                        <div class="card-team-content">
                                            <a href="/team-details?member=ahmad" aria-label="team details"
                                                class="heading text-22 fw-600">Ahmad Mukhtar
                                                Mustafa</a>
                                            <p class="text text-18">Lead, Private Sector</p>
                                        </div>
                                    </div>
                                    <div class="social-list">
                                        <a href="#" class="svg-wrapper" aria-label="LinkedIn">
                                            <svg class="icon icon-20" xmlns="http://www.w3.org/2000/svg"
                                                width="17" height="16" viewbox="0 0 17 16"
                                                fill="none">
                                                <path
                                                    d="M3.78357 2.16742C3.78326 2.84601 3.37157 3.45666 2.74262 3.71142C2.11367 3.96619 1.39306 3.81419 0.920587 3.32711C0.448112 2.84001 0.318129 2.11511 0.59192 1.49421C0.86572 0.873305 1.48862 0.480397 2.1669 0.500755C3.0678 0.527797 3.78398 1.26612 3.78357 2.16742ZM3.83357 5.06742H0.500237V15.5007H3.83357V5.06742ZM9.10025 5.06742H5.78357V15.5007H9.06692V10.0257C9.06692 6.97573 13.0419 6.6924 13.0419 10.0257V15.5007H16.3336V8.8924C16.3336 3.75075 10.4503 3.94242 9.06692 6.4674L9.10025 5.06742Z"
                                                    fill="currentColor"></path>
                                            </svg>
                                        </a>

                                        <a href="#" class="svg-wrapper" aria-label="twitter">
                                            <svg class="icon icon-20" xmlns="http://www.w3.org/2000/svg"
                                                width="18" height="14" viewbox="0 0 18 14"
                                                fill="none">
                                                <path
                                                    d="M17.5104 1.71289C16.8743 1.9943 16.1996 2.17914 15.5088 2.26127C16.2366 1.82561 16.7812 1.14026 17.0411 0.332886C16.3573 0.739186 15.6088 1.02515 14.8282 1.17835C14.1693 0.475394 13.2483 0.0770356 12.2848 0.0781272C10.3605 0.0781272 8.79975 1.63835 8.79975 3.56354C8.79975 3.83666 8.83109 4.10153 8.88967 4.35709C5.99206 4.21121 3.42506 2.82455 1.70565 0.715686C1.39608 1.24757 1.23338 1.85216 1.2342 2.46757C1.2342 3.67667 1.84967 4.74388 2.78458 5.36868C2.23115 5.35118 1.6899 5.20171 1.20599 4.93262C1.20545 4.94726 1.20545 4.9619 1.20545 4.97574C1.20545 6.66484 2.40683 8.07384 4.00166 8.39376C3.70234 8.47476 3.3936 8.51568 3.08352 8.51543C2.85831 8.51543 2.63976 8.49468 2.42733 8.45393C2.8711 9.83826 4.15739 10.8461 5.683 10.8738C4.44845 11.8427 2.92391 12.3683 1.35453 12.3661C1.07677 12.3663 0.799246 12.3499 0.523438 12.3171C2.1167 13.3413 3.97127 13.8849 5.86535 13.8829C12.2763 13.8829 15.7817 8.57243 15.7817 3.9671C15.7817 3.81643 15.778 3.66523 15.7713 3.51615C16.4536 3.02322 17.0425 2.41257 17.5104 1.71289Z"
                                                    fill="currentColor"></path>
                                            </svg>
                                        </a>

                                        <a href="mailto:a.mukhtar@229consult.com" class="svg-wrapper"
                                            aria-label="email">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="16"
                                                viewbox="0 0 20 16" fill="none">
                                                <path
                                                    d="M18 0H2C0.9 0 0.00999999 0.9 0.00999999 2L0 14C0 15.1 0.9 16 2 16H18C19.1 16 20 15.1 20 14V2C20 0.9 19.1 0 18 0ZM18 4L10 9L2 4V2L10 7L18 2V4Z"
                                                    fill="currentColor"></path>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card-team radius18">
                                    <img src="{{ asset('assets/img/team/img2.jpeg') }}" alt="team image"
                                        width="500" height="619" loading="lazy">
                                    <div class="card-team-content-absolute">
                                        <div class="card-team-content">
                                            <a href="/team-details?member=muhammad" aria-label="team details"
                                                class="heading text-22 fw-600">Muhammad
                                                Rabiu Gambo</a>
                                            <p class="text text-18">Partner, Lead Public Sector</p>
                                        </div>
                                    </div>
                                    <div class="social-list">
                                        <a href="#" class="svg-wrapper" aria-label="LinkedIn">
                                            <svg class="icon icon-20" xmlns="http://www.w3.org/2000/svg"
                                                width="17" height="16" viewbox="0 0 17 16"
                                                fill="none">
                                                <path
                                                    d="M3.78357 2.16742C3.78326 2.84601 3.37157 3.45666 2.74262 3.71142C2.11367 3.96619 1.39306 3.81419 0.920587 3.32711C0.448112 2.84001 0.318129 2.11511 0.59192 1.49421C0.86572 0.873305 1.48862 0.480397 2.1669 0.500755C3.0678 0.527797 3.78398 1.26612 3.78357 2.16742ZM3.83357 5.06742H0.500237V15.5007H3.83357V5.06742ZM9.10025 5.06742H5.78357V15.5007H9.06692V10.0257C9.06692 6.97573 13.0419 6.6924 13.0419 10.0257V15.5007H16.3336V8.8924C16.3336 3.75075 10.4503 3.94242 9.06692 6.4674L9.10025 5.06742Z"
                                                    fill="currentColor"></path>
                                            </svg>
                                        </a>

                                        <a href="#" class="svg-wrapper" aria-label="twitter">
                                            <svg class="icon icon-20" xmlns="http://www.w3.org/2000/svg"
                                                width="18" height="14" viewbox="0 0 18 14"
                                                fill="none">
                                                <path
                                                    d="M17.5104 1.71289C16.8743 1.9943 16.1996 2.17914 15.5088 2.26127C16.2366 1.82561 16.7812 1.14026 17.0411 0.332886C16.3573 0.739186 15.6088 1.02515 14.8282 1.17835C14.1693 0.475394 13.2483 0.0770356 12.2848 0.0781272C10.3605 0.0781272 8.79975 1.63835 8.79975 3.56354C8.79975 3.83666 8.83109 4.10153 8.88967 4.35709C5.99206 4.21121 3.42506 2.82455 1.70565 0.715686C1.39608 1.24757 1.23338 1.85216 1.2342 2.46757C1.2342 3.67667 1.84967 4.74388 2.78458 5.36868C2.23115 5.35118 1.6899 5.20171 1.20599 4.93262C1.20545 4.94726 1.20545 4.9619 1.20545 4.97574C1.20545 6.66484 2.40683 8.07384 4.00166 8.39376C3.70234 8.47476 3.3936 8.51568 3.08352 8.51543C2.85831 8.51543 2.63976 8.49468 2.42733 8.45393C2.8711 9.83826 4.15739 10.8461 5.683 10.8738C4.44845 11.8427 2.92391 12.3683 1.35453 12.3661C1.07677 12.3663 0.799246 12.3499 0.523438 12.3171C2.1167 13.3413 3.97127 13.8849 5.86535 13.8829C12.2763 13.8829 15.7817 8.57243 15.7817 3.9671C15.7817 3.81643 15.778 3.66523 15.7713 3.51615C16.4536 3.02322 17.0425 2.41257 17.5104 1.71289Z"
                                                    fill="currentColor"></path>
                                            </svg>
                                        </a>

                                        <a href="mailto:mrgambo@229consult.com" class="svg-wrapper"
                                            aria-label="email">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="16"
                                                viewbox="0 0 20 16" fill="none">
                                                <path
                                                    d="M18 0H2C0.9 0 0.00999999 0.9 0.00999999 2L0 14C0 15.1 0.9 16 2 16H18C19.1 16 20 15.1 20 14V2C20 0.9 19.1 0 18 0ZM18 4L10 9L2 4V2L10 7L18 2V4Z"
                                                    fill="currentColor"></path>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card-team radius18">
                                    <img src="{{ asset('assets/img/team/img3.jpeg') }}" alt="team image"
                                        width="500" height="619" loading="lazy">
                                    <div class="card-team-content-absolute">
                                        <div class="card-team-content">
                                            <a href="/team-details?member=murtala" aria-label="team details"
                                                class="heading text-22 fw-600">Murtala Umar
                                                Adamu</a>
                                            <p class="text text-18">Principal Consultant</p>
                                        </div>
                                    </div>
                                    <div class="social-list">
                                        <a href="#" class="svg-wrapper" aria-label="LinkedIn">
                                            <svg class="icon icon-20" xmlns="http://www.w3.org/2000/svg"
                                                width="17" height="16" viewbox="0 0 17 16"
                                                fill="none">
                                                <path
                                                    d="M3.78357 2.16742C3.78326 2.84601 3.37157 3.45666 2.74262 3.71142C2.11367 3.96619 1.39306 3.81419 0.920587 3.32711C0.448112 2.84001 0.318129 2.11511 0.59192 1.49421C0.86572 0.873305 1.48862 0.480397 2.1669 0.500755C3.0678 0.527797 3.78398 1.26612 3.78357 2.16742ZM3.83357 5.06742H0.500237V15.5007H3.83357V5.06742ZM9.10025 5.06742H5.78357V15.5007H9.06692V10.0257C9.06692 6.97573 13.0419 6.6924 13.0419 10.0257V15.5007H16.3336V8.8924C16.3336 3.75075 10.4503 3.94242 9.06692 6.4674L9.10025 5.06742Z"
                                                    fill="currentColor"></path>
                                            </svg>
                                        </a>

                                        <a href="#" class="svg-wrapper" aria-label="twitter">
                                            <svg class="icon icon-20" xmlns="http://www.w3.org/2000/svg"
                                                width="18" height="14" viewbox="0 0 18 14"
                                                fill="none">
                                                <path
                                                    d="M17.5104 1.71289C16.8743 1.9943 16.1996 2.17914 15.5088 2.26127C16.2366 1.82561 16.7812 1.14026 17.0411 0.332886C16.3573 0.739186 15.6088 1.02515 14.8282 1.17835C14.1693 0.475394 13.2483 0.0770356 12.2848 0.0781272C10.3605 0.0781272 8.79975 1.63835 8.79975 3.56354C8.79975 3.83666 8.83109 4.10153 8.88967 4.35709C5.99206 4.21121 3.42506 2.82455 1.70565 0.715686C1.39608 1.24757 1.23338 1.85216 1.2342 2.46757C1.2342 3.67667 1.84967 4.74388 2.78458 5.36868C2.23115 5.35118 1.6899 5.20171 1.20599 4.93262C1.20545 4.94726 1.20545 4.9619 1.20545 4.97574C1.20545 6.66484 2.40683 8.07384 4.00166 8.39376C3.70234 8.47476 3.3936 8.51568 3.08352 8.51543C2.85831 8.51543 2.63976 8.49468 2.42733 8.45393C2.8711 9.83826 4.15739 10.8461 5.683 10.8738C4.44845 11.8427 2.92391 12.3683 1.35453 12.3661C1.07677 12.3663 0.799246 12.3499 0.523438 12.3171C2.1167 13.3413 3.97127 13.8849 5.86535 13.8829C12.2763 13.8829 15.7817 8.57243 15.7817 3.9671C15.7817 3.81643 15.778 3.66523 15.7713 3.51615C16.4536 3.02322 17.0425 2.41257 17.5104 1.71289Z"
                                                    fill="currentColor"></path>
                                            </svg>
                                        </a>

                                        <a href="mailto:murtala@229consult.com" class="svg-wrapper"
                                            aria-label="email">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="16"
                                                viewbox="0 0 20 16" fill="none">
                                                <path
                                                    d="M18 0H2C0.9 0 0.00999999 0.9 0.00999999 2L0 14C0 15.1 0.9 16 2 16H18C19.1 16 20 15.1 20 14V2C20 0.9 19.1 0 18 0ZM18 4L10 9L2 4V2L10 7L18 2V4Z"
                                                    fill="currentColor"></path>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card-team radius18">
                                    <img src="{{ asset('assets/img/team/img5.jpeg') }}" alt="team image"
                                        width="500" height="619" loading="lazy">
                                    <div class="card-team-content-absolute">
                                        <div class="card-team-content">
                                            <a href="/team-details?member=alamin" aria-label="team details"
                                                class="heading text-22 fw-600">Al-Amin
                                                Masu</a>
                                            <p class="text text-18">Strategy Consultant</p>
                                        </div>
                                    </div>
                                    <div class="social-list">
                                        <a href="#" class="svg-wrapper" aria-label="LinkedIn">
                                            <svg class="icon icon-20" xmlns="http://www.w3.org/2000/svg"
                                                width="17" height="16" viewbox="0 0 17 16"
                                                fill="none">
                                                <path
                                                    d="M3.78357 2.16742C3.78326 2.84601 3.37157 3.45666 2.74262 3.71142C2.11367 3.96619 1.39306 3.81419 0.920587 3.32711C0.448112 2.84001 0.318129 2.11511 0.59192 1.49421C0.86572 0.873305 1.48862 0.480397 2.1669 0.500755C3.0678 0.527797 3.78398 1.26612 3.78357 2.16742ZM3.83357 5.06742H0.500237V15.5007H3.83357V5.06742ZM9.10025 5.06742H5.78357V15.5007H9.06692V10.0257C9.06692 6.97573 13.0419 6.6924 13.0419 10.0257V15.5007H16.3336V8.8924C16.3336 3.75075 10.4503 3.94242 9.06692 6.4674L9.10025 5.06742Z"
                                                    fill="currentColor"></path>
                                            </svg>
                                        </a>

                                        <a href="#" class="svg-wrapper" aria-label="twitter">
                                            <svg class="icon icon-20" xmlns="http://www.w3.org/2000/svg"
                                                width="18" height="14" viewbox="0 0 18 14"
                                                fill="none">
                                                <path
                                                    d="M17.5104 1.71289C16.8743 1.9943 16.1996 2.17914 15.5088 2.26127C16.2366 1.82561 16.7812 1.14026 17.0411 0.332886C16.3573 0.739186 15.6088 1.02515 14.8282 1.17835C14.1693 0.475394 13.2483 0.0770356 12.2848 0.0781272C10.3605 0.0781272 8.79975 1.63835 8.79975 3.56354C8.79975 3.83666 8.83109 4.10153 8.88967 4.35709C5.99206 4.21121 3.42506 2.82455 1.70565 0.715686C1.39608 1.24757 1.23338 1.85216 1.2342 2.46757C1.2342 3.67667 1.84967 4.74388 2.78458 5.36868C2.23115 5.35118 1.6899 5.20171 1.20599 4.93262C1.20545 4.94726 1.20545 4.9619 1.20545 4.97574C1.20545 6.66484 2.40683 8.07384 4.00166 8.39376C3.70234 8.47476 3.3936 8.51568 3.08352 8.51543C2.85831 8.51543 2.63976 8.49468 2.42733 8.45393C2.8711 9.83826 4.15739 10.8461 5.683 10.8738C4.44845 11.8427 2.92391 12.3683 1.35453 12.3661C1.07677 12.3663 0.799246 12.3499 0.523438 12.3171C2.1167 13.3413 3.97127 13.8849 5.86535 13.8829C12.2763 13.8829 15.7817 8.57243 15.7817 3.9671C15.7817 3.81643 15.778 3.66523 15.7713 3.51615C16.4536 3.02322 17.0425 2.41257 17.5104 1.71289Z"
                                                    fill="currentColor"></path>
                                            </svg>
                                        </a>

                                        <a href="mailto:alamin@229consult.com" class="svg-wrapper"
                                            aria-label="email">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="16"
                                                viewbox="0 0 20 16" fill="none">
                                                <path
                                                    d="M18 0H2C0.9 0 0.00999999 0.9 0.00999999 2L0 14C0 15.1 0.9 16 2 16H18C19.1 16 20 15.1 20 14V2C20 0.9 19.1 0 18 0ZM18 4L10 9L2 4V2L10 7L18 2V4Z"
                                                    fill="currentColor"></path>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card-team radius18">
                                    <img src="{{ asset('assets/img/team/img4.jpeg') }}" alt="team image"
                                        width="500" height="619" loading="lazy">
                                    <div class="card-team-content-absolute">
                                        <div class="card-team-content">
                                            <a href="/team-details?member=hassan" aria-label="team details"
                                                class="heading text-22 fw-600">Hassan
                                                Adelakin</a>
                                            <p class="text text-18">Chief Communications Officer</p>
                                        </div>
                                    </div>
                                    <div class="social-list">
                                        <a href="#" class="svg-wrapper" aria-label="LinkedIn">
                                            <svg class="icon icon-20" xmlns="http://www.w3.org/2000/svg"
                                                width="17" height="16" viewbox="0 0 17 16"
                                                fill="none">
                                                <path
                                                    d="M3.78357 2.16742C3.78326 2.84601 3.37157 3.45666 2.74262 3.71142C2.11367 3.96619 1.39306 3.81419 0.920587 3.32711C0.448112 2.84001 0.318129 2.11511 0.59192 1.49421C0.86572 0.873305 1.48862 0.480397 2.1669 0.500755C3.0678 0.527797 3.78398 1.26612 3.78357 2.16742ZM3.83357 5.06742H0.500237V15.5007H3.83357V5.06742ZM9.10025 5.06742H5.78357V15.5007H9.06692V10.0257C9.06692 6.97573 13.0419 6.6924 13.0419 10.0257V15.5007H16.3336V8.8924C16.3336 3.75075 10.4503 3.94242 9.06692 6.4674L9.10025 5.06742Z"
                                                    fill="currentColor"></path>
                                            </svg>
                                        </a>

                                        <a href="#" class="svg-wrapper" aria-label="twitter">
                                            <svg class="icon icon-20" xmlns="http://www.w3.org/2000/svg"
                                                width="18" height="14" viewbox="0 0 18 14"
                                                fill="none">
                                                <path
                                                    d="M17.5104 1.71289C16.8743 1.9943 16.1996 2.17914 15.5088 2.26127C16.2366 1.82561 16.7812 1.14026 17.0411 0.332886C16.3573 0.739186 15.6088 1.02515 14.8282 1.17835C14.1693 0.475394 13.2483 0.0770356 12.2848 0.0781272C10.3605 0.0781272 8.79975 1.63835 8.79975 3.56354C8.79975 3.83666 8.83109 4.10153 8.88967 4.35709C5.99206 4.21121 3.42506 2.82455 1.70565 0.715686C1.39608 1.24757 1.23338 1.85216 1.2342 2.46757C1.2342 3.67667 1.84967 4.74388 2.78458 5.36868C2.23115 5.35118 1.6899 5.20171 1.20599 4.93262C1.20545 4.94726 1.20545 4.9619 1.20545 4.97574C1.20545 6.66484 2.40683 8.07384 4.00166 8.39376C3.70234 8.47476 3.3936 8.51568 3.08352 8.51543C2.85831 8.51543 2.63976 8.49468 2.42733 8.45393C2.8711 9.83826 4.15739 10.8461 5.683 10.8738C4.44845 11.8427 2.92391 12.3683 1.35453 12.3661C1.07677 12.3663 0.799246 12.3499 0.523438 12.3171C2.1167 13.3413 3.97127 13.8849 5.86535 13.8829C12.2763 13.8829 15.7817 8.57243 15.7817 3.9671C15.7817 3.81643 15.778 3.66523 15.7713 3.51615C16.4536 3.02322 17.0425 2.41257 17.5104 1.71289Z"
                                                    fill="currentColor"></path>
                                            </svg>
                                        </a>

                                        <a href="mailto:hassan@229consult.com" class="svg-wrapper"
                                            aria-label="email">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="16"
                                                viewbox="0 0 20 16" fill="none">
                                                <path
                                                    d="M18 0H2C0.9 0 0.00999999 0.9 0.00999999 2L0 14C0 15.1 0.9 16 2 16H18C19.1 16 20 15.1 20 14V2C20 0.9 19.1 0 18 0ZM18 4L10 9L2 4V2L10 7L18 2V4Z"
                                                    fill="currentColor"></path>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </team-slider>


        <!-- Featured Blog -->
        <div class="featured-blog mt-100 section-padding">
            <div class="container">
                <div class="section-headings text-center">
                    <div class="subheading subheading-bg text-20" data-aos="fade-up">
                        <svg class="icon icon-14" xmlns="http://www.w3.org/2000/svg" width="14"
                            height="14" viewbox="0 0 14 14" fill="none">
                            <g clip-path="url(#clip0_9088_4143)">
                                <path
                                    d="M8.71401 5.28599C11.7514 5.4205 14 5.9412 14 7C14 8.0588 11.7514 8.5795 8.71401 8.71401C8.5795 11.7514 8.0588 14 7 14C5.9412 14 5.4205 11.7514 5.28599 8.71401C2.2486 8.5795 -1.33117e-07 8.0588 0 7C4.62818e-08 5.94119 2.2486 5.4205 5.28599 5.28599C5.4205 2.2486 5.9412 0 7 0C8.0588 0 8.5795 2.2486 8.71401 5.28599Z"
                                    fill="CurrentColor"></path>
                            </g>
                            <defs>
                                <clippath>
                                    <rect width="14" height="14" fill="CurrentColor"></rect>
                                </clippath>
                            </defs>
                        </svg>
                        <span>Our Blog</span>
                        <svg class="icon icon-14" xmlns="http://www.w3.org/2000/svg" width="14"
                            height="14" viewbox="0 0 14 14" fill="none">
                            <g clip-path="url(#clip0_9088_4143)">
                                <path
                                    d="M8.71401 5.28599C11.7514 5.4205 14 5.9412 14 7C14 8.0588 11.7514 8.5795 8.71401 8.71401C8.5795 11.7514 8.0588 14 7 14C5.9412 14 5.4205 11.7514 5.28599 8.71401C2.2486 8.5795 -1.33117e-07 8.0588 0 7C4.62818e-08 5.94119 2.2486 5.4205 5.28599 5.28599C5.4205 2.2486 5.9412 0 7 0C8.0588 0 8.5795 2.2486 8.71401 5.28599Z"
                                    fill="CurrentColor"></path>
                            </g>
                            <defs>
                                <clippath>
                                    <rect width="14" height="14" fill="CurrentColor"></rect>
                                </clippath>
                            </defs>
                        </svg>
                    </div>
                    <h2 class="heading text-50" data-aos="fade-up" data-aos-delay="50" style="color: #17a2b8;">
                        Latest News From Us
                    </h2>
                </div>
                <div class="section-content">
                    <div class="row product-grid justify-content-center">
                        @foreach($latestPosts as $index => $post)
                        <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="{{ ($index + 1) * 100 }}">
                            <div class="card-blog radius18" style="height: 100%; display: flex; flex-direction: column;">
                                <div class="card-blog-top">
                                    <div class="card-blog-meta">
                                        <div class="card-blog-meta-item text text-18">
                                            <svg width="16" height="18" viewbox="0 0 16 18"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M8.0007 0.046875C6.95088 0.046875 5.94406 0.463912 5.20173 1.20624C4.4594 1.94858 4.04236 2.95539 4.04236 4.00521C4.04236 5.05502 4.4594 6.06184 5.20173 6.80417C5.94406 7.5465 6.95088 7.96354 8.0007 7.96354C9.05051 7.96354 10.0573 7.5465 10.7997 6.80417C11.542 6.06184 11.959 5.05502 11.959 4.00521C11.959 2.95539 11.542 1.94858 10.7997 1.20624C10.0573 0.463912 9.05051 0.046875 8.0007 0.046875ZM5.29236 4.00521C5.29236 3.28691 5.57771 2.59804 6.08562 2.09013C6.59353 1.58222 7.2824 1.29688 8.0007 1.29688C8.71899 1.29688 9.40787 1.58222 9.91578 2.09013C10.4237 2.59804 10.709 3.28691 10.709 4.00521C10.709 4.7235 10.4237 5.41238 9.91578 5.92029C9.40787 6.4282 8.71899 6.71354 8.0007 6.71354C7.2824 6.71354 6.59353 6.4282 6.08562 5.92029C5.57771 5.41238 5.29236 4.7235 5.29236 4.00521ZM8.0007 9.21354C6.0732 9.21354 4.29653 9.65187 2.9807 10.3919C1.68403 11.1219 0.709031 12.2269 0.709031 13.5885V13.6735C0.708198 14.6419 0.707364 15.8569 1.7732 16.7252C2.29736 17.1519 3.03153 17.456 4.0232 17.656C5.01653 17.8577 6.31236 17.9635 8.0007 17.9635C9.68903 17.9635 10.984 17.8577 11.979 17.656C12.9707 17.456 13.704 17.1519 14.229 16.7252C15.2949 15.8569 15.2932 14.6419 15.2924 13.6735V13.5885C15.2924 12.2269 14.3174 11.1219 13.0215 10.3919C11.7049 9.65187 9.92903 9.21354 8.0007 9.21354ZM1.95903 13.5885C1.95903 12.8794 2.47736 12.1094 3.5932 11.4819C4.68986 10.8652 6.24653 10.4635 8.00153 10.4635C9.75486 10.4635 11.3115 10.8652 12.4082 11.4819C13.5249 12.1094 14.0424 12.8794 14.0424 13.5885C14.0424 14.6785 14.009 15.2919 13.439 15.7552C13.1307 16.0069 12.614 16.2527 11.7307 16.431C10.8499 16.6094 9.6457 16.7135 8.0007 16.7135C6.3557 16.7135 5.1507 16.6094 4.2707 16.431C3.38736 16.2527 2.8707 16.0069 2.56236 15.756C1.99236 15.2919 1.95903 14.6785 1.95903 13.5885Z"
                                                    fill="currentColor"></path>
                                            </svg>
                                            {{ $post->user->name ?? 'Admin' }}
                                        </div>
                                        <div class="card-blog-meta-item text text-18">
                                            <svg width="18" height="18" viewbox="0 0 18 18"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M13.1667 10.6667C13.3877 10.6667 13.5996 10.5789 13.7559 10.4226C13.9122 10.2663 14 10.0543 14 9.83333C14 9.61232 13.9122 9.40036 13.7559 9.24408C13.5996 9.0878 13.3877 9 13.1667 9C12.9457 9 12.7337 9.0878 12.5774 9.24408C12.4211 9.40036 12.3333 9.61232 12.3333 9.83333C12.3333 10.0543 12.4211 10.2663 12.5774 10.4226C12.7337 10.5789 12.9457 10.6667 13.1667 10.6667ZM13.1667 14C13.3877 14 13.5996 13.9122 13.7559 13.7559C13.9122 13.5996 14 13.3877 14 13.1667C14 12.9457 13.9122 12.7337 13.7559 12.5774C13.5996 12.4211 13.3877 12.3333 13.1667 12.3333C12.9457 12.3333 12.7337 12.4211 12.5774 12.5774C12.4211 12.7337 12.3333 12.9457 12.3333 13.1667C12.3333 13.3877 12.4211 13.5996 12.5774 13.7559C12.7337 13.9122 12.9457 14 13.1667 14ZM9.83333 9.83333C9.83333 10.0543 9.74554 10.2663 9.58926 10.4226C9.43297 10.5789 9.22101 10.6667 9 10.6667C8.77899 10.6667 8.56702 10.5789 8.41074 10.4226C8.25446 10.2663 8.16667 10.0543 8.16667 9.83333C8.16667 9.61232 8.25446 9.40036 8.41074 9.24408C8.56702 9.0878 8.77899 9 9 9C9.22101 9 9.43297 9.0878 9.58926 9.24408C9.74554 9.40036 9.83333 9.61232 9.83333 9.83333ZM9.83333 13.1667C9.83333 13.3877 9.74554 13.5996 9.58926 13.7559C9.43297 13.9122 9.22101 14 9 14C8.77899 14 8.56702 13.9122 8.41074 13.7559C8.25446 13.5996 8.16667 13.3877 8.16667 13.1667C8.16667 12.9457 8.25446 12.7337 8.41074 12.5774C8.56702 12.4211 8.77899 12.3333 9 12.3333C9.22101 12.3333 9.43297 12.4211 9.58926 12.5774C9.74554 12.7337 9.83333 12.9457 9.83333 13.1667ZM4.83333 10.6667C5.05435 10.6667 5.26631 10.5789 5.42259 10.4226C5.57887 10.2663 5.66667 10.0543 5.66667 9.83333C5.66667 9.61232 5.57887 9.40036 5.42259 9.24408C5.26631 9.0878 5.05435 9 4.83333 9C4.61232 9 4.40036 9.0878 4.24408 9.24408C4.0878 9.40036 4 9.61232 4 9.83333C4 10.0543 4.0878 10.2663 4.24408 10.4226C4.40036 10.5789 4.61232 10.6667 4.83333 10.6667ZM4.83333 14C5.05435 14 5.26631 13.9122 5.42259 13.7559C5.57887 13.5996 5.66667 13.3877 5.66667 13.1667C5.66667 12.9457 5.57887 12.7337 5.42259 12.5774C5.26631 12.4211 5.05435 12.3333 4.83333 12.3333C4.61232 12.3333 4.40036 12.4211 4.24408 12.5774C4.0878 12.7337 4 12.9457 4 13.1667C4 13.3877 4.0878 13.5996 4.24408 13.7559C4.40036 13.9122 4.61232 14 4.83333 14Z"
                                                    fill="currentColor"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M4.83268 0.453125C4.99844 0.453125 5.15741 0.518973 5.27462 0.636183C5.39183 0.753394 5.45768 0.912365 5.45768 1.07812V1.71396C6.00935 1.70312 6.61685 1.70312 7.28518 1.70312H10.7127C11.3818 1.70312 11.9893 1.70312 12.541 1.71396V1.07812C12.541 0.912365 12.6069 0.753394 12.7241 0.636183C12.8413 0.518973 13.0003 0.453125 13.166 0.453125C13.3318 0.453125 13.4907 0.518973 13.608 0.636183C13.7252 0.753394 13.791 0.912365 13.791 1.07812V1.76729C14.0077 1.78396 14.2127 1.80479 14.4068 1.83063C15.3835 1.96229 16.1743 2.23896 16.7985 2.86229C17.4218 3.48646 17.6985 4.27729 17.8302 5.25396C17.9577 6.20396 17.9577 7.41646 17.9577 8.94812V10.7081C17.9577 12.2398 17.9577 13.4531 17.8302 14.4023C17.6985 15.379 17.4218 16.1698 16.7985 16.794C16.1743 17.4173 15.3835 17.694 14.4068 17.8256C13.4568 17.9531 12.2443 17.9531 10.7127 17.9531H7.28602C5.75435 17.9531 4.54102 17.9531 3.59185 17.8256C2.61518 17.694 1.82435 17.4173 1.20018 16.794C0.576849 16.1698 0.300182 15.379 0.168516 14.4023C0.0410156 13.4523 0.0410156 12.2398 0.0410156 10.7081V8.94812C0.0410156 7.41646 0.0410156 6.20312 0.168516 5.25396C0.300182 4.27729 0.576849 3.48646 1.20018 2.86229C1.82435 2.23896 2.61518 1.96229 3.59185 1.83063C3.78602 1.80479 3.99185 1.78396 4.20768 1.76729V1.07812C4.20768 0.912365 4.27353 0.753394 4.39074 0.636183C4.50795 0.518973 4.66692 0.453125 4.83268 0.453125ZM3.75768 3.06979C2.92018 3.18229 2.43685 3.39396 2.08435 3.74646C1.73185 4.09896 1.52018 4.58229 1.40768 5.42062C1.38852 5.56229 1.37268 5.71229 1.35935 5.86979H16.6393C16.626 5.71146 16.6102 5.56229 16.591 5.41979C16.4785 4.58229 16.2668 4.09896 15.9143 3.74646C15.5618 3.39396 15.0785 3.18229 14.2402 3.06979C13.3843 2.95479 12.2552 2.95312 10.666 2.95312H7.33268C5.74352 2.95312 4.61518 2.95479 3.75768 3.06979ZM1.29102 8.99479C1.29102 8.28312 1.29102 7.66396 1.30185 7.11979H16.6968C16.7077 7.66396 16.7077 8.28312 16.7077 8.99479V10.6615C16.7077 12.2506 16.706 13.3798 16.591 14.2365C16.4785 15.074 16.2668 15.5573 15.9143 15.9098C15.5618 16.2623 15.0785 16.474 14.2402 16.5865C13.3843 16.7015 12.2552 16.7031 10.666 16.7031H7.33268C5.74352 16.7031 4.61518 16.7015 3.75768 16.5865C2.92018 16.474 2.43685 16.2623 2.08435 15.9098C1.73185 15.5573 1.52018 15.074 1.40768 14.2356C1.29268 13.3798 1.29102 12.2506 1.29102 10.6615V8.99479Z"
                                                    fill="currentColor"></path>
                                            </svg>
                                            {{ $post->formattedPublishedDate() }}
                                        </div>
                                    </div>
                                    <h2 class="card-blog-heading heading text-22" style="min-height: 60px; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;">
                                        <a href="{{ route('blog.detail', ['slug' => $post->slug]) }}" class="heading text-22">
                                            {{ $post->title }}
                                        </a>
                                    </h2>
                                </div>
                                <a class="card-blog-bottom" href="{{ route('blog.detail', ['slug' => $post->slug]) }}" aria-label="Blog details" style="margin-top: auto;">
                                    <span class="blog-tag subheading subheading-bg text-16 fw-500">{{ $post->categories->first()?->name ?? 'Business' }}</span>
                                    <div class="media">
                                        <img src="{{ $post->featurePhoto }}" alt="{{ $post->photo_alt_text }}" width="1000" height="707" loading="lazy">
                                    </div>
                                    <div class="buttons">
                                        <div class="button button--primary">
                                            Read More
                                            <svg viewbox="0 0 11 10" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M2.16668 0.833333C2.16668 0.61232 2.25448 0.400358 2.41076 0.244078C2.56704 0.0877975 2.779 0 3.00001 0H9.66668C9.88769 0 10.0997 0.0877975 10.2559 0.244078C10.4122 0.400358 10.5 0.61232 10.5 0.833333V7.5C10.5 7.72101 10.4122 7.93297 10.2559 8.08926C10.0997 8.24554 9.88769 8.33333 9.66668 8.33333C9.44567 8.33333 9.2337 8.24554 9.07742 8.08926C8.92114 7.93297 8.83335 7.72101 8.83335 7.5V2.845L1.92251 9.75583C1.76535 9.90763 1.55484 9.99163 1.33635 9.98973C1.11785 9.98783 0.908839 9.90019 0.754332 9.74568C0.599825 9.59118 0.512184 9.38216 0.510285 9.16367C0.508387 8.94517 0.592382 8.73467 0.744181 8.5775L7.65501 1.66667H3.00001C2.779 1.66667 2.56704 1.57887 2.41076 1.42259C2.25448 1.26631 2.16668 1.05435 2.16668 0.833333Z"
                                                    fill="currentColor"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <div class="buttons buttons-discover" data-aos="fade-up" data-aos-delay="100">
                        <a href="/blog" class="button button--primary" aria-label="Discover more blog posts">
                            Discover More
                            <span class="svg-wrapper">
                                <svg class="icon-20" width="20" height="20" viewbox="0 0 20 20"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M13.3365 7.84518L6.16435 15.0173L4.98584 13.8388L12.158 6.66667H5.83652V5H15.0032V14.1667H13.3365V7.84518Z"
                                        fill="CurrentColor"></path>
                                </svg>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer id="contact">
        <!-- Footer Main -->
        <div class="footer-main bg-contain"
            style="background: linear-gradient(135deg, #1C2539 0%, #2a3548 100%); background-image: url({{ asset('assets/img/footer/footer.png') }}); background-blend-mode: overlay; padding: 60px 0 0 0;">
            <div class="footer-top" style="padding-bottom: 30px;">
                <div class="container-fluid">
                    <div class="row footer-custom-row">
                        <div class="col-12 col-md-6">
                            <div class="footer-widget footer-widget-brand" data-aos="fade-up"
                                data-aos-anchor=".footer-top">
                                <a class="footer-logo" href="/" aria-label="229 Consulting Logo"
                                    style="display: inline-block; background: white;  border-radius: 8px;">
                                    <img src="{{ asset('assets/img/consulting_logo.png') }}"
                                        alt="229 Consulting Logo" style="max-width: 150px; height: auto;"
                                        loading="lazy">
                                </a>
                                <p class="text text-16">
                                    229 Consulting delivers actionable strategy and execution support to organizations
                                    navigating
                                    disruption, growth, and transformation. Beyond pitch decks—we carry the work forward
                                    until it
                                    translates into real outcomes.
                                </p>
                                <ul class="social-icons list-unstyled" data-aos="fade-up"
                                    data-aos-anchor=".footer-top">
                                    <li>
                                        <a class="social-link text" href="https://web.facebook.com">
                                            <svg width="10" height="18" viewbox="0 0 10 18"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M6.66634 10.2552H8.74967L9.58301 6.92188H6.66634V5.25521C6.66634 4.39739 6.66634 3.58854 8.33301 3.58854H9.58301V0.788625C9.31159 0.752583 8.28551 0.671875 7.20209 0.671875C4.94001 0.671875 3.33301 2.05259 3.33301 4.5883V6.92188H0.833008V10.2552H3.33301V17.3385H6.66634V10.2552Z"
                                                    fill="currentColor"></path>
                                            </svg>
                                            <span class="visually-hidden">Facebook</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="social-link text" href="https://www.linkedin.com/">
                                            <svg width="17" height="16" viewbox="0 0 17 16"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M3.78357 2.16742C3.78326 2.84601 3.37157 3.45666 2.74262 3.71142C2.11367 3.96619 1.39306 3.81419 0.920587 3.32711C0.448112 2.84001 0.318129 2.11511 0.59192 1.49421C0.86572 0.873305 1.48862 0.480397 2.1669 0.500755C3.0678 0.527797 3.78398 1.26612 3.78357 2.16742ZM3.83357 5.06742H0.500237V15.5007H3.83357V5.06742ZM9.10025 5.06742H5.78357V15.5007H9.06692V10.0257C9.06692 6.97573 13.0419 6.6924 13.0419 10.0257V15.5007H16.3336V8.8924C16.3336 3.75075 10.4503 3.94242 9.06692 6.4674L9.10025 5.06742Z"
                                                    fill="currentColor"></path>
                                            </svg>
                                            <span class="visually-hidden">Linkedin</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="social-link text" href="https://x.com/">
                                            <svg width="18" height="14" viewbox="0 0 18 14"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M17.5104 1.71289C16.8743 1.9943 16.1996 2.17914 15.5088 2.26127C16.2366 1.82561 16.7812 1.14026 17.0411 0.332886C16.3573 0.739186 15.6088 1.02515 14.8282 1.17835C14.1693 0.475394 13.2483 0.0770356 12.2848 0.0781272C10.3605 0.0781272 8.79975 1.63835 8.79975 3.56354C8.79975 3.83666 8.83109 4.10153 8.88967 4.35709C5.99206 4.21121 3.42506 2.82455 1.70565 0.715686C1.39608 1.24757 1.23338 1.85216 1.2342 2.46757C1.2342 3.67667 1.84967 4.74388 2.78458 5.36868C2.23115 5.35118 1.6899 5.20171 1.20599 4.93262C1.20545 4.94726 1.20545 4.9619 1.20545 4.97574C1.20545 6.66484 2.40683 8.07384 4.00166 8.39376C3.70234 8.47476 3.3936 8.51568 3.08352 8.51543C2.85831 8.51543 2.63976 8.49468 2.42733 8.45393C2.8711 9.83826 4.15739 10.8461 5.683 10.8738C4.44845 11.8427 2.92391 12.3683 1.35453 12.3661C1.07677 12.3663 0.799246 12.3499 0.523438 12.3171C2.1167 13.3413 3.97127 13.8849 5.86535 13.8829C12.2763 13.8829 15.7817 8.57243 15.7817 3.9671C15.7817 3.81643 15.778 3.66523 15.7713 3.51615C16.4536 3.02322 17.0425 2.41257 17.5104 1.71289Z"
                                                    fill="currentColor"></path>
                                            </svg>
                                            <span class="visually-hidden">Twitter</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="social-link text" href="https://www.instagram.com/">
                                            <svg width="18" height="18" viewbox="0 0 18 18"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.85724 0.671875C10.7951 0.673425 11.2703 0.678392 11.681 0.690617L11.8427 0.6959C12.0296 0.702542 12.2139 0.710875 12.4362 0.721292C13.3229 0.762267 13.9278 0.902542 14.4591 1.10879C15.0083 1.3206 15.4722 1.60671 15.9354 2.06991C16.3979 2.5331 16.6841 2.99837 16.8966 3.54629C17.1021 4.07685 17.2424 4.68241 17.2841 5.56921C17.294 5.79143 17.302 5.97577 17.3086 6.16263L17.3138 6.32437C17.326 6.73499 17.3316 7.21032 17.3333 8.14818L17.334 8.76952C17.3341 8.84543 17.3341 8.92377 17.3341 9.0046L17.334 9.23968L17.3335 9.8611C17.3319 10.7989 17.327 11.2743 17.3147 11.6848L17.3094 11.8466C17.3028 12.0335 17.2945 12.2178 17.2841 12.44C17.2431 13.3268 17.1021 13.9317 16.8966 14.4629C16.6847 15.0123 16.3979 15.4762 15.9354 15.9393C15.4722 16.4018 15.0062 16.6879 14.4591 16.9004C13.9278 17.106 13.3229 17.2463 12.4362 17.2879C12.2139 17.2978 12.0296 17.3059 11.8427 17.3124L11.681 17.3177C11.2703 17.3299 10.7951 17.3354 9.85724 17.3373L9.23582 17.3379C9.1599 17.3379 9.08157 17.3379 9.00074 17.3379H8.76565L8.14424 17.3373C7.2064 17.3358 6.73109 17.3309 6.32046 17.3186L6.15873 17.3134C5.97185 17.3067 5.78752 17.2983 5.5653 17.2879C4.67849 17.247 4.07433 17.106 3.54239 16.9004C2.99377 16.6887 2.52919 16.4018 2.06599 15.9393C1.6028 15.4762 1.31739 15.0102 1.10489 14.4629C0.898636 13.9317 0.759052 13.3268 0.717386 12.44C0.707486 12.2178 0.69941 12.0335 0.692869 11.8466L0.687627 11.6848C0.675435 11.2743 0.669877 10.7989 0.668077 9.8611L0.667969 8.14818C0.669519 7.21032 0.674477 6.73499 0.686702 6.32437L0.691994 6.16263C0.698635 5.97577 0.706969 5.79143 0.717386 5.56921C0.758352 4.68171 0.898636 4.07754 1.10489 3.54629C1.31669 2.99768 1.6028 2.5331 2.06599 2.06991C2.52919 1.60671 2.99447 1.32129 3.54239 1.10879C4.07364 0.902542 4.6778 0.762958 5.5653 0.721292C5.78752 0.7114 5.97185 0.703325 6.15873 0.696783L6.32046 0.691542C6.73109 0.679342 7.2064 0.673783 8.14424 0.671983L9.85724 0.671875ZM9.00074 4.83796C6.6983 4.83796 4.83405 6.70423 4.83405 9.0046C4.83405 11.307 6.70033 13.1713 9.00074 13.1713C11.3032 13.1713 13.1674 11.305 13.1674 9.0046C13.1674 6.70221 11.3011 4.83796 9.00074 4.83796ZM9.00074 6.50462C10.3815 6.50462 11.5007 7.62352 11.5007 9.0046C11.5007 10.3853 10.3818 11.5046 9.00074 11.5046C7.61999 11.5046 6.50072 10.3858 6.50072 9.0046C6.50072 7.62385 7.61957 6.50462 9.00074 6.50462ZM13.3757 3.58796C12.8013 3.58796 12.3341 4.05455 12.3341 4.62892C12.3341 5.20329 12.8007 5.6706 13.3757 5.6706C13.9501 5.6706 14.4174 5.20402 14.4174 4.62892C14.4174 4.05455 13.9493 3.58724 13.3757 3.58796Z"
                                                    fill="currentColor"></path>
                                            </svg>
                                            <span class="visually-hidden">Instagram</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="footer-widget footer-widget-menu" data-aos="fade-up"
                                data-aos-anchor=".footer-top">
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
                                        <a href="/blog" class="text text-16 link" aria-label="Blogs">
                                            Blogs
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/contact" class="text text-16 link" aria-label="Blogs">
                                            Contact Us
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="footer-widget footer-widget-menu" data-aos="fade-up"
                                data-aos-anchor=".footer-top">
                                <div class="widget-heading heading text-22">Services</div>
                                <ul class="footer-menu list-unstyled">
                                    <li>
                                        <a href="/services" class="text text-16 link"
                                            aria-label="GenAI Adoption for Institutions">
                                            GenAI Adoption for Institutions
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/services" class="text text-16 link"
                                            aria-label="Public Sector & Development Consulting">
                                            Public Sector & Development Consulting
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/services" class="text text-16 link"
                                            aria-label="Strategy & Leadership Advisory">
                                            Strategy & Leadership Advisory
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/services" class="text text-16 link"
                                            aria-label="Training & Capacity Building">
                                            Training & Capacity Building
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="footer-widget footer-widget-menu" data-aos="fade-up"
                                data-aos-anchor=".footer-top">
                                <div class="widget-heading heading text-22">Information</div>
                                <ul class="footer-menu list-unstyled">
                                    <li>
                                        <a href="/about" class="text text-16 link" aria-label="Working Process">
                                            Working Process
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/privacy-policy" class="text text-16 link"
                                            aria-label="Privacy Policy">
                                            Privacy Policy
                                        </a>
                                    </li>
                                    <li>
                                    <a href="/projects" class="text text-16 link"
                                            aria-label="Impact Story">
                                            Impact Story
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
                                        FAQs
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
            <svg xmlns="http://www.w3.org/2000/svg" fill="yellow" viewbox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 15.75 7.5-7.5 7.5 7.5"></path>
            </svg>
        </div>
    </scroll-top>

    <!-- all js -->
    <script src="{{ asset('assets/js/vendor.js') }}" defer=""></script>
    <script src="{{ asset('assets/js/main.js') }}" defer=""></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const teamCards = document.querySelectorAll('.card-team');
            teamCards.forEach(card => {
                const link = card.querySelector('a[href*="/team-details"]');
                if (link) {
                    card.style.cursor = 'pointer';
                    card.addEventListener('click', function(e) {
                        if (!e.target.closest('.social-list')) {
                            window.location.href = link.href;
                        }
                    });
                }
            });
        });
    </script>
</body>
</html>
