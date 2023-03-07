<div class="sidebar" data-color="red">
    <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
            <?php if ($_SESSION['nav'] == 'inicio') {
            ?>
                <li class="active">
                    <a href="inicio.php">
                        <i class="fa-solid fa-house-chimney"></i>
                        <p>Inicio</p>
                    </a>
                </li>
            <?php
            } else {
            ?>
                <li>
                    <a href="inicio.php">
                        <i class="fa-solid fa-house-chimney"></i>
                        <p>Inicio</p>
                    </a>
                </li>
            <?php
            }
            ?>

            <?php if ($_SESSION['nav'] == 'perfil') {
            ?>
                <li class="active">
                    <a href="perfil.php">
                        <i class="fa-solid fa-user"></i>
                        <p>Perfil</p>
                    </a>
                </li>
                <li>
                <?php
            } else {
                ?>
                <li>
                    <a href="perfil.php">
                        <i class="fa-solid fa-user"></i>
                        <p>Perfil</p>
                    </a>
                </li>
            <?php
            }
            ?>

            <?php if ($_SESSION['nav'] == 'matches') {
            ?>
                <li class="active">
                    <a href="matches.php">
                        <i class="fa-solid fa-circle-heart"></i>
                        <p>Mis Matches</p>
                    </a>
                </li>
                <li>
                <?php
            } else {
                ?>
                <li>
                    <a href="matches.php">
                        <i class="fa-solid fa-circle-heart"></i>
                        <p>Mis Matches</p>
                    </a>
                </li>
            <?php
            }
            ?>

            <?php if ($_SESSION['nav'] == 'chats') {
            ?>
                <li class="active">
                    <a href="chats.php">
                    <i class="fa-solid fa-comments"></i>
                        <p>Chats</p>
                    </a>
                </li>
                <li>
                <?php
            } else {
                ?>
                <li>
                    <a href="chats.php">
                    <i class="fa-solid fa-comments"></i>
                        <p>Chats</p>
                    </a>
                </li>
            <?php
            }
            ?>

            <?php if ($_SESSION['nav'] == 'historial') {
            ?>
                <li class="active">
                    <a href="historial.php">
                        <i class="fa-solid fa-folder-heart"></i>
                        <p>Historiales</p>
                    </a>
                </li>
            <?php
            } else {
            ?>
                <li>
                    <a href="historial.php">
                        <i class="fa-solid fa-folder-heart"></i>
                        <p>Historiales</p>
                    </a>
                </li>
            <?php
            }
            ?>



            <?php if ($_SESSION['nav'] == 'config') {
            ?>
                <li class="active">
                    <a href="config.php">
                        <i class="fa-solid fa-gear"></i>
                        <p>Configuraciones</p>
                    </a>
                </li>
            <?php
            } else {
            ?>
                <li>
                    <a href="config.php">
                        <i class="fa-solid fa-gear"></i>
                        <p>Configuraciones</p>
                    </a>
                </li>
            <?php
            }
            ?>
        </ul>
        <center>
            <img src="../assets/img/DateLab.svg">
        </center>
    </div>
</div>