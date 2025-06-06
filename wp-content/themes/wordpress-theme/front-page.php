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
        <span data-star="1">★</span>
        <span data-star="2">★</span>
        <span data-star="3">★</span>
        <span data-star="4">★</span>
        <span data-star="5">★</span>
        <span data-star="6">★</span>
        <span data-star="7">★</span>
        <span data-star="8">★</span>
        <span data-star="9">★</span>
        <span data-star="10">★</span>
        <span data-star="11">★</span>
        <span data-star="12">★</span>
        <span data-star="13">★</span>
        <span data-star="14">★</span>
        <div class="performance-header">
            <h3>Desempenho</h3>
            <p>Monitore sua evolução com relatórios de desempenho que mostram o seu progresso! 📊✨</p>
        </div>
        <div class="performance-content">
            <div class="chart-container">
                <div class="donut-chart">
                    <div class="chart-center">
                        <span class="percentage">67%</span>
                    </div>
                    <div class="chart-legend">
                        <div class="legend-item">
                            <span class="dot success"></span>
                            <span>Acertos</span>
                        </div>
                        <div class="legend-item">
                            <span class="dot error"></span>
                            <span>Erros</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="graph-container">
                <h4>Acertos por conteúdos<br>com base na última tentativa</h4>
                <div class="bar-chart">
                    <div class="bar-group">
                        <div class="bars">
                            <div class="bar success" style="height: 40%"></div>
                            <div class="bar error" style="height: 25%"></div>
                        </div>
                        <span class="label"><br>Antiguidade</span>
                    </div>
                    <div class="bar-group">
                        <div class="bars">
                            <div class="bar success" style="height: 60%"></div>
                            <div class="bar error" style="height: 20%"></div>
                        </div>
                        <span class="label">Idade Média</span>
                    </div>
                    <div class="bar-group">
                        <div class="bars">
                            <div class="bar success" style="height: 45%"></div>
                            <div class="bar error" style="height: 30%"></div>
                        </div>
                        <span class="label">Idade Moderna</span>
                    </div>
                    <div class="bar-group">
                        <div class="bars">
                            <div class="bar success" style="height: 35%"></div>
                            <div class="bar error" style="height: 25%"></div>
                        </div>
                        <span class="label">Idade Contemporânea</span>
                    </div>
                </div>
            </div>
            <div class="performance-image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/desempenho.svg" alt="Ícone de Desempenho">
                <div class="linha-vazia">
                    <span></span>
                </div>
                <div class="linha-vazia">
                    <span></span>
                </div>
                <div class="linha-vazia">
                    <span></span>
                </div>
            </div>

        </div>

    </div>
</section> <!-- features-section -->

