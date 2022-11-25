# Stijlvol-Interieur

This project is my first official customer order.

Stijlvol Intieur is an specialist in creating furniture and interiour with wood and steel.

Made by FRESCH Branding.

<div class="Over">
        <h1>
            Over Stijlvol Interieur 
        </h1>
        <hr class="solid">

        <!-- <img src="/input/afbeeldingen/logo/Asset 2.png" alt=""> -->

        <div class="Over-Grid">
            <div class="Text-Grid">
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes
            </div>
            <div class="Text-Grid">
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes
            </div>
        </div>
        <a href="/over.html">Lees meer</a>
    </div>

    <h1>
        Portfolio
    </h1>
    <hr class="solid">

    <div class="Portfolio-Grid">
        <div class="Portfolio-item-img groot1"></div>
        <div class="Portfolio-item">
            test andere test
        </div>
        <div class="Portfolio-item-img"></div>
        <div class="Portfolio-item-img"></div>
        <div class="Portfolio-item">
            test plus twee nog een
        </div>
        <div class="Portfolio-item-img groot2"></div>
    </div>

    <h1>
        Referenties
    </h1>
    <hr class="solid">

    <div class="Referenties">
        <div class="referentie-container">
            <div class="referentie-wrapper">
                <div class="card">
                    <div class="card-thumb">
                        <img src="/input/afbeeldingen/shutterstock_1814712359.jpg" class="client-img" alt="">
                        <span class="client-name">client one</span>
                    </div>
                    <div class="card-body">
                        <p class="review">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ea, nam. Fugiat, ut provident. Nulla quibusdam labore ea est consequatur sequi fuga iusto laudantium, earum doloremque?</p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-thumb">
                        <img src="/input/afbeeldingen/shutterstock_1814712359.jpg" class="client-img" alt="">
                        <span class="client-name">client two</span>
                    </div>
                    <div class="card-body">
                        <p class="review">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ea, nam. Fugiat, ut provident. Nulla quibusdam labore ea est consequatur sequi fuga iusto laudantium, earum doloremque?</p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-thumb">
                        <img src="/input/afbeeldingen/shutterstock_1814712359.jpg" class="client-img" alt="">
                        <span class="client-name">client three</span>
                    </div>
                    <div class="card-body">
                        <p class="review">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ea, nam. Fugiat, ut provident. Nulla quibusdam labore ea est consequatur sequi fuga iusto laudantium, earum doloremque?</p>
                    </div>
                </div>
            </div>
            <div class="indicators">
                <button class="active"></button>
                <button></button>
                <button></button>
            </div>
        </div>
    </div>

    .Over {
    background-image: url("/input/afbeeldingen/logo/Asset\ 2.png");
    background-repeat: no-repeat;
    background-position: center;
    background-size: 25%;
    background-position: 50% 80px;

}

.Over a {
font-family: OpenSansM;
font-size: 1.5rem;
text-decoration: none;
color: #2c3b42;

    display: block;
    text-align: center

}

hr.solid {
border-top: 3px solid #2c3b42;
width: 50px;
margin: 20px auto 20px auto;
}

.Over-Grid {
display: grid;
column-gap: 50px;
grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
padding: 10px;
width: 60%;
margin: 30px auto 0 auto;
}

.Text-Grid {
padding: 20px;
text-align: left;
font-family: OpenSansR;
font-size: 1rem;
color: #2c3b42;
}

@media (max-width: 1100px) {
.Over-Grid {
margin: 0 auto 0 auto;
width: 70%;
justify-content: center;
}

    .Text-Grid {
        padding: 0;
        margin-bottom: 20px;
    }

}

/_ ------------------------------------------------- _/
.Portfolio-Grid {
display: grid;
grid-template-columns: 350px 350px 350px 350px;
grid-template-rows: 350px 350px 350px;
gap: 20px 20px;
padding: 10px;
margin: 0 auto 0 auto;
justify-content: center;
}

.Portfolio-Grid>div {
color: #fff;
text-align: center;
padding: 20px 0;
font-size: 30px;
}

.Portfolio-item-img {
background-image: url(/input/afbeeldingen/shutterstock_1814712359.jpg);
background-size: auto 100%;
background-repeat: no-repeat;
background-position: center;

}

.Portfolio-item-img:hover {
background-size: auto 103%;
transition: 0.3s;
}

.Portfolio-item {
background-color: #077132;
opacity: 0.2;
text-align: center;
padding: 20px 0;
font-size: 30px;
}

.groot1 {
grid-column-start: 1;
grid-column-end: 3;
grid-row-start: 1;
grid-row-end: 3;
}

.groot2 {
grid-column-start: 3;
grid-column-end: 5;
grid-row-start: 2;
grid-row-end: 4;
}

@media (max-width: 1500px) {
.Portfolio-Grid {
grid-template-columns: 50vw;
grid-template-rows: repeat(6, 50vw);
}

    .groot1 {
        grid-column-start: 1;
        grid-column-end: 1;
        grid-row-start: 1;
        grid-row-end: 1;
    }

    .groot2 {
        grid-column-start: 1;
        grid-column-end: 1;
        grid-row-start: 6;
        grid-row-end: 6;
    }

}

@media (max-width: 900px) {
.Portfolio-Grid {
grid-template-columns: 65vw;
grid-template-rows: repeat(6, 65vw);
}
}

@media (max-width: 500px) {
.Portfolio-Grid {
grid-template-columns: 80vw;
grid-template-rows: repeat(6, 80vw);
}
}
