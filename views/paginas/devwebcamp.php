<main class="devwebcamp">
    <h2 class="devwebcamp__heading"><?php echo $titulo; ?></h2>
    <p class="devwebcamp__descripcion">Conoce la conferencia mas importante de Latinoamerica</p>

    <div class="devwebcamp__grid">
        <div <?php aos_animacion(); ?> class="devwebcamp__imagen">
            <picture>
                <source srcset="build/img/sobre_devwebcamp.avif" type="image/avif">
                <source srcset="build/img/sobre_devwebcamp.webp" type="image/webp">
                <img loading="lazy" width="200" height="300" src="build/img/sobre_devwebcamp.jpg"alt="Imagen DevWebCamp">
            </picture>
        </div>

        <div class="devwebcamp__contenido">
            <p <?php aos_animacion(); ?> class="devwebcamp__texto">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate laudantium accusamus vel necessitatibus
                nostrum minus tempore! Nisi impedit suscipit vitae enim corrupti delectus, voluptas iste cum molestiae commodi
                reprehenderit dolorem?
            </p>
            <p <?php aos_animacion(); ?> class="devwebcamp__texto">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate laudantium accusamus vel necessitatibus
                nostrum minus tempore! Nisi impedit suscipit vitae enim corrupti delectus, voluptas iste cum molestiae commodi
                reprehenderit dolorem?
            </p>
        </div>
    </div>
</main>