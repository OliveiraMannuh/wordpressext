<?php
// Footer template for the WordPress theme

?>

<footer>
    <div class="footer-widgets">
    <div class="footer-column about">
        <div class="footer-logo">
            <img src="<?php echo get_theme_file_uri('assets/images/logo-exitus.png'); ?>" alt="Exitus Educacional">
        </div>
        <p class="footer-description">
            Transformando aprendizado em diversão e proporcionando conhecimento com a revisão espaçada.
        </p>
        <div class="social-icons">
            <a href="#" class="social-link facebook">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="social-link twitter">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="social-link whatsapp">
                <i class="fab fa-whatsapp"></i>
            </a>
            <a href="#" class="social-link linkedin">
                <i class="fab fa-linkedin-in"></i>
            </a>
            <a href="#" class="social-link youtube">
                <i class="fab fa-youtube"></i>
            </a>
        </div>
    </div>
        <div class="footer-column">
            <h3>Aprendizado</h3>
            <ul>
                <li><a href="#aprendizado">Materiais</a></li>
                <li><a href="#aprendizado">Flashcards</a></li>
            </ul>
        </div>
        <div class="footer-column">
            <h3>Jogos</h3>
            <ul>
                <li><a href="#jogos">Simulados</a></li>
                <li><a href="#jogos">Quizzes</a></li>
            </ul>
        </div>

        <div class="footer-column">
            <h3>Recursos</h3>
            <ul>
                <li><a href="<?php echo get_page_link(get_page_by_path('politica-de-privacidade')->ID); ?>">Política de privacidade</a></li>
                <li><a href="<?php echo get_page_link(get_page_by_path('pagina-de-contato')->ID); ?>">Fale Conosco</a></li>
            </ul>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="footer-bottom-container">
            <div class="footer-copyright">
                <p>&copy; <?php echo date('Y'); ?> Exitus Educacional. Todos os direitos reservados.</p>
            </div>
            <div class="footer-links">
                <a href="<?php echo get_page_link(get_page_by_path('politica-de-privacidade')->ID); ?>">Política de Privacidade</a>
                <a href="#">Termos de Uso</a>
            </div>
        </div>
    </div>

</footer>

<button id="backToTop" class="back-to-top" aria-label="Voltar ao topo">
    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M12 5V19M12 5L5 12M12 5L19 12" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>
</button>
<?php wp_footer(); ?>

<style>
    footer {
        background-color: #363564;
        color: #FCFCFC;
        padding: 20px 0;
    }
    .footer-widgets {
        display: flex;
        justify-content: space-around;
        flex-wrap: wrap;
        padding: 50px;
    }
    .footer-column {
        flex: 1;
        min-width: 200px;
        margin: 10px;
    }
    .footer-column h3 {
        color: var(--white);
    }
    .footer-column ul {
        list-style: none;
        padding: 0;
        line-height: 2;
    }
    .footer-column ul li a {
        color: #FCFCFC;
        text-decoration: none !important;
    }
    .footer-column ul li a:hover {
        text-decoration: underline;
        color: #7D65E1;
    }
    .footer-bottom {
        text-align: center;
        /*margin-top: 20px;*/
        padding: 24px 0;
    }

.footer-bottom-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 24px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.footer-copyright p {
    color: rgba(255, 255, 255, 0.7);
    margin: 0;
    font-size: 0.875rem;
}

.footer-links {
    display: flex;
    gap: 24px;
}

.footer-links a {
    color: rgba(255, 255, 255, 0.7);
    text-decoration: none;
    font-size: 0.875rem;
    transition: color 0.3s ease;
}

.footer-links a:hover {
    color: #7D65E1;
}

/* Responsividade */
@media (max-width: 768px) {
    .footer-bottom-container {
        flex-direction: column;
        gap: 16px;
        text-align: center;
    }

    .footer-links {
        justify-content: center;
    }
}

    /* footer primeira coluna com logo */
.footer-column.about {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    gap: 24px;
    padding: 0px 10px 0px 30px;
}

.footer-logo {
    max-width: 200px;
}

.footer-logo img {
    width: 100%;
    height: auto;
}

.footer-description {
    color: rgba(255, 255, 255, 0.9);
    font-size: 1rem;
    line-height: 1.6;
    margin: 0;
    text-align: left;
    max-width: 300px;
}

.social-icons {
    /*display: flex; ocultando por enquanto*/
    display: none;
    gap: 16px;
    margin-top: 8px;
}

.social-link {
    width: 36px;
    height: 36px;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.1);
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    transition: all 0.3s ease;
    text-decoration: none;
}

.social-link:hover {
    background: #6B4EE6;
    transform: translateY(-2px);
}

/* Responsividade */
@media (max-width: 768px) {
    .footer-logo {
        max-width: 160px;
    }

    .social-icons {
        gap: 12px;
    }

    .social-link {
        width: 32px;
        height: 32px;
    }
}

    /*Responsividade*/
    @media (max-width: 768px) {
        .footer-widgets {
            flex-direction: column;
            align-items: center;
        }
        .footer-column {
            text-align: center;
        }
        .footer-bottom p{
            font-size: 14px;
        }
    }

    @media (max-width: 480px) {
        .footer-description{
            text-align: center;
        }
    }
</style>