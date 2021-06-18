<template>
    <div class="bilboard">
        <h2 class="hidden-xs">
            Votre rendez-vous beauté en ligne<br />Institut de beauté, salon de
            coiffure et Spa
        </h2>
        <div class="home_form">
            <form
                class="form-inline formulaire bilboardform"
                action="/instituts/search"
                method="get"
            >
                <div class="row m-0">
                    <div class="col-xs-12 col-sm-9 col-md-11 form-fields row">
                        <div class="col-xs-12 col-sm-6 form-field sel">
                            <select name="typesoins" class="fancyselect">
                                <option value="">Choisissez un soin</option>
                            </select>
                        </div>
                        <div class="col-xs-12 col-sm-6 form-field sel">
                            <select
                                name="adresse"
                                id="adresse"
                                class="adresse fancyselect"
                            >
                                <option value=""
                                    >Choisissez une localité</option
                                >
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-3 col-md-1 form-button">
                        <button
                            type="submit"
                            name="searchinstituts"
                            class="btn btn-primary btn-elma"
                        ></button>
                    </div>
                </div>
            </form>
        </div>
        <div class="scroll-down hidden-xs" id="scroll-down">
            <a href="#"><img src="/images/down-arrow-md.png" alt=""/></a>
        </div>
    </div>
</template>
