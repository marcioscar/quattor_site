<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="w3.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700&display=swap" rel="stylesheet">
    <script src="script.js"></script>
    <?php include("conecta.php"); ?>
    <?php include("grade.php"); ?>
    <title>Quattor Academia</title>
</head>
<body>
    <header>
        <div class="logo">
            <img src="img/logo branco.png" alt="logo">
        </div>
        <section class="hero">
            <img src="img/fundo_novo.jpg" alt="fundo">
        </section>
    </header>

    <main>
        <section class="principal">
                <h4>QUATTOR ACADEMIA</h4>  
                <p>Rua 5 Sul Lote 7 Bl. B - Araucárias</p>
                <p>Águas Claras - DF</p>
                <p>(61) 3965-7444 - (61) 99319-0568</p> 
        </section>
        <section class="funcionamento">
            <div class="dias">
                <p>SEG  - SEX</p>
                <p>SAB</p>
                <p>DOM - FER</p>
            </div>
            <div class="horas">
                <p>6:00h  - 22:00h</p>
                <p>8h-12h / 15h-19h</p>
                <p>8:00h  - 12:00h</p>
            </div>
            <div class="contato">
                <!--Modal do formulario -->
         <div class="w3-container">
                <button onclick="document.getElementById('id01').style.display='block'" 		
                class="button button2">Fale Conosco</button>
                <div id="id01" class="w3-modal">
                <div class="w3-modal-content w3-animate-top w3-card-4">
                    <header class="w3-container w3-green"> 
                        <span onclick="document.getElementById('id01').style.display='none'" 
                        class="w3-button w3-display-topright">&times;</span>
                    </header>
                    <div class="w3-container">
                        <iframe class="airtable-embed" src="https://airtable.com/embed/shrXMwKtVm0tyNNzM?backgroundColor=tealLight" 
                    frameborder="0" onmousewheel="" width="100%" height="533" style="background: transparent; border: 1px solid #ccc;"></iframe>
                </div>
                </div>
                </div>
            </div>
                        
                        <!--fim-->
            </div>
        </section>
        <section class="metodo">
                <h4>MÉTODO QUATTOR</h4> 
                <p>Método com treinamento de musculação, 
                    que envolve no mesmo programa exercícios para força, 
                    e o trabalho de outras valências musculares: 
                    Coordenação Motora e Resistência.</p>
                <h4>DINÂMICO</h4>
                <p>Os programas são atualizados semanalmente</p> 
                <h4>EFICAZ</h4>
                <p>Na sala de musculação, 
                    estarão os líderes, capacitados para orientar não somente 
                    sobre os treinos como também condutas e posturas no dia-a-dia.</p> 
        </section>
        <section class="aulas">
            <h4>AULAS</h4>
            <img src="img/aula_novo.jpg" alt="aula">
            <div class="texto_aulas">
                    <p>São diversas aulas como spinning, Lutas, 
                            Ballet, Pilates Solo, Abdominal, Natação, GAP, Gestante e Muito mais.</p>
              <!--Modal do formulario -->
            <div class="w3-container">
                <button onclick="document.getElementById('id02').style.display='block'" 		
                class="button button2">Experimente</button>
                <div id="id02" class="w3-modal">
                <div class="w3-modal-content w3-animate-top w3-card-4">
                    <header class="w3-container w3-green"> 
                        <span onclick="document.getElementById('id02').style.display='none'" 
                        class="w3-button w3-display-topright">&times;</span>
                    </header>
                    <div class="w3-container">
                            <iframe class="airtable-embed" src="https://airtable.com/embed/shrT9932sJEgWp8Un?backgroundColor=tealLight" 
                            frameborder="0" onmousewheel="" width="100%" height="533" style="background: transparent; border: 1px solid #ccc;"></iframe>
                </div>
                </div>
                </div>
            </div>       
             <!--fim-->
            </div>
            <div class="tabela">
                    <h4>Próximas Aulas</h4>
                    <div class="grid">
                            <span>
                                <strong>Aula</strong>
                            </span>
                            <span>
                                <strong>Hora</strong>
                            </span>
                            <?php
                                $aulas = listaAulasGinastica($conexao);
                                foreach($aulas as $aula):
                                $hora = date_create($aula['hora']);
                            ?>
                              <span><?=$aula['aula']?></span>
                              <span><?=date_format($hora, 'H:i');?></span>
                          <?php endforeach  ?>
                        </div>
                </div>
            <section class="grade">    
                
            <!-- <h4>Grade de Aulas</h4>
            <!-- <h4 class="titulo_grade">Grade de Aulas</h4> -->
            <img src=img/grade.jpg alt="grade_imagem">
            <div class="bar">
                <button class="button1 button2" onclick="diaGrade('segunda')">SEG</button>                
                    <button class="button1 button2" onclick="diaGrade('terca')">TER</button>                
                    <button class="button1 button2" onclick="diaGrade('quarta')">QUA</button>                
                    <button class="button1 button2" onclick="diaGrade('quinta')">QUI</button>                
                    <button class="button1 button2" onclick="diaGrade('sexta')">SEX</button>                
                    <button class="button1 button2" onclick="diaGrade('sabado')">SAB</button>                   
            </div>
            <!-- <div class="w3-bar w3-white">
                <button class="w3-bar-item w3-button" onclick="diaGrade('segunda')">SEG</button>
                <button class="w3-bar-item w3-button" onclick="diaGrade('terca')">TER</button>
                <button class="w3-bar-item w3-button" onclick="diaGrade('quarta')">QUA</button>
                <button class="w3-bar-item w3-button" onclick="diaGrade('quinta')">QUI</button>
                <button class="w3-bar-item w3-button" onclick="diaGrade('sexta')">SEX</button>
                <button class="w3-bar-item w3-button" onclick="diaGrade('sabado')">SAB</button>
            </div>   -->
            <div id="segunda" class="w3-container dia" >
                <h4>Segunda</h4>
                    <div class="grid">
                        <span>
                            <strong>Aula</strong>
                        </span>
                        <span>
                            <strong>Hora</strong>
                        </span>
                        <?php
                            $aulas = listaAulasDia($conexao,1);
                            foreach($aulas as $aula):
                            $hora = date_create($aula['hora']);
                        ?>
                            <span><?=$aula['aula']?></span>
                            <span><?=date_format($hora, 'H:i');?></span>
                        <?php endforeach  ?>
                    </div>
            </div>

            <div id="terca" class="w3-container dia" style="display:none">
                <h4>Terça-Feira</h4>
                    <div class="grid">
                        <span>
                            <strong>Aula</strong>
                        </span>
                        <span>
                            <strong>Hora</strong>
                        </span>
                        <?php
                            $aulas = listaAulasDia($conexao,2);
                            foreach($aulas as $aula):
                            $hora = date_create($aula['hora']);
                        ?>
                            <span><?=$aula['aula']?></span>
                            <span><?=date_format($hora, 'H:i');?></span>
                        <?php endforeach  ?>
                    </div>
            </div>
            <div id="quarta" class="w3-container dia" style="display:none">
                <h4>Quarta-Feira</h4>
                    <div class="grid">
                        <span>
                            <strong>Aula</strong>
                        </span>
                        <span>
                            <strong>Hora</strong>
                        </span>
                        <?php
                            $aulas = listaAulasDia($conexao,3);
                            foreach($aulas as $aula):
                            $hora = date_create($aula['hora']);
                        ?>
                            <span><?=$aula['aula']?></span>
                            <span><?=date_format($hora, 'H:i');?></span>
                        <?php endforeach  ?>
                    </div>
            </div>

            <div id="quinta" class="w3-container dia" style="display:none">
                <h4>Quinta-Feira</h4>
                    <div class="grid">
                        <span>
                            <strong>Aula</strong>
                        </span>
                        <span>
                            <strong>Hora</strong>
                        </span>
                        <?php
                            $aulas = listaAulasDia($conexao,4);
                            foreach($aulas as $aula):
                            $hora = date_create($aula['hora']);
                        ?>
                            <span><?=$aula['aula']?></span>
                            <span><?=date_format($hora, 'H:i');?></span>
                        <?php endforeach  ?>
                    </div>
            </div>

            <div id="sexta" class="w3-container dia" style="display:none">
                <h4>Sexta-Feira</h4>
                    <div class="grid">
                        <span>
                            <strong>Aula</strong>
                        </span>
                        <span>
                            <strong>Hora</strong>
                        </span>
                        <?php
                            $aulas = listaAulasDia($conexao,5);
                            foreach($aulas as $aula):
                            $hora = date_create($aula['hora']);
                        ?>
                            <span><?=$aula['aula']?></span>
                            <span><?=date_format($hora, 'H:i');?></span>
                        <?php endforeach  ?>
                    </div>
            </div>
            
            <div id="sabado" class="w3-container dia" style="display:none">
                <h4>Sábado</h4>
                    <div class="grid">
                        <span>
                            <strong>Aula</strong>
                        </span>
                        <span>
                            <strong>Hora</strong>
                        </span>
                        <?php
                            $aulas = listaAulasDia($conexao,6);
                            foreach($aulas as $aula):
                            $hora = date_create($aula['hora']);
                        ?>
                            <span><?=$aula['aula']?></span>
                            <span><?=date_format($hora, 'H:i');?></span>
                        <?php endforeach  ?>
                    </div>
            </div>

        </section>
        </section>
        <section class="prime">
            <h1>QUATTOR PRIME</h1>
            <img src="img/prime.jpg" alt="prime">
            <p>Conta com uma equipe de profissionais altamente qualificados, 
                com a missão de proporcionar um atendimento diferenciado e uma experiência única e inovadora.
            </p>
            <h4>TREINOS INDIVIDUALIZADOS</h4>
            <P>Com treinos individualizados para todos e também para idosos, pessoas com problemas 
                de saúde como diabete, obesidade, hérnias, osteoporose, fibromialgia, entre outros, 
                e com trabalho em conjunto quando necessário de fisioterapeuta e/ou médicos para garantir a segurança e acelerar o processo de recuperação, a quattor prime visa resultados. 
                A Quattor Prime está pronta para receber você e lhe ajudar a atingir seus objetivos!!
            </P>
        </section>

    </main>

</body>
</html>