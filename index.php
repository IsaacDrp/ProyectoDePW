<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="media/favicon.png" type="image/x-icon">
    <title>Tortas el rinconcito</title>
</head>
<body>
<style>
    .gallery {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        grid-template-rows: repeat(2, 30rem);
        gap: 1.5rem;
        margin-bottom: 3rem;
    }
    .gallery img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .gallery-img-3 {
        grid-column: 2/4;
        grid-row: 1/3;
    }

    .specials {
        display: flex;
        flex-direction: column;
        gap: 2rem;
        margin-bottom: 3rem;
        }
</style>
    <header>
        <div class="container-hero">
            <div class="container hero">
                <div class="customer-support">
                    <i class="fa-solid fa-phone"></i>
                    <div class="content-customer-support">
                        <span class="text">Comunícate con nosotros</span>
                        <span ckass="number">55 81 39 96 80</span>
                    </div>
                </div>
                <div class="container-logo">
                    <i class="fa-solid fa-burger"></i>
                    <h1 class="logo">
                        <a href="/">Tortas el Rinconcito</a>
                    </h1>
                </div>
                <div class="container-user">
                    <i class="fa-solid fa-user"></i>
                    <i class="fa-solid fa-money-bill"></i>
                    <div class="content-ticket">
                        <span class="text">Cupones</span>
                        <span class="number">(0)</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-navbar">
            <nav class="navbar conainer">
                <i class="fa-solid fa-bars"></i>
                <ul class="menu">
                    <li><a href="#">Tortas</a></li>
                    <li><a href="#">Desayunos</a></li>
                    <li><a href="#">Bebidas</a></li>
                    <li><a href="#">Nosotros</a></li>
                    <li><a href="#">Ligas de interés</a></li>
                </ul>

                <form class="search-form">
                    <input type="text" placeholder="Buscar...">
                    <button class="btn-search">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </form>
            </nav>
        </div>
    </header>

    <section class="banner">
        <div class="content-banner">
            <p>Las mejores tortas de Texcoco</p>
            <h2>Priorizamos el sabor <br>Con los mejores ingredientes</h2>
        </div>
    </section>


    <main class="main-content">
        <section class="containter container-features">
            <div class="card-feature money-feature">
                <i class="fa-solid fa-coins"></i>
                <div class="feature-content">
                    <span>Aceptamos efectivo</span>
                    <p>Denominaciones menores a $500</p>
                </div>
            </div>
            <div class="card-feature transfer-feature">
                <i class="fa-solid fa-money-bill-transfer"></i>
                <div class="feature-content">
                    <span>Aceptamos transferencia</span>
                    <p>Durante segundo horario</p>
                </div>
            </div>
            <div class="card-feature opening-hours">
                <i class="fa-solid fa-clock"></i>
                <div class="feature-content">
                    <span>Horarios de apertura</span>
                    <p>De lunes a sábado <br>De 10:00Am a 3:00Pm <br>Y de 6:00Pm a 9:00Pm</p>
                </div>
            </div>
            <div class="card-feature opening-hours">
                <i class="fa-solid fa-plug"></i>
                <div class="feature-content">
                    <span>Carga de celular</span>
                    <p>Contamos con contactos eléctricos<br>para que cargues tu celular</p>
                </div>
            </div>
        </section>
        <section class="container top-categories">
            <h1 class="heading-1">Categorías</h1>
            <div class="container-categories">

                <div class="card-category category-tortas">
                    <p>Tortas</p>
                    <span>Ver más</span>
                </div>

                <div class="card-category category-desayunos">
                    <p>Desayunos</p>
                    <span>Ver más</span>
                </div>

                <div class="card-category category-bebidas">
                    <p>Bebidas</p>
                    <span>Ver más</span>
                </div>

            </div>
        </section>
        
        <section class="container top-products">
            <h1 class="heading-1">Productos</h1>

            <div class="container-options">
                <span class="active">Destacados</span>
                <span>Más recientes</span>
                <span>Mejor valorados</span>
            </div>

            <div class="container-products">

                <div class="card-product">
                    <div class="container-img">
                        <img src="media/Products/TortaMilanesa.jpg" alt="Torta de milanesa">
                        <span></span>
                        <div class="button-group">
                            <span><i class="fa-regular fa-eye"></i></span>
                            <span><i class="fa-regular fa-heart"></i></span>
                            <span><i class="fa-solid fa-code-compare"></i></span>
                        </div>
                    </div>
                    <div class="content-card-product">
                        <div class="stars">
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        </div>
                        <h3>Torta de milanesa</h3>
                        <p class="price">$58.00</p>
                    </div>
                </div>

                <div class="card-product">
                    <div class="container-img">
                        <img src="media/Products/TortaMilanesa.jpg" alt="Torta de milanesa">
                        <span></span>
                        <div class="button-group">
                            <span><i class="fa-regular fa-eye"></i></span>
                            <span><i class="fa-regular fa-heart"></i></span>
                            <span><i class="fa-solid fa-code-compare"></i></span>
                        </div>
                    </div>
                    <div class="content-card-product">
                        <div class="stars">
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        </div>
                        <h3>Torta de milanesa</h3>
                        <p class="price">$58.00</p>
                    </div>
                </div>

                <div class="card-product">
                    <div class="container-img">
                        <img src="media/Products/TortaMilanesa.jpg" alt="Torta de milanesa">
                        <span></span>
                        <div class="button-group">
                            <span><i class="fa-regular fa-eye"></i></span>
                            <span><i class="fa-regular fa-heart"></i></span>
                            <span><i class="fa-solid fa-code-compare"></i></span>
                        </div>
                    </div>
                    <div class="content-card-product">
                        <div class="stars">
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        </div>
                        <h3>Torta de milanesa</h3>
                        <p class="price">$58.00</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="gallery">
				<img
					src="media/gallery/3.jpg"
					alt="Gallery Img1"
					class="gallery-img-1"
				/><img
					src="media/gallery/2.jpg"
					alt="Gallery Img2"
					class="gallery-img-2"
				/><img
					src="media/gallery/1.jpg"
					alt="Gallery Img3"
					class="gallery-img-3"
				/><img
					src="media/gallery/4.jpg"
					alt="Gallery Img4"
					class="gallery-img-4"
				/><img
					src="media/gallery/5.jpg"
					alt="Gallery Img5"
					class="gallery-img-5"
				/>
			</section>

            <section class="container specials">
                <h1 class="heading-1">Especiales</h1>
                <div class="container-products">
                <div class="container-products">

                <div class="card-product">
                    <div class="container-img">
                        <img src="media/Products/TortaMilanesa.jpg" alt="Torta de milanesa">
                        <span></span>
                        <div class="button-group">
                            <span><i class="fa-regular fa-eye"></i></span>
                            <span><i class="fa-regular fa-heart"></i></span>
                            <span><i class="fa-solid fa-code-compare"></i></span>
                        </div>
                    </div>
                    <div class="content-card-product">
                        <div class="stars">
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        </div>
                        <h3>Torta de milanesa</h3>
                        <p class="price">$58.00</p>
                    </div>
                </div>

                <div class="card-product">
                    <div class="container-img">
                        <img src="media/Products/TortaMilanesa.jpg" alt="Torta de milanesa">
                        <span></span>
                        <div class="button-group">
                            <span><i class="fa-regular fa-eye"></i></span>
                            <span><i class="fa-regular fa-heart"></i></span>
                            <span><i class="fa-solid fa-code-compare"></i></span>
                        </div>
                    </div>
                    <div class="content-card-product">
                        <div class="stars">
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        </div>
                        <h3>Torta de milanesa</h3>
                        <p class="price">$58.00</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="container blogs">
            <h1 class="heading-1">Ligas de interés</h1>
            <div class="container-blogs">
                <div class="card-blog">
                    <div class="container-img">
                        <img src="media/blogs/github.jpg" alt="Repositorio de github">
                        <div class="button-group-blog">
                            <span>
                                <a href="https://github.com/IsaacDrp" target="_blank"><i class="fa-solid fa-magnifying-glass"></i></a>
                            </span>
                            <span>
                                <a href="https://github.com/IsaacDrp/ProyectoDePW" target="_blank"><i class="fa-solid fa-link"></i></a>
                            </span>
                        </div>
                    </div>
                    <div class="content-blog">
                        <h3><a href="https://github.com/IsaacDrp/ProyectoDePW" target="_blank">Github</a></h3>
                        <span>repositorio oficial de la página</span>
                        <p> <br><br><br><br>Checa cómo se hizo la página y comenta sugerencias si quieres ;)</p>
                    </div>
                    <div class="btn-read-more"><a href="https://github.com/IsaacDrp/ProyectoDePW/blob/main/README.md" target="_blank"><p>Leer más</p></a></div>
                    
                </div>
                
                <div class="card-blog">
                    <div class="container-img">
                        <img src="media/blogs/googleMaps.png" alt="¡Aquí estamos!">
                        <div class="button-group-blog">
                            <span>
                                <a href="https://maps.app.goo.gl/Susb46QnGJvaRspj8"  target="_blank"><i class="fa-solid fa-magnifying-glass"></i></a>
                            </span>
                            <span>
                                <a href="https://maps.app.goo.gl/Susb46QnGJvaRspj8"  target="_blank"><i class="fa-solid fa-link"></i></a>
                            </span>
                        </div>
                    </div>
                    <div class="content-blog">
                        <h3><a href="https://maps.app.goo.gl/Susb46QnGJvaRspj8"  target="_blank">¡Aquí estamos!</a></h3>
                        <span>Dirección del local</span>
                        <p><br><br>Visitanos en Cedros #100 <br>Salitrería, Texcoco de Mora</p>
                    </div>
                    <div class="btn-read-more">
                        <a href="https://maps.app.goo.gl/Susb46QnGJvaRspj8"  target="_blank"><p>¡Vamos!</p></a>
                    </div>
                </div>

                <div class="card-blog">
                    <div class="container-img">
                        <img src="media/blogs/fesAragon.jpg" alt="Fes aragón">
                        <div class="button-group-blog">
                            <span>
                                <a href="https://www.facebook.com/FESAragonUNAM/" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                            </span>
                            <span>
                                <a href="https://maps.app.goo.gl/qGmkVCgLJgF3qQ9Y6" target="_blank"><i class="fa-solid fa-map-pin"></i></a>
                            </span>
                        </div>
                    </div>
                    <div class="content-blog">
                        <h3><a href="https://aragon.unam.mx/fes-aragon/#!/inicio" target="_blank">UNAM: Facultad de estudios superiores <br> "Aragón"</a></h3>
                        <span>Proyecto de programación web</span>
                        <p>Proyecto con aplicación práctica instruido por el profesor Aaron Velasco agustín para programación web de Ingeniería en computación de la fes Aragón</p>
                    </div>
                    <div class="btn-read-more">
                        <a href="https://aragon.unam.mx/fes-aragon/#!/oferta-academica/licenciaturas/computacion" target="_blank"><p>Leer más</p></a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="footer">
			<div class="container container-footer">
				<div class="menu-footer">
					<div class="contact-info">
						<p class="title-footer">Información de Contacto</p>
						<ul>
							<li>
								Dirección: Cedros #100, Salitrería Texcoco de Mora, Estado de México, México
								CP:56150
							</li>
							<li>Teléfono: 55 81 39 96 80</li>
							<li>EmaiL: por definir</li>
						</ul>
						<div class="social-icons">
							<span class="facebook">
								<i class="fa-brands fa-facebook-f"></i>
							</span>
							<span class="twitter">
								<i class="fa-brands fa-twitter"></i>
							</span>
							<span class="youtube">
								<i class="fa-brands fa-youtube"></i>
							</span>
							<span class="pinterest">
								<i class="fa-brands fa-pinterest-p"></i>
							</span>
							<span class="instagram">
								<i class="fa-brands fa-instagram"></i>
							</span>
						</div>
					</div>

					<div class="information">
						<p class="title-footer">Información</p>
						<ul>
							<li><a href="#">Acerca de Nosotros</a></li>
							<li><a href="#">CLABE INTERBANCARIA: </a></li>
							<li><a href="#">Politicas de Privacidad</a></li>
							<li><a href="#">Contactános</a></li>
						</ul>
					</div>

					<div class="my-account">
						<p class="title-footer">Mi cuenta</p>

						<ul>
							<li><a href="#">Mi cuenta</a></li>
							<li><a href="#">Historial de cupones</a></li>
							<li><a href="#">Boletín</a></li>
						</ul>
					</div>

					<div class="newsletter">
						<p class="title-footer">Boletín informativo</p>

						<div class="content">
							<p>
								Suscríbete a nuestros boletines ahora y mantente al
								día con nuevas colecciones y ofertas exclusivas.
							</p>
							<input type="email" placeholder="Ingresa el correo aquí...">
							<button>Suscríbete</button>
						</div>
					</div>
				</div>

				<div class="copyright">
					<p>
						Desarrollado por Isaac Abraham De Ramón Pérez &copy; 2023
					</p>
				</div>
			</div>
		</footer>

    <script src="https://kit.fontawesome.com/81581fb069.js"
    crossorigin="anonymous"></script>
</body>
</html>