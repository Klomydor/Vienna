<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/style.css">
       
        <meta charset="utf-8">
   
    </head>
    <body>
        <div class="grid">
            <div class="col fejlec">
              
            </div>
          
            <div class="col tartalom">
              <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                  <a class="navbar-brand" href="#">BackWall</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Profilom</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Beállítás</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Keresés</a>
                      </li>
                    </ul>
                    <span class="logout" id="logout">
                      <a id="kilepes" onclick="kidob()">Kijelentkezés</a>
                    </span>
                  </div>
                </div>
              </nav>
              <form id="blog" class="blog" method="POST" action="" name="bejegyez">
                <p class="bejegyir">Bejegyzés írása</p>
                <textarea class="szovegmezo" id="szovegmezo" name="szovegmezo"></textarea>
                
                <button type="submit" class="btn btn-primary gomb gap-2" >Hozzáadás</button>
                <p class="kihagy">-</p>

              </form>
              <div class="kommentdoboz">
                <br>
                <?php 
                include 'teszt.php';
                 ?> 
                 <br>   
              </div>
                                          
            </div>
            <div class="col lablec">
              <ul>
                <li>
                  <a href="">Adatvédelmi tájékoztató</a>
                </li>
                <li>
                  <a href="">Elérhetőség</a>
                </li>
                <li>
                  <a href="">Segítség</a>
                </li>
              </ul>
            </div>
        </div>
        <script type="text/javascript" src="js/script.js"></script>

  
      

    </body>
</html>

