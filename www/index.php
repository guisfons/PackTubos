<?php
    $title = Home; 
    include 'header.php';
?>
    <main class="main main__home">
        <section class="main__slider">
            <div class="main__slider-slides">
                <img src="assets/img/slide-1.png" alt="Slide 1">
                <img src="assets/img/slide-1.png" alt="Slide 1">
            </div>
            <a class="main__link" href="#empresa">
                <img src="assets/img/down_arrow.svg" alt="Sessão 'A Empresa'">
            </a>
        </section>
        <section id="empresa">
            <div class="divisor divisor--big">
                <h2>A EMPRESA</h2>
            </div>
            <div class="wrapper">
                <article>
                    <p>Há 19 anos nos especializamos na fabricação e comercialização de tubos de papelão espirais.
                        A dedicação diária de nossos colaboradores nos permitiu conquistar a confiança dos clientes e parceiros em todo o Brasil.
                        Contamos com profissionais que garantem alta qualidade dos produtos, alem de uma eficiente e arrojada infraestrutura.
                    </p>
                    <p>
                        Temos como foco o atendimento e exigência dos clientes associados a constante preocupação com a qualidade (melhoria contínua).
                        Dispomos de procedimentos muito rígidos, desde a recepção da matéria prima até a expedição do produto acabado.
                    </p>
                </article>
            </div>
        </section>
    </main>
<?php include 'footer.php';?>