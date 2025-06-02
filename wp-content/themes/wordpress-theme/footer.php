<?php
// Footer template for the WordPress theme

?>

<footer>
    <div class="footer-widgets">
        <div class="footer-column">
            <h3>Sobre Nós</h3>
            <ul>
                <li><a href="#">Nossa História</a></li>
                <li><a href="#">Equipe</a></li>
                <li><a href="#">Carreiras</a></li>
            </ul>
        </div>
        <div class="footer-column">
            <h3>Serviços</h3>
            <ul>
                <li><a href="#">Portal Educacional</a></li>
                <li><a href="#">Suporte</a></li>
                <li><a href="#">FAQ</a></li>
            </ul>
        </div>
        <div class="footer-column">
            <h3>Recursos</h3>
            <ul>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Tutoriais</a></li>
                <li><a href="#">Webinars</a></li>
            </ul>
        </div>
        <div class="footer-column">
            <h3>Contato</h3>
            <ul>
                <li><a href="page-contact.php">Fale Conosco</a></li>
                <li><a href="#">Suporte Técnico</a></li>
                <li><a href="#">Localização</a></li>
            </ul>
        </div>
    </div>
    <div class="footer-bottom">
        <p>&copy; <?php echo date("Y"); ?> Exitus Educacional. Todos os direitos reservados.</p>
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
    }
    .footer-column {
        flex: 1;
        min-width: 200px;
        margin: 10px;
    }
    .footer-column h3 {
        color: #7D65E1;
    }
    .footer-column ul {
        list-style: none;
        padding: 0;
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
        margin-top: 20px;
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
</style>