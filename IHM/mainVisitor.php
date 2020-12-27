<?php include 'struct/entete.html';
include 'struct/menuVisitor.html'; ?>

<!-- Hero Section Begin -->
<section class="hero spad set-bg" data-setbg="../img/hero-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="hero__text">
                    <div class="hero__text__title">
                        <span>trouvez la voiture de vos rêves</span>
                        <h2>Porsche Cayenne S</h2>
                    </div>
                    <div class="hero__text__price">
                        <div class="car-model">Modèle 2019</div>
                        <h2>399€<span>/Mois</span>
                            <div class="arnaque">(Pendant 360 mois)</div>
                        </h2>

                    </div>
                    <a href="#" class="primary-btn"><img src="../img/wheel.png" alt=""> La tester</a>
                    <a href="#" class="primary-btn more-btn">Lire plus</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->

<!-- Car Section Begin -->
<section class="car spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <span>Nos voitures</span>
                    <h2>Meilleurs offres de véhicule</h2>
                </div>
                <ul class="filter__controls">
                    <li class="active" data-filter="*">Boite manuel</li>
                    <!-- TODO : changer l'option de recherche en boite manuel / auto-->
                    <li data-filter=".sale">Boite auto</li>
                </ul>
            </div>
        </div>
        <div class="row car-filter">
            <div class="col-lg-3 col-md-4 col-sm-6 mix">
                <div class="car__item">
                    <div class="car__item__pic__slider owl-carousel">
                        <img src="../img/cars/car-1.jpg" alt="">
                        <img src="../img/cars/car-8.jpg" alt="">
                        <img src="../img/cars/car-6.jpg" alt="">
                        <img src="../img/cars/car-3.jpg" alt="">
                    </div>
                    <div class="car__item__text">
                        <div class="car__item__text__inner">
                            <div class="label-date">2016</div>
                            <h5><a href="#">Porsche cayenne turbo s</a></h5>
                            <ul>
                                <li><span>35,000</span> km</li>
                                <li>Auto</li>
                                <li><span>700</span> hp</li>
                            </ul>
                        </div>
                        <div class="car__item__price">
                            <span class="car-option">A louer</span>
                            <h6>$218<span>/Mois</span></h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mix sale">
                <div class="car__item">
                    <div class="car__item__pic__slider owl-carousel">
                        <img src="../img/cars/car-2.jpg" alt="">
                        <img src="../img/cars/car-8.jpg" alt="">
                        <img src="../img/cars/car-6.jpg" alt="">
                        <img src="../img/cars/car-4.jpg" alt="">
                    </div>
                    <div class="car__item__text">
                        <div class="car__item__text__inner">
                            <div class="label-date">2020</div>
                            <h5><a href="#">Toyota camry asv50l-jeteku</a></h5>
                            <ul>
                                <li><span>35,000</span> km</li>
                                <li>Auto</li>
                                <li><span>700</span> hp</li>
                            </ul>
                        </div>
                        <div class="car__item__price">
                            <span class="car-option sale">A Vendre</span>
                            <h6>$73,900</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mix">
                <div class="car__item">
                    <div class="car__item__pic__slider owl-carousel">
                        <img src="../img/cars/car-3.jpg" alt="">
                        <img src="../img/cars/car-8.jpg" alt="">
                        <img src="../img/cars/car-6.jpg" alt="">
                        <img src="../img/cars/car-5.jpg" alt="">
                    </div>
                    <div class="car__item__text">
                        <div class="car__item__text__inner">
                            <div class="label-date">2017</div>
                            <h5><a href="#">Bmw s1000rr 2019 m</a></h5>
                            <ul>
                                <li><span>35,000</span> km</li>
                                <li>Auto</li>
                                <li><span>700</span> hp</li>
                            </ul>
                        </div>
                        <div class="car__item__price">
                            <span class="car-option">A louer</span>
                            <h6>$299<span>/Mois</span></h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mix sale">
                <div class="car__item">
                    <div class="car__item__pic__slider owl-carousel">
                        <img src="../img/cars/car-4.jpg" alt="">
                        <img src="../img/cars/car-8.jpg" alt="">
                        <img src="../img/cars/car-2.jpg" alt="">
                        <img src="../img/cars/car-1.jpg" alt="">
                    </div>
                    <div class="car__item__text">
                        <div class="car__item__text__inner">
                            <div class="label-date">2019</div>
                            <h5><a href="#">Lamborghini huracan evo</a></h5>
                            <ul>
                                <li><span>35,000</span> km</li>
                                <li>Auto</li>
                                <li><span>700</span> hp</li>
                            </ul>
                        </div>
                        <div class="car__item__price">
                            <span class="car-option sale">A Vendre</span>
                            <h6>$120,000</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mix">
                <div class="car__item">
                    <div class="car__item__pic__slider owl-carousel">
                        <img src="../img/cars/car-5.jpg" alt="">
                        <img src="../img/cars/car-8.jpg" alt="">
                        <img src="../img/cars/car-7.jpg" alt="">
                        <img src="../img/cars/car-2.jpg" alt="">
                    </div>
                    <div class="car__item__text">
                        <div class="car__item__text__inner">
                            <div class="label-date">2018</div>
                            <h5><a href="#">Audi q8 2020</a></h5>
                            <ul>
                                <li><span>35,000</span> km</li>
                                <li>Auto</li>
                                <li><span>700</span> hp</li>
                            </ul>
                        </div>
                        <div class="car__item__price">
                            <span class="car-option">A louer</span>
                            <h6>$319<span>/Mois</span></h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mix sale">
                <div class="car__item">
                    <div class="car__item__pic__slider owl-carousel">
                        <img src="../img/cars/car-6.jpg" alt="">
                        <img src="../img/cars/car-8.jpg" alt="">
                        <img src="../img/cars/car-3.jpg" alt="">
                        <img src="../img/cars/car-1.jpg" alt="">
                    </div>
                    <div class="car__item__text">
                        <div class="car__item__text__inner">
                            <div class="label-date">2016</div>
                            <h5><a href="#">Mustang shelby gt500</a></h5>
                            <ul>
                                <li><span>35,000</span> km</li>
                                <li>Auto</li>
                                <li><span>700</span> hp</li>
                            </ul>
                        </div>
                        <div class="car__item__price">
                            <span class="car-option sale">A Vendre</span>
                            <h6>$730,900</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mix">
                <div class="car__item">
                    <div class="car__item__pic__slider owl-carousel">
                        <img src="../img/cars/car-7.jpg" alt="">
                        <img src="../img/cars/car-2.jpg" alt="">
                        <img src="../img/cars/car-4.jpg" alt="">
                        <img src="../img/cars/car-1.jpg" alt="">
                    </div>
                    <div class="car__item__text">
                        <div class="car__item__text__inner">
                            <div class="label-date">2020</div>
                            <h5><a href="#">Lamborghini aventador A90</a></h5>
                            <ul>
                                <li><span>35,000</span> km</li>
                                <li>Auto</li>
                                <li><span>700</span> hp</li>
                            </ul>
                        </div>
                        <div class="car__item__price">
                            <span class="car-option">A louer</span>
                            <h6>$422<span>/Mois</span></h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mix">
                <div class="car__item">
                    <div class="car__item__pic__slider owl-carousel">
                        <img src="../img/cars/car-8.jpg" alt="">
                        <img src="../img/cars/car-3.jpg" alt="">
                        <img src="../img/cars/car-5.jpg" alt="">
                        <img src="../img/cars/car-2.jpg" alt="">
                    </div>
                    <div class="car__item__text">
                        <div class="car__item__text__inner">
                            <div class="label-date">2017</div>
                            <h5><a href="#">Porsche cayenne turbo s</a></h5>
                            <ul>
                                <li><span>35,000</span> km</li>
                                <li>Auto</li>
                                <li><span>700</span> hp</li>
                            </ul>
                        </div>
                        <div class="car__item__price">
                            <span class="car-option">A louer</span>
                            <h6>$322<span>/Mois</span></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</body>

</html>

<script>
    document.getElementById('accueil').className = "active";
    document.getElementById('annonce').className = "";
    document.getElementById('apropos').className = "";
    document.getElementById('contact').className = "";
</script>