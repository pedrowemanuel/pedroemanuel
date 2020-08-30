<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surpresa amor</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div id="login">
            <div class="box1">
                <div class="box-texto">
                    <h3>Login</h3>
                    <p>Qual o melhor suco da face da terra kk? </p>
                    <input type="text" id="resposta" placeholder="Digita aqui neném: "/>
                    <button onclick="login()">Entrar</button>
                </div>
            </div>
            <div class="box2">
                <img src="img/squirtle.png" class="img-right" alt="">
            </div>
        </div>
        <div class="box3" style="display: none;">
            <div class="box1">
                <div class="box-texto">
                    <p class="texto-baixo">Olá amor ❤️. Tá escrito errado de propósito kk, queria vários beijos. Esse mês foi incrível e quanto mais o tempo passou mais eu fiquei feliz e apaixonado por você.</p>
                    <button onclick="trocarDePagina(4)">Próximo</button>
                </div>
            </div>
            <div class="box2">
                <img src="img/i4.png" class="img-right" alt="">
            </div>
        </div>
        <div class="box4" style="display: none;">
            <div class="box1">
                <div class="box-texto">
                    <p class="texto-baixo"> Você é uma namorada maravilhosa, dedicada, fofa, preocupada ...</p>
                    <button onclick="trocarDePagina(5)">Próximo</button>
                </div>
            </div>
            <div class="box2">
                <img src="img/i5.png" class="img-right" alt="">
            </div>
        </div>
        <div class="box5" style="display: none;">
            <div class="box1">
                <div class="box-texto">
                    <p class="texto-baixo"> Carinhosa, gostosa, safada, linda para crl, divertida, enfim, tudo de bom.</p>
                    <button onclick="trocarDePagina(6)">Próximo</button>
                </div>
            </div>
            <div class="box2">
                <img src="img/i2.png" class="img-right" alt="">
            </div>
        </div>
        <div class="box6" style="display: none;">
            <div class="box1">
                <div class="box-texto">
                    <p class="texto-baixo"> Olha que mulher linda. Eu não aguento...</p>
                    <button onclick="trocarDePagina(7)">Próximo</button>
                </div>
            </div>
            <div class="box2">
                <img src="img/i10.jpeg" class="img-right img-pequena" alt="">
            </div>
        </div>
        <div class="box7" style="display: none;">
            <div class="box1">
                <div class="box-texto">
                    <p class="texto-baixo"> Não quero que acabe. Quero que a gente fique junto. Cresça junto. Vou te fazer feliz e te dar todo o amor que você merece.</p>

       <h3>Beijos amor da minha 😘❤️</h3>
</div>
            </div>
            <div class="box2">
                <img src="img/i3.png" class="img-right" alt="">
            </div>
        </div>
    </div>

    <script src="jquery.min.js"></script>
    <script>
        function login() {
            if ($("#resposta").val()  == "Maracuja") {
                setTimeout(() => {
                    $("#login").fadeOut("slow");
                }, 500);

                setTimeout(() => {
                    $(".box3").show("slow");
                }, 2000);
            }else {
                alert("Errou me deve um beijo..");
            }
        }

        function trocarDePagina(numero) {
            
            setTimeout(() => {
                $(".box"+(numero-1)).fadeOut("slow");
            }, 500);

            setTimeout(() => {
                $(".box"+numero).show("slow");
            }, 2000);
            
        }
    </script>
</body>
</html>