<section class="how-it-works-section">
    <div class="how-it-works-container">
        <h2>
            Como Funciona?
            <svg class="icone-amarelo" xmlns="http://www.w3.org/2000/svg" width="145" height="25" viewBox="0 0 145 25" fill="none">
                    <path d="M1.00016 15.2711C18.1407 8.34427 70.832 -1.93441 144.473 12.3652" stroke="currentcolor" stroke-width="4"/>
                    <path d="M26.2943 14.0041C38.9177 9.44643 77.3772 3.50055 130.227 16.1786" stroke="currentcolor" stroke-width="2"/>
                </svg>
        </h2>
        
        <div class="cards-container">
            <!-- Card da Esquerda -->
            <div class="feature-card left">
                <div class="card-content">
                    <div class="card-header-works">
                        <h3 class="deck-white">Decks</h3>
                        <h3 class="deck-rosa">Decks</h3>
                    </div>
                    <div class="search-container">
                        <div class="search-wrapper">
                            <input type="text" placeholder="Filtre sua busca aqui" class="search-input">
                            <button class="search-button">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M21 21L15.5 15.5M15.5 15.5C17.0913 13.9087 18 11.7956 18 9.5C18 5.35786 14.6421 2 10.5 2C6.35786 2 3 5.35786 3 9.5C3 13.6421 6.35786 17 10.5 17C12.7956 17 14.9087 16.0913 16.5 14.5L15.5 15.5Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                        </div>
                        <button class="add-button">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 5V19M5 12H19" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                    </div>
                    <div class="card-grid">
                    <!-- Card de Exemplo -->
                    <div class="deck-card">
                        <div class="deck-header">
                            <h3 class="deck-title">Inglês</h3>
                            <span class="card-count">20 cards</span>
                        </div>
                        
                        <div class="deck-meta">
                            <span class="last-access">Último acesso: 06/04</span>
                            <div class="progress-bar">
                                <div class="progress" style="width: 75%"></div>
                            </div>
                        </div>

                        <div class="deck-actions">
                            <button class="action-btn">
                                <svg width="20" height="20" viewBox="0 0 24 24">
                                    <path d="M8 5v14l11-7z" fill="currentColor"/>
                                </svg>
                            </button>
                            <button class="action-btn">
                                <svg width="20" height="20" viewBox="0 0 24 24">
                                    <path d="M19 3H5C3.9 3 3 3.9 3 5v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2z" fill="currentColor"/>
                                </svg>
                            </button>
                            <button class="action-btn">
                                <svg width="20" height="20" viewBox="0 0 24 24">
                                    <path d="M12 22c1.1 0 2-.9 2-2h-4c0 1.1.9 2 2 2zm6-6v-5c0-3.07-1.63-5.64-4.5-6.32V4c0-.83-.67-1.5-1.5-1.5s-1.5.67-1.5 1.5v.68C7.64 5.36 6 7.92 6 11v5l-2 2v1h16v-1l-2-2zm-2 1H8v-6c0-2.48 1.51-4.5 4-4.5s4 2.02 4 4.5v6z" fill="currentColor"/>
                                </svg>
                            </button>
                            <button class="action-btn">
                                <svg width="20" height="20" viewBox="0 0 24 24">
                                    <path d="M18 16.08c-.76 0-1.44.3-1.96.77L8.91 12.7c.05-.23.09-.46.09-.7s-.04-.47-.09-.7l7.05-4.11c.54.5 1.25.81 2.04.81 1.66 0 3-1.34 3-3s-1.34-3-3-3-3 1.34-3 3c0 .24.04.47.09.7L8.04 9.81C7.5 9.31 6.79 9 6 9c-1.66 0-3 1.34-3 3s1.34 3 3 3c.79 0 1.5-.31 2.04-.81l7.12 4.16c-.05.21-.08.43-.08.65 0 1.61 1.31 2.92 2.92 2.92s2.92-1.31 2.92-2.92c0-1.61-1.31-2.92-2.92-2.92z" fill="currentColor"/>
                                </svg>
                            </button>
                            <button class="action-btn">
                                <svg width="20" height="20" viewBox="0 0 24 24">
                                    <path d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z" fill="currentColor"/>
                                </svg>
                            </button>
                        </div>

                        <div class="deck-topic">
                            <div class="topic-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="#6B4EE6">
                                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"/>
                                </svg>
                            </div>
                            <span class="topic-text">Verb to be</span>
                        </div>
                    </div>
                    <!-- Repita o mesmo padrão para os outros cards -->

                    <!-- Card de Exemplo 2 -->
                    <div class="deck-card">
                        <div class="deck-header">
                            <h3 class="deck-title">Matemática</h3>
                            <span class="card-count">90 cards</span>
                        </div>
                        
                        <div class="deck-meta">
                            <span class="last-access">Último acesso: 04/04</span>
                            <div class="progress-bar">
                                <div class="progress" style="width: 75%"></div>
                            </div>
                        </div>

                        <div class="deck-actions">
                            <button class="action-btn">
                                <svg width="20" height="20" viewBox="0 0 24 24">
                                    <path d="M8 5v14l11-7z" fill="currentColor"/>
                                </svg>
                            </button>
                            <button class="action-btn">
                                <svg width="20" height="20" viewBox="0 0 24 24">
                                    <path d="M19 3H5C3.9 3 3 3.9 3 5v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2z" fill="currentColor"/>
                                </svg>
                            </button>
                            <button class="action-btn">
                                <svg width="20" height="20" viewBox="0 0 24 24">
                                    <path d="M12 22c1.1 0 2-.9 2-2h-4c0 1.1.9 2 2 2zm6-6v-5c0-3.07-1.63-5.64-4.5-6.32V4c0-.83-.67-1.5-1.5-1.5s-1.5.67-1.5 1.5v.68C7.64 5.36 6 7.92 6 11v5l-2 2v1h16v-1l-2-2zm-2 1H8v-6c0-2.48 1.51-4.5 4-4.5s4 2.02 4 4.5v6z" fill="currentColor"/>
                                </svg>
                            </button>
                            <button class="action-btn">
                                <svg width="20" height="20" viewBox="0 0 24 24">
                                    <path d="M18 16.08c-.76 0-1.44.3-1.96.77L8.91 12.7c.05-.23.09-.46.09-.7s-.04-.47-.09-.7l7.05-4.11c.54.5 1.25.81 2.04.81 1.66 0 3-1.34 3-3s-1.34-3-3-3-3 1.34-3 3c0 .24.04.47.09.7L8.04 9.81C7.5 9.31 6.79 9 6 9c-1.66 0-3 1.34-3 3s1.34 3 3 3c.79 0 1.5-.31 2.04-.81l7.12 4.16c-.05.21-.08.43-.08.65 0 1.61 1.31 2.92 2.92 2.92s2.92-1.31 2.92-2.92c0-1.61-1.31-2.92-2.92-2.92z" fill="currentColor"/>
                                </svg>
                            </button>
                            <button class="action-btn">
                                <svg width="20" height="20" viewBox="0 0 24 24">
                                    <path d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z" fill="currentColor"/>
                                </svg>
                            </button>
                        </div>

                        <div class="deck-topic">
                            <div class="topic-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="#6B4EE6">
                                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"/>
                                </svg>
                            </div>
                            <span class="topic-text">Álgebra, Equações do 2º grau</span>
                        </div>
                    </div>
                    <!-- Repita o mesmo padrão para os outros cards -->

                    <!-- Card de Exemplo 3 -->
                    <div class="deck-card">
                        <div class="deck-header">
                            <h3 class="deck-title">Literatura</h3>
                            <span class="card-count">45 cards</span>
                        </div>
                        
                        <div class="deck-meta">
                            <span class="last-access">Último acesso: 02/04</span>
                            <div class="progress-bar">
                                <div class="progress" style="width: 75%"></div>
                            </div>
                        </div>

                        <div class="deck-actions">
                            <button class="action-btn">
                                <svg width="20" height="20" viewBox="0 0 24 24">
                                    <path d="M8 5v14l11-7z" fill="currentColor"/>
                                </svg>
                            </button>
                            <button class="action-btn">
                                <svg width="20" height="20" viewBox="0 0 24 24">
                                    <path d="M19 3H5C3.9 3 3 3.9 3 5v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2z" fill="currentColor"/>
                                </svg>
                            </button>
                            <button class="action-btn">
                                <svg width="20" height="20" viewBox="0 0 24 24">
                                    <path d="M12 22c1.1 0 2-.9 2-2h-4c0 1.1.9 2 2 2zm6-6v-5c0-3.07-1.63-5.64-4.5-6.32V4c0-.83-.67-1.5-1.5-1.5s-1.5.67-1.5 1.5v.68C7.64 5.36 6 7.92 6 11v5l-2 2v1h16v-1l-2-2zm-2 1H8v-6c0-2.48 1.51-4.5 4-4.5s4 2.02 4 4.5v6z" fill="currentColor"/>
                                </svg>
                            </button>
                            <button class="action-btn">
                                <svg width="20" height="20" viewBox="0 0 24 24">
                                    <path d="M18 16.08c-.76 0-1.44.3-1.96.77L8.91 12.7c.05-.23.09-.46.09-.7s-.04-.47-.09-.7l7.05-4.11c.54.5 1.25.81 2.04.81 1.66 0 3-1.34 3-3s-1.34-3-3-3-3 1.34-3 3c0 .24.04.47.09.7L8.04 9.81C7.5 9.31 6.79 9 6 9c-1.66 0-3 1.34-3 3s1.34 3 3 3c.79 0 1.5-.31 2.04-.81l7.12 4.16c-.05.21-.08.43-.08.65 0 1.61 1.31 2.92 2.92 2.92s2.92-1.31 2.92-2.92c0-1.61-1.31-2.92-2.92-2.92z" fill="currentColor"/>
                                </svg>
                            </button>
                            <button class="action-btn">
                                <svg width="20" height="20" viewBox="0 0 24 24">
                                    <path d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z" fill="currentColor"/>
                                </svg>
                            </button>
                        </div>

                        <div class="deck-topic">
                            <div class="topic-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="#6B4EE6">
                                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"/>
                                </svg>
                            </div>
                            <span class="topic-text">Trovadorismo e Barroco</span>
                        </div>
                    </div>
                    <!-- Repita o mesmo padrão para os outros cards -->

                    <!-- Card de Exemplo 4 -->
                    <div class="deck-card">
                        <div class="deck-header">
                            <h3 class="deck-title">História</h3>
                            <span class="card-count">20 cards</span>
                        </div>
                        
                        <div class="deck-meta">
                            <span class="last-access">Último acesso: 06/04</span>
                            <div class="progress-bar">
                                <div class="progress" style="width: 75%"></div>
                            </div>
                        </div>

                        <div class="deck-actions">
                            <button class="action-btn">
                                <svg width="20" height="20" viewBox="0 0 24 24">
                                    <path d="M8 5v14l11-7z" fill="currentColor"/>
                                </svg>
                            </button>
                            <button class="action-btn">
                                <svg width="20" height="20" viewBox="0 0 24 24">
                                    <path d="M19 3H5C3.9 3 3 3.9 3 5v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2z" fill="currentColor"/>
                                </svg>
                            </button>
                            <button class="action-btn">
                                <svg width="20" height="20" viewBox="0 0 24 24">
                                    <path d="M12 22c1.1 0 2-.9 2-2h-4c0 1.1.9 2 2 2zm6-6v-5c0-3.07-1.63-5.64-4.5-6.32V4c0-.83-.67-1.5-1.5-1.5s-1.5.67-1.5 1.5v.68C7.64 5.36 6 7.92 6 11v5l-2 2v1h16v-1l-2-2zm-2 1H8v-6c0-2.48 1.51-4.5 4-4.5s4 2.02 4 4.5v6z" fill="currentColor"/>
                                </svg>
                            </button>
                            <button class="action-btn">
                                <svg width="20" height="20" viewBox="0 0 24 24">
                                    <path d="M18 16.08c-.76 0-1.44.3-1.96.77L8.91 12.7c.05-.23.09-.46.09-.7s-.04-.47-.09-.7l7.05-4.11c.54.5 1.25.81 2.04.81 1.66 0 3-1.34 3-3s-1.34-3-3-3-3 1.34-3 3c0 .24.04.47.09.7L8.04 9.81C7.5 9.31 6.79 9 6 9c-1.66 0-3 1.34-3 3s1.34 3 3 3c.79 0 1.5-.31 2.04-.81l7.12 4.16c-.05.21-.08.43-.08.65 0 1.61 1.31 2.92 2.92 2.92s2.92-1.31 2.92-2.92c0-1.61-1.31-2.92-2.92-2.92z" fill="currentColor"/>
                                </svg>
                            </button>
                            <button class="action-btn">
                                <svg width="20" height="20" viewBox="0 0 24 24">
                                    <path d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z" fill="currentColor"/>
                                </svg>
                            </button>
                        </div>

                        <div class="deck-topic">
                            <div class="topic-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="#6B4EE6">
                                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"/>
                                </svg>
                            </div>
                            <span class="topic-text">Era Vargas e Ditadura</span>
                        </div>
                    </div>
                    <!-- Repita o mesmo padrão para os outros cards -->
                </div>
                </div>
            </div>

            <!-- Card da Direita -->
            <div class="feature-card right">
                <div class="card-content">
                    <h3>Seu Conhecimento em Cards, Sua Vitória nos Estudos!</h3>
                    <p>Monte Decks de estudo com facilidade: são como baralhos de cartas, as perguntas e respostas que você precisa.</p>
                    <p class="segunda-frase">Organize seus Decks por matéria e acesse tudo num piscar de olhos. Pronto? Agora escolha como quer aprender: teste seus limites com Simulados, veja o que sabe com Quizzes rápidos ou revise com Flashcards espertos. Aprender e jogar, tudo junto!</p>
                </div>
            </div>
        </div>

        <!-- Ícones Laterais -->
        <div class="side-icons">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-1.svg" alt="Ícone 1">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-2.svg" alt="Ícone 2">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-3.svg" alt="Ícone 3">
        </div>

        <!-- Nuvem -->
        <div class="cloud-container">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cloud-how-it-works.svg" alt="Nuvem">
        </div>

        <!-- Astronauta -->
        <div class="astronaut-container">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/astronaut-how-it-works.svg" alt="Astronauta">
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
    <!--<h2>Aprendizado Inteligente com a Repetição Espaçada</h2>-->
    <div class="spaced-study-container">
        <div class="spaced-study-header">
            <h2>Aprendizado Inteligente com a Repetição Espaçada</h2>
            <svg class="icone-amarelo" xmlns="http://www.w3.org/2000/svg" width="145" height="25" viewBox="0 0 145 25" fill="none">
                <path d="M1.00016 15.2711C18.1407 8.34427 70.832 -1.93441 144.473 12.3652" stroke="currentcolor" stroke-width="4"/>
                <path d="M26.2943 14.0041C38.9177 9.44643 77.3772 3.50055 130.227 16.1786" stroke="currentcolor" stroke-width="2"/>
            </svg>
        </div>
            <div class="spaced-study-wrapper">
                <div class="spaced-study-content">
                
                    <p class="study-description">
                    Um estudo da Universidade Federal de São Carlos (UFSCar) revela que a
                    repetição espaçada é uma técnica fundamental para combater o esquecimento e
                    promover a retenção de conhecimento a longo prazo.
                    </p>
                </div>
                
                <div class="spaced-study-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/astronaut-reading.svg"
                        alt="Astronauta estudando">
                </div>
            </div>
            <div class="spaced-study-footer">
                <blockquote class="study-quote">
                    <p>"A repetição espaçada (spaced repetition – SR) é uma técnica de estudos baseada em evidências científicas que visa memorização e manutenção a longo prazo das informações aprendidas."</p>
                    <cite>(NASCIMENTO, 2023 - UFSCar)</cite>
                </blockquote>
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