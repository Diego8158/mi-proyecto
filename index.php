<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingebrit S.A.S. - Tu voz importa</title>
    <link rel="stylesheet" href="css/style.css">
    
    <!-- 🔤 Fuente Lora (según tu código) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="container">
            <h1>✨ Ingebrit S.A.S.</h1>
            <p>Innovación en ingeniería desde Bogotá</p>
        </div>
    </header>

    <main class="container">
        <!-- ✅ PRIMERO: Mensaje de bienvenida + Formulario -->
        <section class="card hero">
            <div class="hero-content">
                <h2>👋 ¡Hola! ¿En qué podemos ayudarte?</h2>
                <p>Estamos aquí para escucharte. Envíanos tu solicitud, duda o reclamo y nos pondremos en contacto contigo lo antes posible.</p>
            </div>
        </section>

        <section class="card form-section animate">
            <h2>📬 Cuéntanos lo que necesitas</h2>
            <form id="contactForm" action="php/procesar.php" method="POST">
                <div class="form-group">
                    <input type="text" id="nombre" name="nombre" required placeholder=" ">
                    <label for="nombre">Nombre completo *</label>
                </div>

                <div class="form-group">
                    <input type="email" id="correo" name="correo" required placeholder=" ">
                    <label for="correo">Correo electrónico *</label>
                </div>

                <div class="form-group">
                    <textarea id="reclamo" name="reclamo" rows="4" required placeholder=" "></textarea>
                    <label for="reclamo">Solicitud o reclamo *</label>
                </div>

                <button type="submit" class="btn-submit">Enviar mensaje 💬</button>
            </form>
        </section>

        <!-- ✅ DESPUÉS: Información de la empresa -->
        <section class="card about animate">
            <h2>🏢 Sobre Ingebrit S.A.S.</h2>
            <p>
                Fundada en 2015 en Bogotá, <strong>Ingebrit S.A.S.</strong> es una empresa líder en soluciones integrales de ingeniería civil, eléctrica y de sistemas. 
                Nuestro compromiso es entregar proyectos de alta calidad, sostenibles y adaptados a las necesidades de cada cliente.
            </p>
            <div class="info-grid">
                <div class="info-item">
                    <span class="icon">📍</span>
                    <div>
                        <strong>Dirección</strong><br>
                        Calle 123 #45-67, Bogotá, Colombia
                    </div>
                </div>
                <div class="info-item">
                    <span class="icon">📞</span>
                    <div>
                        <strong>Teléfono</strong><br>
                        +57 1 234 5678
                    </div>
                </div>
                <div class="info-item">
                    <span class="icon">✉️</span>
                    <div>
                        <strong>Email</strong><br>
                        contacto@ingebrit.com
                    </div>
                </div>
                <div class="info-item">
                    <span class="icon">🕒</span>
                    <div>
                        <strong>Horario</strong><br>
                        Lunes a Viernes, 8:00 a.m. - 6:00 p.m.
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div class="container">
            <p>&copy; 2025 Ingebrit S.A.S. — Transformando ideas en soluciones reales.</p>
        </div>
    </footer>

    <script src="js/scripts.js"></script>
</body>
</html>