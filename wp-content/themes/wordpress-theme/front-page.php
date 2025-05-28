<?php get_header(); ?>

<section class="features-section" id="jogos">
    <h2 class="features-title">Diversão Que Ensina!</h2>
    <svg class="icone-amarelo" width="145" height="25" viewBox="-125 0 145 25" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M1.00016 15.2711C18.1407 8.34427 70.832 -1.93441 144.473 12.3652" stroke="#FFB802" stroke-width="2" stroke-linecap="round"/>
        <path d="M26.2943 14.0041C38.9177 9.44643 77.3772 3.50055 130.227 16.1786" stroke="#FFB802" stroke-width="4" stroke-linecap="round"/>
    </svg>
    <p class="features-subtitle">Desafie seu cérebro de um jeito viciante! <br>Resolva quizzes, bata seus recordes em simulados e vire mestre nos flashcards com a adrenalina de um jogo! 🎮</p>
    
    <div class="features-grid">
        <div class="feature-card">
            <div class="feature-content">
                <h3>Simulados</h3>
                <p>Transforme seus materiais em simulados e estude no seu próprio ritmo! ✨📚</p>
                <div class="feature-image simulados-img"></div>
            </div>
        </div>

        <div class="feature-card">
            <div class="feature-content">
                <h3>Quizzes</h3>
                <p>Teste seu conhecimento com quizzes incríveis e descubra se você realmente aprendeu! 🧠🎯</p>
                <div class="feature-image quizzes-img"></div>
            </div>
        </div>

        <div class="feature-card">
            <div class="feature-content">
                <h3>Flashcards</h3>
                <p>Desafie sua mente com flashcards gamificados e domine qualquer assunto! 🚀🃏</p>
                <div class="feature-image flashcards-img"></div>
            </div>
        </div>
    </div>

    <div class="performance-card">
        <h3>Desempenho</h3>
        <div class="performance-content">
            <p>Monitore sua evolução com relatórios de desempenho que mostram o seu progresso! 📊✨</p>
        </div>
        <div class="performance-image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/desempenho.svg" alt="Ícone de Desempenho">
        </div>
    </div>
</section> <!-- features-section -->

<section class="how-it-works-section">
    <div class="how-it-works-container">
        <h2>
            Como Funciona?
            <svg class="icone-amarelo" width="145" height="25" viewBox="0 0 145 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1.00016 15.2711C18.1407 8.34427 70.832 -1.93441 144.473 12.3652" stroke="#FFB802" stroke-width="2" stroke-linecap="round"/>
                <path d="M26.2943 14.0041C38.9177 9.44643 77.3772 3.50055 130.227 16.1786" stroke="#FFB802" stroke-width="4" stroke-linecap="round"/>
            </svg>
        </h2>               
        <div class="how-it-works-image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/how-it-works.svg" alt="Interface do aplicativo com astronauta">
        </div>
    </div>
</section>

