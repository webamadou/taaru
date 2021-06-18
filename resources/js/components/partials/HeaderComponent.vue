<template>
    <div class="header-wrapper">
        <div class="container-fluid">
            <button
                type="button"
                class="navbar-toggle"
                data-toggle="collapse"
                data-target=".navbar-collapse"
            >
                <i
                    class="fa fa-bars fa-lg"
                    aria-hidden="true"
                    title="Toggle navigation"
                ></i>
                <span class="sr-only">Toggle navigation</span>
            </button>
            <div class="col-xs-12 col-sm-3 col-md-3" style="padding: 0">
                <a href="/"><Logo /></a>
            </div>
            <div
                class="col-xs-12 col-sm-9 col-md-9 menu-header flex justify-content-end pr-5"
            >
                <div
                    class="col-xs-12 col-sm-4 col-md-5 col-sm-offset-2 col-md-offset-3"
                >
                    <ul class="contact-service">
                        <li></li>
                    </ul>
                </div>
                <div class="hidden-xs col-sm-6 col-md-4 access-wrapper">
                    <ul id="access">
                        <li><a href="/login">se connecter</a></li>
                        <li>
                            <a href="cards"> *** </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="mobile-menu-wrapper access-wrapper">
                <div class="menu-mobile-toggles">
                    <ul>
                        <li>
                            <a href="#"><i class="fa fa-user"></i></a>
                        </li>
                        <li class="active">
                            <a href="#"><i class="fa fa-list"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="menu-mobile-container">
                    <ul id="access-mobile" class="">
                        <li><a href="/login">se connecter</a></li>
                    </ul>
                    <ul id="menu-mobile-categories" class="nav navbar active">
                        <li><a href="">menu link</a></li>
                        <li><a href="">menu link</a></li>
                        <li><a href="">menu link</a></li>
                        <li><a href="">menu link</a></li>
                        <li><a href="">menu link</a></li>
                        <li><a href="">menu link</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- MAIN MENU -->
        <div class="hidden-xs col-sm-12 mainmenu">
            <ul id="menu1" class="nav navbar">
                <li><a href="">menu link</a></li>
                <li><a href="">menu link</a></li>
                <li><a href="">menu link</a></li>
                <li><a href="">menu link</a></li>
                <li><a href="">menu link</a></li>
                <li><a href="">menu link</a></li>
            </ul>
        </div>
    </div>
    <!-- END MAIN MENU  -->
</template>

<script>
import Logo from "./LogoComponent.vue";

export default {
    components: {
        Logo
    }
};
</script>
