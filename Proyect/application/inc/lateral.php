<nav class="col-md-2 d-none d-md-block bg-light sidebar">
            <div class="sidebar-sticky">
                <ul class="nav flex-column mb-2">
	                <?php
		                
		                require('config.php');
		                //session_start();
                        switch ($_SESSION["user_rol"]) {
                        	//Administrador
                        	case 1:
                        		echo "<li class='nav-item'><a class='nav-link' href='#Convocatorias' pagina='Convocatorias' onclick='loadPage(this)'>Convocatorias</a></li>
                        		<li class='nav-item'><a class='nav-link' href='#Evaluadores' pagina='Evaluadores' onclick='loadPage(this)'>Evaluadores</a></li>
                        		<li class='nav-item'><a class='nav-link' href='#Proyectos' pagina='Proyectos' onclick='loadPage(this)'>Proyectos</a></li>
                        		<li class='nav-item'><a class='nav-link' href='#Perfil' pagina='Perfil' onclick='loadPage(this)'>Perfil</a></li>
                        		<li class='nav-item'><a class='nav-link' href='/application/salir.php'>Salir</a></li>";
                        		break;
                        	//Evaluadores
                        	case 2:
                        		echo "<li class='nav-item'><a class='nav-link' href='#Convocatorias' pagina='Convocatorias' onclick='loadPageEvaluadores(this)'>Convocatorias</a></li>
                        		<li class='nav-item'><a class='nav-link' href='#Evaluadores' pagina='Evaluadores' onclick='loadPage(this)'>Evaluadores</a></li>
                        		<li class='nav-item'><a class='nav-link' href='#Proyectos' pagina='Proyectos' onclick='loadPage(this)'>Proyectos</a></li>
                        		<li class='nav-item'><a class='nav-link' href='#Perfil' pagina='Perfil' onclick='loadPage(this)'>Perfil</a></li>
                        		<li class='nav-item'><a class='nav-link' href='/application/salir.php'>Salir</a></li>";
                        		break;
                        	//Participante dentro del sistema
                        	case 3:
                        		echo "<li class='nav-item'><a class='nav-link' href='#Convocatorias' pagina='Convocatorias' onclick='loadPage(this)'>Convocatorias</a></li>
                        		<li class='nav-item'><a class='nav-link' href='#Proyectos' pagina='Proyectos' onclick='loadPage(this)'>Proyectos</a></li>
                        		<li class='nav-item'><a class='nav-link' href='#Perfil' pagina='Perfil' onclick='loadPage(this)'>Perfil</a></li>
                        		<li class='nav-item'><a class='nav-link' href='/application/salir.php'>Salir</a></li>";
                        		break;
                        }
                    ?>
                </ul>
            </div>
        </nav>