<section class="spaced-repetition-section">
    <div class="spaced-repetition-container">
        <div class="spaced-repetition-header">
            <h2>Você conhece a Repetição Espaçada?
            <svg class="icone-amarelo" xmlns="http://www.w3.org/2000/svg" width="145" height="25" viewBox="0 0 145 25" fill="none">
                    <path d="M1.00016 15.2711C18.1407 8.34427 70.832 -1.93441 144.473 12.3652" stroke="currentcolor" stroke-width="4"/>
                    <path d="M26.2943 14.0041C38.9177 9.44643 77.3772 3.50055 130.227 16.1786" stroke="currentcolor" stroke-width="2"/>
                </svg>
            </h2>

            <p>Nossos jogos usam a técnica da repetição espaçada, um jeito inteligente de revisar o conteúdo aos poucos, no tempo certo, pra você aprender de verdade e sem estresse!</p>
            <h3>Veja os benefícios:</h3>
        </div>

        <div class="benefits-grid">
            <!-- Carta 1 -->
            <div class="benefit-card">
                <div class="card-header">
                    <div class="card-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/memoria.svg" alt="Memória de Longo Prazo">
                    </div>
                    <h3>Memória de Longo Prazo</h3>
                </div>
                <div class="card-attributes">
                    <div class="attribute">
                        <span>Retenção</span>
                        <div class="link-icon"></div>
                    </div>
                    <div class="attribute">
                        <span>Capacidade de Fixação</span>
                        <div class="link-icon"></div>
                    </div>
                    <div class="attribute">
                        <span>Profundidade Cognitiva</span>
                        <div class="link-icon"></div>
                    </div>
                    <div class="attribute">
                        <span>Recuperação Espontânea</span>
                        <div class="link-icon"></div>
                    </div>
                </div>
            </div>

            <!-- Carta 2 -->
            <div class="benefit-card">
                <div class="card-header">
                    <div class="card-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/eficiencia.svg" alt="Eficiência no Estudo">
                    </div>
                    <h3>Eficiência no Estudo</h3>
                </div>
                <div class="card-attributes">
                    <div class="attribute">
                        <span>Aprendizado Direcionado</span>
                        <div class="link-icon"></div>
                    </div>
                    <div class="attribute">
                        <span>Otimização do Tempo</span>
                        <div class="link-icon"></div>
                    </div>
                    <div class="attribute">
                        <span>Foco Aprimorado</span>
                        <div class="link-icon"></div>
                    </div>
                    <div class="attribute">
                        <span>Redução da Procrastinação</span>
                        <div class="link-icon"></div>
                    </div>
                </div>
            </div>

            <!-- Carta 3 -->
            <div class="benefit-card">
                <div class="card-header">
                    <div class="card-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/compreensao.svg" alt="Compreensão Aprimorada">
                    </div>
                    <h3>Compreensão Aprimorada</h3>
                </div>
                <div class="card-attributes">
                    <div class="attribute">
                        <span>Conexão de Conceitos</span>
                        <div class="link-icon"></div>
                    </div>
                    <div class="attribute">
                        <span>Revisão Ativa</span>
                        <div class="link-icon"></div>
                    </div>
                    <div class="attribute">
                        <span>Identificação de Lacunas</span>
                        <div class="link-icon"></div>
                    </div>
                    <div class="attribute">
                        <span>Pensamento Crítico</span>
                        <div class="link-icon"></div>
                    </div>
                </div>
            </div>

            <!-- Carta 4 -->
            <div class="benefit-card">
                <div class="card-header">
                    <div class="card-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/motivacao.svg" alt="Aumento da Motivação">
                    </div>
                    <h3>Aumento da Motivação</h3>
                </div>
                <div class="card-attributes">
                    <div class="attribute">
                        <span>Aprendizado Proativo</span>
                        <div class="link-icon"></div>
                    </div>
                    <div class="attribute">
                        <span>Redução da Frustração</span>
                        <div class="link-icon"></div>
                    </div>
                    <div class="attribute">
                        <span>Maior Interesse no Assunto</span>
                        <div class="link-icon"></div>
                    </div>
                    <div class="attribute">
                        <span>Sensação de Realização</span>
                        <div class="link-icon"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="spaced-study-section">
    <h2>Aprendizado Inteligente com a Repetição Espaçada</h2>
    <div class="spaced-study-container">
        <div class="spaced-study-content">
        <!--<h2>Aprendizado Inteligente com a <br>Repetição Espaçada</h2>-->
            
            <p class="study-description">
            Um estudo da Universidade Federal de São Carlos (UFSCar) revela que a 
            repetição espaçada é uma técnica fundamental para combater o esquecimento e 
            promover a retenção de conhecimento a longo prazo.
            </p>

            <blockquote class="study-quote">
                <p>"A repetição espaçada (spaced repetition – SR) é uma técnica de estudos baseada em evidências científicas que visa memorização e manutenção a longo prazo das informações aprendidas."</p>
                <cite>(NASCIMENTO, 2023 - UFSCar)</cite>
            </blockquote>
        </div>
        
        <div class="spaced-study-image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/astronaut-reading.svg" 
                 alt="Astronauta estudando">
        </div>
    </div>
</section>

<section class="study-choice-section">
    <div class="study-choice-container">
        <div class="study-choice-content">
            <h2>Escolha Como <span>Estudar</span></h2>
            <p>No Exitus Educacional você pode escolher qualquer jogo para testar os seus conhecimentos sem pagar nada. 📚✨</p>
            <a href="#" class="study-button">EXPERIMENTE GRÁTIS! 🚀</a>
        </div>
        <div class="study-choice-images">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons-interativo.svg" 
                 alt="Ícones Interativos" 
                 class="small-image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/astronaut-studying.svg" 
                 alt="Astronauta Estudando" 
                 class="main-image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/rocket-small.svg" 
                 alt="Foguete" 
                 class="small-image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/flashcards-icone.svg" 
                 alt="Flashcards Ícone" 
                 class="small-image">
        </div>
    </div>
</section>

<section class="share-section">
    <h2>Compartilhamento de <span>Jogos e Decks</span></h2>
    <div class="share-container">
        <div class="share-content">
            <!--<h2>Compartilhamento de Jogos e Decks</h2>-->
            <p>Curtiu um deck ou criou um jogo irado? Compartilha com a galera e ajuda todo mundo a mandar bem nesse assunto também!</p>
            
            <div class="share-image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/astronauts-handshake.svg" 
                     alt="Astronautas compartilhando">
            </div>
        </div>

        <div class="share-options">
            <h3>Compartilhe:</h3>
            <ul class="share-list">
                <li><a href="#">Materiais</a></li>
                <li><a href="#">Decks</a></li>
                <li><a href="#">Quizzes</a></li>
                <li><a href="#">Simulados</a></li>
            </ul>
        </div>
    </div>
