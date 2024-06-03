<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Menu de Multiplas Seleções </title>

        <!-- CSS -->
        <link rel="stylesheet" href="styles/materias.css">
        <link rel="stylesheet" href="styles/style.css">

        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
                                
        <!-- Fontawesome CDN Link -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
        
    </head>
    <style>
        body{
    background:#f9f9f9;
    background-position-x: center;
    background-size: cover;
    background-attachment: fixed;
    
}
    </style>
    <body>
    <nav class="sidebar">
    <header>
        <div class="image-text">
            <span class="image">
                <img src="imagens/logo.png" alt="logo">
            </span>

            <div class="text header-text">
                <span class="name">UniStudy</span>
                <span class="profession">Amigo dos vestibulandos</span>
            </div>
        </div>

        <i class="bx bx-chevron-right toggle"></i>
    </header>

    <div class="menu-bar">
        <div class="menu">
          <ul class="menu-links">
            <br>
            <li class="nav-link">
                <a href="inicio.php">
                    <i class='bx bx-home icon'></i>
                    <span class="text nav-text">Inicio</span>
                </a>            
            </li>
        
            <li class="nav-link">
                <a href="cronograma.php">
                    <i class='bx bx-calendar icon'></i>
                 <span class="text nav-text">Cronograma</span>
                </a>            
            </li>
            <li class="nav-link">
                <a href="#">
                    <i class='bx bx-list-check icon' ></i>
                 <span class="text nav-text">Check-list</span>
                </a>            
            </li>
            <li class="nav-link">
                <a href="#">
                    <i class='bx bx-book-content icon'></i>
                 <span class="text nav-text">Material de estudo</span>
                </a>            
            </li>
         </ul>
        </div>
    </div>
    <div class="bottom-content">
        <li class="">
            <a href="#">
                <i class="bx bx-log-out icon" ></i>
                <span class="text nav-text">Sair</span>
            </a>
        </li>
        
 </nav>
 <script src="js/scriptnavbar.js"></script>

        <div class="container-wrapper">
        <div class="container"  data-subject="Português">
            <div class="select-btn">
                <span class="btn-text">Português</span>
                <span class="arrow-dwn">
                    <i class="fa-solid fa-chevron-down"></i>
                </span>
            </div>

            <ul class="list-items">
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Gramática</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Acentuação</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Teocentrismo</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Trovadorismo</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Humanismo</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Modernismo</span>
                </li>
            </ul>
        </div> 

        <div class="container"  data-subject="Matemática">
            <div class="select-btn">
                <span class="btn-text">Matemática</span>
                <span class="arrow-dwn">
                    <i class="fa-solid fa-chevron-down"></i>
                </span>
            </div>
    
            <ul class="list-items">
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Gramática</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Acentuação</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Teocentrismo</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Trovadorismo</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Humanismo</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Modernismo</span>
                </li>
            </ul>
        </div>

        <div class="container" data-subject="História">
            <div class="select-btn">
                <span class="btn-text">História</span>
                <span class="arrow-dwn">
                    <i class="fa-solid fa-chevron-down"></i>
                </span>
            </div>
    
            <ul class="list-items">
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Gramática</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Acentuação</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Teocentrismo</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Trovadorismo</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Humanismo</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Modernismo</span>
                </li>
            </ul>
        </div>

        <div class="container" data-subject="Biologia">
            <div class="select-btn">
                <span class="btn-text">Biologia</span>
                <span class="arrow-dwn">
                    <i class="fa-solid fa-chevron-down"></i>
                </span>
            </div>
    
            <ul class="list-items">
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Gramática</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Acentuação</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Teocentrismo</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Trovadorismo</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Humanismo</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Modernismo</span>
                </li>
            </ul>
        </div>

        <div class="container" data-subject="Química">
            <div class="select-btn">
                <span class="btn-text">Química</span>
                <span class="arrow-dwn">
                    <i class="fa-solid fa-chevron-down"></i>
                </span>
            </div>
    
            <ul class="list-items">
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Gramática</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Acentuação</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Teocentrismo</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Trovadorismo</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Humanismo</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Modernismo</span>
                </li>
            </ul>
        </div>
    
    

    <div class="container" data-subject="Geografia">
        <div class="select-btn">
            <span class="btn-text">Geografia</span>
            <span class="arrow-dwn">
                <i class="fa-solid fa-chevron-down"></i>
            </span>
        </div>

        <ul class="list-items">
            <li class="item">
                <span class="checkbox">
                    <i class="fa-solid fa-check check-icon"></i>
                </span>
                <span class="item-text">Gramática</span>
            </li>
            <li class="item">
                <span class="checkbox">
                    <i class="fa-solid fa-check check-icon"></i>
                </span>
                <span class="item-text">Acentuação</span>
            </li>
            <li class="item">
                <span class="checkbox">
                    <i class="fa-solid fa-check check-icon"></i>
                </span>
                <span class="item-text">Teocentrismo</span>
            </li>
            <li class="item">
                <span class="checkbox">
                    <i class="fa-solid fa-check check-icon"></i>
                </span>
                <span class="item-text">Trovadorismo</span>
            </li>
            <li class="item">
                <span class="checkbox">
                    <i class="fa-solid fa-check check-icon"></i>
                </span>
                <span class="item-text">Humanismo</span>
            </li>
            <li class="item">
                <span class="checkbox">
                    <i class="fa-solid fa-check check-icon"></i>
                </span>
                <span class="item-text">Modernismo</span>
            </li>
        </ul>
    </div>



