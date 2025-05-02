<?php
/**
 * Template Name: Página de Contato
 */

get_header(); ?>

<div class="contact-page">
    <section class="contact-info">
        <h1>Entre em Contato</h1>
        <p>Se você tiver alguma dúvida ou precisar de mais informações, sinta-se à vontade para nos contatar.</p>
        <ul>
            <li>Email: contato@portaleducacional.com</li>
            <li>Telefone: (11) 1234-5678</li>
            <li>Endereço: Rua Exemplo, 123 - São Paulo, SP</li>
        </ul>
    </section>

    <section class="contact-form">
        <h2>Formulário de Contato</h2>
        <form action="#" method="post">
            <label for="name">Nome:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Mensagem:</label>
            <textarea id="message" name="message" required></textarea>

            <button type="submit">Enviar</button>
        </form>
    </section>
</div>

<?php get_footer(); ?>