</section>






<section class="planning-section">
    <div class="planning-container">
    <div class="planning-image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icone-notificacao.svg" alt="Ícone de notificação" class="icone-notificacao">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/planning-astronaut.svg" alt="Astronauta planejando" class="imagem-plan-principal">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/calendario-estelar.svg" alt="Calendário Estelar" class="calendario-estelar">
    </div>

        <div class="planning-content">
            <h2>Planejamento <span>Semanal</span></h2>
            <p class="planning-subtitle">Lembretes inteligentes para você estudar os conteúdos escolhidos e superar suas dificuldades sem perder o ritmo! 📚✨</p>
            
            <div class="planning-features">
                <div class="planning-feature-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/revision-icon.svg" alt="Revisão">
                    <span>Repetição espaçada</span>
                </div>
                
                <div class="planning-feature-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/reminder-icon.svg" alt="Lembretes">
                    <span>Lembretes diários</span>
                </div>
                
                <div class="planning-feature-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/calendar-icon.svg" alt="Agendamento">
                    <span>Agendamento personalizado</span>
                </div>
                
                <div class="planning-feature-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/simulation-icon.svg" alt="Simulados">
                    <span>Simulados programados</span>
                </div>
            </div>
        </div>
        

    </div>
</section>

<section class="pricing-section">
        <div class="pricing-header">
            <h2 class="pricing-title">Planos</h2>
            <!--svg para decoração abaixo dos planos -->
            <span>
                <svg class="icone-amarelo" xmlns="http://www.w3.org/2000/svg" width="145" height="25" viewBox="0 0 145 25" fill="none">
                    <path d="M1.00016 15.2711C18.1407 8.34427 70.832 -1.93441 144.473 12.3652" stroke="currentcolor" stroke-width="4"/>
                    <path d="M26.2943 14.0041C38.9177 9.44643 77.3772 3.50055 130.227 16.1786" stroke="currentcolor" stroke-width="2"/>
                </svg>
            </span>
        </div>
    <div class="pricing-grid">
        <!-- Plano Astronauta -->
        <div class="pricing-card">
            <div class="pricing-header">
                <h3>Astronauta</h3>
                <div class="price">
                    <span class="amount">Grátis</span>
                </div>
            </div>
            <ul class="pricing-features">
                <li>Criar até 10 materiais</li>
                <li>Criar até 10 decks</li>
                <li>Jogar simulado ilimitado</li>
                <li>Jogar quiz ilimitado</li>
                <li>Jogar flashcard ilimitado</li>
            </ul>
            <div class="pricing-image astronaut-img"></div>
        </div>

        <!-- Plano Planeta -->
        <div class="pricing-card">
            <div class="pricing-header">
                <h3>Foguete</h3>
                <div class="price">
                    <span class="amount">R$ 12,90</span>
                    <span class="period">por mês</span>
                </div>
            </div>
            <ul class="pricing-features">
                <li>Criar até 30 materiais</li>
                <li>Criar até 30 decks</li>
                <li>Jogar simulado ilimitado</li>
                <li>Jogar quiz ilimitado</li>
                <li>Jogar flashcard ilimitado</li>
            </ul>
            <div class="pricing-image rocket-img"></div>
        </div>

        <!-- Plano Foguete -->
        <div class="pricing-card">
            <div class="pricing-header">
                <h3>Planeta</h3>
                <div class="price">
                    <span class="amount">R$ 25,90</span>
                    <span class="period">por mês</span>
                </div>
            </div>
            <ul class="pricing-features">
                <li>Criar até 50 materiais</li>
                <li>Criar até 50 decks</li>
                <li>Jogar simulado ilimitado</li>
                <li>Jogar quiz ilimitado</li>
                <li>Jogar flashcard ilimitado</li>
            </ul>
            <div class="pricing-image planet-img"></div>
        </div>

        <!-- Plano Galáxia -->
        <div class="pricing-card">
            <div class="pricing-header">
                <h3>Galáxia</h3>
                <div class="price">
                    <span class="amount">R$ 59,90</span>
                    <span class="period">por mês</span>
                </div>
            </div>
            <ul class="pricing-features">
                <li>Materiais ilimitados</li>
                <li>Decks ilimitados</li>
                <li>Jogar simulado ilimitado</li>
                <li>Jogar quiz ilimitado</li>
                <li>Jogar flashcard ilimitado</li>
            </ul>
            <div class="pricing-image galaxy-img"></div>
        </div>
    </div>
</section>



<?php get_footer(); ?>