<div class="container" data-subject="Filosofia">
    <div class="select-btn">
        <span class="btn-text">Filosofia</span>
        <span class="arrow-dwn">
            <i class="fa-solid fa-chevron-down"></i>
        </span>
    </div>

    <ul class="list-items">
        <li class="item">
            <span class="checkbox">
                <i class="fa-solid fa-check check-icon"></i>
            </span>
            <span class="item-text">Gramática</span>
        </li>
        <li class="item">
            <span class="checkbox">
                <i class="fa-solid fa-check check-icon"></i>
            </span>
            <span class="item-text">Acentuação</span>
        </li>
        <li class="item">
            <span class="checkbox">
                <i class="fa-solid fa-check check-icon"></i>
            </span>
            <span class="item-text">Teocentrismo</span>
        </li>
        <li class="item">
            <span class="checkbox">
                <i class="fa-solid fa-check check-icon"></i>
            </span>
            <span class="item-text">Trovadorismo</span>
        </li>
        <li class="item">
            <span class="checkbox">
                <i class="fa-solid fa-check check-icon"></i>
            </span>
            <span class="item-text">Humanismo</span>
        </li>
        <li class="item">
            <span class="checkbox">
                <i class="fa-solid fa-check check-icon"></i>
            </span>
            <span class="item-text">Modernismo</span>
        </li>
    </ul>
</div>

<div class="container" data-subject="Literatura">
    <div class="select-btn">
        <span class="btn-text">Literatura</span>
        <span class="arrow-dwn">
            <i class="fa-solid fa-chevron-down"></i>
        </span>
    </div>

    <ul class="list-items">
        <li class="item">
            <span class="checkbox">
                <i class="fa-solid fa-check check-icon"></i>
            </span>
            <span class="item-text">Gramática</span>
        </li>
        <li class="item">
            <span class="checkbox">
                <i class="fa-solid fa-check check-icon"></i>
            </span>
            <span class="item-text">Acentuação</span>
        </li>
        <li class="item">
            <span class="checkbox">
                <i class="fa-solid fa-check check-icon"></i>
            </span>
            <span class="item-text">Teocentrismo</span>
        </li>
        <li class="item">
            <span class="checkbox">
                <i class="fa-solid fa-check check-icon"></i>
            </span>
            <span class="item-text">Trovadorismo</span>
        </li>
        <li class="item">
            <span class="checkbox">
                <i class="fa-solid fa-check check-icon"></i>
            </span>
            <span class="item-text">Humanismo</span>
        </li>
        <li class="item">
            <span class="checkbox">
                <i class="fa-solid fa-check check-icon"></i>
            </span>
            <span class="item-text">Modernismo</span>
        </li>
    </ul>
</div>

<div class="container" data-subject="Física">
    <div class="select-btn">
        <span class="btn-text">Física</span>
        <span class="arrow-dwn">
            <i class="fa-solid fa-chevron-down"></i>
        </span>
    </div>

    <ul class="list-items">
        <li class="item">
            <span class="checkbox">
                <i class="fa-solid fa-check check-icon"></i>
            </span>
            <span class="item-text">Gramática</span>
        </li>
        <li class="item">
            <span class="checkbox">
                <i class="fa-solid fa-check check-icon"></i>
            </span>
            <span class="item-text">Acentuação</span>
        </li>
        <li class="item">
            <span class="checkbox">
                <i class="fa-solid fa-check check-icon"></i>
            </span>
            <span class="item-text">Teocentrismo</span>
        </li>
        <li class="item">
            <span class="checkbox">
                <i class="fa-solid fa-check check-icon"></i>
            </span>
            <span class="item-text">Trovadorismo</span>
        </li>
        <li class="item">
            <span class="checkbox">
                <i class="fa-solid fa-check check-icon"></i>
            </span>
            <span class="item-text">Humanismo</span>
        </li>
        <li class="item">
            <span class="checkbox">
                <i class="fa-solid fa-check check-icon"></i>
            </span>
            <span class="item-text">Modernismo</span>
        </li>
    </ul>
</div>

