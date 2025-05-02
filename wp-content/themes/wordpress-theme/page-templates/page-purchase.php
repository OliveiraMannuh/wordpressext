<?php
/**
 * Template Name: Página de Compra
 */

get_header(); ?>

<div class="purchase-page">
    <section class="hero-section" style="
        background: linear-gradient(135deg, #7D65E1 0%, #6053B4 100%);
        color: #FFFFFF;
        padding: 120px 20px;
        text-align: center;
        position: relative;
        overflow: hidden;">
        
        <!-- Elementos decorativos de fundo -->
        <div style="
            position: absolute;
            width: 300px;
            height: 300px;
            background: rgba(255,255,255,0.1);
            border-radius: 50%;
            top: -100px;
            right: -100px;
            z-index: 1;">
        </div>

        <div class="hero-content" style="
            max-width: 800px;
            margin: 0 auto;
            position: relative;
            z-index: 2;">
            
            <h1 style="
                font-size: 3em;
                margin-bottom: 30px;
                font-weight: 700;
                text-shadow: 0 2px 4px rgba(0,0,0,0.1);">
                Adquira o Portal Educacional
            </h1>
            
            <p style="
                font-size: 1.4em;
                margin-bottom: 80px;
                line-height: 1.6;
                max-width: 600px;
                margin-left: auto;
                margin-right: auto;
                opacity: 0.9;">
                Descubra uma nova forma de aprender com jogos educativos, simulados, quiz e flashcards.
            </p>
            
            <div class="button-wrapper" style="margin-top: 60px;">
                <a href="#purchase-options" class="btn" style="
                    background-color: #FFFFFF;
                    color: #6053B4;
                    padding: 20px 50px;
                    text-decoration: none;
                    display: inline-block;
                    border-radius: 50px;
                    font-size: 1.2em;
                    font-weight: bold;
                    transition: all 0.3s ease;
                    box-shadow: 0 4px 15px rgba(0,0,0,0.2);">
                    Comece Agora
                </a>
            </div>
        </div>
    </section>

    <section id="purchase-options" class="purchase-options" style="
        padding: 100px 20px;
        background: #F8F9FA;">
        
        <h2 style="
            text-align: center;
            color: #2E2D60;
            font-size: 2.5em;
            margin-bottom: 60px;">
            Escolha seu Plano
        </h2>
        
        <div class="options-grid" style="
            display: flex;
            justify-content: center;
            gap: 30px;
            max-width: 1200px;
            margin: 0 auto;">
            
            <div class="option" style="
                background: #FFFFFF;
                border-radius: 15px;
                padding: 40px;
                flex: 1;
                max-width: 400px;
                box-shadow: 0 10px 30px rgba(0,0,0,0.1);
                transition: transform 0.3s ease;">
                
                <h3 style="
                    color: #2E2D60;
                    font-size: 1.8em;
                    margin-bottom: 20px;">
                    Plano Mensal
                </h3>
                
                <p style="
                    font-size: 2.5em;
                    color: #6053B4;
                    margin: 30px 0;
                    font-weight: bold;">
                    R$ 29,90<span style="font-size: 0.4em; color: #666;">/mês</span>
                </p>
                
                <ul style="
                    list-style: none;
                    padding: 0;
                    margin: 30px 0;
                    text-align: left;">
                    <li style="margin: 15px 0; color: #666;">✓ Acesso a todos os recursos</li>
                    <li style="margin: 15px 0; color: #666;">✓ Suporte premium</li>
                    <li style="margin: 15px 0; color: #666;">✓ Conteúdo atualizado</li>
                </ul>
                
                <a href="#" class="btn" style="
                    background-color: #6053B4;
                    color: #FFFFFF;
                    padding: 15px 40px;
                    text-decoration: none;
                    display: inline-block;
                    border-radius: 50px;
                    font-weight: bold;
                    transition: all 0.3s ease;">
                    Escolher Plano
                </a>
            </div>

            <div class="option" style="
                background: #FFFFFF;
                border-radius: 15px;
                padding: 40px;
                flex: 1;
                max-width: 400px;
                box-shadow: 0 10px 30px rgba(0,0,0,0.1);
                transition: transform 0.3s ease;
                border: 2px solid #6053B4;">
                
                <div style="
                    background: #6053B4;
                    color: white;
                    padding: 5px 15px;
                    border-radius: 20px;
                    display: inline-block;
                    margin-bottom: 20px;
                    font-size: 0.9em;">
                    MAIS POPULAR
                </div>
                
                <h3 style="
                    color: #2E2D60;
                    font-size: 1.8em;
                    margin-bottom: 20px;">
                    Plano Anual
                </h3>
                
                <p style="
                    font-size: 2.5em;
                    color: #6053B4;
                    margin: 30px 0;
                    font-weight: bold;">
                    R$ 299,90<span style="font-size: 0.4em; color: #666;">/ano</span>
                </p>
                
                <ul style="
                    list-style: none;
                    padding: 0;
                    margin: 30px 0;
                    text-align: left;">
                    <li style="margin: 15px 0; color: #666;">✓ Economia de 25%</li>
                    <li style="margin: 15px 0; color: #666;">✓ Acesso a todos os recursos</li>
                    <li style="margin: 15px 0; color: #666;">✓ Suporte premium</li>
                    <li style="margin: 15px 0; color: #666;">✓ Conteúdo atualizado</li>
                </ul>
                
                <a href="#" class="btn" style="
                    background-color: #6053B4;
                    color: #FFFFFF;
                    padding: 15px 40px;
                    text-decoration: none;
                    display: inline-block;
                    border-radius: 50px;
                    font-weight: bold;
                    transition: all 0.3s ease;">
                    Escolher Plano
                </a>
            </div>
        </div>
    </section>
</div>

<?php get_footer(); ?>