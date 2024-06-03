<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>UniStudy</title>
        <link rel="stylesheet" href="styles/style.css">  
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    
     
    </head>
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
                <a href="#">
                    <i class='bx bx-calendar icon'></i>
                 <span class="text nav-text">Cronograma</span>
                </a>            
            </li>
            <li class="nav-link">
                <a href="materias.php">
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

 <body>
    <center>
    <main class="table">
        <section class="table_header">
            <h1>Cronograma</h1>
        </section>
        <section class="table_body">
            <table>
                <thead>
                    <tr>
                        <th></th>
             <th>Segunda</th>
             <th>Terça</th>
             <th>Quarta</th>
             <th>Quinta</th>
             <th>Sexta</th>
              </tr>
            </thead>
            <tbody>
              <tr class="backgroud-color: white ;">
                <td>Manhã</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
      
              </tr>      
              <tr class="table-primary">
                <td>Tarde</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
               
              </tr>
             
              <tr class="table-danger">
                <td>Noite</td> 
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
      
              </tr>
              <tr class="table-info">
                <td>Extra</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                    </tr>
                </thead>
            </table>
        </section>
    </main></center>
 </body>
</body>
</html>