<div class="container" data-subject="Sociologia">
    <div class="select-btn">
        <span class="btn-text">Sociologia</span>
        <span class="arrow-dwn">
            <i class="fa-solid fa-chevron-down"></i>
        </span>
    </div>

    <ul class="list-items">
        <li class="item">
            <span class="checkbox">
                <i class="fa-solid fa-check check-icon"></i>
            </span>
            <span class="item-text">Gramática</span>
        </li>
        <li class="item">
            <span class="checkbox">
                <i class="fa-solid fa-check check-icon"></i>
            </span>
            <span class="item-text">Acentuação</span>
        </li>
        <li class="item">
            <span class="checkbox">
                <i class="fa-solid fa-check check-icon"></i>
            </span>
            <span class="item-text">Teocentrismo</span>
        </li>
        <li class="item">
            <span class="checkbox">
                <i class="fa-solid fa-check check-icon"></i>
            </span>
            <span class="item-text">Trovadorismo</span>
        </li>
        <li class="item">
            <span class="checkbox">
                <i class="fa-solid fa-check check-icon"></i>
            </span>
            <span class="item-text">Humanismo</span>
        </li>
        <li class="item">
            <span class="checkbox">
                <i class="fa-solid fa-check check-icon"></i>
            </span>
            <span class="item-text">Modernismo</span>
        </li>
    </ul>
</div>

<div class="container" data-subject="Lingua Estrangeira">
    <div class="select-btn">
        <span class="btn-text">Lingua Estrangeira</span>
        <span class="arrow-dwn">
            <i class="fa-solid fa-chevron-down"></i>
        </span>
    </div>

    <ul class="list-items">
        <li class="item">
            <span class="checkbox">
                <i class="fa-solid fa-check check-icon"></i>
            </span>
            <span class="item-text">Gramática</span>
        </li>
        <li class="item">
            <span class="checkbox">
                <i class="fa-solid fa-check check-icon"></i>
            </span>
            <span class="item-text">Acentuação</span>
        </li>
        <li class="item">
            <span class="checkbox">
                <i class="fa-solid fa-check check-icon"></i>
            </span>
            <span class="item-text">Teocentrismo</span>
        </li>
        <li class="item">
            <span class="checkbox">
                <i class="fa-solid fa-check check-icon"></i>
            </span>
            <span class="item-text">Trovadorismo</span>
        </li>
        <li class="item">
            <span class="checkbox">
                <i class="fa-solid fa-check check-icon"></i>
            </span>
            <span class="item-text">Humanismo</span>
        </li>
        <li class="item">
            <span class="checkbox">
                <i class="fa-solid fa-check check-icon"></i>
            </span>
            <span class="item-text">Modernismo</span>
        </li>
    </ul>
</div>

<div class="container" data-subject="Artes">
    <div class="select-btn">
        <span class="btn-text">Artes</span>
        <span class="arrow-dwn">
            <i class="fa-solid fa-chevron-down"></i>
        </span>
    </div>

    <ul class="list-items">
        <li class="item">
            <span class="checkbox">
                <i class="fa-solid fa-check check-icon"></i>
            </span>
            <span class="item-text">Gramática</span>
        </li>
        <li class="item">
            <span class="checkbox">
                <i class="fa-solid fa-check check-icon"></i>
            </span>
            <span class="item-text">Acentuação</span>
        </li>
        <li class="item">
            <span class="checkbox">
                <i class="fa-solid fa-check check-icon"></i>
            </span>
            <span class="item-text">Teocentrismo</span>
        </li>
        <li class="item">
            <span class="checkbox">
                <i class="fa-solid fa-check check-icon"></i>
            </span>
            <span class="item-text">Trovadorismo</span>
        </li>
        <li class="item">
            <span class="checkbox">
                <i class="fa-solid fa-check check-icon"></i>
            </span>
            <span class="item-text">Humanismo</span>
        </li>
        <li class="item">
            <span class="checkbox">
                <i class="fa-solid fa-check check-icon"></i>
            </span>
            <span class="item-text">Modernismo</span>
        </li>
    </ul>
</div>

<div class="container" data-subject="Física">
    <div class="select-btn">
        <span class="btn-text">Física</span>
        <span class="arrow-dwn">
            <i class="fa-solid fa-chevron-down"></i>
        </span>
    </div>

    <ul class="list-items">
        <li class="item">
            <span class="checkbox">
                <i class="fa-solid fa-check check-icon"></i>
            </span>
            <span class="item-text">Gramática</span>
        </li>
        <li class="item">
            <span class="checkbox">
                <i class="fa-solid fa-check check-icon"></i>
            </span>
            <span class="item-text">Acentuação</span>
        </li>
        <li class="item">
            <span class="checkbox">
                <i class="fa-solid fa-check check-icon"></i>
            </span>
            <span class="item-text">Teocentrismo</span>
        </li>
        <li class="item">
            <span class="checkbox">
                <i class="fa-solid fa-check check-icon"></i>
            </span>
            <span class="item-text">Trovadorismo</span>
        </li>
        <li class="item">
            <span class="checkbox">
                <i class="fa-solid fa-check check-icon"></i>
            </span>
            <span class="item-text">Humanismo</span>
        </li>
        <li class="item">
            <span class="checkbox">
                <i class="fa-solid fa-check check-icon"></i>
            </span>
            <span class="item-text">Modernismo</span>
        </li>
    </ul>
</div>
</div>


        <!-- JavaScript -->
        <script src="js/materias.script.js"></script>
    </body>
</html>