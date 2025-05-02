<?php
/**
 * Template Name: Página Inicial
 */

get_header(); ?>

<main id="primary" class="site-main">
    <!-- Seção Hero -->
    <section class="hero-section" style="
        background: linear-gradient(135deg, #2E2D60 0%, #6053B4 100%);
        color: #FFFFFF;
        padding: 120px 20px;
        text-align: center;">
        
        <div class="hero-content" style="max-width: 800px; margin: 0 auto;">
            <h1 style="font-size: 3em; margin-bottom: 30px;">
                Bem-vindo ao Portal Educacional
            </h1>
            <p style="font-size: 1.4em; margin-bottom: 40px; opacity: 0.9;">
                Aprenda de forma interativa com nossos jogos educativos, simulados e muito mais.
            </p>
            <a href="<?php echo home_url('/compra'); ?>" style="
                display: inline-block;
                background: #FFFFFF;
                color: #2E2D60;
                padding: 15px 40px;
                text-decoration: none;
                border-radius: 30px;
                font-weight: bold;
                transition: all 0.3s ease;">
                Começar Agora
            </a>
        </div>
    </section>

    <!-- Seção de Recursos -->
    <section style="padding: 80px 20px; background: #F8F9FA;">
        <div style="max-width: 1200px; margin: 0 auto;">
            <h2 style="text-align: center; color: #2E2D60; margin-bottom: 60px;">
                Nossos Recursos
            </h2>
            
            <div style="
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
                gap: 30px;">
                
                <!-- Recurso 1 -->
                <div style="
                    background: #FFFFFF;
                    padding: 30px;
                    border-radius: 10px;
                    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
                    transition: all 0.3s ease;
                    cursor: pointer;
                    transform: translateY(0);"
                    onmouseover="this.style.transform='translateY(-10px)';
                                this.style.boxShadow='0 15px 30px rgba(0,0,0,0.15)';
                                this.style.background='linear-gradient(135deg, #FFFFFF 0%, #F8F9FA 100%)';"
                    onmouseout="this.style.transform='translateY(0)';
                               this.style.boxShadow='0 5px 15px rgba(0,0,0,0.1)';
                               this.style.background='#FFFFFF';"
                    onclick="window.location.href='<?php echo home_url('/jogos-educativos'); ?>'">
                    <h3 style="color: #2E2D60; margin-bottom: 20px;">Jogos Educativos</h3>
                    <p style="color: #666;">Aprenda brincando com nossos jogos interativos.</p>
                </div>

                <!-- Recurso 2 -->
                <div style="
                    background: #FFFFFF;
                    padding: 30px;
                    border-radius: 10px;
                    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
                    transition: all 0.3s ease;
                    cursor: pointer;
                    transform: translateY(0);"
                    onmouseover="this.style.transform='translateY(-10px)';
                                this.style.boxShadow='0 15px 30px rgba(0,0,0,0.15)';
                                this.style.background='linear-gradient(135deg, #FFFFFF 0%, #F8F9FA 100%)';"
                    onmouseout="this.style.transform='translateY(0)';
                               this.style.boxShadow='0 5px 15px rgba(0,0,0,0.1)';
                               this.style.background='#FFFFFF';">
                    <h3 style="color: #2E2D60; margin-bottom: 20px;">Simulados</h3>
                    <p style="color: #666;">Prepare-se com simulados personalizados.</p>
                </div>

                <!-- Recurso 3 -->
                <div style="
                    background: #FFFFFF;
                    padding: 30px;
                    border-radius: 10px;
                    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
                    transition: all 0.3s ease;
                    cursor: pointer;
                    transform: translateY(0);"
                    onmouseover="this.style.transform='translateY(-10px)';
                                this.style.boxShadow='0 15px 30px rgba(0,0,0,0.15)';
                                this.style.background='linear-gradient(135deg, #FFFFFF 0%, #F8F9FA 100%)';"
                    onmouseout="this.style.transform='translateY(0)';
                               this.style.boxShadow='0 5px 15px rgba(0,0,0,0.1)';
                               this.style.background='#FFFFFF';">
                    <h3 style="color: #2E2D60; margin-bottom: 20px;">Quiz & Flashcards</h3>
                    <p style="color: #666;">Revise o conteúdo de forma eficiente.</p>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>