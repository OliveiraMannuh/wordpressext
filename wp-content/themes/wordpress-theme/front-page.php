<?php get_header(); ?>

<section class="features-section">
    <h2 class="features-title">Bora Praticar?</h2>
    <p class="features-subtitle">Desafie seu cérebro de um jeito vibrante! Resolva quizzes, bata seus recordes em simulados e vire mestre nos flashcards com a adrenalina de um jogo! 🎮</p>
    
    <div class="features-grid">
        <div class="feature-card">
            <div class="feature-content">
                <h3>Simulados</h3>
                <p>Transforme seus materiais em simulados e estude no seu próprio ritmo!</p>
                <div class="feature-image simulados-img"></div>
            </div>
        </div>

        <div class="feature-card">
            <div class="feature-content">
                <h3>Quizzes</h3>
                <p>Teste seu conhecimento com quizzes incríveis e descubra se você realmente aprendeu!</p>
                <div class="feature-image quizzes-img"></div>
            </div>
        </div>

        <div class="feature-card">
            <div class="feature-content">
                <h3>Flashcards</h3>
                <p>Desafie sua mente com flashcards gamificados e domine qualquer assunto!</p>
                <div class="feature-image flashcards-img"></div>
            </div>
        </div>

        <div class="feature-card">
            <div class="feature-content">
                <h3>Desempenho</h3>
                <p>Monitore sua evolução com relatórios detalhados que mostram seu progresso!</p>
                <div class="feature-image desempenho-img"></div>
            </div>
        </div>
    </div>
</section>

<section class="study-choice-section">
    <div class="study-choice-container">
        <div class="study-choice-content">
            <h2>Escolha Como <span>Estudar</span></h2>
            <p>No Exitus Educacional você pode escolher qualquer jogo para testar os seus conhecimentos sem pagar nada.</p>
            <a href="#" class="study-button">EXPERIMENTE GRÁTIS!</a>
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
        </div>
    </div>
</section>

<section class="share-section">
    <div class="share-container">
        <div class="share-content">
            <h2>Compartilhamento de Jogos e Decks</h2>
            <p>Curtiu um deck ou criou um jogo irado? Compartilha com a galera e ajuda todo mundo a mandar bem nesse assunto também!</p>
            
            <div class="share-image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/astronauts-handshake.svg" 
                     alt="Astronautas compartilhando">
            </div>
        </div>

        <div class="share-options">
            <h3>Compartilhe:</h3>
            <ul class="share-list">
                <li><a href="#">Flashcards</a></li>
                <li><a href="#">Quizzes</a></li>
                <li><a href="#">Simuados</a></li>
                <li><a href="#">Decks</a></li>
            </ul>
        </div>
    </div>
</section>

<section class="planning-section">
    <div class="planning-container">
        <div class="planning-content">
            <h2>Planejamento <span>Semanal</span></h2>
            <p class="planning-subtitle">Lembretes inteligentes para você estudar os conteúdos escolhidos e superar suas dificuldades sem perder o ritmo! 📚✨</p>
            
            <div class="planning-features">
                <div class="planning-feature-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/revision-icon.svg" alt="Revisão">
                    <span>Revisão espaçada</span>
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
        
        <div class="planning-image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/planning-astronaut.svg" alt="Astronauta planejando">
        </div>
    </div>
</section>

<section class="spaced-repetition-section">
    <div class="spaced-repetition-container">
        <div class="spaced-repetition-header">
            <h2>Você conhece a Repetição Espaçada?</h2>
            <p>Nossos jogos usam a técnica da repetição espaçada, um jeito inteligente de revisar o conteúdo aos poucos, no tempo certo, pra você aprender de verdade e sem estresse!</p>
            <h3>Veja os benefícios:</h3>
        </div>

        <div class="benefits-grid">
            <div class="benefit-card">
                <div class="benefit-content">
                    <h4>Melhora da compreensão de conceitos complexos</h4>
                    <div class="benefit-image benefit-1"></div>
                </div>
            </div>

            <div class="benefit-card">
                <div class="benefit-content">
                    <h4>Aumenta a retenção de informações por muito mais tempo</h4>
                    <div class="benefit-image benefit-2"></div>
                </div>
            </div>

            <div class="benefit-card">
                <div class="benefit-content">
                    <h4>Facilita a identificação de lacunas no conhecimento</h4>
                    <div class="benefit-image benefit-3"></div>
                </div>
            </div>

            <div class="benefit-card">
                <div class="benefit-content">
                    <h4>Ajuda na aprendizagem profunda</h4>
                    <div class="benefit-image benefit-4"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="pricing-section">
    <h2 class="pricing-title">Planos</h2>
    
    <div class="pricing-grid">
        <!-- Plano Astronauta -->
        <div class="pricing-card">
            <div class="pricing-header">
                <h3>Astronauta</h3>
                <div class="price">
                    <span class="amount">R$ 0</span>
                    <span class="period">por mês</span>
                </div>
            </div>
            <ul class="pricing-features">
                <li>Flashcards ilimitados</li>
                <li>10 simulados por dia</li>
                <li>10 quizzes por dia</li>
                <li>10 decks</li>
                <li>50 MB para upload de material</li>
            </ul>
            <div class="pricing-image astronaut-img"></div>
        </div>

        <!-- Plano Planeta -->
        <div class="pricing-card">
            <div class="pricing-header">
                <h3>Planeta</h3>
                <div class="price">
                    <span class="amount">R$ 12,90</span>
                    <span class="period">por mês</span>
                </div>
            </div>
            <ul class="pricing-features">
                <li>Flashcards ilimitados</li>
                <li>20 simulados por dia</li>
                <li>20 quizzes por dia</li>
                <li>20 decks</li>
                <li>75 MB para upload de material</li>
            </ul>
            <div class="pricing-image planet-img"></div>
        </div>

        <!-- Plano Foguete -->
        <div class="pricing-card">
            <div class="pricing-header">
                <h3>Foguete</h3>
                <div class="price">
                    <span class="amount">R$ 25,90</span>
                    <span class="period">por mês</span>
                </div>
            </div>
            <ul class="pricing-features">
                <li>Flashcards ilimitados</li>
                <li>Simulados ilimitados</li>
                <li>50 Quizzes por dia</li>
                <li>50 decks</li>
                <li>100 MB para upload de material</li>
            </ul>
            <div class="pricing-image rocket-img"></div>
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
                <li>Flashcards ilimitados</li>
                <li>Simulados ilimitados</li>
                <li>Quizzes ilimitados</li>
                <li>Decks ilimitados</li>
                <li>500 MB para upload de material</li>
            </ul>
            <div class="pricing-image galaxy-img"></div>
        </div>
    </div>
</section>

<?php get_footer(); ?>